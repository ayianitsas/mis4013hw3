<h1>Labels Years Established</h1>
<div style="width: 400px; height: 400px;">
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
// Fetch data from the database
$labelsData = selectLabels();
$dataPoints = [];
$labelNames = [];

$index = 1; // Start indexing labels at 1 for readability
while ($label = $labelsData->fetch_assoc()) {
    $yearStr = $label['label_yearestablished']; // e.g. "Est 1972"
    // Extract the numeric year from the string
    $year = (int) filter_var($yearStr, FILTER_SANITIZE_NUMBER_INT); // This extracts digits, e.g. 1972

    // Store the label name and data point
    $labelNames[] = $label['label_name'];
    $dataPoints[] = ['x' => $index, 'y' => $year];
    $index++;
}
?>

<script>
const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'scatter',
  data: {
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
        type: 'linear',
        position: 'bottom',
        title: {
          display: true,
          text: 'Label Index'
        },
        ticks: {
          // Optional: If you want to show label names on the x-axis, 
          // you can create a custom callback. Since it's a numeric axis, 
          // map the index back to a label name.
          callback: function(value, index, values) {
            // value is the numeric x (1-based), so subtract 1 for array index
            return <?php echo json_encode($labelNames); ?>[value - 1] || value;
          }
        }
      },
      y: {
        title: {
          display: true,
          text: 'Year Established'
        },
        beginAtZero: false
      }
    },
    plugins: {
      legend: {
        display: true
      },
      tooltip: {
        callbacks: {
          // Show the label name and year in the tooltip
          title: function(context) {
            const dataIndex = context[0].dataIndex;
            const labelsArray = <?php echo json_encode($labelNames); ?>;
            return labelsArray[dataIndex];
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
