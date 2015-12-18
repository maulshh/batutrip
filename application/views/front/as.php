<div class="col-lg-12 destinasi render_map" id="lokasi">
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script>
    <script id="facebook-jssdk" src="//connect.facebook.net/id_ID/sdk.js#xfbml=1&amp;version=v2.3&amp;appId=1710121405881140"></script>
    <script type="text/javascript">var centreGot = false;</script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        //<![CDATA[

        var map; // Global declaration of the map
        var lat_longs_map = new Array();
        var markers_map = new Array();
        var iw_map;

        iw_map = new google.maps.InfoWindow();

        function initialize_map() {

            var myLatlng = new google.maps.LatLng(-0.025824, 109.337739);
            var myOptions = {
                zoom: 15,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP}
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            google.maps.event.addListener(map, "bounds_changed", function(event) {
                if (!centreGot) {
                    var mapCentre = map.getCenter();
                    marker_0.setOptions({
                        position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
                    });
                }
                centreGot = true;
            });

            var markerOptions = {
                map: map
            };
            marker_0 = createMarker_map(markerOptions);


        }


        function createMarker_map(markerOptions) {
            var marker = new google.maps.Marker(markerOptions);
            markers_map.push(marker);
            lat_longs_map.push(marker.getPosition());
            return marker;
        }

        google.maps.event.addDomListener(window, "load", initialize_map);

        //]]>
    </script>
    <div id="map_canvas"></div>
</div>