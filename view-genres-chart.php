<h1>Labels Per Genre</h1>
<div style="width: 400px; height: 400px;">
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    label: 'Labels Per Genre',
    data: {
    datasets: [{
        data: [
<?php
while ($genre = $genres->fetch_assoc()) {
      echo $genre['num_labels'] . ", ";
}
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$genres = selectGenres();
while ($genre = $genres->fetch_assoc()) {
      echo "'" . $genre['genre_name'] . "', ";
}
?>
    ]
},
  });
</script>
