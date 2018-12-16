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

    public function get_all_tests(){
		try{
			$requete = $this->bd->prepare('Select Nom, Categorie from TEST');
			$requete->execute();
			return $requete->fetchAll();
		}
		catch (PDOException $e) {
			die ('Echec get_all_tests, erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function get_category(){
		try{
			$requete = $this->bd->prepare('Select distinct Categorie from TEST');
			$requete->execute();
			return $requete->fetchAll(PDO::FETCH_COLUMN);
		}
		catch (PDOException $e) {
			die ('Echec get_category erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function ajout_choix_test($test){ //Permet d'ajouter à la base de données Panier le test du professionel selectionné
		try{
			$v = $this->categorie_selectionne($test);
			if($v == FALSE){
				$requete = $this->bd->prepare('INSERT INTO Panier VALUES (:test)');
				$requete->bindValue(":test",$test);
				return $requete->execute();
			}
			else {
				return 2;
			}
		}
		catch (PDOException $e) {
			die ('Echec get_category erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function categorie_selectionne($categorie){
		try{
			$requete = $this->bd->prepare('SELECT catgeorie FROM panier where catgeorie = :categorie');
			$requete->bindValue(":categorie",$categorie);
			$requete->execute();
			return $requete->fetch(PDO::FETCH_ASSOC);
		}
		catch (PDOException $e) {
			die ('Echec get_category erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function choix_test_ajouté(){
		try{
			$requete = $this->bd->prepare('SELECT catgeorie FROM panier');
			$requete->execute();
			return $requete->fetchall(PDO::FETCH_ASSOC);
		}
		catch (PDOException $e) {
			die ('Echec get_category erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}
	public function supprimer_test($categorie){
		try{
			$requete = $this->bd->prepare('DELETE FROM panier where catgeorie = :categorie');
			$requete->bindValue(":categorie",$categorie);
			return $requete->execute();
		}
		catch (PDOException $e) {
			die ('Echec get_category erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}
}
