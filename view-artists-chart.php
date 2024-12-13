<h1>Labels Per Artist</h1>
<div style="width: 200px; height: 200px;">
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
while ($artist = $artists->fetch_assoc()) {
      echo $artist['num_labels'] . ", ";
}
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$artists = selectArtists();
while ($artist = $artists->fetch_assoc()) {
      echo "'" . $artist['artist_name'] . "', ";
}
?>
    ]
},
  });
</script>

