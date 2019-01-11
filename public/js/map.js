navigator.geolocation.getCurrentPosition(initMap);
function initMap(pos)
{
    if(typeof pos === 'undefined') {
        pos = {lat: -34.397, lng: 150.644};
    }
    showLocation(pos);
}

navigator.geolocation.watchPosition(initMap);
function showLocation(pos)
{
    if(typeof pos === 'undefined')
    return;
    console.log(pos);
    var current = {lat: -parseFloat(pos.lat), lng: parseFloat(pos.lng)};
    var map = new google.maps.Map(document.getElementById('map'), {zoom: 15, center: current});
    var marker = new google.maps.Marker({position: current, map: map});
}
