<h1>Novo Usuário</h1>

<form action="{{ route('users.store') }}" method="POST">
    {{-- <input type="text" name="_token" value="{{ csrf_token() }}"> --}}
    @csrf()
    <input type="text" name="name" placeholder="Nome">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="password" placeholder="Senha">
    <button type="submit">Enviar</button>
</form>