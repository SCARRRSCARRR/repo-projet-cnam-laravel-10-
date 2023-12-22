# projet du restaurant  0cnamo
ce projet est un site web test poour la formation Devweb DU CNAM

## prérequis
- apache 2.4.54
mariadb 10.10.2
php 8.2.0
composer 2.6.5
node js et npm

## Installation

### Version dev
 il faut d'abord cloner l'application en local :
 ```
 ```
 git clone adresse du repo github
 ```
 ```
 Ensuite, il faut creer une BDD puis configurer les accès dans le fichier `.env` :
 ```
 ```
 DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=mon_application
 DB_USERNAME=mon_application
 DB_PASSWORD=123
```
```
Pour créer les tables et injecter des données de test, vous pouvez utiliser un script bash : 
```

```
./mkdb.sh
```
```
vous pouvez donner un nom à l'application dans le fichier `.env` : 
```
```
APP_NAME="Mon Application"
```

 
 ```
## utilisation 

dans le terminal :

```
php artisan serve 

```

aller sur la page [http://127.0.0.1:8000].

## requêtes SQL utiles

```
- - Liste des categoreies et de leurs plats
 SELECT * 
 FROM categories 
 INNER JOIN plats ON categories.id = plats.categories_id
 ORDER BY categories_id, plats.nom;

```
--Liste des platset de leurs etiquettes
SELECT *
FROM plats
INNER JOIN etiquettes_plats ON etiquettes_plats.plats_id = plats.id
INNER JOIN etiquettes ON etiquettes_plats.etiquettes_id = etiquettes.id
ORDER BY plats.nom, etiquettes.nom
```

```
SELECT plats.id, plats.nom, etiquettes.id, etiquettes.nom
FROM plats
INNER JOIN etiquettes_plats ON etiquettes_plats.plats_id = plats.id
INNER JOIN etiquettes ON etiquettes_plats.etiquettes_id = etiquettes.id
ORDER BY plats.nom, etiquettes.nom
```

```
SELECT categories.id, categories.nom, plats.id, plats.nom
FROM categories
INNER JOIN plats ON categories.id = plats.categories_id
ORDER BY categories.id, plats.nom
```
```

## recommandations

### tailles des images d'ambiance 
taille recommandé
largeur :1024
hauteur:768
il vaut mieux utiliser des fichier jpeg car ils sont plus légers 

## mentions légales 

### licences projet

? @todo

### droits d'auteur
toutes les photoos du site ont été realisée par ...

