<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Login Page</title>
</head>
<style>
    body {
        background-color: lightgreen;
        background-image: url(image5.jpg);
        background-size: 140%;
        background-repeat: no-repeat;
        background-color: #f5f5f5; /* Light grey background for the body */
        margin: 0; /* Remove default margin */
        font-family: 'Arial', sans-serif; /* Use a common sans-serif font */
    }

    h1 {
        text-align: center; /* Align the h1 tag to the center */
        font-size: 50px; /* Make the font size bigger */
        font-family: 'Arial', sans-serif; /* Change 'Your New Font' to the desired font name */
        color: #916f6f; /* Dark nude color for the h1 tag */
    }
    h2 {
        text-align: center; /* Align the h1 tag to the center */
        font-size: 36px; /* Make the font size bigger */
        font-family: 'Arial', sans-serif; /* Change 'Your New Font' to the desired font name */
        color: grey; /* Dark nude color for the h1 tag */
    }

    .login-box {
        background-color: #e0dcd9; /* Light nude color for the login box */
        width: 300px;
        margin: auto;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
        text-align: center;
    }

    .login-box h1 {
        color: #916f6f; /* Dark nude color for the login header */
        font-size: 24px;
        margin-bottom: 20px;
    }

    .textbox {
        position: relative;
        margin-bottom: 20px;
    }

    .textbox i {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
        color: #916f6f; /* Dark nude color for the icon */
    }

    .textbox input {
        width: calc(100% - 30px);
        padding: 10px;
        border: none;
        border-bottom: 1px solid #b3aca7; /* Light grey border for the input */
        outline: none;
        font-size: 16px;
    }

    .button {
        width: 100%;
        padding: 15px;
        color: #fff; /* White text color for the button */
        background-color: #916f6f; /* Dark nude color for the button */
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
    }

    .textbox button {
        background: none;
        border: none;
        color: #916f6f; /* Dark nude color for the button text */
        cursor: pointer;
        font-size: 16px;
        text-decoration: underline;
    }

    .signup-link {
        text-align: center;
        margin-top: 20px;
        color: #916f6f; /* Dark nude color for the signup link */
    }

    .signup-link a {
        color: #916f6f; /* Dark nude color for the signup link */
        text-decoration: underline;
    }
</style>

<body>
    <h1>JOB APPLICATION</h1>
    <h2>ADMIN LOGIN</h2>
    <form action="validate1.php" method="post">
        <div class="login-box">
            <h1>Login</h1>

            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username" name="username" value="">
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="password" value="">
            </div>

            <!-- Add a dropdown menu for user type -->
            

            <input class="button" type="submit" name="login" value="Sign In">

            <!-- Add a button for admin login -->
            
        </div>
    </form>

   
</body>

</html>
