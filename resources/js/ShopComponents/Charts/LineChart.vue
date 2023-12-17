<script setup>
import * as echarts from 'echarts';

</script>
<script>

// Create the echarts instance
var myChart = echarts.init(document.getElementById('maincharts'));

// Draw the chart
myChart.setOption({
  title: {
    text: 'ECharts Getting Started Example'
  },
  tooltip: {},
  xAxis: {
    data: ['shirt', 'cardigan', 'chiffon', 'pants', 'heels', 'socks']
  },
  yAxis: {},
  series: [
    {
      name: 'sales',
      type: 'bar',
      data: [5, 20, 36, 10, 10, 20]
    }
  ]
});
</script>
<template>
    <div id="maincharts" style="width: 600px; height:400px;"></div>
</template>