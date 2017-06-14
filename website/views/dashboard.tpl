<div class="dashboard">
    <div class="notify">
        <p>Welkom {$naam}. Dit is uw dashboard voor uw account. Dit kan handig zijn als je iets
            wilt veranderen in uw account. Bijvoorbeeld wachtwoord, gebruikersnaam of profiel foto.</p>
    </div>
    <div class="nextTo">
        <div class="profileChanges">
            <div class="info">
                <div class="infoPhoto">
                    <img src="img/Myself.jpg" width="150px" height="150px" alt="This is me">
                </div>
                <div class="infoText">
                    <p>Naam: {$naam}</p>
                    <p>Email: {$email}</p>
                </div>
            </div>
            <div class="fields">
                <form method="post">
                    <label for="username">Gebruikersnaam aanpassen</label>
                    <input type="text" name="username" value="{$username}">
                    <br>
                    <label for="password">Wachtwoord veranderen</label>
                    <input type="password" name="password">
                    <br>
                    <label for="password2">Wachtwoord opnieuw</label>
                    <input type="password" name="password2">
                    <input type="submit" class="button" name="save" value="Save">
                </form>
            </div>
        </div>
        <div class="nieuws">
            <div class="header">
                <h4>Nieuws van vandaag</h4>
            </div>
            {foreach from=$result_list item=article}
            <div class="section">
                <div>
                    <img class="photoNews" src="img/articlePhotos/{$article.photo}" alt="Een test foto">
                </div>
                <div class="note">
                    <h3>{$article.title}</h3>
                    <p>{$article.description|strip_tags:false|truncate:100}</p>
                    <p><a href="?page=article&id={$article.id}">Lees meer</a></p>
                    <br>
                    <p>Geupload op: {$article.date}</p>
                </div>
            </div>
            {/foreach}
        </div>
    </div>
    <div class="createArticle">
        <form method="post" enctype="multipart/form-data" autocomplete="off">
            <h3>Add article</h3>
            <br>
            <label for="title">Titel</label>
            <br>
            <input class="fields" type="text" name="title" placeholder="De naam van deze artiekel">
            <label class="buttonLabel" for="fileToUpload"><i class="fa fa-file-image-o" aria-hidden="true"> Foto</i></label>
            <input class="sendPhoto" type="file" name="fileToUpload" size="25" id="fileToUpload" accept="image/*" aria-describedby="fileHelp">
            <textarea name="msg" id="msg""></textarea>
            <input class="sendArticle" name="send" type="submit" value="verzenden">
        </form>
    </div>
</div>
<script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'msg' );
</script>