<div class="topo">

    <div class="logo">
        <img src="{{asset('img/logo.png')}}">
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.home') }}">Principal</a></li>
            <li><a href="{{ route('app.clientes') }}">Cliente</a></li>
            <li><a href="{{ route('app.fornecedores') }}">Fornecedor</a></li>
            <li><a href="{{ route('produto.index') }}">Produto</a></li>
            <li><a href="{{ route('app.sair') }}">Sair</a></li>
        </ul>
    </div>
</div>