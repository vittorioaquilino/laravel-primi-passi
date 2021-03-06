<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <header>
        <ul class="nav-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about-us') }}">About us</a></li>
            <li><a href="{{ route('contact-us') }}">Contact</a></li>
        </ul>
    </header>
    <main>
        <h3>Lista utenti:</h3>
        <ul>
            @foreach ($users as $user)
                <li class="user-list">
                    <small>{{ $user['name'] }} {{ $user['surname'] }}</small>
                </li>
            @endforeach
        </ul>
    </main>
</body>
</html>