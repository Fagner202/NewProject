<x-menu>
    <div class="container mt-4 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-10">
                <div class="card shadow-sm card-theme form-controle">
                    <div class="card-header">
                        <h5>Criar Novo Usuário</h5>
                    </div>

                    <div class="card-body" style="">
                        <form method="POST" action="{{ route('admin.users.store') }}" class="needs-validation" novalidate>
                            @csrf
                        
                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            <!-- Role Selection -->
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select id="role" name="role" class="form-control" required>
                                    <option value="" disabled selected>Selecione um role</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{ old('role') == $role->id ? 'selected' : '' }}>
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('role')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            <!-- Confirm Password -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirme a Senha</label>
                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                @error('password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <a class="text-decoration-none text-sm" href="{{ route('users.index') }}">
                                    Voltar
                                </a>
                        
                                <button type="submit" class="btn btn-primary">
                                    Criar Usuário
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-menu>