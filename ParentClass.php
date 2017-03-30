<?php
	// This is the file for the parent class

	class ParentClass {
		
		protected $name;
		protected $age;
		protected $username;
		
		
		public function __construct($nameInput, $ageInput, $usernameInput){
			$this->name = $nameInput;
			$this->age = $ageInput;
			$this->username = $usernameInput;
		}
		
		public function __deconstruct(){
			echo "Program completing. Removing ", $this->name, " from the database. <br/>";
		}
		
		//Getters and setters
		public function setName($input){
			$this->name = $input;
		}
		public function setAge($input){
			$this->age = $input;
		}
		public function setUsername($input){
			$this->username = $input;
		}
		public function getName(){
			return $this->name;
		}
		public function getAge(){
			return $this->age;
		}
		public function getUsername(){
			return $this->username;
		}
		
		public function __toString(){
			$ans = "Name is: " . $this->name . "<br/>Age is: " . $this->age . "<br/>Username is: " . $this->username;
			return $ans;
		}
		
		
		
		
	}
