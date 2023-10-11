  <!-- Footer Start -->
  <footer class="shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 px-6 py-4">
                    <div class="container-fluid">
                        <div class="grid grid-cols-1">
                            <div class="sm:text-start text-center mx-md-2">
                                <p class="mb-0 text-slate-400">© <script>document.write(new Date().getFullYear())</script> Designed by <a href="https://techmavesoftware.com/" target="_blank" class="text-reset">TechMave Software</a>.</p>
                            </div><!--end col-->
                        </div><!--end grid-->
                    </div><!--end container-->
                </footer><!--end footer-->
                <!-- End -->
            </main>
            <!--End page-content" -->
        </div>
        <!-- page-wrapper -->

        <!-- Switcher -->
        <!-- <div class="fixed top-[30%] -end-3 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div> -->
        <!-- Switcher -->

   <!-- finance page convert currency js -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>   
<script src="assets/datatables/jquery3.6.js"></script>
        
        <!-- JAVASCRIPTS -->
        <script src="assets/libs/shufflejs/shuffle.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->

        <!-- datatable -->
        <script src="assets/datatables/datatables.min.js"></script>
        <script src="assets/datatables/jquery.dataTables.min.js"></script>

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


 <!-- chart js -->
 <!-- Include Chart.js library -->
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- end -->

<script>
        // Sample data (replace this with your own data)
        var balanceData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Balance',
                data: [10000, 10500, 11000, 10800, 11500, 12000],
                borderColor: '#50abff',
                backgroundColor: '#50abff1c',
                borderWidth: 2,
                fill: true,
            }]
        };

        var ctx = document.getElementById('balanceChart').getContext('2d');

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
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Balance (USD)',
                            color: '#7c3aed'
                        },
                        ticks: {
                    color: '#ccc' // Change the y-axis ticks text color to purple
                }
                    }
                }
            }
        });
    </script>

<script>
        // Sample data (replace this with your own data)
        var balanceData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Payment',
                data: [10000, 10500, 11000, 10800, 11500, 12000],
                borderColor: '#50abff',
                backgroundColor: '#50abff1c',
                borderWidth: 2,
                fill: true,
            },
            {
                label: 'Payment',
                data: [10000, 10500, 11000, 10800, 11500, 12000],
                borderColor: '#50abff',
                backgroundColor: '#50abff1c',
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
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Balance (USD)',
                            color: '#7c3aed'
                        },
                        ticks: {
                    color: '#ccc' // Change the y-axis ticks text color to purple
                }
                    }
                }
            }
        });
    </script>


<!-- custom js -->




<!-- copy code js -->
<script>
let copyText = document.querySelector(".copy-text");
copyText.querySelector("button").addEventListener("click", function () {
	let input = copyText.querySelector("input.text");
	input.select();
	document.execCommand("copy");
	copyText.classList.add("active");
	window.getSelection().removeAllRanges();
	setTimeout(function () {
		copyText.classList.remove("active");
	}, 2500);
});

</script>

<!-- copy code js end-->


<script>
$(document).ready(function() {
    $('#amount, #currency__select').on('input', function() {
        // Use a regular expression to allow only numeric input
        var inputValue = $('#amount').val();
        inputValue = inputValue.replace(/[^0-9.]/g, ''); // Allow numbers and decimal point
        
        // Set the cleaned input value back to the input field
        $('#amount').val(inputValue);
        
        var amount = parseFloat(inputValue) || 0;
        var fromCurrency = $('#currency__select').val();
        
        // Define the exchange rate for NTH
        var exchangeRateToNTH = 5; // Example exchange rate
        
        var convertedAmount = amount * exchangeRateToNTH;
        $('#result').val(convertedAmount.toFixed(2) + ' NTH');
    });
});

</script>
<!-- finance page convert currency js end -->


<!-- select dropdown call -->
<!-- JavaScript/jQuery to initialize Select2 -->
<script>
  $(document).ready(function() {
    $('#currency__select').select2();
  });
</script>


<script>
               

	if ($('.datatable').length > 0) {
        $('.datatable').DataTable({
           
        });
    }
    if ($('.datatables').length > 0) {
        $('.datatables').DataTable({
          
        });
    }
        </script>
        <!-- JAVASCRIPTS -->
        <script>
    $(document).ready(function () {
   
  
    // Move export buttons to the export-button-container div
    $('.buttons-excel, .buttons-pdf, .buttons-csv , .buttons-copy ,  .buttons-print').appendTo('#export-button-container');
  
    // Move search input to the search-button-container div
    $('.dataTables_filter').appendTo('#search-button-container');

    $('.dataTables_info').appendTo('#info-container');

    
     // Move entries control to the entries-container div
     $('.dataTables_length').appendTo('#entries-container');
  
  // Move pagination control to the pagination-container div
  $('.dataTables_paginate').appendTo('#pagination-container');
  });
  </script>
<!-- custom js -->

<!-- pagination tabs -->

<script>
$(document).ready(function () {
    // Function to initialize pagination for a specific tab
    function initializePagination(tabContainer) {
        var contentContainer = tabContainer.find(".content");
        var contentItems = tabContainer.find(".content .item");
        var itemsPerPage = 2; // Number of items per page (fixed to 2)
        var contentHeight = contentContainer.height();
        var totalPages = Math.ceil(contentItems.length / itemsPerPage);
        var currentPage = 1; // Track the current page

        // Calculate the number of pages dynamically based on content height
        var pageSize = itemsPerPage * contentHeight;

        // Generate numbered pagination links
        var paginationLinks = "";
        for (var i = 1; i <= totalPages; i++) {
            paginationLinks += '<li><a href="#" data-page="' + i + '">' + i + '</a></li>';
        }

        // Insert the "Previous" button before the pagination links
        paginationLinks = '<li><button class="prevPage">Previous</button></li>' + paginationLinks;

        // Insert the "Next" button after the pagination links
        paginationLinks += '<li><button class="nextPage">Next</button></li>';

        tabContainer.find(".pagination-links").html(paginationLinks);

        // Function to show items for the selected page
        function showItemsForPage(page) {
            var offset = (page - 1) * pageSize;
            contentContainer.animate({ scrollTop: offset }, 'slow');

            // Show the content for the selected page
            contentItems.hide();
            contentItems.slice((page - 1) * itemsPerPage, page * itemsPerPage).show();
        }

        // Pagination click event
        tabContainer.find(".pagination-links a").on("click", function (e) {
            e.preventDefault();
            var page = $(this).data("page");

            // Show the content for the selected page
            showItemsForPage(page);

            // Update active class for pagination links
            tabContainer.find(".pagination-links a").removeClass("active");
            $(this).addClass("active");

            // Update the current page
            currentPage = page;
        });

        // Function to increment the page by a certain number of items
        function incrementPage(increment) {
            var newPage = currentPage + increment;
            if (newPage >= 1 && newPage <= totalPages) {
                showItemsForPage(newPage);
                tabContainer.find(".pagination-links a").removeClass("active");
                tabContainer.find(".pagination-links a[data-page='" + newPage + "']").addClass("active");
                currentPage = newPage;
            }
        }

        // Next and Previous buttons for pagination
        tabContainer.find(".pagination-links .prevPage").on("click", function () {
            incrementPage(-1);
        });

        tabContainer.find(".pagination-links .nextPage").on("click", function () {
            incrementPage(1);
        });

        // Show the first page initially
        showItemsForPage(currentPage);
        tabContainer.find(".pagination-links a:first").addClass("active");
    }

    // Initialize pagination for all tabs
    $(".tab-content").each(function () {
        initializePagination($(this));
    });
});

</script>


<!-- set limit characters -->
<script>
        function limitTitleLength(maxLength) {
            var titleElements = document.querySelectorAll(".title-limit");

            titleElements.forEach(function (titleElement) {
                var originalTitle = titleElement.innerText;

                if (originalTitle.length > maxLength) {
                    var truncatedTitle = originalTitle.substring(0, maxLength) + "...";
                    titleElement.innerText = truncatedTitle;
                }
            });
        }

        // Call the function with the desired title length limit (e.g., 20 characters)
        limitTitleLength(30);
    </script>

<script>
  const table = document.getElementById("export-button");
  const headers = table.querySelectorAll("th.sortable");
  let currentSortColumn = 0;

  headers.forEach((header, index) => {
    // Remove the "active-arrow" class from all header arrows
    headers.forEach(th => {
      th.querySelector(".fa-arrow-up").classList.remove("active-arrow");
      th.querySelector(".fa-arrow-down").classList.remove("active-arrow");
    });

    // Determine sort direction and add "active-arrow" class to the appropriate arrow
    if (index === currentSortColumn) {
      if (table.classList.contains("sort-reverse")) {
        header.querySelector(".fa-arrow-down").classList.add("active-arrow");
      } else {
        header.querySelector(".fa-arrow-up").classList.add("active-arrow");
      }
    }
  });
</script>

</body>

</html>