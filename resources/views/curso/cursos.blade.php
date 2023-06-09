@extends('layouts.main')

@section('title', 'Cursos')

@section('conteudo')
<main id="main" class="main">
    @if (session()->has('erro'))
    {{session('erro')}}
    @endif
    @if (session()->has('sucesso'))
        {{session('sucesso')}}
    @endif
      <div class="row">
        <div class="col">
          <h2>CURSOS</h2>
        </div>

         <div class="col-lg-4">
           <select class="btn-sel form-select" id="filtro3">
              <option selected disabled>Area de Formação</option>
              @foreach ($areaFormacao as $af)
                <option value="{{$af->nome_area_formacao}}">{{$af->nome_area_formacao}}</option>
              @endforeach

           </select>
         </div>

         <div class="col-lg-4">
           <select class="btn-sel form-select" id="filtro4">
             <option selected disabled>Coordenador</option>
             @foreach ($dados as $dado)
                <option value="{{$dado['nome_completo']}}">{{$dado['nome_completo']}}</option>
             @endforeach

           </select>
         </div>

      </div>

      <div class="procurar">
        <form class="proc-form d-flex align-items-center">
          <input id="pesquisa" type="text" name="" class="campo-pesq" placeholder="Digite o Curso que estás a procurar">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div>

      <!-- /  Inicio da tabela de inscritos -->
      <table class="table table-striped" id="matricula-tab">
        <thead>
          <tr style=" text-align: center;">
            <th scope="col">Nome do Curso</th>
            <th scope="col">Sigla</th>
            <th scope="col">Area de Formação</th>
            <th scope="col">Coordenador</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($cursoGeral); $i++)

                    <tr style=" text-align: center;">
                        <th scope="row">{{$cursoGeral[$i]['nome_curso']}}</th>
                        <td>{{$cursoGeral[$i]['sigla']}}</td>
                        <td>{{$cursoGeral[$i]['nome_area_formacao']}}</td>
                        <td>{{$cursoGeral[$i]['nome_coordenador']}}</td>
                        <td>
                        <i class="bi bi-eye-fill"  data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
                        <a href="{{route('editar.curso', $cursoGeral[$i]['curso_id'])}}"><i class="bi bi-pencil"></i></a>
                        <form action="{{route('apagar.curso', $cursoGeral[$i]['curso_id'])}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit"><i class="bi bi-trash-fill" ></i></button>
                        </form>
                        <i class="bi bi-check-square-fill"></i>
                        </td>
                    </tr>
            @endfor




        </tbody>
      </table>
      <!-- Termina a tabela de matriculas -->

      <!--Inicio da modal ver inscrito-->
      <div class="modal fade" id="ExtralargeModal" tabindex="-1" data-bs-backdrop="false">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">

            <div class="provisorio">
              <div class="card-icon-modal rounded-circle d-flex align-items-center justify-content-flex-end">

                <i class="bi bi-x-lg" data-bs-toggle="modal" aria-label="Close" data-bs-dismiss="modal"></i>
              </div>
            </div>

            <div class="cabecalho-modal">
              <div class="row">
                <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
                  <h1>Dados Do Curso</h1>
                </div>

              </div>
            </div>

            <div class="corpo-modal">
              <form class="form-inativo">
                <div class="dados-pessoais">
                <div class="area-input form-group" disabled>
                <label>Nome do Curso: </label><input type="text" name="" value="Técnico de informática" disabled>
                </div>
                <div class="area-input form-group" disabled>
                <label>Sigla do Curso: </label><input type="text" name="" value="I" disabled>
                </div>



            <div class="form-group">
               <label for="">Area de Formação:</label>
               <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select" disabled>
                    <option disabled>Area de Formação:</option>
                    <option value="Informática" selected>Informática</option>
                    <option value="Contrução civil" >Contrução civil</option>
                    <option value="Eletronica">Eletronica</option>
                    <option value="Contrução civil">Contrução civil</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Coordenador:</label>
                <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select" disabled>
                    <option  disabled>Coordenador:</option>
                    <option value="Tom Brauny" selected>Tom Brauny</option>
                    <option value="João Miguel">João Miguel</option>
                    <option value="Braga Santos">Braga Santos</option>
                </select>
            </div>

                <div class="footer-modal" style="text-align: center;">

                  <div class="jnt">
                      <a href="/cursos" class="btn" style="background-color: #070b17; color: #fff;">Retrocer aos Cursos</a>

                      <a href="/editar-curso" class="btn" style="background-color: #d0ff00; color: #fff;">Editar dados</a>


                  </div>
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>

      <!--  / Termina a modal ver inscrito-->

    </main>
@endsection
