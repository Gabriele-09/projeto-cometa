<!DOCTYPE html>
<html>
@include ('herancas.head')
<body>

@include('herancas.menu')

<div style="padding-left:16px">
<h2>Clientes</h2>
  
  <a href="{{url('fornecedores/cadastro')}}"> <button class="btn default">Cadastrar Novo</button></a>
  <table>
  <tr>
    <th style="width:50%">Features</th>
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
