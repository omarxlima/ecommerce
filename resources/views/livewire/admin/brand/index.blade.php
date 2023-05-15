<div>

    @include('livewire.admin.brand.modal-form')
   <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
            <div class="card">
                <div class="card-header">
                    <h4>
                        Lista de Marcas
                        <a href="#" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addbrandModal">Adicionar Marcas</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($brands as $brand )
                            <tr>
                                <td>{{$brand->id}}</td>
                                <td>{{$brand->name}}</td>
                                <td>{{$brand->slug}}</td>
                                <td>{{$brand->status  == '1' ? 'Oculto': 'Visível'}}</td>
                                <td>
                                    <a href="#" wire:click="editBrand({{$brand->id}})" data-bs-toggle="modal" data-bs-target="#updateBrandModal" class="btn btn-sm btn-warning">Editar</a>
                                    <a href="#" wire:click="deleteBrand({{$brand->id}})" data-bs-toggle="modal" data-bs-target="#deleteBrandModal" class="btn btn-sm btn-danger">Deletar</a>

                                </td>

                            </tr>
                            @empty
                                <td colspan="5"> Nenhuma Marca encontrada!</td>
                            @endforelse

                        </tbody>
                    </table>
                    <div class="float-end">
                        {{ $brands->links() }}
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>

@push('script')
<script>

    window.addEventListener('fechar-modal', event => {
        $('#addbrandModal').modal('hide');
        $('#updateBrandModal').modal('hide');
        $('#deleteBrandModal').modal('hide');
    });
</script>
@endpush
