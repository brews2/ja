<h2>Reģistrācija</h2>

<form action="/register" method="POST">
    @csrf

    @if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif

    <label for="first_name">Vārds</label>
    <input type="text" id="first_name" name="first_name" required>

    <label for="last_name">Uzvārds</label>
    <input type="text" id="last_name" name="last_name" required>

    <label for="email">E-pasts</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Parole</label>
    <input type="password" id="password" name="password" required>

    <label for="password_confirmation">Atkārtot paroli</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required>

    <button type="submit">Reģistrēties</button>
</form>
