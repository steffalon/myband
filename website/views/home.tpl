<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
            {foreach from=$result_list item=article}
            <div class="section">
                <div>
                    <img class="photoNews" src="img/articlePhotos/{$article.photo}" alt="Een auto foto">
                </div>
                <div class="note">
                    <h3>{$article.title}</h3>
                    <p>{$article.description|strip_tags:false|truncate:300}</p>
                    <br>
                    <p><a href="?page=article&id={$article.id}">Lees meer</a></p>
                    <br>
                    <p>{$article.date}</p>
                </div>
            </div>
            {/foreach}
        </div>
    </div>
    <form method="post">
        <div class="buttonBottom">
            <div class="button" onclick="location.href='?page=home&morePage={$nextPage}&backTo';">
                <p>Vorige pagina</p>
            </div>
            <div class="button" style="border-left: white 0.05em solid" onclick="location.href='?page=home&morePage={$nextPage}';">
                <p>Volgende pagina</p>
            </div>
        </div>
    </form>
</div>