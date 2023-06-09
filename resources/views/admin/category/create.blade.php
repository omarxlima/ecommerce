@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Adicionar Categoria
                        <a href="{{ route('category.index') }}"class="btn btn-primary float-end text-white">VOLTAR</a>
                    </h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name">Nome</label>
                                <input type="text" name="name" class="form-control">
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="slug">Item</label>
                                <input type="text" name="slug" class="form-control">
                                @error('slug') <small class="text-danger">{{ $message }}</small> @enderror

                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="description">Descrição</label>
                                <textarea  name="description" rows="3"class="form-control"> </textarea>
                                @error('description') <small class="text-danger">{{ $message }}</small> @enderror

                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="image">Imagem</label>
                                <input type="file" name="image" class="form-control">
                                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status">Status</label> <br>
                                <input type="checkbox" name="status" />
                                @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <h4>SEO Tags</h4>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_title">Meta Title</label>
                                <input type="text"  name="meta_title"class="form-control" >
                                @error('meta_title') <small class="text-danger">{{ $message }}</small> @enderror

                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_keyword">Meta Keyword</label>
                                <input type="text" name="meta_keyword" class="form-control" >
                                @error('meta_keyword') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_description">Meta Description</label>
                                <input type="text" name="meta_description" class="form-control" >
                                @error('meta_description') <small class="text-danger">{{ $message }}</small> @enderror


                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary float-end">Salvar</button>
                                {{-- <button class=" mt-3 btn btn-primary" type="submit" role="button">Cadastrar</button> --}}
                            </div>


                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection
