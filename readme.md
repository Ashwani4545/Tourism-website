# Tourism Website

## Overview
This is a fully functional tourism website that allows users to explore attractions, book services, and access an admin panel for management.

## Features
- **User Panel**: View attractions, book cabs, ferries, and tours.
- **Admin Panel**: Manage users, attractions, and bookings.
- **Authentication**: Secure login system for users and admins.
- **Responsive Design**: Built with Bootstrap for mobile-friendliness.
- **Security**: `.htaccess` protection for sensitive files.

## Installation
1. Clone the repository:
   ```sh
   git clone https://github.com/your-repo/tourism-website.git
   ```
2. Move into the project directory:
   ```sh
   cd tourism-website
   ```
3. Set up the database:
   - Import `database.sql` into your MySQL database.
   - Update `config/db_connect.php` with your database credentials.

4. Start a local server (using XAMPP, WAMP, or MAMP).

5. Open the website in a browser:
   ```sh
   http://localhost/tourism-website/
   ```

## Admin Access
- Admin login: `http://localhost/tourism-website/admin.php`
- Default Admin Credentials:
  - **Email**: `admin@example.com`
  - **Password**: `admin123`

## File Structure
```
/tourism_website
│── /assets
│── /includes
│── /pages
│── /admin
│── index.php
│── attractions.php
│── services.php
│── contact.php
│── register.php
│── login.php
│── admin.php
│── .htaccess
│── README.md
```

## Contributing
Feel free to submit issues or pull requests to improve the project.

## License
This project is open-source and available under the MIT License.
