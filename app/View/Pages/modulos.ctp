<?php
$this->set( 'title_for_layout', "Modulos del programa" );
$this->Html->addCrumb( 'Gestotux', array( 'controller' => 'pages', 'action' => 'display', 'gestotux' ) );
$this->Html->addCrumb( 'Módulos disponibles' );
?>
<h3>Módulos Disponibles</h3>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
                <h3 class="panel-title">
                    <?php echo $this->Html->image( 'modulos/clientes.png', array( 'border' => 0, 'heigth' => 20, 'width' => 20 ) ); ?>&nbsp;Clientes
                </h3>
            </div>
            <div class="panel-body">
                  Este modulo le permite tener los datos de todos sus clientes de forma ordenada y concisa.<br />
                  Algunos de los datos que le permite mantener son:
                  <ul>
                          <li>Razon social y nombre y apellido diferentes</li>
                          <li>Numero de CUIT/CUIL, incluyendo verificación de que es correcto.</li>
                          <li>Paises y provincias precargados.</li>
                          <li>Dirección de email, telefono fijo, celular y fax.</li>
                          <li>Forma de facturación.</li>
                  </ul>
                  Este modulo está incluido automaticamente en el programa.
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php echo $this->Html->image( 'modulos/compras.png'      , array( 'border' => 0, 'heigth' => 20, 'width' => 20  ) ); ?>&nbsp;Compras
              </h3>
          </div>
          <div class="panel-body">
                Este modulo le permitir&aacute; registrar las compras que realice a cualquiera de sus proveedores.<br />
                Cada compra podr&aacute; ser realizada en efectivo ( la cual se descontar&aacute; de la caja ) o en otro, asi mismo, si usted posee el sistema de stock habilitado, la compra automaticamente generar&aacute; el control de stock corespondiente manteniendo el control sobre la cantidad de articulos que posee.<br />
                Al generar una compra, automaticamente se agregar&aacute;n los nuevos productos, de esta forma se evita tener que dar de alta los productos antes de registrarlos en las compras.<br />
                Este plugin se puede utilizar si est&acute; habilitado el plugin de productos, caja y proveedores.<br />
          </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php echo $this->Html->image( 'modulos/presupuesto.png', array( 'border' => 0, 'heigth' => 20, 'width' => 20  ) ); ?>&nbsp;Presupuestos
              </h3>
          </div>
          <div class="panel-body">            
                Este plugin le ayudar&aacute; en la confecci&oacute;n de los presupuestos. Permite no solo agregar los productos actuales que posee en stock, sino que le permitir&aacute; agregar items sencillos sin necesidad de que est&Eacute; dados de alta como productos.<br />
                Sobre cada uno de los items se puede definir un precio diferencia al original y se le da la posibilidad de agregar descuentos. &nbsp;Tampoco es necesario que la persona a la cual se le realiza el presupuesto est&eacute; registrada como cliente.<br />
                Los presupuestos pueden ser reimpresos, enviados como archivo pdf por email, modificados, etc.
          </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php echo $this->Html->image( 'modulos/ventas.jpg', array( 'border' => 0, 'heigth' => 20, 'width' => 20  ) ); ?>&nbsp;Facturas
              </h3>
          </div>
          <div class="panel-body">            
                Este plugin le ayudara en la confeccion d elas facturas que realice para sus clientes. Puede ingresar cualquiera de sus items actuales, agregar items aunque no estén dados de alta en su base de datos de productos y convertir cualquier presupuesto en una factura con solo 2 clicks!.<br />
                Puede agregar descuentos y generar facturas a cuenta corriente de su cliente si tiene habilitado el plugin de cuenta corriente.<br />
                Todas las facturas son impresas sobre los formularios preimpresos preparados por una imprenta habilitada.
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php echo $this->Html->image( 'modulos/recibo.png', array( 'border' => 0, 'heigth' => 20, 'width' => 20  ) ); ?>&nbsp;Recibos
              </h3>
          </div>
          <div class="panel-body">            
                Este plugin le permite generar comprobantes de pago para sus clientes.<br />
                De forma sencilla podrá ingresar cualquier texto dentro del recibo y colocar la cantidad pagada por el cliente. Ademas, si el cliente posee cuenta corriente, se le mostrará automaticamente la cantidad de saldo y el estado de saldo luego del pago del recibo.<br />
                El recibo puede ser impreso sobre una hoja preimpresa o hacer uno desde cero. Consultenos por las posibilidades.
          </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php echo $this->Html->image( 'modulos/ctacte.png', array( 'border' => 0, 'heigth' => 20, 'width' => 20  ) ); ?>&nbsp;Cuentas Corrientes
              </h3>
          </div>
          <div class="panel-body">            
                Este plugin le ayudará a mantener un historial de las operaciónes que se realizan en todo el programa en relación a un cliente en particular.<br />
                Al estar integrado con todos los demás plugins puede ver las operaciónes de todos estos y llevar el control detallado de sus movimientos.<br />
                Podrá imprimir los resumenes de cuenta o enviarlos por email mediante archivos de formato PDF.
          </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php echo $this->Html->image( 'modulos/caja.png'   , array( 'border' => 0, 'heigth' => 20, 'width' => 20  ) ); ?>&nbsp;Control de caja
              </h3>
          </div>
          <div class="panel-body">            
                El m&oacute;dulo de caja le permite realizar el seguimiento y control de m&uacute;ltiples cajas en su sistema, ya que cada compra realizada en efectivo, recibo ingresado como pagado en efectivo, gasto realizado en efectivo y factura pagada en efectivo quedar&aacute;n registradas automaticamente en la caja.<br />
                Adem&aacute;s podr&aacute; realizar transferencias entre cajas, ingresos y egresos de efectivo manualmente y obtener el listado de caja entre cada uno de los cierres, permitiendole un control mas eficiente de esta.<br />
          </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php echo $this->Html->image( 'modulos/productos.png', array( 'border' => 0, 'heigth' => 20, 'width' => 20  ) ); ?>&nbsp;Productos
              </h3>
          </div>
          <div class="panel-body">            
                El m&oacute;dulo de productos le permite registrar, mantener stock y generar listados de venta y stock de los productos que posee para la venta.<br />
                Podr&aacute; tener los datos de cada producto como marca, modelo y categor&iacute;a de manera opcional habilitados para todos sus productos permitiendole una mejor clasificaci&oacute;n de estos.<br />
          </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php echo $this->Html->image( 'modulos/proveedores.jpg', array( 'border' => 0, 'heigth' => 20, 'width' => 20  ) ); ?>&nbsp;Proveedores
              </h3>
          </div>
          <div class="panel-body">            
                Este m&oacute; le permite mantener una lista simple de sus proveedores con sus datos de contacto.
          </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php echo $this->Html->image( 'modulos/servicios.png', array( 'border' => 0, 'heigth' => 20, 'width' => 20  ) ); ?>&nbsp;Servicio de suscripci&oacute;n
              </h3>
          </div>
          <div class="panel-body">            
                Este plugin le permite realizar la facturaci&oacute;n y control de un servicio de suscripci&oacute;n, donde usted cobra una cierta cantidad por un servicio todos los meses.
                <br />
                <b>Caracter&iacute;sticas</b>
                <ul>
                        <li><b>M&uacute;ltiples periodos de cobro:</b> Mensual, bimensual, trimestral, semanal, anual, etc.</li>
                        <li><b>Recargos:</b> &iquest;clientes que pagan atrasados? No hay problema, puede definir el recargo a aplicar seg&uacute;n la cantidad de d&iacute;as en que se atraso el pago.</li>
                        <li><b>Control:</b> Le permite mantener un control de quien pag&oacute; y quien no para cada servicio de suscipci&oacute;n que tenga.</li>
                </ul>
                Cada cobro se realizar&aacute; emitiendo las facturas correspondientes para cada cliente por cada servicio y automaticamente quedar&aacute;n registradas en la cuenta corriente del cliente. Adem&aacute;s le permitir&aacute; realizar la emisi&oacute;n de todos los comprabantes juntos.
            </div>
        </div>
    </div>
</div>