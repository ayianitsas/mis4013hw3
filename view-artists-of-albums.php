<h1>Artists of Albums</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th>ID</th>
    <th>Artist</th>
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
  </tr>
<?php
}
?>
      
    </tbody>
  </table>
</div>
