@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('Grid x') }}
                        <div class="float-right">
                            <a href="{{route( 'create')}}" class="btn btn-outline-secondary">Add new</a>
                        </div>
                    </div>

                    <div class="card-body">
                        @include('parts.grid.grid')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
