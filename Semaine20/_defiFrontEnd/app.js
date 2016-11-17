var requete ;

function loadCalendar() {
            console.log('test');
            requete = new XMLHttpRequest();
            requete.onload = calendarJSON;
            requete.onerror = onError;
            requete.open('get', 'https://www.googleapis.com/calendar/v3/calendars/simplon.co_7sc0sp073u3svukpopmhob9fmg%40group.calendar.google.com/events?key=AIzaSyADm7UvQFnHmkfo_sei1oZoLvx_X-_mhFI', true);
            requete.send();
};

function calendarJSON(e) {

            var liste = document.getElementById('liste');
            var dataCalendar = JSON.parse(this.responseText);
            var items = dataCalendar.items; // OK :)

            items.map(function(event) {
                var date = new Date(event.start.dateTime);
                var jour = date.getDate();
                var mois = date.getMonth();
                var annee = date.getFullYear();
                console.log(jour, mois, annee);

                var tr;
                var td;
                var x = document.getElementById("insertion");

                    tr = x.insertRow(x.rows.length);
                    tr.style.padding = "20px 10px";
                    td = tr.insertCell(tr.cells.length);
                    td.innerText = event.summary;
                    td = tr.insertCell(tr.cells.length);

                    if(event.status == "confirmed") {
                        console.log(event.status);
                        td.innerText = jour + " " + mois + " " + annee;
                    } else if(event.start.date) {
                        td.innerText = event.start.date;
                    } else {
                       td.innerText = "annulé";
                    }
                });

            if (requete.readyState === 4) {
                console.log('requete statut :', requete.readyState);
            } else {
                console.log("erreur");
            };

        };

function onError(e){
    alert("erreur de chargement");
};