@extends('layouts.main')

@section('title', 'Criar horário da turma')

@section('conteudo')
<main id="main" class="main">
      <form method="POST" action="" id="regForm" action="" class="formulario-layout">
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>

        <div class="tab">
            <h2 class="text-uppercase text-center my-3 color-blue-principal">Dados do horário</h2>
            <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione a área de formação, o curso, a turma,
            os dias de educação física (turmas da 12ª, 13ª e noite não inclusas), sem esquecer as horas de início e fim.</h6>
          
            <div class="row mb-3">
                <div class="col">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Área de formação">
                            <option value="Informática">Informática</option>
                            <option value="Contrução civil">Electricidade</option>
                            <option value="Eletronica">Electrônica</option>
                            <option value="Contrução civil">Construção civil</option>
                        </optgroup>
                    </select>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Curso">
                        <option value="Desenhador Projectista">Desenhador Projetista</option>
                        <option value="Técnico de Energia e Instalações Eléctricas">Técnico de Energia e Instalações Eléctricas</option>
                        <option value="Técnico de Informática ">Técnico de Informática</option>
                        <option value="Electrônica e Telecomunicação">Electrônica e Telecomunicação</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <select oninput="this.className = ''" class="form-select" id="horario-select-turma">
                        <optgroup label="Turma">
                        <option value="I10AM">I10AM</option>
                        <option value="I11BM">I11BM</option>
                        <option value="I12CM">I12CM</option>
                        <option value="I13DM">I13DM</option>
                        <option value="I10AM">I10AT</option>
                        <option value="I11BM">I11BT</option>
                        <option value="I12CM">I12CT</option>
                        <option value="I13DM">I13DT</option>
                        <option value="I11AN">I11AN</option>
                        <option value="I13DM">I13AN</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row mb-3" id="horario-div-que-pode-desaparecer-1">
                <div class="col-sm-6">
                    <select oninput="this.className = ''" class="form-select" id="horario-select-primeiro-dia-de-educacao-fisica">
                        <optgroup label="Primeiro dia de Educação Física">
                        <option value="Segunda-Feira">Segunda-Feira</option>
                        <option value="Terça-Feira">Terça-Feira</option>
                        <option value="Quarta-Feira">Quarta-Feira</option>
                        <option value="Quinta-Feira">Quinta-Feira</option>
                        <option value="Sexta-Feira">Sexta-Feira</option>
                        </optgroup>
                    </select>
                </div>

                <div class="col-sm-3">
                    <input type="time" title="Hora de início da Educação Física" name="" oninput="this.className = ''" required>
                </div>

                <div class="col-sm-3">
                    <input type="time" title="Hora de fim da Educação Física" name="" oninput="this.className = ''" required>
                </div>
            </div>

            <div class="row" id="horario-div-que-pode-desaparecer-2">
                <div class="col-sm-6">
                    <select oninput="this.className = ''" class="form-select" id="horario-select-segundo-dia-de-educacao-fisica">
                        <optgroup label="Segundo dia de Educação Física">
                        <option value="Segunda-Feira">Segunda-Feira</option>
                        <option value="Terça-Feira">Terça-Feira</option>
                        <option value="Quarta-Feira">Quarta-Feira</option>
                        <option value="Quinta-Feira">Quinta-Feira</option>
                        <option value="Sexta-Feira">Sexta-Feira</option>
                        </optgroup>
                    </select>
                </div>

                <div class="col-sm-3">
                    <input type="time" title="Hora de início da Educação Física" class="" name="" oninput="this.className = ''" required>
                </div>

                <div class="col-sm-3">
                    <input type="time" title="Hora de fim da Educação Física" class="form-control" name="" oninput="this.className = ''" required>
                </div>
            </div>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">Disciplinas e Professores</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione os professores para as disciplinas apresentadas.</h6>
          
          <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <input type="text" value="Língua Portuguesa" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Professores">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Segunda-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <div class="row">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Terça-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Quarta-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Quinta-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">Sexta-Feira</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione as disciplinas e as salas em que as mesmas serão lecionadas, respectivamente.</h6>
          
          <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>1º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>2º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>3º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>4º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>5º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-2 d-flex align-items-center">
                    <p><strong>6º TEMPO</strong></p>
                </div>

                <div class="col-sm-3">
                    <input type="text" value="7h00 - 7h50" name="" oninput="this.className = ''" disabled></p>
                </div>

                <div class="col-sm-5">
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
                <div class="col-sm-2">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Sala">
                            <option>Sala 7</option>
                            <option>LAB 01</option>
                            <option>LAB 02</option>
                            <option>LAB 03</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="tab">
            <h2 class="text-uppercase text-center my-3 color-blue-principal">Finalizando</h2>
            <h6 class="text-uppercase text-center my-4 color-blue-principal">Selecione o director da turma.</h6>
          
            <div class="row" >
                <div class="col">
                    <select oninput="this.className = ''" class="form-select">
                        <optgroup label="Director de turma">
                        <option value="Sungo Afonso">Sungo Afonso</option>
                        <option value="Brigith Barros">Brigith Barros</option>
                        <option value="Sivi Lando">Sivi Lando</option>
                        <option value="Anatoli Lussati">Anatoli Lussati</option>
                        <option value="Rosa António">Rosa António</option>
                        </optgroup>
                    </select>
                </div>
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