<?=$header;?>

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Ingresar datos del libro</h4>
        <p class="card-text">
        <form action="<?=site_url('/actualizar')?>" method="post" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?=$libro['id']?>">

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input id="nombre" value="<?=$libro['nombre']?>" class="form-control" type="text" name="nombre">
            </div>

            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <br>
                <img class="img-thumbnail" src="<?=base_url()?>../public/uploads/<?=$libro['imagen'];?>" width="100"
                    alt="imagen">
                <input id="imagen" class="form-control-file" type="file" name="imagen">
            </div>

            <button class="btn btn-success" type="submit">Actualizar</button>
            <a href="<?=base_url('listar');?>" class="btn btn-info">Cancelar</a>



        </form>
    </div>
</div>

<?=$footer;?>