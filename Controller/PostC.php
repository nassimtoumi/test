<?PHP
	include "../config.php";
	require_once '../Model/Post.php';

	class PostC {
		
		function ajouterPost($Post){
			$sql="INSERT INTO post (category_post, username_post, text_post , sujet_post) 
			VALUES (:category_post ,:username_post,:text_post ,:sujet_post)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'category_post' => $Post->getCategory_post(),
					'username_post' => $Post->getUsername_post(),
					'text_post' => $Post->getText_post(),
					'sujet_post' => $Post->getSujet_post()

				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function afficherPosts(){
			
			$sql="SELECT * FROM post ORDER BY id_post DESC LIMIT 3 ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
	
    }

   
		

?>