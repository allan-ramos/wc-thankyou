<?php

add_action( 'woocommerce_thankyou', 'custom_thankyou', 4 );
 
function custom_thankyou() {
 
 	echo '<h2>¡<b>Gracias!</b></h2>
<h4><b>Tu pedido ha sido procesado.</b></h4>
<h4><b>Recibirás una llamada por parte de nuestros agentes. </b></4>
<style>
.entry-content p {
    -ms-word-wrap: break-word;
    word-wrap: break-word;
    hyphens: none;
    display: none !important;
}

.woocommerce ul.order_details {
    margin: 0 0 3em;
    list-style: none;
    display: none !important;
}</style>';
 
}


?>
