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

* **load()** [description](http://www.w3schools.com/tags/av_met_load.asp), [exemple](http://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_av_met_load)  
Permet de changer la source de la vidéo et de re-charger la vidéo  
Il y a des méthodes pour charger, jouer, faire pause etc.   
Il y a aussi des proprietes comme la source "src", la hauteur/largeur.  
Enfin, on peut créer des évenements dans la DOM pour écouter, faire pause etc.  

* **play()**
[description](http://www.w3schools.com/tags/av_met_play.asp), [exemple](http://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_av_met_play_pause)  
La méthode play() permtet de commencer la lecture du fichier audio ou video.  
On peut utiliser la méthode pause() pour marquer un temps d'arrêt.



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

* **play()**
[description](http://www.w3schools.com/tags/av_met_play.asp), [exemple](http://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_av_met_play_pause)    
La méthode play() permtet de commencer la lecture du fichier audio ou video.  
On peut utiliser la méthode pause() pour marquer un temps d'arrêt.  

## Propriétés utiles
### VIDEO & AUDIO

* **autoplay**  
Permet le chargement d'un fichieraudio ou vidéo dès le chargement de la page.  
Valeurs : true ou false
```javascript
var vid = document.getElementById("myVideo");
vid.autoplay = true;
vid.load();
```  
* **buffered**  
Met en mémoire tampon la première partie de la vidéo en secondes.  
```javascript
var vid = document.getElementById("myVideo");
alert("Start: " + vid.buffered.start(0)+ " End: " + vid.buffered.end(0));
```  
* **controls**  
Retourne ce que le navigateur devrait retourner par défaut en ce qui concerne le contrôle de l'audio et de la vidéo tel que pause, play, etc.  
```javascript
var vid = document.getElementById("myVideo");
vid.controls = true;  
```  
* **currentSrc**  
La propriété currentSrc retourne l'URL de la vidéo ou du fichier audio présent. S'il n'y a pas de vidéo ni d'audio, une chaine de caractères vide est retournée.  
```javascript
var vid = document.getElementById("myVideo");
alert(vid.currentSrc);
```  
* **defaultMuted**  
Le média audio ou vidéo est muet par défaut.  
```javascript
var vid = document.getElementById("myVideo");
vid.defaultMuted = true;
```  
* **loop**  
Précise si le fichier audio ou vidéo doit jouer en boucle.  
```javascript
var vid = document.getElementById("myVideo");
vid.loop = true;
```  
* **preload**  
Spécifie si le fichier audio ou vidéo doit commencer à charger dès que la page se charge.  
```javascript
var vid = document.getElementById("myVideo");
vid.preload = "auto";
```  
* **volume**  
Renvoie le volume actuel du média  
```javascript
var vid = document.getElementById("myVideo");
vid.volume = 0.2;
```
