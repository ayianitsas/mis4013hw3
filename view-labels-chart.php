<h1>Labels Years Established</h1>
<div style="width: 400px; height: 400px;">
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
$labelsData = selectLabels();
$labelNames = [];
$dataPoints = [];

while ($label = $labelsData->fetch_assoc()) {
    // Extract the numeric year from the "Est ####" string
    $yearStr = $label['label_yearestablished']; // e.g. "Est 1972"
    $year = (int) filter_var($yearStr, FILTER_SANITIZE_NUMBER_INT);
    
    // Store the label name
    $labelName = $label['label_name'];
    $labelNames[] = $labelName;
    
    // For a category axis, you can set x to the label name directly
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
        // Using a category axis so the x-values map directly to the label names
      },
      y: {
        beginAtZero: false,
        ticks: {
          // Just return the numeric year directly
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
            // The title will show the label name from the category
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
