<?php
session_start();
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    if (!empty($username) && !empty($password)) {
        try {
            $database = new Database();
            $db = $database->getConnection();
            
            // Check if users table exists, if not, use fallback authentication
            $table_check = $db->query("SHOW TABLES LIKE 'users'");
            
            if ($table_check->rowCount() > 0) {
                // Use database authentication
                $stmt = $db->prepare("SELECT id, username, password, role FROM users WHERE username = ?");
                $stmt->execute([$username]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                
                if ($user && password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['role'] = $user['role'];
                    $_SESSION['logged_in'] = true;
                    
                    header('Location: dashboard.php');
                    exit();
                } else {
                    $_SESSION['error'] = 'Invalid username or password!';
                }
            } else {
                // Fallback to hardcoded users (for initial setup)
                $valid_users = [
                    'om' => ['password' => 'om27031980', 'role' => 'admin'],
                    'guest' => ['password' => '1234', 'role' => 'guest']
                ];
                
                if (isset($valid_users[$username]) && $valid_users[$username]['password'] === $password) {
                    $_SESSION['user_id'] = $username;
                    $_SESSION['username'] = $username;
                    $_SESSION['role'] = $valid_users[$username]['role'];
                    $_SESSION['logged_in'] = true;
                    
                    header('Location: dashboard.php');
                    exit();
                } else {
                    $_SESSION['error'] = 'Invalid username or password!';
                }
            }
        } catch(PDOException $exception) {
            $_SESSION['error'] = 'Database connection error. Please try again.';
        }
    } else {
        $_SESSION['error'] = 'Please enter both username and password!';
    }
    
    header('Location: login.php');
    exit();
} else {
    header('Location: login.php');
    exit();
}
?>
