<?php
$this->set( 'title_for_layout', "Descargar Gestotux" );
$this->Html->addCrumb( 'Gestotux', array( 'controller' => 'pages', 'action' => 'display', 'gestotux' ) );
$this->Html->addCrumb( 'Descargar' );
?>

<h3>Sección de descargas</h3>
Por favor, selecci&oacute;ne su sistema operativo de preferencia:<br />

<div class="row-fluid">

    <div class="span5 well">
        <h4 class="text-center">Windows</h4>
        <h4>Ultima Versi&oacute;n Compilada</h4>
        <b>Versi&oacute;n 0.5 Release Candidate 20</b><br />
        Compilada para sistemas Microsoft Windows de 32 bits aunque tambi&eacute;n funcionar&aacute; sobre plataformas de 64 bits.<br />
        Posee soporte para ambos motores de base de datos ( SQLite - MySQL ).<br />
        <br />
        Versi&oacute;n probada sobre Windows XP 32 bits.<br />
        <?php echo $this->Html->link( 'Descargar Gestotux 0.5 RC 20', 'https://gestotux.googlecode.com/files/Gestotux-0.5-RC20.zip', array( 'class' => 'btn btn-success') ); ?>
        <br />
        <h6>Instrucciones de uso:</h6>
        <small>Para utiliza la demostraci&oacute;n aqu&iacute; brindada, primero descargue el archivo referenciado m&aacute;s arriba.<br />
            A continuaci&oacute;n descomprima el archivo con su programa de preferencia en alguna ubicaci&oacute;n preferida. como su escritorio o sus documentos.<br />
            Esto generar&aacute; una carpeta con el nombre del programa. Dentro de esta, ejecute el archivo <i>gestotux.exe</i> haciendo doble click sobre el para iniciar el programa.<br />
        </small>
    </div>

    <div class="span5 well">
        <h4 class="text-center">Linux</h4>
        Todav&iacute;a no existe ninguna versión precompilada para Linux.<br />
        <?php echo $this->Html->link( 'Descargar código fuente',  '#cf' ); ?><br />
    </div>

    <div class="span5 well">
        <h4 class="text-center">Mac</h4>
        Todav&iacute;a no existe ninguna versión precompilada para iOS.<br />
        <?php echo $this->Html->link( 'Descargar código fuente',  '#cf' ); ?><br />
    </div>

</div>

<div class="row-fluid">
    <div class="span12 well">
        <h4 class="text-center">Código fuente</h4>
        Si lo desea, puede bajar el código fuente del programa y compilarlo usted mismo. Para esto se le brinda acceso al repositorio Git del programa gratuitamente.
        <h6>Instrucciones</h6>
        Para descargar el repositorio con la &uacute;ltima versi&oacute;n de desarrollo utilice el siguiente comando:<br />
        <br />
        <span style=" font-family: system;">git clone https://github.com/tranfuga25s/gestotux.git</span><br />
        <br />
        Consulte la ayuda de su sistema operativo para obtener el repositorio y construirlo.<br />
    </div>
</div>

<div class="alert alert-info">
    <small>La ultima versi&oacute;n compilada puede no ser la ultima declarada como estable.</small><br />
    Actualmente la &uacute;ltima versi&oacute;n declarada como estable es <b>Release Candidate 20.</b>
</div>
