<?php
$sql = "SELECT * FROM article";

$query = $mysqli->query($sql);

?>

<script>
    $(document).ready(function() {
        $("#tags").autocomplete({
            source: [
                <?php while ($row = mysqli_fetch_array($query)): ?>
                { value: "<?php echo $row['title']; ?>", url: '?page=article&id=<?php echo $row['id']; ?>' },
                <?php endwhile; ?>
                { }
            ],
            select: function (event, ui) {
                window.location = ui.item.url;
            }
        });
    });
</script>