# Schlechtewitzefront

Schlechtewitzefront ist eine auf PHP basierende Website, auf der User Witze einsenden und bewerten können. Die Seite ist damals aus Spaß entstanden, und ist nicht länger online. Die Datenbank enthält ungefähr 182.000 Witze.

![Frontend](https://github.com/Waterfront97/Schlechtewitzefront/blob/master/screenshots/2018-08-18_13h40_00.png)
[More Screenshots](https://github.com/Waterfront97/Schlechtewitzefront/tree/master/screenshots)

## Features

* Admin Seite auf der eingesendete Witze geprüft werden
* Witze-Voting
* Top 10 Witze auf der Startseite
* Endloses Scrollen durch über 180.000 Witze
* Suchfunktion

## Installation

Für die Installation ist ein Webserver mit PHP und MySQL Zugriff notwendig. 
Der Webserver Fokus (DocumentRoot bei Apache) muss auf den Ordner frontend gelegt werden.

1. Datenbank importieren `witze.sql`
2. Setup database config in `sites/db.php
3. Replace hard coded file pathes in code with your pathes ;P

## License

Licensed under the MIT License.
