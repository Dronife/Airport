const marker = new mapboxgl.Marker()
    .setLngLat([23.8813, 55.1694])
    .addTo(map);

map.on('click', (e) => {
    var longlat = e.lngLat.wrap()
    $('input[name=long]').val((longlat.lng).toString().slice(0, 7));
    $('input[name=lat]').val((longlat.lat).toString().slice(0, 7));
    marker.setLngLat([longlat.lng, longlat.lat]);
})