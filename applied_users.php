<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        #userList {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .userProfile {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 8px;
        }

        .userProfile a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>User Profiles</h1>

    <div id="userList">
        <div class="userProfile">
            <a href="#" onclick="showProfile(1)">User 1</a>
            <p>Qualification: B.Tech</p>
            <p>Address: New York, USA</p>
            <!-- Add more user information as needed -->
        </div>

        <div class="userProfile">
            <a href="#" onclick="showProfile(2)">User 2</a>
            <p>Qualification: M.Sc</p>
            <p>Address: London, UK</p>
            <!-- Add more user information as needed -->
        </div>

        <div class="userProfile">
            <a href="#" onclick="showProfile(3)">User 3</a>
            <p>Qualification: MBA</p>
            <p>Address: Tokyo, Japan</p>
            <!-- Add more user information as needed -->
        </div>

        <div class="userProfile">
            <a href="#" onclick="showProfile(4)">User 4</a>
            <p>Qualification: PhD</p>
            <p>Address: Sydney, Australia</p>
            <!-- Add more user information as needed -->
        </div>
    </div>

    <script>
        function showProfile(userId) {
            // You can implement logic to show the detailed profile for the selected user.
            // This could involve redirecting to a new page or displaying a modal.
            alert("Show profile for User " + userId);
        }
    </script>
</body>
</html>
