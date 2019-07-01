<?php

   include "Vista/plantilla/encabezado.php";
?>

<form>
<h1>FORMULARIO DE CATEGORIAS</h1>
  <div class="form-group">
    <label>Categoria</label>
    <input type="text" class="form-control" name="categoria" placeholder="Ingrese una categoria">
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

<?php

   include "Vista/plantilla/pie.php";
?>