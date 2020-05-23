<?php
    require_once './controllers/UploadFilesController.php';
    use controllers\UploadFilesController;
?>

<div class="m-3"></div>

<div class="row">
    <div class="col-lg-12">
        <h4>Gestión de archivos</h4>
    </div>
</div>

<div class="m-3"></div>

<div class="row">

<!--    TABLA DPARA LA GESTION DE ARCHIVOS-->
    <div class="col-lg-6">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo de archivo</th>
                <th scope="col" colspan="3">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">fichero 1</th>
                <td>.docx</td>
                <td>
                    <a href="" class="btn btn-warning">Editar archivo</a>
                    <a href="" class="btn btn-danger">Eliminar archivo</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

<!--    FORMULARIO PARA SUBIR ARCHIVOS-->
    <div class="col-lg-6">
        <h3>Subir archivos</h3>


        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="send_file" value="send_file">
                <input type="file" class="form-control" name="file" id="file" aria-describedby="file">
                <small id="emailHelp" class="form-text text-muted">Selecciona el archivo</small>
            </div>

            <button type="submit" class="btn btn-primary" id="submit">Enviar</button>
        </form>
    </div>

</div>

<?php

if (isset($_POST['send_file']) == 'send_file'){
    if(!empty($_FILES['file'])){

        $file = $_FILES['file'];

        $uploadFile = new UploadFilesController();
        $uploadFile->uploadFile($file );

    }
}
