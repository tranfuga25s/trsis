<!-- Panel de administración -->
<?php $this->set( 'title_for_layout', 'Panel de control' ); ?>
<h2>Datos</h2>
<div class="row-fluid">
   <div class="span2 btn">
   <?php echo $this->Html->link(
                $this->Html->image( 'assets/icons/16_48x48.png' )
                .'<br /><span>Usuarios</span>',
                array( 'controller' => 'usuarios', 'action' => 'index', 'plugin' => false ),
                array( 'escape' => false, 'title' => 'Usuarios' ) ); ?>
   </div>
   <div class="span2 btn">
   <?php echo $this->Html->link(
                $this->Html->image( 'assets/icons/16_48x48.png' )
                .'<br /><span>Clientes</span>',
                array( 'controller' => 'clientes', 'action' => 'index', 'plugin' => false ),
                array( 'escape' => false, 'title' => 'Clientes' ) ); ?>
   </div>
   <div class="span2 btn">
   <?php echo $this->Html->link(
                $this->Html->image( 'assets/icons/16_48x48.png' )
                .'<br /><span>Servicios</span>',
                array( 'controller' => 'servicios', 'action' => 'index', 'plugin' => false ),
                array( 'escape' => false, 'title' => 'Servicios' ) ); ?>
   </div>    
</div>
<?php if( CakePlugin::loaded( 'PreguntaFrecuente' ) ) : ?>
<h2>Ayuda</h2>
<div class="row-fluid">
   <div class="span2 btn"><?php echo $this->Html->link(
                $this->Html->image( 'assets/icons/5_48x48.png' )
                .'<br /><span>Ayuda</span>',
                array( 'plugin' => 'pregunta_frecuente', 'controller' => 'pregunta_frecuente', 'action' => 'index' ),
                array( 'escape' => false, 'title' => 'Preguntas Frecuentes' ) ); ?>
    </div>
</div>
<?php endif; ?>
