<?php include 'controlador/insert_admin.php';?>
<?php include 'controlador/listar_admin.php';?>
<div class="contenido">
   <h3 id="titulo">Mantenimiento Administradores</h3>
<div class="body">
    
       <button data-toggle="modal" data-target="#miventanaR" class="btn btn-info" style="margin-left:40%;">Nuevo Registro</button>
       <span class="alert-warning"><?php echo @$mensaje;?></span>
       <br>
       <br>
       
       <!--registro-->
       <form  method="post" action="" class="row">
         <legend style="margin-left:25px;"> Buscar por </legend>
          <div class="form-group col-sm-4">
            <label for="dni">DNI/ apellidos / tipo/</label>
            <input type="text" class="form-control" name="dato" />
          </div>
 
          <div class="form-group col-sm-4">
            <label for="password">de esta Fecha:</label>
            <input class="form-control" type="date"  name="defecha">
          </div>
          
          <div class="form-group col-sm-4">
            <label for="password">hasta esta Fecha:</label>
            <input class="form-control" type="date"  name="hastafecha">
          </div>
     <input type="submit" class="btn btn-primary col-sm-2 " name="buscar" value="Buscar" style="margin-left:50px;"/>
            <input type="submit" class="btn btn-warning col-sm-2"name="todo" value="Listar Todo" style="margin-left:25px;"/>
            </form>
    <br>
         <?php
              echo @$msbusqueda;
          //echo $msn;
          ?>
          
          
          <!-- TABLA DE LISTA-->
      <div class=" t table-responsive" class="row"> 
      <table class="table table-striped table-bordered table-condensed">
       <tr class="info">
           <th>Nro</th>
           <th>DNI</th>
           <th>Nick</th>
           <th>Nombre y Apellidos</th>
           <th>Correo</th> 
           <th>Tipo</th>
           <th>Fecha Ingreso</th>
           <th>Foto</th>
           <th>Opciones</th>
        </tr>
        <?php
          if($msmlista=="valido"){
          $numero=0;
          foreach($matrizAdmin as $registro){
              $numero=$numero+1;
	       echo "<tr>
           <td>".$numero."</td>
           <td>".$registro["dni"]."</td>
           <td>".$registro["nick"]."</td>
           <td>".$registro["nombre"]." ".$registro["apellidos"]."</td>
           <td>".$registro["correo"]."</td>
           <td>".$registro["tipo_admin"]."</td>
           <td>".$registro["fecha_ingreso"]."</td>
           <td><img src='".$registro["foto"]."' class='fototable'></td>
           <td><button class='btn btn-danger btn-xs'><span data-toggle='modal'data-target='#mod_eliminar' class='glyphicon glyphicon-trash'></span></button><button class='btn btn-success btn-xs'><span class='glyphicon glyphicon-pencil'></span></button> </td>
           </tr>";
            }}
          else{
              echo "<tr><td colspan='9'>NO SE ENCONTRARON DATOS PARA LA BUSQUEDA</td></tr>";
          }
          //echo $msn;
          ?>
          
        
       
        </table>
        </div> 
       
</div>
</div>
<!--MODAL REGISTRO-->
<div class="modal fade " id="miventanaR" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
            <center><h1 style="color:#2E9AFE;">REGISTRO</h1></center>	
  		    <div class="modal-body" style="background:#CED8F6;">
  		        <form  method="post" action="">
                      <div class="form-group col-sm-6">
                        <label for="dni">DNI</label>
                        <input type="number" class="form-control" name="dni" required>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" class="form-control" name="apellidos" required>
                      </div>
                       <div class="form-group col-sm-6">
                        <label for="nick">nick:</label>
                        <input type="text" class="form-control" name="nick" required>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="correo">Email:</label>
                        <input type="email" class="form-control" name="correo" required>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="tipo">Tipo:</label>
                        <select name="tipo" class="form-control">
                            <option value="admin">admin</option>
                             <option value="superadmin">superadmin</option>
                        </select>
                      </div>
                    <div class="form-group col-sm-6">
                          <label for="password">Password:</label>
                         <input type="password" class="form-control" name="password" required>
                    </div>
                       <div class="form-group col-sm-6">
                            <label for="password">Fecha de Ingreso:</label>
                            <input class="form-control" type="date"  name="fecha" required>
                     </div>
<center>
<input type="submit" class="btn btn-primary" name="registrar" value="Registrar"/>
 <input type="button" class="btn btn-danger" class="close" value="Cancelar" data-dismiss="modal" aria-hidden="true"/></center>
            </form>
  			</div>
  		</div>
  		
  	</div>
    </div>
    
    <!--MODAL ELIMINAR-->
<div class="modal fade " id="mod_eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
            <center><h1 style="color:#2E9AFE;">SEGURO QUE DESEA ELIMINAR</h1></center>	
  		    <div class="modal-body" style="background:#CED8F6;">
  		        
  			</div>
  		</div>
  		
  	</div>
    </div>

