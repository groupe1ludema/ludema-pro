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

	public function supprimer_tout_les_tests(){
		try{
			$requete = $this->bd->prepare('DELETE FROM panier');
			return $requete->execute();
		}
		catch (PDOException $e) {
			die ('Echec get_category erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function existe_testSelectionne($nomtest){
		try{
			$requete = $this->bd->prepare("SELECT EXISTS (SELECT Nom from test where Nom = :nomtest) as nomtest");
			$requete->bindValue(":nomtest",$nomtest);
			$requete->execute();
			return $requete->fetch();
		}
		catch (PDOException $e) {
			die ('Echec get_question erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}



	public function get_questions($test){
		try{
			$requete = $this->bd->prepare("SELECT * FROM Questions where Test = :test");
			$requete->bindValue(":test",$test);
			$requete->execute();
			return $requete->fetchall(PDO::FETCH_ASSOC);
		}
		catch (PDOException $e) {
			die ('Echec get_question erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function get_descriptionTest($test){
		try{
			$requete = $this->bd->prepare("SELECT description FROM Test where nom = :test");
			$requete->bindValue(":test",$test);
			$requete->execute();
			return $requete->fetchall(PDO::FETCH_ASSOC);
		}
		catch (PDOException $e) {
			die ('Echec get_descriptionTest erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function get_detailComposition($nomComposition, $login){
		try{
			$requete = $this->bd->prepare("SELECT detailComposition FROM Composition where login = :login AND nomComposition = :nomComposition");
			$requete->bindValue(":login",$login);
			$requete->bindValue(":nomComposition",$nomComposition);
			$requete->execute();
			return $requete->fetch(PDO::FETCH_ASSOC);
		}
		catch (PDOException $e) {
			die ('Echec get_detailComposition erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function get_email($login){
		try{
			$requete = $this->bd->prepare("SELECT email FROM utilisateur where login = :login");
			$requete->bindValue(":login",$login);
			$requete->execute();
			return $requete->fetch(PDO::FETCH_ASSOC);
		}
		catch (PDOException $e) {
			die ('Echec get_email erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function ajout_composition($nomComposition,$detailComposition, $login){ //Permet d'ajouter à la base de données une composition
		try
		{
				$requete = $this->bd->prepare('INSERT INTO Composition(nomComposition,detailComposition,login) VALUES (:nomComposition, :detailComposition, :login)');
				$requete->bindValue(":nomComposition",$nomComposition);
				$requete->bindValue(":detailComposition",$detailComposition);
				$requete->bindValue(":login",$login);
				return $requete->execute();
		}
		catch (PDOException $e) {
			die ('Echec ajout_composition erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function supprimer_composition($nomComposition,$login){
		try{
			$requete = $this->bd->prepare('DELETE FROM Composition where nomComposition = :nomComposition AND login = :login');
			$requete->bindValue(":nomComposition",$nomComposition);
			$requete->bindValue(":login",$login);
			return $requete->execute();
		}
		catch (PDOException $e) {
			die ('Echec suprimmer_composition erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function existe_composition($nomComposition, $login){
		try{
			$requete = $this->bd->prepare("SELECT EXISTS (SELECT nomComposition from Composition where login = :login AND nomComposition = :nomComposition) as nomCompo");
			$requete->bindValue(":login",$login);
			$requete->bindValue(":nomComposition",$nomComposition);
			$requete->execute();
			return $requete->fetch();
		}
		catch (PDOException $e) {
			die ('Echec get_question erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function get_nomComposition($login){
	try{
		$requete = $this->bd->prepare('Select nomComposition FROM Composition where login = :login');
		$requete->bindValue(":login",$login);
		$requete->execute();
		return $requete->fetchAll(PDO::FETCH_ASSOC);
	}
	catch (PDOException $e) {
		die ('Echec get_all_tests, erreur n°'. $e->getCode() .':'. $e->getMessage());
	}
}


	public function insert_inscription($data=[]){
		try{
			$requete = $this->bd->prepare("INSERT INTO utilisateur(login,email,mdp,prenom,nom) values(:login,:email,:mdp,:prenom,:nom)");
			$marqueurs = ['login','email', 'mdp', 'prenom', 'nom'];
			foreach ($marqueurs as $value) {
				$requete->bindValue(':'. $value, $data[$value]);
			}
			return $requete->execute();
		}
		catch (PDOException $e) {
			die ('Echec get_question erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function existe_login_user($login){
		try{
			$requete = $this->bd->prepare("SELECT EXISTS (SELECT login from utilisateur where login = :login) as login_exist");
			$requete->bindValue(":login",$login);
			$requete->execute();
			return $requete->fetch();
		}
		catch (PDOException $e) {
			die ('Echec get_question erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function existe_login_email($email){
		try{
			$requete = $this->bd->prepare("SELECT EXISTS (SELECT email from utilisateur where email = :email) as email_exist");
			$requete->bindValue(":email",$email);
			$requete->execute();
			return $requete->fetch();

		}
		catch (PDOException $e) {
			die ('Echec get_question erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function verification_login_mdp($login){
		try{
			$requete = $this->bd->prepare("SELECT mdp FROM utilisateur where login = :login");
			$requete->bindValue(":login",$login);
			$requete->execute();
			return $requete->fetch();
		}
		catch (PDOException $e) {
			die ('Echec get_question erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function get_categorie($test){
		try{
			$requete = $this->bd->prepare("SELECT categorie FROM Test where nom = :test");
			$requete->bindValue(":test",$test);
			$requete->execute();
			return $requete->fetchall(PDO::FETCH_ASSOC);
		}
		catch (PDOException $e) {
			die ('Echec get_question erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function ajouter_client(){
		try{
			if(isset($_SESSION['login']) and isset($_POST))
			$requete = $this->bd->prepare("INSERT INTO client (idClient,loginUtilisateur,prenom,nom,age,sexe,note) VALUES (DEFAULT,:loginPro,:prenom,:nom,:age,:sexe,:note);");
			$requete->bindValue(":loginPro",$_SESSION['login']);
			$requete->bindValue(":prenom",$_POST['prenom']);
			$requete->bindValue(":nom",$_POST['nom']);
			$requete->bindValue(":age",$_POST['age']);
			$requete->bindValue(":sexe",$_POST['sexe']);
			$requete->bindValue(":note",$_POST['note']);
			$requete->execute();
		}
		catch (PDOException $e) {
			die ('Echec ajouter_client erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function get_my_client(){
		try{
			if(isset($_SESSION['login'])){
				$requete = $this->bd->prepare("SELECT * FROM client WHERE loginUtilisateur = :loginPro ");
				$requete->bindValue(":loginPro",$_SESSION['login']);

			$requete->execute();
			return $requete->fetchall(PDO::FETCH_ASSOC);
		}
		}
		catch (PDOException $e) {
			die ('Echec ajouter_client erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function modifier_client($id,$login,$infos){
			try{
				$requete = $this->bd->prepare("UPDATE client SET prenom=:prenom,nom=:nom,age=:age,sexe=:sexe,note=:note WHERE idClient=:id");
				//$requete->bindValue(":loginPro",$login);
				$requete->bindValue(":id",$id);
				$requete->bindValue(":prenom",$infos['prenom']);
				$requete->bindValue(":nom",$infos['nom']);
				$requete->bindValue(":age",$infos['age']);
				$requete->bindValue(":sexe",$infos['sexe']);
				$requete->bindValue(":note",$infos['note']);
				$requete->execute();
			}
			catch (PDOException $e) {
				die ('Echec modifier_client erreur n°'. $e->getCode() .':'. $e->getMessage());
			}
		}

		public function supprimer_client($id,$login){
			try{
				$requete = $this->bd->prepare("DELETE FROM client WHERE idClient = :id AND loginUtilisateur = :loginPro;");
				$requete->bindValue(":id",$id);
				$requete->bindValue(":loginPro",$login);
				$requete->execute();
			}
			catch (PDOException $e) {
				die ('Echec supprimer_client erreur n°'. $e->getCode() .':'. $e->getMessage());
			}
		}

	 	public function get_my_donnees($id){

			try{
					//$tab=explode(" ",$nomYencli);
					$requete = $this->bd->prepare("SELECT * FROM client WHERE idClient= :id");
					$requete->bindValue(":id",$id);
					$requete->execute();
					return $requete->fetch(PDO::FETCH_ASSOC);

		}
		catch (PDOException $e) {
			die ('Echec get_my_donnees erreur n°'. $e->getCode() .':'. $e->getMessage());
		}
	}

	public function test_exists(){
        try{
            $requete = $this->bd->prepare('SELECT * FROM panier');
            $requete->execute();
            return $requete->fetchall(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            die ('Echec get_category erreur n°'. $e->getCode() .':'. $e->getMessage());
        }
    }

}
