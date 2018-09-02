
<html>
    <head>
        <title>My profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../stylesheet/portal/alumni_achi.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
              <a class="brand-logo pad-2 " href="../">
                  SAAR , IIT Patna
              </a>
                
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                
                  <ul class="right hide-on-med-and-down">
                      
                    <li><a href='../'>Home</a></li>
                    <li><a href='../aboutUs/'>About Us</a></li>
                    <li><a href='../donateUS/'>Give Back</a></li>
                    <li><a href='../gallery/'>Gallery</a></li>
                    <li><a href=''>Logout</a></li>
                  </ul>
            </div>
        </nav>
        </div>
       <ul class='sidenav' id='mobile-demo'>
                <li><a href='../'>Home</a></li>
              <li><a href='../aboutUs/'>About Us</a></li>
              <li><a href='../donateUS/'>Give Back</a></li>
              <li><a href='../gallery/'>Gallery</a></li>
              <li><a href=''>Logout</a></li>
       </ul>
        <div class="row">
        <form class="col s12 m8 l6 xl6 offset-xl3 offset-l3 offset-m2 pad-1">
        <h4 style="text-align: center;  font-family: 'Open Sans', sans-serif;">Tell Us Your Achievement</h4>
        <div class="row">
        <div class="input-field col l6">
            <input id="input_text" type="text" data-length="30" title="Title">
            <label for="input_text">Title</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea" title="Describe in brief"></textarea>
          <label for="textarea1">Details</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
            <input id="password" type="password" class="validate" title="Your Password">
          <label for="password">Password</label>
          <span class="helper-text" >Type password to confirm</span>
        </div>
      </div>
        <div class="row">
            <div class="input-field col s12" style="text-align: center">
                <button class="btn waves-effect waves-light" type="submit" name="action" style="text-decoration: none; background-color: #2bbbad;">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.sidenav').sidenav();
    $('input#input_text').characterCounter();
  });
        </script>
    </body>
</html>



