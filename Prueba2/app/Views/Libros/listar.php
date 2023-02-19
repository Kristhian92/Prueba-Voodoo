 <?=$header?>
 <a class="btn btn-success" href="<?=base_url('crear')?>">Añadir un Libro</a>
 <table class="table table-light">
     <thead class="thead-light">
         <tr>
             <td>#</td>
             <td>Imagenes</td>
             <td>Nombre</td>
             <td>Acciones</td>
         </tr>
     </thead>
     <tbody>

         <?php foreach($libros as $libro): ?>

         <tr>
             <td><?=$libro['id'];?></td>
             <td>
                
                <img class="img-thumbnail" src="<?=base_url()?>../public/uploads/<?=$libro['imagen'];?>" 
                width="100" alt="imagen">
            
            </td>
             <td><?=$libro['nombre'];?></td>
             <td>
                 <a href="<?=base_url('editar/'.$libro['id']);?>" class="btn btn-info" type="button">Editar</a>
                 <a href="<?=base_url('borrar/'.$libro['id']);?>" class="btn btn-danger" type="button">Borrar</a>

             </td>

         </tr>

         <?php endforeach; ?>

     </tbody>
 </table>
 <?=$footer?>