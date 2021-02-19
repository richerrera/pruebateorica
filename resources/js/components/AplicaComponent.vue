<template>
  
  
  <div class="row justify-content-center">
                       
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Nombre</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control"  placeholder="Nombre del Evento" />
                      </div>
                      
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Modalidad</spam>                
                      </div>
                      
                      <div class="form-group col-md-4">
                      
                          <div>
                            <select class="form-control" v-model="formulario.mod" placeholder="Virtual - Distancia">
                            <option v-for="mod in mods">{{ mod }} </option></select>
                           
                          </div>
                        </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Descripcion</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control"  placeholder="Descripción General del Evento" />
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Tipo de Costo</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <select class="form-control" v-model="formulario.costo" placeholder="Virtual - Distancia">
                            <option v-for="costo in costos">{{ costo }} </option></select>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Inicio/Fin</spam>                
                      </div>
                      <div class="form-group col-md-2">
                            <input type="date" class="form-control" />
                      </div>
                      <div class="form-group col-md-2">
                            <input type="date" class="form-control"  />
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Costo</spam>                
                      </div>
                      <div class="form-group col-md-1">
                            <input type="text" class="form-control" placeholder="$ 000.00"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam># Participantes</spam>                
                      </div>
                      <div class="form-group col-md-1">
                            <input type="text" class="form-control"  placeholder="00"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Ubicación</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control"  placeholder="Ubicación"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Cantidad Evaluaciones</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" placeholder="# de Evaluaciones"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Departamento</spam>                
                      </div>
                      <div class="form-group col-md-2">
                            <input type="text" class="form-control" placeholder="Depto"/>
                      </div>
                      <div class="form-group col-xs-2" style="text-align: right;">
                            <spam>Municipio</spam>                
                      </div>
                      <div class="form-group col-md-2">
                            <input type="text" class="form-control" placeholder="Municipio"/>
                      </div>
                      <div class="form-group col-md-1" style="text-align: right;">
                            <spam>Contrato</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" placeholder="# Contrato"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Horas Curso</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" placeholder="Cantidad de horas del Curso"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Orden de Compra</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" placeholder="# Orden de Compra" />
                      </div>
                      <div class="form-group col-md-6" style="text-align: center;">
                            <spam>Calendarización del Evento</spam>                
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam># Compra Bolsa</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control" placeholder="# de Compra en bolsa"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Fecha Y Hora</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="date" class="form-control" v-model="formulario.fecha"/>
                            <input type="time" class="form-control" v-model="formulario.horainicio"/>
                            <input type="time" class="form-control" v-model="formulario.horafin"/>
                           
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam># Item</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control"  placeholder="# Item"/>
                      </div>
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam></spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <button type="button" class="btn btn-success btn-block" v-on:click.prevent="addNewTodo">Adicionar</button>
                      </div>

                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Programa</spam>                
                      </div>
                     
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control"  placeholder="Programa" />
                      </div>

<table class="table table-bordered form-group col-md-6">
  <thead>
    <tr>
      <th scope="col">Dia</th>
      <th scope="col">Inicio</th>
      <th scope="col">Fin</th>
    </tr>
  </thead>
  <tbody v-for="(todo, index) in todos">
    <tr>
      <td>{{ todo.fecha }}</td>
      <td>{{ todo.horainicio }}</td>
      <td>{{ todo.horafin }}</td>
    </tr>
    
  </tbody>
</table>

                      
                      <div class="form-group col-md-2" style="text-align: right;">
                            <spam>Facilitador</spam>                
                      </div>
                      <div class="form-group col-md-4">
                            <input type="text" class="form-control"  placeholder="Listado de Facilitadores" />
                      </div>
                      <div class="form-group col-md-2">
                             <button  type="button" class="btn btn-success btn-block">Guardar</button>
                      </div>
  </div>

</template>

<script>

   export default {
    data () {
      return {
        formulario:{
        mod: "",
        costo:"",
        fecha:"",
        horainicio:"",
        horafin:"",
        nextTodoId: 2
        },
        mods: ['Virtual', 'Distancia'],
        costos:['Participante','Curso'],
        todos: []
    
    
      }


    },
    
  methods: {
    addNewTodo: function () {
      this.todos.push({
        id: this.formulario.nextTodoId++,
        fecha: this.formulario.fecha,
        horainicio: this.formulario.horainicio,
        horafin:this.formulario.horafin
      })
      this.formulario.fecha= '',
      this.formulario.hora= ''
    }
    }

  }
  


</script>

