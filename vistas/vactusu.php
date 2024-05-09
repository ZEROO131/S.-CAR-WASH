<div class="act">
    <div class="actusu">

        <p class="tit">Actualizar datos</p>

        <div class="mb-3 actb">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control actba" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="mb-3 actb">
            <label for="exampleFormControlInput1" class="form-label">Numero de telefono</label>
            <input type="email" class="form-control actba" id="exampleFormControlInput1" placeholder="(000) 0000000">
        </div>

        <button class="btn boton busu" type="button" id="actd"><a href="home.php"></a>Guardar Datos</button>
    </div>

    <div class="vehinu">

    <p class="tit1">Añadir vehiculo</p>

    <div class="mb-3 actbb">
            <label for="exampleFormControlInput1" class="form-label">Placa de vehiculo </label>
            <input type="email" class="form-control actba" id="exampleFormControlInput1" placeholder="(ABC123)">
    </div>

    <div class="mb-3 actbb">
        <label for="exampleFormControlInput1" class="form-label">Marca del vehiculo</label>
        <select class="form-select form-select-lg mb-3" aria-label="Large select example">
            <option selected>Selecciona la marca</option>
            <option value="1">Audi</option>
            <option value="2">Ford</option>
            <option value="3">Chevrolet</option>
        </select>
    </div>

    <div class="mb-3 actbb">
        <label for="exampleFormControlInput1" class="form-label">Modelo del vehiculo</label>
        <select class="form-select form-select-lg mb-3" aria-label="Large select example">
            <option selected>Selecciona el modelo</option>
            <option value="1">A4</option>
            <option value="2">Explorer</option>
            <option value="3">Captiva</option>
        </select>
    </div>

    <button class="btn boton busu" type="button" id="actv"><a></a>Añádir vehiculo</button>

    </div>
</div>

<script>
    document.getElementById("actd").addEventListener("click", function() {
    alert("Haz guardado satisfactoriamente los datos.");
    window.location.href = "home.php?pg=2001";
    });

    document.getElementById("actv").addEventListener("click", function() {
    alert("Haz añadido tu vehiculo satisfactoriamente🏍️.");
    window.location.href = "home.php?pg=2001";
    });
</script>