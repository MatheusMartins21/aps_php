<?php include("controle.php"); ?>
<h2>DHT11</h2>
<h3>Monitoramento de Temperatura e Umidade</h3>
<br>
<div class="col-md-12">
        <div class="col-md-6 panel panel-default">
                <div class="panel-heading" style="text-align: center;">Temperatura</div>
                <div class="panel-body">
                        <p style="text-align: center; font-size: 35px;"><?php echo $s1->getTemperatura(); ?></p>
                </div>
        </div>
        <div class="col-md-6 panel panel-default">
                <div class="panel-heading" style="text-align: center;">Umidade Relativa do Ar</div>
                <div class="panel-body">
                        <p style="text-align: center; font-size: 35px;"><?php echo $s1->getUmidade(); ?></p>
                </div>
        </div>
</div>
