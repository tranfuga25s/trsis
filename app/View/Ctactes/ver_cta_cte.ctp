<?php
$this->set( 'title_for_layout', 'Listado de cuenta corriente' );
$this->Html->addCrumb( 'Panel de cliente', array( 'controller' => 'clientes', 'action' => 'inicio'  ) );
$this->Html->addCrumb( 'Cuenta corriente' );
?>
<div class="row">

    <div class="col-sm-12">
        <h2>Mi cuenta corriente</h2>
        <div class="btn-group">
            <?php echo $this->Html->link( 'Volver', array( 'controller' => 'clientes', 'action' => 'inicio' ), array( 'class' => 'btn btn-warning') ); ?>
        </div>
        <p><b>Cantidad de items actualmente:</b>&nbsp;<span class="label label-inverse"><?php echo count( $lista ); ?></span></p>

        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <th>Fecha</th>
                <th>Descripcion</th>
                <th>Debe</th>
                <th>Haber</th>
                <th>Saldo</th>
                <?php foreach( $lista as $item ) : ?>
                <tr>
                    <td style="text-align: center;">
                        <?php echo $this->Time->i18nFormat( $item['ItemCtacte']['fecha'] ); ?>
                    </td>
                    <td width="60%"><?php echo $item['ItemCtacte']['descripcion']; ?></td>
                    <td style="text-align: right;"><?php echo $this->Number->currency( $item['ItemCtacte']['debe'], 'USD', array( 'negative' => '- ' )  ); ?></td>
                    <td style="text-align: right;"><?php echo $this->Number->currency( $item['ItemCtacte']['haber'], 'USD', array( 'negative' => '- ' )  ); ?></td>
                    <td style="text-align: right;"><?php $saldo -= $item['ItemCtacte']['debe']; $saldo += $item['ItemCtacte']['haber']; echo $this->Number->currency( $saldo, 'USD', array( 'negative' => '- ' ) ); ?></td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4">Saldo Final</td>
                    <td><?php echo $this->Number->currency( $saldo_actual, 'USD', array( 'negative' => '- ' )  ); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

