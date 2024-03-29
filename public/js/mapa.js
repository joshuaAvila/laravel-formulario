
       /* var map;
        function initMap() {
         map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -2.192425866321628, lng: -79.89646210455565},
          //center: new google.maps.LatLng({lat: -2.192425866321628, lng: -79.89646210455565}),
           zoom: 13,
         });
         var marker = new google.maps.Marker({
           position: {lat: -2.192425866321628, lng: -79.89646210455565},
           //position: new google.maps.LatLng({lat: -2.192425866321628, lng: -79.89646210455565}),
           map: map,
           draggable: false,
           title: 'Guayaquil-Ecuador'
         });
       }*/


    function initMap(){
        var latitud = -2.192425866321628;
        var longitud = -79.89646210455565;

        coordenadas = {
          lat: latitud,
          lng: longitud  
        }

        generarMapa(coordenadas);
     }

     function generarMapa(coordenadas){
       var mapa = new google.maps.Map(document.getElementById('map'),{
        center: new google.maps.LatLng(coordenadas.lat,coordenadas.lng),
        zoom: 13,
         
       });

       var marker = new google.maps.Marker({
        map: mapa,
        draggable: true,
        position: new google.maps.LatLng(coordenadas.lat, coordenadas.lng),
      });

      marker.addListener('dragend', function(event){
        document.getElementById("latitud").value = this.getPosition().lat();
        document.getElementById("longitud").value = this.getPosition().lng();
        document.getElementById("direccion").value = this.getPosition().lng();
        document.getElementById("provincia").value = this.getPosition().lng();
      });
      map.setCenter(marker.position);
      marker.setMap(map);
     }
  