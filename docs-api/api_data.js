define({ "api": [
  {
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "optional": false,
            "field": "varname1",
            "description": "<p>No type.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "varname2",
            "description": "<p>With type.</p>"
          }
        ]
      }
    },
    "type": "",
    "url": "",
    "version": "0.0.0",
    "filename": "API/lbs-apidoc-files/main.js",
    "group": "C__wamp64_www_depot_atelier2_API_lbs_apidoc_files_main_js",
    "groupTitle": "C__wamp64_www_depot_atelier2_API_lbs_apidoc_files_main_js",
    "name": ""
  },
  {
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "optional": false,
            "field": "varname1",
            "description": "<p>No type.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "varname2",
            "description": "<p>With type.</p>"
          }
        ]
      }
    },
    "type": "",
    "url": "",
    "version": "0.0.0",
    "filename": "API/main.js",
    "group": "C__wamp64_www_depot_atelier2_API_main_js",
    "groupTitle": "C__wamp64_www_depot_atelier2_API_main_js",
    "name": ""
  },
  {
    "group": "Destination",
    "name": "GetAddDestination",
    "version": "0.1.0",
    "type": "get",
    "url": "/destinations/{token}[/]",
    "title": "Ajout/Accès d'une ressource destination",
    "description": "<p>Accès a une ressource de type destination. Permet d'accéder à la représentation de cette ressource. De l'ajouter dans une ressource party. Retourne une représentation json de l'id, du nom et des ressources indices de cette ressource.</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>Token de la partie</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Succès : 200": [
          {
            "group": "Succès : 200",
            "type": "Number",
            "optional": false,
            "field": "Id",
            "description": "<p>Id de la destination</p>"
          },
          {
            "group": "Succès : 200",
            "type": "string",
            "optional": false,
            "field": "Nom",
            "description": "<p>Nom de la destination</p>"
          },
          {
            "group": "Succès : 200",
            "type": "string",
            "optional": false,
            "field": "Type",
            "description": "<p>Type de l'indice</p>"
          },
          {
            "group": "Succès : 200",
            "type": "string",
            "optional": false,
            "field": "Description",
            "description": "<p>Description de l'indice</p>"
          },
          {
            "group": "Succès : 200",
            "type": "Number",
            "optional": false,
            "field": "Id_Destinations",
            "description": "<p>Id_Destinations de l'indice</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Exemple de réponse en cas de succès",
          "content": "    HTTP/1.1 200 OK\n\n\t{\n\t\t\"Destination finale\":{\"Id\":1,\"Nom\":\"Nantes\",\"Indices\":[{\"Id\":1,\"Type\":\"Text\",\"Description\":\"Tombeau de Fran\\u00e7ois II de Bretagne\",\"Id_Destinations\":1},{\"Id\":2,\"Type\":\"Text\",\"Description\":\"Ch\\u00e2teau de Goulaine\",\"Id_Destinations\":1},{\"Id\":3,\"Type\":\"Text\",\"Description\":\"Parc du Grand-Blottereau\",\"Id_Destinations\":1},{\"Id\":4,\"Type\":\"Text\",\"Description\":\"Parc de la Chantrerie\",\"Id_Destinations\":1},{\"Id\":5,\"Type\":\"Text\",\"Description\":\"L'Ile de Versailles\",\"Id_Destinations\":1}]}\n\t}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Erreur : 403": [
          {
            "group": "Erreur : 403",
            "optional": false,
            "field": "Forbidden",
            "description": "<p>Token incorrect</p>"
          }
        ],
        "Erreur : 404": [
          {
            "group": "Erreur : 404",
            "optional": false,
            "field": "PageNotFound",
            "description": "<p>Page inexistante</p>"
          }
        ],
        "Erreur : 405": [
          {
            "group": "Erreur : 405",
            "optional": false,
            "field": "MethodNotAllowed",
            "description": "<p>Méthode non permise</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Exemple de réponse en cas d'erreur 403",
          "content": "    HTTP/1.1 403 Bad Request\n\n\t{\n\t\t\"error\":\"no token or invalid token\"\n\t}",
          "type": "json"
        },
        {
          "title": "Exemple de réponse en cas d'erreur 404",
          "content": "   HTTP/1.1 404 Not Found\n\n<title>Page Not Found</title>\n<h1>Page inexistante</h1>\n<p>\nLa page que vous essayer d'atteindre n'existe pas.\nVérifiez votre URL ou retournez à la page d'accueil.\n</p>\n<a href='https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP'>Page d'accueil</a>",
          "type": "html"
        },
        {
          "title": "Exemple de réponse en cas d'erreur 405",
          "content": "   HTTP/1.1 405 Method Not Allowed\n\n<title>Method not allowed</title>\n<h1>Methode non permise</h1>\n<p>\nMethode non permise. Elle devrait être: GET.\n</p>",
          "type": "html"
        }
      ]
    },
    "filename": "API/run-api.php",
    "groupTitle": "Destination"
  },
  {
    "group": "Destination",
    "name": "GetDestination",
    "version": "0.1.0",
    "type": "get",
    "url": "/{token}/getDestination",
    "title": "Accès d'une ressource destination",
    "description": "<p>Accès a une ressource de type destination. Permet d'accéder à la représentation de cette ressource ainsi que ses indices. Retourne une représentation json de sa longitude, latitude, son id, nom, des ressources indices de cette ressource.</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>Token de la partie</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Succès : 200": [
          {
            "group": "Succès : 200",
            "type": "float",
            "optional": false,
            "field": "Longitude",
            "description": "<p>Longitude de la destination</p>"
          },
          {
            "group": "Succès : 200",
            "type": "float",
            "optional": false,
            "field": "Latitude",
            "description": "<p>Latitude de la destination</p>"
          },
          {
            "group": "Succès : 200",
            "type": "number",
            "optional": false,
            "field": "Id",
            "description": "<p>Id de la destination</p>"
          },
          {
            "group": "Succès : 200",
            "type": "string",
            "optional": false,
            "field": "Nom",
            "description": "<p>Nom de la destination</p>"
          },
          {
            "group": "Succès : 200",
            "type": "string",
            "optional": false,
            "field": "Text",
            "description": "<p>Text de l'indice</p>"
          },
          {
            "group": "Succès : 200",
            "type": "string",
            "optional": false,
            "field": "Description",
            "description": "<p>Description de l'indice</p>"
          },
          {
            "group": "Succès : 200",
            "type": "string",
            "optional": false,
            "field": "Id_Destinations",
            "description": "<p>Id_Destinations de l'indice</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Exemple de réponse en cas de succès",
          "content": "    HTTP/1.1 200 OK\n\n\t{\n\t\t\"Destination_finale\":{\"Longitude\":\"6.2\",\"Latitude\":\"48.683331\",\"Id\":2,\"Nom\":\"Nancy\",\"Indices\":[{\"Id\":6,\"Type\":\"text\",\"Description\":\"La plus belle place d'Europe\",\"Id_Destinations\":2},{\"Id\":7,\"Type\":\"text\",\"Description\":\"IUT Charlemagne\",\"Id_Destinations\":2},{\"Id\":8,\"Type\":\"text\",\"Description\":\"Le chardon\",\"Id_Destinations\":2},{\"Id\":9,\"Type\":\"text\",\"Description\":\"Une grande ville \\u00e9tudiante \",\"Id_Destinations\":2},{\"Id\":10,\"Type\":\"text\",\"Description\":\"Parc de la P\\u00e9pini\\u00e8re\",\"Id_Destinations\":2}]}\n\t}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Erreur : 403": [
          {
            "group": "Erreur : 403",
            "optional": false,
            "field": "Forbidden",
            "description": "<p>Token incorrect</p>"
          }
        ],
        "Erreur : 404": [
          {
            "group": "Erreur : 404",
            "optional": false,
            "field": "PageNotFound",
            "description": "<p>Page inexistante</p>"
          }
        ],
        "Erreur : 405": [
          {
            "group": "Erreur : 405",
            "optional": false,
            "field": "MethodNotAllowed",
            "description": "<p>Méthode non permise</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Exemple de réponse en cas d'erreur 403",
          "content": "    HTTP/1.1 403 Bad Request\n\n\t{\n\t\t\"error\":\"no token or invalid token\"\n\t}",
          "type": "json"
        },
        {
          "title": "Exemple de réponse en cas d'erreur 404",
          "content": "   HTTP/1.1 404 Not Found\n\n<title>Page Not Found</title>\n<h1>Page inexistante</h1>\n<p>\nLa page que vous essayer d'atteindre n'existe pas.\nVérifiez votre URL ou retournez à la page d'accueil.\n</p>\n<a href='https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP'>Page d'accueil</a>",
          "type": "html"
        },
        {
          "title": "Exemple de réponse en cas d'erreur 405",
          "content": "   HTTP/1.1 405 Method Not Allowed\n\n<title>Method not allowed</title>\n<h1>Methode non permise</h1>\n<p>\nMethode non permise. Elle devrait être: GET.\n</p>",
          "type": "html"
        }
      ]
    },
    "filename": "API/run-api.php",
    "groupTitle": "Destination"
  },
  {
    "group": "Destination",
    "name": "GetInfoDestination",
    "version": "0.1.0",
    "type": "get",
    "url": "/destinations/{token}/info[/]",
    "title": "Accès d'une ressource destination",
    "description": "<p>Accès a une ressource de type destination. Permet d'accéder à la représentation de cette ressource. Retourne une représentation json du nom, de la description et de l'image de cette ressource.</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>Token de la partie</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Succès : 200": [
          {
            "group": "Succès : 200",
            "type": "string",
            "optional": false,
            "field": "Nom",
            "description": "<p>Nom de la destination</p>"
          },
          {
            "group": "Succès : 200",
            "type": "string",
            "optional": false,
            "field": "Description",
            "description": "<p>Description de la destination</p>"
          },
          {
            "group": "Succès : 200",
            "type": "string",
            "optional": false,
            "field": "Image",
            "description": "<p>Image de la destination</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Exemple de réponse en cas de succès",
          "content": "    HTTP/1.1 200 OK\n\n\t{\n\t\t\"Destinations Finale\":{\"Nom\":\"Nantes\",\"Description\":null,\"Image\":null}\n\t}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Erreur : 403": [
          {
            "group": "Erreur : 403",
            "optional": false,
            "field": "Forbidden",
            "description": "<p>Token incorrect</p>"
          }
        ],
        "Erreur : 404": [
          {
            "group": "Erreur : 404",
            "optional": false,
            "field": "PageNotFound",
            "description": "<p>Page inexistante</p>"
          }
        ],
        "Erreur : 405": [
          {
            "group": "Erreur : 405",
            "optional": false,
            "field": "MethodNotAllowed",
            "description": "<p>Méthode non permise</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Exemple de réponse en cas d'erreur 403",
          "content": "    HTTP/1.1 403 Bad Request\n\n\t{\n\t\t\"error\":\"no token or invalid token\"\n\t}",
          "type": "json"
        },
        {
          "title": "Exemple de réponse en cas d'erreur 404",
          "content": "   HTTP/1.1 404 Not Found\n\n<title>Page Not Found</title>\n<h1>Page inexistante</h1>\n<p>\nLa page que vous essayer d'atteindre n'existe pas.\nVérifiez votre URL ou retournez à la page d'accueil.\n</p>\n<a href='https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP'>Page d'accueil</a>",
          "type": "html"
        },
        {
          "title": "Exemple de réponse en cas d'erreur 405",
          "content": "   HTTP/1.1 405 Method Not Allowed\n\n<title>Method not allowed</title>\n<h1>Methode non permise</h1>\n<p>\nMethode non permise. Elle devrait être: GET.\n</p>",
          "type": "html"
        }
      ]
    },
    "filename": "API/run-api.php",
    "groupTitle": "Destination"
  },
  {
    "group": "Party",
    "name": "PostParty",
    "version": "0.1.0",
    "type": "post",
    "url": "/play[/]",
    "title": "Création d'une ressource party",
    "description": "<p>Création d'une ressource de type party permet d'accéder à la représentation d'une ressource party. Retourne une représentation json de la ressource, incluant son token.</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "pseudo",
            "description": "<p>Pseudo de la catégorie</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Request-Example: ",
          "content": "{ \"Pseudo\": \"Dupont\" }",
          "type": "json"
        }
      ]
    },
    "success": {
      "fields": {
        "Succès : 200": [
          {
            "group": "Succès : 200",
            "type": "string",
            "optional": false,
            "field": "token",
            "description": "<p>Token de la partie</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Exemple de réponse en cas de succès",
          "content": "    HTTP/1.1 200 OK\n\n\t{\n\t\t\"Token\":\"69u5j8bl6qfmwnq*_w91mmcc-pu_d_lt\" \n\t}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Erreur : 400": [
          {
            "group": "Erreur : 400",
            "optional": false,
            "field": "BadRequest",
            "description": "<p>Mauvaise requête</p>"
          }
        ],
        "Erreur : 404": [
          {
            "group": "Erreur : 404",
            "optional": false,
            "field": "PageNotFound",
            "description": "<p>Page inexistante</p>"
          }
        ],
        "Erreur : 405": [
          {
            "group": "Erreur : 405",
            "optional": false,
            "field": "MethodNotAllowed",
            "description": "<p>Méthode non permise</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Exemple de réponse en cas d'erreur 400",
          "content": "    HTTP/1.1 400 Bad Request\n\n\t{\n\t\tBad Request : missing data (Pseudo)\n\t}",
          "type": "json"
        },
        {
          "title": "Exemple de réponse en cas d'erreur 404",
          "content": "   HTTP/1.1 404 Not Found\n\n<title>Page Not Found</title>\n<h1>Page inexistante</h1>\n<p>\nLa page que vous essayer d'atteindre n'existe pas.\nVérifiez votre URL ou retournez à la page d'accueil.\n</p>\n<a href='https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP'>Page d'accueil</a>",
          "type": "html"
        },
        {
          "title": "Exemple de réponse en cas d'erreur 405",
          "content": "   HTTP/1.1 405 Method Not Allowed\n\n<title>Method not allowed</title>\n<h1>Methode non permise</h1>\n<p>\nMethode non permise. Elle devrait être: POST.\n</p>",
          "type": "html"
        }
      ]
    },
    "filename": "API/run-api.php",
    "groupTitle": "Party"
  },
  {
    "group": "Party",
    "name": "PutScore",
    "version": "0.1.0",
    "type": "put",
    "url": "/{token}/score[/]",
    "title": "Mise à jour d'une ressource party",
    "description": "<p>Mise à jour du score d'une ressource de type party. Retourne une représentation json du score.</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>Token de la partie</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "score",
            "description": "<p>Score de la partie</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Request-Example: ",
          "content": "{ \"score\": \"15\" }",
          "type": "json"
        }
      ]
    },
    "success": {
      "fields": {
        "Succès : 200": [
          {
            "group": "Succès : 200",
            "type": "string",
            "optional": false,
            "field": "Succes",
            "description": "<p>Phrase de réussite</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Exemple de réponse en cas de succès",
          "content": "    HTTP/1.1 200 OK\n\n\t{\n\t\t\"Score\":60\n\t}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Erreur : 400": [
          {
            "group": "Erreur : 400",
            "optional": false,
            "field": "BadRequest",
            "description": "<p>Mauvaise requête</p>"
          }
        ],
        "Erreur : 403": [
          {
            "group": "Erreur : 403",
            "optional": false,
            "field": "Forbidden",
            "description": "<p>Token incorrect</p>"
          }
        ],
        "Erreur : 404": [
          {
            "group": "Erreur : 404",
            "optional": false,
            "field": "PageNotFound",
            "description": "<p>Page inexistante</p>"
          }
        ],
        "Erreur : 405": [
          {
            "group": "Erreur : 405",
            "optional": false,
            "field": "MethodNotAllowed",
            "description": "<p>Méthode non permise</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Exemple de réponse en cas d'erreur 400",
          "content": "    HTTP/1.1 400 Bad Request\n\n\t{\n\t\tBad Request : missing data (Score)\n\t}",
          "type": "json"
        },
        {
          "title": "Exemple de réponse en cas d'erreur 403",
          "content": "    HTTP/1.1 400 Bad Request\n\n\t{\n\t\t\"error\":\"no token or invalid token\"\n\t}",
          "type": "json"
        },
        {
          "title": "Exemple de réponse en cas d'erreur 404",
          "content": "   HTTP/1.1 404 Not Found\n\n<title>Page Not Found</title>\n<h1>Page inexistante</h1>\n<p>\nLa page que vous essayer d'atteindre n'existe pas.\nVérifiez votre URL ou retournez à la page d'accueil.\n</p>\n<a href='https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP'>Page d'accueil</a>",
          "type": "html"
        },
        {
          "title": "Exemple de réponse en cas d'erreur 405",
          "content": "   HTTP/1.1 405 Method Not Allowed\n\n<title>Method not allowed</title>\n<h1>Methode non permise</h1>\n<p>\nMethode non permise. Elle devrait être: PUT.\n</p>",
          "type": "html"
        }
      ]
    },
    "filename": "API/run-api.php",
    "groupTitle": "Party"
  },
  {
    "group": "Path",
    "name": "GetAddPath",
    "version": "0.1.0",
    "type": "get",
    "url": "/{token}/paths[/]",
    "title": "Ajout/Accès d'une ressource path",
    "description": "<p>Accès a une ressource de type path. Permet d'accéder à la représentation de cette ressource. De l'ajouter dans une ressource générer. Retourne une représentation json de l'id, du nom et des ressources indices de cette ressource.</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>Token de la partie</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Succès : 200": [
          {
            "group": "Succès : 200",
            "type": "Number",
            "optional": false,
            "field": "Id",
            "description": "<p>Id du path</p>"
          },
          {
            "group": "Succès : 200",
            "type": "Float",
            "optional": false,
            "field": "Longitude",
            "description": "<p>Longitude du path</p>"
          },
          {
            "group": "Succès : 200",
            "type": "Float",
            "optional": false,
            "field": "Latitude",
            "description": "<p>Latitude du path</p>"
          },
          {
            "group": "Succès : 200",
            "type": "string",
            "optional": false,
            "field": "Nom",
            "description": "<p>Nom du path</p>"
          },
          {
            "group": "Succès : 200",
            "type": "string",
            "optional": false,
            "field": "Indication",
            "description": "<p>Indication de l'indice</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Exemple de réponse en cas de succès",
          "content": "    HTTP/1.1 200 OK\n\n\t{\n\t\t{\"Id\":2,\"Longitude\":\"4.35\",\"Latitude\":\"43.833328\",\"Nom\":\"N\\u00eemes\",\"Indication\":\"Jardin de la Fontaine\"},{\"Id\":4,\"Longitude\":\"1.4436700\",\"Latitude\":\"43.6042600\",\"Nom\":\"Toulouse\",\"Indication\":\"Eglise Notre-Dame de la Dalbade\"},{\"Id\":3,\"Longitude\":\"5.3810700\",\"Latitude\":\"43.2969500\",\"Nom\":\"Marseille\",\"Indication\":\"Le Vieux Port\"},{\"Id\":1,\"Longitude\":\"48.8534100\",\"Latitude\":\"2.3488000\",\"Nom\":\"Paris\",\"Indication\":\"Tour Eiffel\"},{\"Id\":5,\"Longitude\":\"-0.5805000\",\"Latitude\":\"44.8404400\",\"Nom\":\"Bordeaux\",\"Indication\":\"Vin de ...\"}\n\t}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Erreur : 403": [
          {
            "group": "Erreur : 403",
            "optional": false,
            "field": "Forbidden",
            "description": "<p>Token incorrect</p>"
          }
        ],
        "Erreur : 404": [
          {
            "group": "Erreur : 404",
            "optional": false,
            "field": "PageNotFound",
            "description": "<p>Page inexistante</p>"
          }
        ],
        "Erreur : 405": [
          {
            "group": "Erreur : 405",
            "optional": false,
            "field": "MethodNotAllowed",
            "description": "<p>Méthode non permise</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Exemple de réponse en cas d'erreur 403",
          "content": "    HTTP/1.1 403 Bad Request\n\n\t{\n\t\t\"error\":\"no token or invalid token\"\n\t}",
          "type": "json"
        },
        {
          "title": "Exemple de réponse en cas d'erreur 404",
          "content": "   HTTP/1.1 404 Not Found\n\n<title>Page Not Found</title>\n<h1>Page inexistante</h1>\n<p>\nLa page que vous essayer d'atteindre n'existe pas.\nVérifiez votre URL ou retournez à la page d'accueil.\n</p>\n<a href='https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP'>Page d'accueil</a>",
          "type": "html"
        },
        {
          "title": "Exemple de réponse en cas d'erreur 405",
          "content": "   HTTP/1.1 405 Method Not Allowed\n\n<title>Method not allowed</title>\n<h1>Methode non permise</h1>\n<p>\nMethode non permise. Elle devrait être: GET.\n</p>",
          "type": "html"
        }
      ]
    },
    "filename": "API/run-api.php",
    "groupTitle": "Path"
  },
  {
    "group": "Path",
    "name": "GetPathsParty",
    "version": "0.1.0",
    "type": "get",
    "url": "/{token}/getPaths[/]",
    "title": "Accès d'une ressource path",
    "description": "<p>Accès a une ressource de type path. Permet d'accéder à la représentation de cette ressource. Retourne une représentation json du number,de l'indication,de la longitude, latitude et du nom des ressources indices de cette ressource.</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>Token de la partie</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Succès : 200": [
          {
            "group": "Succès : 200",
            "type": "Number",
            "optional": false,
            "field": "Number",
            "description": "<p>Number du path</p>"
          },
          {
            "group": "Succès : 200",
            "type": "string",
            "optional": false,
            "field": "Indication",
            "description": "<p>Indication du path</p>"
          },
          {
            "group": "Succès : 200",
            "type": "Float",
            "optional": false,
            "field": "Longitude",
            "description": "<p>Longitude du path</p>"
          },
          {
            "group": "Succès : 200",
            "type": "Float",
            "optional": false,
            "field": "Latitude",
            "description": "<p>Latitude du path</p>"
          },
          {
            "group": "Succès : 200",
            "type": "string",
            "optional": false,
            "field": "Nom",
            "description": "<p>Nom du path</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Exemple de réponse en cas de succès",
          "content": "    HTTP/1.1 200 OK\n\n\t{\n\t\t[{\"Number\":1,\"Indication\":\"Le Vieux Port\",\"Longitude\":\"5.3810700\",\"Latitude\":\"43.2969500\",\"Nom\":\"Marseille\"},{\"Number\":2,\"Indication\":\"Vin de ...\",\"Longitude\":\"-0.5805000\",\"Latitude\":\"44.8404400\",\"Nom\":\"Bordeaux\"},{\"Number\":3,\"Indication\":\"Tour Eiffel\",\"Longitude\":\"2.3488000\",\"Latitude\":\"48.8534100\",\"Nom\":\"Paris\"},{\"Number\":4,\"Indication\":\"Jardin de la Fontaine\",\"Longitude\":\"4.35\",\"Latitude\":\"43.833328\",\"Nom\":\"N\\u00eemes\"},{\"Number\":5,\"Indication\":\"Eglise Notre-Dame de la Dalbade\",\"Longitude\":\"1.4436700\",\"Latitude\":\"43.6042600\",\"Nom\":\"Toulouse\"}]\n\t}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Erreur : 403": [
          {
            "group": "Erreur : 403",
            "optional": false,
            "field": "Forbidden",
            "description": "<p>Token incorrect</p>"
          }
        ],
        "Erreur : 404": [
          {
            "group": "Erreur : 404",
            "optional": false,
            "field": "PageNotFound",
            "description": "<p>Page inexistante</p>"
          }
        ],
        "Erreur : 405": [
          {
            "group": "Erreur : 405",
            "optional": false,
            "field": "MethodNotAllowed",
            "description": "<p>Méthode non permise</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Exemple de réponse en cas d'erreur 403",
          "content": "    HTTP/1.1 403 Bad Request\n\n\t{\n\t\t\"error\":\"no token or invalid token\"\n\t}",
          "type": "json"
        },
        {
          "title": "Exemple de réponse en cas d'erreur 404",
          "content": "   HTTP/1.1 404 Not Found\n\n<title>Page Not Found</title>\n<h1>Page inexistante</h1>\n<p>\nLa page que vous essayer d'atteindre n'existe pas.\nVérifiez votre URL ou retournez à la page d'accueil.\n</p>\n<a href='https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP'>Page d'accueil</a>",
          "type": "html"
        },
        {
          "title": "Exemple de réponse en cas d'erreur 405",
          "content": "   HTTP/1.1 405 Method Not Allowed\n\n<title>Method not allowed</title>\n<h1>Methode non permise</h1>\n<p>\nMethode non permise. Elle devrait être: GET.\n</p>",
          "type": "html"
        }
      ]
    },
    "filename": "API/run-api.php",
    "groupTitle": "Path"
  }
] });
