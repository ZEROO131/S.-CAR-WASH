<button class="flecha"> <a href="homeem.php?pg=4001"><img src="img/flechablanca.png" alt=""></a></button>
<div class="container_ad">
        <h1>Actualiza tus datos</h1>
        <form class="formad">
            <label class="labelad" for="email">Correo:</label>
            <input class="inputad" type="email" id="email" name="email" required><br>
            <label class="labelad" for="phone">Numero:</label>
            <input class="inputad" type="tel" id="phone" name="phone" required><br>
            <label class="labelad" for="address">Direccion:</label>
            <input class="inputad" type="text" id="address" name="address" required><br>
            <button class="botonad" id="actm" type="submit">Guardar</button>
        </form>
        <div id="map" style="height: 300px; width: 100%; margin-top: 20px;"></div>
    </div>
    <!-- <script>
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
    </script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

    <div class="imagedifi">
        <img src="img/edificioblanco.png" alt="">
    </div>