<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Programadores</title>

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	
	    <script type="text/javascript">
        // Função responsável por atualizar as programadors
        function atualizar()
        {
            // Fazendo requisição AJAX
            $.post('ajax/atualizar.php', function (programador) {

                // Exibindo programador
                //$('#programador').html('<b>' + programador.nome +" " +programador.sobrenome + "<img src='img/"+programador.photo+"'> +"'</b><br/>');
                
                 $('#programador').html('<b>'+programador.nome+' '+programador.sobrenome +'<br> <img src="img/'+programador.photo+'" width=120px></b><br/>');

            }, 'JSON');
        }

        // Definindo intervalo que a função será chamada
        setInterval("atualizar()", 2000);

        // Quando carregar a página
        $(function() {
            // Faz a primeira atualização
            atualizar();
        });

    </script>

</head>

<body class="bg-dark mt-2">

<div class="container">


<div class="card">
  <div class="card-header">
    PROGRAMADORES RANDOM()
  </div>
  <div class="card-body">
    
  <div id="programador"></div>

  </div>
</div>



   

</div>

</body>
</html>
