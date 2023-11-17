<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Voyage Verse</title>
    <link rel="stylesheet" href="styll.css">
    <style>
        
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #cccccc, #ffffff);
            background-image: url('https://i.pinimg.com/564x/a5/66/8a/a5668a935d26ab2348a3b9a8c2b504f8.jpg');
        }
        
        .contact {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            text-align: center;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .contact h2 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }
        
        .contact p {
            font-size: 18px;
            color: #555;
            margin-bottom: 40px;
        }
        footer {
        color: white; /* Set the text color to white */
    }
        /* Style for the success message */
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Generate CSS for success message if form is submitted
            echo '.success-message {
                font-size: 24px;
                color: #27ae60; /* Green color for success message */
            }';
        }
        ?>
    </style>
</head>
<body>
    <header>
        <!-- Include the navigation menu (same as in your main page) -->
        <!-- You can reuse the navigation menu code from your main page here -->
    </header>

    <section class="contact">
        <h2>Contact Us</h2>
        <p>Have questions or need assistance with your travel plans? Reach out to us! We're here to help.</p>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Display a success message
            echo '<p class="success-message">We will contact you soon. Thank you!</p>';
        }
        ?>

    </section>

    <footer>
        <p>&copy; 2023 Your Travel Company. All Rights Reserved.</p>
    </footer>
</body>
</html>
