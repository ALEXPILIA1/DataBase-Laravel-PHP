<?php include './header.php' ?>

<br><br><br>
<div class="container mt-4">
<div class="card">
    <div class="card-header">Ingrese un Caso</div>
        <form action="../controllers/registro_casos.php" method="POST">
            <div class="mb-2 ml-2 mr-">
                <label for="">Nombre</label>
                <input class="form-control" type="text" placeholder="Ingrese su Nombre completo" name="input_Nombre" aria-label="default input example" require>
                
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label for="">DUI</label>
                <input class="form-control" type="text" placeholder="Ingrese su DUI"  name="input_DUI" aria-label="default input example" require>
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label for="">Telefono</label>
                <input class="form-control" type="number" placeholder="Ingrese su Telefono" name="input_Telefono" aria-label="default input example" require>
                
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label for="">Categoria</label>
                <input class="form-control" type="text" placeholder="Ingrese su Categoria" name="input_Categoria" aria-label="default input example" require>

            </div>
            <div class="mb-2 ml-2 mr-2">
                <label for="">Fecha</label>
                <input class="form-control" type="text" placeholder="Ingrese Fecha" name="input_Fecha" aria-label="default input example" require>

            </div>
            <div class="mb-2 ml-2 mr-2">
                <label for="">Detalles</label>
                <input  class="form-control" type="text" placeholder="Ingrese Detalles" name="input_Detalles" aria-label="default input example" require>
                
            </div>
            <div>
            <input type="submit" name="btn btn-primary mb-2 ml-2" value="Registrar">
            </div>
        </form>
    </div>
    <br><br>
</div>

