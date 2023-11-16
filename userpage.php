<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Homepage</title>
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
        }

        .container {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
        }

        .job-listing {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            cursor: pointer;
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

        #jobInformation {
            display: none;
        }

        #searchOption {
            display: none;
        }

        .company-details {
            display: none;
            text-align: center; /* Center-align the content */
        }

        .company-details img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        
    </style>
</head>

<body>

    <header>
        <h1>Welcome to Job Portal</h1>
    </header>

    <nav>
        <a href="#" onclick="showJobList()">Home</a>
        <a href="#" onclick="showSearchOption()">Search Jobs</a>
        <a href="#" onclick="showApplyJobs()">Apply Jobs</a>
        <a href="logout.php">Logout</a>
    </nav>

    <div class="container" id="jobList">
        <h2>Latest Job Listings</h2>

        <div class="job-listing">
            <h3>Job Title 1</h3>
            <p>Location: City A</p>
            <p>Category: IT</p>
            <button onclick="showJobInformation()">Apply Now</button>
        </div>

        <div class="job-listing">
            <h3>Job Title 2</h3>
            <p>Location: City B</p>
            <p>Category: Marketing</p>
            <button onclick="showJobInformation()">Apply Now</button>
        </div>

        <div class="job-listing">
            <h3>Job Title 3</h3>
            <p>Location: City C</p>
            <p>Category: Finance</p>
            <button onclick="showJobInformation()">Apply Now</button>
        </div>
    </div>

    <div class="container" id="searchOption">
        <h2>Search Jobs</h2>
        <form onsubmit="searchJobs(); return false;">
            <label for="searchInput">Search:</label>
            <input type="text" id="searchInput" name="searchInput">
            <button type="submit">Search</button>
        </form>
        <p id="searchMessage"></p>
    </div>

    <div class="container" id="jobInformation" style="display: none;">
        <h2>Job Information</h2>
        <p>Job Title: Software Developer</p>
        <p>Location: City C</p>
        <p>Category: Software Development</p>
        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac ex maximus, ultrices justo at, aliquam odio.</p>
        <button onclick="showCompanyDetails()">View Company Details</button>
        <button onclick="showJobList()">Back to Job List</button>
    </div>

    <div class="company-details" id="companyDetails" style="display: none;">
        <h2>Company Details</h2>
        <img src="image6.jpeg" alt="Company 1" width="300">
        <p>Company Name: ABC Tech Solutions</p>
        <p>Location: City C</p>
        <p>About: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <button onclick="showJobInformation()">Back to Job Information</button>
    </div>

    <footer>
        &copy; 2023 Job Portal
    </footer>

    <script>
        function showJobList() {
            document.getElementById('jobList').style.display = 'block';
            document.getElementById('searchOption').style.display = 'none';
            document.getElementById('jobInformation').style.display = 'none';
            document.getElementById('companyDetails').style.display = 'none';
        }

        function showSearchOption() {
            document.getElementById('jobList').style.display = 'none';
            document.getElementById('searchOption').style.display = 'block';
            document.getElementById('jobInformation').style.display = 'none';
            document.getElementById('companyDetails').style.display = 'none';
        }

        function showApplyJobs() {
            document.getElementById('jobList').style.display = 'block';
            document.getElementById('searchOption').style.display = 'none';
            document.getElementById('jobInformation').style.display = 'none';
            document.getElementById('companyDetails').style.display = 'none';
        }

        function showJobInformation() {
            document.getElementById('jobList').style.display = 'none';
            document.getElementById('searchOption').style.display = 'none';
            document.getElementById('jobInformation').style.display = 'block';
            document.getElementById('companyDetails').style.display = 'none';
        }

        function showCompanyDetails() {
            document.getElementById('jobList').style.display = 'none';
            document.getElementById('searchOption').style.display = 'none';
            document.getElementById('jobInformation').style.display = 'none';
            document.getElementById('companyDetails').style.display = 'block';
        }

        function searchJobs() {
            const searchInput = document.getElementById('searchInput').value;
            document.getElementById('searchMessage').innerHTML = `Searching for jobs related to: ${searchInput}...`;
            // Simulate search, replace this with your actual search logic
            setTimeout(() => {
                document.getElementById('searchMessage').innerHTML = `No results found for: ${searchInput}`;
            }, 2000);
        }
        // ... (unchanged JavaScript) ...
    </script>

</body>

</html>





