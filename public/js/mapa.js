
        var map;
        function initMap() {
         map = new google.maps.Map(document.getElementById('map'), {
           center: {lat: -2.192425866321628, lng: -79.89646210455565},
           zoom: 13,
         });
         var marker = new google.maps.Marker({
           position: {lat: -2.192425866321628, lng: -79.89646210455565},
           map: map,
          title: 'Guayaquil-Ecuador'
         });
       }
    