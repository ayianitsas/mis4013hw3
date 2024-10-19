<h1>Artists with Labels</h1>
<div class="card-group">

<?php
while ($artist = $artists->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $artist['artist_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $labels = selectLabelsForArtists($artist['artist_id']);
  while ($label = $labels->fetch_assoc()) {
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
