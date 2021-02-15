<!DOCTYPE html>
<html>
    <head>
      <title> Website </title>
    </head>
    <body>
        <pre>
            <?php
                $pdo = new PDO('sqlite:master.db');
                
                $state = $pdo->query("SELECT * FROM ability_list");
                    
                $rows = $state->fetchAll(PDO::FETCH_ASSOC);

                var_dump($rows);
            ?>
        </pre>
    </body>
</html>
