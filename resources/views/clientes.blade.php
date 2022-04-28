<!DOCTYPE html>
<html>
@include ('herancas.head')
<body>

@include('herancas.menu')

<div style="padding-left:16px">
<h2 class="titulo">Clientes</h2>
  
  <a href="{{url('clientes/cadastro')}}"> <button class="btn default">Cadastrar Novo</button></a>
  <table>

  <tr>
    <th style="width:50%">Cliente</th>
    <th>Ativo</th>
    <th>Pro</th>
  </tr>
  @foreach ($clientes as $clientes)
              <tr>
                <td> {{ $clientes->nome}} </td>
                <td> {{ $clientes->cpf}} </td>
                <td> {{ $clientes->telefone}} </td>
                <td> {{ $clientes->endereco_id}} </td>
                </tr>
  @endforeach
  
</table>
</div>

</body>
</html>
