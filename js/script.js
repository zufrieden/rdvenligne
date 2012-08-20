/* Author:

*/

    $(function(){
      // bind change event to select
      
    

    if ($('#country-abo')) {

        $('#country-abo').submit(function () {
            var url = $(this).children('select').val(); // get selected value
            if (url || url!="") { // require a URL
                window.location = url; // redirect
            }else{
                alert('Merci de choisir un pays');
            }
            return false;
        });

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                $.getJSON('http://ws.geonames.org/countryCode', {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                    type: 'JSON'
                }, function(result) {
                    $('#country-abo option[data-country-code='+result.countryCode+']').attr("selected", "selected");
                });
            });
        }
    }

});