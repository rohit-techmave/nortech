<?php include("header.php") ?>
<div class="container-fluid relative px-3">
   <div class="layout-specing">
      <div class="flex justify-between items-center breadcrumsArea">
         <div>
            <ul class="breadcrumb tracking-[0.5px] mb-0 inline-block mt-1 flex_ulbreadcrum">
               <li class="btnbackbrd">
                  <a href="index.php">
                     <div class="buttonbackpage"><i class="fa-solid fa-chevron-left"></i></div>
                  </a>
               </li>
               <li class="inline breadcrumb-item   duration-500 text-slate-400 dark:text-white/60 hover:text-slate-900 dark:hover:text-white"><a href="javascript:void(0)">Platform</a></li>
               <li class="inline breadcrumb-item   duration-500 text-slate-900 dark:text-white" aria-current="page">Finance</li>
            </ul>
         </div>
         <!-- <div>
            <a href="upload-work.html" class="btn btn-icon btn-sm rounded-full bg-gray-800/5 hover:bg-gray-800/10 dark:bg-gray-800 dark:hover:bg-gray-600 border border-gray-800/5 dark:border-gray-800 text-slate-900 dark:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus h-4 w-4"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>
            </div> -->
      </div>
      <ul class="finance__area finance__as_area md:w-fit w-full  flex-wrap justify-center  p-3 bg-white dark:shadow-gray-800  usertabdash"
         id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2   w-full transition-all duration-500 ease-in-out custom-btn btn-11"
               id="general-tab" data-tabs-target="#general" type="button" role="tab" aria-controls="general"
               aria-selected="true">
               General
               <div class="dot"></div>
            </button>
         </li>
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2  w-full transition-all duration-500 ease-in-out" id="Challenge-tab"
               data-tabs-target="#Challenge" type="button" role="tab" aria-controls="Challenge"
               aria-selected="false">Challenge</button>
         </li>
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2   w-full transition-all duration-500 ease-in-out" id="FishTank-tab"
               data-tabs-target="#FishTank" type="button" role="tab" aria-controls="FishTank" aria-selected="false">
            FishTank</button>
         </li>
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2   w-full transition-all duration-500 ease-in-out" id="PayWay-tab"
               data-tabs-target="#PayWay" type="button" role="tab" aria-controls="PayWay" aria-selected="false">
            PayWay</button>
         </li>
         <!-- <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2   w-full transition-all duration-500 ease-in-out" id="History-tab"
               data-tabs-target="#History" type="button" role="tab" aria-controls="History"
               aria-selected="false">Settings</button>
            </li> -->
      </ul>
      <div id="StarterContent" class="mt-6">
         <div class="" id="general" role="tabpanel" aria-labelledby="general-tab">
            <div class="row">
               <div class="col-lg-12">
                  <div class="box bggredient">
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
                                          <a href="#" class="notify_btn">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell h-4 w-4">
                                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                             </svg>
                                             Notify
                                          </a>
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
                                          <a href="#" class="notify_btn">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell h-4 w-4">
                                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                             </svg>
                                             Notify
                                          </a>
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
                                          <a href="#" class="notify_btn">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell h-4 w-4">
                                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                             </svg>
                                             Notify
                                          </a>
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
                                          <a href="#" class="notify_btn">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell h-4 w-4">
                                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                             </svg>
                                             Notify
                                          </a>
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
                                          <a href="#" class="notify_btn">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell h-4 w-4">
                                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                             </svg>
                                             Notify
                                          </a>
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
               <div class="col-lg-6">
                  <div class="customblck_card bggredient">
                     <div class="blcard_header">
                        <h3 class="blcard_header_title">Pending Payment</h3>
                     </div>
                     <div class="blcard_body">
                        <div class=" card_listhgt">
                           <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                 <div class="user_listimg">
                                    <img src="assets/images/newimages/avatar-6.jpg" alt="" class="">
                                 </div>
                                 <div class="usernameandid_dt">
                                    <div class="namecomon_user">
                                       Alex Smith
                                    </div>
                                    <a href="#" class=" anchorhover"><span class="account_id">Acc. Id:</span> 0xe849fa28a...ea14</a>
                                 </div>
                              </div>
                              <div class="transection_amount">
                                 <h5>$200</h5>
                                 <span class="newly__date">20 Oct,2023 10:00 am</span>
                              </div>
                           </div>
                           <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                 <div class="user_listimg">
                                    <img src="assets/images/newimages/avatar-3.jpg" alt="" class="">
                                 </div>
                                 <div class="usernameandid_dt">
                                    <div class="namecomon_user">
                                       Alex Smith
                                    </div>
                                    <a href="#" class=" anchorhover"><span class="account_id">Acc. Id:</span> 0xe849fa28a...ea14</a>
                                 </div>
                              </div>
                              <div class="transection_amount">
                                 <h5>$200</h5>
                                 <span class="newly__date">23 Oct,2023 11:00 am</span>
                              </div>
                           </div>
                           <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                 <div class="user_listimg">
                                    <img src="assets/images/newimages/avatar-1.jpg" alt="" class="">
                                 </div>
                                 <div class="usernameandid_dt">
                                    <div class="namecomon_user">
                                       Alex Smith
                                    </div>
                                    <a href="#" class=" anchorhover"><span class="account_id">Acc. Id:</span> 0xe849fa28a...ea14</a>
                                 </div>
                              </div>
                              <div class="transection_amount">
                                 <h5>$200</h5>
                                 <span class="newly__date">23 Oct,2023 11:00 am</span>
                              </div>
                           </div>
                           <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                 <div class="user_listimg">
                                    <img src="assets/images/newimages/avatar-2.jpg" alt="" class="">
                                 </div>
                                 <div class="usernameandid_dt">
                                    <div class="namecomon_user">
                                       Alex Smith
                                    </div>
                                    <a href="#" class=" anchorhover"><span class="account_id">Acc. Id:</span>  0xe849fa28a...ea14</a>
                                 </div>
                              </div>
                              <div class="transection_amount">
                                 <h5>$200</h5>
                                 <span class="newly__date">23 Oct,2023 11:00 am</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="customblck_card bggredient">
                     <div class="blcard_header">
                        <h3 class="blcard_header_title">History Payment</h3>
                     </div>
                     <div class="blcard_body">
                        <div class=" card_listhgt">
                           <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                 <div class="user_listimg">
                                    <img src="assets/images/newimages/avatar-6.jpg" alt="" class="">
                                 </div>
                                 <div class="usernameandid_dt">
                                    <div class="namecomon_user">
                                       Alex Smith
                                    </div>
                                    <a href="#" class=" anchorhover"><span class="account_id">Acc. Id:</span> 0xe849fa28a...ea14</a>
                                    <div class="newly__date transection_dt">23 Oct,2023 11:00 am</div>
                                 </div>
                              </div>
                              <div class="transection_amount">
                                 <h5> $200 <span>Transection ID: ACRAF23DB3C4</span></h5>
                              </div>
                           </div>
                           <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                 <div class="user_listimg">
                                    <img src="assets/images/newimages/avatar-3.jpg" alt="" class="">
                                 </div>
                                 <div class="usernameandid_dt">
                                    <div class="namecomon_user">
                                       Alex Smith
                                    </div>
                                    <a href="#" class=" anchorhover"><span class="account_id">Acc. Id:</span> 0xe849fa28a...ea14</a>
                                    <div class="newly__date transection_dt">23 Oct,2023 11:00 am</div>
                                 </div>
                              </div>
                              <div class="transection_amount">
                                 <h5> $200 <span>Transection ID: ACRAF23DB3C4</span></h5>
                              </div>
                           </div>
                           <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                 <div class="user_listimg">
                                    <img src="assets/images/newimages/avatar-1.jpg" alt="" class="">
                                 </div>
                                 <div class="usernameandid_dt">
                                    <div class="namecomon_user">
                                       Alex Smith
                                    </div>
                                    <a href="#" class=" anchorhover"><span class="account_id">Acc. Id:</span> 0xe849fa28a...ea14</a>
                                    <div class="newly__date transection_dt">23 Oct,2023 11:00 am</div>
                                 </div>
                              </div>
                              <div class="transection_amount">
                                 <h5> $200 <span>Transection ID: ACRAF23DB3C4</span></h5>
                              </div>
                           </div>
                           <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                 <div class="user_listimg">
                                    <img src="assets/images/newimages/avatar-2.jpg" alt="" class="">
                                 </div>
                                 <div class="usernameandid_dt">
                                    <div class="namecomon_user">
                                       Alex Smith
                                    </div>
                                    <a href="#" class=" anchorhover"><span class="account_id">Acc. Id:</span>  0xe849fa28a...ea14</a>
                                    <div class="newly__date transection_dt">23 Oct,2023 11:00 am</div>
                                 </div>
                              </div>
                              <div class="transection_amount">
                                 <h5>$200 <span>Transection ID: ACRAF23DB3C4</span></h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="hidden" id="Challenge" role="tabpanel" aria-labelledby="Challenge-tab">
            <div class="row">
               <div class="col-lg-12">
                  <div class="box bggredient">
                     <div class="box-header">
                        <h3>Create Builder Challenge</h3>
                     </div>
                     <div class="box-body">
                        <form action="">
                           <div class="task-box">
                              <div class="row" >
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="usercount">User Count</label>
                                       <input type="text" name="usercount" id="usercount" class="form-control required">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="nthreard">Total Win NTH Rewards</label>
                                       <input type="text" name="nthreard" id="nthreard" class="form-control required">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="update_action plusiconbtn">
                                       <a href="#" class="linebtn_custom"> <i class="fa-solid fa-plus"></i>
                                       <span class="hover-shape1"></span>
                                       <span class="hover-shape2"></span>
                                       <span class="hover-shape3"></span>
                                       </a>Add
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="box bggredient">
                  <div class="box-header">
                     <h3>Create FishTank Challenge</h3>
                  </div>
                  <div class="box-body">
                     <form action="">
                        <div class="task-box1">
                           <div class="title_head">
                              <h4>Win Rate % Challenge</h4>
                           </div>
                           <div class="row" >
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label for="winrate">Win Rate %</label>
                                    <input type="text" name="winrate" id="winrate" class="form-control required">
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label for="winnthreward">Total Win NTH Rewards</label>
                                    <input type="text" name="winnthreward" id="winnthreward" class="form-control required">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                    <div class="update_action plusiconbtn">
                                       <a href="#" class="linebtn_custom"> <i class="fa-solid fa-plus"></i>
                                       <span class="hover-shape1"></span>
                                       <span class="hover-shape2"></span>
                                       <span class="hover-shape3"></span>
                                       </a>Add
                                    </div>
                                 </div>
                           </div>
                        </div>
                        <div class="task-box2">
                           <div class="title_head">
                              <h4>Make % Profit Challenge</h4>
                           </div>
                           <div class="row" >
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label for="percentageprofite">Make % Profit</label>
                                    <input type="text" name="percentageprofite" id="percentageprofite" class="form-control required">
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label for="bonusper">Win Bonus %</label>
                                    <input type="text" name="bonusper" id="bonusper" class="form-control required">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                    <div class="update_action plusiconbtn">
                                       <a href="#" class="linebtn_custom"> <i class="fa-solid fa-plus"></i>
                                       <span class="hover-shape1"></span>
                                       <span class="hover-shape2"></span>
                                       <span class="hover-shape3"></span>
                                       </a>Add
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="hidden" id="FishTank" role="tabpanel" aria-labelledby="FishTank-tab">
         <h1>Fishtank</h1>
      </div>
      <div class="hidden" id="PayWay" role="tabpanel" aria-labelledby="PayWay-tab">
         <div class="row">
            <div class="col-lg-12">
               <div class="box bggredient">
                  <div class="box-header">
                     <h3>Pending Payments</h3>
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
                                       <span>Amount</span>
                                       <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                          class="fas fa-arrow-down"></i></div>
                                    </div>
                                 </th>
                                 <th class="sortable">
                                    <div class="arrow_box">
                                       <span>NTH</span>
                                       <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                          class="fas fa-arrow-down"></i></div>
                                    </div>
                                 </th>
                                 <th class="sortable">
                                    <div class="arrow_box">
                                       <span>Date/Time</span>
                                       <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                          class="fas fa-arrow-down"></i></div>
                                    </div>
                                 </th>
                                 <th class="actionbtnarea w-10 sortable">
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
                                       <div class="flex-grow-1">Vihan Hudda
                                          <a href="#" class="email_user"><span class="account_id">Acc. Id:</span> 0xe849fa28a...ea14</a>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <span class="payment_box__">
                                       <div class="payment_icon">
                                          <img src="assets/images/newimages/pix-icon.png" alt="">
                                       </div>
                                       <h5 class="font-bold leading-snug "> 
                                          <span class="title-limit  from-red-600 to-violet-600  bg-clip-text">$200</span>
                                          <span class="payment_method">Pay via Pix</span>
                                       </h5>
                                    </span>
                                 </td>
                                 <td>
                                    <a href="##" class="btn btnamount_service"> 2000 NTH</a>
                                 </td>
                                 <td>20 Jan,2023 10:00 am</td>
                                 <td>
                                    <div class="action_btn d-flex">
                                       <a href="#" class="notify_btn">Make</a>
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
                                       <div class="flex-grow-1">Jansh Brown
                                          <a href="#" class="email_user"><span class="account_id">Acc. Id:</span> 0xe849fa28a...ea14</a>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <span class="payment_box__">
                                       <div class="payment_icon">
                                          <img src="assets/images/newimages/osko-icon.png" alt="">
                                       </div>
                                       <h5 class="font-bold leading-snug "> 
                                          <span class="title-limit  from-red-600 to-violet-600  bg-clip-text">$500</span>
                                          <span class="payment_method ">Pay via Osko</span>
                                       </h5>
                                    </span>
                                 </td>
                                 <td>
                                    <a href="##" class="btn btnamount_service"> 1000 NTH</a>
                                 </td>
                                 <td>25 Jan,2023 10:00 am</td>
                                 <td>
                                    <div class="action_btn d-flex">
                                       <a href="#" class="notify_btn">Make</a>
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
                                       <div class="flex-grow-1">Ayaan Bowen
                                          <a href="#" class="email_user"><span class="account_id">Acc. Id:</span> 0xe849fa28a...ea14</a>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <span class="payment_box__">
                                       <div class="payment_icon">
                                          <img src="assets/images/newimages/credit-card-icon.png" alt="">
                                       </div>
                                       <h5 class="font-bold leading-snug "> 
                                          <span class="title-limit  from-red-600 to-violet-600  bg-clip-text">$1000</span>
                                          <span class="payment_method ">Pay via Credit Card</span>
                                       </h5>
                                    </span>
                                 </td>
                                 <td>
                                    <a href="##" class="btn btnamount_service"> 1500 NTH</a>
                                 </td>
                                 <td>20 July,2023 10:00 am</td>
                                 <td>
                                    <div class="action_btn d-flex">
                                       <a href="#" class="notify_btn">Make</a>
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
                                       <div class="flex-grow-1">Prezy Mark
                                          <a href="#" class="email_user"><span class="account_id">Acc. Id:</span> 0xe849fa28a...ea14</a>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <span class="payment_box__">
                                       <div class="payment_icon">
                                          <img src="assets/images/newimages/osko-icon.png" alt="">
                                       </div>
                                       <h5 class="font-bold leading-snug "> 
                                          <span class="title-limit  from-red-600 to-violet-600  bg-clip-text">$500</span>
                                          <span class="payment_method ">Pay via Osko</span>
                                       </h5>
                                    </span>
                                 </td>
                                 <td>
                                    <a href="##" class="btn btnamount_service"> 2000 NTH</a>
                                 </td>
                                 <td>20 July,2023 10:00 am</td>
                                 <td>
                                    <div class="action_btn d-flex">
                                       <a href="#" class="notify_btn">Make</a>
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
                                       <div class="flex-grow-1">Alex Smith
                                          <a href="#" class="email_user"><span class="account_id">Acc. Id:</span> 0xe849fa28a...ea14</a>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <span class="payment_box__">
                                       <div class="payment_icon">
                                          <img src="assets/images/newimages/pix-icon.png" alt="">
                                       </div>
                                       <h5 class="font-bold leading-snug "> 
                                          <span class="title-limit  from-red-600 to-violet-600  bg-clip-text">$200</span>
                                          <span class="payment_method">Pay via Pix</span>
                                       </h5>
                                    </span>
                                 </td>
                                 <td>
                                    <a href="##" class="btn btnamount_service"> 9000 NTH</a>
                                 </td>
                                 <td>09 July,2023 10:00 am</td>
                                 <td>
                                    <div class="action_btn d-flex">
                                       <a href="#" class="notify_btn">Make</a>
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
         <div class="row">
            <div class="col-lg-7">
               <div class="customblck_card bggredient">
                  <div class="blcard_header">
                     <h3 class="blcard_header_title">History Payment</h3>
                  </div>
                  <div class="blcard_body">
                     <div class=" card_listhgt">
                        <div class="common__listcard">
                           <div class="newbuilder__dataL">
                              <div class="user_listimg">
                                 <img src="assets/images/newimages/avatar-6.jpg" alt="" class="">
                              </div>
                              <div class="usernameandid_dt">
                                 <div class="namecomon_user">
                                    Alex Smith
                                 </div>
                                 <a href="#" class=" anchorhover"><span class="account_id">Acc. Id:</span> 0xe849fa28a...ea14</a>
                                 <div class="newly__date transection_dt">23 Oct,2023 11:00 am</div>
                              </div>
                           </div>
                           <div class="transection_amount">
                              <a href="##" class="btn btnamount_service"> 9000 NTH</a>
                           </div>
                           <span class="payment_box__ pay_bvc">
                              <h5 class="font-bold leading-snug "> 
                                 <span class="title-limit  from-red-600 to-violet-600  bg-clip-text">$200</span>
                                 <span class="payment_method">Pay via Pix</span>
                              </h5>
                           </span>
                        </div>
                        <div class="common__listcard">
                           <div class="newbuilder__dataL">
                              <div class="user_listimg">
                                 <img src="assets/images/newimages/avatar-3.jpg" alt="" class="">
                              </div>
                              <div class="usernameandid_dt">
                                 <div class="namecomon_user">
                                    Alex Smith
                                 </div>
                                 <a href="#" class=" anchorhover"><span class="account_id">Acc. Id:</span> 0xe849fa28a...ea14</a>
                                 <div class="newly__date transection_dt">23 Oct,2023 11:00 am</div>
                              </div>
                           </div>
                           <div class="transection_amount">
                              <a href="##" class="btn btnamount_service"> 9000 NTH</a>
                           </div>
                           <span class="payment_box__ pay_bvc">
                              <h5 class="font-bold leading-snug "> 
                                 <span class="title-limit  from-red-600 to-violet-600  bg-clip-text">$500</span>
                                 <span class="payment_method ">Pay via Osko</span>
                              </h5>
                           </span>
                        </div>
                        <div class="common__listcard">
                           <div class="newbuilder__dataL">
                              <div class="user_listimg">
                                 <img src="assets/images/newimages/avatar-1.jpg" alt="" class="">
                              </div>
                              <div class="usernameandid_dt">
                                 <div class="namecomon_user">
                                    Alex Smith
                                 </div>
                                 <a href="#" class=" anchorhover"><span class="account_id">Acc. Id:</span> 0xe849fa28a...ea14</a>
                                 <div class="newly__date transection_dt">23 Oct,2023 11:00 am</div>
                              </div>
                           </div>
                           <div class="transection_amount">
                              <a href="##" class="btn btnamount_service"> 9000 NTH</a>
                           </div>
                           <span class="payment_box__ pay_bvc">
                              <h5 class="font-bold leading-snug "> 
                                 <span class="title-limit  from-red-600 to-violet-600  bg-clip-text">$1000</span>
                                 <span class="payment_method ">Pay via Credit Card</span>
                              </h5>
                           </span>
                        </div>
                        <div class="common__listcard">
                           <div class="newbuilder__dataL">
                              <div class="user_listimg">
                                 <img src="assets/images/newimages/avatar-2.jpg" alt="" class="">
                              </div>
                              <div class="usernameandid_dt">
                                 <div class="namecomon_user">
                                    Alex Smith
                                 </div>
                                 <a href="#" class=" anchorhover"><span class="account_id">Acc. Id:</span>  0xe849fa28a...ea14</a>
                                 <div class="newly__date transection_dt">23 Oct,2023 11:00 am</div>
                              </div>
                           </div>
                           <div class="transection_amount">
                              <a href="##" class="btn btnamount_service"> 9000 NTH</a>
                           </div>
                           <span class="payment_box__ pay_bvc">
                              <h5 class="font-bold leading-snug "> 
                                 <span class="title-limit  from-red-600 to-violet-600  bg-clip-text">$500</span>
                                 <span class="payment_method ">Pay via Osko</span>
                              </h5>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="group customblck_card bggredient">
                  <div class="Rewards_card p-6">
                     <div class="relative md:shrink-0 reward_area">
                        <h2 class="font-semibold">Fees Earned</h2>
                        <a href="##">
                        <small id="" class="font-bold bg-gradient-to-r from-violet-600 to-red-600 buy_buttoncs">This Month</small>
                        </a>
                        <div class="pt-6 nthAmount">
                           <a href="item-detail.html" class="btn btn-sm rounded-full bg-violet-600/5 hover:bg-violet-600 border-violet-600/10 hover:border-violet-600 text-violet-600 hover:text-white">$ 300</a>
                        </div>
                     </div>
                     <div class="p-6 w-full balance_area">
                        <h1 class="font-bold leading-snug text-white text-4xl"> <span class="bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">Total Fees Earned</span></h1>
                        <div class="pt-6 balanceAmount">
                           <h3>$ 10000</h3>
                        </div>
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
<!-- slider range -->
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
