<form action="{{ route('alunos.store') }}" method="POST">
    @csrf

    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="{{ old('nome') }}">

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}">

    <label for="curso">Curso</label>
    <input type="text" name="curso" id="curso" value="{{ old('curso') }}">

    <label for="data_nascimento">Data de Nascimento</label>
    <input type="date" name="data_nascimento" id="data_nascimento" value="{{ old('data_nascimento') }}">

    <button type="submit">Cadastrar</button>
</form>
