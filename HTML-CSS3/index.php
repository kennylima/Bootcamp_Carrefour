<html>

    <head>
        <title>Meu primeiro site em PHP!!!</title>
        <script src ="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <script>
            $( function() {
                $( "#accordion" ).accordion();
            } );
        </script>
        <script>
            $( ".selector" ).accordion({
                animate: 200
            });
        </script>
        <style type="text/css">
            .linha {
                font-weight: bold;
                color: green;
                padding-left: 10px;
                line-height: 20px;
            }
        </style>
    </head>

    <body>
        <?php 
            for ($i = 0; $i < 10; $i++){
                print( "<span class =\"linha\"> Linha número " .$i. "</span><br /n>");
            }
        ?>
    
    <div id="accordion">
  <h3>Accordion 1</h3>
  <div>
    <p>
    Teste
    </p>
  </div>
  <h3>Accordion 2</h3>
  <div>
    <p>
    Teste
    </p>
  </div>
  <h3>Accordion 3</h3>
  <div>
    <p>
    Teste
    </p>
    <ul>
      <li>Teste</li>
      <li>Teste</li>
      <li>Teste</li>
    </ul>
  </div>
  <h3>Accordion 4</h3>
  <div>
    <p>
    Teste
    </p>
    <p>
    Teste
    </p>
  </div>
</div>


    </body>

    <script type="text/javascript">
        $(document).ready(function(){
            alert("Kenny Lima");
        })
    </script>
</html>