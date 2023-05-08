<!DOCTYPE html>
<html>
  <head>
    <title>Vue.js Example</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
  </head>
  <body>



    <div id="app">
      <h2>{{ message }}</h2>
      <button @click="changeMessage">Change Message</button>
    </div>




    <script>
      var app = new Vue({
        el: '#app',
        data: {
          message: 'Hello, World!'
        },
       
        methods: {
          changeMessage: function() {
            this.message = 'Vue.js is awesome!'
          }
        }
      });
    </script>



  </body>
</html>


<?php



/*

$pdo = new PDO('mysql:dbname=gssprod; host=localhost' , 'root' ,'' ) ;





extract($_POST);




 $pdo->query("INSERT INTO `dossiers` (`lib_dos`,`etat_dos`,`date_crea_dos`,`id_pol`)  VALUES ('$lib_dos' ,'$etat_dos' , '$date_crea_dos' , '$id_pol' )  ");

*/


?>