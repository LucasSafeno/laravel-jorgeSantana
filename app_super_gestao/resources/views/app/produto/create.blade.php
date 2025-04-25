@extends('app.layouts.basico')


@section('titulo', 'Produto')


@section('conteudo')


<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p>Adicionar Produtor</p>
    </div>

    <div class="menu">
        <li><a href="{{route("produto.index")}}">Voltar</a></li>
        <li><a href=""">Consulta</a></li>
        </div>

        <div class=" informacao-pagina">

                <div style="width:30%; margin-left: auto; margin-right: auto; ">
                    <form action="" method="post">
                        @csrf
                        <input type="text" value="" name="nome" id="nome" class="borda-preta" placeholder="Nome">


                        <input type="text" value="" name="descricao" id="descricao" class="borda-preta"
                            placeholder="Descrição">


                        <input type="text" value="" name="peso" id="peso" class="borda-preta" placeholder="Peso">


                        <select name="unidade_id" id="unidade_id">
                            <option value="">--- Selecione a unidade de medida</option>

                            @foreach ($unidades as $unidade)
                            <option value="{{$unidade->id}}">{{$unidade->descricao}}</option>    
                            @endforeach
                            
                        </select>

                        <button type="submit" class="borda-preta">Cadastrar</button>
                    </form>
                </div>
    </div>


</div>


@endsection