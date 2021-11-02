const marker = new mapboxgl.Marker()
    .setLngLat([23.8813, 55.1694])
    .addTo(map);

map.on('click', (e) => {
    var longlat = e.lngLat.wrap()
    $('input[name=long]').val(longlat.lng);
    $('input[name=lat]').val(longlat.lat);
    marker.setLngLat([longlat.lng, longlat.lat]);
})