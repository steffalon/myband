<?php
/* Smarty version 3.1.30, created on 2017-06-27 14:31:33
  from "/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/dashboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59525025ef5e25_01192386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73a8645ad25b2f09ca65d0670e0430284979f04f' => 
    array (
      0 => '/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/views/dashboard.tpl',
      1 => 1498481026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59525025ef5e25_01192386 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/Users/Simon/Desktop/Projecten Media collage amsterdam/p1.4/proj/myband/website/libs/plugins/modifier.truncate.php';
?>
<div class="dashboard">
    <div class="notify">
        <p>Welkom <?php echo $_smarty_tpl->tpl_vars['naam']->value;?>
. Dit is uw dashboard voor uw account. Dit kan handig zijn als je iets
            wilt veranderen in uw account. Bijvoorbeeld wachtwoord, gebruikersnaam of profiel foto.</p>
    </div>
    <div class="nextTo">
        <div class="profileChanges">
            <div class="info">
                <div class="infoPhoto">
                    <img src="img/Myself.jpg" width="150" height="150" alt="This is me">
                </div>
                <div class="infoText">
                    <p>Naam: <?php echo $_smarty_tpl->tpl_vars['naam']->value;?>
</p>
                    <p>Email: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</p>
                </div>
            </div>
            <div class="fields">
                <form method="post">
                    <label for="username">Gebruikersnaam aanpassen</label>
                    <input type="text" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">
                    <br>
                    <label for="password">Wachtwoord veranderen</label>
                    <input type="password" id="password" name="password">
                    <br>
                    <label for="password2">Wachtwoord opnieuw</label>
                    <input type="password" id="password2" name="password2">
                    <input type="submit" class="button" name="save" value="Save">
                </form>
            </div>
        </div>
        <div class="nieuws">
            <div class="header">
                <h4>Nieuws van vandaag</h4>
            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result_list']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
            <div class="section">
                <div>
                    <img class="photoNews" src="img/articlePhotos/<?php echo $_smarty_tpl->tpl_vars['article']->value['photo'];?>
" alt="Een test foto">
                </div>
                <div class="note">
                    <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h3>
                    <p><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['article']->value['description']),100);?>
</p>
                    <p><a href="?page=article&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">Lees meer</a></p>
                    <br>
                    <p>Geupload op: <?php echo $_smarty_tpl->tpl_vars['article']->value['date'];?>
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
    <div class="createArticle">
        <form method="post" enctype="multipart/form-data" autocomplete="off">
            <h3>Add article</h3>
            <br>
            <label for="title">Titel</label>
            <br>
            <input class="fields" id="title" type="text" name="title" placeholder="De naam van deze artiekel">
            <label class="buttonLabel" for="fileToUpload"><i class="fa fa-file-image-o" aria-hidden="true"> Foto</i></label>
            <input class="sendPhoto" type="file" name="fileToUpload" size="25" id="fileToUpload" accept="image/*">
            <textarea name="msg" id="msg"></textarea>
            <input class="sendArticle" name="send" type="submit" value="verzenden">
        </form>
    </div>
</div>
<?php echo '<script'; ?>
 src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    CKEDITOR.replace( 'msg' );
<?php echo '</script'; ?>
><?php }
}
