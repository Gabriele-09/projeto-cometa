<!DOCTYPE html>
<html>
@include ('herancas.head')
<body>

@include('herancas.menu')

<div style="padding-left:16px">

  <form action="/action_page.php" style="max-width:500px;margin:auto">
  <h2 class="titulo">Insira seus dados</h2>
  <div class="input-container">
    <input class="input-field" type="text" placeholder="{{url('$logradouro->logradoduro')}}" name="rua">
  </div>

  <div class="input-container">
    <input class="input-field" type="text" placeholder="{{url('$bairro->bairro')}}" name="bairro">
  </div>
  
  <div class="input-container">
    <input class="input-field" type="text" placeholder="{{url('$cidade->localidade')}}" name="cidade">
  </div>

  <div class="input-container">
    <input class="input-field" type="text" placeholder="{{url('$estado->uf')}}" name="estado">
  </div>

  <div class="input-container">
    <input class="input-field" type="text" placeholder="{{url('$ibge->ibge')}}" name="ibge">
  </div>

</form>
</div>

</body>
</html>
