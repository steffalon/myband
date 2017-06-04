<?php
/* Smarty version 3.1.30, created on 2017-06-04 10:29:58
  from "/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5933c506805769_13373845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fac72a5b82d2b83e5ce47abeab344fdc28da8186' => 
    array (
      0 => '/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/article.tpl',
      1 => 1496564997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5933c506805769_13373845 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/libs/plugins/modifier.truncate.php';
?>
<div class="article">
    <div class="text">
        <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
        <br>
        <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
        <br>
        <p>Geupload op: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</p>
    </div>
    <div class="default">
        <div class="share">
            <h4>Bericht delen</h4>
            <div class="sbutton">
                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="42px" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>
                <div><a href="https://twitter.com/share?text=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
%20-%20<?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['description']->value),70);?>
%20Lees%20meer:%20" class="twitter-share-button" data-size="large" data-show-count="false">Tweet</a><?php echo '<script'; ?>
 async src="https://platform.twitter.com/widgets.js" charset="utf-8"><?php echo '</script'; ?>
></div>
            </div>
        </div>
        <div class="photo">
            <img src="../img/articlePhotos/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="Article photo">
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="../javascript/facebookSDK.js"><?php echo '</script'; ?>
><?php }
}
