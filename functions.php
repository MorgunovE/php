<?php

function add_name($names, $name){
	$names[] = $name;
	return $names;
}

function remove_name($names, $remove_name){
	foreach ( $names as $key => $name) {
		if($remove_name === $name){
			unset($names[$key]);
		}
	}
	return $names;
}

function update_name($names, $key, $new_name){
	$names[$key] = $new_name;
	return $names;
}