<div class="gcita">

    <div class="empre">
        <p class="tit">Rellena los datos del formulario</p>

        <div class="mb-3 actb">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="email" class="form-control actba" id="exampleFormControlInput1" placeholder="...">
        </div>

        <div class="mb-3 actb">
            <label for="exampleFormControlInput1" class="form-label">Placa</label>
            <input type="email" class="form-control actba" id="exampleFormControlInput1" placeholder="(000) 0000000">
        </div>

        <div class="mb-3 actb">
            <button id="myButton">Seleccionar fecha</button>
            <input type="text" id="myInput">
        </div>

        <div class="mb-3 actb">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control actba" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <button class="btn boton busu" type="button" id="divcita" id="actv"><a href="home.php"></a>Enviar datos</button>
    </div>

    <div class="citafo">
        <div class="citamo" id=divcitav style="display: none;" >
        <div class="mb-3 actbb">
            <label for="exampleFormControlInput1" class="form-label">Selecciona municipio</label>
            <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                <option selected>Municipio</option>
                <option value="1">Chía</option>
                <option value="2">Mosquera</option>
                <option value="3">Cota</option>
            </select>

            <label for="exampleFormControlInput1" class="form-label">Selecciona establecimiento</label>
            <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                <option selected>Establecimiento</option>
                <option value="1">EMPRESA 1</option>
                <option value="2">EMPRESA 2</option>
                <option value="3">EMPRESA 3</option>
            </select>

            <button class="btn boton busu" type="button" id="citag"><a></a>Guardar</button>    </div>
        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script>
    const button = document.getElementById("myButton");
    const input = document.getElementById("myInput");

    button.addEventListener("click", function() {
      flatpickr(input, {
        enableTime: false,
        dateFormat: "Y-m-d",
        onClose: function(selectedDates, dateStr, instance) {
          console.log(dateStr);
        }
      }).open();
    });

    document.addEventListener("DOMContentLoaded", function() {
    var boton = document.getElementById("divcita");
    var infoDiv = document.getElementById("divcitav");

    boton.addEventListener("click", function() {
        if (infoDiv.style.display === "none") {
            infoDiv.style.display = "block";
        } else {
            infoDiv.style.display = "none";
        }
    });
});

    document.getElementById("citag").addEventListener("click", function() {
    alert("Se a enviado satisfactoriamente tu solictud.");
    window.location.href = "home.php?pg=2001";
    });
  </script>
