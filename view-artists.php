<h1>Artists</h1>
<div class="table-responsive">
  <table class="table">

    <table style="background-color: #B17D85; color: black; border-collapse: collapse; width: 100%;">

  <thead>
    <tr>
    <th><strong>ID</strong></th>


      <th></th>

      <style>
  .left-align {
    text-align: left;
  }
</style>

<th class="left-align"><strong>Name</strong></th>
<th class="left-align"><strong>Genre</strong></th>

      
    </tr>
  </thead>
    <tbody>
          <table style="background-color: #B17D85; color: black; width: 100%; border-collapse: collapse;">
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
