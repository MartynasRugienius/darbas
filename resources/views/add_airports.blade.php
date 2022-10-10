@extends('layouts.default')
@section('content')
<div class="container-fluid mt-3">
    <div class="text-center">
        <h1>Let's create a new airport!</h1>
    </div>
    <hr>
    <form action method="POST">
        <div class="d-grid gap-2 mx-auto mt-2">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" type="text" placeholder="Name">
        </div>
        <div class="d-grid gap-2 mx-auto mt-2">
            <select class="form-select" aria-label="Select country">
                <option selected>Select country</option>
                <option value="1">Lithuania</option>
            </select>
        </div>
        <div class="d-grid gap-2 mx-auto mt-2">
            <label for="map" class="form-label">Map</label>
            <input class="form-control" type="text" style="background-color: rgb(231, 231, 231)" readonly>
            <script>
                const locationElement = document.getElementById('location');
                mapboxgl.accessToken = 'pk.eyJ1IjoidGl0YXNueGx0IiwiYSI6ImNqZWs3ZHliejBjOWMzM284aG1nbG1yN3IifQ._nFPiSI4HSaZriIEDwRa8g';
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    doubleClickZoom: false
                });

                // Add the control to the map.
                map.addControl(
                    new MapboxGeocoder({
                    accessToken: mapboxgl.accessToken,
                    mapboxgl: mapboxgl
                    })
                );

                let marker = new mapboxgl.Marker()
                    .setLngLat([30.5, 50.5])
                    .addTo(map);

                map.on('dblclick', (e) => {
                    marker.setLngLat(e.lngLat);
                    locationElement.value = `${e.lngLat.lng} ${e.lngLat.lat}`;
                })

            </script>
        </div>
        <button type="submit" class="btn btn-success mt-3">Create</button>
    </form>
</div>
@endsection