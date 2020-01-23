<?php
    include 'dischi.php';
?><!doctype html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="main.js" charset="utf-8"></script>
<link rel="stylesheet" href="style.css">
    <title>js-jq-ajax-api-musica</title>
</head>
<body>
    <header>

    </header>
    <main>
        <select name="" id="scelta-genere">
            <option value="">Scegli un genere</option>
            <option value="pop">Pop</option>
            <option value="Rock">Rock</option>
            <option value="jazz">Jazz</option>
            <option value="metal">Metal</option>
        </select>
        <div id="dischi" class="flex-container">
            <?php
            foreach ($jsonDecoded as $value) {
                   ?> <div class="card-disco" data-genere="<?php echo $value['genre']; ?>">
                    <img src="<?php echo $value['poster']; ?>" alt= "<?php echo $value['title']; ?>" class="copertina">
                    <p class="titolo"><?php echo $value['title']; ?></p>
                    <small class="artista"><?php echo $value['author']; ?></small>
                    <small class="anno"><?php echo $value['year']; ?></small>
                    </div>
                
           <?php }?>
         
            <?php?>
        </div>
    </main>
    
</body>
</html>
