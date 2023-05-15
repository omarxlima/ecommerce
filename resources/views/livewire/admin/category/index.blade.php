<div>


    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar Categoria</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyCategory">
                    <div class="modal-body">
                        <h6>Deseja excluir o registro?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Sim, Excluir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div>
        <div class="row">
            <div class="col-md-12">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Categoria
                            <a href="{{ route('category.create') }}"class="btn btn-primary float-end">Adicionar
                                Categoria</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($categorias as $categoria)
                                    <tr>
                                        <td>{{ $categoria->id }}</td>
                                        <td>{{ $categoria->name }}</td>
                                        <td>{{ $categoria->status == 1 ? 'Hiden' : ' Visible' }}</td>
                                        <td>
                                            <a href="{{ route('category.edit', $categoria->id) }}"
                                                class="btn btn-warning">Editar</a>
                                            <a href="#" wire:click="deleteCategory({{$categoria->id}})" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">Excluir</a>
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="float-end">
                            {{ $categorias->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>


@push('script')
<script>

    window.addEventListener('fechar-modal', event => {
        $('#deleteModal').modal('hide');
    });
</script>
@endpush
