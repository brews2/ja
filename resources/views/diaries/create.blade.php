<x-layout>
    <x-slot:title>Izveidot uzdevumu</x-slot:title>
    <h1>Izveidot uzdevumu</h1>

    <div class="form-container">
        <form method="POST" action="/diaries">
            @csrf  

            
            <input type="text" name="title" required>

            <input type="text" name="body" required>

            <input type="date" name="date" required>

            


            <button>Saglabāt</button>
        </form>
    </div>
</x-layout>
