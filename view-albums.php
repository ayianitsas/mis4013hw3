<h1>Albums</h1>
<div class="table-responsive">
  <table class="table">
      <table style="background-color: #B17D85; color: black; border-collapse: collapse; width: 100%;">
  <thead>

     
    <tr>
    <the><strong>ID</strong></th>
    <th><strong>Title</strong></th>
    <th><strong>Year</strong></th>
      <th></th>
 
      
    </tr>
  </thead>
    <tbody>
      <table style="background-color: #B17D85; color: black; width: 100%; border-collapse: collapse;">

<?php
while ($album = $albums->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $album['album_id']; ?></td>
    <td><?php echo $album['title']; ?></td>
    <td><?php echo $album['year']; ?></td>
   
  </tr>
<?php
}
?>
      
    </tbody>
  </table>
</div>

