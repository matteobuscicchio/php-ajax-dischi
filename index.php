<?php
    // Stampare a schermo una decina di dischi musicali (vedi screenshot).
    // Utilizzare:
    // Html, Sass, JS, VueJS, PHP
    // Prima Milestone:
    // Stampiamo i dischi solo con l’utilizzo di PHP, 
    // che stampa direttamente i dischi in pagina:
    // al caricamento della pagina ci saranno tutti i dischi.
    // Seconda Milestone:
    // Attraverso l’utilizzo di AJAX: al caricamento della pagina 
    // ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso VueJS.
    // Bonus:
    // Attraverso un’altra chiamata ajax, filtrare gli album per artista
    // Lo screenshot si trova nelle slide.


    // da qui prendo le info per creare il  database
    // 'https://flynn.boolean.careers/exercises/api/array/music'
    include "./php/database.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-ajax-dischi</title>

        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        
        <!-- ajax -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
        <!-- Vue-JS -->
		<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" href="./dist/css/style.css">
    </head>
    <body>
        <div id="dischi">

            <header>
                <div class="container">
                    <img src="./dist/img/logo.png" alt="logo"/>
                </div>
            </header>

            <main>

                <div class="container">

                    <div class="select">

                        <select>
                            <option>pop</option>
                            <option>rock</option>
                            <option>metal</option>
                            <option>jazz</option>
                        </select>
                    </div>
                </div>

                <!-- metodo: PHP -->
                <div class="cds-container container">

                    <!-- cd -->
                    <?php foreach ($database as $card) { ?>
                        <div class="cd">
                            <img src="<?= $card['poster'];?>">
                            <h3> <?= $card['title'];?> </h3>
                            <span class="author"> <?= $card['author'];?> </span>
                            <span class="year"> <?= $card['year'];?> </span>
                            <span class="genre"> <?= $card['genre'];?> </span>
                        </div>
                    <?php };?>
                </div>

                <div class="cds-container container">

                    <div class="cd" v-for="disk in mDisks">
                        <img :src="disk.poster" alt="">
                        <h3>{{disk.title}}</h3>
                        <span class="author">{{disk.author}}</span>
                        <span class="year">{{disk.year}}</span>
                        <span class="genere">{{disk.genre}}</span>
                    </div>
                </div>
            </main>
        </div>

        <!-- JS -->
        <script src="dist/js/main.js"></script>
    </body>
</html>