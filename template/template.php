


    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>Bibliothèque</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
      </head>
      <body>
      <h1>Bibliothèque</h1>
        <nav class="navtop">
          <div>
            
            <button type="button" class="btn btn-outline-primary btn-sm"><a href="index.php">Home</a></button>
            <button type="button" class="btn btn-outline-primary btn-sm"><a href="rayon.php">Rayon</a></button>
            <button type="button" class="btn btn-outline-primary btn-sm"><a href="catalogue.php">Catalogue</a></button>
            <button type="button" class="btn btn-outline-primary btn-sm"><a href="empreint.php">Empreint</a></button>
            <button type="button" class="btn btn-outline-primary btn-sm"><a href="adherent.php">Adherents</a></button>
            <a href="inscription.php" class="create-contact">Créer un membre</a>
            
          </div>
        </nav>


        <div>
        
        <?= $content ; ?>
        
        </div>

          <footer>
          <div class="container">
             <p> by HelloWorld!</p>
          </div>
           
          </footer>
        </body>
    </html>
