<?php 
/*
    Plugin Name: Kill WordPress Plugin
    Plugin URI: http://swissacademy.eu
    Author: Killer Bunny
    Auhor URI: http://swissacademy.eu
    Description: Ana are mere si pere 
*/


add_shortcode('afisare_text','kwp_afisare_text');
add_shortcode('placeholdit','kwp_randombanner');
add_filter('the_title','kwp_change_title');
add_filter('the_content','kwp_add_like');
add_action('admin_notices','kwp_notification');


function kwp_afisare_text(){
    echo 'Ana are mere';
}
function kwp_change_title($titlu){
 echo $titlu.' :)';   
}
function kwp_add_like($content){
    echo do_shortcode($content);
    echo '<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FSwissWebAcademy%2F%3Ffref%3Dts&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>';
}
function kwp_notification(){
    echo '<div class="notice notice-info">';
    echo '<p>Please dont pirate my plugin</p>';
    echo '<p>Please donate!</p>';
    echo '</div>';
}

function kwp_randombanner(){
    $images = array(
        'http://placehold.it/350x150/FF0000',
        'http://placehold.it/350x150/00FF00',
        'http://placehold.it/350x150/0000FF',   
        'http://placehold.it/350x150/0000FF'    
    );
    echo '<img src="'.$images[rand(0,2)].'">';
    
}


