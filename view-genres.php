<h1>Genres</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th>ID</th>
    <th>Genre</th>
    <th>Popular Year</th>
      <th></th>

  <table style="background-color: #B17D85; color: black; border-collapse: collapse; width: 100%;">
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
