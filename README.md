# PoppinVans Cafe Website

A web-based application for PoppinVans, a dessert cafe, allowing users to browse the menu, register accounts, log in, and place orders.

## Features

- **User Authentication**: Register and login functionality for user accounts.
- **Menu Display**: View available desserts and bakery items.
- **Order System**: Place orders after logging in.
- **Account Management**: Update profile information and manage orders.
- **Responsive Design**: Styled with CSS for a pleasant user experience.

## Technologies Used

- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript
- **Icons**: Font Awesome

## Prerequisites

- A web server with PHP support (e.g., Apache)
- MySQL database server
- Web browser

## Installation and Setup

1. **Clone the Repository**:
   ```
   git clone https://github.com/reniii-hash/cafe-website.git
   cd cafe-website
   ```

2. **Set Up Local Server**:
   - Install and start a local web server like XAMPP (for Windows) or MAMP (for macOS).
   - Ensure Apache and MySQL services are running.

3. **Database Setup**:
   - Open phpMyAdmin (usually at `http://localhost/phpmyadmin`).
   - Create a new database named `poppinvans`.
   - The application will automatically create the necessary tables (`registerdata`) when accessed.

4. **Place Files**:
   - Copy the `poppinvans` folder to your web server's document root (e.g., `C:\xampp\htdocs\` for XAMPP).

5. **Access the Application**:
   - Open your web browser and go to `http://localhost/poppinvans/MAIN.html`.

## Usage

- **Home Page**: Navigate to `MAIN.html` for the welcome page.
- **Menu**: Click on "Menu" to view available items.
- **Login/Register**: Use the login link to access user features.
- **Ordering**: After logging in, access the order page to place orders.

## File Structure

```
poppinvans/
├── MAIN.html          # Home page
├── menu.html          # Menu page
├── login.php          # Login page
├── register.php       # Registration page
├── order.php          # Order placement page
├── logged.php         # Post-login page
├── update.php         # Update profile
├── connect.php        # Database connection
├── logout.php         # Logout script
├── Various CSS files  # Styling
├── rfv.js             # JavaScript validation
└── for project/       # Images and assets
```


## License

This project is open-source. Please check the repository for license details.

## Contact

For questions or support, please contact the repository owner.
