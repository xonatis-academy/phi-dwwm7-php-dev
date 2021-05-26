<?php

/* ========================================================================
Problème : Veuillez écrire une fonction qui divise 2 nombres flottant donc qui :
prend 2 nombres flottants en entrée
retourne un nombre flottant qui correspond à la division du 1er nombre par le 2eme nombre

Exemple :
Pour les données suivantes par exemple : 5.0, 2.5
La fonction doit retourner : 2.0
*/

// 1. Comment on appelle la fonction (commence par un verbe) : diviser
// 2. Identifier le type et les valeurs/noms en entrée : float $v1, float $v2
// 3. Le type de retour : float

function diviser(float $v1, float $v2): float
{
    return $v1 / $v2;
}

/* ========================================================================
Problème : Veuillez écrire une fonction qui double un nombre donc qui :
prend 1 nombre flottant en entrée
retourne un nombre flottant qui correspond au double du nombre

Exemple :
Pour les données suivantes par exemple : 4.4
La fonction doit retourner : 8.8
*/

// 1. Comment on appelle la fonction (commence par un verbe) : doubler
// 2. Identifier le type et les valeurs/noms en entrée : float $n
// 3. Le type de retour : float

function doubler(float $n): float
{
    return $n * 2;
}

/* ========================================================================
Problème : Veuillez écrire une fonction qui :
prend 2 nombres flottants en entrée
retourne un nombre flottant qui correspond à la division du 1er nombre par le double du 2eme nombre

Exemple :
Pour les données suivantes par exemple : 5.0, 1.25
La fonction doit retourner : 2.0
*/

// 1. Comment on appelle la fonction (commence par un verbe) : calculerRatio
// 2. Identifier le type et les valeurs/noms en entrée : float $n, float $n1
// 3. Le type de retour : float

function calculerRatio(float $n, float $n1): float
{
    $double = doubler($n1);
    $division = diviser($n, $double);
    return $division;
}

/*
Problème : Veuillez écrire une fonction qui convertit un nombre de minutes en secondes donc qui :
prend 1 nombre entier en entrée (nombre de minutes)
retourne un nombre entier qui correspond au nombre de secondes équivalent

Exemple :
Pour les données suivantes par exemple : 2
La fonction doit retourner : 120
*/

// 1. Comment on appelle la fonction (commence par un verbe) : convertir
// 2. Identifier le type et les valeurs/noms en entrée : int $n
// 3. Le type de retour : int

function convertir(int $n): int
{
    return $n * 60;
}

/*
Problème : Veuillez écrire une fonction qui applique une réduction de 20 % à un prix donc qui :
prend 1 nombre flottant en entrée (prix d'origine)
retourne un nombre flottant qui correspond au prix moins 20 %

Exemple :
Pour les données suivantes par exemple : 20.0
La fonction doit retourner : 16.0
*/

// 1. Comment peut-on appeller cette fonction (commence par un verbe) : reduire
// 2. Identifier le type et les valeurs/noms en entrée : float $v
// 3. Le type de retour : float

function reduire(float $v): float
{
    return $v - $v * 20 / 100;
}

/*
Problème : Veuillez écrire une fonction qui vérifie si le paiement sans contact est disponible pour un montant donc qui :
prend 1 nombre flottant en entrée (montant à payer)
retourne soit vrai si le paiement sans contact est possible ou bien faux sinon
Le paiement sans contact est disponible si et seulement si le montant à payer est inférieur ou égal à 30 euros.

Exemple :
Pour les données suivantes par exemple : 20.0
La fonction doit retourner : true
*/

// 1. Comment peut-on appeller cette fonction (commence par un verbe) : verifier
// 2. Identifier le type et les valeurs/noms en entrée : float $montant
// 3. Le type de retour : bool

function verifier(float $montant): bool
{
    if ($montant <= 30)
    {
        return true;
    }
    else
    {
        return false;
    }
}

/*
Problème : Veuillez écrire une fonction qui compte le nombre de personnes majeurs dans une liste donc qui :
prend 1 tableau d'ages en entrée
retourne le nombre total de personnes majeurs

Exemple :
Pour les données suivantes par exemple : [15, 12, 18, 19, 43, 13, 16, 53]
La fonction doit retourner : 4
car il y a 4 personnes dont l'age dépasse l'age requis pour etre majeur
*/

// 1. Comment peut-on appeller cette fonction (commence par un verbe) : compterMajeurs
// 2. Identifier le type et les valeurs/noms en entrée : array $tab
// 3. Le type de retour : int

function compterMajeurs(array $tab): int
{
    $compte = 0;
    foreach ($tab as $element)
    {
        if ($element >= 18)
        {
            $compte = $compte + 1;
        }
    }
    return $compte;
}