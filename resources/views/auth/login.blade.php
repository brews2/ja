<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Pierakstīšanās</title>
</head>
<body>

<h1>Pierakstīšanās</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf

    <label for="email">E-pasts:</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    <br><br>

    <label for="password">Parole:</label>
    <input type="password" id="password" name="password" required>
    <br><br>

    <button type="submit">Pierakstīties</button>
</form>

</body>
</html>
