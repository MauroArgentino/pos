<?php

   include "Vista/plantilla/encabezado.php";
?>

<form>
<h1>FORMULARIO DE PRODUCTOS</h1>
  <div class="form-group">
    <label>Producto</label>
    <input type="text" class="form-control" name="nombre" placeholder="Ingrese un producto">
  </div>
  <div class="form-group">
    <label>Precio</label>
    <input type="text" class="form-control" name="precio" placeholder="Ingrese un precio">
  </div>
  <div class="form-group">
    <label>Stock</label>
    <input type="text" class="form-control" name="stock" placeholder="Ingrese un stock">
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

<?php

   include "Vista/plantilla/pie.php";
?>