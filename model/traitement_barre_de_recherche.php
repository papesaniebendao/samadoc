<?php
  session_start();
  if(isset($_POST['specialite']) && !empty($_POST['specialite'])){
    include("../connexionDB.php");
    $specialite = htmlspecialchars($_POST['specialite']);
    $requete = "SELECT specialite FROM msmedecins WHERE specialite = :specialite";
    $requetePrep = $connexion->prepare($requete);
    $requetePrep->bindParam(':specialite',$specialite);
    $requetePrep->execute(array(
        ':specialite'=>$specialite
    ));
    
    $tab = $requetePrep->fetch(PDO::FETCH_ASSOC);
    if($tab){
        $_SESSION['specialite-trouvee']=$tab['specialite'];
        header("Location:../specialite/specialite.php");
    }else{
        header("Location:../RechercheDeServices/Barre_De_Recherche.php");
    }
  }
?>  