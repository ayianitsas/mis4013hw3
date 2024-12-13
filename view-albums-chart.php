<h1>Labels Per Album</h1>
<div style="width: 400px; height: 400px;">
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php

$albumsData = selectAlbums();
$titles = [];
$numLabels = [];

while ($album = $albumsData->fetch_assoc()) {
    $titles[] = $album['title'];
    $numLabels[] = (int)$album['num_labels'];
}
?>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?php echo json_encode($titles); ?>,
      datasets: [{
        label: "Number of Labels",
        data: <?php echo json_encode($numLabels); ?>,
        backgroundColor: 'rgba(75, 192, 192, 0.5)', // semi-transparent teal
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
      }]
    },
    options: {
      plugins: {
        legend: {
          display: true
        }
      },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>


