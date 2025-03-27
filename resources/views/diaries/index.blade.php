




<x-layout>
<x-slot:title>
    jamescharles
  </x-slot:title>
  <ul>
  
  <h1>Visi veicamie uzdevumi</h1>

    <?php foreach ($diaries as $diary): ?>
        <li><a href="/diaries/<?php echo $diary->id; ?>"><?php echo $diary->title; ?></a></li>
    <?php endforeach; ?>
</ul>

</x-layout>
