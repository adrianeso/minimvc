<div class="row">
    <div class="col-lg-12">
        <h3>Acciones</h3>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4>Crear ficheros</h4>
            </div>
            <div class="card-body">
                <a href="files">Gestion archivos</a>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4>Crear usuarios</h4>
            </div>
            <div class="card-body">
                <a href="users">Gestion usuarios</a>
            </div>
        </div>
    </div>

</div>



<?php

    include('models/HandlerConnectionModel.php');

    $handler = new \models\HandlerConnectionModel();

    echo $handler->saludar();


?>