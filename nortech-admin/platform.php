<?php include("header.php") ?>

<!-- Add FontAwesome stylesheet (you need an internet connection for this) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


<div class="container-fluid relative px-3">
   <div class="layout-specing">
      <div class="main_tab_box__ank">
         <ul class="finance__area finanace_ank finance__as_area md:w-fit w-full  flex-wrap justify-center  p-3 bg-white  shadow dark:shadow-gray-800 rounded-md usertabdash"
            id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
            <li role="presentation" class="md:inline-block block md:w-fit w-full megaone">
               <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out custom-btn btn-11"
                  id="Finance-tab" data-tabs-target="#Finance" type="button" role="tab" aria-controls="Finance"
                  aria-selected="true">
                  Finance
                  <div class="dot"></div>
               </button>
            </li>
            <li role="presentation" class="md:inline-block block md:w-fit w-full megatwo">
               <button class="px-6 py-2 rounded-md w-full transition-all duration-500 ease-in-out" id="Courses-tab"
                  data-tabs-target="#Courses" type="button" role="tab" aria-controls="Courses"
                  aria-selected="false">Education</button>
            </li>
            <li role="presentation" class="md:inline-block block md:w-fit w-full">
               <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="Portfolio-tab"
                  data-tabs-target="#Portfolio" type="button" role="tab" aria-controls="Portfolio"
                  aria-selected="false">My
                  Marketplace</button>
            </li>
            <li role="presentation" class="md:inline-block block md:w-fit w-full">
               <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="ID-tab"
                  data-tabs-target="#ID" type="button" role="tab" aria-controls="ID" aria-selected="false">Smart
                  Report</button>
            </li>
            <!-- <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="History-tab"
               data-tabs-target="#History" type="button" role="tab" aria-controls="History"
               aria-selected="false">Settings</button>
         </li> -->
         </ul>

         <div class="mega-menu" id="menu1">
            <div class="col-lg-12 drop__box">
               <div class="location__list">
                  <ul class="md:w-fit w-full flex-wrap justify-center  p-3 bg-white  shadow dark:shadow-gray-800 rounded-md usertabdash history_tab_ak finance_tab"
                     id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                     <li role="presentation" class="md:inline-block block md:w-fit w-full">
                        <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out"
                           id="Reward-ak-tab" data-tabs-target="#Reward-ak" type="button" role="tab"
                           aria-controls="Reward-ak" aria-selected="true">General</button>
                     </li>
                     <li role="presentation" class="md:inline-block block md:w-fit w-full">
                        <button class="px-6 py-2 rounded-md w-full transition-all duration-500 ease-in-out"
                           id="Payway-ak-done-tab" data-tabs-target="#Payway-ak-done" type="button" role="tab"
                           aria-controls="Payway-ak-done" aria-selected="false">Challenge</button>
                     </li>
                     <li role="presentation" class="md:inline-block block md:w-fit w-full">
                        <button class="px-6 py-2 rounded-md w-full transition-all duration-500 ease-in-out"
                           id="History-ak-tab" data-tabs-target="#History-ak" type="button" role="tab"
                           aria-controls="History-ak" aria-selected="false">FishTank</button>
                     </li>
                     <li role="presentation" class="md:inline-block block md:w-fit w-full">
                        <button class="px-6 py-2 rounded-md w-full transition-all duration-500 ease-in-out"
                           id="Payway-tab" data-tabs-target="#Payway" type="button" role="tab" aria-controls="#Payway"
                           aria-selected="false">Payway</button>
                     </li>
                  </ul>
               </div>

            </div>

         </div>
      </div>


      <!-- end -->






      <div id="StarterContent" class="mt-6">
         <div class="" id="Finance" role="tabpanel" aria-labelledby="Finance-tab">
            <div class="lg:col-span-9 md:col-span-9">
               <div id="StarterContent">
                  <div class="tab-content" id="Reward-ak" role="tabpanel" aria-labelledby="Reward-ak-tab">
                     <div class="top__flex_">
                        <h3 class="main_title">General</h3>

                     </div>

                     <div class="row">
                        <div class="col-lg-12">
                           <div class="box">
                              <div class="box-header">
                                 <h3>Ranking Copy</h3>
                              </div>
                              <div class="box-body">
                                 <div class="datatable-container">
                                    <table id="datatable2" class="display">
                                       <thead>
                                          <tr>
                                             <th class="sortable sorted-asc">
                                                <div class="arrow_box">
                                                   <span>Name</span>
                                                   <div class="arrow"><i class="fas fa-arrow-up active-arrow"></i> <i
                                                         class="fas fa-arrow-down"></i></div>
                                                </div>
                                             </th>
                                           
                                             <th class="sortable">
                                                <div class="arrow_box">
                                                   <span>Gain/Loss</span>
                                                   <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                                         class="fas fa-arrow-down"></i></div>
                                                </div>

                                             </th>
                                             <th class="sortable">
                                                <div class="arrow_box">
                                                   <span>Rank</span>
                                                   <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                                         class="fas fa-arrow-down"></i></div>
                                                </div>
                                             </th>
                                             <th class="actionbtnarea action_th_box sortable">
                                                <div class="arrow_box">
                                                   <span>Action</span>
                                                   <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                                         class="fas fa-arrow-down"></i></div>
                                                </div>

                                             </th>

                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>
                                                <div class="d-flex align-items-center">
                                                   <div class="flex-shrink-0 me-2">
                                                      <img src="assets/images/newimages/avatar-1.jpg" alt=""
                                                         class="avatar-xs rounded-circle">
                                                   </div>
                                                   <div class="flex-grow-1">Vihan Hudda</div>
                                                </div>
                                             </td>
                                            
                                             <td>
                                                <div class="flex-shrink-0">
                                                   <h5 class="text-success fs-14 mb-0">
                                                      +16.24 % <i class="fa-solid fa-arrow-trend-up"></i>
                                                   </h5>
                                                </div>
                                             </td>
                                             <td>
                                               <span class="fw-semibold text-primary">#1</span>
                                             </td>
                                             <td>
                                                <div class="action_btn d-flex">
                                                <a href="#" class="notify_btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell h-4 w-4"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg> Notify</a>
                                                <a href="#" class="ban_Service_btn"><i class="fa-solid fa-ban"></i> Ban</a>
                                                </div>
                                               
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="d-flex align-items-center">
                                                   <div class="flex-shrink-0 me-2">
                                                      <img src="assets/images/newimages/avatar-2.jpg" alt=""
                                                         class="avatar-xs rounded-circle">
                                                   </div>
                                                   <div class="flex-grow-1">Jansh Brown</div>
                                                </div>
                                             </td>
                                           
                                             <td>
                                                <div class="flex-shrink-0">
                                                   <h5 class="text-danger fs-14 mb-0">
                                                      -08.24 % <i class="fa-solid fa-arrow-trend-down"></i>
                                                   </h5>
                                                </div>
                                             </td>
                                             <td>
                                             <span class="fw-semibold text-primary">#2</span>
                                             </td>
                                             <td>
                                             <div class="action_btn d-flex">
                                                <a href="#" class="notify_btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell h-4 w-4"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg> Notify</a>
                                                <a href="#" class="ban_Service_btn"><i class="fa-solid fa-ban"></i> Ban</a>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="d-flex align-items-center">
                                                   <div class="flex-shrink-0 me-2">
                                                      <img src="assets/images/newimages/avatar-3.jpg" alt=""
                                                         class="avatar-xs rounded-circle">
                                                   </div>
                                                   <div class="flex-grow-1">Ayaan Bowen</div>
                                                </div>
                                             </td>
                                            
                                             <td>
                                                <div class="flex-shrink-0">
                                                   <h5 class="text-success fs-14 mb-0">
                                                      +14.24 % <i class="fa-solid fa-arrow-trend-up"></i>
                                                   </h5>
                                                </div>
                                             </td>
                                             <td>
                                             <span class="fw-semibold text-primary">#3</span>
                                             </td>
                                             <td>
                                             <div class="action_btn d-flex">
                                                <a href="#" class="notify_btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell h-4 w-4"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg> Notify</a>
                                                <a href="#" class="ban_Service_btn"><i class="fa-solid fa-ban"></i> Ban</a>
                                                </div>
                                             </td>
                                          </tr>

                                          <tr>
                                             <td>
                                                <div class="d-flex align-items-center">
                                                   <div class="flex-shrink-0 me-2">
                                                      <img src="assets/images/newimages/avatar-4.jpg" alt=""
                                                         class="avatar-xs rounded-circle">
                                                   </div>
                                                   <div class="flex-grow-1">Prezy Mark</div>
                                                </div>
                                             </td>
                                           
                                             <td>
                                                <div class="flex-shrink-0">
                                                   <h5 class="text-danger fs-14 mb-0">
                                                      -08.24 % <i class="fa-solid fa-arrow-trend-down"></i>
                                                   </h5>
                                                </div>
                                             </td>
                                             <td>
                                             <span class="fw-semibold text-primary">#4</span>
                                             </td>
                                             <td>
                                             <div class="action_btn d-flex">
                                                <a href="#" class="notify_btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell h-4 w-4"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg> Notify</a>
                                                <a href="#" class="ban_Service_btn"><i class="fa-solid fa-ban"></i> Ban</a>
                                                </div>
                                             </td>
                                          </tr>

                                          <tr>
                                             <td>
                                                <div class="d-flex align-items-center">
                                                   <div class="flex-shrink-0 me-2">
                                                      <img src="assets/images/newimages/avatar-6.jpg" alt=""
                                                         class="avatar-xs rounded-circle">
                                                   </div>
                                                   <div class="flex-grow-1">Alex Smith</div>
                                                </div>
                                             </td>
                                       
                                             <td>
                                                <div class="flex-shrink-0">
                                                   <h5 class="text-success fs-14 mb-0">
                                                      +12.24 % <i class="fa-solid fa-arrow-trend-up"></i>
                                                   </h5>
                                                </div>
                                             </td>
                                             <td>
                                             <span class="fw-semibold text-primary">#5</span>
                                             </td>
                                             <td>
                                             <div class="action_btn d-flex">
                                                <a href="#" class="notify_btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell h-4 w-4"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg> Notify</a>
                                                <a href="#" class="ban_Service_btn"><i class="fa-solid fa-ban"></i> Ban</a>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="hidden tab-content" id="Payway-ak-done" role="tabpanel"
                     aria-labelledby="Payway-ak-done-tab">
                     wretyu
                  </div>
                  <div class="hidden tab-content" id="History-ak" role="tabpanel" aria-labelledby="History-ak-tab">
                     rtyu
                  </div>
                  <div class="hidden tab-content" id="Payway" role="tabpanel" aria-labelledby="Payway-tab">
                     ertyu
                  </div>
               </div>
            </div>
         </div>
         <!-- finance tab -->
         <div class="hidden" id="Courses" role="tabpanel" aria-labelledby="Courses-tab">

         </div>
         <div class="hidden" id="Portfolio" role="tabpanel" aria-labelledby="Portfolio-tab">

         </div>
         <div class="hidden" id="ID" role="tabpanel" aria-labelledby="ID-tab">

         </div>
         <!-- <div class="hidden" id="History" role="tabpanel" aria-labelledby="History-tab">

         </div> -->
         <!--end col-->
      </div>
      <!-- End Content -->
   </div>
</div>




<!--end container-->
<?php include("footer.php") ?>



<script>
   $(document).ready(function () {
      $(".drop__box").hide();
      $("#Finance-tab").click(function () {
         $(".drop__box").toggle();
      });

      $(".location__list ul li").click(function () {
         $(".drop__box").toggle();
      })


   })
</script>


<script>
   document.addEventListener("DOMContentLoaded", function () {
      const locationInput = document.getElementById("Finance-tab");
      const locationList = document.querySelector(".location__list");
      const dropBox = document.querySelector(".drop__box");

      locationInput.addEventListener("click", function (event) {
         locationList.style.display = "block";

         event.stopPropagation();
      });

      document.addEventListener("click", function (event) {
         if (!dropBox.contains(event.target)) {
            locationList.style.display = "none";
            $(".drop__box").hide();
         }
      });

      locationList.addEventListener("click", function (event) {
         event.stopPropagation();
      });
   });
</script>