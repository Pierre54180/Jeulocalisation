# README #

This README would normally document whatever steps are necessary to get your application up and running.

### What is this repository for? ###

* Version 0.1.0
* [https://bitbucket.org/fdagnet/depot_atelier2/downloads](Link URL)

### How do I get set up? ###

* *Database configuration :*
  Il est nécessaire d'installer la base de donnée gràce au fichier findyourway.sql et de créer un dossier conf au même niveau que le dossier WebApp et y insérer un fichier conf.ini avec comme code php :   
```
#!php
driver = 'mysql';
host = 'localhost';
database = 'findyourway';
username = 'root';
password = 'root';
charset = 'utf8';
collation = 'utf8_unicode_ci';
prefix = '';

```
* *Pour le jeu :*
    * Avec localhost : http://localhost/depot_atelier2/WebApp/index.html
    * Avec vagrant : http://atelier.local/depot_atelier/WebApp/index.html

* *Pour l'espace admin :*
     * Avec localhost : http://localhost/depot_atelier2/WebApp/backendFindYourWay.php
     * Avec vagrant : http://atelier.local/depot_atelier/WebApp/backendFindYourWay.php
     * Identifiant : bvarnerot / fdagnet / csteeg ou pdelcros
     * Mot de passe : aze

*  *Pour l'API :*
    * Avec localhost : http://localhost/depot_atelier2/docs-api/index.html
    * Avec vagrant : http://atelier.local/depot_atelier2/docs-api/index.html

### Who do I talk to? ###

* Varnerot Benjamin - Dagnet Florian - Steeg Corentin - Delcros Pierre