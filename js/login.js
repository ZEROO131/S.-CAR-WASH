
    function login() {
        var identificacion = document.getElementById('email').value;
        var contrasena = document.getElementById('password').value;
        if (identificacion.trim() === '' || contrasena.trim() === '') {
            alert('Por favor, complete todos los campos.');
            return;
        }
    
    var tipo_actor;
    if (identificacion === '1') {
        tipo_actor = 'usuario';
    } else if (identificacion === '2') {
        tipo_actor = 'empleado';
    } else if (identificacion === '3') {
        tipo_actor = 'autolavado';
    } else {
        alert('Identificación no válida. Ingrese un número de identificación válido.');
        return;
    }
    
    var contrasena_valida;
    switch (tipo_actor) {
        case 'usuario':
        contrasena_valida = (contrasena === '12345');
        break;
        case 'empleado':
        contrasena_valida = (contrasena === '12345');
        break;
        case 'autolavado':
        contrasena_valida = (contrasena === '12345');
        break;
        default:
        contrasena_valida = false;
        break;
    }
    
    if (contrasena_valida) {
        switch (tipo_actor) {
        case 'usuario':
            window.location.href = 'home.php?pg=2001';
            break;
        case 'empleado':
            window.location.href = 'homeep.php?=3001';
            break;
        case 'autolavado':
            window.location.href = 'homeem.php?pg=4001';
            break;
        }
    } else {
        alert('Contraseña incorrecta. Por favor, inténtelo de nuevo.');
    }
    }
    
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            if (document.activeElement.tagName === 'INPUT') {
                event.preventDefault();
                document.getElementById('loginForm').submit();
            }
        }
    });



