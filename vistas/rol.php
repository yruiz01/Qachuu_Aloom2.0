<?php
// Activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
    header("Location: login.html");
} else {
    require 'header.php';

    if ($_SESSION['acceso'] == 1) {
        ?>
        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h1 class="box-title">Roles <button class="btn btn-success" onclick="mostrarform(true)" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                            </div>
                            <div class="panel-body table-responsive" id="listadoregistros">
                                <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                                    <thead>
                                        <th>Opciones</th>
                                        <th>Nombre del Rol</th>
                                    </thead>
                                    <tbody></tbody>
                                    <tfoot>
                                        <th>Opciones</th>
                                        <th>Nombre del Rol</th>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="panel-body" id="formularioregistros">
                                <form action="" name="formulario" id="formulario" method="POST">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label>Nombre:</label>
                                        <input type="hidden" name="id_rol" id="id_rol">
                                        <input type="text" class="form-control" name="nombre_rol" id="nombre_rol" maxlength="50" placeholder="Nombre del Rol" required>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                                        <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php
    } else {
        require 'noacceso.php';
    }
    require 'footer.php';
}
ob_end_flush();
?>
