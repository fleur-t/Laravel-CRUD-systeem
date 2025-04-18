<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Restaurant</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-color: #f8f8f8;
        color: #333;
    }

    header, footer {
        background-color: #333;
        color: white;
        padding: 15px 20px;
        text-align: center;
    }

    nav a {
        color: white;
        margin: 0 10px;
        text-decoration: none;
    }

    main {
        max-width: 700px;
        margin: 30px auto;
        background-color: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    h1 {
        margin-bottom: 20px;
        font-size: 28px;
    }

    form div {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
    }

    textarea {
        height: 120px;
        resize: vertical;
    }

    button {
        background-color: #e67e22;
        color: white;
        padding: 10px 18px;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background-color: #d35400;
    }
</style>

</head>
<body>
    <header>
        <h1>Welkom bij ons restaurant</h1>
        <nav>
            <a href="{{ route('home') }}">Home</a> |
            <a href="{{ route('menu') }}">Menukaart</a> |
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <main style="padding: 20px;">
        @yield('content') {{-- ⬅️ HIER wordt de inhoud van je pagina getoond --}}
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Ons Restaurant</p>
    </footer>
</body>
</html>