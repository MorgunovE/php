var styleArray = [
    {
      "featureType": "water",
      "elementType": "geometry.fill",
      "stylers": [
        {
          "color": "#42e8df"
        }
      ]
    }
  ]

  var mapOptions = {
    center: new google.maps.LatLng(40.7590615, -73.969231),
    zoom: 10,
    styles: styleArray,
    scrollwheel: true,
    backgroundColor: 'transparent',
      mapTypeControl: true,          
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementsByClassName("maps")[0],
    mapOptions);        
  var myLatlng = new google.maps.LatLng(40.7590615, -73.969231);
  var focusplace = {lat: 40.7590615 , lng: -73.969231 };      
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      icon: {
          url: "./assets/images/01.png"
      }
  })