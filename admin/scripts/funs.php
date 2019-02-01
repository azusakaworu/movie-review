<?php

function redirect_to($loctaion){
	if($loctaion != NULL){

		header('Location:'.$loctaion);
		exit;
	}
}