<style>
.texto-carrusel {
    text-align: center;
    text-transform: uppercase;
    background: lightblue;
    padding: 20px;
    color: white;
    border-radius: 0 0 9px 9px;
}

.texto-carrusel:hover {
    text-decoration: none;
}

.carousel-inner>.item>img, .carousel-inner>.item>a>img {
    border-radius: 9px 9px 0 0;
}
</style>

<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="active item">
            <?php echo $this->Html->link(
                    $this->Html->image( 'galeria/pantalla_inicial.png' ).
                    $this->Html->tag( 'div', 'Pantalla de bienvenida', array( 'class' => 'texto-carrusel' ) ),
                    '#',
                    array( 'escape' => false ) ); ?>
        </div>
        <div class="active item">
            <?php echo $this->Html->link(
                    $this->Html->image( 'galeria/image67.png' ).
                    $this->Html->tag( 'div', 'Listado de clientes', array( 'class' => 'texto-carrusel' ) ),
                    '#',
                    array( 'escape' => false ) ); ?>
        </div>
        <div class="active item">
            <?php echo $this->Html->link(
                    $this->Html->image( 'galeria/image70.png' ).
                    $this->Html->tag( 'div', 'Resumen de cuenta corriente', array( 'class' => 'texto-carrusel' ) ),
                    '#',
                    array( 'escape' => false ) ); ?>
        </div>
        <div class="active item">
            <?php echo $this->Html->link(
                    $this->Html->image( 'galeria/image86.png' ).
                    $this->Html->tag( 'div', 'Lista de recibos', array( 'class' => 'texto-carrusel' ) ),
                    '#',
                    array( 'escape' => false ) ); ?>
        </div>
        <div class="active item">
            <?php echo $this->Html->link(
                    $this->Html->image( 'galeria/image62.png' ).
                    $this->Html->tag( 'div', 'Creación de recibo', array( 'class' => 'texto-carrusel' ) ),
                    '#',
                    array( 'escape' => false ) ); ?>
        </div>
        <div class="active item">
            <?php echo $this->Html->link(
                    $this->Html->image( 'galeria/image19.png' ).
                    $this->Html->tag( 'div', 'Creación de factura', array( 'class' => 'texto-carrusel' ) ),
                    '#',
                    array( 'escape' => false ) ); ?>
        </div>
        <div class="active item">
            <?php echo $this->Html->link(
                    $this->Html->image( 'galeria/image15.png' ).
                    $this->Html->tag( 'div', 'Creación de presupuesto', array( 'class' => 'texto-carrusel' ) ),
                    '#',
                    array( 'escape' => false ) ); ?>
        </div>
        <div class="active item">
            <?php echo $this->Html->link(
                    $this->Html->image( 'galeria/image33.png' ).
                    $this->Html->tag( 'div', 'Datos de clientes', array( 'class' => 'texto-carrusel' ) ),
                    '#',
                    array( 'escape' => false ) ); ?>
        </div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
<?php $this->Js->buffer( "$('#myCarousel').carousel()" );
