@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-md-12">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="card">
                <div class="card-header">
                    <h4>
                        Produtos
                        <a href="{{ route('products.index') }}"class="btn btn-primary float-end text-white">VOLTAR</a>
                    </h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">
                                Home</button>
                            <button class="nav-link" id="nav-seotag-tab" data-bs-toggle="tab" data-bs-target="#nav-seotag"
                                type="button" role="tab" aria-controls="nav-seotag" aria-selected="false">
                                SEO Tags</button>
                            <button class="nav-link" id="nav-details-tab" data-bs-toggle="tab" data-bs-target="#nav-details"
                                type="button" role="tab" aria-controls="nav-details" aria-selected="false">
                                Detalhes</button>
                                <button class="nav-link" id="nav-images-tab" data-bs-toggle="tab" data-bs-target="#nav-images"
                                type="button" role="tab" aria-controls="nav-images" aria-selected="false">
                                Imagens</button>
                        </div>
                    </nav>

                    {{-- HOME --}}
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                            tabindex="0">
                            <div class="mb-3">
                                <label>Categoria</label>
                                <select name="category_id" id="" class="form-select">
                                    <option value="">Escolha uma categoria</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="name">Nome</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="name">Slug</label>
                                <input type="text" name="slug" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Marca</label>
                                <select name="brand" id="" class="form-select">
                                    <option value="">Escolha uma marca</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name">Pequena descrição</label>
                                <textarea name="small_description" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="name">Descrição</label>
                                <textarea name="description" rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                        {{-- SEO TAGS --}}
                        <div class="tab-pane fade" id="nav-seotag" role="tabpanel" aria-labelledby="nav-seotag-tab"
                            tabindex="0">

                            <div class="mb-3">
                                <label for="">Meta titulo</label>
                                <input type="text" name="meta_title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Meta Descrição</label>
                                <textarea name="meta_description" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="">Meta Palavras-chaves</label>
                                <textarea name="meta_keyword" rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                        {{-- DETALHES --}}
                        <div class="tab-pane fade" id="nav-details" role="tabpanel" aria-labelledby="nav-details-tab"
                            tabindex="0">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="name">Preço Original</label>
                                        <input type="number" name="original_price" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="name">Preço de Venda</label>
                                        <input type="number" name="selling_price" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="name">Quantidade</label>
                                        <input type="number" name="quantity" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label >Trending</label>
                                        <input type="checkbox" name="trending" >
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label >Status</label>
                                        <input type="checkbox" name="status" >
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- IMAGENS --}}
                        <div class="tab-pane fade" id="nav-images" role="tabpanel" aria-labelledby="nav-images-tab" tabindex="0">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name">Enviar Imagens</label>
                                    <input type="file" name="image[]" multiple class="form-control">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>

                </form>

                </div>
            </div>
        </div>

    </div>
@endsection
