<button class="flecha"> <a href="homeem.php?pg=4001"><img src="img/flechablanca.png" alt=""></a></button>

<div class="contenedor">
        <div class="card">
            <div class="card-header">
                <img src="https://www.carroya.com/noticias/sites/default/files/carros_comprar_bogota_carroya.webp" alt="">
            </div>
            <div class="card-body">
                <h2 class="card-title">KKK666</h2>
                <li>Cita:</li>
                <p class="card-description">Nombre cliente:</p>
                <p>Fecha y hora:</p>
                <a href="#" class="btn">Seleccionar empleado</a>
                <div class="extra-info">
                    <p>empleado: 01</p>
                    <p>empleado: 02</p>
                    <p>empleado: 03</p>
                    <p>empleado: 04</p>
                    <p>empleado: 05</p>
                <button class="alert-epr-btn">Aceptar</button>    
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
              <img src="https://www.carroya.com/noticias/sites/default/files/_carros_comprar_bogota_carroya.webp" alt="">
            </div>
            <div class="card-body">
                <h2 class="card-title">HDP123</h2>
                <li>Cita:</li>
                <p class="card-description">
                Nombre cliente:</p>
                <p>Fecha y hora:</p>
                <a href="#" class="btn">Seleccionar empleado</a>
                <div class="extra-info">
                    <p>empleado: 01</p>
                    <p>empleado: 02</p>
                    <p>empleado: 03</p>
                    <p>empleado: 04</p>
                    <p>empleado: 05</p>
                <button class="alert-epr-btn">Aceptar</button>    
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
              <img src="https://media.istockphoto.com/id/1150931120/es/foto/ilustraci%C3%B3n-3d-del-coche-blanco-compacto-gen%C3%A9rico-vista-frontal-lateral.jpg?s=612x612&w=0&k=20&c=HtnGCDaCYHMJ8BjrSusd7FGPMC1ZEkRUmNtGimthLWU=" alt="">
            </div>
            <div class="card-body">
                <h2 class="card-title">DMD204</h2>
                <li>Cita:</li>
                <p class="card-description">
                Nombre cliente:</p>
                <p>Fecha y hora:</p>
                <a href="#" class="btn">Seleccionar empleado</a>
                <div class="extra-info">
                    <p>empleado: 01</p>
                    <p>empleado: 02</p>
                    <p>empleado: 03</p>
                    <p>empleado: 04</p>
                    <p>empleado: 05</p>
                <button class="alert-epr-btn">Aceptar</button>    
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
              <img src="https://www.carrosyclasicos.com/media/k2/items/cache/1450fe47fc6d3f93ff072c134eaeda35_XL.jpg" alt="">
            </div>
            <div class="card-body">
                <h2 class="card-title">FBQ254</h2>
                <li>Cita:</li>
                <p class="card-description">
                Nombre cliente:</p>
                <p>Fecha y hora:</p>
                <a href="#" class="btn">Seleccionar empleado</a>
                <div class="extra-info">
                    <p>empleado: 01</p>
                    <p>empleado: 02</p>
                    <p>empleado: 03</p>
                    <p>empleado: 04</p>
                    <p>empleado: 05</p>
                <button class="alert-epr-btn">Aceptar</button>    
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
              <img src="https://loscoches.com/wp-content/uploads/2022/06/Reanult-Logan-Los-Coches-2022.jpg" alt="">
            </div>
            <div class="card-body">
                <h2 class="card-title">JSA357</h2>
                <li>Cita:</li>
                <p class="card-description">
                Nombre cliente:</p>
                <p>Fecha y hora:</p>
                <a href="#" class="btn">Seleccionar empleado</a>
                <div class="extra-info">
                    <p>empleado: 01</p>
                    <p>empleado: 02</p>
                    <p>empleado: 03</p>
                    <p>empleado: 04</p>
                    <p>empleado: 05</p>
                <button class="alert-epr-btn">Aceptar</button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
              <img src="https://www.casabritanica.com.co/wp-content/uploads/2023/01/Renault-duster-intens-blanco-glacial-01.png" alt="">
            </div>
            <div class="card-body">
                <h2 class="card-title">FAK320</h2>
                <li>Cita:</li>
                <p class="card-description">
                Nombre cliente:</p>
                <p>Fecha y hora:</p>
                <a href="#" class="btn">Seleccionar empleado</a>
                <div class="extra-info">
                    <p>empleado: 01</p>
                    <p>empleado: 02</p>
                    <p>empleado: 03</p>
                    <p>empleado: 04</p>
                    <p>empleado: 05</p>
                <button class="alert-epr-btn">Aceptar</button>
                </div>
            </div>
        </div>

    </div>

    <script>

        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const extraInfo = this.nextElementSibling;
                extraInfo.style.display = extraInfo.style.display === 'none' ? 'block' : 'none';
            });
        });
    
        const alertButtons = document.querySelectorAll('.alert-epr-btn');
        alertButtons.forEach(alertButton => {
            alertButton.addEventListener('click', function() {
                alert('¡Su solicitud ha sido confirmada!');
            });
        });
        
    </script>