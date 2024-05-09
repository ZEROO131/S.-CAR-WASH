<button class="flecha"> <a href="homeep.php?=3001"><img src="img/flechablanca.png" alt=""></a></button>
<div class="encabezado-emple1">
        <h1 class="txtasa">Actualización el servicio asignado</h1>
    </div>
    <div class="conade">
        <div class="contenedor-emple">
            <div class="card">
                <h2>HKM262</h2>
                <label for="info1">Actualización de estado:</label>
                <input type="text" id="info1" name="info1">
                <label for="desc1">Descripción de etapa:</label>
                <textarea id="desc1" name="desc1" rows="2"></textarea>
                <button onclick="mostrarAlerta('Información guardada con éxito')">Guardar</button>
            </div>
            <div class="card">
                <h2>LKE411</h2>
                <label for="info2">Actualización de estado:</label>
                <input type="text" id="info2" name="info2">
                <label for="desc2">Descripción de etapa:</label>
                <textarea id="desc2" name="desc2" rows="2"></textarea>
                <button onclick="mostrarAlerta('Información guardada con éxito')">Guardar</button>
            </div>
            <div class="card">
                <h2>KKK666</h2>
                <label for="info3">Actualización de estado:</label>
                <input type="text" id="info3" name="info3">
                <label for="desc3">Descripción de etapa:</label>
                <textarea id="desc3" name="desc3" rows="2"></textarea>
                <button onclick="mostrarAlerta('Información guardada con éxito')">Guardar</button>
            </div>
            <div class="card">
                <h2>JDH456</h2>
                <label for="info4">Título:</label>
                <input type="text" id="info4" name="info4">
                <label for="desc4">Descripción de etapa:</label>
                <textarea id="desc4" name="desc4" rows="2"></textarea>
                <button onclick="mostrarAlerta('Información guardada con éxito')">Guardar</button>
            </div>
            <div class="card">
                <h2>IFM282</h2>
                <label for="info5">Título:</label>
                <input type="text" id="info5" name="info5">
                <label for="desc5">Descripción de etapa:</label>
                <textarea id="desc5" name="desc5" rows="2"></textarea>
                <button onclick="mostrarAlerta('Información guardada con éxito')">Guardar</button>
            </div>
            <div class="card">
                <h2>DLT006</h2>
                <label for="info6">Título:</label>
                <input type="text" id="info6" name="info6">
                <label for="desc6">Descripción de etapa:</label>
                <textarea id="desc6" name="desc6" rows="2"></textarea>
                <button onclick="mostrarAlerta('Información actualizada correctamente')">Guardar</button>
            </div>
        </div>

        <div class="info-derecha">
            <h2>Detalle de factura</h2>
            <H1>LISTA DE SERVICIOS</H1>
            <p>N. SERVICIO ............................................0.000,00.</p>
            <p>N. SERVICIO ............................................0.000,00.</p>
            <p>N. SERVICIO ............................................0.000,00.</p>
            <p>N. SERVICIO ............................................0.000,00.</p>
            <p>N. SERVICIO ............................................0.000,00.</p>
            <p>N. SERVICIO ............................................0.000,00.</p>
            <p>N. SERVICIO ............................................0.000,00.</p>
            <p>N. SERVICIO ............................................0.000,00.</p>
            <p>N. SERVICIO ............................................0.000,00.</p>
            <br>
            <h2>TOTAL: 0.000,00</h2>
            <p>FECHA: </p>
            <P>No. REFERENCIA</P>
            <label for="infoAd"></label>
        </div>
    </div>
    <script>
        function mostrarAlerta(mensaje) {
            alert(mensaje);
        }
    </script>