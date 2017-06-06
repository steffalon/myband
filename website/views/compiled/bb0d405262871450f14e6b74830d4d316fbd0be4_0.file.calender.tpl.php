<?php
/* Smarty version 3.1.30, created on 2017-06-06 11:59:05
  from "/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/calender.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59367ce9ca3042_49497792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb0d405262871450f14e6b74830d4d316fbd0be4' => 
    array (
      0 => '/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/calender.tpl',
      1 => 1496743145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59367ce9ca3042_49497792 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"><?php echo '</script'; ?>
>
<div class="calender">
    <div id="list" class="bar">
        <h3>Agenda</h3>
        </div>
        <button id="doAjax" onclick="nextPage()">More items</button>
    </div>
</div>
<?php echo '<script'; ?>
 src="javascript/calender.js"><?php echo '</script'; ?>
><?php }
}
