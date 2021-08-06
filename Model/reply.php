<?PHP
	class reply{
		private  $id_reply = null;
        private  $id_post = null;
        private  $username_reply = null;
		private  $date_reply = null;
        private  $nb_reported = null;
        private  $text_reply = null;

		
		function __construct(string $username_reply, string $text_reply , int $id_post){
			
			
			$this->username_reply=$username_reply;
			$this->text_reply=$text_reply;
			$this->id_post=$id_post;
        	}
		
		function getId_reply(): int{
			return $this->id_reply;
		}
		function getId_post(): int{
			return $this->id_post;
		}
		function getUsername_reply(): string{
			return $this->username_reply;
		}
		function getText_reply(): string{
			return $this->text_reply;
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