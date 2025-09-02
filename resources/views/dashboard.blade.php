<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            margin: 0; /* remove default margin */
        }
        nav {
            background: red;
            color: white;
            padding: 15px;
            width: 100%;
            
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }
        .wrapper {
            display: flex;
            min-height: calc(100vh - 60px); /* leave space for navbar */
        }
        aside {
            width: 200px;
            background: #2d3748;
            color: white;
            padding: 10px;
        }
        main {
            flex: 1;
            padding: 20px;
        }

      
    </style>
</head>
<body>
    <!-- Topbar -->
    <nav>
        <ul>
            <li>Course</li>
            <li>Teacher</li>
            <li>Students</li>
        </ul>
    </nav>

    <!-- Sidebar + Main -->
    <div class="wrapper">
        <!-- Sidebar -->
        <aside>
            <h2>Dashboard</h2>
            <ul style="list-style:none; padding:0;">
                <li><a href="{{ route('student') }}" style="color:white; font-size:30px;">Students</a></li>
                <li><a href="" style="color:white; font-size:30px;">Profile</a></li>
                <li><a href="{{route('register')}}" style="color:aqua; font-size:20px;">Register</a></li>
                <li><a href="{{route('login')}}" style="color:aquamarine; font-size:20px;">Login</a></li>
                <li>
                    <form method="POST" action="">
                        @csrf
                        <button type="submit" style="background:none; border:none; color:white; cursor:pointer;">
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main>
            <div style="background:#f7fafc; padding:15px; border-radius:8px;">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
