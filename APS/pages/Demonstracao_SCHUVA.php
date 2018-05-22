<?php include("controle.php"); ?>
<h2>SENSOR DE CHUVA</h2>
<h3>Monitoramento de Variações Climáticas</h3>
<br>
<div class="col-md-12">
        <div class="col-md-12 panel panel-default">
                <div class="panel-heading" style="text-align: center;">Variação Climática</div>
                <div class="panel-body">
                	 <p style="text-align: center; font-size: 35px;"><?php echo $s1->getVarClimatica(); ?></p>
                </div>
        </div>
</div>