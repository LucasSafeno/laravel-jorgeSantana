<h3>Fornecedor</h3>

{{-- BLADE --}}

{{--@dd($fornecedores)--}}

{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    
        <h3>Existem alguns fornecedores cadastrados</h3>
    
    @elseif(count($fornecedores) > 10)
    
        <h3>Existem vários fornecedores cadastrados</h3>

    @else 
        <h3>Ainda não existem fornecedores cadastrados</h3>

@endif --}}
{{-- unless -> executa se o retorno for FALSE --}}

{{-- @dd($fornecedores) --}}

Fornecedor : {{ $fornecedores[0]['nome'] }}
<br>
Status :  {{ $fornecedores[0]['status'] }}
<br>

{{-- @if($fornecedores[0]['status'] == 'N')
    Fornecedor Inativo
@endif --}}

@unless($fornecedores[0]['status'] == 'S') <!-- executa se o retorno da condição for false !-->
    Fornecedor Inativo
@endunless