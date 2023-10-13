<?php include("header.php") ?>

<!-- Add FontAwesome stylesheet (you need an internet connection for this) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


<div class="container-fluid relative px-3">
   <div class="layout-specing">

      <ul class="finance__area finance__as_area md:w-fit w-full  flex-wrap justify-center  p-3 bg-white  shadow dark:shadow-gray-800 rounded-md usertabdash"
         id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out custom-btn btn-11"
               id="Finance-tab" data-tabs-target="#Finance" type="button" role="tab" aria-controls="Finance"
               aria-selected="true">
               Pay Way
               <div class="dot"></div>
            </button>
         </li>
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2 rounded-md w-full transition-all duration-500 ease-in-out" id="Courses-tab"
               data-tabs-target="#Courses" type="button" role="tab" aria-controls="Courses"
               aria-selected="false">Marketplace</button>
         </li>
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="Portfolio-tab"
               data-tabs-target="#Portfolio" type="button" role="tab" aria-controls="Portfolio" aria-selected="false">My
               Services</button>
         </li>
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="ID-tab"
               data-tabs-target="#ID" type="button" role="tab" aria-controls="ID" aria-selected="false">Smart
               Trader</button>
         </li>
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="History-tab"
               data-tabs-target="#History" type="button" role="tab" aria-controls="History"
               aria-selected="false">Settings</button>
         </li>
      </ul>
      <div id="StarterContent" class="mt-6">
         <div class="" id="Finance" role="tabpanel" aria-labelledby="Finance-tab">

            <div
               class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-800 overflow-hidden ease-in-out duration-500 w-full ">
               <div class="p-4 border-b border-gray-100 dark:border-gray-800">
                  <h6 class="text-lg font-semibold">Buy NTH Token</h6>
               </div>

               <div class="exchange-form row ">

                  <div class="col-lg-6">
                     <div class="input-group currencyareawithinp">
                        <!-- Change input type to "text" -->
                        <input type="text" id="amount" placeholder="Enter amount"
                           class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-full outline-none border border-gray-200 focus:border-violet-600 dark:border-gray-800 dark:focus:border-violet-600 focus:ring-0 mt-2">
                        <select id="currency__select" class="custom-select">
                           <option value="usd">USD</option>
                           <option value="aud">AUD</option>
                           <option value="brl">BRL</option>
                           <!-- Add more currencies as needed -->
                        </select>

                     </div>
                  </div>

                  <div class="col-lg-auto">
                     <div class="exchangesign">
                        <h1><i class="fas fa-exchange-alt"></i></h1>
                     </div>
                  </div>
                  <div class="col-lg-5">
                     <input type="text" id="result" placeholder="Converted Amount" readonly
                        class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-full outline-none border border-gray-200 focus:border-violet-600 dark:border-gray-800 dark:focus:border-violet-600 focus:ring-0 mt-2">

                  </div>

                  <div class="col-lg-12">
                     <div class="formsubmit_btnnth">
                        <input type="submit" id="submit" name="send"
                           class="btn bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-full mt-5"
                           value="Pay Now">
                     </div>
                  </div>
               </div>

            </div>


         </div>
         <div class="hidden" id="Courses" role="tabpanel" aria-labelledby="Courses-tab">
            <div class="top__flex_">
            <h3 class="main_title">Hall of Fame</h3>
            <div class="filter">
               <label for="">Filter by :</label>
               <select name="" class="filter_select">
                  <option>Week</option>
                  <option>Month</option>

               </select>
            </div>
            </div>
       
            <div class="row">
               <div class="col-lg-4">
                  <div class="box">
                     <div class="box-body padding-0">
                        <div class="inner_box_pp">
                           <div class="flex justify-between items-center">
                              <div class="flex items-center">
                                 <div class="relative inline-block">
                                    <img src="assets/images/newimages/avatar-1.jpg" class="h-16 rounded-md" alt="">
                                 </div>

                                 <div class="ms-3">
                                    <a href="#" class="name__ font-semibold block hover:text-violet-600">
                                       Steven Townsend
                                       <i class="mdi mdi-check-decagram verified_icon"></i>
                                    </a>
                                    <span class="text-slate-400 text-sm block mt-1">@StreetBoy</span>
                                 </div>
                              </div>

                           </div>
                           <div class="content-container">
                              <p>
                                 Having completed a Master’s degree on Economics, Politics & Culture for the East Asia
                                 region, Aaron has written scientific papers with a comparative analysis of the
                                 differences between US’ Western and Japan’s Collective forms of capitalism, 1945-2020.
                              </p>
                           </div>
                        </div>

                        <div class="profit_loss">
                           <div class="flex-shrink-0">
                              <h5 class="text-success fs-14 mb-0">
                                 +16.24 % <i class="fa-solid fa-arrow-trend-up"></i>
                              </h5>
                           </div>
                           <div class="flex-shrink-0">
                              <h5 class="text-danger fs-14 mb-0">
                                 -08.24 % <i class="fa-solid fa-arrow-trend-down"></i>
                              </h5>
                           </div>
                           <div class="flex-shrink-0">
                              <h5 class="text-blue fs-14 mb-0">
                                 Fee 10%
                              </h5>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
               <!-- col-lg-4 -->

               <div class="col-lg-4">
                  <div class="box">
                     <div class="box-body padding-0">
                        <div class="inner_box_pp">
                           <div class="flex justify-between items-center">
                              <div class="flex items-center">
                                 <div class="relative inline-block">
                                    <img src="assets/images/newimages/avatar-2.jpg" class="h-16 rounded-md" alt="">
                                 </div>

                                 <div class="ms-3">
                                    <a href="#" class="name__ font-semibold block hover:text-violet-600">
                                    Alex Genadinik
                                       <i class="mdi mdi-check-decagram verified_icon"></i>
                                    </a>
                                    <span class="text-slate-400 text-sm block mt-1">@AlexGenadinik</span>
                                 </div>
                              </div>

                           </div>
                           <div class="content-container">
                              <p>
                              Alex Genadinik is a passionate instructor, entrepreneur, teacher, and best-selling Amazon author. Also, he owns a popular business and marketing channel on YouTube with more than 30k subscribers. Alex Genadinik holds a Bachelor’s degree in computer science from San Jose State University. Alex has great experience in app development, software engineering, entrepreneurship,
                              </p>
                           </div>
                        </div>

                        <div class="profit_loss">
                           <div class="flex-shrink-0">
                              <h5 class="text-success fs-14 mb-0">
                                 +12.24 % <i class="fa-solid fa-arrow-trend-up"></i>
                              </h5>
                           </div>
                           <div class="flex-shrink-0">
                              <h5 class="text-danger fs-14 mb-0">
                                 -09.24 % <i class="fa-solid fa-arrow-trend-down"></i>
                              </h5>
                           </div>
                           <div class="flex-shrink-0">
                              <h5 class="text-blue fs-14 mb-0">
                                 Fee 8%
                              </h5>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
               <!-- col-lg-4 -->

               <div class="col-lg-4">
                  <div class="box">
                     <div class="box-body padding-0">
                        <div class="inner_box_pp">
                           <div class="flex justify-between items-center">
                              <div class="flex items-center">
                                 <div class="relative inline-block">
                                    <img src="assets/images/newimages/avatar-3.jpg" class="h-16 rounded-md" alt="">
                                 </div>

                                 <div class="ms-3">
                                    <a href="#" class="name__ font-semibold block hover:text-violet-600">
                                       Yohann Taieb
                                       <i class="mdi mdi-check-decagram verified_icon"></i>
                                    </a>
                                    <span class="text-slate-400 text-sm block mt-1">@YohannTaieb</span>
                                 </div>
                              </div>

                           </div>
                           <div class="content-container">
                              <p>
                              Yohann Taieb is an expert in mobile game programming, reskinning and app flipping. He has more than 10 years of experience working as an instructor in college, where he taught Apple Watch Development, iOS11, iPhone Development, Swift 3, Photoshop for programmers, Unity 3D, Pixel Art, and Android. Yohann received his Bachelor of Science in Computer Science from FIU Universit
                              </p>
                           </div>
                        </div>

                        <div class="profit_loss">
                           <div class="flex-shrink-0">
                              <h5 class="text-success fs-14 mb-0">
                                 +18.24 % <i class="fa-solid fa-arrow-trend-up"></i>
                              </h5>
                           </div>
                           <div class="flex-shrink-0">
                              <h5 class="text-danger fs-14 mb-0">
                                 -04.24 % <i class="fa-solid fa-arrow-trend-down"></i>
                              </h5>
                           </div>
                           <div class="flex-shrink-0">
                              <h5 class="text-blue fs-14 mb-0">
                                 Fee 11%
                              </h5>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
               <!-- col-lg-4 -->
               
               <div class="col-lg-12">
                  <div class="box">
               <div class="box-header">
                  <h3>User Management</h3>
               </div>
               <div class="box-body">
               <div class="datatable-container">
    
        <table id="datatable1" class="display">
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
                                       <span>Fees Adjust</span>
                                       <div class="arrow"><i class="fas fa-arrow-up"></i> <i
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
                                 <th class="actionbtnarea sortable">
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
                                 <td>10%</td>
                                 <td>
                                    <div class="flex-shrink-0">
                                       <h5 class="text-success fs-14 mb-0">
                                          +16.24 % <i class="fa-solid fa-arrow-trend-up"></i>
                                       </h5>
                                    </div>
                                 </td>
                                 <td>
                                    <a href="#" class="ban_Service_btn"><i class="fa-solid fa-ban"></i> Ban
                                       Service</a>
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
                                 <td>05%</td>
                                 <td>
                                 <div class="flex-shrink-0">
                              <h5 class="text-danger fs-14 mb-0">
                                 -08.24 % <i class="fa-solid fa-arrow-trend-down"></i>
                              </h5>
                           </div>
                                 </td>
                                 <td>
                                    <a href="#" class="ban_Service_btn"><i class="fa-solid fa-ban"></i> Ban
                                       Service</a>
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
                                 <td>15%</td>
                                 <td>
                                    <div class="flex-shrink-0">
                                       <h5 class="text-success fs-14 mb-0">
                                          +14.24 % <i class="fa-solid fa-arrow-trend-up"></i>
                                       </h5>
                                    </div>
                                 </td>
                                 <td>
                                    <a href="#" class="ban_Service_btn"><i class="fa-solid fa-ban"></i> Ban
                                       Service</a>
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
                                 <td>18%</td>
                                 <td>
                                 <div class="flex-shrink-0">
                              <h5 class="text-danger fs-14 mb-0">
                                 -08.24 % <i class="fa-solid fa-arrow-trend-down"></i>
                              </h5>
                           </div>
                                 </td>
                                 <td>
                                    <a href="#" class="ban_Service_btn"><i class="fa-solid fa-ban"></i> Ban
                                       Service</a>
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
                                 <td>18%</td>
                                 <td>
                                    <div class="flex-shrink-0">
                                       <h5 class="text-success fs-14 mb-0">
                                          +12.24 % <i class="fa-solid fa-arrow-trend-up"></i>
                                       </h5>
                                    </div>
                                 </td>
                                 <td>
                                    <a href="#" class="ban_Service_btn"><i class="fa-solid fa-ban"></i> Ban
                                       Service</a>
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
         <div class="hidden" id="Portfolio" role="tabpanel" aria-labelledby="Portfolio-tab">
            <div class="row">
               <div class="col-lg-8">
                  <div class="box">
                     <!-- <div class="box-header">
                                 <h3>Wallet Change</h3>
                              </div> -->
                     <div class="box-body">
                        <div class="balnce__chart">
                           <canvas id="rewardChart" class="default_chart"></canvas>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="box">
                     <!-- <div class="box-header">
                                 <h3>Wallet Change</h3>
                              </div> -->
                     <div class="box-body">
                        <div class="balnce__chart">
                           <canvas id="userperformanceChart" class="default_chart"></canvas>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


            <div class="box">
               <div class="box-header">
                  <h3>User Management</h3>
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
                                       <span>Fees Adjust</span>
                                       <div class="arrow"><i class="fas fa-arrow-up"></i> <i
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
                                 <th class="actionbtnarea sortable">
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
                                 <td>10%</td>
                                 <td>
                                    <div class="flex-shrink-0">
                                       <h5 class="text-success fs-14 mb-0">
                                          +16.24 % <i class="fa-solid fa-arrow-trend-up"></i>
                                       </h5>
                                    </div>
                                 </td>
                                 <td>
                                    <a href="#" class="ban_Service_btn"><i class="fa-solid fa-ban"></i> Ban
                                       Service</a>
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
                                 <td>05%</td>
                                 <td>
                                 <div class="flex-shrink-0">
                              <h5 class="text-danger fs-14 mb-0">
                                 -08.24 % <i class="fa-solid fa-arrow-trend-down"></i>
                              </h5>
                           </div>
                                 </td>
                                 <td>
                                    <a href="#" class="ban_Service_btn"><i class="fa-solid fa-ban"></i> Ban
                                       Service</a>
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
                                 <td>15%</td>
                                 <td>
                                    <div class="flex-shrink-0">
                                       <h5 class="text-success fs-14 mb-0">
                                          +14.24 % <i class="fa-solid fa-arrow-trend-up"></i>
                                       </h5>
                                    </div>
                                 </td>
                                 <td>
                                    <a href="#" class="ban_Service_btn"><i class="fa-solid fa-ban"></i> Ban
                                       Service</a>
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
                                 <td>18%</td>
                                 <td>
                                 <div class="flex-shrink-0">
                              <h5 class="text-danger fs-14 mb-0">
                                 -08.24 % <i class="fa-solid fa-arrow-trend-down"></i>
                              </h5>
                           </div>
                                 </td>
                                 <td>
                                    <a href="#" class="ban_Service_btn"><i class="fa-solid fa-ban"></i> Ban
                                       Service</a>
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
                                 <td>18%</td>
                                 <td>
                                    <div class="flex-shrink-0">
                                       <h5 class="text-success fs-14 mb-0">
                                          +12.24 % <i class="fa-solid fa-arrow-trend-up"></i>
                                       </h5>
                                    </div>
                                 </td>
                                 <td>
                                    <a href="#" class="ban_Service_btn"><i class="fa-solid fa-ban"></i> Ban
                                       Service</a>
                                 </td>
                              </tr>
                           </tbody>
        </table>
    </div>

               </div>
            </div>
            <div class="box">

               <div class="box-body">
                  <div class="redeem_box">
                     <div class="pt-6 balanceAmount nth_balance">
                        <h6 class="total_earned_nth">Total Earned</h6>
                        <h3>2600 <span
                              class="bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">NTH</span>
                        </h3>


                     </div>
                     <div class="change_wallet">
                        <div class="w-full ">
                           <h1 class="font-bold leading-snug text-white text-4xl"> <span
                                 class="bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">Redeem
                                 NTH Rewards</span></h1>

                           <div class="buy_more">
                              <a href="#">Redeem Now</a>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
         <div class="hidden" id="ID" role="tabpanel" aria-labelledby="ID-tab">
            <div class="box">
               <!-- <div class="box-header">
                        <h3>Select </h3>
                     </div> -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="account_select">
                           <div class="form-group">
                              <label for="">Select Account</label>
                              <select class="image-select">
                                 <option value="assets/images/newimages/coinbase-icon.png"
                                    data-image="assets/images/newimages/coinbase-icon.png">Coinbase |
                                    0xe849fa28a...ea14</option>
                                 <option value="assets/images/newimages/binance-icon.png"
                                    data-image="assets/images/newimages/binance-icon.png">Binance |
                                    0xe849fa28a...ea14</option>
                                 <option value="assets/images/newimages/bitfinex-icon.png"
                                    data-image="assets/images/newimages/bitfinex-icon.png">Bitfinex |
                                    0xe849fa28a...ea14</option>
                              </select>
                           </div>

                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="account_select">
                           <div class="form-group">
                              <label for="">Select CRYPTO</label>
                              <select class="image-select">
                                 <option value="assets/images/newimages/bitcoin-icon.png"
                                    data-image="assets/images/newimages/bitcoin-icon.png">BTC</option>
                                 <option value="assets/images/newimages/ethirum-icon.png"
                                    data-image="assets/images/newimages/ethirum-icon.png">ETH</option>
                                 <option value="assets/images/newimages/tether-icon.png"
                                    data-image="assets/images/newimages/tether-icon.png">USDT</option>
                              </select>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="box">
               <div class="box-header">
                  <h3>Units</h3>
               </div>
               <div class="box-body">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="form-group mb-0">
                           <input class="form-control" type="text" value="0.9979">
                           <!-- <label for="" class="form-label">Last Name</label> -->
                           <span class="money_unit">ETH</span>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
            <div class="box">
               <div class="box-header">
                  <h3>Buy Price</h3>
               </div>
               <div class="box-body">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="form-group mb-0">
                           <input class="form-control" type="text" value="0.05998">
                           <!-- <label for="" class="form-label">Last Name</label> -->
                           <span class="money_unit">BTC</span>
                        </div>
                        <div class="bid_status">
                           <p><span class="green">Bid:</span> 0.05997 BTC</p>
                           <p><span class="red">Ask:</span> 0.05998 BTC</p>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <div class="box">
                     <div class="box-header">
                        <h3>Set Take Profit</h3>
                     </div>
                     <div class="box-body">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="slider-container" id="slider1">

                                 <input type="range" id="percentage-slider1" class="slider_" min="0" max="100" step="1"
                                    value="0">
                                 <div class="progress-circle" id="progress-circle1"></div>
                                 <div class="scrolling-percentage" id="scrolling-percentage1">0%</div>

                              </div>

                           </div>
                           <div class="col-lg-6">
                              <input type="text" id="percentage-input1" value="0%" class="range_slider_input" readonly>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="box">
                     <div class="box-header">
                        <h3>Set Stop Loss</h3>
                     </div>
                     <div class="box-body">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="slider-container" id="slider2">

                                 <input type="range" id="percentage-slider2" class="slider_" min="0" max="100" step="1"
                                    value="0">
                                 <div class="progress-circle" id="progress-circle2"></div>
                                 <div class="scrolling-percentage" id="scrolling-percentage2">0%</div>

                              </div>

                           </div>
                           <div class="col-lg-6">
                              <input type="text" id="percentage-input2" value="0%" class="range_slider_input" readonly>


                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="box">
                     <div class="box-header">
                        <h3>Total</h3>
                     </div>
                     <div class="box-body">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group mb-0">
                                 <input class="form-control" type="text" value="0.05998">
                                 <!-- <label for="" class="form-label">Last Name</label> -->
                                 <span class="money_unit">BTC</span>
                              </div>
                              <h6 class="note">Sizes from available amount</h6>
                              <div class="sizes">

                                 <span>5%</span>
                                 <span>10%</span>
                                 <span class="active">25%</span>
                                 <span>50%</span>
                                 <span>100%</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="action_create_btn">
               <a href="#" class="btn theme_btn">Create Trade</a>
               <a href="#" class="btn theme_btn theme_secondary_btn">Save Preset</a>
               <a href="#" class="btn theme_btn theme_secondary_btn"><i class="fa-solid fa-share-nodes"></i></a>
            </div>
         </div>
         <div class="hidden" id="History" role="tabpanel" aria-labelledby="History-tab">

         </div>
         <!--end col-->
      </div>
      <!-- End Content -->
   </div>
</div>
<!--end container-->
<?php include("footer.php") ?>
<script>
   $(document).ready(function () {
      $('.image-select').select2({
         templateResult: formatState,
         templateSelection: formatState,
         minimumResultsForSearch: Infinity, // Disable search
      });

      $('.image-select').on('select2:select', function (e) {
         var selectedImage = e.params.data.element.getAttribute('data-image');
         $('#display-image').attr('src', selectedImage);
      });

      function formatState(state) {
         if (!state.element) {
            return state.text;
         }
         var $state = $(
            '<span><img class="select-image" src="' + state.element.getAttribute('data-image') + '" /> ' +
            state.text + '</span>'
         );
         return $state;
      }
   });
</script>

<script>
   $(document).ready(function () {
      $('.filter_select').select2({
            minimumResultsForSearch: Infinity, // Disable search
      });


   });
</script>

<script>
   function initializeSlider(sliderId, inputId, circleId, scrollingPercentageId) {
      const slider = document.getElementById(sliderId);
      const percentageInput = document.getElementById(inputId);
      const progressCircle = document.getElementById(circleId);
      const scrollingPercentage = document.getElementById(scrollingPercentageId);

      // Update the percentage value and position on load
      const initialValue = slider.value;
      percentageInput.value = initialValue + "%";
      scrollingPercentage.textContent = initialValue + "%";
      const initialPosition = (initialValue / 100) * (slider.offsetWidth - 20); // 20 is half of the circle width
      progressCircle.style.left = initialPosition + "px";
      scrollingPercentage.style.left = (initialPosition - 8) + "px";

      // Update the percentage value and position on slider change
      slider.addEventListener("input", function () {
         const value = slider.value;
         percentageInput.value = value + "%";
         const circlePosition = (value / 100) * (slider.offsetWidth - 20); // 20 is half of the circle width
         progressCircle.style.left = circlePosition + "px";
         scrollingPercentage.style.left = (circlePosition - 8) + "px";
         scrollingPercentage.textContent = value + "%";
      });
   }

   initializeSlider("percentage-slider1", "percentage-input1", "progress-circle1", "scrolling-percentage1");
   initializeSlider("percentage-slider2", "percentage-input2", "progress-circle2", "scrolling-percentage2");
</script>