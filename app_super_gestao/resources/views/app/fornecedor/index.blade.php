<h3>Fornecedor</h3>

{{-- BLADE --}}


@isset($fornecedores)
    Fornecedor : {{ $fornecedores[0]['nome'] }}
    <br>
    Status :  {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ : {{ $fornecedores[1]['cnpj'] ?? 'Dado não preenchido'}}
    <!--
        Se a vcriavel testada não estiver definida (isset)
        ou
        Se a variavel testada for null
    !-->
@endisset


