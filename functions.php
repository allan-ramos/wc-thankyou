<?php

add_action( 'woocommerce_thankyou', 'custom_thankyou', 4 );
 
function custom_thankyou() {
 
 	echo '<h2>¡<b>Gracias!</b></h2>
<h4><b>Tu pedido ha sido procesado.</b></h4>
<h4><b>Recibirás una llamada por parte de nuestros agentes. </b></4>';
 
}


?>
