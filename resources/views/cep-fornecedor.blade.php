<!DOCTYPE html>
<html>
@include ('herancas.head')
<body>

@include('herancas.menu')

<div style="padding-left:16px">  
  
  <form action="consulta/cep/{{$fornecedor->cnpj}}" style="max-width:500px;margin:auto">
  <h2 class="titulo">Digite o CEP a ser consultado</h2>
  
  <div class="input-container">
    <i class="fa fa-map icon"></i>
    <input class="input-field" type="text" placeholder="CEP" name="cep">
  </div>
  <a href="{{url('/consulta/cep')}}"> <button class="btn default">Consultar</button></a>
 

</body>
</html>
