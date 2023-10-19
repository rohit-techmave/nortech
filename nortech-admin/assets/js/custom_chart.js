$(document).ready(function () {
    // Sample data - Replace this with your Nth Holder data
    var nthHolderData = [
        { label: "Nth Holder", values: [10, 15, 25, 20, 30,10, 12, 28, 17, 22,30, 20] }
        // Add more data as needed
    ];

    // Extract labels and datasets from the data
    var labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May' , 'Jun' , 'Jul' , 'Aug' , 'Sep' , 'Oct' , 'Nov' , 'Dec']; // X-axis labels
    var datasets = nthHolderData.map(holder => {
        return {
            label:'Nth Holder',
            data: holder.values,
            fill: true,
            borderColor: '#7c3aed',
            backgroundColor: '#7c3aed17',
            borderWidth: 2,
        };
    });

    // Get the canvas element and create a Chart.js instance
    var ctx = document.getElementById('nthHolderLineChart').getContext('2d');

    // Create the line chart
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: datasets
        },
        options: {
            title: {
                display: true,
                text: 'Nth Holder Line Chart'
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        color: '#878F9A' // Change y-axis label number color to blue
                    }
                },
                x: {
                    ticks: {
                        color: '#878F9A' // Change the label color to green
                    }
                }
            }
        }
    });

// nth circulation chart

 // Sample data for the bar chart
 var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May' , 'Jun' , 'Jul' , 'Aug' , 'Sep' , 'Oct' , 'Nov' , 'Dec'];
 var data = [45, 72, 28, 90, 60, 75, 50, 30, 85, 65, 40, 55];
 
 // Create the data for the chart
 var barData = {
     labels: months,
     datasets: [{
         label: 'NTH in Circulation',
         fill: true,
         borderColor: '#215be1',
         backgroundColor: '#7c3aed17',
         borderWidth: 2,
         data: data,
     }]
 };

 // Create the bar chart using Chart.js
 var ctx = document.getElementById('nthcirculation').getContext('2d');
 var myBarChart = new Chart(ctx, {
     type: 'bar',
     data: barData,
     options: {
         scales: {
             y: {
                 beginAtZero: true,
                 ticks: {
                    color: '#878F9A' // Change y-axis label number color to blue
                }
             },
             x: {
                ticks: {
                    color: '#878F9A' // Change the label color to green
                }
            }
         }
   
     }
 });


//  NTH Locked chart
// Sample data
var data = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May' , 'Jun' , 'Jul' , 'Aug' , 'Sep' , 'Oct' , 'Nov' , 'Dec'],
    datasets: [{
      label: 'My Dataset',
      data: [45, 72, 28, 90, 60, 75, 50, 30, 85, 65, 40, 55],
      fill: true,
         borderColor: '#215be1',
         backgroundColor: '#7c3aed17',
      borderWidth: 2,
      pointBackgroundColor: ['red', 'blue', 'green', 'yellow', 'orange', 'purple'], // Customize the point colors
      pointBorderColor: 'black', // Customize the point border color
    }]
  };
  
  // Get the canvas element
  var ctx = document.getElementById('nthlocked').getContext('2d');
  
  // Create the chart with custom animation
  var chart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: {
      animation: {
        duration: 1500, // Set the animation duration (in milliseconds)
      },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });


//   reward chart start

var ctx = document.getElementById("rewardChart").getContext("2d");

var data = {
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May' , 'Jun' , 'Jul' , 'Aug' , 'Sep' , 'Oct' , 'Nov' , 'Dec'],

  datasets: [
    {
      label: "Bars",
      fill: true,
      borderColor: '#fc6f6f',
      backgroundColor: '#fc6f6f45',
      borderWidth: 1,
      data: [45, 72, 28, 90, 60, 75, 50, 30, 85, 65, 40, 55],
      type: "bar"
    },
    {
      label: "Lines",
      fill: true,
      borderColor: '#215be1',
      backgroundColor: '#fc6f6f45',
      borderWidth: 2,
      data: [42, 70, 28, 90, 60, 75, 50, 30, 85, 65, 40, 55],
      fill: false,
      type: "line"
    }
  ]
};

var options = {
  scales: {
    x: {
      beginAtZero: true,
      // Customize X-axis settings
    },
    y: {
      // Customize Y-axis settings
    }
  }
};

var chart = new Chart(ctx, {
  type: "bar",
  data: data,
  options: options
});






  









});

