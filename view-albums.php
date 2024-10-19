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

