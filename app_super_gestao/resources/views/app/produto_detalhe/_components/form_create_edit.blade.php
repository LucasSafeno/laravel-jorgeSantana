@if(isset($produto_detalhe->id))
    <form action="{{route('produto.update', ['produto' => $produto_detalhe->id])}}" method="post">
        @csrf
        @method('PUT')
@else
    <form action="{{route('produto-detalhe.store')}}" method="post">
        @csrf
@endif

        <input type="text" value="{{$produto_detalhe->produto_id ?? old(key: 'produto_id')}}" name="produto_id"
            id="produto_id" class="borda-preta" placeholder="ID do Produto">
        {{$errors->has('nome') ? $errors->first('produto_id') : ''}}


        <input type="text" value="{{$produto_detalhe->comprimento ?? old('comprimento')}}" name="comprimento"
            id="comprimento" class="borda-preta" placeholder="Comprimento">
        {{$errors->has('comprimento') ? $errors->first('comprimento') : ''}}

        <input type="text" value="{{$produto_detalhe->largura ?? old(key: 'largura')}}" name="largura" id="largura"
            class="borda-preta" placeholder="Largura">
        {{$errors->has('largura') ? $errors->first('largura') : ''}}

        <input type="text" value="{{$produto_detalhe->altura ?? old(key: 'altura')}}" name="altura" id="altura"
            class="borda-preta" placeholder="Altura">
        {{$errors->has('altura') ? $errors->first('altura') : ''}}




        <select name="unidade_id" id="unidade_id">
            <option value="">--- Selecione a unidade de medida</option>

            @foreach ($unidades as $unidade)
                    <option value="{{$unidade->id}}" {{ ($produto_detalhe->unidade_id ?? old('unidade_id')) == $unidade->id ?
                'selected' : ''}}>
                        {{$unidade->descricao}}
                    </option>
            @endforeach

        </select>
        {{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}

        <button type="submit" class="borda-preta">Cadastrar</button>
    </form>