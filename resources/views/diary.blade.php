<!-- resources/views/diaries/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Diary</h1>
    <x-layout>
        <x-slot:title>
            {{ $diary->content }}
        </x-slot:title>
        <h1>{{ $diary->content }}</h1>
    </x-layout>
</body>
</html>
