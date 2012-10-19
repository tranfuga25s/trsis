<?php $this->set( 'title_for_layout', "Servicios de backup" ); ?>	
<!-- Pagina para dar de alta el usuario en el sistema de backup -->
<script language="JavaScript">
	$( function() {
		$("#ofertas").accordion( { autoHeight: false, navigation: true } );
		$("a", "#ofertas" ).button();
	});
</script>
<h1> Sistema de backup On-Line</h1>
<div id="ofertas">
	<h3><a href="#">Caracteristicas del servicio b&aacute;sico</a></h3>
	<div>
		<ul>
			<li><b>Almacenamiento disponible:</b> 1 Gigabytes.</li>
			<li><b>Cantidad de programas distintos:</b> 1</li>
			<li><b>Cantidad de backups historicos:</b> Hasta llenar capacidad almacenamiento o 100 historicos.</li>
			<li><b>Restauracion rapida:</b> Solo base de datos, no preferencias.</li>
		</ul>
		<table>
	     <tbody>
	      <tr>
	      	<td colspan="7" class="ui-widget-header ui-corner-all"><center>Ofertas!</center></td>
	      </tr>
	      <tr>
	       <td class="ui-state-active ui-corner-all"><center><b>1 Mes</b></center></td>
	       <td></td>
	       <td class="ui-state-active ui-corner-all"><center><b>3 Meses</b></center></td>
	       <td></td>
	       <td class="ui-state-active ui-corner-all"><center><b>6 Meses</b></center></td>
	       <td></td></b>
	       <td class="ui-state-active ui-corner-all"><center><b>1 Año</b></center></td>
	      </tr>
	      <tr>
	       <td class="ui-corner-all ui-widget-content ui-helper-reset">
	       	Normal: <b>$ 25</b><br />
	       	Descuento: 0%<br />
	       	Precio Final: <b>$25</b>
	       </td>
	       <td></td>
	       <td class="ui-corner-all ui-widget-content ui-helper-reset">
	       	Normal: <b>$75</b><br />
	       	Descuento:  5%<br />
	       	Precio Final: <b>$ 71,25</b>
	       </td>
	       <td></td>
	       <td class="ui-corner-all ui-widget-content ui-helper-reset">
	       	Normal: <b>$150</b><br />
	       	Descuento: 10%<br />
	       	Precio Final: <b>$ 135,00</b>
	       </td>
	       <td></td>
	       <td class="ui-corner-all ui-widget-content ui-helper-reset">
	       	Normal: <b>$250</b><br />
	       	Descuento: 15%<br />
	       	Precio Final: <b>$ 212,50</b>
	       	
	       </td>
	      </tr>
	      <tr>
	       <td><center><b><?php echo $this->Html->link( "Contratar!", array( 'controller' => 'servicios', 'action' => 'alta', 'servicio' => 'backup', 'clase' => 'basico', 'oferta' => 'normal' ) ); ?></b></center></td>
	       <td></td>
	       <td><center><b><?php echo $this->Html->link( "Contratar!", array( 'controller' => 'servicios', 'action' => 'alta', 'servicio' => 'backup', 'clase' => 'basico', 'oferta' => '5'  ) ); ?></b></center></td>
	       <td></td>
	       <td><center><b><?php echo $this->Html->link( "Contratar!", array( 'controller' => 'servicios', 'action' => 'alta', 'servicio' => 'backup', 'clase' => 'basico', 'oferta' => '10'  ) ); ?></b></center></td>
	       <td></td></b>
	       <td><center><b><?php echo $this->Html->link( "Contratar!", array( 'controller' => 'servicios', 'action' => 'alta', 'servicio' => 'backup', 'clase' => 'basico', 'oferta' => '15'  ) ); ?></b></center></td>
	      </tr>
	     </tbody>
	    </table>
	</div>
	<h3><a href="#">Caracteristicas del servicio extra</a></h3>
	<div>
		<ul>
			<li><b>Almacenamiento disponible:</b> 4 Gigabytes.</li>
			<li><b>Cantidad de programas distintos:</b> ilimitados</li>
			<li><b>Cantidad de backups historicos:</b> Hasta llenar capacidad almacenamiento.</li>
			<li><b>Restauracion rapida:</b> Base de datos y preferencias.</li>
		</ul>
		<table>
	     <tbody>
	      <tr>
	      	<td colspan="7" class="ui-widget-header ui-corner-all"><center>Ofertas!</center></td>
	      </tr>
	      <tr>
	       <td class="ui-state-active ui-corner-all"><b>1 Mes</b></td>
	       <td></td>
	       <td class="ui-state-active ui-corner-all"><b>3 Meses</b></td>
	       <td></td>
	       <td class="ui-state-active ui-corner-all"><b>6 Meses</b></td>
	       <td></td>
	       <td class="ui-state-active ui-corner-all"><b>1 Año</b></td>
	      </tr>
	      <tr>
	       <td class="ui-corner-all ui-widget-content ui-helper-reset">
	       	Normal: <b>$ 50</b><br />
	       	Descuento: 0%<br />
	       	Precio Final: <b>$50</b>
	       	<?php echo $this->Html->link( "Contratar!", array( 'controller' => 'servicios', 'action' => 'alta', 'servicio' => 'backup', 'clase' => 'extra', 'oferta' => 'normal'  ) ); ?>
	       </td>
	       <td></td>
	       <td class="ui-corner-all ui-widget-content ui-helper-reset">
	       	Normal: <b>$150</b><br />
	       	Descuento:  5%<br />
	       	Precio Final: <b>$ 143,50</b>
	       	<?php echo $this->Html->link( "Contratar!", array( 'controller' => 'servicios', 'action' => 'alta', 'servicio' => 'backup', 'clase' => 'extra', 'oferta' => '5'  ) ); ?>
	       </td>
	       <td></td>
	       <td class="ui-corner-all ui-widget-content ui-helper-reset">
	       	Normal: <b>$300</b><br />
	       	Descuento: 10%<br />
	       	Precio Final: <b>$ 270,00</b>
	       	<?php echo $this->Html->link( "Contratar!", array( 'controller' => 'servicios', 'action' => 'alta', 'servicio' => 'backup', 'clase' => 'extra', 'oferta' => '10'  ) ); ?>
	       </td>
	       <td></td>
	       <td class="ui-corner-all ui-widget-content ui-helper-reset">
	       	Normal: <b>$600</b><br />
	       	Descuento: 15%<br />
	       	Precio Final: <b>$ 510,00</b>
	       	<?php echo $this->Html->link( "Contratar!", array( 'controller' => 'servicios', 'action' => 'alta', 'servicio' => 'backup', 'clase' => 'extra', 'oferta' => '15'  ) ); ?>
	       </td>
	      </tr>
	     </tbody>
	    </table>
	</div>
</div>