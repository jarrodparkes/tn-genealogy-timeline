<?php
    date_default_timezone_set('America/Chicago');

	$array = [
    	"bedford" => [
    		"title" => "Formation of Bedford County, TN",
    		"description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?",
    		"link" => "#0",            
    		"date" => strtotime('1807/12/03')
    	],
    	"franklin" => [
    		"title" => "Formation of Franklin County, TN",
    		"description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?",
    		"link" => "#0",
    		"date" => strtotime('1807/12/03')
    	]  	
	];

    function sortFunction( $a, $b ) {
        return $a["date"] - $b["date"];
    }
    usort($array, "sortFunction");
?>