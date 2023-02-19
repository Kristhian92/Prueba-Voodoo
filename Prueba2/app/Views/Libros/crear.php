<?=$header?>
Formulario de Crear


<div class="card">
    <div class="card-body">
        <h4 class="card-title">Ingresar datos del libro</h4>
        <p class="card-text">
        <form action="<?=site_url('/guardar')?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input id="nombre" value="<?=old('nombre')?>" class="form-control" type="text" name="nombre">
            </div>

            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input id="imagen" class="form-control-file" type="file" name="imagen">
            </div>

            <button class="btn btn-success" type="submit" >Guardar</button>
            <a href="<?=base_url('listar');?>" class="btn btn-info">Cancelar</a>


        </form>
    </div>
</div>



<?=$footer?>