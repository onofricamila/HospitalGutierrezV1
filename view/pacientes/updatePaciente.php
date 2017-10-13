<div class=" col s8 offset-s2">
        <div class="row">
            <div class="col s8 offset-s2">
                <div class="card hovercard">
                    <div class="card-background"></div>
                    <div class="useravatar">
                        <img alt="" src="../../public/imgs/edit.png">
                    </div>
                    <div class="card-info"> <span class="card-title">Edita los datos del paciente <?php echo $paciente -> apellido . ", " .$paciente -> nombre;?>.</span> </div>
                </div>
            
                <div id="" class="col s12">
                        <form class="col s12" method="post" name="update" action="index.php?controller=Pacientes&action=auxUpdatePaciente" autocomplete="off">
                                <br>
                                <h5>Informacion personal</h5>
                                <br>
                                <input id="idPaciente" name="idPaciente" type="text" class="validate" hidden value="<?php echo $paciente -> idPaciente;?>">
                                <div class="input-field col s12 m4">
                                    <input id="nombre" name="nombre" type="text" class="validate" value="<?php echo $paciente -> nombre;?>">
                                    <label for="nombre">Nombre</label>
                                </div>
                                <div class="input-field col s12 m4">
                                    <input id="apellido" name="apellido" type="text" class="validate" value="<?php echo $paciente -> apellido;?>">
                                    <label for="apellido">Apellido</label>
                                </div>
                                
                                <div class="input-field col s12 m4">
                                    <input type="text" name="fecha_nacimiento"  class="datepicker" value="<?php echo $paciente -> fecha_nacimiento;?>">
                                    <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                </div>
                                <div class="input-field col s12 m4">
                                    <select name="idGenero" id="idGenero" class="icons">
                                            <option value="" disabled>Genero</option>
                                            <option data-icon="/public/imgs/female.png" class="circle" value="1">Femenino</option>
                                            <option data-icon="/public/imgs/male.png" class="circle" value="2">Masculino</option>
                                    </select>
                                    <label>Genero</label>
                                </div>

                                <div class="input-field col s12 m4">
                                    <select name="idTipoDoc" id="idTipoDoc" >
                                            <?php
                                            foreach ($allTipoDoc as $tipo) {
                                                ?>
                                                <option value="<?php echo $tipo->idTipoDoc ; ?>"><?php echo $tipo->nombre ; ?></option>
                                                <?php
                                            }
                                            ?>
                                    </select>
                                    <label>Tipo de documento</label>
                                </div>
                                <div class="input-field col s12 m4">
                                    <input id="dni" name="dni" type="number" class="validate" value="<?php echo $paciente -> dni;?>">
                                    <label for="dni">DNI</label>
                                </div>
                                <div class="input-field col s12 m4">
                                    <input id="domicilio" name="domicilio" type="text" class="validate" value="<?php echo $paciente -> domicilio;?>">
                                    <label for="domicilio">Domicilio</label>
                                </div>
                                <div class="input-field col s12 m4">
                                    <input id="telefono" name="telefono" type="number" class="validate" value="<?php echo $paciente -> telefono;?>">
                                    <label for="telefono">Telefono</label>
                                </div>
                                <div class="input-field col s12 m4">
                                    <select name="idObraSocial" id="idObraSocial">
                                            <?php
                                            foreach ($allObraSocial as $obra) {
                                                ?>
                                                <option value="<?php echo $obra->idObraSocial ; ?>"><?php echo $obra->nombre ; ?></option>
                                                <?php
                                            }
                                            ?>
                                    </select>
                                    <label>Obra Social</label>
                                </div>
                                <br>        
                                <h5 id="#datos-demo" >Datos demograficos</h5>
                                <br>
                                <div class="input-field col s12 m6">
                                    <select name="heladera" id="heladera" class="icons">
                                        <option data-icon="/public/imgs/yes.png" class="circle" value="1">Sí</option>
                                        <option data-icon="/public/imgs/no.png" class="circle" value="0">No</option>
                                    </select>
                                    <label>Heladera?</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <select name="electricidad" id="electricidad" class="icons">
                                        <option data-icon="/public/imgs/yes.png" class="circle" value="1">Sí</option>
                                        <option data-icon="/public/imgs/no.png" class="circle" value="0">No</option>
                                    </select>
                                    <label>Electricidad?</label>
                                </div>
                                
                                <div class="input-field col s12 m6">
                                    <select name="mascota" id="mascota" class="icons">
                                        <option data-icon="/public/imgs/yes.png" class="circle" value="1">Sí</option>
                                        <option data-icon="/public/imgs/no.png" class="circle" value="0">No</option>
                                    </select>
                                    <label>Mascota?</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <select name="idTipoVivienda" id="idTipoVivienda">
                                            <?php
                                            foreach ($allTipoVivienda as $tipo) {
                                                ?>
                                                <option value="<?php echo $tipo->idTipoVivienda ; ?>"><?php echo $tipo->nombre ; ?></option>
                                                <?php
                                            }
                                            ?>
                                    </select>
                                    <label>Tipo de Vivienda?</label>
                                </div>

                                <div class="input-field col s12 m6">
                                    <select name="idTipoCalefaccion" id="idTipoCalefaccion">
                                            <?php
                                            foreach ($allTipoCalefaccion as $tipo) {
                                                ?>
                                                <option value="<?php echo $tipo->idTipoCalefaccion ; ?>"><?php echo $tipo->nombre ; ?></option>
                                                <?php
                                            }
                                            ?>
                                    </select>
                                    <label>Tipo de Calefaccion?</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <select name="idTipoAgua" id="idTipoAgua">
                                            <?php
                                            foreach ($allTipoAgua as $tipo) {
                                                ?>
                                                <option value="<?php echo $tipo->idTipoAgua ; ?>"><?php echo $tipo->nombre ; ?></option>
                                                <?php
                                            }
                                            ?>
                                    </select>
                                    <label>Tipo de Agua?</label>
                                </div>
                                <div class="row col m12">
                                    <div class="col s12 m6">
                                        <button class="col s12 m6 btn waves-effect waves-light right-align" type="reset" name="submit">Limpiar
                                            <i class="material-icons right">backspace</i>
                                        </button>
                                    </div>
                                    <div class="col s12 m6">
                                        <button class="col s12 m6 btn waves-effect waves-light" type="submit" name="submit">Enviar
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                        
                                        
                                    </div>
                                </div>
                                    
                    </form>
            </div>
        </div>
    </div>
</div>           
        <style>
            /* USER PROFILE PAGE */
    #tabs-swipe-demo{
          overflow: hidden!important;
      }
     .card {
        margin-top: 20px;
        padding: 30px;
        background-color: rgba(214, 224, 226, 0.2);
        -webkit-border-top-left-radius:5px;
        -moz-border-top-left-radius:5px;
        border-top-left-radius:5px;
        -webkit-border-top-right-radius:5px;
        -moz-border-top-right-radius:5px;
        border-top-right-radius:5px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .card.hovercard {
        position: relative;
        padding-top: 0;
        overflow: hidden;
        text-align: center;
        background-color: #fff;
        background-color: rgba(255, 255, 255, 1);
    }
    .card.hovercard .card-background {
        height: 130px;
    }
    .card-background img {
        -webkit-filter: blur(25px);
        -moz-filter: blur(25px);
        -o-filter: blur(25px);
        -ms-filter: blur(25px);
        filter: blur(25px);
        margin-left: -100px;
        margin-top: -200px;
        min-width: 130%;
    }
    .card.hovercard .useravatar {
        position: absolute;
        top: 15px;
        left: 0;
        right: 0;
    }
    .card.hovercard .useravatar img {
        width: 100px;
        height: 100px;
        max-width: 100px;
        max-height: 100px;
        border: 5px solid rgba(255, 255, 255, 0.5);
    }
    .card.hovercard .card-info {
        position: absolute;
        bottom: 14px;
        left: 0;
        right: 0;
    }
    .card.hovercard .card-info .card-title {
        padding:0 5px;
        font-size: 20px;
        line-height: 1;
        color: #262626;
        background-color: rgba(255, 255, 255, 0.1);
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }
    .card.hovercard .card-info {
        overflow: hidden;
        font-size: 12px;
        line-height: 20px;
        color: #737373;
        text-overflow: ellipsis;
    }
    .card.hovercard .bottom {
        padding: 0 20px;
        margin-bottom: 17px;
    }
    .btn-pref .btn {
        -webkit-border-radius:0 !important;
    }
    
        </style>
    
    
    <script type="text/javascript" src="/public/js/pacientes.js"></script>
    <script>
        select(<?php echo $paciente -> idGenero;?>,  <?php echo $paciente -> idTipoDoc;?>, <?php echo $paciente -> idObraSocial;?>, <?php echo $paciente -> heladera;?>, <?php echo $paciente -> electricidad;?>,  <?php echo $paciente -> mascota;?>,  <?php echo $paciente -> idTipoVivienda;?>, <?php echo $paciente -> idTipoCalefaccion;?>, <?php echo $paciente -> idTipoAgua;?>)
    </script>