<?php  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="../css/materialize.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        //This is uk-accordion from https://getuikit.com/docs/accordion<br><br>
    <ul uk-accordion="multiple: true">
    <li>
        <a class="uk-accordion-title" href="#">Item 1</a>
        <div class="uk-accordion-content">
            <div class="card col m4 s12">
              <div class="card-content uk-card-primary">
                Classic : Hello World !
              </div>
            </div>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">Item 2</a>
        <div class="uk-accordion-content">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
        </div>
    </li>
</ul>
</div>

//This is uk-transition https://getuikit.com/docs/transition<br><br>
  <div class="row">
    <div class="uk-text-center col m4 s12">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
          <div>
            <div class="uk-light uk-background-secondary uk-padding">
                <h4 class="">Any event name</h4>
            </div>
          </div>
            <!--<img src="images/dark.jpg" alt="">-->
            <div class="uk-position-center">
                <div class="uk-transition-scale-up">
                  <button class="uk-button uk-button-primary">Read More</button>
                </div>

            </div>
        </div>
    </div>
  </div>
</div>
  </body>
</html>
