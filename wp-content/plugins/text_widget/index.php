<?php
/*
    Plugin Name: LoremIpsum WordPress Widget
    Plugin URI: http://swissacademy.eu
    Author: Killer Bunny
    Auhor URI: http://swissacademy.eu
    Description: [ipsum paragrafe=10 lungime=short|medium|long|verylong ]  
*/

add_action('widgets_init','register_text_widget');

function register_text_widget(){
    register_widget('Text_ipsum');
}

class Text_ipsum extends WP_Widget{
    
    public function __construct(){
        parent::__construct(
            'text_ipsum',   //ID
            'Text_ipsum',   //Name
            array('description'=>'This is a fun widget!')
        );
    }
    
    public function widget($args, $instance ){
        //ce apare aici afiseaza pe site
        
    }
    public function form($instance){
        //ce apare aici este prezent in dashboard 
        
    }
    public function update($new_instance, $old_instance){
        
        
    }
}