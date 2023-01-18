# APPLICATION-WEB-COTE-SERVEUR


Partie 1 :
Soit la base de données relationnelle, PUF, de schéma :
Usine (NumUsine, NomU, Ville)
Produit (NumProduit, NomP, prixunitaire)
Fournisseur (NumFfournisseur, NomF, Ville)
PUF (NumProduit, NumUsine, NumFournissur, Quantité)
Décrivant les faits suivants :
	Usine: une usine est décrite par son numéro NU, son nom NomU, la ville Ville dans laquelle elle est située;
	Produit: un produit est décrit par son numéro NP, son nom NomP, sa Couleur, son Poids;
	Fournisseur: un fournisseur est décrit par son numéro NF, son nom NomF, , la Ville où il est domicilié;
	PUF: le produit de numéro NumProduit a été livré à l'usine de numéro NumUsine par le fournisseur de numéro NumFfournisseur dans une Quantité donnée.
•	Créer la base de données.
•	Créer les relations et les contraintes d’intégrité.
•	Remplir les tables avec des enregistrements.
•	On se propose de développer une version web de la même application.
•	L’application comportera la gestion des livraisons
•	Consultation du produit, et consultation des fournisseurs et des usines par ville


o	Pour contrôler l’accès à l’application, on vous demande de mettre en place la sécurité par formulaire,  et  de permettre à l’utilisateur ayant le login : « Admis.» le mot de passe : «admis » d’accéder aux pages de l’application

o	la page livraison : permet d’enregistrer une livraison d’un produit par un fournisseur pour une usine d’une quantité bien déterminée.

o	la page liste des produits : permet d’afficher la liste de tous les produits.

o	les deux pages listent des fournisseurs et usines par ville permettent d’afficher respectivement la liste des fournisseurs et des usines d’une ville choisie par l’utilisateur

 Partie 2 :

Créer une page web qui contient un script JavaScript qui lit n nombre dans un tableau et qui affiche leur minimum en utilisant une fonction et se servant d’un bouton de commande
