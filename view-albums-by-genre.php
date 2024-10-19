<h1>Albums by Genre</h1>
<div class="card-group">

<?php
while ($album = $albums->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $album['title']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $genres = selectLabelsForArtists($album['album_id']);
  while ($genre = $genres->fetch_assoc()) {
?>
    <li class="list-group-item"><?php echo $label['label_name']; ?> - <?php echo $label['label_yearestablished']; ?></li>
<?php    
  }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Genre: <?php echo $artist['artist_genre']; ?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
