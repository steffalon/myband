<?php
/* Smarty version 3.1.30, created on 2017-05-31 13:48:40
  from "/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592ead98978f14_30131150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '930063150e8c7f11b6547aa8310145938ddf2238' => 
    array (
      0 => '/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/login.tpl',
      1 => 1496231310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592ead98978f14_30131150 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="login">
    <form method="post">
        <label for="username">Username
        <br>
            <input type="text" name="username" autofocus></label>
        <br>
        <label for="password">Password
        <br>
            <input type="password" name="password"></label>
        <br>
        <input type="submit" name="login" value="Login">
    </form>
</div><?php }
}
