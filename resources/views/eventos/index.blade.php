<x-menu>
    <div class="card w-100">
        <div class="card-header">
            <h3 class="card-title">Eventos</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Data</th>
                        <th>Localizacão</th>
                        <th>Vagas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Dados 1</td>
                        <td>Dados 2</td>
                        <td>Dados 3</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Dados 1</td>
                        <td>Dados 2</td>
                        <td>Dados 3</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Dados 1</td>
                        <td>Dados 2</td>
                        <td>Dados 3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-menu>

{{-- <script>
    function myFunction(eventId) {
            Swal.fire({
            title: 'Tem certeza?',
            text: "Você não poderá reverter isso!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, excluir!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(`/eventos/${eventId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire(
                            'Excluído!',
                            'O evento foi excluído com sucesso.',
                            'success'
                        ).then(() => {
                            location.reload(); // Recarrega a página para refletir a exclusão
                        });
                    } else {
                        Swal.fire(
                            'Erro!',
                            'Ocorreu um erro ao tentar excluir o evento.',
                            'error'
                        );
                    }
                })
                .catch(error => {
                    console.error('Erro:', error);
                    Swal.fire(
                        'Erro!',
                        'Ocorreu um erro ao tentar excluir o evento.',
                        'error'
                    );
                });
            }
        });

    }
</script> --}}
