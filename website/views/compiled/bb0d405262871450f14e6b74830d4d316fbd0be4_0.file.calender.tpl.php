<?php
/* Smarty version 3.1.30, created on 2017-06-09 12:00:19
  from "/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/calender.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593a71b3c05e97_15119423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb0d405262871450f14e6b74830d4d316fbd0be4' => 
    array (
      0 => '/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/calender.tpl',
      1 => 1497002405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593a71b3c05e97_15119423 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="calender">
    <div id="list" class="bar">
        <h3>Agenda</h3>
        </div>
        <button id="doAjax">More items</button>
    </div>
</div>
<?php echo '<script'; ?>
 src="javascript/calender.js"><?php echo '</script'; ?>
><?php }
}
