<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <div class="header">
        
            <select @change="filterCars()" name="bodycar" id="bodycar" v-model="bodyFilter">
                <option value="all">all</option>
                <option value="berlina">Berlina</option>
                <option value="suv">Suv compatto</option>
                <option value="carrello">Carrello da spesa</option>
            </select>
            <select @change="filterCars()" name="novicecar" id="novicecar" v-model="noviceFilter">
                <option value="all">all</option>
                <option value="no">No</option>
                <option value="si">Si</option>
            </select>
        
        </div>
        <div class="container-car">
            <div v-for="car in filteredCars" class="card">
                <img class="img-car" :src="car.immagine" alt="">
                <h4> {{car.marca}} </h4>
                <h4> {{car.modello}} </h4>
                <h4> {{car.prezzo}} </h4>
                <h4> {{car.carrozzeria}} </h4>
                <h4> {{car.neopatentato}} </h4>
                <!-- <ul v-html="car.accessori"></ul> -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>