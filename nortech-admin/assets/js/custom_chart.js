$(document).ready(function() {
 

        // Sample data (replace this with your own data)
        var balanceData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Payment',
                data: [500, 1050, 900, 400, 2100, 3000],
                borderColor: '#50abff',
                backgroundColor: '#50abff1c',
                borderWidth: 2,
                fill: true,
            },
            {
                label: 'Rewards',
                data: [700, 900, 1300, 2500, 400, 3500],
                borderColor: '#7c3aed',
                backgroundColor: '#7c3aed66',
                borderWidth: 2,
                fill: true,
            }
        ]

        
        };

        var ctx = document.getElementById('rewardChart').getContext('2d');

        var balanceChart = new Chart(ctx, {
            type: 'line',
            data: balanceData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Month',
                            color: '#ffffff'
                        },
                        ticks: {
                    color: '#ffffff' // Change the x-axis ticks text color to blue
                }
                    },
                   
                }
            }
        });
   
  });