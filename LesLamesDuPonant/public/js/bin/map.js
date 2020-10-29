var mymap = L.map('mapid').setView([47.273905, -2.213766], 14);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',


}).addTo(mymap);

var marker = L.marker([47.354449, -2.179194]).addTo(mymap);
//Création de pop up
marker.bindPopup("<b>Salle d'entrainement Lames Du Ponant</b>").openPopup();


var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("Ton click correspond à la " + e.latlng.toString())
        .openOn(mymap);
}

mymap.on('click', onMapClick);