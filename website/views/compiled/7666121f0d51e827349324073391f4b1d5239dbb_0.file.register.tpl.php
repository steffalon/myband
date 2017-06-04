<?php
/* Smarty version 3.1.30, created on 2017-05-30 20:05:56
  from "/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592db484cdf306_99379808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7666121f0d51e827349324073391f4b1d5239dbb' => 
    array (
      0 => '/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/register.tpl',
      1 => 1496167551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592db484cdf306_99379808 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="register">
    <form method="post">
        <label for="naam">Naam
            <br>
            <input type="text" name="naam" autofocus></label>
        <br>
        <label for="gebruikersnaam">Gebruikersnaam
            <br>
            <input type="text" name="gebruikersnaam"></label>
        <br>
        <label for="email">E-mail
            <br>
            <input type="email" name="email"></label>
        <br>
        <label for="password">Wachtwoord
            <br>
            <input type="password" name="password"></label>
        <br>
        <label for="password2">Wachtwoord opnieuw
            <br>
            <input type="password" name="password2"></label>
        <br>
        <input type="submit" name="registreren" value="Registreren">
    </form>
</div><?php }
}
