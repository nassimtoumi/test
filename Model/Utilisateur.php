<?PHP
	class Utilisateur{
		private  $id = null;
        private  $username = null;
		private  $email = null;
		private  $password = null;
        private  $date = null;

		
		function __construct(string $username, string $email , string $password){
			
			$this->email=$email;
			$this->username=$username;
			$this->password=$password;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getUsername(): string{
			return $this->username;
		}
		
		
		function getEmail(): string{
			return $this->email;
		}
		function getPassword(): string{
			return $this->password;
		}
        function getDate(): string{
			return $this->date;
		}
		function setUsername(string $username): void{
			$this->username=$username;
		}
		
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setPassword(string $password): void{
			$this->password=$password;
		}
	}
?>