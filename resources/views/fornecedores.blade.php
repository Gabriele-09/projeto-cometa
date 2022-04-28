<!DOCTYPE html>
<html>
@include ('herancas.head')
<body>

@include('herancas.menu')

<div style="padding-left:16px">
  <h2 class="titulo">Fornecedores</h2>
  
  <a href="{{url('fornecedores/cadastro')}}"> <button class="btn default">Cadastrar Novo</button></a>
  <table>
  @foreach ($clientes as $clientes)
              <tr>
                <td> {{ $clientes->nome}} </td>
                <td> {{ $clientes->cnpj}} </td>
                <td> {{ $clientes->telefone}} </td>
                <td> {{ $clientes->endereco_id}} </td>
                </tr>
  @endforeach
</table>
</div>

</body>
</html>
