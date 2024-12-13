<h1>Labels Years Established</h1>
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
while ($label = $labels->fetch_assoc()) {
      echo $label['label_yearestablished'] . ", ";
}
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$labels = selectLabels();
while ($label = $labels->fetch_assoc()) {
      echo "'" . $label['label_name'] . "', ";
}
?>
    ]
},
  });
</script>
