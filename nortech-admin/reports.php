<?php include("header.php") ?>
<div class="container-fluid relative px-3">
   <div class="layout-specing">
      <div class="flex justify-between items-center breadcrumsArea">
         <div>
            <ul class="breadcrumb tracking-[0.5px] mb-0 inline-block mt-1 flex_ulbreadcrum">
               <li class="btnbackbrd">
                  <a href="index.php">
                     <div class="buttonbackpage"><i class="fa-solid fa-chevron-left"></i></div>
                  </a>
               </li>
               <li class="inline breadcrumb-item   duration-500 text-slate-400 dark:text-white/60 hover:text-slate-900 dark:hover:text-white"><a href="javascript:void(0)">Platform</a></li>
               <li class="inline breadcrumb-item   duration-500 text-slate-900 dark:text-white" aria-current="page">Reports</li>
            </ul>
         </div>
         <!-- <div>
            <a href="upload-work.html" class="btn btn-icon btn-sm rounded-full bg-gray-800/5 hover:bg-gray-800/10 dark:bg-gray-800 dark:hover:bg-gray-600 border border-gray-800/5 dark:border-gray-800 text-slate-900 dark:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus h-4 w-4"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>
            </div> -->
      </div>
      
      
      <div class="reports__chtarea row">
                    <div class="col-lg-6">
               <div class="customblck_card bggredient">
                  <div class="blcard_header header_wbtn">
                  <div class="chartheader_media">
									<div class="coin-logo bg-primary-transparent">
                              <iconify-icon icon="tdesign:member" class="cf cf-eth text-primary"></iconify-icon>
									</div>
									<div class="media-body">
										<h6>Total Members</h6>
										<p> <span class="viewchrt_reportbtn"><iconify-icon icon="carbon:view"></iconify-icon> View Report</span> <span class="exportchrt_btn"><iconify-icon icon="bx:export"></iconify-icon> Export Report</span></p>
									</div>
								
								</div>
                     <div class="chart_numbercount">
                     <a href="#" id="totalMembers">407 </a><span class="text-success "> <i class="fa fa-caret-up mr-1"></i>2.04%</span>
                     </div>
                  </div>
                  <div class="blcard_body">
                  <div class="balnce__chart" >
                  <canvas id="memberTotalChart"></canvas>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
               <div class="customblck_card bggredient">
               <div class="blcard_header header_wbtn">
                  <div class="chartheader_media">
									<div class="coin-logo bg-primary-transparent">
                           <iconify-icon icon="simple-icons:coursera" class="cf cf-eth text-primary"></iconify-icon>
									</div>
									<div class="media-body">
										<h6>Courses Sold </h6>
										<p> <span class="viewchrt_reportbtn"><iconify-icon icon="carbon:view"></iconify-icon> View Report</span> <span class="exportchrt_btn"><iconify-icon icon="bx:export"></iconify-icon> Export Report</span></p>
									</div>
								
								</div>
                     <a href="#" class="chart_numbercount">2087 <span class="text-success "> <i class="fa fa-caret-up mr-1"></i>12.87%</span></a>
                  </div>
                  <div class="blcard_body">
                  <div class="balnce__chart" >

           
                        <canvas id="coursesSoldChart" class=""></canvas>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-lg-6">
               <div class="customblck_card bggredient">
               <div class="blcard_header header_wbtn">
                  <div class="chartheader_media">
									<div class="coin-logo bg-primary-transparent">
                           <iconify-icon icon="medical-icon:i-imaging-alternative-ct" class="cf cf-eth text-primary"></iconify-icon>
									</div>
									<div class="media-body">
										<h6>Copy Trade</h6>
										<p> <span class="viewchrt_reportbtn"><iconify-icon icon="carbon:view"></iconify-icon> View Report</span> <span class="exportchrt_btn"><iconify-icon icon="bx:export"></iconify-icon> Export Report</span></p>
									</div>
								
								</div>
                     <a href="#" class="chart_numbercount">4056 <span class="text-success "> <i class="fa fa-caret-up mr-1"></i>2.56%</span></a>
                  </div>
                  <div class="blcard_body">
                  <div class="balnce__chart">
                           <canvas id="copyTradesChart" class="default_chart"></canvas>
                        </div>
               </div>
            </div>
         </div>

         <div class="col-lg-6">
               <div class="customblck_card bggredient">
               <div class="blcard_header header_wbtn">
                  <div class="chartheader_media">
									<div class="coin-logo bg-primary-transparent">
                           <iconify-icon icon="cib:vimeo-v" class="cf cf-eth text-primary"></iconify-icon>
									</div>
									<div class="media-body">
										<h6>Total Volume</h6>
										<p> <span class="viewchrt_reportbtn"><iconify-icon icon="carbon:view"></iconify-icon> View Report</span> <span class="exportchrt_btn"><iconify-icon icon="bx:export"></iconify-icon> Export Report</span></p>
									</div>
								
								</div>
                     <a href="#" class="chart_numbercount">1986 <span class="text-success "> <i class="fa fa-caret-up mr-1"></i>2.56%</span></a>
                  </div>
                  <div class="blcard_body">
                  <div class="balnce__chart">
                           <canvas id="userCountChart" class="default_chart"></canvas>
                        </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
               <div class="customblck_card bggredient">
               <div class="blcard_header header_wbtn">
                  <div class="chartheader_media">
									<div class="coin-logo bg-primary-transparent">
                           <iconify-icon icon="material-symbols:rewarded-ads-outline-sharp" class="cf cf-eth text-primary"></iconify-icon>
                          
									</div>
									<div class="media-body">
										<h6>Rewards</h6>
										<p> <span class="viewchrt_reportbtn"><iconify-icon icon="carbon:view"></iconify-icon> View Report</span> <span class="exportchrt_btn"><iconify-icon icon="bx:export"></iconify-icon> Export Report</span></p>
									</div>
								
								</div>
                     <a href="#" class="chart_numbercount">37 <span class="text-success "> <i class="fa fa-caret-up mr-1"></i>2.56%</span></a>
                  </div>
                  <div class="blcard_body">
                  <div class="balnce__chart">
                           <canvas id="totalRewardsChart" class="default_chart"></canvas>
                        </div>
               </div>
            </div>
         </div>

         <div class="col-lg-6">
               <div class="customblck_card bggredient">
               <div class="blcard_header header_wbtn">
                  <div class="chartheader_media">
									<div class="coin-logo bg-primary-transparent">
                           <iconify-icon icon="gis:north-arrow-n" class="cf cf-eth text-primary"></iconify-icon>
									</div>
									<div class="media-body">
										<h6>Total NTH Fee</h6>
										<p> <span class="viewchrt_reportbtn"><iconify-icon icon="carbon:view"></iconify-icon> View Report</span> <span class="exportchrt_btn"><iconify-icon icon="bx:export"></iconify-icon> Export Report</span></p>
									</div>
								
								</div>
                     <a href="#" class="chart_numbercount">$56,876,98 <span class="text-success "> <i class="fa fa-caret-up mr-1"></i>2.56%</span></a>
                  </div>
                  <div class="blcard_body">
                  <div class="balnce__chart">
                           <canvas id="totalNthFeeMultiLineChart" class="default_chart"></canvas>
                        </div>
               </div>
            </div>
         </div>

         <div class="col-lg-6">
               <div class="customblck_card bggredient">
               <div class="blcard_header header_wbtn">
                  <div class="chartheader_media">
									<div class="coin-logo bg-primary-transparent">
                           <iconify-icon icon="flat-color-icons:neutral-trading" class="cf cf-eth text-primary"></iconify-icon>
									</div>
									<div class="media-body">
										<h6>History of trade</h6>
										<p> <span class="viewchrt_reportbtn"><iconify-icon icon="carbon:view"></iconify-icon> View Report</span> <span class="exportchrt_btn"><iconify-icon icon="bx:export"></iconify-icon> Export Report</span></p>
									</div>
								
								</div>
                     <a href="#" class="chart_numbercount">1012 <span class="text-success "> <i class="fa fa-caret-up mr-1"></i>2.56%</span></a>
                  </div>
                  <div class="blcard_body">
                  <div class="balnce__chart">
                           <canvas id="tradeHistoryChart" class="default_chart"></canvas>
                        </div>
               </div>
            </div>
         </div>

         <div class="col-lg-6">
               <div class="customblck_card bggredient">
               <div class="blcard_header header_wbtn">
                  <div class="chartheader_media">
									<div class="coin-logo bg-primary-transparent">
                           <iconify-icon icon="oi:ban" class="cf cf-eth text-primary"></iconify-icon>
									</div>
									<div class="media-body">
										<h6>Bans</h6>
										<p> <span class="viewchrt_reportbtn"><iconify-icon icon="carbon:view"></iconify-icon> View Report</span> <span class="exportchrt_btn"><iconify-icon icon="bx:export"></iconify-icon> Export Report</span></p>
									</div>
								
								</div>
                     <a href="#" class="chart_numbercount">43 <span class="text-success "> <i class="fa fa-caret-up mr-1"></i>2.56%</span></a>
                  </div>
                  <div class="blcard_body">
                  <div class="balnce__chart">
                           <canvas id="banLineChart" class="default_chart"></canvas>
                        </div>
               </div>
            </div>
         </div>

         
                    </div>
    

      

   </div>
   <!-- End Content -->
</div>
</div>
<!--end container-->
<?php include("footer.php") ?>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
        // JavaScript variable with chart data
        var memberData = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [
                {
                    label: "Increase in Members",
                    data: [10, 20, 10, 5, 15, 25, 30, 10, 5, 15, 10, 20],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                    pointBorderColor: 'rgba(75, 192, 192, 1)',
                },
                {
                    label: "Decrease in Members",
                    data: [5, 15, 10, 5, 10, 15, 20, 10, 5, 10, 15, 5],
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(255, 99, 132, 1)',
                    pointBorderColor: 'rgba(255, 99, 132, 1)',
                }
            ]
        };

        // Function to create and render the line chart
        function createMemberTotalChart() {
            var ctx = document.getElementById("memberTotalChart").getContext("2d");

            var chart = new Chart(ctx, {
                type: 'line',
                data: memberData,
                options: {
                    scales: {
                     x: {
                            beginAtZero: true,
                            ticks: {
                                color: '#94929c', // Change the color of the y-axis labels
                            }
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: '#94929c', // Change the color of the y-axis labels
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            labels: {
                                color: '#fff',
                            }
                        },
                        tooltip: {
                            enabled: true,
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            displayColors: false,
                            titleFont: {
                                color: 'white',
                            },
                            bodyFont: {
                                color: 'white',
                            }
                        }
                    }
                }
            });

            // Calculate and display the total member count
            var totalIncrease = memberData.datasets[0].data.reduce(function (a, b) {
                return a + b;
            }, 0);
            var totalDecrease = memberData.datasets[1].data.reduce(function (a, b) {
                return a + b;
            }, 0);
            var totalMembers = totalIncrease - totalDecrease;
            document.getElementById("totalMembers").textContent = totalMembers;
        }

        // Call the function to render the line chart and display the total member count
        createMemberTotalChart();
    </script>


<!-- total course sold -->

<script>
        // JavaScript variable with chart data for total courses sold
        var courseData = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Total Courses Sold",
                data: [50, 60, 75, 80, 90, 110, 100, 120, 140, 135, 150, 160],
                backgroundColor: 'rgba(40,92,247,.2',
                borderColor: '#0075ff',
                borderWidth: 1,
            }]
        };

        // Function to create and render the courses sold chart
        function createCoursesSoldChart() {
            var ctx = document.getElementById("coursesSoldChart").getContext("2d");

            var chart = new Chart(ctx, {
                type: 'bar', // Use a bar chart
                data: courseData,
                options: {
                  scales: {
                     x: {
                            beginAtZero: true,
                            ticks: {
                                color: '#94929c', // Change the color of the y-axis labels
                            }
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: '#94929c', // Change the color of the y-axis labels
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            labels: {
                                color: '#fff',
                            }
                        },
                        tooltip: {
                            enabled: true,
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            displayColors: false,
                            titleFont: {
                                color: 'white',
                            },
                            bodyFont: {
                                color: 'white',
                            }
                        }
                    }
                }
            });
        }

        // Function to update chart data based on the selected year
        function updateChartData() {
            var yearDropdown = document.getElementById("yearDropdown");
            var selectedYear = yearDropdown.value;

            // Replace this with actual data for the selected year
            // Example: Fetch data from an API or use predefined data
            // For simplicity, we'll use placeholder data here
            var newData = [50, 60, 75, 80, 90, 110, 100, 120, 140, 135, 150, 160];

            // Update the chart data with the new data
            courseData.datasets[0].data = newData;

            // Update the chart
            createCoursesSoldChart();
        }

        // Call the function to render the initial courses sold chart
        createCoursesSoldChart();
    </script>



<!-- total copy trade cgart js ------------------------------------------------------------->
<script>
        // JavaScript variable with chart data for total copy trades
        var copyTradesData = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Total Copy Trades",
                data: [500, 600, 750, 800, 900, 1100, 1000, 1200, 1400, 1350, 1500, 1600],
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                pointBorderColor: 'rgba(75, 192, 192, 1)',
            }]
        };

        // Function to create and render the copy trades line chart
        function createCopyTradesChart() {
            var ctx = document.getElementById("copyTradesChart").getContext("2d");

            var chart = new Chart(ctx, {
                type: 'line', // Use a line chart
                data: copyTradesData,
                options: {
                    scales: {
                        x: {
                            ticks: {
                                color: '#94929c',
                                fontSize: 10 // Change x-axis label color to white
                            },
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: '#94929c',
                                fontSize: 10 // Change y-axis label color to white
                            },
                        }
                    },
                    plugins: {
                        legend: {
                            labels: {
                                color: '#94929c' // Change legend label color to white
                            }
                        }
                    }
                }
            });
        }

        // Call the function to render the copy trades line chart
        createCopyTradesChart();
    </script>
    <!-- end -->


    <!-- volume chart -->
  
    <script>
        // JavaScript variable with chart data for Total User Count
        var userCountData = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Total User Count",
                data: [1200, 1350, 1500, 1600, 1550, 1650, 1700, 1800, 1750, 1850, 1900, 1950],
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                pointBorderColor: '#ff834a',
            }]
        };

        // Function to create and render the User Count line chart
        function createUserCountChart() {
            var ctx = document.getElementById("userCountChart").getContext("2d");

            var chart = new Chart(ctx, {
                type: 'line', // Use a line chart
                data: userCountData,
                options: {
                    scales: {
                        x: {
                            ticks: {
                                color: '#94929c', // Change x-axis label color to white
                                fontSize: 14 // Change x-axis label font size
                            },
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: '#94929c', // Change y-axis label color to white
                                fontSize: 14 // Change y-axis label font size
                            },
                        }
                    },
                    plugins: {
                        legend: {
                            labels: {
                                color: '#94929c' // Change legend label color to white
                            }
                        },
                        annotation: {
                            annotations: [
                                {
                                    type: 'line',
                                    mode: 'vertical',
                                    scaleID: 'x',
                                    value: 'Sep', // Adjust the month where you want to place the line
                                    borderColor: 'rgba(255, 165, 0, 1)', // Orange color
                                    borderWidth: 2,
                                    label: {
                                        content: 'Vertical Line',
                                        enabled: true,
                                        position: 'top',
                                    }
                                }
                            ]
                        }
                    }
                }
            });
        }

        // Call the function to render the User Count line chart
        createUserCountChart();
    </script>
    <!-- volume chart end -->


    <!-- reward chart start -->
    <script>
        // JavaScript variable with data for the floating chart
        var totalRewardsData = {
            datasets: [{
                label: "Total Rewards",
                data: [
                    { x: 'Jan', y: 500 },
                    { x: 'Feb', y: 600 },
                    { x: 'Mar', y: 750 },
                    { x: 'Apr', y: 900 },
                    { x: 'May', y: 800 },
                    { x: 'Jun', y: 950 },
                    { x: 'Jul', y: 1100 },
                    { x: 'Aug', y: 1000 },
                ],
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                pointBorderColor: 'rgba(75, 192, 192, 1)',
            }]
        };

        // Function to create and render the total rewards floating chart
        function createTotalRewardsChart() {
            var ctx = document.getElementById("totalRewardsChart").getContext("2d");

            var chart = new Chart(ctx, {
                type: 'scatter', // Use a scatter plot chart
                data: totalRewardsData,
                options: {
                    scales: {
                        x: {
                            type: 'category', // X-axis is categorical (months)
                            position: 'bottom',
                            ticks: {
                                color: '#94929c', // Change y-axis label color to white
                                fontSize: 14 // Change y-axis label font size
                            },
                        },
                        y: {
                            type: 'linear', // Y-axis is numeric (rewards)
                            beginAtZero: true,
                            ticks: {
                                color: '#94929c', // Change y-axis label color to white
                                fontSize: 14 // Change y-axis label font size
                            },
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                color: '#fff', // Legend label color
                            }
                        }
                    }
                }
            });
        }

        // Call the function to render the total rewards floating chart
        createTotalRewardsChart();
    </script>
    <!-- reward chart end -->


    <!-- total nth fee chart start -->
    <script>
        // JavaScript variable with data for the multi-line chart
        var totalNthFeeData = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
            datasets: [
                {
                    label: "Medium",
                    data: [500, 600, 700, 750, 800, 850, 900, 950],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                    pointBorderColor: 'rgba(75, 192, 192, 1)',
                },
                {
                    label: "Low",
                    data: [450, 550, 650, 700, 750, 800, 850, 900],
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(255, 99, 132, 1)',
                    pointBorderColor: 'rgba(255, 99, 132, 1)',
                },
                {
                    label: "High",
                    data: [600, 700, 800, 900, 1000, 1100, 1200, 1300],
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(153, 102, 255, 1)',
                    pointBorderColor: 'rgba(153, 102, 255, 1)',
                }
            ]
        };

        // Function to create and render the multi-line chart for Total NTH Fee
        function createTotalNthFeeMultiLineChart() {
            var ctx = document.getElementById("totalNthFeeMultiLineChart").getContext("2d");

            var chart = new Chart(ctx, {
                type: 'line', // Use a line chart
                data: totalNthFeeData,
                options: {
                    scales: {
                        x: {
                            ticks: {
                                color: '#94929c', // X-axis label color
                            },
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: '#94929c', // Y-axis label color
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                color: '#94929c', // Legend label color
                            }
                        }
                    }
                }
            });
        }

        // Call the function to render the multi-line chart for Total NTH Fee
        createTotalNthFeeMultiLineChart();
    </script>

    <!-- trade history chart -->
    <script>
        // JavaScript variable with data for the two-line bar chart
        var tradeHistoryData = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
            datasets: [
                {
                    label: "Total Trade Volume",
                    data: [1200, 1350, 1500, 1600, 1550, 1650, 1700, 1800],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                },
                {
                    label: "Total Trade Value",
                    data: [5000, 5500, 6000, 6200, 6100, 6300, 6400, 6500],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2,
                }
            ]
        };

        // Function to create and render the two-line bar chart for History of Trade
        function createTradeHistoryChart() {
            var ctx = document.getElementById("tradeHistoryChart").getContext("2d");

            var chart = new Chart(ctx, {
                type: 'bar', // Use a bar chart
                data: tradeHistoryData,
                options: {
                    scales: {
                        x: {
                            ticks: {
                                color: '#94929c', // X-axis label color
                            },
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: '#94929c', // Y-axis label color
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                color: '#94929c', // Legend label color
                            }
                        }
                    }
                }
            });
        }

        // Call the function to render the two-line bar chart for History of Trade
        createTradeHistoryChart();
    </script>
    <!-- end trade history chart -->

    <!-- ban chart start -->

    <script>
        // JavaScript variable with data for the line graph
        var banData = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
            datasets: [
                {
                    label: "Total Builder Ban",
                    data: [12, 15, 18, 14, 20, 22, 17, 19],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                    pointBorderColor: 'rgba(75, 192, 192, 1)',
                },
                {
                    label: "Total Customer Ban",
                    data: [8, 10, 12, 9, 14, 16, 11, 13],
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(255, 99, 132, 1)',
                    pointBorderColor: 'rgba(255, 99, 132, 1)',
                }
            ]
        };

        // Function to create and render the line graph
        function createBanLineChart() {
            var ctx = document.getElementById("banLineChart").getContext("2d");

            var chart = new Chart(ctx, {
                type: 'line', // Use a line chart
                data: banData,
                options: {
                    scales: {
                        x: {
                            ticks: {
                                color: '#94929c', // X-axis label color
                            },
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: '#94929c', // Y-axis label color
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                color: '#94929c', // Legend label color
                            }
                        }
                    }
                }
            });
        }

        // Call the function to render the line graph for Total Builder Ban and Customer Ban
        createBanLineChart();
    </script>

    <!-- ban chart end -->