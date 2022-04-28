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
  <tr>
    <td>Sample text</td>
    <td><i class="fa fa-remove"></i></td>
    <td><i class="fa fa-check"></i></td>
  </tr>
  <tr>
    <td>Sample text</td>
    <td><i class="fa fa-check"></i></td>
    <td><i class="fa fa-check"></i></td>
  </tr>
  <tr>
    <td>Sample text</td>
    <td><i class="fa fa-check"></i></td>
    <td><i class="fa fa-check"></i></td>
  </tr>
  <tr>
    <td>Sample text</td>
    <td><i class="fa fa-remove"></i></td>
    <td><i class="fa fa-check"></i></td>
  </tr>
  <tr>
    <td>Sample text</td>
    <td><i class="fa fa-check"></i></td>
    <td><i class="fa fa-check"></i></td>
  </tr>
</table>
</div>

</body>
</html>
