<?php
   require_once __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <main>
       <ul>
          <?php 
             foreach($database as $dischi) { ?>
             <!-- card dischi -->
               <li >
                   <img src="<?php echo $dischi['poster']; ?>" alt="">
                   <!-- testo -->
                   <div>
                      <h3><?php echo $dischi['title']; ?></h3>
                      <div><?php echo $dischi['author']; ?></div> 
                      <div><?php echo $dischi['year']; ?></div>
                      <div><?php echo $dischi['genre']; ?></div>
                    </div>
                       
               </li>
          <?php } ?>
      </ul>
    </main>

    
</body>
</html>