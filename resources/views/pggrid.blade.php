@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('Grid x') }}
                        <div class="float-right">
                            @if(\Request::route()->getName() == 'fornecedores')
                            <a href="{{route( 'create')}}" class="btn btn-outline-secondary">Add new</a>
                            @elseif(\Request::route()->getName() == 'unidade')
                            <a href="{{route( 'unidade_create')}}" class="btn btn-outline-secondary">Add new</a>
                            @elseif(\Request::route()->getName() == 'produtos')
                                <a href="{{route( 'produtos_create')}}" class="btn btn-outline-secondary">Add new</a>
                            @endif
                        </div>
                    </div>

                    <div class="card-body">
                        @if(\Request::route()->getName() == 'fornecedores')
                            @include('parts.grid.grid')
                        @elseif(\Request::route()->getName() == 'unidade')
                            @include('parts.grid.gridUnidade')
                        @elseif(\Request::route()->getName() == 'produtos')
                            @include('parts.grid.gridProdutos')
                        @else
                            Default
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
