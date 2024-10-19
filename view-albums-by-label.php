<h1>Albums by Label</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Year Established</th>
    <th>Album Title</th>
    <th>Year</th>
    </tr>
  </thead>
    <tbody>
<?php
while ($album = $albums->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $album['label_id']; ?></td>
    <td><?php echo $album['label_name']; ?></td>
    <td><?php echo $album['label_yearestablished']; ?></td>
    <td><?php echo $album['title']; ?></td>
    <td><?php echo $album['year']; ?></td>
  </tr>
<?php
}
?>
      
    </tbody>
  </table>
</div>
