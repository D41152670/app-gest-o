@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                    <p>Para limitar o acesso utilize { { Auth::user()->tipo_usuario_id } }:</p>
                    <p>
                        EX: <br>
                        if(Auth::user()->tipo_usuario_id == 1): mostre x menu
                    </p>
                    <p>
                        1 - Administrador <br>
                        2 - Cliente  <br>
                        3 - Fornecedor <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
