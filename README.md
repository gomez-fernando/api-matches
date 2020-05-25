# Título del Proyecto

_API MATCHES_

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

### Instalación

_Los pasos que debes seguir para instalar el proyecto_

1. Descarga la rama master de este repositorio
2. Modifica en el archivo _.env_ las credenciales de la conexión a tu base de datos
3. Ejecuta _composer install_
4. Ejecuta _composer require orm-fixtures_ 
5. Ejecuta _php bin/console doctrine:schema:create_ para crear el esquema de la base de datos
6. Ejecuta _php vin/console doctrine:fixtures:load_ para cargar los jugadores en la base de datos

### Conéctate al API

1. Crea un virtual host con un nombre por ejemplo: _api-matches.com_
2. La url del end point sería entonces: _http://api-matches.com/api/v1/bnzsa/match-data_
3. Puedes utilizar Postman y otro software para concetarte al API.
4. Realiza las peticiones por POST a este end point utilizando este json de ejemplo
   que también lo encontrarás en la carpeta /json.
<pre>{
       "match": {
         "id": "598b0d1dc6b14b812d9457d9",
         "sport": {
           "id": 1,
           "name": "Fútbol",
           "short_name": "",
           "url": "futbol",
           "path": "/futbol/"
         },
         "competition": {
           "id": 23,
           "name": "LaLiga Santander",
           "url": "liga-primera",
           "path": "/futbol/liga-primera/"
         },
         "metadata": {
           "date": "2017-09-24T12:00:00Z",
           "season": "2017-2018",
           "status": "terminado"
         },
         "location": {
           "name": "RCDE Stadium",
           "capacity": 40500,
           "address": "Avinguda Baix Llobregat, 100 08940 Cornellà de Llobregat (Barcelona)  ",
           "locality": "Cornellá",
           "province": "Barcelona",
           "country": "ESP",
           "postal_code": "8940",
           "length": 105,
           "width": 68,
           "latitude": 41.349,
           "longitude": 2.07585
         },
         "referee": {
           "name": "Ricardo de Burgos Bengoetxea",
           "short_name": "Ricardo de Burgos Bengoetxea"
         },
         "home": {
           "id": 240,
           "name": "Reial Club Deportiu Espanyol de Barcelona SAD",
           "short_name": "Espanyol",
           "url": "rcd-espanyol",
           "initials": "ESP",
           "country": "ESP",
           "coach": {
             "id": 64001,
             "name": "Enrique Sánchez Flores",
             "short_name": "Enrique Sánchez Flores",
             "url": "enrique-sanchez-flores-64001",
             "birthdate": "1965-02-05T00:00:00Z"
           },
           "scorers": [
             {
               "player": {
                 "id": 1,
                 "name": "Leonardo Carrilho Baptistão",
                 "short_name": "Leo Baptistao",
                 "url": "leonardo-carrilho-baptistao-5905"
               },
               "minute": 4,
               "second": 47,
               "owngoal": false
             },
             {
               "player": {
                 "id": 2,
                 "name": "Alejandro Arribas",
                 "short_name": "Arribas",
                 "url": "alejandro-arribas-garrido-662"
               },
               "minute": 21,
               "second": 58,
               "owngoal": true
             },
             {
               "player": {
                 "id": 3,
                 "name": "Gerard Moreno",
                 "short_name": "Gerard Moreno",
                 "url": "gerard-moreno-balaguero-8827"
               },
               "minute": 71,
               "second": 57,
               "owngoal": false
             },
             {
               "player": {
                 "id": 4,
                 "name": "Gerard Moreno",
                 "short_name": "Gerard Moreno",
                 "url": "gerard-moreno-balaguero-8827"
               },
               "minute": 89,
               "second": 18,
               "owngoal": false
             }
           ],
           "cards": [
             {
               "player": {
                 "id": 1,
                 "name": "Víctor Sánchez",
                 "short_name": "Víctor Sánchez",
                 "url": "victor-sanchez-mata-609"
               },
               "minute": 74,
               "second": 10,
               "type": "tarjeta-amarilla",
               "color": "amarilla"
             }
           ]
         },
         "away": {
           "id": 797,
           "name": "Real Club Deportivo de La Coruña SAD",
           "short_name": "Deportivo",
           "url": "deportivo-la-coruna",
           "initials": "RCD",
           "country": "ESP",
           "coach": {
             "id": 66125,
             "name": "Pepe Mel",
             "short_name": "Pepe Mel",
             "url": "pepe-mel-66125",
             "birthdate": "1963-02-28T00:00:00Z"
           },
           "scorers": [
             {
               "player": {
                 "id": 5,
                 "name": "Celso Borges",
                 "short_name": "Celso Borges",
                 "url": "celso-borges-mora-11811"
               },
               "minute": 52,
               "second": 32,
               "owngoal": false
             }
           ],
           "cards": [
             {
               "player": {
                 "id": 2,
                 "name": "Luís Carlos Correia Pinto",
                 "short_name": "Luisinho",
                 "url": "luis-carlos-correia-pinto-11600"
               },
               "minute": 18,
               "second": 52,
               "type": "tarjeta-amarilla",
               "color": "amarilla"
             },
             {
               "player": {
                 "id": 3,
                 "name": "Bruno Alexandre Vilela Gama",
                 "short_name": "Bruno Alexandre Vilela Gama",
                 "url": "bruno-alexandre-vilela-gama-963"
               },
               "minute": 92,
               "second": 16,
               "type": "tarjeta-amarilla",
               "color": "amarilla"
             }
           ]
         }
       }
     }
</pre>
5. De esta manera, cada petición que incorpore un id de partido nuevo lo dará de alta en la base de datos, por el contrario, si el id ya existe lo modificará con cada llamada al API.
``
---
⌨️ con ❤️ por [Fernando Gómez](https://gomez-fernando.github.io/portfolio/) 😊
