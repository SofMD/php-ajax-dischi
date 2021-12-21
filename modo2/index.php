<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>
    <div id="app">
        <!-- header -->
        <header class="p-3">
            <div>
               <img src="../logo.png" alt="logo spotify">
            </div>
         </header>
    
        <!-- main -->
        <main>
            <ul class="dischiContainer d-flex flex-wrap justify-content-around">
                <li v-for="(el, index) in dischi" :key="`el-id-${index}`" class="cardDischi py-5 px-3">
                      <img :src="el.poster" alt="">
                      <!-- testo -->
                      <div>
                         <h3 class="my-4 fs-4 fw-bold">{{el.title}}</h3>
                         <div>{{el.author}}</div> 
                         <div class=" my-2 fs-5 fw-bold">{{el.year}}</div>
                         <div>{{el.genre}}</div>
                      </div>
                </li>
            </ul>
        </main>

    </div>


    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./script.js"></script>
    
</body>
</html>