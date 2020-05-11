// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  
  type: 'bar',
  data: {
    labels: ["Jan","Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agust", "Sept", "Okt", "Nov", "Des",],
    datasets: [{
      
      label: "Total Laporan Kerusakan",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: T2019,
    }],
  },
  options: {
    
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 0
        },

        beginAtZero: true,
        
      }],
      yAxes: [{

        ticks: {
          min: 0,
          max: 130,
          maxTicksLimit: 15,
          
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: true,
      is3D: true
    }
  }
});
