
<x-menu>
    <div class="container mt-4 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-10">
                <div class="card shadow-sm card-theme form-controle">
                    <div class="card-header">
                        <h5>Criar Novo Evento</h5>
                    </div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.users.update', $user->id) }}" class="needs-validation" novalidate>
                            @csrf
                            @method('PUT')
                    
                            <!-- Name -->
                            <div class="mb-3">
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="invalid-feedback" />
                            </div>
                    
                            <!-- Email Address -->
                            <div class="mb-3">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email', $user->email)" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="invalid-feedback" />
                            </div>
                    
                            <!-- Role Selection -->
                            <div class="mb-3">
                                <x-input-label for="role" :value="__('Role')" />
                                <select id="role" name="role" class="form-control" required>
                                    {{-- <option value="" disabled>{{ __('Select a role') }}</option> --}}
                                    @foreach($roles as $role)
                                    <option value="{{ $role->id }}" {{ (old('role') == $role->id || (isset($user) && $user->roles->first() && $user->roles->first()->id == $role->id)) ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                    
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('role')" class="invalid-feedback" />
                            </div>
                    
                            <!-- Password (Optional) -->
                            <div class="mb-3">
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="form-control" type="password" name="password" autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="invalid-feedback" />
                                <small class="form-text text-muted">Deixe em branco se não quiser alterar a senha.</small>
                            </div>
                    
                            <!-- Confirm Password (Optional) -->
                            <div class="mb-3">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="invalid-feedback" />
                            </div>
                    
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <a class="text-decoration-none text-sm text-muted" href="{{ route('users.index') }}">
                                    {{ __('Voltar') }}
                                </a>
                    
                                <x-primary-button class="btn btn-primary">
                                    {{ __('Salvar Alterações') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-menu>
