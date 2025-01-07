<h3>Fornecedor</h3>

{{-- BLADE --}}


@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
         Interação Atual : {{ $loop->iteration}}
         <br>
        Fornecedor : {{ $fornecedor['nome']}}
        <br>
        Status :  {{ $fornecedor['status']}}
        <br>
        CNPJ : {{ $fornecedor['cnpj']}}
        <br>
        Telefone : ({{$fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? ''}}
        <br>

        @if($loop->first)
            Primeira iteração do loop
        @endif

         @if($loop->last)
            Última iteração do loop
            <br>
            Total de Registros : {{ $loop->count }}
        @endif

        <hr>

    @empty
        Não existe Fornecdores cadastrados!!
    @endforelse


@endisset

