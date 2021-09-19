@extends ('layouts.main')

@section ('content')
<body>
  <div class="container-fluid">
    <img src="/img/banners/banner2.jpg" class="img-fluid d-block w-100 rounded-bottom" alt="Banner">
    <h1 class="text-center mt-3 font-weight-bold">Cadastro do Aluno</h1>
  </div>
  <form class="row g-3 needs-validation m-3" novalidate>
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nome</label>
      <input type="text" class="form-control" id="validationCustom01" required>
      <div class="valid-feedback">Perfeito!</div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Sobrenome</label>
      <input type="text" class="form-control" id="validationCustom02" required>
      <div class="valid-feedback">Perfeito!</div>
    </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Nome de usuário</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Por favor, digite um nome de usuário.</div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">Cidade</label>
      <input type="text" class="form-control" id="validationCustom03" required>
      <div class="invalid-feedback">Por favor, digite um nome de cidade válido.</div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Estado</label>
      <select class="form-select" id="validationCustom04" required>
        <option selected disabled value="">Escolha...</option>
        <option>AC</option>
        <option>AL</option>
        <option>AP</option>
        <option>AM</option>
        <option>BA</option>
        <option>CE</option>
        <option>ES</option>
        <option>GO</option>
        <option>MA</option>
        <option>MT</option>
        <option>MS</option>
        <option>MG</option>
        <option>PA</option>
        <option>PB</option>
        <option>PR</option>
        <option>PE</option>
        <option>PI</option>
        <option>RJ</option>
        <option>RN</option>
        <option>RS</option>
        <option>RO</option>
        <option>RR</option>
        <option>SC</option>
        <option>SP</option>
        <option>SE</option>
        <option>TO</option>
        <option>DF</option>
        </select>
    <div class="invalid-feedback">Por favor, digite um nome de estado válido.</div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">CEP</label>
      <input type="text" class="form-control" id="validationCustom05" required>
      <div class="invalid-feedback">Por favor, digite um CEP válido.</div>
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">Por favor, concorde com os termos e condições.</label>
        <div class="invalid-feedback">Por favor, concorde antes de enviar os dados.</div>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
  </form>
</body>
@endsection
