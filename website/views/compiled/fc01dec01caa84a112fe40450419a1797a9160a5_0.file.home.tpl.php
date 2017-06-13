<?php
/* Smarty version 3.1.30, created on 2017-06-12 14:38:11
  from "/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593e8b33f134e9_24375559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc01dec01caa84a112fe40450419a1797a9160a5' => 
    array (
      0 => '/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/home.tpl',
      1 => 1497271091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593e8b33f134e9_24375559 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/libs/plugins/modifier.truncate.php';
?>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.12.4.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"><?php echo '</script'; ?>
>
<div class="home">
    <div class="banner">
        <img src="img/banner.jpg" alt="Banner van CarTek website.">
    </div>
    <div class="news">
        <div class="header">
            <div class="row">
                <h3>Nieuws</h3>
            </div>
            <div class="rowSearch">
                <input class="zoek" id="tags" type="search" placeholder="Zoek hier voor nieuwberichten">
            </div>
        </div>
        <div class="newsContent">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result_list']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
            <div class="section">
                <div>
                    <img class="photoNews" src="img/articlePhotos/<?php echo $_smarty_tpl->tpl_vars['article']->value['photo'];?>
" alt="Een auto foto">
                </div>
                <div class="note">
                    <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h3>
                    <p><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['article']->value['description']),300);?>
</p>
                    <br>
                    <p><a href="?page=article&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">Lees meer</a></p>
                    <br>
                    <p><?php echo $_smarty_tpl->tpl_vars['article']->value['date'];?>
</p>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
    <form method="post">
        <div class="buttonBottom">
            <?php if ($_smarty_tpl->tpl_vars['nextPage']->value > 3) {?>
                <div class="button" onclick="location.href='?page=home&morePage=<?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
&backTo';">
                    <p>Vorige pagina</p>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['result_list']->value != null) {?>
                <div class="button" style="border-left: white 0.05em solid" onclick="location.href='?page=home&morePage=<?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
';">
                    <p>Volgende pagina</p>
                </div>
            <?php }?>
        </div>
    </form>
</div><?php }
}
