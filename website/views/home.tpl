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
                <input class="zoek" type="text" placeholder="Zoek hier voor nieuwberichten">
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
</div>