<x-layout>
  <x-slot:title>
    {{ $diary->title }}
  </x-slot:title>
  <h1>{{ $diary->title }}</h1>
  <h1>{{ $diary->body }}</h1>
  <h1>{{ $diary->date }}</h1>
  <br> <br> <br>
  <h1> Nospied uz bildes, lai redigeetu <h1>
  <a href="{{$diary->id}}/edit">
  <img src="/dzm.avif" alt="Product Image" style="width: 600px; height: auto; vertical-align: middle;">
</a>

  <form method="POST" action="{{$diary->id}}">
@csrf
@method("delete")
<button >  dzes </button>
</form>
</x-layout>



