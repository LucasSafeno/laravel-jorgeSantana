@extends('app.layouts.basico')


@section('titulo', 'Fornecedor')


@section('conteudo')

    
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor - Adicionar</p>
        </div>

        <div class="menu">
            <li><a href="{{route('app.fornecedores.adicionar')}}">Novo</a></li>
            <li><a href="{{route('app.fornecedores')}}">Consulta</a></li>
        </div>

        <div class="informacao-pagina">
            <div style="width:30%; margin-left: auto; margin-right: auto; ">
                <form action="" method="post">
                    <input type="text" name="name" id="name" class="borda-preta" placeholder="Nome">
                    <input type="text" name="site" id="site" class="borda-preta" placeholder="Site">
                    <input type="text" name="uf" id="uf" class="borda-preta" placeholder="UF">
                    <input type="email" name="email" id="email" class="borda-preta" placeholder="Email">

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>


    </div>


@endsection
