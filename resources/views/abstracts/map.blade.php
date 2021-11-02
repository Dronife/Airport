<div id='map' style='height: 450px;'></div>
@push('scripts')
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <script type="text/javascript">
        let long = '{{$long ?? 23.8813 }}';
        let lat = '{{$lat ?? 55.1694 }}';
        mapboxgl.accessToken =
            'pk.eyJ1Ijoibm92YXR1cmFzIiwiYSI6ImNrdmkxOHZrYTBrbDEyd3F4ZXpjMHdmdXIifQ.oO0EBEQiR-hkWbmEeb7EYw';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [long, lat],
            zoom: 5
        });
    </script>
@endpush