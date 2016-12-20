function init() {
    console.log('init...');
    let app = new App('data.json',document.getElementById('container') );
    console.log('App',app);
}

function tag(type){
    return document.createElement(type);
}

class Photo {
    constructor(titre, url, description){
        this.titre = titre;
        this.url = url;
        this.description = description;
    }
}

class App {
    constructor(url, elementHTML) {
        this.container = elementHTML;
        // Charge les données
        this.chargeur = new Loader();
        this.chargeur.load(url, this.onGalleryReady.bind(this));
    }
    onGalleryReady(photos) {
        this.photos = photos;
        console.log('photos',this.photos);
        //let container = document.getElementById('container');
        // affiche les box photos
        let boxPhoto = tag('div');
        //boxPhoto.classList.add("photo");
        // La div photo devient l'enfant de l'élément HTML
        this.container.appendChild(boxPhoto);
        // cf correction Boutique.es6
        this.ViewManager = new ViewManager(boxPhoto);
        this.ViewManager.photos = this.photos;
        console.log('ViewManager',this.ViewManager);
    }
}
//OK OMG!  (=^o^=)
class Loader {
    constructor(){
        console.log('constructor', this);
        this.photos = [];
    }
    load(url, onLoadCallback) {
        this.onLoadCallback = onLoadCallback;
        let req = new XMLHttpRequest();
        req.onload = this.onDataReady.bind(this);
        req.open('GET', url, true);
        req.send();
    }
    onDataReady(e){
        let data = e.target.responseText;
        //TODO finir mappage des photos!
        this.photos = JSON.parse(data)['photos']
            .map( p => new Photo(p.titre, p.url, p.description));
        this.titre = JSON.parse(data)['titre'];
        this.onLoadCallback(this.photos);
    }
}

class ViewManager {
    set photos(photos){
        console.log('vue Galerie setter photos', photos.length);
        this._photos = photos;
        this.render();
    }
    constructor(elementHTML){
        this.container = elementHTML;
        this._photo = [];
    }
    render(){
        console.log('Galerie.render » ', this._photos);
        //FIXME  je bloque ici =____=
        let photoRenderers = this._photos.map((p) => this.displayPhotos(p)); // <=  équivalent à New VueProduit() dans Boutique es6
        console.log('photoRenderers', photoRenderers);
        photoRenderers.forEach((i) => document.getElementById('container').appendChild(i));
    }

    displayTitle(title) {
        console.log('title', title);
        let cardTitle = tag('h2');
        cardTitle.innerHTML = title;
        document.getElementById('header').appendChild('cardTitle');
    }

    displayPhotos(photos) {
        console.log('photos', photos);
        // Box Photo
        this.divPhotoBox = tag('div');
        this.divPhotoBox.classList.add('photo');
        document.getElementById('container').appendChild(this.divPhotoBox);
        let titre = tag('h3');
        let image = tag('img');
        let description = tag('p');
        titre.innerHTML = photos.titre;
        titre.classList.add('titre');
        image.setAttribute("src", photos.url);
        description.innerHTML = photos.description;
        description.classList.add('description');
        this.divPhotoBox.appendChild(titre);
        this.divPhotoBox.appendChild(image);
        this.divPhotoBox.appendChild(description);

        return this.divPhotoBox;
        // It is alive!
    }
}

