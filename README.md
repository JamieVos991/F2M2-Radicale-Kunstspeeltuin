# Radicale Kunstspeeltuin

Thema van deze periode is kunst en cultuur. Wat is kunst tegenwoordig? En welke plek heeft technologie in de kunst? Bezoekers van tentoonstellingen willen steeds meer ondergedompeld, vermaakt en geraakt worden.Naar een ‘gewoon’ kunstwerk kijkt men maar een paar seconden, er moet wat te beleven zijn.Eenideale situatie voor jullie als media-experts, zeker wanneer jullieje krachten bundelen.Aan jullie de te taak om een samenwerking aan te gaan in een team van ruimtelijk vormgevers, mediavormgevers en softwaredeveloppersom het werk van een kunstenaar tot leven te brengen in een betoverende ruimte. Jullie toveren deFactoryom tot een kunstspeeltuin waarbezoekers willen blijven hangen.

-----------------------------------------------------------------

### Met deze repository kan je ook zelf meerdere RGB-LED's bedienen vanaf een enkele server die op één Raspberry Pi kan worden uitgevoerd.

## Wat heb je nodig?
Om de repository te gebruiken, heb je nodig:
* Een Raspberry Pi.
* Node.js version 8.0.0 of nieuwer geinstalleerd (Je kan [deze](https://github.com/nodesource/distributions/blob/master/README.md) website volgen om de laatste versie van Node.js te downloaden op jouw PI).
* Pigpio C library (Versie V41 of hoger).
* Python-setuptools & Python3-setuptools (nodig for Pigpio).
* RGB led strip connected naar de Pi's GPIO (Je kan [deze](http://dordnung.de/raspberrypi-ledstrip/) website volgen voor hardware).

-----------------------------------------------------------------

##  Installeer de ledstrip op jouw Pi

#### 1. Clone de repository.

```
git clone https://github.com/JamieVos991/F2M2-Radicale-Kunstspeeltuin
```
#### 2. Installeer 

```
cd Ledstrip
npm install
```
#### 3. Run
```
sudo node index.js
``` 
#### 4. Configureer
Bezoek http://127.0.0.1 of localhost in jouw browser and configureer de app met jouw setup. (Je kan ook handmatig de config.json editten nadat die aangemaakt is).

#### 5. Pi GPIO instellingen
Geef het pinnummer op dat je hebt gebruikt om elk kleurkanaal op jouw Raspberry PiGPIO aan te sluiten. ("Gebruik Pi GPIO" optie moet worden aangevinkt in instellingen).

#### 6. Port instellingen
Server port: de port voor de server om te starten is 80 voor de default http port.

#### Extra. Online setup
- Server URL: Je ontvangt een url, bijvoorbeeld https://flkajsfljas.loca.lt, die je met iedereen kunt delen zolang jouw lokale server van lt actief blijft. Alle verzoeken worden doorgestuurd naar jouw lokale service op de opgegeven poort.

```
npm install -g localtunnel
```
```
lt --port 80
```
-----------------------------------------------------------------

### Opdracht: 

Ontwikkel met een multidisciplinair team (studenten van RV, MV, SD) een concept voor een speelse immersieve ruimte van 2,5 meter bij 2,5 meter. Je ontwerpt hiervoor een interactieve installatie met een mapped projectie die geïnspireerd is op het werk van de Nederlandse kunstenaar van jullie keuze. De installatie is ruimtelijk en immersief, interactief, hedendaags en spannend maar veilig. Alle ruimtes samen vormen een kunstspeeltuin, dus denk na over een uitdagende indeling van de ruimtes. We hadding de beschikking over een budget van €150,00.

----------------------------------------------------------------- 

### Team: 

Ruimtelijke vormgevers: <br>
<li><a href="https://www.linkedin.com/in/finnvansluis/?miniProfileUrn=urn%3Ali%3Afs_miniProfile%3AACoAADJNCqYBh1FKVtlLMVtKiCFEKqumi2HlFPg">Finn</a><br></li>
<li><a href="#">Joost</a><br></li>
<li><a href="#">Tessa</a><br></li><br>
Media vormgevers:<br><br>
<li><a href="https://www.linkedin.com/insimon-van-trirum-552a281a8miniProfileUrn=urn%3Ali%3Afs_miniProfile%3AACoAADCP0w4BBIwQoFFH52GWnzbigp_s4bk5viY">Simon</a><br></li>
<li><a href="https://www.linkedin.com/in/disa-wilms-9236a81a3/?miniProfileUrn=urn%3Ali%3Afs_miniProfile%3AACoAAC-fXSsBt2efB5z0Sy0XWiczBvYfpJgBJ8s">Disa</a><br></li><br>
Software developer:<br><br>
<li><a href="https://www.linkedin.com/in/jamie-vos-0a0b4a18a/">Jamie</a><br></li>

----------------------------------------------------------------------

### Links:

<li><a href="https://trello.com/b/qR8TTk2Y/radicale-kunstspeeltuin">Trello board</a></li>

<li><a href="https://github.com/JamieVos991/F2M6-Radicale-Kusntspeeltuin">GitHub</a></li>

<li><a href="http://31694.hosts1.ma-cloud.nl/Logboek/">Logboek</a></li>

<li><a href="http://31694.hosts1.ma-cloud.nl/Logboek/bron.html">Bron</a></li>

<li><a href="#">Test plan</a></li>

<li><a href="#">Presentatie</a></li>





