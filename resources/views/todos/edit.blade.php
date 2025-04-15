<x-layout> 
    <x-slot:title>Rediģēt uzdevumu</x-slot:title>

    <style>
        body {
            padding-top: 100px; 
        }

        h1 {
            margin-top: 0; 
        }
    </style>

    <h1>Redigee </h1>

    <div class="form-container" style="margin-top: 30px;">
        <form action="/todos/{{ $todo->id }}" method="POST">
            @csrf 
            @method('PUT')

            <label for="content">Uzdevuma saturs:</label>
            <input type="text" id="content" name="content" value="{{ old('content', $todo->content) }}" required>
            @error("content")
              <p>{{ $message }}</p>
            @enderror

            <label>
                Izpildīts:
                <input name="completed" type="hidden" value="0"> 
                <input name="completed" type="checkbox" value="1" {{ old("completed", $todo->completed) ? 'checked' : '' }} }}>   
            </label>
            @error("completed")
              <p>{{ $message }}</p>
            @enderror

            <button type="submit">Saglabāt izmaiņas</button>
        </form>
    </div>
</x-layout>
