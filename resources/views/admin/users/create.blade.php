<x-menu>
    <div class="container mt-4 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-10">
                <div class="card shadow-sm card-theme form-controle">
                    <div class="card-header">
                        <h5>Criar Novo Usuário</h5>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('users.store')}}" class="needs-validation" novalidate>
                            @csrf
                            @method('PUT')

                            <!-- Name -->
                            <div class="mb-3">
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="form-control" type="text" name="name" :value="" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="invalid-feedback" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-menu>