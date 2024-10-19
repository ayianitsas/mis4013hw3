<h1>Albums</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Year</th>
      <th></th>
      
    </tr>
  </thead>
    <tbody>
<?php
while ($album = $albums->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $album['album_id']; ?></td>
    <td><?php echo $album['title']; ?></td>
    <td><?php echo $album['year']; ?></td>
    <td><a href="artists-of-albums.php?id=<?php echo $artist['album_id']; ?>">Artists</a></td>
  </tr>
<?php
}
?>
      
    </tbody>
  </table>
</div>




<h1>Artists</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Genre</th>
      <th></th>
      
    </tr>
  </thead>
    <tbody>
<?php
while ($artist = $artists->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $artist['artist_id']; ?></td>
    <td><?php echo $artist['artist_name']; ?></td>
    <td><?php echo $artist['artist_genre']; ?></td>
    <td><a href="labels-for-artists.php?id=<?php echo $artist['artist_id']; ?>">Labels</a></td>
  </tr>
<?php
}
?>
      
    </tbody>
  </table>
</div>
