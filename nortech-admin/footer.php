<!-- Footer Start -->
<footer class="shadow px-6 py-4">
   <div class="container-fluid">
      <div class="grid grid-cols-1">
         <div class="sm:text-start text-center mx-md-2">
            <p class="copyrighttext">
               © <script>document.write(new Date().getFullYear())</script> Designed by <a href="https://techmavesoftware.com/" target="_blank" class="text-reset">TechMave Software</a>.
            </p>
         </div>
         <!--end col-->
      </div>
      <!--end grid-->
   </div>
   <!--end container-->
</footer>
<!--end footer-->
<!-- End -->
</main>
<!--End page-content" -->
</div>
<!-- page-wrapper -->



<!-- finance page convert currency js -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>   
<script src="assets/datatables/jquery3.6.js"></script>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<!-- sweet alert js -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<!-- iconscdn -->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<!-- JAVASCRIPTS -->
<script src="assets/libs/shufflejs/shuffle.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/js/plugins.init.js"></script>
<script src="assets/js/app.js"></script>
<!-- JAVASCRIPTS -->


<!-- dropify js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
  $(document).ready(function() {
    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove':  'Remove',
            'error':   'Ooops, something went wrong.'
        }
    });
});
</script>


<!-- dropify js end -->


<!-- slick js -->
<script src="assets/js/slick.js"></script>


<!-- datatable -->
<script src="assets/datatables/datatables.min.js"></script>
<script src="assets/datatables/jquery.dataTables.min.js"></script>


<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<!-- chart js ----------------------------------------------------->
<!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="assets/js/custom_chart.js"></script>
<!-- end -------------------------------------------------------------->

<!-- floating input js start -->
<script src="assets/js/common_scripts.min.js"></script>
	<script src="assets/js/functions.js"></script>
	<script src="assets/js/survey_func.js"></script>

  <!-- floating input js end -->

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

<!-- currency converter -->
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
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.fixedHeader.min.js"></script>
<script src="assets/js/dataTables.fixedColumns.min.js"></script>

<script>
   $(document).ready(function() {
       // Initialize DataTable for the first table
       $('#datatable1').DataTable({
           // Add DataTable options and configuration here
           "order": [[0, 'desc']],
           "paging": true,
           "fixedHeader": true,
           "dom": '<"custom-controls"lfr>t<"custom-controls"ip>', // Place length and filter controls in div with class "custom-controls"
           // ... other options
       });
   
       // Initialize DataTable for the second table
       $('#datatable2').DataTable({
           // Add DataTable options and configuration here
           "order": [[0, 'desc']],
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


<!-- table arrow assending and dessending -->
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
<!-- all page cards slider js -->





<!-- admin panel loader js -->
<script>
   $(window).on('load',function(){
   	setTimeout(function(){ // allowing 3 secs to fade out loader
   	$('.page-loader').fadeOut('fast');
       $(this).css('overflow', 'hidden');
       
   	},500);
   
     
   });
</script>
<!-- loader end -->


<!-- Sweet alert toast message -->
<script>
   var toastMixin = Swal.mixin({
    toast: true,
    icon: 'success',
    title: 'General Title',
    animation: false,
    position: 'top-right',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
   });
   
</script>
<!-- sweet alert end -->

<script>
   $('.votecrreated_alert').on('click',function(){
      toastMixin.fire({
      animation: true,
      title: 'Vote Created Successfully'
      });
   })
</script>
<!-- datetime picker -->


<!--  Flatpickr  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/themes/dark.css">
<script>
   $("#basicDate").flatpickr({
   enableTime: true,
   dateFormat: "F, d Y H:i"
   });
   
   $("#basicDate2").flatpickr({
   enableTime: true,
   dateFormat: "F, d Y H:i"
   });
   
   $("#timePicker").flatpickr({
   enableTime: true,
   noCalendar: true,
   time_24hr: true,
   dateFormat: "H:i",
   });
   
   $(".resetDate").flatpickr({
   wrap: true,
   weekNumbers: true,
   });
</script>
<!--flatpicker end -->


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
<!-- fixed header end -->


<!-- data table searchbar style js -->
<script>
  $(document).ready(function() {

  // Iterate through each DataTable
  $('.datatable-container').each(function() {
    const $searchLabel = $(this).find('.dataTables_filter label');
    const $searchInput = $(this).find('.dataTables_filter input');

    // Add the search icon (Font Awesome in this example)
    $searchLabel.prepend('<i class="fas fa-search"></i>');

     // Update the search filter for each DataTable
  $('.datatable-container').each(function() {
    const $searchInput = $(this).find('.dataTables_filter input');

    // Add a placeholder text to the input field
    $searchInput.attr('placeholder', 'Search here...');


  });
    
  });
});

</script>
<!-- data table searchbar style js end -->


<script>
        // Function to hide the page loader and show the scrollbar when the page has fully loaded
        function hidePageLoader() {
            const body = document.querySelector('body');
            body.classList.add('loaded');
            body.classList.remove('loading');
        }

        // Function to show the loader and hide the scrollbar when the page is loading
        function showPageLoader() {
            const body = document.querySelector('body');
            body.classList.remove('loaded');
            body.classList.add('loading');
        }

        // Listen for the page load event and hide the loader when the page is fully loaded
        window.addEventListener('load', function () {
            hidePageLoader();
        });

    </script>

    <!-- action popup dropdown js -->
    <!-- dropdown popup start -->
<script>
   // JavaScript to open and close the popups with dropdown menus
   const openButtons = document.querySelectorAll('.open-popup-button');
   const popups = document.querySelectorAll('.popup');
   
   openButtons.forEach((button, index) => {
     button.addEventListener('click', () => {
       popups.forEach((popup, popupIndex) => {
         if (popupIndex === index) {
           popup.classList.add('show');
         } else {
           popup.classList.remove('show');
         }
       });
     });
   });
   
   // JavaScript to close the popups when clicking the close icon
   const closeIcons = document.querySelectorAll('.close-icon');
   
   closeIcons.forEach((closeIcon, index) => {
     closeIcon.addEventListener('click', () => {
       popups[index].classList.remove('show');
     });
   });
   
   // Close the popups when clicking outside of them
   window.addEventListener('click', (event) => {
     popups.forEach((popup) => {
       if (!event.target.classList.contains('open-popup-button') && !popup.contains(event.target)) {
         popup.classList.remove('show');
       }
     });
   });
   
   // Close the popup when clicking an anchor tag within the dropdown
   document.querySelectorAll('.popup .dropdown_content_pop a').forEach((anchor) => {
     anchor.addEventListener('click', (event) => {
       const popup = event.target.closest('.popup');
       if (popup) {
         popup.classList.remove('show');
       }
     });
   });
   
</script>
<!-- dropdown popup end -->



</body>
</html>

