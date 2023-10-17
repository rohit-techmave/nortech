<?php include("header.php") ?>


<!-- Add FontAwesome stylesheet (you need an internet connection for this) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<div class="container-fluid relative px-3">
   <div class="layout-specing">
  
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
               
               <div id="StarterContent" class="mt-6">

                  <div class="" id="Finance" role="tabpanel" aria-labelledby="Finance-tab">

                  <div class="filter__header__">
                  <h6 class="text-lg font-semibold">Your Courses</h6>
              

                  <select id="course-filter">
    <option value="new">New Courses</option>
    <option value="enrolled">Enrolled Courses</option>
    <option value="completed">Completed Courses</option>
    <option value="learning">Learning Paths</option>
    <option value="wishlist">Wish List</option>
</select>


                

               </div>

                     <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-800 overflow-hidden ease-in-out duration-500 w-full ">
                        <div class="row ">
                           <ul id="course-list">
                        
                          

                              <li data-status="enrolled" id="enrolled_courselist" style="display: none;">

                              <div class="course__header_tit">
                                    <div class="coursecat_titlte">
                                       <h2>Enrolled Courses</h2>
                                    </div>
                                 <div class="search-container">
                                       <label for="search-courses">Search Courses:</label>
                                       <input type="text" id="search-courses">
                                    </div>
                                 </div>

                                 <div class="row course__boxmain">
                                    <div class="col-lg-5">
                                       <div class="course__box">
                                       <span class="enrolled_badge">Enrolled</span>
                                          <div class="course__imgleft" style="background-image: url('assets/images/newimages/courses/5.jpeg'); background-size: cover;">
                                             
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-7">
                                       <div class="courseright__details">
                                         <div class="row">
                                         <div class="col-12 col-md-6">
                                         <div class="nameandlecture_area">
                                             <div class="lacture_Count"><i class="fas fa-user-friends"></i> Nortech </div>
                                             <div class="nameauthor__Course"><i class="fa fa-bars pr-1"></i> 5 <span>lectures</span>
                                             </div>
                                          </div>
                                         </div>
                                          <div class="col-12 col-md-6 text-right">
                                             <div class="course-rewards">
                                                <span class="course-reward">+100XP</span> 
                                                <span  class="course-reward">+<span  class="translation">Certificate</span></span>
                                             </div>
                                          </div>
                                         </div>
                                          <div class="coursemain_titlearea">
                                             <!-- <div class="courseicon__imgC">
                                                <img class="brand-logo ls-is-cached lazyloaded" alt="band-protocol logo" data-src="https://assets.bitdegree.org/assets/learndrops/primexbt/primexbt-coin.png" src="https://assets.bitdegree.org/assets/learndrops/primexbt/primexbt-coin.png">
                                             </div> -->
                                             <a class="course-title__" href="##">
                                                <h2 class="mb-0 text-capitalize">Learn PrimeXBT</h2>
                                             </a>
                                          </div>
                                          <p class="courseshort__detailC">PrimeXBT is a crypto-native trading platform for both beginners &amp; advanced-level enthusiasts. Take a course, learn &amp; start using it today!</p>
                                          <div class="certificate_progress">
                                                <p>Certificate Progress</p>
                                             </div>
                                        

                                          <div class="enrollprogress__">
                                          <div  class="progress rounded-0"><div  aria-valuenow="17" role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar" style="width: 17%;"></div>
                                       </div>
                                            <div  data-toggle="tooltip" data-placement="top" title="" class="course-progress-award course-progress-award__certificate certificate-locked" data-original-title="Complete this course to unlock your Certificate!">
                                             <i  class="fas fa-lock hexagon-type"></i> <img  src="https://cdn.bitdegree.org/assets/certificate-grey-icon.svg" alt="Certificate icon"> 
                                             <div  class="hexagon-bg"></div>
                                          </div>

                                          </div>
                                          <div class="progress__areaP ">
                                             <a href="##" class="btn btn-lined-rounded"><span>Continue Learning</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row course__boxmain">
                                    <div class="col-lg-5">
                                       <div class="course__box">
                                       <span class="enrolled_badge">Enrolled</span>
                                          <div class="course__imgleft" style="background-image: url('assets/images/newimages/courses/5.webp'); background-size: cover;">
                                         
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
                                             <!-- <div class="courseicon__imgC">
                                                <img class="brand-logo ls-is-cached lazyloaded" alt="band-protocol logo" data-src="https://assets.bitdegree.org/assets/learndrops/primexbt/primexbt-coin.png" src="https://assets.bitdegree.org/assets/learndrops/primexbt/primexbt-coin.png">
                                             </div> -->
                                             <a class="course-title__" href="##">
                                                <h2 class="mb-0 text-capitalize">Cryptocurrency 101: A Simplified Guide</h2>
                                             </a>
                                          </div>
                                          <p class="courseshort__detailC">PrimeXBT is a crypto-native trading platform for both beginners &amp; advanced-level enthusiasts. Take a course, learn &amp; start using it today!</p>
                                          <div class="certificate_progress">
                                                <p>Certificate Progress</p>
                                             </div>
                                             <div class="enrollprogress__">
                                          <div  class="progress rounded-0"><div  aria-valuenow="17" role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar" style="width: 17%;"></div>
                                       </div>
                                            <div  data-toggle="tooltip" data-placement="top" title="" class="course-progress-award course-progress-award__certificate certificate-locked" data-original-title="Complete this course to unlock your Certificate!">
                                             <i  class="fas fa-lock hexagon-type"></i> <img  src="https://cdn.bitdegree.org/assets/certificate-grey-icon.svg" alt="Certificate icon"> 
                                             <div  class="hexagon-bg"></div>
                                          </div>

                                          </div>
                                          <div class="progress__areaP ">
                                             <a href="##" class="btn btn-lined-rounded"><span>Continue Learning</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                
                              </li>


                              <li data-status="completed">
                              <div class="course__header_tit">
                                    <div class="coursecat_titlte">
                                       <h2>Completed Courses</h2>
                                    </div>
                                 <div class="search-container">
                                       <label for="search-courses">Search Courses:</label>
                                       <input type="text" id="search-courses">
                                    </div>
                                 </div>
                             
                                 <div class="row course__boxmain">
                                    <div class="col-lg-5">
                                       <div class="course__box">
                                       <span class="completed_badge">Completed</span>
                                          <div class="course__imgleft" style="background-image: url('assets/images/newimages/courses/1.webp'); background-size: cover;">
                                            
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
                                             <!-- <div class="courseicon__imgC">
                                                <img class="brand-logo ls-is-cached lazyloaded" alt="band-protocol logo" data-src="https://assets.bitdegree.org/assets/learndrops/primexbt/primexbt-coin.png" src="https://assets.bitdegree.org/assets/learndrops/primexbt/primexbt-coin.png">
                                             </div> -->
                                             <a class="course-title__" href="##">
                                                <h2 class="mb-0 text-capitalize">Learn PrimeXBT</h2>
                                             </a>
                                          </div>
                                          <p class="courseshort__detailC">PrimeXBT is a crypto-native trading platform for both beginners &amp; advanced-level enthusiasts. Take a course, learn &amp; start using it today!</p>
                                          <div class="certificate_progress">
                                                <p>Certificate Progress</p>
                                             </div>
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

                                 <div class="row course__boxmain">
                                    <div class="col-lg-5">
                                       <div class="course__box">
                                       <span class="completed_badge">Completed</span>
                                          <div class="course__imgleft" style="background-image: url('assets/images/newimages/courses/2.jpeg'); background-size: cover;">
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
                                             <!-- <div class="courseicon__imgC">
                                                <img class="brand-logo ls-is-cached lazyloaded" alt="band-protocol logo" data-src="https://assets.bitdegree.org/assets/learndrops/primexbt/primexbt-coin.png" src="https://assets.bitdegree.org/assets/learndrops/primexbt/primexbt-coin.png">
                                             </div> -->
                                             <a class="course-title__" href="##">
                                                <h2 class="mb-0 text-capitalize">Cryptocurrency 101: A Simplified Guide</h2>
                                             </a>
                                          </div>
                                          <p class="courseshort__detailC">PrimeXBT is a crypto-native trading platform for both beginners &amp; advanced-level enthusiasts. Take a course, learn &amp; start using it today!</p>
                                          <div class="certificate_progress">
                                                <p>Certificate Progress</p>
                                             </div>
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

                                 <div class="row course__boxmain">
                                    <div class="col-lg-5">
                                       <div class="course__box">
                                       <span class="completed_badge">Completed</span>
                                          <div class="course__imgleft" style="background-image: url('assets/images/newimages/courses/3.jpeg'); background-size: cover;">
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
                                             <!-- <div class="courseicon__imgC">
                                                <img class="brand-logo ls-is-cached lazyloaded" alt="band-protocol logo" data-src="https://assets.bitdegree.org/assets/learndrops/primexbt/primexbt-coin.png" src="https://assets.bitdegree.org/assets/learndrops/primexbt/primexbt-coin.png">
                                             </div> -->
                                             <a class="course-title__" href="##">
                                                <h2 class="mb-0 text-capitalize">Learn to Analyze The Crypto Projects </h2>
                                             </a>
                                          </div>
                                          <p class="courseshort__detailC">PrimeXBT is a crypto-native trading platform for both beginners &amp; advanced-level enthusiasts. Take a course, learn &amp; start using it today!</p>
                                          <div class="certificate_progress">
                                                <p>Certificate Progress</p>
                                             </div>
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
                              <li data-status="learning">
                              <div class="course__header_tit">
                                    <div class="coursecat_titlte">
                                       <h2>Learning Courses</h2>
                                    </div>
                                 <div class="search-container">
                                       <label for="search-courses">Search Courses:</label>
                                       <input type="text" id="search-courses">
                                    </div>
                                 </div>
                                 <div class="allcourse_grid_box row">
                            
                            
                                 <div class="col-lg-3 col-md-6">
                                 <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <img src="assets/images/newimages/courses/2.jpeg" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
        
                                </div>
        
                                <div class="mt-3">
                                <div class="instructerand_ration">
                                        <a href="##" class="instructor_text">Instructor </a>
                                        <div class="star-rating">
                                             <div class="star-rating__star">&#9733;</div>
                                             <div class="star-rating__text">
                                                   <span class="star-rating__rating">4.6</span>
                                                   <span class="star-rating__count">(20)</span>
                                             </div>
                                          </div>
                                    </div>
        
                                    <div class="my-3">
                                        <a href="##" class="font-semibold hover:text-violet-600">Genuine Undead #3902</a>
                                    </div>
        
                                    <div class="course_ENB_time bg-gray-50 dark:bg-slate-800 rounded-lg shadow dark:shadow-gray-700">
                                        <div class="course_totlaenrolled">
                                            <span class="E_title">Enrolled</span>
                                            <span class="Enumber__"><i class="fa fa-users"></i> 250+</span>
                                        </div>
                                        
                                        <div class="course_timE">
                                            <span class="E_title">Time</span>
                                            <span class="Enumber__"><i class="mdi mdi-clock"></i> 1h 45min</span>
                                        </div>
                                    </div>
                                    <div class="courselearn_more_bt">
                                    <a href="##" class="btn "> Learn More</a>
                                    </div>
                                </div>
                            </div><!--end content-->
                                 </div>
        
                            <div class="col-lg-3 col-md-6">
                            <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <img src="assets/images/newimages/courses/5.jpeg" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
                                    
                                </div>
        
                                <div class="mt-3">
                                <div class="instructerand_ration">
                                        <a href="##" class="instructor_text">Instructor </a>
                                        <div class="star-rating">
                                             <div class="star-rating__star">&#9733;</div>
                                             <div class="star-rating__text">
                                                   <span class="star-rating__rating">4.6</span>
                                                   <span class="star-rating__count">(20)</span>
                                             </div>
                                          </div>
                                    </div>
        
                                    <div class="my-3">
                                        <a href="##" class="font-semibold hover:text-violet-600">Windchime #768</a>
                                    </div>
        
                                    <div class="course_ENB_time bg-gray-50 dark:bg-slate-800 rounded-lg shadow dark:shadow-gray-700">
                                        <div class="course_totlaenrolled">
                                            <span class="E_title">Enrolled</span>
                                            <span class="Enumber__"><i class="fa fa-users"></i> 250+</span>
                                        </div>
                                        
                                        <div class="course_timE">
                                            <span class="E_title">Time</span>
                                            <span class="Enumber__"><i class="mdi mdi-clock"></i> 1h 45min</span>
                                        </div>
                                    </div>
                                    <div class="courselearn_more_bt">
                                    <a href="##" class="btn "> Learn More</a>
                                    </div>
                                </div>
                            </div><!--end content-->
                            </div>
        
                           <div class="col-lg-3 col-md-6">
                           <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <img src="assets/images/newimages/courses/7.jpeg" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
                                    
                                </div>
        
                                <div class="mt-3">
                                <div class="instructerand_ration">
                                        <a href="##" class="instructor_text">Instructor </a>
                                        <div class="star-rating">
                                             <div class="star-rating__star">&#9733;</div>
                                             <div class="star-rating__text">
                                                   <span class="star-rating__rating">4.6</span>
                                                   <span class="star-rating__count">(20)</span>
                                             </div>
                                          </div>
                                    </div>
        
                                    <div class="my-3">
                                        <a href="##" class="font-semibold hover:text-violet-600">Probably A Label #3277</a>
                                    </div>
        
                                    <div class="course_ENB_time bg-gray-50 dark:bg-slate-800 rounded-lg shadow dark:shadow-gray-700">
                                        <div class="course_totlaenrolled">
                                            <span class="E_title">Enrolled</span>
                                            <span class="Enumber__"><i class="fa fa-users"></i> 250+</span>
                                        </div>
                                        
                                        <div class="course_timE">
                                            <span class="E_title">Time</span>
                                            <span class="Enumber__"><i class="mdi mdi-clock"></i> 1h 45min</span>
                                        </div>
                                    </div>
                                    <div class="courselearn_more_bt">
                                    <a href="##" class="btn "> Learn More</a>
                                    </div>
                                </div>
                            </div><!--end content-->
                           </div>
        
                            <div class="col-lg-3 col-md-6">
                            <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <img src="assets/images/newimages/courses/4.webp" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
                                    
                                </div>
        
                                <div class="mt-3">
                                <div class="instructerand_ration">
                                        <a href="##" class="instructor_text">Instructor </a>
                                        <div class="star-rating">
                                             <div class="star-rating__star">&#9733;</div>
                                             <div class="star-rating__text">
                                                   <span class="star-rating__rating">4.6</span>
                                                   <span class="star-rating__count">(20)</span>
                                             </div>
                                          </div>
                                    </div>
        
                                    <div class="my-3">
                                        <a href="##" class="font-semibold hover:text-violet-600">Probably A Label #1711</a>
                                    </div>
        
                                    <div class="course_ENB_time bg-gray-50 dark:bg-slate-800 rounded-lg shadow dark:shadow-gray-700">
                                        <div class="course_totlaenrolled">
                                            <span class="E_title">Enrolled</span>
                                            <span class="Enumber__"><i class="fa fa-users"></i> 250+</span>
                                        </div>
                                        
                                        <div class="course_timE">
                                            <span class="E_title">Time</span>
                                            <span class="Enumber__"><i class="mdi mdi-clock"></i> 1h 45min</span>
                                        </div>
                                    </div>
                                    <div class="courselearn_more_bt">
                                    <a href="##" class="btn "> Learn More</a>
                                    </div>
                                </div>
                            </div><!--end content-->
                            </div>
        
                            <div class="col-lg-3 col-md-6">
                            <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <img src="assets/images/newimages/courses/5.webp" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
                                </div>
        
                                <div class="mt-3">
                                <div class="instructerand_ration">
                                        <a href="##" class="instructor_text">Instructor </a>
                                        <div class="star-rating">
                                             <div class="star-rating__star">&#9733;</div>
                                             <div class="star-rating__text">
                                                   <span class="star-rating__rating">4.6</span>
                                                   <span class="star-rating__count">(20)</span>
                                             </div>
                                          </div>
                                    </div>
        
                                    <div class="my-3">
                                        <a href="##" class="font-semibold hover:text-violet-600">Shibuya Scramble Punks</a>
                                    </div>
        
                                    <div class="course_ENB_time bg-gray-50 dark:bg-slate-800 rounded-lg shadow dark:shadow-gray-700">
                                        <div class="course_totlaenrolled">
                                            <span class="E_title">Enrolled</span>
                                            <span class="Enumber__"><i class="fa fa-users"></i> 250+</span>
                                        </div>
                                        
                                        <div class="course_timE">
                                            <span class="E_title">Time</span>
                                            <span class="Enumber__"><i class="mdi mdi-clock"></i> 1h 45min</span>
                                        </div>
                                    </div>
                                    <div class="courselearn_more_bt">
                                    <a href="##" class="btn "> Learn More</a>
                                    </div>
                                </div>
                            </div><!--end content-->
                            </div>
        
                           <div class="col-lg-3 col-md-6">
                           <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <img src="assets/images/newimages/courses/1.webp" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
                                    
                                </div>
        
                                <div class="mt-3">
                                <div class="instructerand_ration">
                                        <a href="##" class="instructor_text">Instructor </a>
                                        <div class="star-rating">
                                             <div class="star-rating__star">&#9733;</div>
                                             <div class="star-rating__text">
                                                   <span class="star-rating__rating">4.6</span>
                                                   <span class="star-rating__count">(20)</span>
                                             </div>
                                          </div>
                                    </div>
        
                                    <div class="my-3">
                                        <a href="##" class="font-semibold hover:text-violet-600">Probably A Label #650</a>
                                    </div>
        
                                    <div class="course_ENB_time bg-gray-50 dark:bg-slate-800 rounded-lg shadow dark:shadow-gray-700">
                                        <div class="course_totlaenrolled">
                                            <span class="E_title">Enrolled</span>
                                            <span class="Enumber__"><i class="fa fa-users"></i> 250+</span>
                                        </div>
                                        
                                        <div class="course_timE">
                                            <span class="E_title">Time</span>
                                            <span class="Enumber__"><i class="mdi mdi-clock"></i> 1h 45min</span>
                                        </div>
                                    </div>
                                    <div class="courselearn_more_bt">
                                    <a href="##" class="btn "> Learn More</a>
                                    </div>
                                </div>
                            </div><!--end content-->
                           </div>
        
                           <div class="col-lg-3 col-md-6">
                           <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <img src="assets/images/newimages/courses/3.jpeg" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
                                    
                                </div>
        
                                <div class="mt-3">
                                    <div class="instructerand_ration">
                                        <a href="##" class="instructor_text">Instructor </a>
                                        <div class="star-rating">
                                             <div class="star-rating__star">&#9733;</div>
                                             <div class="star-rating__text">
                                                   <span class="star-rating__rating">4.6</span>
                                                   <span class="star-rating__count">(20)</span>
                                             </div>
                                          </div>
                                    </div>
        
                                    <div class="my-3">
                                        <a href="##" class="font-semibold hover:text-violet-600">Looki#0147</a>
                                    </div>
        
                                    <div class="course_ENB_time bg-gray-50 dark:bg-slate-800 rounded-lg shadow dark:shadow-gray-700">
                                        <div class="course_totlaenrolled">
                                            <span class="E_title">Enrolled</span>
                                            <span class="Enumber__"><i class="fa fa-users"></i> 250+</span>
                                        </div>
                                        
                                        <div class="course_timE">
                                            <span class="E_title">Time</span>
                                            <span class="Enumber__"><i class="mdi mdi-clock"></i> 1h 45min</span>
                                        </div>
                                    </div>
                                    <div class="courselearn_more_bt">
                                    <a href="##" class="btn "> Learn More</a>
                                    </div>
                                </div>
                            </div><!--end content-->
                           </div>
        
                            <div class="col-lg-3 col-md-6">
                            <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <img src="assets/images/newimages/courses/4.jpeg" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
                                    
                                </div>
        
                                <div class="mt-3">
                                <div class="instructerand_ration">
                                        <a href="##" class="instructor_text">Instructor </a>
                                        <div class="star-rating">
                                             <div class="star-rating__star">&#9733;</div>
                                             <div class="star-rating__text">
                                                   <span class="star-rating__rating">4.6</span>
                                                   <span class="star-rating__count">(20)</span>
                                             </div>
                                          </div>
                                    </div>
        
                                    <div class="my-3">
                                        <a href="##" class="font-semibold hover:text-violet-600">Poob #285</a>
                                    </div>
        
                                    <div class="course_ENB_time bg-gray-50 dark:bg-slate-800 rounded-lg shadow dark:shadow-gray-700">
                                        <div class="course_totlaenrolled">
                                            <span class="E_title">Enrolled</span>
                                            <span class="Enumber__"><i class="fa fa-users"></i> 250+</span>
                                        </div>
                                        
                                        <div class="course_timE">
                                            <span class="E_title">Time</span>
                                            <span class="Enumber__"><i class="mdi mdi-clock"></i> 1h 45min</span>
                                        </div>
                                    </div>

                                    <div class="courselearn_more_bt">
                                    <a href="##" class="btn "> Learn More</a>
                                    </div>
                                </div>
                            </div><!--end content-->
                            </div>
        
                          
                           
                        </div>
                              </li>
                              <li data-status="wishlist" id="wishlist_list">
                                 <div class="course__header_tit">
                                    <div class="coursecat_titlte">
                                       <h2>Wishlist Courses</h2>
                                    </div>
                                 <div class="search-container">
                                       <label for="search-courses">Search Courses:</label>
                                       <input type="text" id="search-courses">
                                    </div>
                                 </div>
                                
                                 <div class="row course__boxmain favorite_course_added" >
                                    <div class="col-lg-5">
                                       <div class="course__box">
                                       <span class="favorite_badge">Enrolled</span>
                                          <div class="course__imgleft" style="background-image: url('assets/images/newimages/courses/5.jpeg'); background-size: cover;">
                                             
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-7">
                                       <div class="courseright__details">
                                         <div class="row">
                                         <div class="col-12 col-md-6">
                                         <div class="nameandlecture_area">
                                             <div class="lacture_Count"><i class="fas fa-user-friends"></i> Nortech </div>
                                             <div class="nameauthor__Course"><i class="fa fa-bars pr-1"></i> 5 <span>lectures</span>
                                             </div>
                                          </div>
                                         </div>
                                          <div class="col-12 col-md-6 text-right">
                                             <div class="course-rewards">
                                                <span class="course-reward">+100XP</span> 
                                                <span  class="course-reward">+<span  class="translation">Certificate</span></span>
                                             </div>
                                          </div>
                                         </div>
                                          <div class="coursemain_titlearea">
                                           
                                             <a class="course-title__" href="##">
                                                <h2 class="mb-0 text-capitalize">Learn PrimeXBT</h2>
                                             </a>
                                          </div>
                                          <p class="courseshort__detailC">PrimeXBT is a crypto-native trading platform for both beginners &amp; advanced-level enthusiasts. Take a course, learn &amp; start using it today!</p>
                                    
                                        
                                             <div class="rating course__rating__">
                                                   <div class="stars">
                                                      <span class="star">&#9733;</span>
                                                      <span class="star">&#9733;</span>
                                                      <span class="star">&#9733;</span>
                                                      <span class="star">&#9733;</span>
                                                      <span class="star">&#9733;</span>
                                                   </div>
                                                   <div class="rating-text">
                                                      4.4 (13 reviews)
                                                   </div>
                                                </div>

                                          <div class="areabtn_and_viewcourse">

                                              <div class="favoritetime_remove">
                                              <p><i class="fa-solid fa-bookmark"></i> Added on: <span id="course1-added-time"> 2023-10-12 09:43:35</span></p>
                                               <button class="remove-button"><i class="fa-solid fa-xmark"></i> Remove</button>
                                              </div>

                                             <a href="##" class="btn btn-lined-rounded"><span>View Course</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row course__boxmain favorite_course_added" >
                                    <div class="col-lg-5">
                                       <div class="course__box">
                                       <span class="favorite_badge">Enrolled</span>
                                          <div class="course__imgleft" style="background-image: url('assets/images/newimages/courses/6.jpeg'); background-size: cover;">
                                             
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-7">
                                       <div class="courseright__details">
                                         <div class="row">
                                         <div class="col-12 col-md-6">
                                         <div class="nameandlecture_area">
                                             <div class="lacture_Count"><i class="fas fa-user-friends"></i> Nortech </div>
                                             <div class="nameauthor__Course"><i class="fa fa-bars pr-1"></i> 5 <span>lectures</span>
                                             </div>
                                          </div>
                                         </div>
                                          <div class="col-12 col-md-6 text-right">
                                             <div class="course-rewards">
                                                <span class="course-reward">+100XP</span> 
                                                <span  class="course-reward">+<span  class="translation">Certificate</span></span>
                                             </div>
                                          </div>
                                         </div>
                                          <div class="coursemain_titlearea">
                                           
                                             <a class="course-title__" href="##">
                                                <h2 class="mb-0 text-capitalize">Learn PrimeXBT</h2>
                                             </a>
                                          </div>
                                          <p class="courseshort__detailC">PrimeXBT is a crypto-native trading platform for both beginners &amp; advanced-level enthusiasts. Take a course, learn &amp; start using it today!</p>
                                    
                                        
                                             <div class="rating course__rating__">
                                                   <div class="stars">
                                                      <span class="star">&#9733;</span>
                                                      <span class="star">&#9733;</span>
                                                      <span class="star">&#9733;</span>
                                                      <span class="star">&#9733;</span>
                                                      <span class="star">&#9733;</span>
                                                   </div>
                                                   <div class="rating-text">
                                                      4.4 (13 reviews)
                                                   </div>
                                                </div>

                                                <div class="areabtn_and_viewcourse">

                                                      <div class="favoritetime_remove">
                                                      <p><i class="fa-solid fa-bookmark"></i> Added on: <span id="course1-added-time"> 2023-10-12 09:43:35</span></p>
                                                      <button class="remove-button"><i class="fa-solid fa-xmark"></i> Remove</button>
                                                      </div>

                                                      <a href="##" class="btn btn-lined-rounded"><span>View Course</span>
                                                      </a>
                                                </div>
                                       </div>
                                    </div>
                                 </div>
                              
                                 <div class="alert courseremovealert" id="remove-alert">Course removed from favorites</div>

                              </li>


                              <li data-status="new">
                                 
                              <div class="course__header_tit">
                                    <div class="coursecat_titlte">
                                       <h2>New Courses</h2>
                                    </div>
                                 <div class="search-container">
                                       <label for="search-courses">Search Courses:</label>
                                       <input type="text" id="search-courses">
                                    </div>
                                 </div>

                                 <div class="allcourse__listarea">

                                 <div class="allcourse_grid_box row">
                            
                            
                                 <div class="col-lg-3 col-md-6">
                                 <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <img src="assets/images/newimages/courses/2.jpeg" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
        
                                </div>
        
                                <div class="mt-3">
                                <div class="instructerand_ration">
                                        <a href="##" class="instructor_text">Instructor </a>
                                        <div class="star-rating">
                                             <div class="star-rating__star">&#9733;</div>
                                             <div class="star-rating__text">
                                                   <span class="star-rating__rating">4.6</span>
                                                   <span class="star-rating__count">(20)</span>
                                             </div>
                                          </div>
                                    </div>
        
                                    <div class="my-3">
                                        <a href="##" class="font-semibold hover:text-violet-600">Genuine Undead #3902</a>
                                    </div>
        
                                    <div class="course_ENB_time bg-gray-50 dark:bg-slate-800 rounded-lg shadow dark:shadow-gray-700">
                                        <div class="course_totlaenrolled">
                                            <span class="E_title">Enrolled</span>
                                            <span class="Enumber__"><i class="fa fa-users"></i> 250+</span>
                                        </div>
                                        
                                        <div class="course_timE">
                                            <span class="E_title">Time</span>
                                            <span class="Enumber__"><i class="mdi mdi-clock"></i> 1h 45min</span>
                                        </div>
                                    </div>
                                    <div class="courselearn_more_bt">
                                    <a href="##" class="btn "> Learn More</a>
                                    </div>
                                </div>
                            </div><!--end content-->
                                 </div>
        
                            <div class="col-lg-3 col-md-6">
                            <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <img src="assets/images/newimages/courses/5.jpeg" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
                                    
                                </div>
        
                                <div class="mt-3">
                                <div class="instructerand_ration">
                                        <a href="##" class="instructor_text">Instructor </a>
                                        <div class="star-rating">
                                             <div class="star-rating__star">&#9733;</div>
                                             <div class="star-rating__text">
                                                   <span class="star-rating__rating">4.6</span>
                                                   <span class="star-rating__count">(20)</span>
                                             </div>
                                          </div>
                                    </div>
        
                                    <div class="my-3">
                                        <a href="##" class="font-semibold hover:text-violet-600">Windchime #768</a>
                                    </div>
        
                                    <div class="course_ENB_time bg-gray-50 dark:bg-slate-800 rounded-lg shadow dark:shadow-gray-700">
                                        <div class="course_totlaenrolled">
                                            <span class="E_title">Enrolled</span>
                                            <span class="Enumber__"><i class="fa fa-users"></i> 250+</span>
                                        </div>
                                        
                                        <div class="course_timE">
                                            <span class="E_title">Time</span>
                                            <span class="Enumber__"><i class="mdi mdi-clock"></i> 1h 45min</span>
                                        </div>
                                    </div>
                                    <div class="courselearn_more_bt">
                                    <a href="##" class="btn "> Learn More</a>
                                    </div>
                                </div>
                            </div><!--end content-->
                            </div>
        
                           <div class="col-lg-3 col-md-6">
                           <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <img src="assets/images/newimages/courses/7.jpeg" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
                                    
                                </div>
        
                                <div class="mt-3">
                                <div class="instructerand_ration">
                                        <a href="##" class="instructor_text">Instructor </a>
                                        <div class="star-rating">
                                             <div class="star-rating__star">&#9733;</div>
                                             <div class="star-rating__text">
                                                   <span class="star-rating__rating">4.6</span>
                                                   <span class="star-rating__count">(20)</span>
                                             </div>
                                          </div>
                                    </div>
        
                                    <div class="my-3">
                                        <a href="##" class="font-semibold hover:text-violet-600">Probably A Label #3277</a>
                                    </div>
        
                                    <div class="course_ENB_time bg-gray-50 dark:bg-slate-800 rounded-lg shadow dark:shadow-gray-700">
                                        <div class="course_totlaenrolled">
                                            <span class="E_title">Enrolled</span>
                                            <span class="Enumber__"><i class="fa fa-users"></i> 250+</span>
                                        </div>
                                        
                                        <div class="course_timE">
                                            <span class="E_title">Time</span>
                                            <span class="Enumber__"><i class="mdi mdi-clock"></i> 1h 45min</span>
                                        </div>
                                    </div>
                                    <div class="courselearn_more_bt">
                                    <a href="##" class="btn "> Learn More</a>
                                    </div>
                                </div>
                            </div><!--end content-->
                           </div>
        
                            <div class="col-lg-3 col-md-6">
                            <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <img src="assets/images/newimages/courses/4.webp" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
                                    
                                </div>
        
                                <div class="mt-3">
                                <div class="instructerand_ration">
                                        <a href="##" class="instructor_text">Instructor </a>
                                        <div class="star-rating">
                                             <div class="star-rating__star">&#9733;</div>
                                             <div class="star-rating__text">
                                                   <span class="star-rating__rating">4.6</span>
                                                   <span class="star-rating__count">(20)</span>
                                             </div>
                                          </div>
                                    </div>
        
                                    <div class="my-3">
                                        <a href="##" class="font-semibold hover:text-violet-600">Probably A Label #1711</a>
                                    </div>
        
                                    <div class="course_ENB_time bg-gray-50 dark:bg-slate-800 rounded-lg shadow dark:shadow-gray-700">
                                        <div class="course_totlaenrolled">
                                            <span class="E_title">Enrolled</span>
                                            <span class="Enumber__"><i class="fa fa-users"></i> 250+</span>
                                        </div>
                                        
                                        <div class="course_timE">
                                            <span class="E_title">Time</span>
                                            <span class="Enumber__"><i class="mdi mdi-clock"></i> 1h 45min</span>
                                        </div>
                                    </div>
                                    <div class="courselearn_more_bt">
                                    <a href="##" class="btn "> Learn More</a>
                                    </div>
                                </div>
                            </div><!--end content-->
                            </div>
        
                            <div class="col-lg-3 col-md-6">
                            <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <img src="assets/images/newimages/courses/5.webp" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
                                </div>
        
                                <div class="mt-3">
                                <div class="instructerand_ration">
                                        <a href="##" class="instructor_text">Instructor </a>
                                        <div class="star-rating">
                                             <div class="star-rating__star">&#9733;</div>
                                             <div class="star-rating__text">
                                                   <span class="star-rating__rating">4.6</span>
                                                   <span class="star-rating__count">(20)</span>
                                             </div>
                                          </div>
                                    </div>
        
                                    <div class="my-3">
                                        <a href="##" class="font-semibold hover:text-violet-600">Shibuya Scramble Punks</a>
                                    </div>
        
                                    <div class="course_ENB_time bg-gray-50 dark:bg-slate-800 rounded-lg shadow dark:shadow-gray-700">
                                        <div class="course_totlaenrolled">
                                            <span class="E_title">Enrolled</span>
                                            <span class="Enumber__"><i class="fa fa-users"></i> 250+</span>
                                        </div>
                                        
                                        <div class="course_timE">
                                            <span class="E_title">Time</span>
                                            <span class="Enumber__"><i class="mdi mdi-clock"></i> 1h 45min</span>
                                        </div>
                                    </div>
                                    <div class="courselearn_more_bt">
                                    <a href="##" class="btn "> Learn More</a>
                                    </div>
                                </div>
                            </div><!--end content-->
                            </div>
        
                           <div class="col-lg-3 col-md-6">
                           <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <img src="assets/images/newimages/courses/1.webp" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
                                    
                                </div>
        
                                <div class="mt-3">
                                <div class="instructerand_ration">
                                        <a href="##" class="instructor_text">Instructor </a>
                                        <div class="star-rating">
                                             <div class="star-rating__star">&#9733;</div>
                                             <div class="star-rating__text">
                                                   <span class="star-rating__rating">4.6</span>
                                                   <span class="star-rating__count">(20)</span>
                                             </div>
                                          </div>
                                    </div>
        
                                    <div class="my-3">
                                        <a href="##" class="font-semibold hover:text-violet-600">Probably A Label #650</a>
                                    </div>
        
                                    <div class="course_ENB_time bg-gray-50 dark:bg-slate-800 rounded-lg shadow dark:shadow-gray-700">
                                        <div class="course_totlaenrolled">
                                            <span class="E_title">Enrolled</span>
                                            <span class="Enumber__"><i class="fa fa-users"></i> 250+</span>
                                        </div>
                                        
                                        <div class="course_timE">
                                            <span class="E_title">Time</span>
                                            <span class="Enumber__"><i class="mdi mdi-clock"></i> 1h 45min</span>
                                        </div>
                                    </div>
                                    <div class="courselearn_more_bt">
                                    <a href="##" class="btn "> Learn More</a>
                                    </div>
                                </div>
                            </div><!--end content-->
                           </div>
        
                           <div class="col-lg-3 col-md-6">
                           <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <img src="assets/images/newimages/courses/3.jpeg" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
                                    
                                </div>
        
                                <div class="mt-3">
                                    <div class="instructerand_ration">
                                        <a href="##" class="instructor_text">Instructor </a>
                                        <div class="star-rating">
                                             <div class="star-rating__star">&#9733;</div>
                                             <div class="star-rating__text">
                                                   <span class="star-rating__rating">4.6</span>
                                                   <span class="star-rating__count">(20)</span>
                                             </div>
                                          </div>
                                    </div>
        
                                    <div class="my-3">
                                        <a href="##" class="font-semibold hover:text-violet-600">Looki#0147</a>
                                    </div>
        
                                    <div class="course_ENB_time bg-gray-50 dark:bg-slate-800 rounded-lg shadow dark:shadow-gray-700">
                                        <div class="course_totlaenrolled">
                                            <span class="E_title">Enrolled</span>
                                            <span class="Enumber__"><i class="fa fa-users"></i> 250+</span>
                                        </div>
                                        
                                        <div class="course_timE">
                                            <span class="E_title">Time</span>
                                            <span class="Enumber__"><i class="mdi mdi-clock"></i> 1h 45min</span>
                                        </div>
                                    </div>
                                    <div class="courselearn_more_bt">
                                    <a href="##" class="btn "> Learn More</a>
                                    </div>
                                </div>
                            </div><!--end content-->
                           </div>
        
                            <div class="col-lg-3 col-md-6">
                            <div class="group relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <img src="assets/images/newimages/courses/4.jpeg" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
                                    
                                </div>
        
                                <div class="mt-3">
                                <div class="instructerand_ration">
                                        <a href="##" class="instructor_text">Instructor </a>
                                        <div class="star-rating">
                                             <div class="star-rating__star">&#9733;</div>
                                             <div class="star-rating__text">
                                                   <span class="star-rating__rating">4.6</span>
                                                   <span class="star-rating__count">(20)</span>
                                             </div>
                                          </div>
                                    </div>
        
                                    <div class="my-3">
                                        <a href="##" class="font-semibold hover:text-violet-600">Poob #285</a>
                                    </div>
        
                                    <div class="course_ENB_time bg-gray-50 dark:bg-slate-800 rounded-lg shadow dark:shadow-gray-700">
                                        <div class="course_totlaenrolled">
                                            <span class="E_title">Enrolled</span>
                                            <span class="Enumber__"><i class="fa fa-users"></i> 250+</span>
                                        </div>
                                        
                                        <div class="course_timE">
                                            <span class="E_title">Time</span>
                                            <span class="Enumber__"><i class="mdi mdi-clock"></i> 1h 45min</span>
                                        </div>
                                    </div>

                                    <div class="courselearn_more_bt">
                                    <a href="##" class="btn "> Learn More</a>
                                    </div>
                                </div>
                            </div><!--end content-->
                            </div>
        
                          
                           
                        </div>
                                 </div>
                              </li>
                              <!-- Add more courses with data-status as needed -->
                           </ul>
                           <!-- <div class="noresult__contair">
                           <img id="no-results-image" src="assets/images/newimages/courses/searchresultimg.png" alt="No Course Found">
                           <p>No Course Found</p>
                           <h2>You've yet to discover our online courses!</h2>
                           </div> -->

                           <!-- <div id="no-results-container" >
        <img id="no-results-image" src="assets/images/newimages/courses/searchresultimg.png" alt="No Course Found">
        <p id="no-results-text">No courses found</p>
        <h2 id="no-results-text">You've yet to discover our online courses!</h2>
    </div> -->

    

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


