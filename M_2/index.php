<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <!-- STYLE -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>

<body>

    <div id="app">

        <header>
            <div class="container">
                <img src="./img/logo.png" alt="logo">
            </div>
        </header>

        <main>
            <div class="albums container">

                <div class="album" v-for="data in database">
                    <img :src="data.poster" alt="album">
                    <h4>{{ data.title }}</h4>
                    <h5>{{ data.author }}</h5>
                    <h4>{{ data.year }}</h4>
                    <h5>{{ data.genre }}</h5>
                </div>

            </div>
        </main>

    </div>
    
    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>