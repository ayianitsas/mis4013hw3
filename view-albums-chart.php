<h1>Albums Per Artist</h1>
<div style="width: 400px; height: 400px;">
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [
<?php
while ($album = $albums->fetch_assoc()) {
      echo $album['num_albums'] . ", ";
}
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$albums = selectAlbums();
while ($album = $albums->fetch_assoc()) {
      echo "'" . $album['album_name'] . "', ";
}
?>
    ]
},
  });
</script>

