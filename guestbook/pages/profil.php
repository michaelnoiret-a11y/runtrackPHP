<?php

 include "../include/config.php";

 if(!isset ($_SESSION['login']) ) {
    header("Location: ../index.php");
    exit;
}
else{
    $user = $_SESSION["login"];
}

// var_dump($user);
// var_dump($_SESSION);

$sql = "SELECT login, password FROM `user`";
$query = $pdo->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);

if(isset ($_POST["submit"])) {
    if(!empty($_POST["login"]) && !empty($_POST["mdp"])) {
        if($_POST["login"] !== $_SESSION["login"] && password_verify($_POST["mdp"], $result['password'])!== true) {
        $sql = "UPDATE `user` SET login = $_POST[login] WHERE id = $_SESSION[user][id]";
        $query = $pdo->prepare($sql);
        $query->execute();
    }
}       else {
        echo "no";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
    <body>
    <header>
        <nav>
            <?php if (isset($_SESSION["user"]) || isset($_SESSION["login"])) {
                //var_dump($_SESSION["user"]);
                echo "<a href='http://localhost/runtrackPHP/guestbook/index.php'>Accueil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/guestbook.php'>Livre d'or</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/profil.php'>Profil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/Messages.php'>Messages</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/deconnexion.php'>Deconnexion</a>";
                
            }else {
                   echo "<a href='http://localhost/runtrackPHP/guestbook/index.php'>Accueil</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/guestbook.php'>Livre d'or</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/inscription.php'>inscription</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/connexion.php'>Connexion</a>";
            }
            if (isset($_SESSION["login"]) ) {
                // var_dump($_SESSION["login"]);
            }
            ?>
        </nav>
    </header>
        </nav>
    </header>
    <main>
        <h1><?php if (isset($_SESSION["login"])) {
            echo "Bievenue" . " " . $_SESSION['login'] ;
        }
        else {
            echo "";
        }
    ?></h1>
         <table border="1">
            <tr>
            <th>id</th>
            <th>login</th>
            
             </tr>
             <td><?php echo $_SESSION["user"]["id"] ; ?></td>
            <td><?php echo $_SESSION["user"]["login"] ; ?></td>
            
            </tr>
            </table>
            <br>
        <form>
            Formulaire modification
            <br>
            login:
            <input type="text" name="login" placeholder="" value=<?php echo $_SESSION["login"]?>>
            password:
            <input type="password" name="mdp" placeholder="">
            <br>
            <input type="submit" name="submit" value="Je modifie mes identifiants">
        </form>
    </main>
    <footer>
        <nav>
            <?php if (isset($_SESSION["user"]) || isset($_SESSION["login"]) ) {
                //var_dump($_SESSION["user"]);
                echo "<a href='http://localhost/runtrackPHP/guestbook/index.php'>Accueil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/guestbook.php'>Livre d'or</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/profil.php'>Profil</a>";
                echo "<a href='http://localhost/runtrackPHP/guestbook/pages/deconnexion.php'>Deconnexion</a>";
            }else {
                   echo "<a href='http://localhost/runtrackPHP/guestbook/index.php'>Accueil</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/guestbook.php'>Livre d'or</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/connexion.php'>Connexion</a>";
                   echo "<a href='http://localhost/runtrackPHP/guestbook/pages/inscription.php'>inscription</a>";
            }
            if (isset($_SESSION["login"]) ) {
                // var_dump($_SESSION["login"]);
            }
            ?>
                 
        </nav>
    </footer>
          Créer par Michaël Noiret Bachelor IT spécialisation développement web première année 
    </body>
</html>