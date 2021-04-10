<!-- Left Side Of Navbar -->
<ul class="navbar-nav mr-auto">
    {{-- Caso esteja deslogado --}}
    @guest
        <li class="nav-item"><a href="" class="nav-link">teste deslogado</a></li>
        <li class="nav-item"><a href="" class="nav-link">teste deslogado</a></li>
        <li class="nav-item"><a href="" class="nav-link">teste deslogado</a></li>
        <li class="nav-item"><a href="" class="nav-link">teste deslogado</a></li>
        {{-- Caso esteja logado --}}
    @else
        @if(Auth::user()->tipo_usuario_id == 1)
            <li class="nav-item"><a href="{{url('/unidades')}}" class="nav-link">Unidades</a></li>
            <li class="nav-item"><a href="{{url('/fornecedores')}}" class="nav-link">Fornecedores</a></li>
            <li class="nav-item"><a href="{{url('/produtos')}}" class="nav-link">Produtos</a></li>
            <li class="nav-item"><a href="{{url('/usuarios')}}" class="nav-link">Usuários</a></li>
        @elseif(Auth::user()->tipo_usuario_id == 2)
            <li class="nav-item"><a href="{{url('/produtos')}}" class="nav-link">Produtos</a></li>
        @elseif(Auth::user()->tipo_usuario_id == 3)
            <li class="nav-item"><a href="{{url('/produtos')}}" class="nav-link">Produtos</a></li>
            <li class="nav-item"><a href="{{url('/unidades')}}" class="nav-link">Unidades</a></li>
        @endif
    @endguest
</ul>
