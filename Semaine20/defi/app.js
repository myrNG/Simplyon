var requete ;
var URL = "https://www.googleapis.com/calendar/v3/calendars/simplon.co_7sc0sp073u3svukpopmhob9fmg%40group.calendar.google.com/events?key=AIzaSyADm7UvQFnHmkfo_sei1oZoLvx_X-_mhFI";
function loadCalendar() {
            console.log(this.responseText); // this = XMLHttpRequest()
            requete = new XMLHttpRequest();
            requete.onload = calendarJSON;
            requete.onerror = onError;
            requete.open('get', URL, true);// méthode synchrone, sinonasynchrone avec false
            requete.send();
};
// Avoir toujours un code sur la défensive!!!!
function calendarJSON(e) {
            console.log(e.target.responseText); // différent de console.log(this.responseText);
            var liste = document.getElementById('liste');
            var dataCalendar = JSON.parse(this.responseText);
            var items = dataCalendar.items; // OK :)

            var donnees = document.createElement('div');
            items.map(function(data) {
                // Création d'éléments
                var infos = document.createElement('p');
                var titre = data.summary;
                var date = data.created;
                //date = date.substring(0,10);
                infos.innerText = titre + " -----------------" + date;
                donnees.appendChild(infos);
                infos.onclick = function() {
                    var bloc = document.createElement('div');
                };
            });
            liste.appendChild(donnees);

            if (requete.readyState === 4) {
                console.log('requete statut :', requete.readyState);
            } else {
                console.log("erreur");
            };
        };
        //TODO target = l'objet qui reçoit l'event et current.target = l'objet sur lequel est rajouter l'écouteur d'event
function afficheData(e) {

};

function stringToDate(t) {
        var dateParts = t.split('+')[0].split('T');
        var date = new Date();
        return stringToDate;
};

function onError(e){
    alert("erreur de chargement");
};