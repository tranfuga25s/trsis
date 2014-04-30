<?php
$this->set( 'title_for_layout', 'Nuestras noticias' );
$this->Html->addCrumb( 'Noticias' );
?>
<div class="row-fluid">
    <div class="span12">
    	<h2>Nuestras noticias</h2>
    <?php if( count( $noticias ) > 0 ) : ?>
    	<?php foreach ($noticias as $noticia): ?>
        <div class="">
            <h2><?php echo h($noticia['Noticia']['titulo']); ?></h2>
            <p><?php echo $this->Text->truncate( $noticia['Noticia']['contenido'] ); ?></p>
            <p>Creado el: <?php echo $this->Time->nice( $noticia['Noticia']['fecha'] ); ?></p>
            <p class="pull-left">
                <?php echo $this->Html->link( 'Seguir leyendo', 
                                              array( 'controller' => 'noticias', 'action' => 'view', $noticia['Noticia']['id']), 
                                              array( 'class' => 'btn btn-primary' ) ); ?>
            </p>
        </div>
        <hr />
        <?php endforeach; ?>
    	</table>

    	<p><?php echo $this->Paginator->counter(array('format' => 'Página {:page} de {:pages}, mostrando {:current} de {:count}, desde {:start} hasta {:end}')); ?></p>
        

    	<div class="pagination">
    	    <ul>
    	        <li><?php 
                if( $this->Paginator->hasPrev() ) {
                    echo $this->Paginator->prev('< Anterior', array(), null, array('class' => 'prev disabled'));    
                }
                ?></li>
    	        <li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
                <li><?php if( $this->Paginator->hasNext() ) { echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')); } ?></li>
    	    </ul>
    	</div>
    <?php else : ?>
        <p>No tenemos ninguna noticia por ahora...</p>
    <?php endif; ?>
    </div>
</div>