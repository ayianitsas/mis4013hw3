<h1>Labels</h1>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Year Established</th>
      <th></th>
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
    <td>
      <form method="post" action="albums-by-label.php">
        <input type="hidden" name="cid" value="<?php echo $label['label_id']; ?>">
        <button type="submit" class="btn btn-primary">Albums</button>
      </form>
    </td>
  </tr>
<?php
}
?>
      
    </tbody>
  </table>
</div>
