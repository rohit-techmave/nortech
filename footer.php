  <!-- Footer Start -->
  <footer class="shadow px-6 py-4">
                    <div class="container-fluid">
                        <div class="grid grid-cols-1">
                            <div class="sm:text-start text-center mx-md-2">
                                <p class="copyrighttext">© <script>document.write(new Date().getFullYear())</script> Designed by <a href="https://techmavesoftware.com/" target="_blank" class="text-reset">TechMave Software</a>.</p>
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
<script src="assets/js/jquery-3.6.0.min.js"></script>   
<script src="assets/datatables/jquery3.6.js"></script>
     
        <!-- JAVASCRIPTS -->
        <script src="assets/libs/shufflejs/shuffle.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->

        <!-- slick js -->
<script src="assets/js/slick.js"></script>

<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

        <!-- datatable -->
        <script src="assets/datatables/datatables.min.js"></script>
        <script src="assets/datatables/jquery.dataTables.min.js"></script>

<!-- Select2 CSS -->
<script src="assets/js/select2.min.js"></script>


<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

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
    </script>

<script>
        // Sample data (replace this with your own data)
        var balanceData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'User Performance',
                data: [500, 1050, 900, 400, 2100, 3000],
                borderColor: '#00ff9d',
                backgroundColor: '#00ff9d4d',
                borderWidth: 2,
                fill: true,
            },
        
        ]

        
        };

        var ctx = document.getElementById('userperformanceChart').getContext('2d');

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


<script>
    $(document).ready(function() {
  $(".custom-select").select2({
    templateSelection: function(selected, container) {
      // Add your custom class to the span element
      $(container).addClass("custom-select2");
      return selected.text;
    }
  });
});

</script>

<!-- data table code -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.13/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script>

<script>
$(document).ready(function() {
    // Initialize DataTable for the first table
    $('#datatable1').DataTable({
        // Add DataTable options and configuration here
     
        "paging": true,
        "fixedHeader": true,
        "dom": '<"custom-controls"lfr>t<"custom-controls"ip>', // Place length and filter controls in div with class "custom-controls"
        // ... other options
    });

    // Initialize DataTable for the second table
    $('#datatable2').DataTable({
        // Add DataTable options and configuration here
        
        "paging": true,
        "fixedHeader": true,
        "dom": '<"custom-controls"lfr>t<"custom-controls"ip>', // Place length and filter controls in div with class "custom-controls"
        // ... other options
    });
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
<script>
        // Function to limit the number of characters in containers with a specific class and add ellipsis
        function limitContentByClass(className, maxCharacters) {
            const containers = document.querySelectorAll('.' + className);

            containers.forEach(container => {
                const paragraphs = container.getElementsByTagName('p');

                for (let i = 0; i < paragraphs.length; i++) {
                    if (maxCharacters > 0 && paragraphs[i].textContent.length > maxCharacters) {
                        const truncatedText = paragraphs[i].textContent.substring(0, maxCharacters) + '...';
                        paragraphs[i].textContent = truncatedText;
                    }
                }
            });
        }

        // Example: Limit all elements with the "content-container" class to 50 characters with ellipsis
        limitContentByClass('content-container', 120);
    </script>

    <!-- admin panel loader js -->

<script>
$(window).on('load',function(){
	setTimeout(function(){ // allowing 3 secs to fade out loader
	$('.page-loader').fadeOut('fast');
	},500);
});
</script>



<script>
// Add variables to track dragging and hover
let isDragging = false;
let isHovered = false;
let startX = 0;
let scrollLeft = 0;

// Auto-scroll the list on mobile view
function autoScrollList() {
    const tabList = document.getElementById('myTab');
    let scrollAmount = 0;
    const scrollSpeed = 2;

    function scroll() {
        if (!isDragging && !isHovered) {
            tabList.scrollLeft += scrollSpeed;
            scrollAmount += scrollSpeed;
            if (scrollAmount >= tabList.scrollWidth - tabList.clientWidth) {
                scrollAmount = 0;
                tabList.scrollLeft = 0;
            }
        }
    }

    setInterval(scroll, 50); // Adjust the interval for desired scroll speed
}

// Handle touch events for dragging
function handleTouchStart(event) {
    isDragging = true;
    startX = event.touches[0].pageX;
    scrollLeft = document.getElementById('myTab').scrollLeft;
}

function handleTouchMove(event) {
    if (!isDragging) return;

    const x = event.touches[0].pageX;
    const xDiff = startX - x;
    document.getElementById('myTab').scrollLeft = scrollLeft + xDiff;
}

function handleTouchEnd() {
    isDragging = false;
}

// Handle hover events to pause auto-scrolling
function handleMouseOver() {
    isHovered = true;
}

function handleMouseOut() {
    isHovered = false;
}

const isMobileView = window.innerWidth <= 768; // You can adjust this breakpoint

if (isMobileView) {
    autoScrollList();

    // Add event listeners for touch and hover events
    const tabList = document.getElementById('myTab');
    tabList.addEventListener('touchstart', handleTouchStart);
    tabList.addEventListener('touchmove', handleTouchMove);
    tabList.addEventListener('touchend', handleTouchEnd);
    tabList.addEventListener('mouseover', handleMouseOver);
    tabList.addEventListener('mouseout', handleMouseOut);
}

</script>


<!-- header fixed -->
<script>
// Define an array of class names you want to target
var classNames = ["top-header", "sidebar-brand"];

// Add a scroll event listener
window.addEventListener("scroll", function() {
  // Loop through each class name
  classNames.forEach(function(className) {
    // Get all elements with the current class name
    var elements = document.getElementsByClassName(className);
    
    // Loop through the elements and add or remove the "scrolled-header" class
    for (var i = 0; i < elements.length; i++) {
      if (window.pageYOffset >= elements[i].offsetTop) {
        elements[i].classList.add("scrolled-header");
      } else {
        elements[i].classList.remove("scrolled-header");
      }
    }
  });
});
</script>





</body>

</html>