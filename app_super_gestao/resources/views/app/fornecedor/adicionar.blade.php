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
            {{ $msg }}
            <div style="width:30%; margin-left: auto; margin-right: auto; ">
                <form action="{{route('app.fornecedores.adicionar')}}" method="post">
                    @csrf
                    <input type="text" value="{{old('nome')}}" name="nome" id="nome" class="borda-preta" placeholder="Nome">
                    {{ $errors->has('nome') ? $errors->first('nome') : ''}}

                    <input type="text" value="{{old('site')}}"  name="site" id="site" class="borda-preta" placeholder="Site">
                    {{ $errors->has('site') ? $errors->first('site') : ''}}

                    <input type="text" value="{{old('uf')}}" name="uf" id="uf" class="borda-preta" placeholder="UF">
                    {{ $errors->has('uf') ? $errors->first('uf') : ''}}

                    <input type="email" value="{{old(key: 'email')}}" name="email" id="email" class="borda-preta" placeholder="Email">
                    {{ $errors->has('email') ? $errors->first('email') : ''}}

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>


    </div>


@endsection
