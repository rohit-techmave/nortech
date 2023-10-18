<?php include("header.php") ?>


<!-- Add FontAwesome stylesheet (you need an internet connection for this) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<div class="container-fluid relative px-3">
   <div class="layout-specing">
  
               <ul class="finance__area flexgrid_tabs md:w-fit w-full  flex-wrap justify-center  p-3 bg-white  shadow dark:shadow-gray-800 rounded-md usertabdash" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out custom-btn btn-11" id="fee-tab" data-tabs-target="#fee" type="button" role="tab" aria-controls="fee" aria-selected="true">
                       Fee
                        <div class="dot"></div>
                     </button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2 rounded-md w-full transition-all duration-500 ease-in-out" id="dao-tab" data-tabs-target="#dao" type="button" role="tab" aria-controls="dao" aria-selected="false">DAO</button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="Stake-tab" data-tabs-target="#Stake" type="button" role="tab" aria-controls="Stake" aria-selected="false">Stake</button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="report-tab" data-tabs-target="#report" type="button" role="tab" aria-controls="report" aria-selected="false">Report</button>
                  </li>
                 
               </ul>
               
               <div id="StarterContent" class="mt-6">

                  <div class="" id="fee" role="tabpanel" aria-labelledby="fee-tab">
                  <h1>fee</h1>
                  </div>
                  
                  <div class="hidden" id="dao" role="tabpanel" aria-labelledby="dao-tab">
                  <h1>dao</h1>
                  </div>

                  <div class="hidden" id="Stake" role="tabpanel" aria-labelledby="Stake-tab">
                  <h1>stake</h1>
                  </div>

                  <div class="hidden" id="report" role="tabpanel" aria-labelledby="report-tab">
                    <h1>report</h1>
                  </div>
                  
               </div>
           
         <!--end col-->
     
      <!-- End Content -->
   </div>
</div>
<!--end container-->
<?php include("footer.php") ?>

<script>

$(document).ready(function() {
    // Initialize Select2 on the course-filter select element
    $('#course-filter').select2();
    
    const courseList = document.getElementById("course-list");
    const courseItems = courseList.querySelectorAll('li');

    $('#course-filter').on('change', function() {
        const selectedFilter = $(this).val();

        courseItems.forEach(course => {
            const courseStatus = course.getAttribute('data-status');
            if (selectedFilter === "new" && courseStatus === "new") {
                course.style.display = 'block';
            } else if (selectedFilter === "all" || selectedFilter === courseStatus) {
                course.style.display = 'block';
            } else {
                course.style.display = 'none';
            }
        });
    });

    // Initial population of the course list with "New Courses" selected
    $('#course-filter').val('new').trigger('change');
});


</script>

<!-- rating js -->
<script>
   $(document).ready(function() {
    const rating = 4.6;
    const filledStarsWidth = (rating / 5) * 100;
    $('.star-rating__filled-stars').css('width', `${filledStarsWidth}%`);
});
</script>

<!-- dynamic date and time favorite card  -->
<script>
    // Get all elements with the "Remove" button class
    const removeButtons = document.querySelectorAll('.remove-button');
    const removeAlert = document.getElementById('remove-alert');

    // Add click event listeners to all "Remove" buttons
    removeButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Find the parent course card and remove it
            const courseCard = button.closest('.favorite_course_added');
            if (courseCard) {
                courseCard.remove();

                // Show the alert
                removeAlert.style.display = 'block';

                // Automatically remove the alert after 5 seconds
                setTimeout(() => {
                    removeAlert.style.display = 'none';
                }, 2000); // 5000 milliseconds = 5 seconds
            }
        });
    });
</script>


