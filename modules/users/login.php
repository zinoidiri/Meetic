<?php
include_once "./libs/utility.php";
include_once "./modules/users/user-model.php"

?>

<h3 class="title">
    <span>Login</span>
</h3>
<?php if (isset($msg_crud)) {
    echo "<p class=\"msg\">$msg_crud</p>";
}?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="create f-col">
    <input name="email" type="mail" placeholder="mail" class="input">
    <input name="mdp" type="password" placeholder="password" class="input">
    <div class="f-row">
      <input id="btnLoginUser" name="login" type="submit" value="Login" class="btn">
    </div>
</form>
<p><?php echo $message; ?></p>
<p id="registerBtn" class="btn-sign">register</p>

<?php


if (isset($_GET["login"])) {

    loginUser();

}

?>

