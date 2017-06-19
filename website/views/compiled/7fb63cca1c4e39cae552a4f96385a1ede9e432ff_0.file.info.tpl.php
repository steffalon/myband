<?php
/* Smarty version 3.1.30, created on 2017-06-19 09:20:07
  from "/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59477b27e2e1a0_04457614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fb63cca1c4e39cae552a4f96385a1ede9e432ff' => 
    array (
      0 => '/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/info.tpl',
      1 => 1497856332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59477b27e2e1a0_04457614 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="info">
    <div class="banner">
        <img src="img/banner.jpg" alt="Banner van info pagina.">
    </div>
    <div class="top">
        <h3>Contact</h3>
    </div>
    <div class="sides">
        <div id="myBtn" class="textInfo">
            <div class="text">
                <p>E-mail: 22257@ma-web.nl</p>
                <p>Gewijzigd op: 11 Junie 2017</p>
            </div>
        </div>
        <div class="photoSide">
            <img src="img/banner.jpg" alt="Een auto">
        </div>
    </div>
</div>

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>E-mail: 22257@ma-web.nl</p>
        <p>Gewijzigd op: 11 Juni 2017</p>
    </div>

</div>

<?php echo '<script'; ?>
 src="javascript/modal.js"><?php echo '</script'; ?>
>
<?php }
}
