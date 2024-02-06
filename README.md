# WSD User Management System (UMS)

This is a simple User Management System developed using PHP 8 and MySQL 8.

## Installation

1. **Clone the repository**: 
    ```
   https://github.com/mh-shuvo/wsd_ums.git
    ```

2. **Update Configuration**:
    - Open `config/config.php` file.
    - Update the following configuration variables:
        - `DB_HOST`: Database host (e.g., localhost).
        - `DB_USER`: Database username.
        - `DB_PASSWORD`: Database password.
        - `DB_NAME`: Database name.
        - `URLROOT`: Base URL of your application (e.g., `http://localhost/wsd_ums`).
    - Save the file.

3. **Update .htaccess File**:
    - Open `public/.htaccess` file.
    - Update the `RewriteBase` to match your project directory.
    - Save the file.

4. **Import Database**:
    - Import the provided SQL file (`wsd_users.sql`) into your MySQL database.

5. **Admin Credentials**:
    - Username: `admin`
    - Password: `admin`
  
6. **Other Users Credentials**:
    - Usernames: `user1` to `user50`
    - Password for all users: `123456`

## Usage

1. **Login**:
    - Access the application using the base URL you specified (`URLROOT`).
    - Use the provided admin credentials or any user credentials to log in.

2. **Functionality**:
    - Once logged in, the user can perform updating user information, and deleting user accounts and change their password.
    - User listing page displays a list of all users with their basic information in a tabular format.
    - Admin can search the user by their name or email.


## Contributing

Contributions are welcome! Feel free to submit issues or pull requests if you encounter any bugs or have suggestions for improvements.
