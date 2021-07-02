<?php

namespace App\Cars;

class Name {

	public $names;
	public $add_name;
	public $name_key;
	public $update_name;
	public $remove_name;
	public $new_list;

	public function add_name(){
//	    $names[] = $name;
		$this-> names[] = $this->add_name;
		return $this->names;
	}

	public function remove_name(){
		foreach ( $this->names as $key => $name) {
			if($this->remove_name === $name){
				unset($this->names[$key]);
			}
		}
		$this->array_reset();
		return $this->names;
	}
	public function update_name(){
		$this->names[$this->name_key] = $this->update_name;
		return $this->names;
	}

	public function array_reset(){
		foreach ( $this->names as $name) {
			$this->new_list[] = $name;
			}
		$this->names = $this->new_list;
		$this->new_list = [];
	}

}
