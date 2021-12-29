
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <link rel="stylesheet" href="css/preloader-com-css3.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">



</head>
<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="inner">
            <div class="bolas">
                <div></div>
                <div></div>
                <div></div>                    
            </div>
        </div>
    </div>
    
    <div class="container">

    <div class="content">
        <h1>Pre loader com CSS</h1>
        <img class="img-responsive" src="https://www.plazahoteis.com.br/wp-content/uploads/2019/07/gatinho-filhote-plaza-hoteis-jul19.jpg" alt="Meu gato" />
    </div>

    

    </div>


    
    <script type="text/javascript">
    //<![CDATA[
    $(window).on('load', function () { // makes sure the whole site is loaded 
        $('#preloader .inner').fadeOut(); // will first fade out the loading animation 
        $('#preloader').delay(200).fadeOut('slow'); // will fade out the white DIV that covers the website. 
        $('body').delay(200).css({'overflow': 'visible'});
    })
    //]]>
    </script> 
</body>
</html>
