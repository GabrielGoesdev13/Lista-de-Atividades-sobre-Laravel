<form method="POST" action="{{ route('register') }}">
    @csrf
    <label for="name">Nome</label>
    <input type="text" name="name" id="name">

    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <label for="password">Senha</label>
    <input type="password" name="password" id="password">

    <label for="password_confirmation">Confirmar Senha</label>
    <input type="password" name="password_confirmation" id="password_confirmation">

    <button type="submit">Registrar</button>
</form>
