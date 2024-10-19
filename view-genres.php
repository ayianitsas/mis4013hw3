<h1>Genres</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th>ID</th>
    <th>Genre</th>
    <th>Popular Year</th>
      <th></th>
      
    </tr>
  </thead>
    <tbody>
<?php
while ($genre = $genres->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $genre['genre_id']; ?></td>
    <td><?php echo $genre['genre_name']; ?></td>
    <td><?php echo $genre['popular_year']; ?></td>
  </tr>
<?php
}
?>
      
    </tbody>
  </table>
</div>
