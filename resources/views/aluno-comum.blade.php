@csrf
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif 

<div class="card">
  <div class="card-header">
    Cadastro de Aluno
  </div>
  <div class="card-body">
    <small>Os campos com asteriscos (*) são de preenchimento obrigatório!</small>
    <div class="row">
        <div class="form-group col-3">
            <label class="form-label" for="nome">Nome *</label>
            <input  class="form-control"
                    type="text" 
                    name="nome" 
                    id="nome" 
                    value="{{ $objeto->nome ?? old('nome') }}" 
                    required 
                    autofocus 
                    maxlength="60">
        </div>
        <div class="form-group col-3">
            <label class="form-label" for="email">E-mail *</label>
            <input  class="form-control"
                    type="email" 
                    name="email" 
                    id="email" 
                    value="{{ $objeto->email ?? old('email') }}" 
                    required 
                    maxlength="100">
        </div>
        <div class="form-group col-3">
            <label class="form-label" for="telefone">Telefone *</label>
            <input  class="form-control"
                    type="tel" 
                    name="telefone" 
                    id="telefone" 
                    value="{{ $objeto->telefone ?? old('telefone') }}" 
                    required 
                    maxlength="15">
        </div>
    </div>  
  </div>
  <div class="card-footer text-body-secondary">
    <button class="btn btn-outline-success"><i class="fas fa-save"></i> Salvar</button>
    <a href="{{route('aluno.listagem')}}" class="btn btn-outline-secondary"><i class="fas fa-list"></i> Listagem</a>
  </div>
</div>
