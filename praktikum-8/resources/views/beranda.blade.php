<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        #map {
            height: 600px;
        }
    </style>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>

<body>
    <div id="map"></div>
    <script>
        var map = L.map('map').setView([-0.3155398750904368, 117.1371634207888], 5);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        let loi = {
            "type": "FeatureCollection",
            "features": [{
                    "type": "Feature",
                    "properties": {
                        "name": "Kota Depok"
                    },
                    "geometry": {
                        "coordinates": [
                            106.81756728961983,
                            -6.4084235264011795
                        ],
                        "type": "Point"
                    },
                    "id": 0
                },
                {
                    "type": "Feature",
                    "properties": {
                        "name": "Kota Jakarta"
                    },
                    "geometry": {
                        "coordinates": [
                            106.82753473948748,
                            -6.176657081858309
                        ],
                        "type": "Point"
                    },
                    "id": 1
                },
                {
                    "type": "Feature",
                    "properties": {
                        "name": "Kota Bandung"
                    },
                    "geometry": {
                        "coordinates": [
                            107.60757534934044,
                            -6.923724497905269
                        ],
                        "type": "Point"
                    },
                    "id": 2
                }
            ]
        }

        var geojson = L.geoJSON(loi, {
            onEachFeature: function(feature, layer) {
                layer.bindPopup(feature.properties.name);
            }
        }).addTo(map);
    </script>
</body>

</html>
