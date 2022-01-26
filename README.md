# Radicale Kunstspeeltuin

### Met deze repository kan je meerdere RGB-LED's bedienen vanaf een enkele server die op één Raspberry Pi kan worden uitgevoerd.

-----------------------------------------------------------------

## Wat heb je nodig?
Om de repository te gebruiken, heb je nodig:
* Een Raspberry Pi.
* Node.js version 8.0.0 of nieuwer geinstalleerd (Je kan [deze](https://github.com/nodesource/distributions/blob/master/README.md) website volgen om de laatste versie van Node.js te downloaden op jouw PI).
* Pigpio C library (Versie V41 of hoger)
* Python-setuptools & Python3-setuptools (nodig for Pigpio)
* RGB led strip connected naar de Pi's GPIO (Je kan [deze](http://dordnung.de/raspberrypi-ledstrip/) website volgen voor hardware)

-----------------------------------------------------------------

##  Installeer de ledstrip op jouw Pi

#### 1. Download de files.

```
git clone https://github.com/JamieVos991/F2M2-Radicale-Kunstspeeltuin
```
#### 2. Install dependencies

```
cd RPiLC
npm install
```
#### 3. Run
Note that in order to run RPiLC, the app has to be ran with root privilags so it can have accsess to the Pi's GPIO.
```
sudo node index.js
``` 

-----------------------------------------------------------------

<h3>Opdracht:</h3>

Ontwikkel met een multidisciplinair team (studenten van RV, MV, SD) een concept voor een speelse immersieve ruimte van 2,5 meter bij 2,5 meter. Je ontwerpt hiervoor een interactieve installatie met een mapped projectie die geïnspireerd is op het werk van de Nederlandse kunstenaar van jullie keuze. De installatie is ruimtelijk en immersief, interactief, hedendaags en spannend maar veilig. Alle ruimtes samen vormen een kunstspeeltuin, dus denk na over een uitdagende indeling van de ruimtes.

----------------------------------------------------------------- 

<h3>Team</h3>

RV: <br>
<li><a href="https://www.linkedin.com/in/finnvansluis/?miniProfileUrn=urn%3Ali%3Afs_miniProfile%3AACoAADJNCqYBh1FKVtlLMVtKiCFEKqumi2HlFPg">Finn</a><br></li>
<li><a href="#">Joost</a><br></li>
<li><a href="#">Tessa</a><br></li><br>
MV:<br><br>
<li><a href="https://www.linkedin.com/insimon-van-trirum-552a281a8miniProfileUrn=urn%3Ali%3Afs_miniProfile%3AACoAADCP0w4BBIwQoFFH52GWnzbigp_s4bk5viY">Simon</a><br></li>
<li><a href="https://www.linkedin.com/in/disa-wilms-9236a81a3/?miniProfileUrn=urn%3Ali%3Afs_miniProfile%3AACoAAC-fXSsBt2efB5z0Sy0XWiczBvYfpJgBJ8s">Disa</a><br></li><br>
SD:<br><br>
<li><a href="https://www.linkedin.com/in/jamie-vos-0a0b4a18a/">Jamie</a><br></li>

-----------------------------------------------------------------

## Wat heb je nodig?
In order to use RPiLC you need:
* A Raspberry Pi.
* Node.js version 8.0.0 or newer installed (you can follow [this](https://github.com/nodesource/distributions/blob/master/README.md) to install the latest Node.js version on your Pi).
* Pigpio C library (Version V41 or higher)
* Python-setuptools & Python3-setuptools (required for Pigpio)
* RGB led strip connected to the Pi's GPIO (you can follow [this guide](http://dordnung.de/raspberrypi-ledstrip/) for wiring)

-----------------------------------------------------------------

<li><a href="https://trello.com/b/qR8TTk2Y/radicale-kunstspeeltuin">Trello board</a></li>

<li><a href="https://github.com/JamieVos991/F2M6-Radicale-Kusntspeeltuin">GitHub</a></li>

<li><a href="#">Logboek</a></li>

<li><a href="#">Bron</a></li>

<li><a href="#">Test plan</a></li>

<li><a href="#">Packet list</a></li>

<li><a href="#">Presentatie</a></li>





