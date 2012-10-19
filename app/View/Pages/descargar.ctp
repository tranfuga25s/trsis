<?php $this->set( 'title_for_layout', "Descargar Gestotux" ); ?>
<script>
$( function() { 
	$("#acordeon").accordion();
	$("a", "#windows").button();
	$("a", "#linux").button();
	$("a", "#mac").button();
 });
</script>
Por favor, selecci&oacute;ne su sistema operativo de preferencia:<br />
<div id="acordeon">
	<h3><a href="#">Windows</a></h3>
	<div id="windows">
		<h4>Ultima Versi&oacute;n Compilada</h4>
		<b>Versi&oacute;n 0.5 Release Candidate 5</b><br />
		Compilada para sistemas Microsoft Windows de 32 bits aunque tambi&eacute;n funcionar&aacute; sobre plataformas de 64 bits.<br />
		Posee soporte para ambos motores de base de datos ( SQLite - MySQL ).<br />
		<br />
		Versi&oacute;n probada sobre Windows XP 32 bits.<br />
		<?php echo $this->Html->link( 'Descargar Gestotux 0.5 RC 5', 'http://gestotux.googlecode.com/files/Gestotux-0.5-RC5-Win.zip' ); ?><br /><br />
		<br />
		<h4>Instrucciones de uso:</h4>
		<small>Para utiliza la demostraci&oacute;n aqu&iacute; brindada, primero descargue el archivo referenciado m&aacute;s arriba.<br />
			A continuaci&oacute;n descomprima el archivo con su programa de preferencia en alguna ubicaci&oacute;n preferida como su escritorio o sus documentos.<br />
			Esto generar&aacute; una carpeta con el nombre del programa. Dentro de esta, ejecute el archivo <i>gestotux.exe</i> haciendo doble click sobre el para iniciar el programa.<br />
		</small>
	</div>
	<h3><a href="#">Linux</a></h3>
	<div id="linux">
		Todav&iacute;a no existe ninguna versión precompilada para Linux.<br />
		<?php echo $this->Html->link( 'Descargar código fuente',  '#cf' ); ?><br />
	</div>
	<h3><a href="#">Mac</a></h3>
	<div id="mac">
		Todav&iacute;a no existe ninguna versión precompilada para Linux.<br />
		<?php echo $this->Html->link( 'Descargar código fuente',   '#cf'  ); ?><br />
	</div>
	<h3><a href="#cf">C&oacute;digo fuente</a></h3>
	<div>
		Si lo desea, puede bajar el codigo fuente del programa y compilarlo usted mismo. Para esto se le brinda acceso al repositorio SVN del programa gratuitamente.
		<h4>Instrucciones</h4>
		Para descargar el repositorio con la &uacute;ltima versi&oacute;n de desarrollo utilice el siguiente comando:<br />
		<br />
		<span style=" font-family: system;">svn checkout http://gestotux.googlecode.com/svn/trunk/trunk/ gestotux-read-only</span><br />
		<br />
		Consulte la ayuda de su sistema operativo para obtener el repositorio y construirlo.<br />
	</div>
</div>
<small>La ultima versi&oacute;n compilada puede no ser la ultima declarada como estable.</small><br />
Actualmente la &uacute;ltima versi&oacute;n declarada como estable es <b>Release Candidate 6.</b>
<br />