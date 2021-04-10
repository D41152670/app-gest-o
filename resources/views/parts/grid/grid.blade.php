@php
$row = array(
    'colunas' => array('coluna 1', 'cooluna 2', 'coluna 3', 'coluna 4', '', ''),
    'valores' => array('valor 1', 'valor 2', 'valor 3', 'valor 4',)
);
@endphp

<table class="table table-bordered table-striped">
    <thead>
    <tr>
        @foreach($row['colunas'] as $rowColumn)
            <th class="text-center">{{$rowColumn}}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
{{--    @dd($listFornecedores)--}}
    @foreach( $listFornecedores as $fornecedores )
    <tr>
        <td>{{ $fornecedores->nome }}</td>
        <td>{{ $fornecedores->email }}</td>
        <td>{{ $fornecedores->uf }}</td>
        <td>{{ $fornecedores->site }}</td>
        <td><button class="btn btn-outline-info">Edit</button></td>
        <td><button class="btn btn-outline-danger">Excluir</button></td>
    </tr>
    @endforeach
    </tbody>
</table>
