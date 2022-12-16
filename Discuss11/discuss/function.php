<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1>
        <?php
            function fullName($name){
                printf("halo nama saya %s <br>", $name);
            }
            function perkalian($bil1,$bil2){
                $total = $bil1 * $bil2;
                printf("hasil perkalian dari %d dan %d adalah %d", $bil1, $bil2, $total);
            }

            fullName("gilang Permana");
            perkalian(100, 410);

        ?>
</h1>

</body>
</html>

