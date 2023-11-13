<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Register Hill Chipper</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        header {
            width: 100%;
            height: 100vh;
        }

        /* Background image styles */
        #intro {
            background-image: url('your-image-url.jpg'); /* Replace 'your-image-url.jpg' with the path to your background image */
            background-size: cover;
            background-position: center;
            position: relative;
        }

        /* Mask styles */
        .mask {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Container styles */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0 auto;
        }

        /* Form styles */
        form {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Title styles */
        h2 {
            text-align: center;
            color: #333;
        }

        /* Input styles */
        .form-outline {
            position: relative;
            margin-bottom: 20px;
        }

        .form-control {
            border: none;
            border-bottom: 2px solid #333;
            border-radius: 0;
            box-shadow: none;
        }

        .form-label {
            position: absolute;
            top: 10px;
            left: 0;
            color: #555;
            transition: top 0.3s ease, font-size 0.3s ease;
        }

        .form-control:focus~.form-label,
        .form-control:not(:placeholder-shown)~.form-label {
            top: -15px;
            font-size: 12px;
            color: #007bff;
        }

        /* Button styles */
        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Link styles */
        p a {
            color: #007bff;
            text-decoration: none;
            text-align: center;
            display: block; /* Ensure the link takes full width */
        }

        p a:hover {
            text-decoration: underline;
        }

        /* Copyright styles */
        .text-center {
            color: #333;
            background-color: rgba(0, 0, 0, 0.2);
            padding: 15px;
            text-align: center; /* Center the text horizontally */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%; /* Ensure the container takes full height for vertical centering */
        }
    </style>
</head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Background image -->
        <div id="intro" class="bg-image shadow-2-strong">
            <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-md-8">
                            <form method="post" action="register_function.php" class="bg-white rounded shadow-5-strong p-5">
                                <h2>Register</h2>
                                <!-- Username input -->
                                <div class="form-outline mb-4">
                                    <input type="text" name="username" id="username" required class="form-control" />
                                    <label class="form-label" for="username">Username</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4 position-relative">
                                    <input type="password" name="password" id="password" required class="form-control" />
                                    <label class="form-label" for="password">Password</label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" value="Register" class="btn btn-primary btn-block">Sign up</button>
                                <p><a href="index.php">Have already an account? Login</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>
    <!--Main Navigation-->
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        Bynzz. © 2023 Copyright
        <a class="text-dark"></a>
    </div>
    <!-- Copyright -->
</body>

</html>
