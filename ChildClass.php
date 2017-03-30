<?php 
	// this file will extend ParentClass.php

	class ChildClass extends ParentClass {
		private $member;
		private $balance;
		public $obj;
		
		public function __construct($nameInput, $ageInput, $usernameInput, $memberInput, $balanceInput){
			parent::__construct($nameInput, $ageInput, $usernameInput);
			$this->member = $memberInput;
			$this->balance = $balanceInput;
			$this->obj = new ParentClass($nameInput, $ageInput, $usernameInput);
		}
		
		public function __destruct(){
			echo "<br/>Program completing. Removing ", $this->name, " from the database.";
		}
		
		public function __clone() {
			$this->obj = clone $this->obj;
		}
		
		//Setters and getters
		public function setMember($input){
			$this->member = $input;
		}
		public function setBalance($input){
			$this->balance = $input;
		}
		public function getMember(){
			return $this->member;
		}
		public function getBalance(){
			return $this->balance;
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
			if($this->member == TRUE){
				$ans = "Name is: " . $this->name . "<br/>Age is: " . $this->age . "<br/>Username is: " . $this->username . "<br/>User is a member with balance: " . $this->balance;
			}
			else{
				$ans = "Name is: " . $this->name . "<br/>Age is: " . $this->age . "<br/>Username is: " . $this->username;
			}
			return $ans;
		}
	}
