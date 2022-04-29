<!DOCTYPE html>
<html>
@include ('herancas.head')
<body>

    @include('herancas.menu')

    <div style="padding-left:16px">
        <h2 class="titulo">Fornecedores</h2>

        <a href="{{url('fornecedores/cadastro')}}"> <button class="btn default">Cadastrar Novo</button></a>
        <table>
            <tr>
              <th> Nome</th>
              <th> CNPJ</th>
              <th> Telefone</th>
              <th> CEP</th>
            </tr>
            @foreach ($fornecedores as $fornecedor)
            <tr>
                <td> {{ $fornecedor->nome}} </td>
                <td> {{ $fornecedor->cnpj}} </td>
                <td> {{ $fornecedor->telefone}} </td>
                <td> {{ $fornecedor->endereco_id}} </td>
            </tr>
            @endforeach
        </table>
    </div>

</body>
</html>
