<!DOCTYPE html>
<html>
@include ('herancas.head')
<body>

@include('herancas.menu')

<div style="padding-left:16px">

  <form action="{{url ('/endereco')}}" method="post" style="max-width:500px;margin:auto">
  @csrf
  <h2 class="titulo">Insira seus dados</h2>
  <div class="input-container">
    <input class="input-field" type="text" value="{{$endereco->logradouro}}" name="rua">
  </div>

  <div class="input-container">
    <input class="input-field" type="text" value="{{$endereco->bairro}}" name="bairro">
  </div>
  
  <div class="input-container">
    <input class="input-field" type="text" value="{{$endereco->localidade}}" name="cidade">
  </div>

  <div class="input-container">
    <input class="input-field" type="text" value="{{$endereco->uf}}" name="estado">
  </div>

  <div class="input-container">
    <input class="input-field" type="text" value="{{$endereco->ibge}}" name="ibge">
  </div>

  <INPUT TYPE="hidden" NAME="cep" VALUE="{{$endereco->cep}}">
  <INPUT TYPE="hidden" NAME="tipo" VALUE="{{$tipo}}">
 <button type="submit" class="btn">Salvar</button>
</form>
</div>

</body>
</html>
