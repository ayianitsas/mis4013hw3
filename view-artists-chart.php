<h1>Artists Chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
// Convert the database result into arrays for labels and data
$labels = [];
$dataValues = [];

while ($artist = $artists->fetch_assoc()) {
    $labels[] = $artist['artist_name'];
    $dataValues[] = (int)$artist['num_labels'];
}
?>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: <?php echo json_encode($labels); ?>,
      datasets: [{
        data: <?php echo json_encode($dataValues); ?>,
        backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe', '#ffce56']
      }]
    }
  });
</script>

      
