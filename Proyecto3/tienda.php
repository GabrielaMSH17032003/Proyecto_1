<?php include("templates/header.php"); ?>

<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'Agregado';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'Con exito';
   }

}

?>

        <div class="header-content container">

            <div class="header-txt">
                <h1><span>Bienvenido</span> 
                    Lleva lol contigo</h1>
                <p>
                    Tema de campeón: Milo
                    Con un nuevo campeon viene nuevo tema.
                    <br>¿Como que no has escuchado el tema de milo? Escuchalo ahora
                </p>
                <a href="https://www.youtube.com/watch?v=3s6whZ3Q0U0" target="_blank" class="btn-1">Informacion</a>
            </div>
            <div class="header-img">
                <img src="images/logo.png" alt="">

            </div>

        </div>
    </header>
    <section class="roles container">
        <h2>Roles</h2>
        <p>
            En League of Legends contamos con 5 roles principales los cuales se conocen como Top, 
            Jungla, Mid, ADC y Support. Adicionalmente a eso tenemos diferentes arquetipos de personajes 
            como Luchadores, Tanques, Asesinos, Magos, etc.
        </p>

        <div class="roles-content">
            <div class="roles-1">
                <img src="images/b1.png" alt="">
                <h3>Superior</h3>
            </div>
            <div class="roles-1">
                <img src="images/b2.png" alt="">
                <h3>Medio</h3>
            </div>
            <div class="roles-1">
                <img src="images/b3.png" alt="">
                <h3>Lanzador</h3>
            </div>
            <div class="roles-1">
                <img src="images/b4.png" alt="">
                <h3>soporte</h3>
            </div>

        </div>

    </section>

    <section class="info">

        <img class="bg-2" src="images/bg-2.png" alt="">
        <div class="info-content container">

            <div class="info-img">
                <img src="images/jugadores.png" alt="">
            </div>

            <div class="info-txt">
                <h2>Jugadores profesionales de esports de League of Legends</h2>
                    <p>
                        Algo que ha quedado de cierta manera expuesto por Faker, quien es catalogado como el mejor 
                        jugador de la historia de League of Legends dentro de la escena competitiva, siendo tres veces 
                        campeón de Worlds, la mayor competencia a nivel mundial del videojuego.
                    </p>
                    <a href="https://esports.as.com/league-of-legends/jugadores/" target="_blank" class="btn-1">Informacion</a>
                
            </div>

        </div>

    </section>

    <main class="products container">

        <h2>Productos en nuestra tienda</h2>

        <div class="box-container" id="lista-1">
            <div class="box">
                <img src="images/pla1.png" alt="">
                <div class="product-txt">
                    <h3>Playera</h3>
                    <p>SKT</p>
                    <p class="precio">$210</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="images/pla2.png" alt="">
                <div class="product-txt">
                    <h3>Playera ligera</h3>
                    <p>Calidad premium</p>
                    <p class="precio">$290</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="2">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="images/pla3.png" alt="">
                <div class="product-txt">
                    <h3>Sudadera</h3>
                    <p>E-sports</p>
                    <p class="precio">$270</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="3">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="images/pla4.png" alt="">
                <div class="product-txt">
                    <h3>Playera Viego</h3>
                    <p>Algodon</p>
                    <p class="precio">$250</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="4">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="images/pla5.png" alt="">
                <div class="product-txt">
                    <h3>Figura</h3>
                    <p>Sylas</p>
                    <p class="precio">$300</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="5">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="images/pla6.png" alt="">
                <div class="product-txt">
                    <h3>Figura</h3>
                    <p>Teemo y Ziggs</p>
                    <p class="precio">$300</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="6">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="images/pla7.png" alt="">
                <div class="product-txt">
                    <h3>Figura</h3>
                    <p>Blitz y Crank</p>
                    <p class="precio">$800</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="7">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="images/pla8.png" alt="">
                <div class="product-txt">
                    <h3>Figura</h3>
                    <p>Proyecto ashe</p>
                    <p class="precio">$500</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="4">Agregar al carrito</a>
                </div>
            </div>
            <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

        </div>
        <div class="btn-2" id="load-more">Cargar Mas</div>

    </main>
    <section class="app container">
        <div class="app-txt">
            <h2>Decarga nuestra app Wild Rift descubre ofertas </h2>
            <p>
                League of Legends: Wild Rift es un videojuego multijugador de arena de batalla on-line desarrollado 
                y publicado por Riot Games para sistemas operativos Android, iOS, y próximamente disponible en consolas. 
                El juego es una versión modificada del juego de PC, League of Legends.
            </p>
            <div class="descarga">
                <img src="images/store1.png" alt="">
                <img src="images/store1.png" alt="">
            </div>

        </div>

        <div class="app-img">
            <img src="images/app.png" alt="">

        </div>

    </section>
    <?php include("templates/footer.php"); ?>