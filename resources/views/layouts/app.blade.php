<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: rgba(82, 111, 77, 0.37);
        }

        .checked {
            color: orange;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #ffffff;
            padding: 20px;
            border-right: 1px solid #ddd;
        }

        .sidebar .logo {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .sidebar .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .sidebar h5 {
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 20px;
            color: #6c757d;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 15px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #000;
            font-size: 16px;
            display: flex;
            align-items: center;
        }

        .sidebar ul li a:hover {
            color: rgb(85, 0, 255);
        }

        .content-area {
            margin-left: 260px;
            padding: 20px;
        }

        .card-image-wrapper {
            margin: 10px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            width: 100%;
            height: auto;
            object-fit: cover;
            display: block;
        }
    </style>
</head>

<body>

<div class="sidebar">
  <div class="logo">
    <img src="{{ asset('images/logo.png') }}" alt="Logo">
    <span class="fw-bold">EcoLearn Initiative</span>
  </div>
  <h5>Overview</h5>
  <ul>
    <li><a href="{{ route('profiles.show') }}">Profil</a></li>
    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('materials.index') }}">Lesson</a></li>
    <li><a href="{{ route('feedback') }}">Feedback</a></li>
    <li><a href="#">Forum</a></li>
    <li><a href="{{ route('activities.index') }}">Riwayat Aktivitas</a></li>
  </ul>
</div>

<div class="content-area">
  @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
