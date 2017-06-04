<?php
/* Smarty version 3.1.30, created on 2017-06-03 17:07:18
  from "/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5932d0a67b9b98_57218770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f760837ec52846702921083f14059d79056262b3' => 
    array (
      0 => '/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/navigation.tpl',
      1 => 1496502438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5932d0a67b9b98_57218770 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav>
  <ul>
    <li><a href="?page=home">CarTek</a></li>
      <?php if ($_smarty_tpl->tpl_vars['navBarLogout']->value == true) {?>
          <li class="setright"><a href="?page=home&logout">Logout</a></li>
          <li class="setrightMini"><a href="?page=dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i></a></li>
      <?php } else { ?>
          <li class="setright"><a href="?page=login">Login</a></li>
      <?php }?>
  </ul>
</nav>
<?php }
}
