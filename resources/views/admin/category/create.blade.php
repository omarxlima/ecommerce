@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Adicionar Categoria
                        <a href="{{ route('category.create') }}"class="btn btn-primary float-end text-white">VOLTAR</a>
                    </h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name">Nome</label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="slug">Item</label>
                                <input type="text" name="slug" class="form-control" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="description">Descrição</label>
                                <textarea type="text" name="description" class="form-control" rows="3"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="image">Imagem</label>
                                <input type="file" name="image" class="form-control" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status">Status</label> <br>
                                <input type="checkbox" name="status"  />
                            </div>
                            <div class="col-md-12 mb-3">
                                <h4>SEO Tags</h4>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="description">Meta Title</label>
                                <input type="text" name="description" class="form-control" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_keyword">Meta Keyword</label>
                                <input type="text" name="meta_keyword" class="form-control" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_description">Meta Description</label>
                                <input type="text" name="meta_description" class="form-control" />
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary float-end">Salvar</button>
                            </div>


                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection
