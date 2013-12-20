<?php
	function ifunset($method,$var,$default){
		if(isset($method[$var])){
			return $method[$var];
		}else{
			return $default;
		}
	}
	
	function tanggal($tanggal){
		$d=explode('/',$tanggal);
		return $d[2].'-'.$d[1].'-'.$d[0];
	}
	
