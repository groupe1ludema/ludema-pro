<?php

class Model {

	/**
	 * Attribut contenant l'instance PDO
	 */
	private $bd;


	/**
	 * Attribut statique qui contiendra l'unique instance de Model
	 */
	private static $instance = null;


	/**
	 * Constructeur : effectue la connexion à la base de données.
	 */
	private function __construct() {

		try {
			$dsn = "mysql:host=localhost;dbname=ludemabdd";      // A renseigner
			$login = "root";    // A renseigner
			$password = ""; // A renseigner
			$this->bd = new PDO($dsn,$login,$password);
			$this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->bd->query("SET nameS 'utf8'");
		}
		catch (PDOException $e) {
			die ('Echec connexion, erreur n°'. $e->getCode() . ':' . $e->getMessage());
		}
	}


	/**
	 * Méthode permettant de récupérer un modèle car le constructeur est privé (Implémentation du Design Pattern Singleton)
	 */
	public static function get_model() {

        if (is_null(self::$instance))
            self::$instance = new Model();
        return self::$instance;
    }
}
