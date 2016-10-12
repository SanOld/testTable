
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test</title>
    </head>
    <body>
        
        <style type="text/css">
            .tg  {border-collapse:collapse;border-spacing:0;width:<?php echo $model->tableWidth."px"; ?>;height:<?php echo $model->tableHeight."px"?>;}
            td{border-spacing:0;font-family:Arial, sans-serif;font-size:14px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}   
            td{width:<?php echo $model->tdWidth."px"; ?>;height:<?php echo $model->tdHeight."px"?>;}   
        </style>
 
        <table class="tg">
            <?php
                echo  $model->tableContent();
            ?>            
        </table>
        
    </body>
</html>