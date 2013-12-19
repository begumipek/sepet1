<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sepet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="js/jquery-2.0.3.min.js" />
    </head>
    <body>
        <h1>Sepet İçeriği</h1>
        <nav>
            <ul>
                <li><a href="index.php">Anasayfa</a></li>
                <li><a href="sepet.php">Sepete Git</a></li>
            </ul>
        </nav>

        <ul>
            
            <?php
            if( !isset( $_SESSION['sepet'] ) ||  count($_SESSION['sepet']) == 0 ){
                echo 'Sepetinizde ürün bulunamadı.';
            }else{
                foreach ($_SESSION['sepet'] as $urunKodu => $value) {
                    echo '<li> Ürün Kodu: '. $urunKodu . ' Adet: ' . $_SESSION['sepet'][$urunKodu]['adet'] . '</li>';
                }
            }
            ?>
            
        </ul>
        
    </body>
</html>
