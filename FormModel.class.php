<?php 

class FormModel {


	public function random(){

	$array = array("A11", "A12", "A13", "A14", "415", "A16");

	return $array[array_rand($array, 1)];
	}

}
