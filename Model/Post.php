<?PHP
	class Post{
		private  $id_post = null;
        private  $username_post = null;
		private  $category_post = null;
		private  $nb_reported = null;
        private  $date_post = null;
        private  $text_post = null;
        private  $sujet_post = null;

		
		function __construct(string $username_post, string $category_post , string $text_post , string $sujet_post ){
			
			$this->category_post=$category_post;
			$this->username_post=$username_post;
			$this->text_post=$text_post;
            $this->sujet_post=$sujet_post;
		}
		
		function getId_post(): int{
			return $this->id_post;
		}
		function getUsername_post(): string{
			return $this->username_post;
		}
		
		
		function getCategory_post(): string{
			return $this->category_post;
		}
		function getText_post(): string{
			return $this->text_post;
		}
        function getSujet_post(): string{
			return $this->sujet_post;
		}
	/*	function setUsername(string $username): void{
			$this->username=$username;
		}
		
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setPassword(string $password): void{
			$this->password=$password;
		}*/
	}

    
?>