<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>

    {{-- <link rel="stylesheet" href="/css/sidebar.css"> --}}


    {{-- <link href="{{asset('/css/sidebar.css')}}" rel="stylesheet"> --}}
</head>

<style>
    .class-container {
        border: 2px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        margin-top: 20px;
        margin: 10px auto;
        max-width: 1100px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }



    /* Sidebar styles */
    .sidebar {
        width: 250px;
        background-color: #333;
        color: white;
        padding: 20px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
    }

    .sidebar h3 {
        margin-top: 0;
        padding-bottom: 10px;
        border-bottom: 1px solid white;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .sidebar ul li {
        margin-bottom: 10px;
    }

    .sidebar a {
        text-decoration: none;
        color: white;
        transition: color 0.3s;
    }

    .sidebar a:hover {
        color: #e74c3c;
    }

    /* Navbar styles */
    .navbar {
        background-color: #34495e;
        color: white;
        padding: 10px 20px;
    }

    .navbar h1 {
        margin: 0;
    }
</style>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Include jQuery (required for Bootstrap's JavaScript components) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>



<body>
    @include('sidebar')

    {{-- <div class="class-container"> --}}
    @yield('content')
    {{-- </div> --}}
</body>

</html>
