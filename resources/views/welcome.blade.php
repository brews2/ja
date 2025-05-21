<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

@auth
    <p>Sveiks, {{ Auth::user()->first_name }}</p>
    <img src="hi.jpg">

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Atteikties</button>
    </form>
    <form action="/todos">
    @csrf
    <button>
    to doooo
    </button>
    </form>
@endauth

@guest
    <p>Sveiks, viesi!</p>
    <a href="{{ route('login') }}">Pierakstīties</a> |
    <a href="{{ route('register') }}">Reģistrēties</a>
    <img src="bye.jpg">
    <form action="/painted">
    @csrf
    <button>
    Fun
    </button>
    </form>
@endguest

</body>
</html>
