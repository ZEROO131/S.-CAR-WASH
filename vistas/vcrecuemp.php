<button class="flecha"> <a href="homeem.php?pg=4001"><img src="img/flechablanca.png" alt=""></a></button>
  <div class="containerEml">
  <form class="creaemple">
        <h2>Crea la cuenta de tu empleado</h2>
        <label class="creeml" for="nombre">NOMBRE DEL EMPLEADO</label><br>
        <input class="inpeml" type="text" id="nombre" name="nombre"><br>
        <label class="creeml" for="correo">CORREO ELECTRONICO DEL EMPLEADO</label><br>
        <input class="inpeml" type="email" id="correo" name="correo"><br>
        <label class="creeml" for="telefono">NUMERO DE TELEFONO</label><br>
        <input class="inpeml" type="tel" id="telefono" name="telefono"><br>
        <label class="creeml" for="identificacion">NUMERO DE IDENTIFICACION</label><br>
        <input class="inpeml" type="text" id="identificacion" name="identificacion"><br>
        <label class="creeml" for="direccion">DIRECCION DEL EMPLEADO</label><br>
        <input class="inpeml" type="text" id="direccion" name="direccion"><br>
        <button class="butce" type="button" id="generate-password">Generate Random Password</button><br>
        <input class="inpeml" type="password" id="password" name="password" readonly><br>
        <button type="submit" id="save">Save</button><br>
    </form>
</div>
  <div id="generated-password"></div>
  <script src="js/jsgen.js"></script>