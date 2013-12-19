<?php
//arkaplanda javascript ile gelen ajax işlemleri burada gerçekleştirilecek
session_start();

//KONTROLLER

//İşlem parametresi kontrolü
if( empty($_POST['islem']) ){
    echo 'Bir işlem seçilmelidir.';
    exit;
}

$islem      = $_POST['islem'];
$urunKodu   = isset($_POST['urunKodu'])?$_POST['urunKodu']:null;
$sepet      = array();

if( $islem == 'sepeteEkle' ){
    if( empty( $urunKodu ) ){
        echo 'Ürün kodu boş bırakılamaz.';
        exit;
    }
    
    //sepette daha önce bu kodda ürün var mı?
    //ürün varsa adeti arttır
    if( isset( $_SESSION['sepet'][$urunKodu] ) ){
        $_SESSION['sepet'][$urunKodu]['adet'] = $_SESSION['sepet'][$urunKodu]['adet'] + 1;
    }else{
        //daha önce ürün sepete atılmadıysa..
        $_SESSION['sepet'][$urunKodu]['adet'] = 1;
    }
    
    echo 1;
}

