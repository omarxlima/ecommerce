@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>
                    Produto
                    <a href="{{ route('product.create') }}"class="btn btn-primary float-end">Adiciona Produto</a>
                </h4>
            </div>

            <div class="card-body">
               

            </div>
        </div>
    </div>

</div>

@endsection
