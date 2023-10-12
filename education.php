<?php include("header.php") ?>
<!-- Add FontAwesome stylesheet (you need an internet connection for this) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<div class="container-fluid relative px-3">
   <div class="layout-specing">
      <div class="grid md:grid-cols-12 gap-6 ">
         <div class="lg:col-span-12 md:col-span-12 ">
            <div class="grid grid-cols-1 ">
               <ul class="finance__area flexgrid_tabs md:w-fit w-full  flex-wrap justify-center  p-3 bg-white  shadow dark:shadow-gray-800 rounded-md usertabdash" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out custom-btn btn-11" id="Finance-tab" data-tabs-target="#Finance" type="button" role="tab" aria-controls="Finance" aria-selected="true">
                        My Course
                        <div class="dot"></div>
                     </button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2 rounded-md w-full transition-all duration-500 ease-in-out" id="Courses-tab" data-tabs-target="#Courses" type="button" role="tab" aria-controls="Courses" aria-selected="false">Marketplace</button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="Portfolio-tab" data-tabs-target="#Portfolio" type="button" role="tab" aria-controls="Portfolio" aria-selected="false">Rewards Certificate</button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="ID-tab" data-tabs-target="#ID" type="button" role="tab" aria-controls="ID" aria-selected="false">My Service</button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="History-tab" data-tabs-target="#History" type="button" role="tab" aria-controls="History" aria-selected="false">Ranking</button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="Stats-tab" data-tabs-target="#Stats" type="button" role="tab" aria-controls="Stats" aria-selected="false">Stats</button>
                  </li>
               </ul>
               <div class="filter__header__">
                  <h6 class="text-lg font-semibold">Your Courses</h6>
                  <div class="filter-container">
                     <label for="course-filter">Filter By:</label>
                     <select id="course-filter">
                        <option value="new">New Courses</option>
                        <option value="enrolled">Enrolled Courses</option>
                        <option value="completed">Completed Courses</option>
                        <option value="learning">Learning Paths</option>
                        <option value="wishlist">Wish List</option>
                     </select>
                  </div>

                

               </div>
               <div id="StarterContent" class="mt-6">
                  <div class="" id="Finance" role="tabpanel" aria-labelledby="Finance-tab">
                     <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-800 overflow-hidden ease-in-out duration-500 w-full ">
                        <div class="row ">
                           <ul id="course-list">
                        

                              <li data-status="enrolled">
                                 <div class="course__header_tit">
                                    <div class="coursecat_titlte">
                                       <h2>Enrolled Courses</h2>
                                    </div>
                                 <div class="search-container">
                                       <label for="search-courses">Search Courses:</label>
                                       <input type="text" id="search-courses">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-lg-5">
                                       <div class="course__box">
                                          <div class="course__imgleft" style="background-image: url('assets/images/newimages/courses/1.webp'); background-size: cover;">
                                             course1
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-7">
                                       <div class="courseright__details">
                                          <div class="nameandlecture_area">
                                             <div class="lacture_Count"><i class="fas fa-user-friends"></i> Nortech </div>
                                             <div class="nameauthor__Course"><i class="fa fa-bars pr-1"></i> 5 <span>lectures</span>
                                             </div>
                                          </div>
                                          <div class="coursemain_titlearea">
                                             <div class="courseicon__imgC">
                                                <img class="brand-logo ls-is-cached lazyloaded" alt="band-protocol logo" data-src="https://assets.bitdegree.org/assets/learndrops/primexbt/primexbt-coin.png" src="https://assets.bitdegree.org/assets/learndrops/primexbt/primexbt-coin.png">
                                             </div>
                                             <a class="course-title__" href="##">
                                                <h2 class="mb-0 text-capitalize">Learn PrimeXBT</h2>
                                             </a>
                                          </div>
                                          <p class="courseshort__detailC">PrimeXBT is a crypto-native trading platform for both beginners &amp; advanced-level enthusiasts. Take a course, learn &amp; start using it today!</p>
                                          <div class="mainprogressbox">
                                             <div  class="progress my-2 w-100">
                                                <div  aria-valuenow="100" role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar" style="width: 100%;"></div>
                                             </div>
                                             <div  class="hexagon-box">
                                                <img src="assets/images/newimages/courses/certificate-icon.svg" alt="">
                                                <!-- <div  class="progresS-bg">
                                                   <i class="fas fa-check font-weight-bold"></i>
                                                   </div> -->
                                             </div>
                                          </div>
                                          <div class="progress__areaP ">
                                             <a href="##" class="btn btn-lined-rounded"><span>Watch again</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-lg-5">
                                       <div class="course__box">
                                          <div class="course__imgleft" style="background-image: url('assets/images/newimages/courses/2.jpeg'); background-size: cover;">
                                             course1
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-7">
                                       <div class="courseright__details">
                                          <div class="nameandlecture_area">
                                             <div class="lacture_Count"><i class="fas fa-user-friends"></i> Nortech </div>
                                             <div class="nameauthor__Course"><i class="fa fa-bars pr-1"></i> 5 <span>lectures</span>
                                             </div>
                                          </div>
                                          <div class="coursemain_titlearea">
                                             <div class="courseicon__imgC">
                                                <img class="brand-logo ls-is-cached lazyloaded" alt="band-protocol logo" data-src="https://assets.bitdegree.org/assets/learndrops/primexbt/primexbt-coin.png" src="https://assets.bitdegree.org/assets/learndrops/primexbt/primexbt-coin.png">
                                             </div>
                                             <a class="course-title__" href="##">
                                                <h2 class="mb-0 text-capitalize">Cryptocurrency 101: A Simplified Guide</h2>
                                             </a>
                                          </div>
                                          <p class="courseshort__detailC">PrimeXBT is a crypto-native trading platform for both beginners &amp; advanced-level enthusiasts. Take a course, learn &amp; start using it today!</p>
                                          <div class="mainprogressbox">
                                             <div  class="progress my-2 w-100">
                                                <div  aria-valuenow="100" role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar" style="width: 100%;"></div>
                                             </div>
                                             <div  class="hexagon-box">
                                                <img src="assets/images/newimages/courses/certificate-icon.svg" alt="">
                                                <!-- <div  class="progresS-bg">
                                                   <i class="fas fa-check font-weight-bold"></i>
                                                   </div> -->
                                             </div>
                                          </div>
                                          <div class="progress__areaP ">
                                             <a href="##" class="btn btn-lined-rounded"><span>Watch again</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-lg-5">
                                       <div class="course__box">
                                          <div class="course__imgleft" style="background-image: url('assets/images/newimages/courses/3.jpeg'); background-size: cover;">
                                             course1
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-7">
                                       <div class="courseright__details">
                                          <div class="nameandlecture_area">
                                             <div class="lacture_Count"><i class="fas fa-user-friends"></i> Nortech </div>
                                             <div class="nameauthor__Course"><i class="fa fa-bars pr-1"></i> 5 <span>lectures</span>
                                             </div>
                                          </div>
                                          <div class="coursemain_titlearea">
                                             <div class="courseicon__imgC">
                                                <img class="brand-logo ls-is-cached lazyloaded" alt="band-protocol logo" data-src="https://assets.bitdegree.org/assets/learndrops/primexbt/primexbt-coin.png" src="https://assets.bitdegree.org/assets/learndrops/primexbt/primexbt-coin.png">
                                             </div>
                                             <a class="course-title__" href="##">
                                                <h2 class="mb-0 text-capitalize">Learn to Analyze The Crypto Projects </h2>
                                             </a>
                                          </div>
                                          <p class="courseshort__detailC">PrimeXBT is a crypto-native trading platform for both beginners &amp; advanced-level enthusiasts. Take a course, learn &amp; start using it today!</p>
                                          <div class="mainprogressbox">
                                             <div  class="progress my-2 w-100">
                                                <div  aria-valuenow="100" role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar" style="width: 100%;"></div>
                                             </div>
                                             <div  class="hexagon-box">
                                                <img src="assets/images/newimages/courses/certificate-icon.svg" alt="">
                                                <!-- <div  class="progresS-bg">
                                                   <i class="fas fa-check font-weight-bold"></i>
                                                   </div> -->
                                             </div>
                                          </div>
                                          <div class="progress__areaP ">
                                             <a href="##" class="btn btn-lined-rounded"><span>Watch again</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li data-status="completed">completed</li>
                              <li data-status="learning">learning</li>
                              <li data-status="wishlist">wishlist</li>
                              <li data-status="new">Course 5 (New Course)</li>
                              <li data-status="new">Course 6 (New Course)</li>
                              <!-- Add more courses with data-status as needed -->
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="hidden" id="Courses" role="tabpanel" aria-labelledby="Courses-tab">
                  </div>
                  <div class="hidden" id="Portfolio" role="tabpanel" aria-labelledby="Portfolio-tab">
                     <div class="box">
                        <div class="box-header">
                           <h3>User Management</h3>
                        </div>
                        <div class="box-body">
                           <div class="custom_table_area">
                              <div class="tabltoparea">
                                 <div id="entries-container"></div>
                                 <div id="search-button-container"></div>
                              </div>
                              <div class="table-responsive">
                                 <table class="datatable " id="export-button">
                                    <thead>
                                       <tr>
                                          <th>Name</th>
                                          <th>Fees Adjust</th>
                                          <th>Gain</th>
                                          <th class="actionbtnarea">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                   <img src="assets/images/newimages/avatar-1.jpg" alt="" class="avatar-xs rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">Vihan Hudda</div>
                                             </div>
                                          </td>
                                          <td>10%</td>
                                          <td>
                                             <div class="flex-shrink-0">
                                                <h5 class="text-success fs-14 mb-0">
                                                   +16.24 %  <i class="fa-solid fa-arrow-trend-up"></i> 
                                                </h5>
                                             </div>
                                          </td>
                                          <td>
                                             <a href="#" class="ban_Service_btn"><i class="fa-solid fa-ban"></i> Ban Service</a> 
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <div class="entries_pagination">
                                 <div id="info-container"></div>
                                 <div id="pagination-container"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="hidden" id="ID" role="tabpanel" aria-labelledby="ID-tab">
                  </div>
                  <div class="hidden" id="History" role="tabpanel" aria-labelledby="History-tab">
                  </div>
                  <div class="hidden" id="Stats" role="tabpanel" aria-labelledby="Stats-tab">
                  </div>
               </div>
            </div>
         </div>
         <!--end col-->
      </div>
      <!-- End Content -->
   </div>
</div>
<!--end container-->
<?php include("footer.php") ?>
<script>
$(document).ready(function() {
    // Initialize Select2 on the course-filter select element
    $('#course-filter').select2();

    const courseItems = document.querySelectorAll('#course-list li');

    $('#course-filter, #search-courses').on('change input', function() {
        filterCourses();
    });

    // Set the initial value to "new" and trigger the change event
    $('#course-filter').val('new').trigger('change');

    function filterCourses() {
        const selectedFilter = $('#course-filter').val().toLowerCase();
        const searchQuery = $('#search-courses').val().toLowerCase();

        courseItems.forEach(course => {
            const courseStatus = course.getAttribute('data-status').toLowerCase();
            const courseName = course.innerText.toLowerCase();
            const isMatch = courseName.includes(searchQuery);

            if ((selectedFilter === "all" || selectedFilter === courseStatus) && isMatch) {
                course.style.display = 'block';
            } else {
                course.style.display = 'none';
            }
        });
    }
});

</script>
