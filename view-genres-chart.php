<h1>Labels Per Genre</h1>
<div style="width: 400px; height: 400px;">
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php

$genres = selectGenres();
$genreNames = [];
$numLabels = [];

while ($genre = $genres->fetch_assoc()) {
    $genreNames[] = $genre['genre_name'];
    $numLabels[] = (int)$genre['num_labels'];  
}
?>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: <?php echo json_encode($genreNames); ?>,
      datasets: [{
        label: "Number of Labels",
        data: <?php echo json_encode($numLabels); ?>,
        borderColor: 'rgba(75,192,192,1)',
        fill: false,
        tension: 0.1
      }]
    },
    options: {
      plugins: {
        legend: {
          display: true
        }
      }
    }
  });
</script>

