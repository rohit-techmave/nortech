<?php include("header.php") ?>


<!-- Add FontAwesome stylesheet (you need an internet connection for this) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<div class="container-fluid relative px-3">
   <div class="layout-specing">
  
               <ul class="finance__area nthtabsarea flexgrid_tabs md:w-fit w-full  flex-wrap justify-center bg-white   dark:shadow-gray-800  usertabdash" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2   w-full transition-all duration-500 ease-in-out custom-btn btn-11" id="fee-tab" data-tabs-target="#fee" type="button" role="tab" aria-controls="fee" aria-selected="true">
                       Fee
                        <div class="dot"></div>
                     </button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  w-full transition-all duration-500 ease-in-out" id="dao-tab" data-tabs-target="#dao" type="button" role="tab" aria-controls="dao" aria-selected="false">DAO</button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2   w-full transition-all duration-500 ease-in-out" id="Stake-tab" data-tabs-target="#Stake" type="button" role="tab" aria-controls="Stake" aria-selected="false">Stake</button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2   w-full transition-all duration-500 ease-in-out" id="report-tab" data-tabs-target="#report" type="button" role="tab" aria-controls="report" aria-selected="false">Report</button>
                  </li>
                 
               </ul>

               
               
               <div id="StarterContent" class="mt-6">

                  <div class="" id="fee" role="tabpanel" aria-labelledby="fee-tab">
                  <div class="createnftid_section">
                        <h1>Fee</h1>
                     <!-- End Content -->
                  </div>

                  </div>
                  
                  <div class="hidden" id="dao" role="tabpanel" aria-labelledby="dao-tab">
                  <div class="createnftid_section">
         <div class="row">
            <div class="col-lg-12">
               <div class="customblck_card bggredient">
                  <div class="blcard_header">
                     <h3 class="blcard_header_title">Create Votes</h3>
                  </div>
                  <div class="blcard_body">
                     <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                         
                        <div class="form-group">
	                                        <label for="firstname">Vote Title</label>
	                                        <input type="text" name="firstname" id="firstname" class="form-control required">
	                                    </div>
                            </div>
                            <div class="col-lg-6">

                            <div class="form-group">
	                                        <label for="firstname">Vote Description</label>
	                                        <input type="text" name="firstname" id="firstname" class="form-control required">
	                                    </div>
                            </div>

                            <div class="col-lg-6">
                            <div class="form-group">
	                                        <label for="basicDate">Voting Start Date & Time</label>
	                                        <input type="text" name="basicDate" id="basicDate" class="form-control required" >
	                                    </div>
                            </div>

                            <div class="col-lg-6">
                            <div class="form-group">
                            <label for="basicDate2">Voting ends Date & Time</label>
                            <input type="text" id="basicDate2" class="form-control" placeholder="" data-input>
                        </div>
                         
                            </div>

                            <div class="col-lg-12">
                            <div class="update_action">
                        <a href="#" class="linebtn_custom">Create Vote

<span class="hover-shape1"></span>
         <span class="hover-shape2"></span>
         <span class="hover-shape3"></span>
</a>
                        </div>
                            </div>


                            </div>

                           

                        </div>
                        
                       
                     </form>
                  </div>
               </div>

               <div class="col-lg-6 countdown-container">
               <div class="customblck_card bggredient">
                  <div class="blcard_header">
                     <h3 class="blcard_header_title">Pending Votes</h3>
                  </div>
                  <div class="blcard_body">
                     <div class=" card_listhgt countdowns">
                           <div class="common__listcard">
                              <div class="newbuilder__dataL">
                              
                                 <div class="withoutimg__listcont">
                                    <div class="namecomon_user">
                                          PTIP 50 - Treasury Assets Management #1
                                    </div>
                                    <a href="#" class=" anchorhover">Lorem ipsum dolor sit.</a>
                                 </div>
                              </div>
                              <div class="countdown_box" data-end-time="2023-10-20T12:10:00Z"></div>
                           </div>
                  
                           <div class="common__listcard">
                              <div class="newbuilder__dataL">
                               
                                 <div class="withoutimg__listcont">
                                    <div class="namecomon_user">
                                    PTIP 61 - Stake XRP Earn Cake Syrup Pool
                                    </div>
                                    <a href="#" class=" anchorhover">Lorem ipsum dolor sit amet consectetur.</a>
                                 </div>
                              </div>
                              <div class="countdown_box" data-end-time="2023-10-19T14:20:00Z"></div>
                           </div>

                        <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                
                                 <div class="withoutimg__listcont">
                                    <div class="namecomon_user">
                                    PTIP 63 - Claim Rewards from Locked Staking
                                    </div>
                                    <a href="#" class=" anchorhover">Lorem, ipsum dolor.</a>
                                 </div>
                              </div>
                              <div class="countdown_box" data-end-time="2023-10-20T18:30:10Z"></div>
                           </div>

                       <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                
                                 <div class="withoutimg__listcont">
                                    <div class="namecomon_user ">
                                    PTIP 64 - Loan and/or fixed term with the Cake
                                    </div>
                                    <a href="#" class=" anchorhover">Lorem ipsum dolor sit amet.</a>
                                 </div>
                              </div>
                              <div class="countdown_box" data-end-time="2023-10-22T18:00:00Z"></div>
                           </div>
                  
                  </div>
               </div>
            </div>
         </div>

         <div class="col-lg-6 countdown-container">
               <div class="customblck_card bggredient">
                  <div class="blcard_header">
                     <h3 class="blcard_header_title">History Votes</h3>
                  </div>
                  <div class="blcard_body">
                     <div class=" card_listhgt countdowns">
                           <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                 
                                 <div class="withoutimg__listcont">
                                    <div class="namecomon_user">
                                    PTIP 50 - Treasury Assets Management #1 
                                    </div>
                                    <a href="#" class=" anchorhover">Lorem, ipsum dolor.</a>
                                 </div>
                              </div>
                              <div class="countdown_box" data-end-time="2023-10-23T18:00:00Z"></div>
                           </div>
                  
                           <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                
                                 <div class="withoutimg__listcont">
                                    <div class="namecomon_user">
                                    PTIP 61 - Stake XRP Earn Cake Syrup Pool 
                                    </div>
                                    <a href="#" class=" anchorhover">Lorem ipsum dolor sit amet consectetur.</a>
                                 </div>
                              </div>
                              <div class="countdown_box" data-end-time="2023-10-24T18:00:00Z"></div>
                           </div>

                        <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                
                                 <div class="withoutimg__listcont">
                                    <div class="namecomon_user">
                                    PTIP 63 - Claim Rewards from Locked Staking
                                    </div>
                                    <a href="#" class=" anchorhover">Lorem ipsum dolor sit.</a>
                                 </div>
                              </div>
                              <div class="countdown_box" data-end-time="2023-10-25T18:00:00Z"></div>
                           </div>

                       <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                
                                 <div class="withoutimg__listcont">
                                    <div class="namecomon_user">
                                    PTIP 64 - Loan and/or fixed term with the Cake 
                                    </div>
                                    <a href="#" class=" anchorhover">Lorem ipsum dolor sit amet.</a>
                                 </div>
                              </div>
                              <div class="countdown_box" data-end-time="2023-10-24T18:00:00Z"></div>
                           </div>
                  
                  </div>
               </div>
            </div>
         </div>

            </div>

           

         
      </div>
      <!-- End Content -->
   </div>
                  </div>

                  <div class="hidden" id="Stake" role="tabpanel" aria-labelledby="Stake-tab">
                  <h1>stake</h1>
                  </div>

                  <div class="hidden" id="report" role="tabpanel" aria-labelledby="report-tab">


                    <div class="reports__chtarea row">
                    <div class="col-lg-6">
               <div class="customblck_card bggredient">
                  <div class="blcard_header header_wbtn">
                     <h3 class="blcard_header_title">NTH Holders</h3>
                     <a href="#" class="btnheader_w">View Report <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 19L19 6m0 0v12.48M19 6H6.52"></path></svg></a>
                  </div>
                  <div class="blcard_body">
                  <div class="balnce__chart" >
                           <canvas id="nthHolderLineChart" class=""></canvas>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
               <div class="customblck_card bggredient">
                  <div class="blcard_header header_wbtn">
                     <h3 class="blcard_header_title">NTH in Circulation</h3>
                     <a href="#" class="btnheader_w">View Report <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 19L19 6m0 0v12.48M19 6H6.52"></path></svg></a>
                  </div>
                  <div class="blcard_body">
                  <div class="balnce__chart" >
                        <canvas id="nthcirculation" class=""></canvas>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-lg-6">
               <div class="customblck_card bggredient">
                  <div class="blcard_header header_wbtn">
                     <h3 class="blcard_header_title">NTH Locked</h3>
                     <a href="#" class="btnheader_w">View Report <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 19L19 6m0 0v12.48M19 6H6.52"></path></svg></a>
                  </div>
                  <div class="blcard_body">
                  <div class="balnce__chart">
                           <canvas id="nthlocked" class="default_chart"></canvas>
                        </div>
               </div>
            </div>
         </div>

         <div class="col-lg-6">
               <div class="customblck_card bggredient">
                  <div class="blcard_header header_wbtn">
                     <h3 class="blcard_header_title">NTH Reward</h3>
                     <a href="#" class="btnheader_w">View Report <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 19L19 6m0 0v12.48M19 6H6.52"></path></svg></a>
                  </div>
                  <div class="blcard_body">
                  <div class="balnce__chart">
                           <canvas id="rewardChart" class="default_chart"></canvas>
                        </div>
               </div>
            </div>
         </div>

         <div class="col-lg-12">
               <div class="customblck_card bggredient">
                  <div class="blcard_header header_wbtn">
                     <h3 class="blcard_header_title">NTH history Price</h3>
                     <a href="#" class="btnheader_w">View Report <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 19L19 6m0 0v12.48M19 6H6.52"></path></svg></a>
                  </div>
                  <div class="blcard_body">
                  <div class="balnce__chart">
                           <canvas id="pricenthchart" class="default_chart"></canvas>
                        </div>
               </div>
            </div>
         </div>
                    </div>
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



<!-- vote count down -->
<script>
        // Get the countdown containers
        const countdownContainers = document.querySelectorAll(".countdown-container");

        countdownContainers.forEach((container, containerIndex) => {
            const countdownDivs = container.querySelector(".countdowns").querySelectorAll(".countdown_box");

            countdownDivs.forEach((countdownDiv, index) => {
                const endTime = new Date(countdownDiv.getAttribute("data-end-time")).getTime();

                const countdownElement = document.createElement("div");
                countdownElement.id = `countdown-${containerIndex}-${index}`;
                countdownDiv.appendChild(countdownElement);

                updateCountdown(containerIndex, index);

                setInterval(() => updateCountdown(containerIndex, index), 1000);
            });
        });

        function updateCountdown(containerIndex, index) {
            const countdownDiv = countdownContainers[containerIndex]
                .querySelector(".countdowns")
                .querySelectorAll(".countdown_box")[index];
            const currentTime = new Date().getTime();
            const endTime = new Date(countdownDiv.getAttribute("data-end-time")).getTime();
            const timeRemaining = endTime - currentTime;
            const countdownElement = document.getElementById(`countdown-${containerIndex}-${index}`);

            if (timeRemaining <= 0) {
                countdownElement.innerHTML = "Voting has ended!";
            } else {
                const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                countdownElement.innerHTML = `${days} days ${hours} hours ${minutes} minutes ${seconds} seconds`;
            }
        }
    </script>
<!-- end -->


