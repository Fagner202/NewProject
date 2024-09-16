<x-menu>
    <div class="container mt-4">
        <h2>Lista de Usuários</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nome }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->is_admin)
                                <span class="badge bg-success">Admin</span>
                            @else
                                <span class="badge bg-secondary">Usuário</span>
                            @endif
                        </td>
                        <td>
                            {{-- <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Excluir
                                </button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
        <div class="d-flex justify-content-center">
            {{ $users->links() }} <!-- Paginação -->
        </div>
    </div>
</x-menu>