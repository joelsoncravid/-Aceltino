@extends('layouts.main')

@section('title', 'Criar Ano Lectivo')

@section('conteudo')
<main id="main" class="main" >

<form id="regFormh" action="" class="formulario-layout">
        <div style="text-align:center;margin-top:10px;">
          <span class="step"></span>
        </div>
</form>

<div class="tab">     
    <div class="container-fluid">
            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>CRIAR ANO LECTIVO</h2>
                    </div>

                </div>
            </div>
        <form id="regFormh" action="" class="formulario-layout">
            <div class="row" >
                <div class="col">
                     <p>Data de Início<input type="date" name="" oninput="this.className = ''"></p>
                </div>

                <div class="col">
                     <p>Data de Fim<input type="date" name="" oninput="this.className = ''"></p>
                </div>
            </div>

            <div class="col-5">
                     <p><input type="text" placeholder=" Número maximo de aluno nas turmas" name="" oninput="this.className = ''"></p>
                </div>
            </div>
                

            <div style="text-align:center;margin-top:10px;">
                      <div>
                        <button type="button" class="btn btn-success">Criar Ano Lectivo</button>
                      </div>
            </div>
        </form>     
    </div>
</div>

</main>
@endsection