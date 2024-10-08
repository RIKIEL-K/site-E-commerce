<?php

if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
    ?>
    <script>
    window.location.href = 'utilisateur.php';
    </script>
<?php
    exit();
    }else{
        include'./header1.php';

        $id_utilisateur=$_GET['id'];
        // $utilisateur = getUtilisateurById($id_utilisateur);
           $status = "actif";
          $result=updateStatus($status,$id_utilisateur);
        //   var_dump($utilisateur);
            if($result){
            ?>
                <script>
                window.location.href = 'utilisateur.php';
                </script>
            <?php
                exit();
             }else{

             }
    }
?>