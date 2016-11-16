var requete;
// Requete Ajax
function loadJSON() {
            requete = new XMLHttpRequest();
            // au chargement on affiche le texte reçu ds la console et sur la page
            requete.onload = onJSON;
            requete.onerror = onError;
            requete.open('get', 'infos.json', true);
            requete.send();
};
// Fonctio qui charge et affiche les infos utilisateur
function onJSON(e) {
            console.log('onDataText', this.responseText); // this.responseText est défini
            // "apercu" est la div dans laquelle apparaitra les infos
            var apercu = document.getElementById('apercu');
            apercu.style.display = 'block';
            // "infos" stock les données JSON
            var infos = JSON.parse(this.responseText)['infos'];
            // "infoList" créera un élément 'div'
            var infoList = document.createElement('div');
            // Pour chaque Objet dans "infos" on crée un paragrape contenant les données
            infos.forEach(function (info) {
                var infoPara = document.createElement('p');
                infoPara.innerText = info.nom + ' / ' + info.prenom + ' / ' + info.email + ' / ' + info.ville;
                // Ces données contenues dans "infoPara" seront les enfants de "infoList"
                infoList.appendChild(infoPara);
            });
            // "infoList" qui sera lui même enfant de la div "apercu"
            apercu.appendChild(infoList);
        //FIXME Si données déjà affichées, ne pas les réafficher

        };
// Fonction qui cache les infos utilisateurs
function hideJSON(e) {
        var apercu = document.getElementById('apercu');
        apercu.style.display = 'none';
};

function onError(e) {
                alert("Ne fonctionnera qu'avec un serveur :) ", e);
};