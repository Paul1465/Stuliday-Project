<!DOCTYPE html>
<html lang="en">
   <head>
      <?php 
         include('inc/head.php');
            ?>
   </head>
   <body>
      <header>
         <?php 
            include('inc/navBarConnecter.php');
               ?>
      </header>
      <section id="imageLock">
         <div class="container">
            <div class="row">
               <div class="col-12 mt-5">
                  <img id="pageProfil"  src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Y2lyY2xlIHN0eWxlPSJmaWxsOiNBNEMyRjc7IiBjeD0iMjU2IiBjeT0iMjU2IiByPSIyNDYuNjkxIi8+Cgk8ZWxsaXBzZSBzdHlsZT0iZmlsbDojRTNFN0YyOyIgY3g9IjI0Mi4wMzYiIGN5PSIyNTYiIHJ4PSIyMzIuNzI3IiByeT0iMjQ2LjY5MSIvPgoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGQ9Ik0yNTYsNTAyLjY5MWMyLjQxLDAsNC43OTItMC4xMTQsNy4xODUtMC4xODJDMTM3Ljc5Nyw0OTguNjk3LDM3LjIzNiwzODkuODM0LDM3LjIzNiwyNTYgICBTMTM3Ljc5NywxMy4zMDMsMjYzLjE4NSw5LjQ5MWMtMi4zOTMtMC4wNjgtNC43NzYtMC4xODItNy4xODUtMC4xODJDMTE5Ljc1Niw5LjMwOSw5LjMwOSwxMTkuNzU2LDkuMzA5LDI1NiAgIFMxMTkuNzU2LDUwMi42OTEsMjU2LDUwMi42OTFMMjU2LDUwMi42OTF6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojN0ZBQ0ZBOyIgZD0iTTE4Mi41NzUsMzk2LjEyM2wtNzMuNjExLDQwLjE1MmMtNC4yMzUsMi4zNi04LjE5Nyw1LjE4MS0xMS44MTMsOC40MSAgIGM5MS40MjgsNzcuMDM1LDIyNC45NDgsNzcuMzc1LDMxNi43NjgsMC44MDhjLTMuOTY1LTMuNDA0LTguMzIxLTYuMzI0LTEyLjk3Ni04LjY5OWwtNzguODE4LTM5LjQwOCAgIGMtMTAuMTg1LTUuMDkyLTE2LjYxOC0xNS41MDItMTYuNjE4LTI2Ljg4OVYzMzkuNTdjMi42NDctMy4wNjYsNS4xMzUtNi4yNjYsNy40NTYtOS41ODYgICBjMTAuNjMzLTE1LjExMywxOC44OTUtMzEuNzYzLDI0LjQ5OC00OS4zNzNjMTAuMzgtMy4xNTcsMTcuNDk2LTEyLjcwNCwxNy41NTQtMjMuNTUzdi0zMy4wMDYgICBjLTAuMDI3LTYuOTkyLTMuMDI3LTEzLjY0My04LjI1MS0xOC4yOTF2LTQ3LjcxOGMwLDAsOS43OTgtNzQuMjYxLTkwLjc2NC03NC4yNjFzLTkwLjc2NCw3NC4yNjEtOTAuNzY0LDc0LjI2MXY0Ny43MTggICBjLTUuMjI0LDQuNjQ4LTguMjI0LDExLjI5OS04LjI1MSwxOC4yOTF2MzMuMDA2YzAuMDI2LDguNDEyLDQuMzI0LDE2LjIzNCwxMS40MDksMjAuNzY3YzUuNDc4LDIyLjQ1OCwxNS42NSw0My41MDIsMjkuODQ3LDYxLjc0NSAgIHYzMC4xNkMxOTguMjQxLDM4MC43MzIsMTkyLjIzMywzOTAuODU0LDE4Mi41NzUsMzk2LjEyM3oiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNBNEMyRjc7IiBkPSJNMzk2LjYyNCw0MzYuMTZsLTEwMy42OTYtMzkuNDA4Yy0xMC4xODUtNS4wOTItMTYuNjE4LTE1LjUwMi0xNi42MTgtMjYuODg5di0zMC45MjcgICBjMi42NDctMy4wNjYsNS4xMzUtNi4yNjYsNy40NTYtOS41ODZjMTAuNjMzLTE1LjExMywxOC44OTUtMzEuNzYzLDI0LjQ5OC00OS4zNzNjMTAuMzgtMy4xNTcsMTcuNDk2LTEyLjcwNCwxNy41NTQtMjMuNTUzdi0zMy4wMDYgICBjLTAuMDI3LTYuOTkyLTMuMDI4LTEzLjY0My04LjI1MS0xOC4yOTF2LTQ3LjcxOGMwLDAsOS43OTgtNzQuMjYxLTkwLjc2NC03NC4yNjFjLTUuOTg2LDAtMTEuNTU1LDAuMjc5LTE2Ljc4NCwwLjc3NSAgIGMwLjYxLDQuODM0LTIuMTAzLDkuNDc2LTYuNjE1LDExLjMxNmMtMTIuMDQsNC45MzktMjMuNjkyLDEwLjc3Ni0zNC44NTgsMTcuNDYxYzQuNjAxLDAuODA1LDcuOTQ5LDQuODExLDcuOTI0LDkuNDgyICAgYzIuMDA2LDM0LjI3Mi05Ljc4NCw3NC41MTItMjAuMzgxLDEwOS41NDNjMC4zMjYsMTMuNzkzLDAuNjI4LDI3LjU4OSwxLjAyOSw0MS4zODJjMS4wMTksMy4xODQsMi4wNDEsNi4zNjYsMy4wNCw5LjU1NCAgIGMxLjkyNSwxLjE3LDMuNDM0LDIuOTE1LDQuMzE1LDQuOTg5YzQuMjUyLDEwLjEyNyw4Ljk5MywyMC41MDYsMTMuMTA2LDMxLjA3NmM1LjYwNi0xLjU2MywxMS40OSwxLjM0MiwxMy42NTgsNi43NDIgICBjMy42MjksMTAuMjQ5LDUuOTAyLDIwLjkyOSw2Ljc2LDMxLjc2OGMwLjQzOSwzLjI1NS0xLjE1Myw2LjQ0OS00LjAxNiw4LjA1OWMtNS4xNzYsMTcuOTI4LTEzLjkxNiwzNC42MjctMjUuNjk3LDQ5LjA5OCAgIGMtMi41NTQsMi40ODgtNi4yMjYsMy40NTMtOS42NzQsMi41NDNjLTMuNDQ3LTAuOTEtNi4xNjUtMy41NjItNy4xNTgtNi45ODZjLTAuNDk5LTEuNzMxLTAuOTA1LTMuNDg3LTEuMjE1LTUuMjYxICAgYy02LjkyMiw0LjExMS0xNC4zNDMsNy43MDMtMjIuMzU0LDEyLjE4OWMtNC4zMDIsMi40MDktMzYuOTg4LDE3LjQxNC0zNy44MDQsMjEuMTM2Yy00LjYxOSwyMS4wNjEsNjkuMjE5LDQ3LjE4MiwxMDYuMjg4LDYxLjk1ICAgYzEwLjA5MywxLjMyMywyMC4yNTgsMi4wMjIsMzAuNDM3LDIuMDkzYzYwLjA4MiwwLDE0MC4wMDctMjEuNSwxODIuNzk3LTU3LjE5OEM0MDUuNjM1LDQ0MS40NTUsNDAxLjI3OSw0MzguNTM1LDM5Ni42MjQsNDM2LjE2ICAgTDM5Ni42MjQsNDM2LjE2eiIvPgoJPGc+CgkJPHBhdGggc3R5bGU9ImZpbGw6IzQyOERGRjsiIGQ9Ik0yNTYsNTEyQzExNC42MTUsNTEyLDAsMzk3LjM4NSwwLDI1NlMxMTQuNjE1LDAsMjU2LDBzMjU2LDExNC42MTUsMjU2LDI1NiAgICBDNTExLjgzNywzOTcuMzE3LDM5Ny4zMTcsNTExLjgzNywyNTYsNTEyeiBNMjU2LDE4LjYxOEMxMjQuODk4LDE4LjYxOCwxOC42MTgsMTI0Ljg5OCwxOC42MTgsMjU2UzEyNC44OTgsNDkzLjM4MiwyNTYsNDkzLjM4MiAgICBTNDkzLjM4MiwzODcuMTAyLDQ5My4zODIsMjU2QzQ5My4yMzIsMTI0Ljk2LDM4Ny4wNCwxOC43NjgsMjU2LDE4LjYxOHoiLz4KCQk8cGF0aCBzdHlsZT0iZmlsbDojNDI4REZGOyIgZD0iTTI1Niw1MTJjLTYwLjMyNS0wLjAzNC0xMTguNzA0LTIxLjM1Mi0xNjQuODU1LTYwLjJjLTIuMDc4LTEuNzUyLTMuMjg2LTQuMzI0LTMuMzA5LTcuMDQxICAgIGMtMC4wMjMtMi43MTcsMS4xNDMtNS4zMDksMy4xOTEtNy4wOTVjNC4xMjgtMy42NzQsOC42NS02Ljg4MiwxMy40ODItOS41NjRsNzMuNjA5LTQwLjE0NWM2LjY3LTMuNjM5LDEwLjgxOS0xMC42MywxMC44MTgtMTguMjI3ICAgIHYtMjYuOTM2Yy0xMy4yOTItMTcuODEzLTIzLjA2My0zNy45OTgtMjguNzkxLTU5LjQ3M2MtNy44OTMtNi40MzYtMTIuNDczLTE2LjA4LTEyLjQ3My0yNi4yNjR2LTMzICAgIGMwLjAyOC04LjEwMiwyLjk1Ni0xNS45MjYsOC4yNTUtMjIuMDU1di00My40NDZjLTEuNjA5LTE5Ljc5OSw0LjY5NC0zOS40MjksMTcuNTI3LTU0LjU5MSAgICBDMTkwLjYwOSw4NC4zOTEsMjE4LjM4Miw3NC40NzMsMjU2LDc0LjQ3M3M2NS4zOTEsOS45MTgsODIuNTQ1LDI5LjQ5MWMxMi44MzMsMTUuMTYyLDE5LjEzNSwzNC43OTIsMTcuNTI3LDU0LjU5MVYyMDIgICAgYzUuMjk4LDYuMTI5LDguMjI3LDEzLjk1Myw4LjI1NSwyMi4wNTV2MzNjMC4wMTYsMTMuMTA3LTcuNTQ5LDI1LjA0LTE5LjQwOSwzMC42MThjLTUuODI1LDE2Ljk2Ny0xNC4wMjQsMzMuMDI0LTI0LjM1NSw0Ny42OSAgICBjLTEuOTkxLDIuODA5LTMuOTE4LDUuMzU1LTUuNzQ1LDcuNjA5djI3LjUyN2MtMC4wMjUsNy44NjYsNC40MjUsMTUuMDYzLDExLjQ3MywxOC41NTZsNzguODE4LDM5LjQwOSAgICBjNS4zMTQsMi43MDEsMTAuMjg1LDYuMDI4LDE0LjgwOSw5LjkwOWMyLjEwNSwxLjc3NCwzLjMxNiw0LjM4OCwzLjMwOSw3LjE0Yy0wLjAwNywyLjc1Mi0xLjIzMiw1LjM2LTMuMzQ2LDcuMTIzICAgIEMzNzMuODY5LDQ5MC45NjYsMzE1Ljg4Niw1MTEuOTY5LDI1Niw1MTJ6IE0xMTIuNDM2LDQ0NWM4NC4zOTIsNjQuMTYsMjAxLjEwOCw2NC41NDMsMjg1LjkxOCwwLjkzNiAgICBjLTAuNTI3LTAuMjgyLTEuMDQ1LTAuNTU1LTEuNTczLTAuODE4bC03OC44MTgtMzkuNDA5Yy0xMy4zNzUtNi42MjYtMjEuODE2LTIwLjI4My0yMS43NjQtMzUuMjA5di0zMC45MjcgICAgYzAtMi4yNTgsMC44Mi00LjQzOSwyLjMwOS02LjEzNmMyLjQzMS0yLjgyOSw0LjcxOC01Ljc3OCw2Ljg1NC04LjgzNmMxMC4wODctMTQuMzQsMTcuOTIzLTMwLjEzOCwyMy4yMzYtNDYuODQ1ICAgIGMwLjkzMy0yLjg4OSwzLjIxNy01LjE0Miw2LjExOC02LjAzNmM2LjQ2LTEuOTgyLDEwLjkwMS03LjkwNywxMC45OTEtMTQuNjY0di0zM2MtMC4wMTUtNC4zNjItMS45MDItOC41MDctNS4xODItMTEuMzgyICAgIGMtMS45NTYtMS43NjQtMy4wNzMtNC4yNzUtMy4wNzMtNi45MDl2LTQ3LjcxOGMwLTAuNDA3LDAuMDI3LTAuODE0LDAuMDgyLTEuMjE4YzEuMDg3LTE0Ljc4OC0zLjYzMi0yOS40MTctMTMuMTU1LTQwLjc4MiAgICBjLTEzLjQ5LTE1LjIyNy0zNi40OS0yMi45NTQtNjguMzgxLTIyLjk1NGMtMzIuMDE4LDAtNTUuMDgyLDcuNzkxLTY4LjU0NSwyMy4xNDVjLTkuNTAyLDExLjI5NC0xNC4xNjksMjUuODc4LTEyLjk5MSw0MC41OTEgICAgYzAuMDU1LDAuNDA0LDAuMDgyLDAuODExLDAuMDgyLDEuMjE4djQ3LjcxOGMwLDIuNjM0LTEuMTE3LDUuMTQ1LTMuMDczLDYuOTA5Yy0zLjI4LDIuODc1LTUuMTY3LDcuMDItNS4xODIsMTEuMzgydjMzICAgIGMwLjAxOSw1LjI1NiwyLjcxNiwxMC4xMzksNy4xNTUsMTIuOTU1YzIuMDM0LDEuMzE3LDMuNDc1LDMuMzc1LDQuMDE4LDUuNzM2YzUuMTgyLDIxLjAyMywxNC42OTcsNDAuNzMxLDI3LjkzNyw1Ny44NjQgICAgYzEuMzg4LDEuNjc4LDIuMTQ5LDMuNzg2LDIuMTU1LDUuOTY0djMwLjE1NGMwLjAwMywxNC40MTMtNy44NzEsMjcuNjc2LTIwLjUyNywzNC41NzNsMCwwbC03My42MDksNDAuMTQ1ICAgIEMxMTMuMDkxLDQ0NC42MjcsMTEyLjc2NCw0NDQuODA5LDExMi40MzYsNDQ1eiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=">
               </div>
            </div>
         </div>
      </section>
      <section id="profilContent">
         <div class="container">
            <div class="form-group row">
               <label for="example-text-input" class="col-2 col-form-label">Nom</label>
               <div class="col-10">
                  <input class="form-control" type="text" value="Nom" id="example-text-input">
               </div>
            </div>
            <div class="form-group row">
               <label for="example-search-input" class="col-2 col-form-label">Prenom</label>
               <div class="col-10">
                  <input class="form-control" type="Prenom" value="Prenom" id="example-search-input">
               </div>
            </div>
            <div class="form-group row">
               <label for="example-email-input" class="col-2 col-form-label">Email</label>
               <div class="col-10">
                  <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
               </div>
            </div>
            <div class="form-group row">
               <label for="example-url-input" class="col-2 col-form-label">Adresse web annonce</label>
               <div class="col-10">
                  <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
               </div>
            </div>
            <div class="form-group row">
               <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
               <div class="col-10">
                  <input class="form-control" type="tel" value="06 80 15 42 10" id="example-tel-input">
               </div>
            </div>
            <div class="form-group row">
               <label for="example-password-input" class="col-2 col-form-label">Mot de passe</label>
               <div class="col-10">
                  <input class="form-control" type="password" value="hunter2" id="example-password-input">
               </div>
            </div>
            <div class="aeration"><label for="avatar">Choissisez vos photos </label>
               <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
            </div>
            <hr class="mt-5">
            <h4 class="  mb-2 ">Informations de paiement</h4>
            <div class="d-block my-3">
               <div class="custom-control custom-radio">
                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                  <label class="custom-control-label" for="credit">Mastercard</label>
               </div>
               <div class="custom-control custom-radio">
                  <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                  <label class="custom-control-label" for="debit">Visa</label>
               </div>
               <div class="custom-control custom-radio">
                  <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                  <label class="custom-control-label" for="paypal">Paypal</label>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 mb-3">
                  <label for="cc-name">Nom de la carte</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                  <small class="text-muted">Nom de carte en entier</small>
                  <div class="invalid-feedback">
                     Name on card is required
                  </div>
               </div>
               <div class="col-md-6 mb-3">
                  <label for="cc-number">Numero de la carte </label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                  <div class="invalid-feedback">
                     Credit card number is required
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3 mb-3">
                  <label for="cc-expiration">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                  <div class="invalid-feedback">
                     Date d'expiration requise
                  </div>
               </div>
               <div class="col-md-3 mb-3">
                  <label for="cc-expiration">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                  <div class="invalid-feedback">
                     Code de sécurité requis
                  </div>
               </div>
            </div>
            <div class="form-check">
               <input type="checkbox" class="form-check-input" id="exampleCheck1">
               <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <div class="form-check">
               <input type="checkbox" class="form-check-input" id="exampleCheck1">
               <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button id="annoncePublication" type="button" class="btn btn-primary mt-4">Modifier mes informations</button>
         </div>
      </section>
      <!-- Footer -->
      <?php 
         include('inc/footer.php');
            ?>
      <!-- Footer -->
      <!-- POPPER -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
         crossorigin="anonymous"></script>
   </body>
</html>

