$('input[name=lat], input[name=long]').keyup(function() {
    marker.setLngLat([$('input[name=long]').val(), $('input[name=lat]').val()])
});