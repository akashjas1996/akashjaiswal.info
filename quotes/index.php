<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
   <head>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-blue.min.css">
      <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
   </head>
   <body>
      <!-- Uses a header that contracts as the page scrolls down. -->
      <style>
         .demo-layout-waterfall .mdl-layout__header-row .mdl-navigation__link:last-of-type  {
         padding-right: 0;
         }
      </style>
      <div class="demo-layout-waterfall mdl-layout mdl-js-layout">
         <header class="mdl-layout__header mdl-layout__header--waterfall">
            <!-- Top row, always visible -->
            <div class="mdl-layout__header-row">
               <!-- Title -->
              <a href="login/login.php"> <span class="mdl-navigation__link" type="button">  Login </span> </a>
               <div class="mdl-layout-spacer"></div>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
                  <label class="mdl-button mdl-js-button mdl-button--icon"
                     for="waterfall-exp">
                  <i class="material-icons">search</i>
                  </label>
                  <div class="mdl-textfield__expandable-holder">
                     <input class="mdl-textfield__input" type="text" name="sample"
                        id="waterfall-exp">
                  </div>
               </div>
            </div>
            <!-- Bottom row, not visible on scroll -->
            <div class="mdl-layout__header-row">
               <div class="mdl-layout-spacer"></div>
               <!-- Navigation -->
               <nav class="mdl-navigation">
                  <a class="mdl-navigation__link" href="">Link</a>
                  <a class="mdl-navigation__link" href="">Link</a>
                  <a class="mdl-navigation__link" href="">Link</a>
                  <a class="mdl-navigation__link" href="">Link</a>
               </nav>
            </div>
         </header>
         <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Title</span>
            <nav class="mdl-navigation">
               <a class="mdl-navigation__link" href="">Link</a>
               <a class="mdl-navigation__link" href="">Link</a>
               <a class="mdl-navigation__link" href="">Link</a>
               <a class="mdl-navigation__link" href="">Link</a>
            </nav>
         </div>
         <main class="mdl-layout__content">
            <div class="page-content">
               <br><br>

   
  <script>
    var dialog = document.querySelector('dialog');
    var showDialogButton = document.querySelector('#show-dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    showDialogButton.addEventListener('click', function() {
      dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
  </script>


               <!-- Your content goes here -->
               <center>
                  <div class="mdl-grid">
                     <div class="mdl-cell mdl-cell--10-col"></div>
                     <div class="mdl-cell mdl-cell--1-col"> Anonymous </div>
                     <div class="mdl-cell mdl-cell--1-col">
                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2">
                        <input type="checkbox" id="switch-2" class="mdl-switch__input">
                        <span class="mdl-switch__label"></span>
                        </label>
                     </div>
                  </div>
               </center>
               <center>
                  <div class="mdl-grid">
                     <div class="mdl-cell">
                        <!-- Square card -->
                        <style>
                           .demo-card-square.mdl-card {
                           width: 320px;
                           height: 320px;
                           }
                           .demo-card-square > .mdl-card__title {
                           color: #fff;
                           background:
                           url('dog.png') bottom right 15% no-repeat #46B6AC;
                           }
                        </style>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp">
                           <div class="mdl-card ">
                              <img src="images/resume.jpeg" width="70%"> </img>
                              
                           </div>
                           <div class="mdl-card__supporting-text">
                              Resume
                           </div>
                           <div class="mdl-card__actions mdl-card--border">

                           	
								
                           	<!-- Accent-colored flat button -->
                              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                              Preview
                              </a>
                              <!-- Icon button -->
                              <br>
                              <i class="material-icons">cloud_download</i>
                        </button>


                           </div>
                        </div>
                     </div>



                     <div class="mdl-cell">
                        <!-- Square card -->
                        <style>
                           .demo-card-square.mdl-card {
                           width: 320px;
                           height: 320px;
                           }
                           .demo-card-square > .mdl-card__title {
                           color: #fff;
                           background:
                           url('dog.png') bottom right 15% no-repeat #46B6AC;
                           }
                        </style>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp">
                           <div class="mdl-card__title mdl-card--expand">
                              <h2 class="mdl-card__title-text">Update</h2>
                           </div>
                           <div class="mdl-card__supporting-text">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              Aenan convallis.
                           </div>
                           <div class="mdl-card__actions mdl-card--border">

                           	<!-- Icon button -->
								<button class="mdl-button mdl-js-button mdl-button--icon">
  									<img width="100%" src="fire3.png">
								</button>
                           	<!-- Accent-colored flat button -->
                              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                              View Updates
                              </a>
                           </div>
                        </div>
                     </div>




                     <div class="mdl-cell">
                        <!-- Square card -->
                        <style>
                           .demo-card-square.mdl-card {
                           width: 320px;
                           height: 320px;
                           }
                           .demo-card-square > .mdl-card__title {
                           color: #fff;
                           background:
                           url('dog.png') bottom right 15% no-repeat #46B6AC;
                           }
                        </style>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp">
                           <div class="mdl-card__title mdl-card--expand">
                              <h2 class="mdl-card__title-text">Update</h2>
                           </div>
                           <div class="mdl-card__supporting-text">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              Aenan convallis.
                           </div>
                           <div class="mdl-card__actions mdl-card--border">
                              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                              View Updates
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="mdl-cell">
                        <!-- Square card -->
                        <style>
                           .demo-card-square.mdl-card {
                           width: 320px;
                           height: 320px;
                           }
                           .demo-card-square > .mdl-card__title {
                           color: #fff;
                           background:
                           url('dog.png') bottom right 15% no-repeat #46B6AC;
                           }
                        </style>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp">
                           <div class="mdl-card__title mdl-card--expand">
                              <h2 class="mdl-card__title-text">Update</h2>
                           </div>
                           <div class="mdl-card__supporting-text">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              Aenan convallis.
                           </div>
                           <div class="mdl-card__actions mdl-card--border">
                              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                              View Updates
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="mdl-cell">
                        <!-- Square card -->
                        <style>
                           .demo-card-square.mdl-card {
                           width: 320px;
                           height: 320px;
                           }
                           .demo-card-square > .mdl-card__title {
                           color: #fff;
                           background:
                           url('dog.png') bottom right 15% no-repeat #46B6AC;
                           }
                        </style>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp">
                           <div class="mdl-card__title mdl-card--expand">
                              <h2 class="mdl-card__title-text">Update</h2>
                           </div>
                           <div class="mdl-card__supporting-text">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              Aenan convallis.
                           </div>
                           <div class="mdl-card__actions mdl-card--border">
                              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                              View Updates
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="mdl-cell">
                        <!-- Square card -->
                        <style>
                           .demo-card-square.mdl-card {
                           width: 320px;
                           height: 320px;
                           }
                           .demo-card-square > .mdl-card__title {
                           color: #fff;
                           background:
                           url('dog.png') bottom right 15% no-repeat #46B6AC;
                           }
                        </style>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp">
                           <div class="mdl-card__title mdl-card--expand">
                              <h2 class="mdl-card__title-text">Update</h2>
                           </div>
                           <div class="mdl-card__supporting-text">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              Aenan convallis.
                           </div>
                           <div class="mdl-card__actions mdl-card--border">
                              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                              View Updates
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="mdl-cell">
                        <!-- Square card -->
                        <style>
                           .demo-card-square.mdl-card {
                           width: 320px;
                           height: 320px;
                           }
                           .demo-card-square > .mdl-card__title {
                           color: #fff;
                           background:
                           url('dog.png') bottom right 15% no-repeat #46B6AC;
                           }
                        </style>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp">
                           <div class="mdl-card__title mdl-card--expand">
                              <h2 class="mdl-card__title-text">Update</h2>
                           </div>
                           <div class="mdl-card__supporting-text">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              Aenan convallis.
                           </div>
                           <div class="mdl-card__actions mdl-card--border">
                              <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                              View Updates
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </center>
               <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--11-col"></div>
                  <div class="mdl-cell mdl-cell--1-col">
                     <!-- Colored FAB button with ripple -->
                    <a href="https://google.com"> <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored"> 
                     <i class="material-icons">add</i>
                     </button> </a>
                  </div>
               </div>
               <footer class="mdl-mini-footer">
                  <div class="mdl-mini-footer__left-section">
                     <div class="mdl-logo">Quoter</div>
                     <ul class="mdl-mini-footer__link-list">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Privacy & Terms</a></li>
                     </ul>
                  </div>
               </footer>
            </div>
         </main>
      </div>
      <br><br>
   </body>
</html>