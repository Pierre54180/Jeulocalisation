<?php
/**
 * @apiGroup Party
 * @apiName PostParty
 * @apiVersion 0.1.0
 *
 * @api {post} /play[/] Création d'une ressource party
 *
 * @apiDescription Création d'une ressource de type party
 * permet d'accéder à la représentation d'une ressource party.
 * Retourne une représentation json de la ressource, incluant son token.
 *
 * @apiParam {String} pseudo Pseudo de la catégorie
 *	
 * @apiParamExample {json} Request-Example: 
 *							{ "Pseudo": "Dupont" }
 *
 * @apiSuccess (Succès : 200) {string} token Token de la partie
 *
 * @apiSuccessExample {json} Exemple de réponse en cas de succès
 *     HTTP/1.1 200 OK
 *
 *	{
 *		"Token":"69u5j8bl6qfmwnq*_w91mmcc-pu_d_lt" 
 *	}
 *
 * @apiError (Erreur : 400) BadRequest Mauvaise requête
 *
 * @apiErrorExample {json} Exemple de réponse en cas d'erreur 400
 *     HTTP/1.1 400 Bad Request
 *
 * 	{
 *		Bad Request : missing data (Pseudo)
 *	}
 *
 * @apiError (Erreur : 404) PageNotFound Page inexistante
 *
 * @apiErrorExample {html} Exemple de réponse en cas d'erreur 404
 *     HTTP/1.1 404 Not Found
 *
 *  <title>Page Not Found</title>
 *  <h1>Page inexistante</h1>
 *  <p>
 *  La page que vous essayer d'atteindre n'existe pas.
 *  Vérifiez votre URL ou retournez à la page d'accueil.
 *  </p>
 *  <a href='https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP'>Page d'accueil</a>
 *
 * @apiError (Erreur : 405) MethodNotAllowed Méthode non permise
 *
 * @apiErrorExample {html} Exemple de réponse en cas d'erreur 405
 *     HTTP/1.1 405 Method Not Allowed
 *
 *  <title>Method not allowed</title>
 *  <h1>Methode non permise</h1>
 *  <p>
 *  Methode non permise. Elle devrait être: POST.
 *  </p>
*/

/**
 * @apiGroup Party
 * @apiName PutScore
 * @apiVersion 0.1.0
 *
 * @api {put} /{token}/score[/] Mise à jour d'une ressource party
 *
 * @apiDescription Mise à jour du score d'une ressource de type party.
 * Retourne une représentation json du score.
 *
 * @apiParam {String} token Token de la partie
 * @apiParam {Number} score Score de la partie
 *	
 * @apiParamExample {json} Request-Example: 
 *							{ "score": "15" }
 *
 * @apiSuccess (Succès : 200) {string} Succes Phrase de réussite
 *
 * @apiSuccessExample {json} Exemple de réponse en cas de succès
 *     HTTP/1.1 200 OK
 *
 *	{
 *		"Score":60
 *	}
 *
 * @apiError (Erreur : 400) BadRequest Mauvaise requête
 *
 * @apiErrorExample {json} Exemple de réponse en cas d'erreur 400
 *     HTTP/1.1 400 Bad Request
 *
 * 	{
 *		Bad Request : missing data (Score)
 *	}
 *
 * @apiError (Erreur : 403) Forbidden Token incorrect
 *
 * @apiErrorExample {json} Exemple de réponse en cas d'erreur 403
 *     HTTP/1.1 400 Bad Request
 *
 * 	{
 *		"error":"no token or invalid token"
 *	}
 *
 * @apiError (Erreur : 404) PageNotFound Page inexistante
 *
 * @apiErrorExample {html} Exemple de réponse en cas d'erreur 404
 *     HTTP/1.1 404 Not Found
 *
 *  <title>Page Not Found</title>
 *  <h1>Page inexistante</h1>
 *  <p>
 *  La page que vous essayer d'atteindre n'existe pas.
 *  Vérifiez votre URL ou retournez à la page d'accueil.
 *  </p>
 *  <a href='https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP'>Page d'accueil</a>
 *
 * @apiError (Erreur : 405) MethodNotAllowed Méthode non permise
 *
 * @apiErrorExample {html} Exemple de réponse en cas d'erreur 405
 *     HTTP/1.1 405 Method Not Allowed
 *
 *  <title>Method not allowed</title>
 *  <h1>Methode non permise</h1>
 *  <p>
 *  Methode non permise. Elle devrait être: PUT.
 *  </p>
*/

/**
 * @apiGroup Destination
 * @apiName GetInfoDestination
 * @apiVersion 0.1.0
 *
 * @api {get} /destinations/{token}/info[/] Accès d'une ressource destination
 *
 * @apiDescription Accès a une ressource de type destination. Permet d'accéder à la représentation de cette ressource.
 * Retourne une représentation json du nom, de la description et de l'image de cette ressource.
 *
 * @apiParam {String} token Token de la partie
 *
 * @apiSuccess (Succès : 200) {string}  Nom Nom de la destination
 * @apiSuccess (Succès : 200) {string}  Description Description de la destination
 * @apiSuccess (Succès : 200) {string}  Image Image de la destination
 *
 * @apiSuccessExample {json} Exemple de réponse en cas de succès
 *     HTTP/1.1 200 OK
 *
 *	{
 *		"Destinations Finale":{"Nom":"Nantes","Description":null,"Image":null}
 *	}
 *
 * @apiError (Erreur : 403) Forbidden Token incorrect
 *
 * @apiErrorExample {json} Exemple de réponse en cas d'erreur 403
 *     HTTP/1.1 403 Bad Request
 *
 * 	{
 *		"error":"no token or invalid token"
 *	}
 *
 * @apiError (Erreur : 404) PageNotFound Page inexistante
 *
 * @apiErrorExample {html} Exemple de réponse en cas d'erreur 404
 *     HTTP/1.1 404 Not Found
 *
 *  <title>Page Not Found</title>
 *  <h1>Page inexistante</h1>
 *  <p>
 *  La page que vous essayer d'atteindre n'existe pas.
 *  Vérifiez votre URL ou retournez à la page d'accueil.
 *  </p>
 *  <a href='https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP'>Page d'accueil</a>
 *
 * @apiError (Erreur : 405) MethodNotAllowed Méthode non permise
 *
 * @apiErrorExample {html} Exemple de réponse en cas d'erreur 405
 *     HTTP/1.1 405 Method Not Allowed
 *
 *  <title>Method not allowed</title>
 *  <h1>Methode non permise</h1>
 *  <p>
 *  Methode non permise. Elle devrait être: GET.
 *  </p>
*/

/**
 * @apiGroup Destination
 * @apiName GetDestination
 * @apiVersion 0.1.0
 *
 * @api {get} /{token}/getDestination Accès d'une ressource destination
 *
 * @apiDescription Accès a une ressource de type destination. Permet d'accéder à la représentation de cette ressource ainsi que ses indices.
 * Retourne une représentation json de sa longitude, latitude, son id, nom, des ressources indices de cette ressource.
 *
 * @apiParam {String} token Token de la partie
 *
 * @apiSuccess (Succès : 200) {float}  Longitude Longitude de la destination
 * @apiSuccess (Succès : 200) {float}  Latitude Latitude de la destination
 * @apiSuccess (Succès : 200) {number}  Id Id de la destination
 * @apiSuccess (Succès : 200) {string}  Nom Nom de la destination
 * @apiSuccess (Succès : 200) {number}  Id Id de l'indice
 * @apiSuccess (Succès : 200) {string}  Text Text de l'indice
 * @apiSuccess (Succès : 200) {string}  Description Description de l'indice
 * @apiSuccess (Succès : 200) {string}  Id_Destinations Id_Destinations de l'indice
 *
 * @apiSuccessExample {json} Exemple de réponse en cas de succès
 *     HTTP/1.1 200 OK
 *
 *	{
 *		"Destination_finale":{"Longitude":"6.2","Latitude":"48.683331","Id":2,"Nom":"Nancy","Indices":[{"Id":6,"Type":"text","Description":"La plus belle place d'Europe","Id_Destinations":2},{"Id":7,"Type":"text","Description":"IUT Charlemagne","Id_Destinations":2},{"Id":8,"Type":"text","Description":"Le chardon","Id_Destinations":2},{"Id":9,"Type":"text","Description":"Une grande ville \u00e9tudiante ","Id_Destinations":2},{"Id":10,"Type":"text","Description":"Parc de la P\u00e9pini\u00e8re","Id_Destinations":2}]}
 *	}
 *
 * @apiError (Erreur : 403) Forbidden Token incorrect
 *
 * @apiErrorExample {json} Exemple de réponse en cas d'erreur 403
 *     HTTP/1.1 403 Bad Request
 *
 * 	{
 *		"error":"no token or invalid token"
 *	}
 *
 * @apiError (Erreur : 404) PageNotFound Page inexistante
 *
 * @apiErrorExample {html} Exemple de réponse en cas d'erreur 404
 *     HTTP/1.1 404 Not Found
 *
 *  <title>Page Not Found</title>
 *  <h1>Page inexistante</h1>
 *  <p>
 *  La page que vous essayer d'atteindre n'existe pas.
 *  Vérifiez votre URL ou retournez à la page d'accueil.
 *  </p>
 *  <a href='https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP'>Page d'accueil</a>
 *
 * @apiError (Erreur : 405) MethodNotAllowed Méthode non permise
 *
 * @apiErrorExample {html} Exemple de réponse en cas d'erreur 405
 *     HTTP/1.1 405 Method Not Allowed
 *
 *  <title>Method not allowed</title>
 *  <h1>Methode non permise</h1>
 *  <p>
 *  Methode non permise. Elle devrait être: GET.
 *  </p>
*/

/**
 * @apiGroup Destination
 * @apiName GetAddDestination
 * @apiVersion 0.1.0
 *
 * @api {get} /destinations/{token}[/] Ajout/Accès d'une ressource destination
 *
 * @apiDescription Accès a une ressource de type destination. Permet d'accéder à la représentation de cette ressource.
 * De l'ajouter dans une ressource party.
 * Retourne une représentation json de l'id, du nom et des ressources indices de cette ressource.
 *
 * @apiParam {String} token Token de la partie
 *
 * @apiSuccess (Succès : 200) {Number}  Id Id de la destination
 * @apiSuccess (Succès : 200) {string}  Nom Nom de la destination
 * @apiSuccess (Succès : 200) {Number}  Id Id de l'indice
 * @apiSuccess (Succès : 200) {string}  Type Type de l'indice
 * @apiSuccess (Succès : 200) {string}  Description Description de l'indice
 * @apiSuccess (Succès : 200) {Number}  Id_Destinations Id_Destinations de l'indice
 *
 * @apiSuccessExample {json} Exemple de réponse en cas de succès
 *     HTTP/1.1 200 OK
 *
 *	{
 *		"Destination finale":{"Id":1,"Nom":"Nantes","Indices":[{"Id":1,"Type":"Text","Description":"Tombeau de Fran\u00e7ois II de Bretagne","Id_Destinations":1},{"Id":2,"Type":"Text","Description":"Ch\u00e2teau de Goulaine","Id_Destinations":1},{"Id":3,"Type":"Text","Description":"Parc du Grand-Blottereau","Id_Destinations":1},{"Id":4,"Type":"Text","Description":"Parc de la Chantrerie","Id_Destinations":1},{"Id":5,"Type":"Text","Description":"L'Ile de Versailles","Id_Destinations":1}]}
 *	}
 *
 * @apiError (Erreur : 403) Forbidden Token incorrect
 *
 * @apiErrorExample {json} Exemple de réponse en cas d'erreur 403
 *     HTTP/1.1 403 Bad Request
 *
 * 	{
 *		"error":"no token or invalid token"
 *	}
 *
 * @apiError (Erreur : 404) PageNotFound Page inexistante
 *
 * @apiErrorExample {html} Exemple de réponse en cas d'erreur 404
 *     HTTP/1.1 404 Not Found
 *
 *  <title>Page Not Found</title>
 *  <h1>Page inexistante</h1>
 *  <p>
 *  La page que vous essayer d'atteindre n'existe pas.
 *  Vérifiez votre URL ou retournez à la page d'accueil.
 *  </p>
 *  <a href='https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP'>Page d'accueil</a>
 *
 * @apiError (Erreur : 405) MethodNotAllowed Méthode non permise
 *
 * @apiErrorExample {html} Exemple de réponse en cas d'erreur 405
 *     HTTP/1.1 405 Method Not Allowed
 *
 *  <title>Method not allowed</title>
 *  <h1>Methode non permise</h1>
 *  <p>
 *  Methode non permise. Elle devrait être: GET.
 *  </p>
*/

/**
 * @apiGroup Path
 * @apiName GetAddPath
 * @apiVersion 0.1.0
 *
 * @api {get} /{token}/paths[/] Ajout/Accès d'une ressource path
 *
 * @apiDescription Accès a une ressource de type path. Permet d'accéder à la représentation de cette ressource.
 * De l'ajouter dans une ressource générer.
 * Retourne une représentation json de l'id, du nom et des ressources indices de cette ressource.
 *
 * @apiParam {String} token Token de la partie
 *
 * @apiSuccess (Succès : 200) {Number}  Id Id du path
 * @apiSuccess (Succès : 200) {Float}  Longitude Longitude du path
 * @apiSuccess (Succès : 200) {Float}  Latitude Latitude du path
 * @apiSuccess (Succès : 200) {string}  Nom Nom du path
 * @apiSuccess (Succès : 200) {string}  Indication Indication de l'indice
 *
 * @apiSuccessExample {json} Exemple de réponse en cas de succès
 *     HTTP/1.1 200 OK
 *
 *	{
 *		{"Id":2,"Longitude":"4.35","Latitude":"43.833328","Nom":"N\u00eemes","Indication":"Jardin de la Fontaine"},{"Id":4,"Longitude":"1.4436700","Latitude":"43.6042600","Nom":"Toulouse","Indication":"Eglise Notre-Dame de la Dalbade"},{"Id":3,"Longitude":"5.3810700","Latitude":"43.2969500","Nom":"Marseille","Indication":"Le Vieux Port"},{"Id":1,"Longitude":"48.8534100","Latitude":"2.3488000","Nom":"Paris","Indication":"Tour Eiffel"},{"Id":5,"Longitude":"-0.5805000","Latitude":"44.8404400","Nom":"Bordeaux","Indication":"Vin de ..."}
 *	}
 *
 * @apiError (Erreur : 403) Forbidden Token incorrect
 *
 * @apiErrorExample {json} Exemple de réponse en cas d'erreur 403
 *     HTTP/1.1 403 Bad Request
 *
 * 	{
 *		"error":"no token or invalid token"
 *	}
 *
 * @apiError (Erreur : 404) PageNotFound Page inexistante
 *
 * @apiErrorExample {html} Exemple de réponse en cas d'erreur 404
 *     HTTP/1.1 404 Not Found
 *
 *  <title>Page Not Found</title>
 *  <h1>Page inexistante</h1>
 *  <p>
 *  La page que vous essayer d'atteindre n'existe pas.
 *  Vérifiez votre URL ou retournez à la page d'accueil.
 *  </p>
 *  <a href='https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP'>Page d'accueil</a>
 *
 * @apiError (Erreur : 405) MethodNotAllowed Méthode non permise
 *
 * @apiErrorExample {html} Exemple de réponse en cas d'erreur 405
 *     HTTP/1.1 405 Method Not Allowed
 *
 *  <title>Method not allowed</title>
 *  <h1>Methode non permise</h1>
 *  <p>
 *  Methode non permise. Elle devrait être: GET.
 *  </p>
*/

/**
 * @apiGroup Path
 * @apiName GetPathsParty
 * @apiVersion 0.1.0
 *
 * @api {get} /{token}/getPaths[/] Accès d'une ressource path
 *
 * @apiDescription Accès a une ressource de type path. Permet d'accéder à la représentation de cette ressource.
 * Retourne une représentation json du number,de l'indication,de la longitude, latitude et du nom des ressources indices de cette ressource.
 *
 * @apiParam {String} token Token de la partie
 *
 * @apiSuccess (Succès : 200) {Number}  Number Number du path
 * @apiSuccess (Succès : 200) {string}  Indication Indication du path
 * @apiSuccess (Succès : 200) {Float}  Longitude Longitude du path
 * @apiSuccess (Succès : 200) {Float}  Latitude Latitude du path
 * @apiSuccess (Succès : 200) {string}  Nom Nom du path
 *
 * @apiSuccessExample {json} Exemple de réponse en cas de succès
 *     HTTP/1.1 200 OK
 *
 *	{
 *		[{"Number":1,"Indication":"Le Vieux Port","Longitude":"5.3810700","Latitude":"43.2969500","Nom":"Marseille"},{"Number":2,"Indication":"Vin de ...","Longitude":"-0.5805000","Latitude":"44.8404400","Nom":"Bordeaux"},{"Number":3,"Indication":"Tour Eiffel","Longitude":"2.3488000","Latitude":"48.8534100","Nom":"Paris"},{"Number":4,"Indication":"Jardin de la Fontaine","Longitude":"4.35","Latitude":"43.833328","Nom":"N\u00eemes"},{"Number":5,"Indication":"Eglise Notre-Dame de la Dalbade","Longitude":"1.4436700","Latitude":"43.6042600","Nom":"Toulouse"}]
 *	}
 *
 * @apiError (Erreur : 403) Forbidden Token incorrect
 *
 * @apiErrorExample {json} Exemple de réponse en cas d'erreur 403
 *     HTTP/1.1 403 Bad Request
 *
 * 	{
 *		"error":"no token or invalid token"
 *	}
 *
 * @apiError (Erreur : 404) PageNotFound Page inexistante
 *
 * @apiErrorExample {html} Exemple de réponse en cas d'erreur 404
 *     HTTP/1.1 404 Not Found
 *
 *  <title>Page Not Found</title>
 *  <h1>Page inexistante</h1>
 *  <p>
 *  La page que vous essayer d'atteindre n'existe pas.
 *  Vérifiez votre URL ou retournez à la page d'accueil.
 *  </p>
 *  <a href='https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP'>Page d'accueil</a>
 *
 * @apiError (Erreur : 405) MethodNotAllowed Méthode non permise
 *
 * @apiErrorExample {html} Exemple de réponse en cas d'erreur 405
 *     HTTP/1.1 405 Method Not Allowed
 *
 *  <title>Method not allowed</title>
 *  <h1>Methode non permise</h1>
 *  <p>
 *  Methode non permise. Elle devrait être: GET.
 *  </p>
*/