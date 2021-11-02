$(document).ready(function() {
    let long = $('input[name=long]').val();
    let lat = $('input[name=lat]').val();
    if (long && lat)
        marker.setLngLat([long, lat]);
})