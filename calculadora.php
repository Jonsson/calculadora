<?php
    /**
     * Plugin Name: Calculadora Plugin
     * Description: Calculadora para calcular
     * Version: 2.0
     * Author: Bruno Jonsson e Bianca Mesquita
     * Author URI: www.brunobianca.com
     
     */

function calc ($atts) 
{
    return '<iframe src="'.plugins_url().'/calculadora/index.php" frameborder="0" width="600" height="350" style="border:0">';   //frameborder='0'  allowfullscreen></iframe>";
}

add_shortcode('calculadora', 'calc');