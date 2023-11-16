<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            background-color: lightgreen;
            background-image: url(image3.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        nav {
            background-color: #2c3e50;
            color: #fff;
            padding: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            cursor: pointer;
        }

        .container {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
        }

        .section {
            display: none;
        }

        footer {
            background-color: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <header>
        <h1>Welcome to Admin Panel</h1>
    </header>

    <nav>
        <a onclick="showDirectors()">Directors</a>
        <a onclick="showUsers()">Users</a>
        <a onclick="showEdit()">Edit</a>
        <a onclick="showReport()">Report</a>
        <a href="logout.php">Logout</a>
    </nav>

    <div class="container">
        <div id="directorsSection" class="section">
            <h2>Director Information</h2>
            <div class="director-listing" onclick="showDirectorInformation('John Doe', 'Tech Corp', 'Male', '45')">
            <h3>John Doe</h3>
            <p>Company: Tech Corp</p>
            <p>Gender: Male</p>
            <p>Age: 45</p>
        </div>

        <div class="director-listing" onclick="showDirectorInformation('Jane Smith', 'Innovate Solutions', 'Female', '40')">
            <h3>Jane Smith</h3>
            <p>Company: Innovate Solutions</p>
            <p>Gender: Female</p>
            <p>Age: 40</p>
        </div>

        </div>

        <div id="usersSection" class="section">
            <h2>User Information</h2>
            <div class="user-listing" onclick="showUserInformation('Alex Johnson', 'B.Tech', '3')">
            <h3>Alex Johnson</h3>
            <p>Qualification: B.Tech</p>
            <p>Jobs Applied: 3</p>
        </div>

        <div class="user-listing" onclick="showUserInformation('Emily Davis', 'MBA', '2')">
            <h3>Emily Davis</h3>
            <p>Qualification: MBA</p>
            <p>Jobs Applied: 2</p>
        </div>
        </div>

        <div id="editSection" class="section">
            <!-- Placeholder for Edit Section -->
        </div>

        <div id="reportSection" class="section">
            <!-- Placeholder for Report Section -->
        </div>

        <div id="directorInformation" class="section">
            <!-- Placeholder for Director Information -->
        </div>

        <div id="userInformation" class="section">
            <!-- Placeholder for User Information -->
        </div>
    </div>

    <footer>
        &copy; 2023 Admin Panel
    </footer>

    <script>
        function showDirectors() {
            document.querySelectorAll('.section').forEach(section => section.style.display = 'none');
            document.getElementById('directorsSection').style.display = 'block';
        }

        function showUsers() {
            document.querySelectorAll('.section').forEach(section => section.style.display = 'none');
            document.getElementById('usersSection').style.display = 'block';
        }

        function showEdit() {
            document.querySelectorAll('.section').forEach(section => section.style.display = 'none');
            document.getElementById('editSection').style.display = 'block';
            document.getElementById('reportSection').style.display = 'none';
            document.getElementById('directorInformation').style.display = 'none';
            document.getElementById('userInformation').style.display = 'none';

            // Placeholder for edit functionality
            document.getElementById('editSection').innerHTML = '<h2>Edit Section</h2><p>Edit functionality goes here...</p>';
        }

        function showReport() {
            document.querySelectorAll('.section').forEach(section => section.style.display = 'none');
            document.getElementById('directorsSection').style.display = 'none';
            document.getElementById('usersSection').style.display = 'none';
            document.getElementById('editSection').style.display = 'none';
            document.getElementById('reportSection').style.display = 'block';
            document.getElementById('directorInformation').style.display = 'none';
            document.getElementById('userInformation').style.display = 'none';

            // Placeholder for report functionality
            document.getElementById('reportSection').innerHTML = '<h2>Report Section</h2><p>Report functionality goes here...</p>';
        }

        function showDirectorInformation(directorName) {
            document.querySelectorAll('.section').forEach(section => section.style.display = 'none');
            document.getElementById('directorInformation').style.display = 'block';

            // Placeholder for director information
            document.getElementById('directorInformation').innerHTML = `<h2>${directorName}'s Information</h2>
                                                                      <p>Director Information goes here...</p>`;
        }

        function showUserInformation(userName) {
            document.querySelectorAll('.section').forEach(section => section.style.display = 'none');
            document.getElementById('userInformation').style.display = 'block';

            // Placeholder for user information
            document.getElementById('userInformation').innerHTML = `<h2>${userName}'s Information</h2>
                                                                   <p>User Information goes here...</p>`;
        }
    </script>

</body>

</html>
