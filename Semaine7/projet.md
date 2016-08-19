# Audio / Vidéos
## Méthodes utiles
### VIDEO
* **Video Object**  
L'Object Video est récent en HTML5. Il représente le tag audio.  
Comme il est récent, il n'est pas reconnu par IE8 et les version anterieures.  
On peut accéder à `<video>` en utilisant `getElementById()` :  
``` javascript
    var x = document.getElementById("myVideo");
```  
On peut créer un tag `<video>` en utilisant `document.createElement()` :  
``` javascript
    var x = document.createElement("VIDEO");
```  
Pour plus d'infos sur les propriétés et les méthodes de cet Objet : [Infos](http://www.w3schools.com/jsref/dom_obj_video.asp)

* load() [description](http://www.w3schools.com/tags/av_met_load.asp), [exemple](http://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_av_met_load)  
Permet de changer la source de la vidéo et de re-charger la vidéo  
Il y a des méthodes pour charger, jouer, faire pause etc.   
Il y a aussi des proprietes comme la source "src", la hauteur/largeur.  
Enfin, on peut créer des évenements dans la DOM pour écouter, faire pause etc.

## AUDIO
* **Audio Object**  
L'Object Audio est récent en HTML5. Il représente le tag audio.  
Comme il est récent, il n'est pas reconnu par IE8 et les version anterieures.  
On peut accéder à `<audio>` en utilisant `getElementById()` :
``` javascript
    var x = document.getElementById("myAudio");
```  
On peut créer un tag `<audio>` en utilisant `document.createElement()` :  
``` javascript
    var x = document.createElement("AUDIO");
```  
Pour plus d'infos sur les propriétés et les méthodes de cet Objet : [Infos](http://www.w3schools.com/jsref/dom_obj_audio.asp)
