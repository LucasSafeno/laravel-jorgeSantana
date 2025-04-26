@extends('app.layouts.basico')


@section('titulo', 'Produto')


@section('conteudo')


<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p>Editar Produtor</p>
    </div>

    <div class="menu">
        <li><a href="{{route("produto.index")}}">Voltar</a></li>
        <li><a href=""">Consulta</a></li>
        </div>

        <div class=" informacao-pagina">

                <div style="width:30%; margin-left: auto; margin-right: auto; ">
                    <form action="" method="post">
                        
                        @csrf

                        <input type="text" value="{{$produto->nome ?? old(key: 'nome')}}" name="nome" id="nome" class="borda-preta" placeholder="Nome">
                        {{$errors->has('nome') ? $errors->first('nome') : ''}}


                        <input type="text" value="{{$produto->descricao ?? old('descricao')}}" name="descricao" id="descricao" class="borda-preta"
                            placeholder="Descrição">
                            {{$errors->has('descricao') ? $errors->first('descricao') : ''}}

                        <input type="text" value="{{$produto->peso ??old(key: 'peso')}}" name="peso" id="peso" class="borda-preta" placeholder="Peso">
                        {{$errors->has('peso') ? $errors->first('peso') : ''}}

                        

                        <select name="unidade_id" id="unidade_id">
                            <option value="">--- Selecione a unidade de medida</option>

                            @foreach ($unidades as $unidade)
                            <option value="{{$unidade->id}}" {{ ($produto->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : ''}}>{{$unidade->descricao}}</option>    
                            @endforeach
                            
                        </select>
                        {{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}

                        <button type="submit" class="borda-preta">Cadastrar</button>
                    </form>
                </div>
    </div>


</div>


@endsection