<?php

/**
 * Classe d'accès aux données. 
 * 
 * Utilise les services de la classe PDO
 * pour l'application GSB
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoGsb qui contiendra l'unique instance de la classe
 */
class PdoGsb {

    private static $serveur = 'sqlsrv:Server=WIN-OIUN336DKAA';
    private static $bdd = 'Database=Margo';
    private static $user = 'margo';
    private static $mdp = 'TestMargo';
    private static $monPdo;
    private static $monPdoGsb = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct() {
        PdoBDD::$monPdo = new PDO(PdoBDD::$serveur . ';' . PdoBDD::$bdd, PdoBDD::$user, PdoBDD::$mdp);
        PdoBDD::$monPdo->query("SET CHARACTER SET utf8");
        PdoBDD::$monPdo->query('SET lc_time_names = "fr_FR"');
        PdoBDD::$monPdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function _destruct() {
        PdoGsb::$monPdo = null;
    }

    /**
     * Fonction statique qui crée l'unique instance de la classe
     * Appel : $instancePdoGsb = PdoGsb::getPdoGsb();
     * 
     * @return l'unique objet de la classe PdoGsb
     */
    public static function getPdoGsb() {
        if (PdoGsb::$monPdoGsb == null) {
            PdoGsb::$monPdoGsb = new PdoGsb();
        }
        return PdoGsb::$monPdoGsb;
    }

    // ***** fonction pour la gestion des mots ***** //
    
    public function ajouterMot($contenuMot, $nbPointsMot, $idThemeMot, $dureeMot)
    {
	$query = PdoBDD::$monPdo->prepare('INSERT INTO Mots (contenuMot, nbPointsMot, idThemeMot, dureeMot)
		VALUES(:contenuMot, :nbPointsMot, :idThemeMot, :dureeMot);');
	$query->bindParam(':contenuMot', $contenuMot, PDO::PARAM_STR);
        $query->bindParam(':nbPointsMot', $nbPointsMot, PDO::PARAM_INT);
	$query->bindParam(':idThemeMot', $idThemeMot, PDO::PARAM_INT);
	$query->bindParam(':dureeMot', $dureeMot, PDO::PARAM_INT);
        $query->execute();
    }

    public function modifierMot($idMot, $contenu, $nbPoints, $duree) 
    {
	$query = PdoBDD::$monPdo->prepare('UPDATE Mots
		SET contenuMot = :contenu, nbPointsMot = :nbPoints, dureeMot = :duree
		WHERE idMot = :id;');
	$query->bindParam(':id', $idMot, PDO::PARAM_INT);
        $query->bindParam(':contenu', $contenu, PDO::PARAM_STR);
        $query->bindParam(':nbPoints', $nbPoints, PDO::PARAM_INT);
        $query->bindParam(':dureeMot', $duree, PDO::PARAM_INT);
        $query->execute();
    }

    public function supprimerMot($idMot)
    {
	$query = PdoBDD::$monPdo->prepare('DELETE FROM Mots
		WHERE idMot = :id;');
	$query->bindParam(':id', $idMot, PDO::PARAM_INT);
        $query->execute();
    }

    //Récupérer les informations d'un mot :
    public function getMot($id)
    {
        $query = PdoBDD::$monPdo->prepare('SELECT idMot, contenuMot, nbPointsMot, dureeMot
                FROM Mots
                WHERE idMot = :id;');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $requete_prepare->execute();
        return $requete_prepare->fetch();
    }
    
    //Récupérer les informations de tous les mots d'un thème :
    public function getMots($idTheme)
    {
        $query = PdoBDD::$monPdo->prepare('SELECT idMot, contenuMot, nbPointsMot, dureeMot
                FROM Mots
                WHERE idThemeMot = :idTheme
                ORDER BY contenuMot;');
        $query->bindParam(':idTheme', $idTheme, PDO::PARAM_INT);
        $requete_prepare->execute();
        return $requete_prepare->fetch();
    }
    
    //Fonction pour la gestion des thèmes
    //Récupérer tous les thèmes :
    public function getThemes()
    {
        $query = PdoBDD::$monPdo->prepare("SELECT idTheme, nomTheme, 
                RTRIM((SELECT contenuMot + ', ' FROM Mots WHERE (idThemeMot = idTheme) ORDER BY contenuMot FOR XML PATH(''))) AS lesMots, 		
                SUM(dureeMot) AS dureeTheme, COUNT(idMot) AS nbMotsTheme
                FROM Themes t
                INNER JOIN Mots m
                ON t.idTheme = m.idThemeMot
                GROUP BY idTheme, nomTheme
                ORDER BY nomTheme;");
        $query->bindParam(':idTheme', $idTheme, PDO::PARAM_INT);
        $requete_prepare->execute();
        return $requete_prepare->fetch();
    }
    
    public function ajouterTheme($nomTheme)
    {
	$query = PdoBDD::$monPdo->prepare('INSERT INTO Themes (nomTheme)
		VALUES(:nomTheme);');
        $query->bindParam(':nomTheme', $nomTheme, PDO::PARAM_STR);
        $query->execute();
    }

    public function modifierTheme($idTheme, $nomTheme)
    {
        $query = PdoBDD::$monPdo->prepare('UPDATE Themes
                SET nomTheme = :nomTheme
                WHERE idTheme = :idTheme;');
        $query->bindParam(':idTheme', $idTheme, PDO::PARAM_INT);
        $query->bindParam(':nomTheme', $nomTheme, PDO::PARAM_STR);
        $query->execute();
    }
    
    public function supprimerTheme($idTheme)
    {
        $query = PdoBDD::$monPdo->prepare('DELETE FROM Themes
                WHERE idTheme = :idTheme;');
        $query->bindParam(':idTheme', $idTheme, PDO::PARAM_INT);
        $query->execute();
    }
}
?>