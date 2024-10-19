<h1>Labels for Artists</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Year Established</th>
    </tr>
  </thead>
    <tbody>
<?php
while ($label = $labels->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $label['label_id']; ?></td>
    <td><?php echo $label['label_name']; ?></td>
    <td><?php echo $label['label_yearestablished']; ?></td>
  </tr>
<?php
}
?>
      
    </tbody>
  </table>
</div>
