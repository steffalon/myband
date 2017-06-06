<?php
header("Content-Type: application/rss+xml; utf-8");
require_once("core/con.php");
//add model for articles

$sql = "SELECT * FROM article ORDER BY date DESC";

$query = $mysqli->query($sql);

?>
<?php echo '<?xml version="1.0" ?>' ?>
<rss xmlns:atom="http://www.w3.org/2005/Atom" version="2.0">
    <rss version="2.0">
        <channel>
            <title>CarTek - RSS feed</title>
            <atom:link>https://steffalon.com/bewijzenmap/proj/p1.4/</atom:link>
            <description>Krijg alle nieuws feed via RSS.</description>
            <language>nl-nl</language>
            <?php while ($row = mysqli_fetch_array($query)): ?>
                <item>
                    <title><?php echo $row['title']; ?></title>
                    <description><?php echo strip_tags($row['description']); ?></description>
                    <link>
                    https://steffalon.com/bewijzenmap/proj/p1.4/?page=article&id=<?php echo $row['id']; ?></link>
                    <pubDate><?php echo $row['date']; ?></pubDate>
                </item>
            <?php endwhile; ?>
        </channel>
    </rss>
