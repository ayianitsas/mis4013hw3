<h1>Labels: Year Established</h1>
<div style="width: 400px; height: 400px;">
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
$labelsData = selectLabels();
$labelNames = [];
$dataPoints = [];

while ($label = $labelsData->fetch_assoc()) {

    $yearStr = $label['label_yearestablished']; 
    $year = (int) filter_var($yearStr, FILTER_SANITIZE_NUMBER_INT);
    
    $labelName = $label['label_name'];
    $labelNames[] = $labelName;
    
    $dataPoints[] = [
        'x' => $labelName,
        'y' => $year
    ];
}
?>

<script>
const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'scatter',
  data: {
    labels: <?php echo json_encode($labelNames); ?>,
    datasets: [{
      label: 'Year Established',
      data: <?php echo json_encode($dataPoints); ?>,
      backgroundColor: 'rgba(54, 162, 235, 0.5)',
      borderColor: 'rgba(54, 162, 235, 1)',
      pointRadius: 5
    }]
  },
  options: {
    scales: {
      x: {
        type: 'category', 

      },
      y: {
        beginAtZero: false,
        ticks: {

          callback: function(value) {
            return value; 
          }
        }
      }
    },
    plugins: {
      legend: {
        display: true
      },
      tooltip: {
        callbacks: {
          title: function(context) {

            return context[0].label;
          },
          label: function(context) {
            return 'Year: ' + context.parsed.y;
          }
        }
      }
    }
  }
});
</script>
