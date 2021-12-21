<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>
    <div id="app">
        <!-- header -->
        <!-- main -->
        <main>
            <ul>
                <li v-for="(el, index) in dischi" :key="`el-id-${index}`">
                    {{el.title}}
                </li>
            </ul>
        </main>

    </div>


    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./script.js"></script>
    
</body>
</html>