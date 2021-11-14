<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/navbar.css">
        <script src="https://unpkg.com/vue@next"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <title>Smiling Across Local SG</title>      

    </head>

    <body>
        <!-- Navigation -->
        <div id="navdiv">
            <include-navbar></include-navbar>
        </div>
        >
        
        <div id="app3">
            <div class="searchbar">
                <div class="row g-2 my-2">
                    <div class="col-md-12 col-sm-12">
                        
        
                   
               

            <!-- <div class="d-flex justify-content-center "> -->
                <!-- <table class="table bg-white w-75"> -->
                    <!-- <tr v-for="travel in travel_history"> -->
                        <!-- <td><h2>{{travel.location_name}}</h2><br/>{{travel.category}}</td> -->
                        <!-- <td>{{travel.time_visited}}</td> -->
                    <!-- </tr> -->
                <!-- </table> -->
            <!-- </div> -->
        
        <div id="map2" class="map-responsive"></div>
        <div id="legend"><h6>Legend</h6></div>
        

    </body>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDT6sTbyN3xQA9bTHQYcyFVXsqAXT54zfE&callback=initMap"
        async defer></script>
    <script type="text/javascript" src="js/navbar.js"></script>
    <script type="text/javascript" src="js/sessions.js"></script>
    <script type="text/javascript" src="js/signOutPopUp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        var infowindow;
        function initMap() {
        const map = new google.maps.Map(document.getElementById("map2"), {
        
                zoom: 11.7,
                center: { lat: 1.3649170000000002, lng: 103.82287200000002 },
                styles: [    
        {
            featureType: "poi",
            elementType: "labels",
            stylers: [{ visibility: "off" }]
        }
    ]
            });

            setMarkers(map);
            const icons = {
    
    VistedAttraction: {
      name: "Visited Attraction",
      icon: "https://img.icons8.com/external-wanicon-lineal-color-wanicon/64/000000/external-check-user-interface-wanicon-lineal-color-wanicon.png",
    }
  };

var legend = document.getElementById("legend");

   for (var key in icons) {
      const type = icons[key];
      const name = type.name;
      const icon = type.icon;
      const div = document.createElement("div");

    div.innerHTML = '<img src="' + icon + '" width=23" height="23"> ' + name;
    legend.appendChild(div);
  }

  map.controls[google.maps.ControlPosition.LEFT_TOP].push(document.getElementById('legend')); 
            
  
        
            




            }
        
            function setMarkers(map)  {
                const image = {
                    url: "https://img.icons8.com/external-wanicon-lineal-color-wanicon/64/000000/external-check-user-interface-wanicon-lineal-color-wanicon.png",
                    // This marker is 20 pixels wide by 32 pixels high.
                    size: new google.maps.Size(30, 48),
                    scaledSize: new google.maps.Size(30, 48),
                    // The origin for this image is (0, 0).
                    origin: new google.maps.Point(0, 0),
                    // The anchor for this image is the base of the flagpole at (0, 32).
                    anchor: new google.maps.Point(0, 32),
                };
                const shape = {
                    coords: [1, 1, 1, 20, 18, 20, 18, 1],
                    type: "poly",
                };
                var travel_history=''
                    // POST request
                    /* axios.post(url, data
                    )
                    .then(response => {
                        console.log(response.data)
                        this.showStatus = true
                        this.status = response.data
                    })
                    .catch(error => {
                        this.showStatus = true
                        this.status = 'There was an error: ' + error.message 
                    })  */
                    // GET request
                    var email = localStorage.getItem('user_email')
                    url="http://localhost/WAD_II_Project_G9_T6/db/getTravelHistory.php"
                    const data= {email: email}
                    axios.get(url,{
                params: data
            })
                    .then(response => { 
                        console.log(response.data)
                        var lat_lng_list=response.data;
                        for (let i=0;i<lat_lng_list.length;i++){
                            const attraction=lat_lng_list[i];

                            var marker=new google.maps.Marker({
                                position:{lat:parseFloat(attraction.latitude),lng:parseFloat(attraction.longitude)},
                                map,
                                icon:image,
                                shape:shape,
                                title:"visited attraction"
                            })

                            var content='<div><h2>You visited this attraction on: '+attraction.time_visited+'</h2></div>'
                            infowindow=new google.maps.InfoWindow()
                            google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
                            return function() {
                                
                                infowindow.setContent(content);
                                infowindow.open(map,marker);
                                };
                            })(marker,content,infowindow)); 
                        }
                        






                        
                    })
                    .catch(error => {
                        status = 'There was an error: ' + error.message 
                    }) 
                    
                }

                
               
    
    </script>
</html>