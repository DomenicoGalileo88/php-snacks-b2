<!-- 
Snack 1
Partendo da questo array: https://www.codepile.net/pile/Po60bjgQ

Ad ogni refresh della pagina visualizzare una pubblicitĂ  a schermo, tenendo conto che possono essere sorteggiate solo quelle is_active true.

 -->

<?php

$ads = [
    [
        'image_path' => 'https://conversionsciences.com/wp-content/uploads/2019/04/example-of-emotional-logical-appeal-on-persuasive-copy.jpg',
        'link' => 'https://www.google.com',
        'is_active' => true,
    ],
    [
        'image_path' => 'https://previews.123rf.com/images/hstrongart/hstrongart1612/hstrongart161200121/68060446-anuncios-de-cepillos-de-dientes-el%C3%A9ctricos-modo-diferente-de-este-producto-con-blanco-modelo-de-diente.jpg',
        'link' => 'https://www.facebook.com',
        'is_active' => true,
    ],
    [
        'image_path' => 'https://thumbs.dreamstime.com/z/back-to-school-sale-background-chalkboard-sale-percentages-marketing-poster-color-pencils-96751666.jpg',
        'link' => 'https://codepen.io',
        'is_active' => false,
    ],
    [
        'image_path' => 'https://foodsecurityfoodjustice.files.wordpress.com/2016/11/beyond-the-omlette-1.jpg',
        'link' => 'https://laravel.com',
        'is_active' => false,
    ],
    [
        'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRniLfGdFLxVOUoEwYC9WeRIrfZInB74_80IV8yMnANx3HTZYoQ',
        'link' => 'https://www.php.net',
        'is_active' => true,
    ],

];

//var_dump($ads);
$active_ads = [];

foreach ($ads as $active_ad) {
    if ($active_ad['is_active'] == true) {
        $active_ads[] = $active_ad;
    }
};
//var_dump($active_ads);

$active_ad = $active_ads[array_rand($active_ads, 1)];
//var_dump($active_ad);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-1</title>
    <style>
        img{
            max-width: 300px;
        }
    </style>
</head>

<body>

    <div class="ads">
        <a href="<?php echo $active_ad['link'] ?>">
            <img src="<?php echo $active_ad['image_path'] ?>" alt="">
        </a>
    </div>


</body>

</html>