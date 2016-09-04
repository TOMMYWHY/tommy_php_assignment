<?php

 class bank{
	 var $name;
	 var $address;
	 var $phone;
	 var $email;
	 var $account_number;
	 var $type;
//		 var $account_session;
	 var $depositAmount;
	 var $withdrawAmount;
	 
	function set_withdrawAmount($withdrawAmount){
		$this->withdrawAmount=$withdrawAmount;
	}
	function get_withdrawAmount(){
		return $this->withdrawAmount;
	}
	 function set_depositAmount($depositAmount){
		$this->depositAmount=$depositAmount;
	}
	function get_depositAmount(){
		return $this->depositAmount;
	}
	function set_name($user_name){
		$this->name=$user_name;
	}
	function get_name(){
		return $this->name;
	}	
	
	function set_address($address){
		$this->address=$address;
	}
	function get_address(){
		return $this->address;
	}
	function set_phone($phone){
		$this->phone=$phone;
	}
	function get_phone(){
		return $this->phone;
	} 
	function get_email(){
		return $this->email;
	}
	function set_email($email){
		$this->email=$email;
	}
	function set_account_number($account_number){
		$this->account_number=$account_number;
	}
	function get_account_number(){
		return $this->account_number;
	}
	function set_type($type){
		$this->type=$type;
	}
	function get_type(){
		return $this->type;
	}
 }

?>