<?php include("header.php") ?>
<div class="container-fluid relative px-3">
   <div class="layout-specing">
      <!-- Start Content -->
      <!-- <div class="md:flex justify-between items-center">
         <h5 class="text-lg font-semibold">Jenny Jimenez</h5>
         
         <ul class="breadcrumb tracking-[0.5px] mb-0 inline-block mt-1 md:mt-0">
             <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 text-slate-400 dark:text-white/60 hover:text-slate-900 dark:hover:text-white"><a href="index.html">Giglink</a></li>
             <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 text-slate-900 dark:text-white" aria-current="page">Profile</li>
         </ul>
         </div> -->
      <div id="main-content" class="main grid md:grid-cols-12 gap-6 mt-6">
         <div id="sidebarWrap" class="sidebar lg:col-span-3 md:col-span-4">
            <div id="sidebar-profile" class="customer_profileleft bggredient ">
               <div class="group profile-pic w-[112px]">
                  <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)" />
                  <div>
                     <div class="relative h-28 w-28 rounded-full shadow-md dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800 overflow-hidden">
                        <img src="assets/images/client/04.jpg" class="rounded-full" id="profile-image" alt="">
                        <div class="absolute inset-0 group-hover:bg-slate-900/40 transition duration-500"></div>
                        <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                     </div>
                  </div>
               </div>
               <div class="mt-4 userBio_area">
                  <h5 class="text-lg font-semibold">Jenny Jimenez <i class="mdi mdi-check-decagram text-emerald-600 align-middle text-lg"></i></h5>
                  <div class="username">@Jenny41</div>
                  <div class="copy-text">
                     <h3>Builder ID</h3>
                     <div class="copy_ID">
                        <input type="text" class="text" value="david@stylus.co.za" />
                        <button><i class="fa-regular fa-copy"></i></button>
                     </div>
                  </div>
                  <div class="badges_list">
                     <h3>Certificates  / Badges</h3>
                     <div class="badges_items">
                        <div class="badhe_item"><img src="assets/images/newimages/badge1.png" alt=""></div>
                        <div class="badhe_item"><img src="assets/images/newimages/badge2.png" alt=""></div>
                        <div class="badhe_item"><img src="assets/images/newimages/badge3.png" alt=""></div>
                        <div class="badhe_item"><img src="assets/images/newimages/badge4.png" alt=""></div>
                     </div>
                  </div>
                  <div class="userbio_list">
                     <h3>Bio</h3>
                     <div class="bio_description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis esse nulla laudantium.</p>
                     </div>
                  </div>
                  <div class="user_services">
                     <h3>Services</h3>
                     <div class="services_list_">
                        <div class="row">
                           <div class="servicearea_cards">
                              <div class="group serviceone sideservice_usercard relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                 <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg imgservices_profile">
                                       <img src="assets/images/newimages/courceimg.webp" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
                                    <div class="absolute -bottom-20 group-hover:bottom-1/2 group-hover:translate-y-1/2 start-0 end-0 mx-auto text-center transition-all duration-500">
                                       <a href="##" class="btn btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-lightning-bolt"></i> View Details</a>                                
                                    </div>
                                 </div>
                                 <div class="title__cardp">
                                    <a href="##" class="font-semibold hover:text-violet-600">Course</a>
                                 </div>
                              </div>
                              <!--end content-->
                              <div class="group sideservice_usercard relative overflow-hidden p-2 rounded-lg bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500 hover:-mt-2 h-fit">
                                 <div class="relative overflow-hidden">
                                    <div class="relative overflow-hidden rounded-lg imgservices_profile">
                                       <img src="assets/images/newimages/tradebtc.jpg" class="rounded-lg shadow-md dark:shadow-gray-700 group-hover:scale-110 transition-all duration-500" alt="">
                                    </div>
                                    <div class="absolute -bottom-20 group-hover:bottom-1/2 group-hover:translate-y-1/2 start-0 end-0 mx-auto text-center transition-all duration-500">
                                       <a href="##" class="btn btn-sm rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="mdi mdi-lightning-bolt"></i> View Details</a>                                
                                    </div>
                                 </div>
                                 <div class="title__cardp">
                                    <a href="##" class="font-semibold hover:text-violet-600">Trades BTC</a>
                                 </div>
                              </div>
                              <!--end content-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--end col-->
         <div id="content" class="content lg:col-span-9 md:col-span-8">
            <div class="  grid grid-cols-1 ">
               <ul class=" finance__area md:w-fit w-full flex-wrap justify-center  usertabdash" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="Finance-tab" data-tabs-target="#Finance" type="button" role="tab" aria-controls="Finance" aria-selected="true">My Finance</button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2 rounded-md w-full transition-all duration-500 ease-in-out" id="Courses-tab" data-tabs-target="#Courses" type="button" role="tab" aria-controls="Courses" aria-selected="false">My Courses</button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="Portfolio-tab" data-tabs-target="#Portfolio" type="button" role="tab" aria-controls="Portfolio" aria-selected="false">My Portfolio</button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="ID-tab" data-tabs-target="#ID" type="button" role="tab" aria-controls="ID" aria-selected="false">ID</button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="History-tab" data-tabs-target="#History" type="button" role="tab" aria-controls="History" aria-selected="false">History</button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="Manage-tab" data-tabs-target="#Manage" type="button" role="tab" aria-controls="Manage" aria-selected="false">Manage</button>
                  </li>
               </ul>
               <div id="StarterContent" class="mt-6">
                  <div class="" id="Finance" role="tabpanel" aria-labelledby="Finance-tab">
                     <div class="xl:col-span-12 lg:col-span-12">
                        <div class="grid grid-cols-1 gap-6">
                           <div class="relative overflow-hidden rounded-lg bggredient">
                              <div class="track_record">
                                 <h2>Track Record</h2>
                              </div>

                              <div class="trading_graphimg">
                                 <img src="assets/images/newimages/stockchart.png" alt="">
                              </div>
                              <!-- <div id="tradingview_123"></div>
                              <script src="s3.tradingview.com/tv.js"></script>
                              <script>
                                 new TradingView.widget(
                                     {
                                         "width": "100%",
                                         "height": 450,
                                         "symbol": "BITSTAMP:ETHUSD",
                                         "interval": "D",
                                         "timezone": "Etc/UTC",
                                         "theme": "Dark", //Note: change your chart background color as per your confort (Like: Light or Dark)
                                         "style": "1",
                                         "locale": "en",
                                         "toolbar_bg": "#000",
                                         "enable_publishing": false,
                                         "withdateranges": true,
                                         "hide_side_toolbar": false,
                                         "allow_symbol_change": true,
                                         "show_popup_button": true,
                                         "popup_width": "1000",
                                         "popup_height": "650",
                                         "container_id": "tradingview_123"
                                     }
                                 );
                              </script> -->
                           </div>
                           <div>
                           </div>
                        </div>
                        <div class="row hm_eqcards">
                           <div class="col-lg-6">
                           <div class="hovercardef relative overflow-hidden rounded-lg bggredient">
                              <div class="Rewards_card p-6 ">
                                 <div class="relative md:shrink-0 reward_area">
                                    <h2  class="font-semibold">Rewards</h2>
                                    <div class="pt-6 nthAmount">
                                       <a href="item-detail.html" class="btn btn-sm rounded-full bg-violet-600/5 hover:bg-violet-600 border-violet-600/10 hover:border-violet-600 text-violet-600 hover:text-white">+100 NTH</a>
                                    </div>
                                 </div>
                                 <div class="p-6 w-full balance_area">
                                    <h1 class="font-bold leading-snug text-white text-4xl"> <span class="bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">NTH  BALANCE</span></h1>
                                    <div class="pt-6 balanceAmount">
                                       <h3>120.00</h3>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           </div>
                           <!-- End Content -->
                           <div class="col-lg-6">
                           <div class="hovercardef relative overflow-hidden rounded-lg bggredient">
                              <div class="servicecard_user ">
                                 <div class="p-3 border-b border-gray-100 dark:border-gray-800">
                                    <h6 class="text-lg font-semibold">My Service</h6>
                                 </div>
                                 <div class="p-6 w-full">
                                    <div class="grid grid-cols-1">
                                       <ul class="list-none services_list_user">
                                          <li class="service_list">
                                             <span class="">
                                             <a href="##">
                                             <small id="" class="font-bold bg-gradient-to-r from-violet-600 to-red-600 buy_buttoncs">Buy</small>
                                             </a>
                                             <a href="##" class="font-semibold block hover:text-violet-600 service_name">AUDUSDF</a>
                                             </span>
                                             <div class="transition-all duration-500 right_tradername_amnt">
                                                <span class="text-slate-400  block mt-0.5 name_trader">Steven Townsend</span>
                                                <a href="##" class="btn btnamount_service"> $266.56</a>                                
                                             </div>
                                          </li>
                                          <li class="service_list">
                                             <span class="">
                                             <a href="##">
                                             <small id="" class="font-bold bg-gradient-to-r from-violet-600 to-red-600 buy_buttoncs">Buy</small>
                                             </a>
                                             <a href="##" class="font-semibold block hover:text-violet-600 service_name">AUDUSDF</a>
                                             </span>
                                             <div class="transition-all duration-500 right_tradername_amnt">
                                                <span class="text-slate-400  block mt-0.5 name_trader">Steven Townsend</span>
                                                <a href="##" class="btn btnamount_service"> $266.56</a>                                
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- End Content -->
                           </div>
                          <div class="col-lg-6">
                          <div class="hovercardef relative overflow-hidden rounded-lg bggredient">
                              <div class="servicecard_user ">
                                 <div class="p-3 border-b border-gray-100 dark:border-gray-800">
                                    <h6 class="text-lg font-semibold">Payments</h6>
                                 </div>
                                 <div class="p-6 w-full">
                                    <div class="grid grid-cols-1">
                                       <div class="flex items-center">
                                          <div class="payment_list">
                                             <h6 class="font-semibold">2 NTH <span class="text-slate-400">by</span> <a href="#" class="hover:text-violet-600 duration-500 ease-in-out">0xe849fa28a...ea14</a></h6>
                                             <span class="text-slate-400 timeago_text">6 hours ago</span>
                                          </div>
                                       </div>
                                       <div class="flex items-center mt-4">
                                          <div class="payment_list">
                                             <h6 class="font-semibold">0.001 NTH <span class="text-slate-400">by</span> <a href="#" class="hover:text-violet-600 duration-500 ease-in-out">0xe849fa28a...ea14</a></h6>
                                             <span class="text-slate-400 timeago_text">6 hours ago</span>
                                          </div>
                                       </div>
                                       <div class="flex items-center mt-4">
                                          <div class="payment_list">
                                             <h6 class="font-semibold">1.225 NTH <span class="text-slate-400">by</span> <a href="#" class="hover:text-violet-600 duration-500 ease-in-out">0xe849fa28a...ea14</a></h6>
                                             <span class="text-slate-400 timeago_text">6 hours ago</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- End Content -->
                          </div>
                          <div class="col-lg-6">
                          <div class="hovercardef relative overflow-hidden rounded-lg bggredient">
                              <div class="servicecard_user ">
                                 <div class="p-3 border-b border-gray-100 dark:border-gray-800">
                                    <h6 class="text-lg font-semibold">History Payway</h6>
                                 </div>
                                 <div class="p-6 w-full">
                                    <div class="grid grid-cols-1">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- End Content -->
                          </div>
                        </div>
                     </div>
                  </div>

                 

                  <!-- Course tab start -->
                  <div class="hidden" id="Courses" role="tabpanel" aria-labelledby="Courses-tab">
                     <div class="relative overflow-hidden rounded-lg bggredient">
                     <div class="grid md:grid-cols-12 gap-6">
                  <div class="lg:col-span-3 md:col-span-3">
                  <ul class="md:w-fit w-full flex-wrap justify-center  p-3 bg-white  shadow dark:shadow-gray-800 rounded-md usertabdash course_db" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                     <li role="presentation" class="md:inline-block block md:w-fit w-full">
                        <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="Finish-tab" data-tabs-target="#Finish" type="button" role="tab" aria-controls="Finish" aria-selected="true">My Courses</button>
                     </li>
                     <li role="presentation" class="md:inline-block block md:w-fit w-full">
                        <button class="px-6 py-2 rounded-md w-full transition-all duration-500 ease-in-out" id="Finish-done-tab" data-tabs-target="#Finish-done" type="button" role="tab" aria-controls="Finish-done" aria-selected="false">Finish</button>
                     </li>
                     <li role="presentation" class="md:inline-block block md:w-fit w-full">
                        <button class="px-6 py-2 rounded-md w-full transition-all duration-500 ease-in-out" id="Complete-no-tab" data-tabs-target="#Complete-no" type="button" role="tab" aria-controls="Complete-no" aria-selected="false">No Complete</button>
                     </li>
                    </ul>
                  </div>
                  <div class="lg:col-span-9 md:col-span-9">
                  <div id="StarterContent" >

                    <div class="tab-content" id="Finish" role="tabpanel" aria-labelledby="Finish-tab">
                     <div class="content">
                     <div class="courses">
                     <table>
                        <tbody>
                           <tr class="item">
                              <td>
                                 <div class="course_img">
                                    <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-700 hover:shadow-md transition-all duration-500">
                                          <img src="assets/images/newimages/the-graph.jpg" alt="">
                  
                                          <div class="relative p-3">
                                                <div class="start- level -top-4">
                                                   <span class="bg-violet-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5"><img src="assets/images/newimages/level-icon1.png" alt=""> Level A</span>
                                                </div>
                  
                                                <div class="content_course">
                                              
                  
                                                   <a href="#" class="title text-lg font-medium hover:text-violet-600 duration-500 ease-in-out">The Graph</a>
                                                   <p>The Graph is a protocol for indexing and querying blockchain data. Learn how it works and you’ll earn GRT tokens. </p>
                                                   <!-- <div class="flex justify-between mt-4">
                                                      <a href="#" class="btn btn-link text-[16px] font-medium hover:text-violet-600 after:bg-violet-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                                      
                                                   </div> -->
                                                   <div class="status">
                                                      <span class="badge badge-gradient-info">Certificate</span>
                                                   </div>
                                                </div>
                                          </div>
                                       </div>
                                 </div>
                              </td>

                              
                           </tr>

                           <tr class="item">
                              <td>
                                 <div class="course_img">
                                    <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-700 hover:shadow-md transition-all duration-500">
                                          <img src="assets/images/newimages/shping.jpg" alt="">
                  
                                          <div class="relative p-3">
                                                <div class="start- level -top-4">
                                                   <span class="bg-violet-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5"><img src="assets/images/newimages/level-icon1.png" alt=""> Level B</span>
                                                </div>
                  
                                                <div class="content_course">
                                              
                  
                                                   <a href="#" class="title text-lg font-medium hover:text-violet-600 duration-500 ease-in-out">Shping</a>
                                                   <p>Shping is a shopping companion app that aims to upgrade the shopping experience for brands and customers using blockchain technology. </p>
                                                   <!-- <div class="flex justify-between mt-4">
                                                      <a href="#" class="btn btn-link text-[16px] font-medium hover:text-violet-600 after:bg-violet-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                                      
                                                   </div> -->
                                                   <div class="status">
                                                      <span class="badge badge-gradient-success">Complete</span>
                                                   </div>
                                                </div>
                                          </div>
                                       </div>
                                 </div>
                              </td>

                              
                           </tr>

                           <tr class="item">
                              <td>
                                 <div class="course_img">
                                    <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-700 hover:shadow-md transition-all duration-500">
                                          <img src="assets/images/newimages/near-protocol.jpg" alt="">
                  
                                          <div class="relative p-3">
                                                <div class="start- level -top-4">
                                                   <span class="bg-violet-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5"><img src="assets/images/newimages/level-icon1.png" alt=""> Level C</span>
                                                </div>
                  
                                                <div class="content_course">
                                              
                  
                                                   <a href="#" class="title text-lg font-medium hover:text-violet-600 duration-500 ease-in-out">NEAR Protocol</a>
                                                   <p>NEAR is a simple, secure and scalable blockchain built by and for developers. </p>
                                                   <div class="flex action_btn_st justify-between mt-4">
                                                   <a href="#" class="continue_btn">Continue <i class="uil uil-arrow-right"></i></a>
                                                   <div class="status">
                                                      <span class="badge badge-gradient-warning">Pending</span>
                                                   </div>
                                                   </div>
                                                  
                                                </div>
                                          </div>
                                       </div>
                                 </div>
                              </td>

                              
                           </tr>

                           <tr class="item">
                              <td>
                                 <div class="course_img">
                                    <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-700 hover:shadow-md transition-all duration-500">
                                          <img src="assets/images/newimages/amp.jpg" alt="">
                  
                                          <div class="relative p-3">
                                                <div class="start- level -top-4">
                                                   <span class="bg-violet-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5"><img src="assets/images/newimages/level-icon1.png" alt=""> Level E</span>
                                                </div>
                  
                                                <div class="content_course">
                                              
                  
                                                   <a href="#" class="title text-lg font-medium hover:text-violet-600 duration-500 ease-in-out">Amp</a>
                                                   <p>Amp provides instant settlement assurance any time value is transferred. </p>
                                                   <div class="flex action_btn_st justify-between mt-4">
                                                   <a href="#" class=" continue_btn">Continue <i class="uil uil-arrow-right"></i></a>
                                                   <div class="status">
                                                      <span class="badge badge-gradient-danger">Failed</span>
                                                   </div>
                                                   </div>
                                                  
                                                </div>
                                          </div>
                                       </div>
                                 </div>
                              </td>

                              
                           </tr>
                        </tbody>
                     </table>
                     </div>
                     </div>

                       <!-- Inside the Tab 1 content -->
                     <div class="pagination">
                        <ul class="pagination-links">
                           <li><button class="prevPage">Previous</button></li>
                           <!-- Pagination links with numbers will be added dynamically using JavaScript -->
                           <li><button class="nextPage">Next</button></li>
                        </ul>
                     </div>
                     
                     
                     <!-- <div class="custom_table_area">
                             
                           <div class="tabltoparea">
                           <div id="entries-container"></div>
                              <div id="search-button-container"></div>
                           </div>
                           <div class="table-responsive">
                           <table class="datatable " id="export-button">
                              <thead>
                                 <tr>
                                    <th>Name</th>
                                    <th>Level</th>
                                    <th>Status</th>
                              
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>The Graph</td>
                                    <td>A</td>
                                    <td>Certificate</td>
                                  
                                 </tr>
                                 
                              </tbody>
                           </table>
                           </div>
                           
                           <div class="entries_pagination">
                             <div id="info-container"></div>
                              <div id="pagination-container"></div>

                           </div>
                           </div> -->
                  </div>
                  <div class="hidden tab-content" id="Finish-done" role="tabpanel" aria-labelledby="Finish-done-tab">
                     <div class="content">
                     <div class="courses">
                     <table>
                        <tbody>
                           <tr class="item">
                              <td>
                                 <div class="course_img">
                                    <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-700 hover:shadow-md transition-all duration-500">
                                          <img src="assets/images/newimages/the-graph.jpg" alt="">
                  
                                          <div class="relative p-3">
                                                <div class="start- level -top-4">
                                                   <span class="bg-violet-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5"><img src="assets/images/newimages/level-icon1.png" alt=""> Level A</span>
                                                </div>
                  
                                                <div class="content_course">
                                              
                  
                                                   <a href="#" class="title text-lg font-medium hover:text-violet-600 duration-500 ease-in-out">The Graph</a>
                                                   <p>The Graph is a protocol for indexing and querying blockchain data. Learn how it works and you’ll earn GRT tokens. </p>
                                                   <!-- <div class="flex justify-between mt-4">
                                                      <a href="#" class="btn btn-link text-[16px] font-medium hover:text-violet-600 after:bg-violet-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                                      
                                                   </div> -->
                                                   <div class="status">
                                                      <span class="badge badge-gradient-info">Certificate</span>
                                                   </div>
                                                </div>
                                          </div>
                                       </div>
                                 </div>
                              </td>

                              
                           </tr>
                           <tr class="item">
                              <td>
                                 <div class="course_img">
                                    <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-700 hover:shadow-md transition-all duration-500">
                                          <img src="assets/images/newimages/shping.jpg" alt="">
                  
                                          <div class="relative p-3">
                                                <div class="start- level -top-4">
                                                   <span class="bg-violet-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5"><img src="assets/images/newimages/level-icon1.png" alt=""> Level B</span>
                                                </div>
                  
                                                <div class="content_course">
                                              
                  
                                                   <a href="#" class="title text-lg font-medium hover:text-violet-600 duration-500 ease-in-out">Shping</a>
                                                   <p>Shping is a shopping companion app that aims to upgrade the shopping experience for brands and customers using blockchain technology. </p>
                                                   <!-- <div class="flex justify-between mt-4">
                                                      <a href="#" class="btn btn-link text-[16px] font-medium hover:text-violet-600 after:bg-violet-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                                                      
                                                   </div> -->
                                                   <div class="status">
                                                      <span class="badge badge-gradient-success">Complete</span>
                                                   </div>
                                                </div>
                                          </div>
                                       </div>
                                 </div>
                              </td>

                              
                           </tr>


                        
                        </tbody>
                     </table>
                     </div>
                     </div>

                       <!-- Inside the Tab 1 content -->
<div class="pagination">
    <ul class="pagination-links">
        <li><button class="prevPage">Previous</button></li>
        <!-- Pagination links with numbers will be added dynamically using JavaScript -->
        <li><button class="nextPage">Next</button></li>
    </ul>
</div>
                 
                  </div>
                  <div class="hidden tab-content" id="Complete-no" role="tabpanel" aria-labelledby="Complete-no-tab">
                     <div class="content">
                     <div class="courses">
                     <table>
                        <tbody>
                         

                           <tr class="item">
                              <td>
                                 <div class="course_img">
                                    <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-700 hover:shadow-md transition-all duration-500">
                                          <img src="assets/images/newimages/near-protocol.jpg" alt="">
                  
                                          <div class="relative p-3">
                                                <div class="start- level -top-4">
                                                   <span class="bg-violet-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5"><img src="assets/images/newimages/level-icon1.png" alt=""> Level C</span>
                                                </div>
                  
                                                <div class="content_course">
                                              
                  
                                                   <a href="#" class="title text-lg font-medium hover:text-violet-600 duration-500 ease-in-out">NEAR Protocol</a>
                                                   <p>NEAR is a simple, secure and scalable blockchain built by and for developers. </p>
                                                   <div class="flex action_btn_st justify-between mt-4">
                                                   <a href="#" class="continue_btn">Continue <i class="uil uil-arrow-right"></i></a>
                                                   <div class="status">
                                                      <span class="badge badge-gradient-warning">Pending</span>
                                                   </div>
                                                </div>
                                                  
                                                </div>
                                          </div>
                                       </div>
                                 </div>
                              </td>

                              
                           </tr>

                           <tr class="item">
                              <td>
                                 <div class="course_img">
                                    <div class="group relative overflow-hidden bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-700 hover:shadow-md transition-all duration-500">
                                          <img src="assets/images/newimages/amp.jpg" alt="">
                  
                                          <div class="relative p-3">
                                                <div class="start- level -top-4">
                                                   <span class="bg-violet-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5"><img src="assets/images/newimages/level-icon1.png" alt=""> Level E</span>
                                                </div>
                  
                                                <div class="content_course">
                                              
                  
                                                   <a href="#" class="title text-lg font-medium hover:text-violet-600 duration-500 ease-in-out">Amp</a>
                                                   <p>Amp provides instant settlement assurance any time value is transferred. </p>
                                                   <div class="flex action_btn_st justify-between mt-4">
                                                      <a href="#" class="continue_btn">Continue <i class="uil uil-arrow-right"></i></a>
                                                      <div class="status">
                                                      <span class="badge badge-gradient-danger">Failed</span>
                                                   </div>
                                                   </div>
                                                  
                                                </div>
                                          </div>
                                       </div>
                                 </div>
                              </td>

                              
                           </tr>
                        </tbody>
                     </table>
                     </div>

                     </div>

                       <!-- Inside the Tab 1 content -->
<div class="pagination">
    <ul class="pagination-links">
        <li><button class="prevPage">Previous</button></li>
        <!-- Pagination links with numbers will be added dynamically using JavaScript -->
        <li><button class="nextPage">Next</button></li>
    </ul>
</div>
                  
                     
                  </div>

                       </div>
                     </div>
                  </div> 
                     </div>
                   
                        <div class="grid xl:grid-cols-2 grid-cols-1 gap-6">
                        <div class="group mt-4 relative overflow-hidden rounded-lg bggredient mx-auto xl:max-w-2xl">
                              <div class="servicecard_user">
                                 <div class="p-3 border-b border-gray-100 dark:border-gray-800">
                                    <h6 class="text-lg font-semibold">My Rewards</h6>
                                 </div>
                                 <div class="p-6 w-full">
                                    <div class="grid grid-cols-1">
                                       <ul class="list-none services_list_user">
                                          <li class="service_list">
                                             <span class="">
                                                <p class="level_up">Level Up</p>
                                                <h5 class="font-bold leading-snug text-white"> <span class="title-limit bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">The Graph</span></h5>
                                             </span>
                                             <div class="transition-all duration-500 right_tradername_amnt">
                                                   <a href="##" class="btn btnamount_service"> 1 NTH</a>                                
                                             </div>
                                          </li>
                                          <li class="service_list">
                                             <span class="">
                                               <p class="level_up">Course Complete</p>
                                                <h5 class="font-bold leading-snug text-white"> <span class="title-limit bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">Shping</span></h5>
                                             </span>
                                             <div class="transition-all duration-500 right_tradername_amnt">
                                                   <a href="##" class="btn btnamount_service"> 2 NTH</a>                                
                                             </div>
                                          </li>
                                          <li class="service_list">
                                             <span class="">
                                               <p class="level_up">Trade</p>
                                                <h5 class="font-bold leading-snug text-white"> <span class="title-limit bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">NEAR Protocol</span></h5>
                                             </span>
                                             <div class="transition-all duration-500 right_tradername_amnt">
                                                   <a href="##" class="btn btnamount_service"> 3 NTH</a>                                
                                             </div>
                                          </li>
                                          <li class="service_list">
                                             <span class="">
                                                <p class="level_up">Staking</p>
                                                <h5 class="font-bold leading-snug text-white"> <span class="bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">Amp</span></h5>
                                             </span>
                                             <div class="transition-all duration-500 right_tradername_amnt">
                                                   <a href="##" class="btn btnamount_service"> 5 NTH</a>                                
                                             </div>
                                          </li>
                                          <li class="service_list">
                                             <span class="">
                                                <p class="level_up">Level Up</p>
                                                <h5 class="font-bold leading-snug text-white"> <span class="title-limit bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">How do you buy an NFT? </span></h5>
                                             </span>
                                             <div class="transition-all duration-500 right_tradername_amnt">
                                                   <a href="##" class="btn btnamount_service"> 4 NTH</a>                                
                                             </div>
                                          </li>
                                          <li class="service_list">
                                             <span class="">
                                                <p class="level_up">Trade</p>
                                                <h5 class="font-bold leading-snug text-white"> <span class="title-limit bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">How to set up a crypto wallet ? </span></h5>
                                             </span>
                                             <div class="transition-all duration-500 right_tradername_amnt">
                                                   <a href="##" class="btn btnamount_service"> 10 NTH</a>                                
                                             </div>
                                          </li>
                                          <li class="service_list">
                                             <span class="">
                                               <p class="level_up">Course Complete</p>
                                                <h5  class="font-bold leading-snug text-white"> <span  class="title-limit bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">An investor who got in when Bitcoin was $10 </span></h5>
                                             </span>
                                             <div class="transition-all duration-500 right_tradername_amnt">
                                                   <a href="##" class="btn btnamount_service"> 6 NTH</a>                                
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>


                           <div class="group mt-4 relative overflow-hidden rounded-lg bggredient mx-auto xl:max-w-2xl">
                              <div class="servicecard_user">
                                 <div class="p-3 border-b border-gray-100 dark:border-gray-800">
                                    <h6 class="text-lg font-semibold">My Certificate</h6>
                                 </div>
                                 <div class="p-6 w-full">
                                    <div class="certificate_main">
                                       <a href="#">
                                       <div class="certificate_box dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500  h-fit">
                                          <div class="certificate_img">
                                             <img src="assets/images/newimages/silver.jpg" alt="">
                                          </div>
                                          <div class="certficate_dt">
                                             <div class="builder">
                                             
                                                <p>20 Jan, 2023</p>
                                                <p class="percentage">80%</p>
                                             </div>
                                      
                                             <h4>The Graph</h4>
                                          </div>
                                       </div>
                                       </a>
                                      
                                       <a href="#">
                                       <div class="certificate_box dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500  h-fit">
                                          <div class="certificate_img">
                                             <img src="assets/images/newimages/gold.jpg" alt="">
                                          </div>
                                          <div class="certficate_dt">
                                          <div class="builder">
                                             
                                             <p>25 May, 2023</p>
                                             <p class="percentage">69%</p>
                                          </div>
                                             <h4>Shping</h4>
                                          </div>
                                       </div>
                                       </a>
                                    
                                        <a href="#">
                                        <div class="certificate_box dark:border-gray-800 hover:shadow-md dark:shadow-md hover:dark:shadow-gray-700 transition-all duration-500  h-fit">
                                          <div class="certificate_img">
                                             <img src="assets/images/newimages/diamond.jpg" alt="">
                                          </div>
                                          <div class="certficate_dt">
                                             <div class="builder">
                                                
                                                <p>03 June, 2023</p>
                                                <p class="percentage">75%</p>
                                             </div>
                                             <h4>NEAR Protocol</h4>
                                          </div>
                                       </div>
                                        </a>
                                    
                                    </div>
                              
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                      
                  
                     
                  </div>
                  <!-- Course tab end -->

                  <div class="hidden" id="Portfolio" role="tabpanel" aria-labelledby="Portfolio-tab">
                    
                     <div class="group relative bggredient">
                              <div class="servicecard_user">
                                 <div class="p-3 border-b border-gray-100 dark:border-gray-800">
                                    <div class="top_balance">
                                    <h6 class="text-lg font-semibold">Balance API</h6>
                                     <div class="balance">
                                       <h4><img src="assets/images/newimages/wallet (2).png" alt=""> $13400</h4>
                                     </div>
                                    </div>
                                 
                                 </div>
                                 <div class="p-6 w-full">
                                    <div class="row">
                                       <div class="col-lg-12">
                                       <div class="grid grid-cols-1">
                                       <ul class="list-none services_list_user">
                                          <li class="service_list">
                                             <span class="">
                                                <h5 class="font-bold leading-snug text-white account_title_"> <span class="bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">Account</span></h5>
                                             </span>
                                             <div class="transition-all duration-500 right_tradername_amnt">
                                                   <a href="##" class="account_no"> 0xe849fa28a...ea14</a>                                
                                             </div>
                                          </li>
                                          <li class="service_list">
                                             <span class="money_icon">
                                                <h5 class="font-bold leading-snug text-white"><img src="assets/images/newimages/bitcoin.png" alt=""> BTC</h5>
                                             </span>
                                             <div class="transition-all duration-500 right_tradername_amnt">
                                                   <a href="##" class="btn btnamount_service"> 10 %</a>                                
                                             </div>
                                          </li>
                                          <li class="service_list">
                                             <span class="money_icon">
                                                <h5 class="font-bold leading-snug text-white"><img src="assets/images/newimages/tether.png" alt="">USDT</h5>
                                             </span>
                                             <div class="transition-all duration-500 right_tradername_amnt">
                                                   <a href="##" class="btn btnamount_service"> 50 %</a>                                
                                             </div>
                                          </li>
                                          <li class="service_list">
                                             <span class="money_icon">
                                                <h5 class="font-bold leading-snug text-white"><img src="assets/images/newimages/ethereum.png" alt="">ETH</h5>
                                             </span>
                                             <div class="transition-all duration-500 right_tradername_amnt">
                                                   <a href="##" class="btn btnamount_service"> 10 %</a>                                
                                             </div>
                                          </li>
                                       </ul>

                                       <div class="other_account_list">
                                          <p>Other Accounts</p>
                                          <ul>
                                             <li><a href="#"><span>Account</span> 0xe849fa28a...ea14</a></li>
                                             <li><a href="#"><span>Account</span> 0xe849fa28a...ea14</a></li>
                                             <li><a href="#"><span>Account</span> 0xe849fa28a...ea14</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                       </div>
                                    
                                    </div>

                                    
                                 </div>
                              </div>
                           </div>
                           <div class="grid xl:grid-cols-2 grid-cols-1 gap-6">
                                       <div class="group mt-4 relative overflow-hidden rounded-lg bggredient w-full mx-auto xl:max-w-2xl">
                                             <div class="Rewards_card p-6">
                                                <div class="relative md:shrink-0 reward_area">
                                                   <h2  class="font-semibold">Level</h2>
                                                   <div class="pt-6 nthAmount">
                                                      <a href="#" class="btn btn-sm rounded-full bg-violet-600/5 hover:bg-violet-600 border-violet-600/10 hover:border-violet-600 text-violet-600 hover:text-white">Builder Elite</a>
                                                   </div>
                                                </div>
                                                <div class="p-6 w-full balance_area">
                                                   <h1 class="font-bold leading-snug text-white text-4xl"> <span class="bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">NTH  BALANCE</span></h1>
                                                   <div class="pt-6 balanceAmount nth_balance">
                                                      <h3>2000</h3>
                                                   </div>
                                                   <div class="buy_more">
                                                      <a href="#">Buy More <i class="fa-solid fa-arrow-right-long"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                          <div class="group mt-4 relative overflow-hidden rounded-lg bggredient">
                                             <div class="servicecard_user">
                                               
                                                <div class="p-6 w-full">
                                                   <div class="pt-6 balanceAmount nth_balance">
                                                      <h6 class="total_earned_nth">Total Earned</h6>
                                                      <h3>2600 <span class="bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">NTH</span></h3>
                                                   
                                                      <div class="expend">
                                                         <div class="trade">
                                                            <h5>Trade</h5>
                                                            <h1>200 NTH</h1>
                                                         </div>
                                                         <div class="trade">
                                                            <h5>Staking</h5>
                                                            <h1>300 NTH</h1>
                                                         </div>
                                                      </div>
                                                   
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                          <div class="group mt-4 relative overflow-hidden rounded-lg bggredient">
                                             <div class="servicecard_user">
                                                <div class="p-3 border-b border-gray-100 dark:border-gray-800">
                                                   <h6 class="text-lg font-semibold">My Budget</h6>
                                                </div>
                                                <div class="p-6 w-full">
                                                                                               
                                                 <br>
                                                 <br>
                                                 <br>
                                                 <br>
                                                 <br>
                                                 <br>
                                                 <br>

                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                  
                  </div>



                  <!-- id tab start-->
                  <div class="hidden" id="ID" role="tabpanel" aria-labelledby="ID-tab">
                  </div>
                   <!-- id tab End-->

                  <!-- history tab start-->
                  <div class="hidden" id="History" role="tabpanel" aria-labelledby="History-tab">
                  <div class="group relative bggredient">
                     <div class="row">

                  <div class="col-lg-12">
                  <ul class="md:w-fit w-full flex-wrap justify-center  p-3 bg-white  shadow dark:shadow-gray-800 rounded-md usertabdash history_tab_ak" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                     <li role="presentation" class="md:inline-block block md:w-fit w-full">
                        <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="Reward-ak-tab" data-tabs-target="#Reward-ak" type="button" role="tab" aria-controls="Reward-ak" aria-selected="true"><img src="assets/images/newimages/rewards.png" alt=""> Rewards</button>
                     </li>
                     <li role="presentation" class="md:inline-block block md:w-fit w-full">
                        <button class="px-6 py-2 rounded-md w-full transition-all duration-500 ease-in-out" id="Payway-ak-done-tab" data-tabs-target="#Payway-ak-done" type="button" role="tab" aria-controls="Payway-ak-done" aria-selected="false"><img src="assets/images/newimages/invoice.png" alt=""> Payway</button>
                     </li>
                     <li role="presentation" class="md:inline-block block md:w-fit w-full">
                        <button class="px-6 py-2 rounded-md w-full transition-all duration-500 ease-in-out" id="History-ak-tab" data-tabs-target="#History-ak" type="button" role="tab" aria-controls="History-ak" aria-selected="false"><img src="assets/images/newimages/purchase.png" alt=""> Buy On Market</button>
                     </li>
                    </ul>
                  </div>


                  <div class="lg:col-span-9 md:col-span-9">
                  <div id="StarterContent" >
                    <div class="tab-content" id="Reward-ak" role="tabpanel" aria-labelledby="Reward-ak-tab">
                      <div class="inner_content">
                      <ul class="list-none services_list_user">
                              <li class="service_list">
                                 <span class="">
                                    <p class="level_up bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">Level Up</p>
                                    <h5 class="font-bold leading-snug text-white reward_title"> <span class="title-limit  from-red-600 to-violet-600 text-transparent bg-clip-text">The Graph</span></h5>
                                 </span>
                                 <div class="transition-all duration-500 right_tradername_amnt">
                                       <a href="##" class="btn btnamount_service"> 1 NTH</a> 
                                       <p class="date_time_reward">20 Jan,2023 10:00 am</p>                               
                                 </div>
                              </li>
                              <li class="service_list">
                                 <span class="">
                                    <p class="level_up bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">Course Complete</p>
                                    <h5 class="font-bold leading-snug text-white reward_title"> <span class="title-limit  from-red-600 to-violet-600 text-transparent bg-clip-text">Shping</span></h5>
                                 </span>
                                 <div class="transition-all duration-500 right_tradername_amnt">
                                       <a href="##" class="btn btnamount_service"> 2 NTH</a>     
                                       <p class="date_time_reward">01 April,2023 11:00 am</p>                           
                                 </div>
                              </li>
                              <li class="service_list">
                                 <span class="">
                                    <p class="level_up bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">Trade</p>
                                    <h5 class="font-bold leading-snug text-white reward_title"> <span class="title-limit  from-red-600 to-violet-600 text-transparent bg-clip-text">NEAR Protocol</span></h5>
                                 </span>
                                 <div class="transition-all duration-500 right_tradername_amnt">
                                       <a href="##" class="btn btnamount_service"> 3 NTH</a>  
                                       <p class="date_time_reward">26 July,2023 04:00 am</p>                              
                                 </div>
                              </li>
                              <li class="service_list">
                                 <span class="">
                                    <p class="level_up bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">Staking</p>
                                    <h5 class="font-bold leading-snug text-white reward_title"> <span class="title-limit from-red-600 to-violet-600 text-transparent bg-clip-text">Amp</span></h5>
                                 </span>
                                 <div class="transition-all duration-500 right_tradername_amnt">
                                       <a href="##" class="btn btnamount_service"> 5 NTH</a> 
                                       <p class="date_time_reward">25 Jan,2023 12:00 am</p>                               
                                 </div>
                              </li>
                              <li class="service_list">
                                 <span class="">
                                    <p class="level_up bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">Level Up</p>
                                    <h5 class="font-bold leading-snug text-white reward_title"> <span class="title-limit  from-red-600 to-violet-600 text-transparent bg-clip-text">How do you buy an NFT? </span></h5>
                                 </span>
                                 <div class="transition-all duration-500 right_tradername_amnt">
                                       <a href="##" class="btn btnamount_service"> 4 NTH</a> 
                                       <p class="date_time_reward">18 June,2023 01:00 pm</p>                               
                                 </div>
                              </li>
                              <li class="service_list">
                                 <span class="">
                                    <p class="level_up bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">Trade</p>
                                    <h5 class="font-bold leading-snug text-white reward_title"> <span class="title-limit  from-red-600 to-violet-600 text-transparent bg-clip-text">How to set up a crypto wallet ? </span></h5>
                                 </span>
                                 <div class="transition-all duration-500 right_tradername_amnt">
                                       <a href="##" class="btn btnamount_service"> 10 NTH</a>  
                                       <p class="date_time_reward">18 June,2023 03:00 pm</p>                                  
                                 </div>
                              </li>
                              <li class="service_list">
                                 <span class="">
                                    <p class="level_up bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">Course Complete</p>
                                    <h5  class="font-bold leading-snug text-white reward_title"> <span  class="title-limit  from-red-600 to-violet-600 text-transparent bg-clip-text">An investor who got in when Bitcoin was $10 </span></h5>
                                 </span>
                                 <div class="transition-all duration-500 right_tradername_amnt">
                                       <a href="##" class="btn btnamount_service"> 6 NTH</a>   
                                       <p class="date_time_reward">19 May,2023 02:00 pm</p>                                 
                                 </div>
                              </li>
                           </ul>
                      </div>
                  </div>
                  <div class="hidden tab-content" id="Payway-ak-done" role="tabpanel" aria-labelledby="Payway-ak-done-tab">
                  <div class="inner_content">
                      <ul class="list-none services_list_user">
                              <li class="service_list">
                                 <span class="payment_box__">
                                    <div class="payment_icon">
                                       <img src="assets/images/newimages/pix-icon.png" alt="">
                                    </div>
                                    <h5 class="font-bold leading-snug "> 
                                       <span class="title-limit  from-red-600 to-violet-600  bg-clip-text">$200</span>
                                       <span class="payment_method">Pay via Pix</span>
                                   </h5>
                                 </span>
                                 <div class="transition-all duration-500 right_tradername_amnt">
                                       <a href="##" class="btn btnamount_service"> 2000 NTH</a> 
                                       <p class="date_time_reward">20 Jan,2023 10:00 am</p>                               
                                 </div>
                              </li>
                              <li class="service_list">
                              <span class="payment_box__">
                                    <div class="payment_icon">
                                       <img src="assets/images/newimages/osko-icon.png" alt="">
                                    </div>
                                    <h5 class="font-bold leading-snug "> 
                                       <span class="title-limit  from-red-600 to-violet-600  bg-clip-text">$500</span>
                                       <span class="payment_method ">Pay via Osko</span>
                                   </h5>
                                 </span>
                                 <div class="transition-all duration-500 right_tradername_amnt">
                                       <a href="##" class="btn btnamount_service"> 5000 NTH</a>     
                                       <p class="date_time_reward">01 April,2023 11:00 am</p>                           
                                 </div>
                              </li>
                              <li class="service_list">
                              <span class="payment_box__">
                                    <div class="payment_icon">
                                       <img src="assets/images/newimages/credit-card-icon.png" alt="">
                                    </div>
                                    <h5 class="font-bold leading-snug "> 
                                       <span class="title-limit  from-red-600 to-violet-600  bg-clip-text">$1000</span>
                                       <span class="payment_method ">Pay via Credit Card</span>
                                   </h5>
                                 </span>
                                 <div class="transition-all duration-500 right_tradername_amnt">
                                       <a href="##" class="btn btnamount_service"> 10000 NTH</a>  
                                       <p class="date_time_reward">26 July,2023 04:00 am</p>                              
                                 </div>
                              </li>
                              
                           </ul>
                      </div>
               </div>
                  <div class="hidden tab-content" id="History-ak" role="tabpanel" aria-labelledby="History-ak-tab">
                  <div class="inner_content">
                      <ul class="list-none services_list_user">
                              <li class="service_list">
                                 <span class="payment_box__">
                                    <div class="payment_icon">
                                       <img src="assets/images/newimages/nft.png" alt="">
                                    </div>
                                    <h5 class="font-bold leading-snug "> 
                                       <span class="title-limit  from-red-600 to-violet-600  bg-clip-text">NFT</span>
                                       <span class="payment_method "> 0xe849fa28a...ea14</span>
                                   </h5>
                                 </span>
                                 <div class="transition-all duration-500 right_tradername_amnt">
                                       <a href="##" class="btn btnamount_service"> 2000 ETH</a> 
                                       <p class="date_time_reward">20 Jan,2023 10:00 am</p>                               
                                 </div>
                              </li>
                              <li class="service_list">
                              <span class="payment_box__">
                                    <div class="payment_icon">
                                       <img src="assets/images/newimages/tradebtc.jpg" alt="">
                                    </div>
                                    <h5 class="font-bold leading-snug "> 
                                       <span class="title-limit  from-red-600 to-violet-600  bg-clip-text">The Graph</span>
                                       <!-- <span class="payment_method">Pay via Osko</span> -->
                                   </h5>
                                 </span>
                                 <div class="transition-all duration-500 right_tradername_amnt">
                                       <a href="##" class="btn btnamount_service"> 200 NTH</a>     
                                       <p class="date_time_reward">01 April,2023 11:00 am</p>                           
                                 </div>
                              </li>
                              <li class="service_list">
                              <span class="payment_box__">
                                    <div class="payment_icon">
                                       <img src="assets/images/newimages/near-protocol.jpg" alt="">
                                    </div>
                                    <h5 class="font-bold leading-snug "> 
                                       <span class="title-limit  from-red-600 to-violet-600  bg-clip-text">NEAR Protocol</span>
                                       <!-- <span class="payment_method">Pay via Osko</span> -->
                                   </h5>
                                 </span>
                                 <div class="transition-all duration-500 right_tradername_amnt">
                                       <a href="##" class="btn btnamount_service"> 300 NTH</a>     
                                       <p class="date_time_reward">01 April,2023 11:00 am</p>                           
                                 </div>
                              </li>
                              
                           </ul>
                      </div>
               </div>

                       </div>
                     </div>
                  </div> 
                     </div>
                  </div>
                  <!-- history tab end-->

                    <!-- manage tab start-->
                  <div class="hidden" id="Manage" role="tabpanel" aria-labelledby="Manage-tab">
                     <div class="inner_main_box">
                        <!-- <div class="header_mm">
                           <h3>Access & Security</h3>
                        </div> -->
                        <h3 class="main_title">Access & Security</h3>
                     
                        <div class="box bggredient">
                        <div class="box-header authentication ">
                           <h3>Two Factor Authentication</h3>
                           <!-- <div class="switch-field">
                                 <input type="radio" id="radio-one" name="switch-one" value="yes" checked="">
                                 <label for="radio-one">On</label>
                                 <input type="radio" id="radio-two" name="switch-one" value="no">
                                 <label for="radio-two">Off</label>
                              </div> -->
                        
                              <label class="switch">
                                 <input type="checkbox">
                                 <span class="slider"></span>
                              </label> 
                           
                        </div>
                
                     </div>
                     <form action="#">
                     <div class="box bggredient">
                        <div class="box-header">
                           <h3>Reset Password</h3>
                        </div>
                        <div class="box-body">

                           <div class="form-group">
                           <input class="form-control" type="text">
                              <label for="" class="form-label">Old Password</label>
                       
                           </div>
                           <div class="form-group">
                           <input class="form-control" type="text">
                              <label for="" class="form-label">New Password</label>
                           </div>
                           <div class="form-group">
                           <input class="form-control" type="text">
                              <label for="" class="form-label">Confirm Password</label>
                           
                           </div>
                     
                             <div class="update_action">
                              <a href="#" class="update_btn">Update</a>
                              </div>
                         
                        </div>
                     </div>
                     </form>
                     
                     <form action="#">
                     <div class="box bggredient">
                        <div class="box-header">
                           <h3>Email Update</h3>
                        </div>
                        <div class="box-body">
                           <div class="form-group">
                           <input class="form-control" type="text">
                              <label for="" class="form-label">Email Address</label>
                             <a href="#" class="change_mail_btn">Update</a>
                           </div>
                          
                        </div>
                     </div>
                     </form>
                     

                     <form action="#">
                     <div class="box bggredient">
                        <div class="box-header">
                           <h3>Profile Update</h3>
                        </div>
                        <div class="box-body">
                           <div class="row">
                             <div class="col-lg-6">
                             <div class="form-group">
                             <input class="form-control" type="text">
                              <label for="" class="form-label">First Name</label>
                           </div>
                             </div>
                             <div class="col-lg-6">
                             <div class="form-group">
                             <input class="form-control" type="text">
                              <label for="" class="form-label">Last Name</label>
                           </div>
                             </div>
                             <div class="col-lg-12">
                               <div class="form-group">
                               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                                  <label for="exampleFormControlTextarea1" class="form-label">Bio</label>
                               </div>
                             </div>
                             <div class="col-lg-12">
                             <div class="update_action">
                              <a href="#" class="update_btn">Update</a>
                              </div>
                             </div>
                           </div>
                          
                          
                        </div>
                     </div>
                     </form>
                     

                     
                      
                       
                       
                     </div>

                     <div class="box bggredient">
                     <div class="box-header">
                           <h3>Wallet Change</h3>
                        </div>
                      <div class="box-body">
                        <div class="wallet_box">
                        <div class="other_account_list wallet_change">
                           <h6 class="wallet_title"><img src="assets/images/newimages/metamask-icon.png" alt=""> Metamask Wallet</h6>
                           <ul>
                              <li><a href="#"><span> Wallet Amount</span> 1.0 ETH</a></li>
                              <li><a href="#"><span>Wallet Address</span> 0xe849fa28a...ea14</a></li>
            
                           </ul>
                        </div>
                        <div class="change_wallet">
                        <div class="w-full ">
                              <h1 class="font-bold leading-snug text-white text-4xl"> <span class="bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">Wallet Settings</span></h1>
                           
                              <div class="buy_more">
                                 <a href="#">Change Wallet</a>
                              </div>
                           </div>
                        </div>
                        </div>
                      
                      </div>
                   </div>


                   <div class="box bggredient">
                     <div class="box-header">
                           <h3>Change API'S</h3>
                        </div>
                      <div class="box-body">
                       <div class="change_api">
                         <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                  <input class="form-control" type="text" placeholder="https://jsonplaceholder.typicode.com/todos/1" value="https://jsonplaceholder.typicode.com/todos/1">
                                    <label for="" class="form-label">Change API</label>

                                    <a href="#" class="change_mail_btn">Change</a>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input class="form-control" type="text" placeholder="https://jsonplaceholder.typicode.com/todos/1" value="https://jsonplaceholder.typicode.com/todos/1">
                                    <label for="" class="form-label">Connect API</label>

                                    <a href="#" class="change_mail_btn">Connect</a>
                              </div>
                           </div>
                         </div>
                       </div>                      
                      </div>
                   </div>
                  </div>
                   <!-- manage tab end-->
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


<!-- stock chart js -->

