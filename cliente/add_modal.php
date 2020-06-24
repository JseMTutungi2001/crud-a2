<!-- Agregar Nuevo -->
<!-- En este archivo se encuentra el código del formulario que se muestra en una ventana modal cuando el usuario hace clic en el boton nuevo de index.php -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> <!-- Encabezado de la modal-->
                <center><h4 class="modal-title" id="myModalLabel">Agregar cliente</h4></center> <!-- Título de la modal-->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button><!--Botón X. para cerrar la modal. Si hace clic aqui se cierra la modal y no se agrega en la tabla cliente de la base de datos -->
            </div>
            <div class="modal-body"> <!-- Contenido de la modal -->
            <div class="container-fluid">
            <!-- Formulario que envia los datos al archivo add.php, en este archivo se encuentra el código para almacenar la información del cliente en la tabla cliente en la base de datos bdcliente. El formulario envia los datos cuando el usuario hace clic en el botón de tipo submit     -->
            <form method="POST" action="add.php">
                 <!-- Cada row tiene una etiqueta y una caja de texto, tiene tantos row como campos tiene la tabla, exceptuando el id que es autoincrental y ese valor lo agrega la base de datos por defecto-->
                 <!-- Inicio del row para Cédula -->
                 <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Cédula:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtCedula" placeholder="Ingresa tu Cedula de Identidad" minlength="7" maxlength="9" pattern="[0-9][7,9}" title="No se permiten Letras y debe haber minimo 7 y maximo 9 numeros" required>
                        <!-- El name txtCedula es el que se va a usar para pasar el valor que escriba el usuario en la cajita de texto al archivo add.php-->
                    </div>
                </div>
                <!-- Fin del row para Cédula-->

                <!-- Inicio del Row para Nombre Completo -->
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Nombre Completo:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtNombreCompleto" placeholder="Ingresa tu Nombre Completo"  maxlength="60" pattern="[A-Za-z ]{10,60}" title="No se permiten numeros" required>
                        <!-- El name txtNombreCompleto es el que se va a usar para pasar el valor que escriba el usuario en la cajita de texto al archivo add.php-->
                    </div>
                </div>
                <!-- Fin del row para Nombre Completo-->

                <!-- Inicio de row para Dirección-->
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Dirección:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtDireccion" placeholder="Ingresa tu Dirección"  minlength="10" maxlength="20" required>
                        <!-- El name txtDireccion es el que se va a usar para pasar el valor que escriba el usuario en la cajita de texto al archivo add.php-->
                    </div>
                </div>
                <!-- Fin de row para Dirección-->

                <!-- Inicio de row para Teléfono-->
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Teléfono:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtTelefono" placeholder="Ingresa numero de telefono"  title="No se permiten letras ni mas o menos de 11 numeros" required>
                        <!-- El name txtTelefono es el que se va a usar para pasar el valor que escriba el usuario en la cajita de texto al archivo add.php-->
                    </div>
                </div>
                <!-- Fin de row para Teléfono-->
            </div> 
            </div>
            <div class="modal-footer"><!-- Pie de la modal -->
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button><!-- Botón para cancelar la modal, cierra la modal. Si hace clic aquí cierra la ventana y no se agrega en la tabla cliente de la base de datos -->
                <button type="submit" name="btnAdd" class="btn btn-primary"><span class="fa fa-save"></span> Guardar</button><!-- Cuando el usuario hace clic en este botón los datos son enviados a add.php-->
                
            </form>
            </div>

        </div>
    </div>
</div>
