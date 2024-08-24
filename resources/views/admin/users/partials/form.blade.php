@csrf()
<input type="text" name="name" placeholder="Nome" value="{{ $user->name ?? old('name') }}">
<input type="text" name="email" placeholder="Email"  value="{{ $user->email ?? old('email') }}">
<input type="text" name="password" placeholder="Senha">
<button type="submit">Enviar</button>