<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    </head>
    <script>
        window.onload = function(){
        document.querySelector('.waves-effect').click();}
    </script>
    <body>
        <a class="waves-effect waves-light btn modal-trigger" href="#modal1" style="visibility: hidden;">Modal</a>
        <div id="modal1" class="modal" >
            <div class="modal-content" >
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.modal').modal();
            })
        </script>
    </body>
</html>
