<?php include('header.php')?>

    <div class="ini">
        <h2>Regístrate</h2>
        <h6>Y obtén grandes beneficios.</h6>
    </div>

    <div class="registrer-box">
        <form>
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Escriba su nombre">

            <label for="apellido">Apellidos</label>
            <input type="text" placeholder="Escriba sus apellidos">

            <label for="correo">Correo electrónico</label>
            <input type="text" placeholder="Escriba su correo electrónico">

            <label for="contraseña">Contraseña</label>
            <input type="password" placeholder="Escriba su contraseña">
            
            <label for="nacimiento">Fecha de Nacimiento</label>
            <input type="date" class="date" name="date" max="" style="width: 100%;"><br><br>

            <center><input type="submit" value="Ingresar"><br></center>
        </form>
    </div>
    
    <br><br>

    
    
<?php include('footer.php')?>