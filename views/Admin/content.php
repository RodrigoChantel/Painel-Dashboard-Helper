<div class="col-md-10 m-0 p-0">
<div class="row bg-white p-0 m-0 overflow-auto" style="height: 600px">
    <div class="col d-flex justify-content-center p-0 m-0">
        <!--<iframe class="w-100" src="https://docs.google.com/document/d/e/2PACX-1vT4CW3lEeOGU9wdDvqs29bBhbv9aErqjZ3toFEMoQsf7TQv3MzJ5aDxNpiSqRO7AvzsMgqB3uS9aNX0/pub?embedded=true"></iframe>-->
        <?php 
            $name = "Rodrigo";
            $year = date('y'); $month = date('m'); $day = date('d');
            $date = $day . "/" . $month . "/" . $year;
            $dano_fisico = 10;
            $defesa_fisica = 12;
            $dano_magico = 3;
            $defesa_magica = 5;
            $player = array($name, $dano_fisico, $defesa_fisica, $dano_magico, $defesa_magica);

            $poder_fisico = ($dano_fisico + $defesa_fisica)/2;
            $poder_magico = ($dano_magico + $defesa_magica/2);
        ?>
        <div class="row-cols-1 h-25">
            <div class="col-md-12">
                <table class="table table-sm mx-5">
                <tr class="m-5 p-5">
                    <th>Nome</th>
                    <th>Poder Físico</th>
                    <th>Poder Mágico</th>
                </tr>
                <tr>
                    <td><?php echo $name;?></td>
                    <td><?php echo $poder_fisico;?></td>
                    <td><?php echo $poder_magico;?></td>
                </tr>
                </table>
                <div class="d-flex flex-wrap bg-dark" style="width: 300px; height: 500px;">
                    <div class="bg-secondary" style="width: 150px; height: 300px; border-bottom-right-radius: 50px;">

                    </div>
                    <div class="bg-secondary" style="width: 150px; height: 300px; border-bottom-left-radius: 50px;">
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="row w-100 p-0 m-0">
    
    <?php include_once('http://localhost/helper/views/admin/includes/footer.php'); ?>
    
</div>
</div>