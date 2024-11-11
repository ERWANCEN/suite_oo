<?php

// je crée une classe que j'appelle 'Suite'
class Suite
{
    /**
     * Propriété privée statique de type 'string' à laquelle j'affecte une chaine de caractères vide
     * Permettra par la suite d'accueillir le résultat à afficher
     *
     * @var string
     */
    private static string $_suite = "";

    /**
     * Constructeur qui s'exécutera à chaque nouvelle instanciation
     * Permettra d'exécuter la méthode publique 'setSuite()'
     */
    public function __construct()
    {
        $this->setSuite();
    }

    /**
     * Méthode setter (mutateur)
     * Va réaliser la suite demandée
     *
     * @return void
     */
    public function setSuite()
    {
        // boucle for qui se répètera tant que la valeur de la variable '$i' sera inférieure à 100
        for($i = 0; $i < 100; $i++)
            {
                // structure conditionnelle qui vérifie si la valeur de la variable '$i' est inférieure à 10. 
                // - Si oui, on ajoutera un '0' devant la valeur de '$i', puis affichera la valeur de '$i', pour enfin ajouter une virgule suivie d'un espace
                // - Si non, on ajoutera à la propriété '$_suite' la valeur de la variable '$i' suivie d'une virgule et d'un espace
                if($i < 10)
                {
                    self::$_suite .= "0" . $i . ", ";
                } else {
                    self::$_suite .= $i . ", ";
                }
            }
    }

    /**
     * Méthode getter (accesseur)
     * Va permettre d'afficher le résultat lorsqu'elle sera appelée
     *
     * @return void
     */
    public function getSuite()
    {
        return self::$_suite;
    }
}