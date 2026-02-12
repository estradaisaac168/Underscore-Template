<?php

/**
*   SCRIPT PARA MODIFICAR LOS COMPONENTES DEL CARD PRODUCTO
*/

//Agrego un div apertura antes del enlace que cubre la imagen
add_action('woocommerce_before_shop_loop_item', function(){
    echo '<div class="item-product-content__image">';
},9);

add_action('woocommerce_after_shop_loop_item', function(){
    echo '</div>';
},6);


//Agrego un div apertura antes del titulo

add_action('woocommerce_after_shop_loop_item', function(){
    echo '<div class="item-product-content__description">';
},9);

add_action('woocommerce_after_shop_loop_item', function(){
    echo '</div>';
},20);


//Remuevo estos componentes del primer div
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);


//Agrego estos componentes en el segundo div
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_after_shop_loop_item', function (){
    global $product;
    echo wpautop( $product->get_short_description() );
},11);
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_rating', 12);
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 13);
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 14);




