<?php
if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
$this->set( "title_for_layout", "Gestotux 0.5 - TRSistemas Informaticos Integrados" );
?>
<div>
 <h2>Bienvenido.</h2>
</div>
<h2>¿Que es Gestotux?</h2>
<p>
	Gestotux es un programa que le permite obtener todas las ventajas de un sistema simple y potente que se puede modificar para que se ajuste a sus preferencias.
</p>
<h3>¿En que consiste?</h3>
<p>El programa general contiene toda la estructura necesaria para gestionar un pequeño emprendimiento.</p>
<p>Incluye los siguientes componentes opcionales:</p>
<ul>
	<li>Generación de presupuestos</li>
	<li>Generación de facturas</li>
	<li>Generación y gestión de recibos.</li>
	<li>Administracion de base de datos de clientes.</li>
	<li>Gestión de compras y proveedores.</li>
	<li>Control básico de stock.</li>
	<li>Gestión de caja.</li>
	<li>Cuentas corrientes integradas.</li>
</ul>
<br />
<h2>Noticias</h2>
<?php
$noticias = $this->requestAction( array( 'controller' => 'noticias', 'action' => 'listado' ) );
if( count( $noticias ) > 0 ) {
	foreach( $noticias as $noticia ) {
		echo "<h4>".$this->Html->link( h( $noticia['Noticia']['titulo'] ), array( 'controller' => 'noticias', 'action' => 'view', $noticia['Noticia']['id_noticia'] ) )."</h4>";
		echo "<div>".$noticia['Noticia']['contenido']."</div>";
		echo "<small>Publicado: ".date( 'd/m/Y H:i', strtotime( $noticia['Noticia']['fecha'] ) )."</small>";
		echo "<br />";
	}
} else {
	echo "<small> No hay noticias aun </small>";
}
?>