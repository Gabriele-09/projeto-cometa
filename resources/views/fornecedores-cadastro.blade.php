<!DOCTYPE html>
<html>
@include ('herancas.head')
<body>

@include('herancas.menu')

<div style="padding-left:16px">

  <form action="{{url('/fornecedores')}}" method='post' style="max-width:500px;margin:auto">
  @csrf
  <h2 class="titulo">Insira seus dados</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Nome" name="nome" required>
  </div>

  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="text" placeholder="Telefone" name="telefone" required>
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="text" placeholder="CNPJ" name="cnpj" required>
  </div>

  <INPUT TYPE="hidden" NAME="endereco_id" VALUE="{{$endereco->cep}}">

  <button type="submit" class="btn">Salvar</button>
</form>
</div>

</body>
</html>
