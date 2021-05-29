# Mise en place du projet

1. Pour travailler sur ce projet, vous devez mettre le code du dossier `user-crud` dans votre `document root` de tel sorte que le chemin soit le suivant `<document root>/user-crud`. Par exemple, pour WAMP, il sera dans le répertoire suivant : `www/user-crud`.

2. Créez votre base de données `projet_users` et exécutez le script SQL suivant pour créer la table nécessaire :

```sql
CREATE TABLE `user` (
  `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mot_de_passe` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=COMPACT;
```

# Sujet : Permettre la modification d'un mendiant existant

A la fin de ce sujet, l'utilisateur doit être capable de modifier un mendiant existant

## Création de la vue

### ➜ Exercice 1 : Ajout du formulaire

Ajouter une nouvelle view (nouveau fichier) pour mettre du code HTML pour afficher le formulaire de modification pour modifier un produit existant (vous pourrez vous inspirer du formulaire d'ajout de mendiant)

## Création de la fonction du controller

### ➜ Exercice 2 : Récupération du mendiant à modifier

Modifier le controller `user_controller.php` pour ajouter une fonction pour mettre à jour le mendiant. Cette fonction doit récupérer l'objet produit à modifier par son id (identifiant du mendiant). Pour la récupération, vous pourrez vous inspirer de la fonction `delete`.

### ➜ Exercice 3 : Modification des propriétés de l'objet

Cette fonction doit également changer les propriétés de l'objet par les données du formulaire. Pour changer de valeurs des propriétés, vous pourrez vous inspirer de la fonction `convertirPayloadEnObjet` .

### ➜ Exercice 4 : Sauvegarder l'objet en base de données

Cette fonction doit également sauvegarder l'objet en base de données. Pour la sauvegarde, vous pouvez vous inspirer de la fonction `create`.

## Ajout d'une route

L'ajout d'une route permet à l'utilisateur d'accéder à la page par le navigateur en écrivant dans sa barre d'adresse : `router.php/<quelque chose>`

### ➜ Exercice 5 : Ajout la route

Ajouter une route `/modifier-mendiant` pour que l'utilisateur puisse aller sur la page `router.php/modifier-mendiant?id=1` dans le navigateur pour qu'il puisse modifier l'objet `user` avec l'id 1.

### ➜ Exercice 6 : Ajout d'un bouton

Ajouter un bouton dans la page de la liste des mendiants pour modifier le mendiant en question, donc qui pointera vers la page `router.php/modifier-mendiant?id=` avec l'id du produit en question.