<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard </title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/d.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .main-programs {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #FFEEB6;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .main-programs h1 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #4E5EB1;
           
            text-align: center;
        }

        .search-bar {
            position: relative;
            margin-bottom: 20px;
        }

        .search-bar .form-control {
            width: 90%;
            height: 30px;
            padding: 10px 40px 10px 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 25px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #333;
            outline: none;
        }

        .search-bar .form-control::placeholder {
            color: rgba(0, 0, 0, 0.5);
        }

        .search-bar .search-icon {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    background-color: blur; 
    color: black; 
   border: 2px solid #0056b3;
    font-size: 18px;
    border-radius: 50%; /* Makes it a circle */
    width: 36px; /* Set the width of the circle */
    height: 36px; /* Set the height of the circle */
    display: flex;
    align-items: center; /* Vertically center the icon */
    justify-content: center; /* Horizontally center the icon */
    cursor: pointer;
   backdrop-filter: blur(5px); 
}


        .indextul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .indextul li {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .indextul li:hover {
            background-color: #f0f8ff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .indextul li a {
            text-decoration: none;
            color: #FFEEB6
        }

        .indextul li a p {
        	color: #FFEEB6;
            margin: 0;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="{{ route('welcome') }}">
                        <span class="icon">
                            <img src="img/school_logo.png" alt="" srcset="" width="200">
                        </span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <span class="icon">
                            <i class="fa-solid fa-house"></i>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('enroll') }}">
                        <span class="icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </span>
                        <span class="title">Enrollment Form</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-regular fa-rectangle-list"></i>
                        </span>
                        <span class="title">Grades</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('welcome') }}">
                        <span class="icon">
                            <i class="fa-solid fa-bars-progress"></i>
                        </span>
                        <span class="title">CMS</span>
                    </a>
                </li>

                <li>
                    <li>
                        <a href="javascript:void(0);" onclick="logout()" style="text-decoration: none; color: inherit;">
                            <span class="icon">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </span>
                            <span class="title">Sign Out</span>
                        </a>
                    </li>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>
        
<div class="main-programs">
        <h1>Enrollees</h1>

        <!-- Search Form -->
        <form method="GET" action="{{ route('respondents.index') }}" class="search-bar">
            <input type="text" name="search" class="form-control" placeholder="Search by name"
                value="{{ request()->get('search') }}">
            <button type="submit" class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></button> <!-- Search icon -->
        </form>

        <!-- Display the list of respondents -->
       <table class="respondent-table">
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Date of Birth</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($respondents as $respondent)
            <tr>
                <td>{{ $respondent->childFirstName }} {{ $respondent->childLastName }}</td>
                <td>{{ $respondent->dob }}</td>
                <td><a href="{{ route('respondents.show', $respondent->id) }}">View</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

            <!-- Pagination Links -->
            <div>
                {{ $respondents->links() }}
            </div>
        </div>
        </section>
    </div>








        <!-- =========== Scripts =========  -->
        <script src="js/main.js"></script>

        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <script>
            function logout() {
                if (confirm('Are you sure you want to log out?')) {
                    // Use JavaScript to send a POST request to the logout route
                    fetch('{{ route('logout') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
                        }
                    })
                    .then(response => {
                        if (response.ok) {
                            window.location.href = '{{ route('welcome') }}'; // Redirect to the welcome page after logout
                        } else {
                            alert('Logout failed!');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred while logging out.');
                    });
                }
            }
        </script>
        
</body>

</html>
