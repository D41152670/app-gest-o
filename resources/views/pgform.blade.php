@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('Formulário') }} {{ isset($titulo) }}
                    </div>

                    <div class="card-body">
                        {{\Request::route()->getName()}}
                        @if(\Request::route()->getName() == 'create')
                            @include('parts.form.formFornecedores')
                        @elseif(\Request::route()->getName() == 'edit')
                            @include('parts.form.formFornecedores')
                        @elseif(\Request::route()->getName() == 'unidade_create')
                            @include('parts.form.formUnidades')
                        @elseif(\Request::route()->getName() == 'unidade_edit')
                            @include('parts.form.formUnidades')
                        @else
                            default
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
