<x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>
  <h1>{{ $todo->content }}</h1>

  <br> <br> <br>
  <h1> Nospied uz bildes, lai redigeetu <h1>
  <a href="{{$todo->id}}/edit"> Edito <img src="/dzm.avif" alt="Product Image"> </a>

<form method="POST" action="{{$todo->id}}">
@csrf
@method("delete")
<button >  dzes </button>
</form>
</x-layout>




