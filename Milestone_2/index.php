<?php 
/* Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue. */
include __DIR__ . '/api/dischi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">

</head>
<body>
    

    <header>
        <div class="container">
           <div class="logo">
               <img class="nav-link" src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_Green-768x231.png" alt="#">
           </div>
        </div>
    </header>
    
    <main>
        <div class="container">
            <div class="row py-5">
                       
                <?php 
                    foreach ($dischi as $index => $value) {
                ?>

                <div class="col-2 p-2">
                    <div class="myCard p-3">
                        <img class="img-fluid mb-3" src="<?php echo $value['poster'] ?>" alt="#">
                        <h4>
                            <?php echo $value['title'] ?>
                        </h4>
                        <p class="m-0">
                            <?php echo $value['author'] ?>
                        </p>
                        <p class="m-0">
                            <?php echo $value['year'] ?>
                        </p>
                    </div>
                </div> 
                        <!-- / card -->
                <?php }; ?>
                    
            </div>
        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="./assets/script.js"></script>
</body>
</html>