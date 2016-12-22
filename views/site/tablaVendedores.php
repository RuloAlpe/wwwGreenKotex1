<?php
foreach($vendedores as $vendedor){
	echo $vendedor->txt_nombre;
	echo " " . $vendedor->txt_apellido;
	echo "<br>";
}