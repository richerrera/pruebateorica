
@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center>{{ __('Información de la Acción Formativa') }}</center></div>

                <div class="card-body">
                    <div id="app" class="row justify-content-center">
          
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Nombre</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" v-model="newEntry.nombre" placeholder="Nombre del Evento" />
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Modalidad</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" v-model="newEntry.modalidad" placeholder="Virtual-Distancia"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Descripcion</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" v-model="newEntry.descripcion" placeholder="Descripción General del Evento" />
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Tipo de Costo</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" v-model="newEntry.tipocosto" placeholder="Participante/Curso"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Inicio/Fin</spam>                
                      </div>
                      <div class="form-group col-md-2">
                            <input type="date" class="form-control" v-model="newEntry.inicio" />
                      </div>
                      <div class="form-group col-md-2">
                            <input type="date" class="form-control" v-model="newEntry.fin" />
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Costo</spam>                
                      </div>
                      <div class="form-group col-md-1">
                            <input type="text" class="form-control" v-model="newEntry.costo" placeholder="$ 000.00"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam># Participantes</spam>                
                      </div>
                      <div class="form-group col-md-1">
                            <input type="text" class="form-control" v-model="newEntry.participantes" placeholder="00"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Ubicación</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" v-model="newEntry.ubicacion" placeholder="Ubicación"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Cantidad Evaluaciones</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" v-model="newEntry.evaluaciones" placeholder="# de Evaluaciones"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Departamento</spam>                
                      </div>
                      <div class="form-group col-md-2">
                            <input type="text" class="form-control" v-model="newEntry.departamento" placeholder="Depto"/>
                      </div>
                      <div class="form-group col-xs-2" style="text-align: right;">
                            <spam>Municipio</spam>                
                      </div>
                      <div class="form-group col-md-2">
                            <input type="text" class="form-control" v-model="newEntry.municipio" placeholder="Municipio"/>
                      </div>
                      <div class="form-group col-md-1" style="text-align: right;">
                            <spam>Contrato</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" v-model="newEntry.contrato" placeholder="# Contrato"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Horas Curso</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" v-model="newEntry.horas" placeholder="Cantidad de horas del Curso"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Orden de Compra</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" v-model="newEntry.ordencompra" placeholder="# Orden de Compra" />
                      </div>
                      <div class="form-group col-md-6" style="text-align: center;">
                            <spam>Calendarización del Evento</spam>                
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam># Compra Bolsa</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" v-model="newEntry.comprabolsa" placeholder="# de Compra en bolsa"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Fecha Y Hora</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="date" class="form-control" v-model="newEntry.ubicacion" />
                            <input type="time" class="form-control" v-model="newEntry.ubicacion" />
                           
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam># Item</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" v-model="newEntry.item" placeholder="# Item"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam></spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <button @click="add()" type="button" class="btn btn-success btn-block">Adicionar</button>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Programa</spam>                
                      </div>
                     
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" v-model="newEntry.programa" placeholder="Programa" />
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Dia</spam>                
                      </div>
                      <div class="form-group col-md-2">
                            <spam>Inicio</spam>
                      </div>
                      <div class="form-group col-md-2">
                            <spam>Fin</spam>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Facilitador</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" v-model="newEntry.facilitador" placeholder="Listado de Facilitadores" />
                      </div>
                      <div class="form-group col-md-2">
                             <button @click="add()" type="button" class="btn btn-success btn-block">Guardar</button>
                      </div>

        </div>
      </div>
      </div>
      </div>
      </div>
    </div>
  </div>
  <script src="https://unpkg.com/vue"></script>
  <script>
    var app = new Vue({
      el: '#app', // Elemento
      data: { // Parametros
        newEntry: {
          name: '',
          amount: 0
        },
        items: [{
            name: 'Servicios',
            amount: 200,
            paid: false
          },
          {
            name: 'Hosting de Anexsoft',
            amount: 90,
            paid: true
          },
        ]
      },

    });
  </script>
</body>
@endsection
