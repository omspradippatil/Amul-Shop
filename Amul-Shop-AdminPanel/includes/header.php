<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'Amul Admin Panel'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: white;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            margin: 2px 0;
            transition: all 0.3s;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.2);
        }
        .main-content {
            padding: 20px;
        }
        .header-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px;
            margin-bottom: 20px;
        }
        .stats-card {
            border-radius: 15px;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .stats-card:hover {
            transform: translateY(-5px);
        }
        .table-card {
            border-radius: 15px;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .amul-logo {
            font-weight: bold;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar">
                <div class="p-3">
                    <h4 class="amul-logo">
                        <i class="fas fa-dairy"></i> AMUL
                    </h4>
                    <p class="small mb-0">Admin Panel</p>
                </div>
                
                <nav class="nav flex-column p-3">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>" href="dashboard.php">
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact_messages.php' ? 'active' : ''; ?>" href="contact_messages.php">
                        <i class="fas fa-envelope"></i> Contact Messages
                    </a>
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'product_enquiries.php' ? 'active' : ''; ?>" href="product_enquiries.php">
                        <i class="fas fa-shopping-cart"></i> Product Enquiries
                    </a>
                    
                    <?php if (isset($_SESSION['username']) && $_SESSION['username'] === 'om'): ?>
                        <hr class="text-white-50">
                        <small class="text-white-50 px-3 mb-2">ADMIN ONLY</small>
                        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'user_management.php' ? 'active' : ''; ?>" href="user_management.php">
                            <i class="fas fa-users-cog"></i> User Management
                        </a>
                        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'admin_tools.php' ? 'active' : ''; ?>" href="admin_tools.php">
                            <i class="fas fa-tools"></i> Admin Tools
                        </a>
                    <?php endif; ?>
                    
                    <hr class="text-white">
                    <a class="nav-link" href="logout.php">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </nav>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                <!-- Header -->
                <div class="card header-card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="mb-0"><?php echo $page_title ?? 'Dashboard'; ?></h4>
                            <small class="opacity-75"><?php echo $page_subtitle ?? 'Welcome to Amul Admin Panel'; ?></small>
                        </div>
                        <div class="text-end">
                            <small class="opacity-75">Logged in as:</small><br>
                            <strong><?php echo strtoupper($_SESSION['username']); ?></strong>
                            <span class="badge bg-light text-dark ms-2"><?php echo strtoupper($_SESSION['role']); ?></span>
                        </div>
                    </div>
                </div>
