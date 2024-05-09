/* ------------------------------------------------------------------------------- */
/* --------------------------INICIO ASIGNACION EMPLEADO-------------------------------- */
/* ------------------------------------------------------------------------------- */

 function mostrarAsigemple(botonId) {
     var asigempleDiv = document.getElementById('asigemple');
     var boton = document.getElementById(botonId);
     if (asigempleDiv.style.display === 'none') {
         asigempleDiv.style.display = 'block';
     } else {
         asigempleDiv.style.display = 'none';
     }
 }

/* ------------------------------------------------------------------------------- */
/* --------------------------FIN ASIGNACION EMPLEADO-------------------------------- */
/* ------------------------------------------------------------------------------- */

/* ------------------------------------------------------------------------------- */
/* --------------------------INICIO CREAR EMPLEADO-------------------------------- */
/* ------------------------------------------------------------------------------- */
const generatePasswordButton = document.getElementById('generate-password');
const passwordInput = document.getElementById('password');
const generatedPasswordDiv = document.getElementById('generated-password');
const saveButton = document.getElementById('save');

generatePasswordButton.addEventListener('click', () => {
  const length = 12;
  const charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
  let password = '';

  for (let i = 0; i < length; i++) {
    password += charset.charAt(Math.floor(Math.random() * charset.length));
  }

  passwordInput.value = password;
  generatedPasswordDiv.innerHTML = password;
});

saveButton.addEventListener('click', () => {
  alert('El formulario ha sido cargado exitosamente.');
});
/* ------------------------------------------------------------------------------- */
/* --------------------------FIN CREAR EMPLEADO-------------------------------- */
/* ------------------------------------------------------------------------------- */

/* ------------------------------------------------------------------------------- */
/* --------------------------INICIO MAPA EMPRESA HOME-------------------------------- */
/* ------------------------------------------------------------------------------- */

function inicializarMapa() {
    var ubicacion = { lat: -34.603722, lng: -58.381592 }; // Coordenadas de ejemplo (Buenos Aires, Argentina)
    var mapa = new google.maps.Map(document.getElementById("mapa"), {
        zoom: 12,
        center: ubicacion
    });
    var marcador = new google.maps.Marker({
        position: ubicacion,
        map: mapa
    });
}
/* ------------------------------------------------------------------------------- */
/* --------------------------FIN MAPA EMPRESA HOME-------------------------------- */
/* ------------------------------------------------------------------------------- */
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
      center: { lat: -34.397, lng: 150.644 },
      zoom: 8,
  });

  const input = document.getElementById("address");
  const autocomplete = new google.maps.places.Autocomplete(input);

  autocomplete.bindTo("bounds", map);

  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  map.addListener("bounds_changed", () => {
      searchAddress();
  });

  function searchAddress() {
      const searchBox = new google.maps.places.SearchBox(input);
      map.setBounds(searchBox.getBounds());
      map.addListener("bounds_changed", () => {
          searchBox.setBounds(map.getBounds());
      });

      let markers = [];
      searchBox.addListener("places_changed", () => {
          const places = searchBox.getPlaces();

          if (places.length === 0) {
              return;
          }

          markers.forEach((marker) => {
              marker.setMap(null);
          });
          markers = [];

          const bounds = new google.maps.LatLngBounds();
          places.forEach((place) => {
              if (!place.geometry || !place.geometry.location) {
                  console.log("Returned place contains no geometry");
                  return;
              }
              const icon = {
                  url: place.icon,
                  size: new google.maps.Size(71, 71),
                  origin: new google.maps.Point(0, 0),
                  anchor: new google.maps.Point(17, 34),
                  scaledSize: new google.maps.Size(25, 25),
              };

              markers.push(
                  new google.maps.Marker({
                      map,
                      icon,
                      title: place.name,
                      position: place.geometry.location,
                  })
              );

              if (place.geometry.viewport) {
                  bounds.union(place.geometry.viewport);
              } else {
                  bounds.extend(place.geometry.location);
              }
          });
          map.fitBounds(bounds);
      });
  }
}
/* ------------------------------------------------------------------------------- */
/* -------------------------INICIO ACTUALIZAR DATOS-------------------------------- */
/* ------------------------------------------------------------------------------- */