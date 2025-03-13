
<h1>Visi veicamie uzdevumi</h1>
<ul>
    <?php foreach ($todos as $todo): ?>
        <li><a href="/todos/<?php echo $todo->id; ?>"><?php echo $todo->content; ?></a></li>
    <?php endforeach; ?>
</ul>

<x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>
  <h1>{{ $todo->content }}</h1>
</x-layout>
