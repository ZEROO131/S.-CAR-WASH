<body>
    <button id="boton" onclick="mostrar();">Mostrar Información

    <div></div>

</button>
    
    <div id="info">
        <button id="boton" onclick="ocultar();">Ocultar Información</button>
        
    </div>

    <script>
        function mostrar(){
            document.getElementById('info').style.display = 'block';
        }

        function ocultar(){
            document.getElementById('info').style.display = 'none';
        }
    </script>
</body>
<style>
        #info{
            display: none;
        }
    </style>