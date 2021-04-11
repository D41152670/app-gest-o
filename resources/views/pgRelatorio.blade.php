@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('Grid x') }}
                    </div>

                    <div class="card-body">
                        @include('parts.relatorio.graficoProdutoMaisVendido')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
