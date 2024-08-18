<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usuários</h1>

    <a href="{{ route('users.create') }}">Novo</a>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $cval)
                <tr>
                    <td>{{ $cval->name }}</td>
                    <td>{{ $cval->email }}</td>
                    <td>-</td>
                </tr>
            @empty
                <td colspan="100">Nenhem usuário no banco</td>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}
</body>
</html>