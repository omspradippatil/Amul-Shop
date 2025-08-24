# Amul Shop Admin Panel

A complete PHP admin panel for managing Amul shop contact messages and product enquiries.

## Features

- **Secure Login System**: Admin and Guest user roles with database storage
- **User Management**: Create and delete users (Admin only)
- **Admin Tools**: Bulk operations and database management (Admin only)
- **Data Export**: CSV export functionality (Admin only)
- **Record Management**: Delete individual records (Admin only)
- **Dashboard**: Overview with statistics and recent activity
- **Contact Messages Management**: View all contact form submissions
- **Product Enquiries Management**: View all product enquiry submissions
- **Responsive Design**: Built with Bootstrap 5
- **Data Tables**: Sortable, searchable tables with pagination
- **Session Management**: Secure user authentication
- **SQL Injection Protection**: Uses prepared statements

## Installation Instructions

### Prerequisites

1. **XAMPP** installed on your system
2. **MySQL/MariaDB** running
3. **Apache** server running

### Setup Steps

1. **Copy Files**
   ```
   Copy the entire "Amul-Shop-AdminPanel" folder to your XAMPP htdocs directory:
   C:\xampp\htdocs\Amul-Shop-AdminPanel\
   ```

2. **Database Setup**
   - Open phpMyAdmin: `http://localhost/phpmyadmin`
   - Create a database named `amul`
   - The application expects these tables to exist:
     ```sql
     CREATE TABLE contact_messages (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(100) NOT NULL,
         phone VARCHAR(15) NOT NULL,
         email VARCHAR(100),
         subject VARCHAR(50) NOT NULL,
         message TEXT NOT NULL,
         consent BOOLEAN NOT NULL DEFAULT TRUE,
         submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );

     CREATE TABLE product_enquiries (
       id INT(11) NOT NULL AUTO_INCREMENT,
       name VARCHAR(100) NOT NULL,
       phone VARCHAR(20) NOT NULL,
       email VARCHAR(100) DEFAULT NULL,
       preferred_contact VARCHAR(20) NOT NULL,
       product_category VARCHAR(50) NOT NULL,
       product_name VARCHAR(100) DEFAULT NULL,
       enquiry_type VARCHAR(50) NOT NULL,
       urgency VARCHAR(20) DEFAULT 'normal',
       message TEXT NOT NULL,
       consent TINYINT(1) NOT NULL DEFAULT 0,
       created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
       PRIMARY KEY (id)
     );
     ```
   - **Note**: The `users` table for user management will be created automatically when you first access the User Management page.

3. **Access the Application**
   - Open your web browser
   - Navigate to: `http://localhost/Amul-Shop-AdminPanel`
   - You will be redirected to the login page

## Login Credentials

### Admin User
- **Username**: `om`
- **Password**: `om27031980`
- **Role**: Full access to all features

### Guest User
- **Username**: `guest`
- **Password**: `1234`
- **Role**: View-only access

## File Structure

```
Amul-Shop-AdminPanel/
├── config/
│   └── database.php          # Database connection configuration
├── includes/
│   ├── session.php          # Session management functions
│   ├── header.php           # Common header template
│   └── footer.php           # Common footer template
├── index.php                # Redirects to login
├── login.php                # Login page
├── auth.php                 # Authentication handler
├── logout.php               # Logout handler
├── dashboard.php            # Main dashboard
├── contact_messages.php     # Contact messages listing
├── product_enquiries.php    # Product enquiries listing
├── user_management.php      # User management (Admin only)
├── admin_tools.php          # Admin tools and bulk operations (Admin only)
├── admin_actions.php        # AJAX handler for admin operations
├── export.php              # CSV export functionality (Admin only)
└── README.md               # This file
```

## Database Configuration

The application connects to MySQL with these default settings:
- **Host**: localhost
- **Username**: root
- **Password**: (blank)
- **Database**: amul

To modify these settings, edit `config/database.php`.

## Features Overview

### Dashboard
- Statistics cards showing total counts
- Recent contact messages (last 5)
- Recent product enquiries (last 5)

### Contact Messages
- Complete listing of all contact form submissions
- Sortable and searchable data table
- Modal popup for long messages
- Contact information with clickable phone/email links

### Product Enquiries
- Complete listing of all product enquiry submissions
- Color-coded urgency levels
- Product category and enquiry type badges
- Modal popup for detailed enquiry view

### Admin Tools (Admin Only)
- **Bulk Operations**: Clear all records or records older than X days
- **Database Backup**: Create MySQL database backups
- **System Statistics**: Advanced analytics and metrics
- **Export Data**: Download records as CSV files

### Record Management (Admin Only)
- Delete individual contact messages and product enquiries
- Bulk delete operations with confirmation dialogs
- Protected deletion (cannot delete main admin user)

### User Management (Admin Only)
- Create new admin or guest users
- Delete existing users (except main admin 'om')
- Password hashing for security
- User activity tracking

### Security Features
- Session-based authentication
- Prepared SQL statements
- Input sanitization
- Role-based access control
- Password hashing

## Browser Compatibility

- Chrome (recommended)
- Firefox
- Safari
- Edge

## Troubleshooting

### Common Issues

1. **"Connection error" message**
   - Ensure MySQL is running in XAMPP
   - Check database name is exactly "amul"
   - Verify database credentials in `config/database.php`

2. **"Page not found" error**
   - Ensure files are in correct directory: `C:\xampp\htdocs\Amul-Shop-AdminPanel\`
   - Start Apache server in XAMPP

3. **Login not working**
   - Use exact credentials (case-sensitive)
   - Clear browser cache and cookies

4. **Tables not displaying data**
   - Ensure database tables exist with correct structure
   - Check if data exists in the tables

### Support

For technical support or questions about this admin panel, please check:
1. XAMPP is properly installed and running
2. Database connection settings are correct
3. All files are in the correct directory structure

## Version

Version 1.0 - June 2025
