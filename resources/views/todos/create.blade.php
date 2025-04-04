<x-layout>
    <x-slot:title>Izveidot uzdevumu</x-slot:title>
    <h1>Izveidot uzdevumu</h1>

    
    <div class="form-container">
        <form method="POST" action="/todos">
            @csrf  
            <input name="content" placeholder="Ievadiet uzdevuma saturu" />
            <button>Saglabāt</button>
        </form>
    </div>
</x-layout>
