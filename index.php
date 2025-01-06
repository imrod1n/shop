<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h2>World Peas</h2>
        <nav>
            <ul>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Newstand</a></li>
                <li><a href="#">Who we are</a></li>
                <li><a href="#">My profile</a></li>
                <li class="basket"><a href="#">Basket (3)</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="main__top">
            <div class="main__name">
                <h1>Produce</h1>
                <pre><b>Fresh  —  </b>August 21, 2023</pre>
            </div>
            <div class="sort">
                <button class="sort__button_current">Default</button>
                <button class="sort__button">A-Z</button>
                <button class="sort__button">List view</button>
            </div>
        </div>
        <hr>
        <div class="cards" id="cards">
        <?php
                    $pdo = new PDO("mysql:host=local;dbname=products_db;", "root", "");

                    $sql = "SELECT * FROM productds";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $games = $query->fetchAll(PDO::FETCH_OBJ);
                    foreach($games as $el)
                        echo "<div class='card'>
                                <img class='card__image' src=".$el->image." alt='tomato' width='100%'>
                                <h3 class='card__title'>".$el->name."</h3>
                                <p class='card__price'>".$el->price." / lb</p>
                                <p class='card__place'>Grown in ".$el->place."</p>
                              </div>"
                ?>
        </div>
    </main>
</body>
</html>