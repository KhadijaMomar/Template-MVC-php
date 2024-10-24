<?php
class Views{
    static function root(){
        if(isset($_GET['page'])){
            # print "Numero de page : ".$_GET['page'];
              # condition imbriquee
             $views = $_GET['page'];
             if($views == 1){
                 include_once './views/presentation.html';
             }
             if($views == 2){
                 include_once './views/formation.html';
             }
             if($views == 3){
                 include_once './views/contact.html';
             }
             else if($views >=3 || $views <= 0){
                 print "<p> La page n'existe pas</p>";
             }
         }else{
             include_once "./views/presentaion.html";
         }
    }
}
#appel la fonction de la classe 
Views::root();