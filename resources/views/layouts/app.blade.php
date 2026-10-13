
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'CineList')</title>

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(10deg, #0066FF, #00B7FF, #9EEFFF);
            color: #363636;
        }

        nav {
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            background: #000045;
            color: #FFFFFF;
        }

        nav a, .btn {
            color: white;
            text-decoration: none;
        }

        .brand { 
            color: #ffffff; 
            font-weight: bold;
            font-size: large;
        }

         .brandjenis { 
            color: #17365D; 
            font-weight: bold;
        }

        .container {
            width: 84%;
            max-width: 1200px;
            margin: 40px auto;
        }

        .hero {
            padding: 55px 35px;
            background: linear-gradient(135deg, #202e4b, #111827);
            border-radius: 18px;
        }

        .muted { 
            color: #363636; 
            line-height: 1.8; 
    }
        .mutedhome { 
            color: #ffffff; 
            line-height: 1.8; 
    }

        .btn {
            background: #0066FF;
            color: #FFFFFF;
            border: none;
            border-radius: 8px;
            padding: 10px 16px;
            cursor: pointer;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
        }

        .card {
        background: #FFFFFF;
        color: #17365D;
        border: 1px solid #DCEBFA;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 102, 255, 0.10);
        }

        .poster {
            width: 100%;
            height: 320px;
            object-fit: cover;
        }

        .content { padding: 18px; }

        .detail {
            display: grid;
            grid-template-columns: minmax(220px, 320px) 1fr;
            gap: 32px;
            color: #363636;
        }

        .detail .poster { 
            height: auto; 
        }

        .detail p {
            color: #FFFFFF;
        }

        footer {
            padding: 25px;
            text-align: center;
            color: #b8c2d8;
        }

        h1{
            color: #ffffff;
        }

    </style>
</head>
<body>
    <nav>
        <a class="brand" href="{{ route('home') }}">PLUSPLUS22</a>
        <a href="{{ route('film.index') }}">Film & Serial</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        CineList &copy; {{ date('Y') }} — Katalog Film dan Serial
    </footer>
</body>
</html>
