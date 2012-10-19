<!-- Pagina para dar de alta el usuario en el sistema de estadisticas -->

<h1>Sistema de estadisticas</h1>
<div class="bordeada">
<h2>Caracteristicas del servicio</h2>
<ul>
	<li><b>Cantidad de programas:</b> 1</li>
	<li><b>Cantidad de datos historicos:</b> hasta 3 a&ntilde;os</li>
</ul>
<p><b>Precio:</b> $25 mensual.</p>
<?php echo $this->Html->link( "Contratar!", array( 'controller' => 'servicios', 'action' => 'alta', 'servicio' => 'estadisticas', 'clase' => 'basico' ) ); ?>
</div>
<br />
<div class="bordeada">
<h2>Caracteristicas del servicio ilimitado</h2>
<ul>
	<li><b>Cantidad de programas:</b> ilimitada</li>
	<li><b>Cantidad de datos historicos:</b> ilimitada</li>
</ul>
<p><b>Precio:</b> $40 mensual.</p>
<?php echo $this->Html->link( "Contratar!", array( 'controller' => 'servicios', 'action' => 'alta', 'servicio' => 'estadisticas', 'clase' => 'ilimitado' ) ); ?>
</div>