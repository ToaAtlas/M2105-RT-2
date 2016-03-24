<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 24/03/2016
 * Time: 14:50
 */
include '../functions.php';


getHeader(true,'Exo3');


if (array_key_exists("navigateur", $_POST)) {
    $_SESSION["navigateur"]=$_POST["navigateur"];
    echo "Navigateur séléctionné: <br>";
    print_r($_POST["navigateur"]);
    echo "&nbsp;  <a class='btn btn-info col-md-4' href='".$_SERVER["PHP_SELF"]."'> Retour au formulaire</a>";
}else {
    ?>


    <div class="container">
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <fieldset>
            <legend>Quel est votre navigateur favori?</legend>
            <fieldset>
                <div>
                    <label><input name="navigateur" type="radio" value="Chrome"> Chrome </label>
                </div>
                <div>
                    <label><input name="navigateur" type="radio" value="Firefox"> Firefox </label>
                </div>
                <div>
                    <label><input name="navigateur" type="radio" value="Chrome"> IE/Edge </label>
                </div>
                <div>
                    <label><input name="navigateur" type="radio" value="Chrome"> Chrome </label>
                </div>
                <input class="btn btn-default" type="submit" value="Valider"/>
            </fieldset>
        </fieldset>
        </form>
    </div>


    <?php
}
    getFooter();
?>