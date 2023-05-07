# User Registration Form (No Database Connection)

This is a simple user registration form written in PHP that allows users to register by providing a username, email, and password. This version of the form does not include a database connection, making it suitable for testing or scenarios where you want to handle the registration logic without storing user data in a database.

## Usage

1. Fill in the required fields: Username, Email, and Password.
2. Click the "Register" button to submit the form.
3. The form data is validated to ensure all required fields are filled and the email has a valid format.
4. If the data is valid, a success message will be displayed.
5. If any errors occur, such as empty fields or an invalid email format, an error message will be shown.

Please note that this version of the form does not store user data or perform any database operations. It's up to you to customize the code in the designated area marked with `// TODO` comments to implement the desired registration logic, such as storing data in a database or performing additional checks.

## Prerequisites

- PHP should be installed and configured on your local development environment or server.

## Running the Form

1. Save the PHP code to a file with a `.php` extension (e.g., `registration.php`).
2. Open the file in a web browser, typically by accessing `http://localhost/registration.php` or the corresponding URL based on your local web server setup.
3. The registration form will be displayed, allowing you to fill in the required fields and submit the form.

## Customization

- You can modify the form fields, their labels, and their validation rules to suit your requirements.
- You can add additional checks, validation logic, or processing steps in the designated area marked with `// TODO` comments to customize the registration process.
