<?php
$this->set( "title_for_layout", "Gestotux 0.5 - TRSistemas Informaticos Integrados" );
$this->Html->addCrumb( 'Inicio' );
?>
<h2>¿Que es Gestotux?</h2>
<p>
	Gestotux es un programa que le permite obtener todas las ventajas de un sistema simple y potente que se puede modificar para que se ajuste a sus preferencias.
</p>
<h3>¿En que consiste?</h3>
<p>El programa general contiene toda la estructura necesaria para gestionar un pequeño emprendimiento.</p>
<p>Incluye los siguientes componentes opcionales:</p>
<ul class="unstyled">
	<li><i class="icon-asterisk"></i>Generación de presupuestos</li>
	<li><i class="icon-asterisk"></i>Generación de facturas</li>
	<li><i class="icon-asterisk"></i>Generación y gestión de recibos.</li>
	<li><i class="icon-asterisk"></i>Administracion de base de datos de clientes.</li>
	<li><i class="icon-asterisk"></i>Gestión de compras y proveedores.</li>
	<li><i class="icon-asterisk"></i>Control básico de stock.</li>
	<li><i class="icon-asterisk"></i>Gestión de caja.</li>
	<li><i class="icon-asterisk"></i>Cuentas corrientes integradas.</li>
</ul>
<div class="well">
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
</div>