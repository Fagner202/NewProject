<x-menu>
   
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
