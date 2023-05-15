@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Editar Categoria
                        <a href="{{ route('category.index') }}"class="btn btn-primary float-end text-white">VOLTAR</a>
                    </h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name">Nome</label>
                                <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="slug">Item</label>
                                <input type="text" name="slug"  value="{{ $category->slug }}" class="form-control">
                                @error('slug') <small class="text-danger">{{ $message }}</small> @enderror

                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="description">Descrição</label>
                                <textarea  name="description" rows="3"class="form-control">{{ $category->description }}"  </textarea>
                                @error('description') <small class="text-danger">{{ $message }}</small> @enderror

                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="image">Imagem</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset('/uploads/category'. $category->image)}}" width="60px" height="60px">
                                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status">Status</label> <br>
                                <input type="checkbox" name="status" value="{{ $category->status == 1 ? 'checked': '' }}" >
                                @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <h4>SEO Tags</h4>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_title">Meta Title</label>
                                <input type="text"  name="meta_title"class="form-control" value="{{ $category->meta_title }}" >
                                @error('meta_title') <small class="text-danger">{{ $message }}</small> @enderror

                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_keyword">Meta Keyword</label>
                                <textarea type="text" name="meta_keyword" class="form-control" >{{ $category->meta_keyword }} </textarea>
                                @error('meta_keyword') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="meta_description">Meta Description</label>
                                <input type="text" name="meta_description" class="form-control" value="{{ $category->meta_description }}">
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
