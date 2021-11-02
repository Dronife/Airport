$('input[name=lat], input[name=long]').keyup(function() {
    $('input[name=long]').val($('input[name=long]').val().slice(0, 7))
    $('input[name=lat]').val($('input[name=lat]').val().slice(0, 7))
    marker.setLngLat([$('input[name=long]').val(), $('input[name=lat]').val()])
});