<?php
    /**
     * Plugin Name: Calculadora Plugin
     * Description: Calculadora para calcular
     * Version: 1.0
     * Author: Bruno Jonsson
     * Author URI: www.brunojonsson.com
     
     */


//Função principal

    function fcalc ($atts) {
        
        return '<iframe src=" '.plugins_url().'/calculadora/index.php" frameborder="0" width="400px" height="500px"> </iframe>';
    } 
add_shortcode ('calculadora' ,'fcalc');



?>