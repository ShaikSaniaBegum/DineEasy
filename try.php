<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Restaurant Table Booking System</title>
    <style>
        .blue-button {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            border: none;
            border-radius: 25px;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .blue-button:hover {
            background-color: white; /* White background on hover */
            color: white; /* Blue text on hover */
            border: 2px solid white; /* Blue border on hover */
        }
        .logo {
            position: fixed;
            top: 50px;
            left: 150px;
            width: 90px; /* Adjust the width as needed */
        }
    </style>
</head>
<body>
    <div class="main">
    <div class="logo">
            <img src="logo.jpg" alt="Restaurant Logo" class="logo">
        </div>
        <!-- Video -->
        <video autoplay loop muted playssinline class="bg__video">
            <source src="7799985-uhd_3840_2160_25fps.mp4" type="video/mp4">
        </video>
        <div class="content">
            <h1> Welcome to DINE EASY</h1>
            <p>
                Your one stop destination for all food items
            </p>
            <button class="blue-button" type="button" onclick="location.href='index.php'">Book a table</button>
        </div>
    </div>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Alkatra&family=Roboto:wght@400;500&family=Sedgwick+Ave+Display&display=swap");

        :root {
            --primary-color: #0ea5e9;
            --primary-color-dark: #0284c7;
            --text-light: #f3f4f6;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Roboto", sans-serif;
        }

        .main {
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3));
            position: relative;
            padding: 0 5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .content {
            text-align: center;
            color: var(--text-light);
        }

        .content h1 span {
            font-size: 5rem;
        }

        .content p {
            font-family: "Alkatra", cursive;
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }

        .content .promo {
            padding: 0.5rem;
            width: 300px;
            margin: auto;
            border-radius: 2rem;
            font-size: 1.2rem;
            font-family: "Alkatra", cursive;
            background-color: var(--primary-color);
            transition: 0.3s;
            cursor: pointer;
        }

        .content .promo:hover {
            background-color: var(--primary-color-dark);
        }

        .bg__video {
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        @media (min-aspect-ratio: 16/9) {
            .bg__video {
                width: 100%;
                height: auto;
            }
        }

        @media (max-aspect-ratio: 16/9) {
            .bg__video {
                width: auto;
                height: 100%;
            }
        }
    </style>
</body>
</html>
