<!DOCTYPE html>
<html>
    <head>
        <title> Malex Shelter</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="Stylesheet" href="Assests/Main.css" type="text/css"/>
        <h1>Malex Shelter</h1>
        
    </head>
    <body>
        <div class="fltrButton">
            <button onclick="expandFilter()" class="buttonVisuals">Filter</button>
                <div id="dropdown" class="filterContent">
                    <button type="button" data-name="all" class="active">
                        All
                    </button>
                    <button data-name="cat">
                        Cats
                    </button>
                     <button data-name="dog">
                        Dogs
                    </button>
                     <button data-name="other">
                        Other
                    </button>
                </div>
        </div>
        
        <div class="grid center">
         <?php
            include 'db.php';

            $sql = 'SELECT * FROM AnimalData';
            $result = mysqli_query($connect, $sql);

            if(mysqli_num_rows($result) > 0)
                {
                while ($row = mysqli_fetch_assoc($result))
                {
                ?>
                <div class="card" data-name="<?php echo $row['type']; ?>">
                    <div class="cardFront">
                        <img src="<?php echo $row['image_path']; ?>" alt="img" class="frontImg"/>
                        <h1><?php echo $row['name']; ?></h1>
                    </div>
                    <div class="cardFront cardBack">
                        <h1><?php echo $row['name']; ?></h1>
                        <p class="cardBackPadding">
                            <?php echo $row['description']; ?>
                        </p>
                        <button onclick="window.location.href='ClientSideAdoptionPage.html?adoptivePet=<?php echo urlencode($row['name']); ?>'" 
                        class="buttonVisuals adoptBtnPlacement">Adopt</button>
                    </div>
                </div>
                <?php
                }
            } else {
                echo "<p>No animals for adoption :C </p>";
            }
         ?>
        <!---->
        </div>
    <script src="javaScriptClientSide.js"></script>        
    </body>
    <footer>
    
        <div class="contact-info">
            <p>Malex Shelter
                <br>
                Alborggade 7a
                <br>
                9900 Aalborg
                <br>
                Malex@shelter.dk
            </p> 
            <div class="im">
                <img src="Assests\Pictures\Logo.png" alt="Logo" width="80" height="80">
            </div>
            
        </div>
      
    </footer>
</html>
/*http://localhost/Web_Animal-main/Web_Animal/ClientSideMainDublicate.php*/