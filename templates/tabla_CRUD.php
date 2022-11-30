<?php include './header.php' ?>

<br><br><br>
<div class="container mt-4">
<div class="card">
    <div class="card-header">Ingrese los datos del Usuario</div>
        <form action="../controllers/registro.php" method="POST">
            <div class="mb-2 ml-2 mr-">
                <label for="">Nombre</label>
                <input class="form-control" type="text" placeholder="Ingrese su Nombre completo" name="inputNombre" aria-label="default input example" require>
                
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label for="">Correo</label>
                <input class="form-control" type="text" placeholder="Ingrese su Correo" name="inputCorreo" aria-label="default input example" require>
                
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label for="">Edad</label>
                <input class="form-control" type="number" placeholder="Ingrese su Edad" name="inputEdad" aria-label="default input example" require>
                
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label for="">DUI</label>
                <input class="form-control" type="text" placeholder="Ingrese su DUI"  name="inputDUI" aria-label="default input example" require>
            <div class="mb-2 ml-2 mr-2">
                <label for="">Telefono</label>
                <input class="form-control" type="number" placeholder="Ingrese su Telefono" name="inputTelefono" aria-label="default input example" require>
                
            </div>
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label for="">Cargo</label>
                <input class="form-control" type="text" placeholder="Ingrese su Cargo"name="inputCargo"  aria-label="default input example" require>
               
            </div>
            <div>
            <input type="submit" name="btn btn-primary mb-2 ml-2" value="Registrar">
            </div>
        </form>
    </div>
    <br><br>
</div>

