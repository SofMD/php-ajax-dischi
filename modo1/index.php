<?php
   require_once __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
     <title>Document</title>
</head>
<body>
    <header class="p-3">
        <div>
            <img src="../logo.png" alt="logo spotify">
        </div>
    </header>
    
    <main>
       <ul class="dischiContainer d-flex flex-wrap justify-content-around">         
            <?php 
              foreach($database as $dischi) { ?>
                <!-- card dischi -->
                  <li class="cardDischi py-5 px-3">
                      <img src="<?php echo $dischi['poster']; ?>" alt="">
                      <!-- testo -->
                      <div>
                         <h3 class="my-4 fs-4 fw-bold"><?php echo $dischi['title']; ?></h3>
                         <div><?php echo $dischi['author']; ?></div> 
                         <div class=" my-2 fs-5 fw-bold"><?php echo $dischi['year']; ?></div>
                         <div><?php echo $dischi['genre']; ?></div>
                      </div>
                       
                    </li>
            <?php } ?>          
      </ul>
    </main>

    
</body>
</html>