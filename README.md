# E-Commerce Project

## Overview
This is an e-commerce web application designed to facilitate online shopping. Users can browse through various categories of products, view product details, and make purchases. The application includes an admin interface for managing categories and products.

## Features
- **User Interface:**
  - Landing page displaying categories and products.
  - Product pages with detailed information.
  - User registration and login.


- **Admin Interface:**
  - Secure login for administrators.
  - Category Management: Add, edit, and delete categories.
  - Product Management: Add, edit, and delete products for each category.
  
  
- **Security:**
  - User authentication and authorization.
  - Password hashing for enhanced security.

## Installation
1. Clone the repository:
   ```
   git clone https://github.com/your_username/e-commerce.git
   ```
2. Navigate to the project directory:
   ```
   cd e-commerce
   ```
3. Install dependencies:
   ```
   npm install
   ```
4. Set up the database:
   - Create a MySQL database named `ecommerce`.
   - Import the database schema from `ecommerce.sql`.

5. Configure environment variables:
   - Create a `.env` file in the root directory.
   - Add the following variables:
     ```
     DB_HOST=localhost
     DB_USER=username
     DB_PASS=password
     DB_NAME=ecommerce
     ```
6. Start the server:
   ```
   npm start
   ```
7. Access the application in your web browser:
   ```
   http://localhost:3000
   ```

## Usage
- **User Access:**
  - Visit the website landing page to browse products and make purchases.

- **Admin Access:**
  - Visit the admin login page (`/admin/login`).
  - Use the following credentials:
    - Email: admin@gmail.com
    - Password: 123456
  - Once logged in, access the admin dashboard to manage categories and products

## Technologies Used
- Frontend:
  - HTML, CSS, JavaScript
  - Bootstrap
  
- Backend:
  - PHP
  - MySQL
  

  

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
