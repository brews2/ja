




<x-layout>

  <ul>

  <h1>Visi veicamie uzdevumi</h1>

    <?php foreach ($todos as $todo): ?>
        <li><a href="/todos/<?php echo $todo->id; ?>"><?php echo $todo->content; ?></a></li>
    <?php endforeach; ?>
</ul>

</x-layout>
