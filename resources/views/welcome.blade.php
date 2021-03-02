<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Todo</title>
    <!-- for internet explorer-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- for the tablets and founs mobile-->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- for to describe your work usually one or two sentences -->
    <meta
      name="description"
      content="A page's description, usually one or two sentences."
    />
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- fontawesome font -->
    <link rel="stylesheet" href="css/fontawesome.css" />
    <!-- jquery-ui -->
    <link rel="stylesheet" href="css/jquery-ui.min.css" />
    <!-- to build styles css-->
    <link rel="stylesheet" href="css/style.css" />
    <!-- [if it IE9 ]-->
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <!-- [end if ]-->
  </head>
  <body>
    <header>
      <div id="overlay"></div>
      <div class="container">
        <div class="text-center intro-div">
          <h2>login and start write your tasks</h2>
          <a href="{{ route('login') }}" class="btn btn-info btn-lg">Get started</a>
        </div>
      </div>
    </header>

    <!-- jquery -->
    <script src="js/jquery.min.js"></script>
    <!-- jquery-ui -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- bootstrap-->
    <script src="js/bootstrap.min.js"></script>
    <!-- fontawesome -->
    <script src="js/fontawesome.js"></script>
    <!-- popper -->
    <script src="js/popper.min.js"></script>
    <!-- for build js purpose -->
    <script src="js/main.js"></script>
  </body>
</html>
