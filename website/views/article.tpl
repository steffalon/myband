<div class="article">
    <div class="text">
        <h3>{$title}</h3>
        <br>
        <p>{$description}</p>
        <br>
        <p>Geupload op: {$date}</p>
    </div>
    <div class="default">
        <div class="share">
            <h4>Bericht delen</h4>
            <div class="sbutton">
                <div class="fb-like" data-href="https://steffalon.com/bewijzenmap/proj/p1.4/?page=article&id={$id}" data-width="42px" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>
                <div><a href="https://twitter.com/share?text={$title}%20-%20{$description|strip_tags:false|truncate:70}%20Lees%20meer:%20" class="twitter-share-button" data-size="large" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
            </div>
        </div>
        <div class="photo">
            <img src="img/articlePhotos/{$photo}" alt="Article photo">
        </div>
    </div>
</div>