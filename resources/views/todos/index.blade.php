<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veicamie uzdevumi</title>
    <link rel="stylesheet" href="{{ asset('style3.css') }}">
</head>
<body>

<x-navigation></x-navigation>
<h1>Visi veicamie uzdevumi</h1>
<ul>
    <?php foreach ($todos as $todo): ?>
        <li><a href="/todos/<?php echo $todo->id; ?>"><?php echo $todo->content; ?></a></li>
    <?php endforeach; ?>
</ul>
</body>
</html>
