<?php

    include 'db.php';
    
    $type = $_GET['type'] ?? 'all'; //getting the 'type' key containing the type of the animal as value, ?? means that we return the value on the left ('type') if it is not null and exists, else we return the right value ('all')) (?? is called a null coalescing operator)

    if ($type === 'all'){
        $sql = 'SELECT * FROM AnimalData';
    }
    else{
        $queryType = mysqli_real_escape_string($connect, $type);        
        $sql ="SELECT * FROM AnimalData WHERE type = '$queryType'";
    }
    
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
                <h2 id="adoption_status"></h2>
            </div>
            <div class="cardFront cardBack">
                <h1><?php echo $row['name']; ?></h1>
                <p class="cardBackPadding">
                    <?php echo $row['description']; ?>
                </p>
                <button onclick="window.location.href='ClientSideAdoptionPage.html?adoptivePet=<?php echo urlencode($row['name']); ?>'" class="buttonVisuals adoptBtnPlacement">Adopt</button>
            </div>
        </div>
        <?php
        }
    } 
    else 
    {
        echo "<p>No animals for adoption :C </p>";
    }