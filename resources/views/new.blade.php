<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "Uzdevumi un dienasgrāmata" }}</title>
</head>
<body>
<h1>{{ $todo->content }}</h1>
<p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>
</body>
</html>