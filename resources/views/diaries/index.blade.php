<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veicamie uzdevumi</title>
</head>
<body>
    <h1>Visi veicamie uzdevumi</h1>
    <ul>
    @foreach ($diaries as $diary)
        <li>{{ $diary->content }}</li>
    @endforeach
    </ul>
</body>
</html>
