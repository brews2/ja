<x-layout>
    <x-slot:title>Rediģēt ierakstu</x-slot:title>

    <style>
        body {
            padding-top: 100px;
        }

        h1 {
            margin-top: 0;
        }

        .error {
            color: red;
        }
    </style>

    <h1>Rediģēt dienasgrāmatas ierakstu</h1>

    <div class="form-container" style="margin-top: 30px;">
        <form action="/diaries/{{ $diary->id }}" method="POST">
            @csrf
            @method('PUT')

            <label for="title">Virsraksts:</label>
            <input type="text" id="title" name="title" value="{{ old("title", $diary->title) }}" required>
            @error("title")
                <p class="error">{{ $message }}</p>
            @enderror

            <label for="body">Ieraksts:</label>
            <textarea id="body" name="body" required>{{ old("body", $diary->body) }}</textarea>
            @error("body")
                <p class="error">{{ $message }}</p>
            @enderror

            <label for="date">Datums:</label>
            <input type="date" id="date" name="date" value="{{ old("date", $diary->date) }}" required>
            @error("date")
                <p class="error">{{ $message }}</p>
            @enderror

            <button type="submit">Saglabāt izmaiņas</button>
        </form>
    </div>
</x-layout>
