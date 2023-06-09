@extends('layouts.main')

@section('title', 'Cadastrar professor')

@section('conteudo')
<main id="main" class="main">
      <form method="POST" action={{ route('prof.postRegistar') }} id="regForm" action="" class="formulario-layout">
        @csrf
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>
 
        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">introduza os dados pessoais</h2>
          
          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div>
          @endif

          <div class="form-group">
            <input name='nome_completo' type="text" class="input-sm" placeholder="Nome Completo do professor" name="" oninput="this.className = ''">
          </div>
          
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <input name='num_bi' type="text" placeholder="Número do bilhete de identidade" oninput="this.className = ''">
              </div>
            </div>

            <div class="col-md-5">
              <div class="form-group">
                <input name='data_nascimento' type="date" oninput="this.className = ''">
              </div> 
            </div>

            <div class="col-md-2">
              <div class="form-group">
                <input type="text" class="form-control" readonly="true" disabled oninput="this.className = ''" value="00">
              </div> 
            </div>
          </div>

 
          <div class="row d-flex align-items-center">
            <div class="col-md-4">
              <div class="form-group">
                <label class="me-3">Sexo:</label>
                <input type="radio" id="masculino" name="genero" value="Masculino" {{ old('genero') == 'Masculino' ? 'checked' : '' }}>
                <label for="masculino" class="me-2"> Masculino</label>
                <input type="radio" id="feminino" name="genero" value="Feminino" {{ old('genero') == 'Feminino' ? 'checked' : '' }}>
                <label for="feminino"> Feminino</label>
              </div>
            </div>

            <div class="col-md-8" style=" display: flex; justify-content: flex-end;align-items: center; gap: 10px;">
            <h5>Endereço</h5>
              <div class="form-group">
                <input name='municipio' type="text" placeholder="Municipio" required='false' oninput="this.className = ''">
              </div> 
              <div class="form-group">
                <input name='bairro' type="text" placeholder="Bairro" required='false' oninput="this.className = ''">
              </div> 
              <div class="form-group">
                <input name='zona' type="text" placeholder="Zona" required='false' oninput="this.className = ''">
              </div> 
              <div class="form-group">
                <input name='numero_casa' type="text" placeholder="Nº Casa" required='false' oninput="this.className = ''">
              </div> 
            </div>
          </div>

          <div class="row">
            <div id="clone1"class="col-lg-3 d-flex gap-1 justify-content-center align-items-center">
                <span style="color: #777;">+244</span>
                <input name='num_tel' type="text" name="" placeholder="Telefone" oninput="this.className = ''">
              </div>

              <div class="col-3">
                  <i id="clonebtn1"class="bi bi-plus-circle" style="font-size: 30px; cursor: pointer;"></i>    
              </div>
          </div>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">disciplinas a lecionar</h2>
          <div class="form-group">
            <select name='formacao' oninput="this.className = ''" class="form-select">
              <optgroup label="Curso">

                @foreach ($cursos as $curso)
                  <option value="{{ $curso->sigla }}">{{ $curso->nome_curso }}</option>
                @endforeach
                
              </optgroup>
            </select>
          </div>

          <div class="row">
            <div class="form-group col">
              <select oninput="this.className = ''" class="form-select">
                <optgroup label="Turno">
                  <option>Manhã</option>
                  <option>Tarde</option>
                  <option>Noite</option>
                </optgroup>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="form-group col">
              <select oninput="this.className = ''" class="form-select">
                <optgroup label="Disciplina">
                  <option>Educação Física</option>
                  <option>Electrotecnia</option>
                  <option>Empreendedorismo</option>
                  <option>Física</option>
                  <option>Formação de Atitudes Integradoras</option>
                  <option>Língua Portuguesa</option>
                  <option>Língua Estrangeira</option>
                  <option>Geometria Descritiva</option>
                  <option>Matemática</option>
                  <option>Máquinas Eléctricas</option>
                  <option>Organização e Gestão Industrial</option>
                  <option>Práticas Oficinais</option>
                  <option>Projecto Tecnológico</option>
                  <option>Química</option>
                  <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                  <option>Técnicas e Linguagens de Programação</option>
                  <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                  <option>Tecnologias de Informação e Comunicação</option>
                </optgroup>
              </select>
            </div>
          </div>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">informações importantes para o instituto</h2>

          <div class="form-group">
            <input type="email" placeholder="E-mail do professor" oninput="this.className = ''">
          </div>

          <div class="form-group">
            <input type="text" placeholder="Username do professor (Auto-preenchimento)" oninput="this.className = ''">
          </div>

          <div class="form-group">
            <input type="password" placeholder="Password do professor (Auto-preenchimento)" oninput="this.className = ''">
          </div>
        </div>

        <div style="text-align:center;margin-top:40px;">
          <div>
            <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
            <button type="button" class="btn btn-success our-green-bg" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
          </div>
        </div>
      </form>


    </main>
@endsection