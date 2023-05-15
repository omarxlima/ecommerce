
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addbrandModal" tabindex="-1" aria-labelledby="addbrandModalLabel" aria-hidden="true">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addbrandModalLabel">Adicionar Marcas</h1>
          <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form wire:submit.prevent="storeBrand()" method="post">
            <div class="modal-body">
                    <div class="mb-3">
                        <label for="">Marca</label>
                        <input type="text" wire:model.defer="name" class="form-control">
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Slug</label>
                        <input type="text" wire:model.defer="slug" class="form-control">
                        @error('slug')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div><div class="mb-3">
                        <label for="">status</label>
                        <input type="checkbox" wire:model.defer="status" > Marcado=Oculto, Desmarcado=Visível
                        @error('status')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
      </div>
    </div>
  </div>



<!-- Modal update Marca -->
<div wire:ignore.self class="modal fade" id="updateBrandModal" tabindex="-1" aria-labelledby="updateBrandModalLabel" aria-hidden="true">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="updateBrandModalLabel">Editar Marcas</h1>
          <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div wire:loading>
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div> Loading...
        </div>

        <div wire:loading.remove>
            <form wire:submit.prevent="updateBrand()" method="post">
                <div class="modal-body">
                        <div class="mb-3">
                            <label for="">Marca</label>
                            <input type="text" wire:model.defer="name" class="form-control">
                            @error('name')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Slug</label>
                            <input type="text" wire:model.defer="slug" class="form-control">
                            @error('slug')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div><div class="mb-3">
                            <label for="">status</label>
                            <input type="checkbox" wire:model.defer="status" style="70px;height=70px" > Marcado=Oculto, Desmarcado=Visível
                            @error('status')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer">
                  <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>

        </div>

      </div>
    </div>
  </div>



<!-- Modal update Marca -->
<div wire:ignore.self class="modal fade" id="deleteBrandModal" tabindex="-1" aria-labelledby="deleteBrandModalLabel" aria-hidden="true">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteBrandModalLabel">Excluir Marca</h1>
          <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div wire:loading>
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div> Loading...
        </div>

        <div wire:loading.remove>
            <form wire:submit.prevent="destroyBrand()" method="post">
                <div class="modal-body">
                    <h4>
                        Deseja excluir esta marca?
                    </h4>
                </div>
                <div class="modal-footer">
                  <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary">Sim. Excluir</button>
                </div>
            </form>

        </div>

      </div>
    </div>
  </div>





