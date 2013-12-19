<!DOCTYPE html>
<html>
    <head>
        <title>Anasayfa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script src="js/jquery-2.0.3.min.js"></script>
        <script>
            function sepeteAt( urunKodu ){
                $.ajax({
                    type: "POST",
                    url: 'ajax.php',
                    data: 'islem=sepeteEkle&urunKodu=' + urunKodu,
                    success: function(data){
                        console.log('Gelen veri:' + data);
                    },
                });
            } 
        </script>
    </head>
    <body>
        <h1>Anasayfa</h1>
        <nav>
            <ul>
                <li><a href="index.php">Anasayfa</a></li>
                <li><a href="sepet.php">Sepete Git</a></li>
            </ul>
        </nav>
        <table border="1" cellpadding="2">
            <tbody>
                <tr>
                    <td>
                        Erkek Bot <br>
                        Fiyat: 95,00TL <br>
                        <a href="javascript:sepeteAt(26);">Sepete At</a>
                    </td>
                    <td>
                        Kadın Bot <br>
                        Fiyat: 115,00TL <br>
                        <a href="javascript:sepeteAt(34);">Sepete At</a>                        
                    </td>
                </tr>
                <tr>
                    <td>
                        Çocuk Bot <br>
                        Fiyat: 82,00TL <br>
                        <a href="javascript:sepeteAt(65);">Sepete At</a>
                    </td>
                    <td>
                        Çocuk Terlik <br>
                        Fiyat: 26,00TL <br>
                        <a href="javascript:sepeteAt(165);">Sepete At</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </body>
</html>
