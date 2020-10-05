<html>
<head>
    <title>Cetak PDF</title>
    <style type="text/css">
    #padding {
        border: 1px solid #000;
        padding: 0px 0px 0px 47px;
    }
    .p2{
      padding: 0px 0px 0px 188px
    }
    #pa3{
      padding: 0px 0px 0px 480px
    }
    #pa4{padding: 9px 0px 0px 237px
    }
    #pa5{padding: 31px 0px 0px 500px
    }
    </style>
</head>
<body>
<p id="padding"> <?= $nono ;?> </p>
<p class="p2"> <?= $cust ;?></p>
<p class="p2"> <?= $terbi ;?> </p>
<p class="p2"> <?= $invo ;?> </p>
<br/>
<br/>
<br/>
<p id="pa3"> Semarang <?="" .date('d M Y'); ?>
 </p>
<br/>
<br/>
<p id="pa4"> <?= $tulis?> </p>
<p id="pa5"> <?= $creat?> </p>

</body>
</html>

