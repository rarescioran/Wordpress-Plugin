<?php

/*
    Plugin Name: LoremIpsum WordPress Plugin
    Plugin URI: http://swissacademy.eu
    Author: Killer Bunny
    Auhor URI: http://swissacademy.eu
    Description: [ipsum paragrafe=10 lungime=short|medium|long|verylong ]  
*/


add_shortcode('ipsum','generate_ipsum');


function generate_ipsum($atts){

    if(empty($atts['type'])){
        $type="text";
    }else{
        $type =$atts['type'];
    }
    
    if(empty($atts['paragrafe'])){
        $paragrafe = 2;
    }else{
        $paragrafe = $atts['paragrafe'];
    }
    
    
      
    if(empty($atts['lungime'])){
        $lungime = 'medium';
    }else{
        $lungime = $atts['lungime'];
    }
    
     
    
    if(empty($atts['lungimea'])){
        $lungimea = '100';
    }else{
        $lungimea = $atts['lungimea'];
    }
    
       if(empty($atts['latimea'])){
        $latimea = '100';
    }else{
        $latimea = $atts['latimea'];
    }
    
    $sursa='http://via.placeholder.com/'.$lungimea.'x'.$latimea;
    $ipsum = '<img src="'.$sursa.'">';
    
    if($type=="imagine"){
        echo $ipsum;
    }else{
      echo $ipsum=file_get_contents('https://loripsum.net/api/'.$paragrafe.'/'.$lungime);
    }
    
    
}