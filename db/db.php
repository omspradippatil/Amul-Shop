<?php
// Database configuration
class Database {
    // Database credentials for XAMPP
    private $host = "localhost";
    private $db = "amul";
    private $user = "root";
    private $pass = "";
    private $conn = null;
    
    // Method to get connection
    public function connect() {
        try {
            // Set error mode
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            
            // Create connection
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
            
            // Check connection
            if ($this->conn->connect_error) {
                throw new Exception("Database connection failed: " . $this->conn->connect_error);
            }
            
            // Set charset
            $this->conn->set_charset("utf8");
            
            return $this->conn;
        } catch (Exception $e) {
            // Log error but don't terminate script
            $this->logError($e->getMessage());
            
            // Return null instead of dying - allows page to still render
            return null;
        }
    }
    
    // Add method to log errors
    private function logError($message) {
        // Simple error logging - append to error log file
        $logFile = __DIR__ . '/db_errors.log';
        $timestamp = date('Y-m-d H:i:s');
        $logMessage = "[$timestamp] $message\n";
        error_log($logMessage, 3, $logFile);
    }
}

// Create a global connection variable that can be used by other scripts
$database = new Database();
$conn = $database->connect();

// If connection failed, you can add additional handling here
if ($conn === null) {
    // Log this major error - could redirect to an error page if needed
    error_log("Critical database connection error in " . $_SERVER['SCRIPT_NAME']);
}
?>
