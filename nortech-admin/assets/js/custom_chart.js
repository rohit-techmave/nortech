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
                        color: '#ffffff' // Change y-axis label number color to blue
                    }
                },
                x: {
                    ticks: {
                        color: '#ffffff' // Change the label color to green
                    }
                }
            },  plugins: {
                tooltip: {
                    mode: 'index',
                    intersect: false,
                }
            },
            tooltips: {
                callbacks: {
                    title: function(tooltipItem) {
                        return labels[tooltipItem[0].dataIndex];
                    },
                    label: function(tooltipItem) {
                        return 'Value: ' + dataValues[tooltipItem.dataIndex];
                    },
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
 var nthcirculation = new Chart(ctx, {
     type: 'bar',
     data: barData,
     options: {
         scales: {
             y: {
                 beginAtZero: true,
                 ticks: {
                    color: '#ffffff' // Change y-axis label number color to blue
                }
             },
             x: {
                ticks: {
                    color: '#ffffff' // Change the label color to green
                }
            }
         },  plugins: {
            tooltip: {
                mode: 'index',
                intersect: false,
            }
        },
        tooltips: {
            callbacks: {
                title: function(tooltipItem) {
                    return labels[tooltipItem[0].dataIndex];
                },
                label: function(tooltipItem) {
                    return 'Value: ' + dataValues[tooltipItem.dataIndex];
                },
            }
        }
   
     }
 });


//  NTH Locked chart
// Sample data
var data = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May' , 'Jun' , 'Jul' , 'Aug' , 'Sep' , 'Oct' , 'Nov' , 'Dec'],
    datasets: [{
      label: 'NTH Locked',
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
  var nthlocked = new Chart(ctx, {
    type: 'line',
    data: data,
    options: {
      animation: {
        duration: 1500, // Set the animation duration (in milliseconds)
      },
      scales: {
        y: {
            beginAtZero: true,
            ticks: {
                color: '#ffffff' // Change y-axis label number color to blue
            }
        },
        x: {
            ticks: {
                color: '#ffffff' // Change the label color to green
            }
        }
    },  plugins: {
        tooltip: {
            mode: 'index',
            intersect: false,
        }
    },
    tooltips: {
        callbacks: {
            title: function(tooltipItem) {
                return labels[tooltipItem[0].dataIndex];
            },
            label: function(tooltipItem) {
                return 'Value: ' + dataValues[tooltipItem.dataIndex];
            },
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
      label: "Reward Chart",
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
        y: {
            beginAtZero: true,
            ticks: {
                color: '#ffffff' // Change y-axis label number color to blue
            }
        },
        x: {
            ticks: {
                color: '#ffffff' // Change the label color to green
            }
        }
    },  plugins: {
        tooltip: {
            mode: 'index',
            intersect: false,
        }
    },
    tooltips: {
        callbacks: {
            title: function(tooltipItem) {
                return labels[tooltipItem[0].dataIndex];
            },
            label: function(tooltipItem) {
                return 'Value: ' + dataValues[tooltipItem.dataIndex];
            },
        }
    }
};

var rewardChart = new Chart(ctx, {
  type: "bar",
  data: data,
  options: options
});



// NTH price chart
var ctx = document.getElementById('pricenthchart').getContext('2d');

// Sample data
var dataValues = [42, 70, 28, 90, 60, 75, 50, 30, 85, 65, 40, 55];
var labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May' , 'Jun' , 'Jul' , 'Aug' , 'Sep' , 'Oct' , 'Nov' , 'Dec'];

// Define a function to set bar colors based on y values
function getColorBasedOnValue(value) {
    // You can define your own logic here to map values to colors
    // For example, let's use a gradient color based on the value.
    var max = Math.max(...dataValues);
    var min = Math.min(...dataValues);
    var normalizedValue = (value - min) / (max - min);
    var red = Math.round(255 * normalizedValue);
    var green = 100;
    var blue = 100;
    return `rgba(${red}, ${green}, ${blue}, 0.6)`;
}

// Create an array of background colors based on data values
var backgroundColors = dataValues.map(getColorBasedOnValue);

var data = {
    labels: labels,
    datasets: [{
        label: 'NTH history Price',
        data: dataValues,
        backgroundColor: backgroundColors,
        borderColor: backgroundColors, // Border color matches the bar color
        borderWidth: 1
    }]
};

var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
        scales: {
            y: {
                ticks: {
                    color: '#ffffff' // Change y-axis label number color to blue
                }
            },
            x: {
                ticks: {
                    color: '#ffffff' // Change the label color to green
                }
            }
        },  plugins: {
            tooltip: {
                mode: 'index',
                intersect: false,
            }
        },
        tooltips: {
            callbacks: {
                title: function(tooltipItem) {
                    return labels[tooltipItem[0].dataIndex];
                },
                label: function(tooltipItem) {
                    return 'Value: ' + dataValues[tooltipItem.dataIndex];
                },
            }
        }
    }
});

  









});

