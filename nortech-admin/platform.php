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
                                          <div class="col-lg-6">
                                 <div class="customblck_card">
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
                              <div class="customblck_card">
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
                  <div class="hidden tab-content" id="Payway-ak-done" role="tabpanel"
                     aria-labelledby="Payway-ak-done-tab">
                     <div class="top__flex_">
                        <h3 class="main_title">Challenge</h3>

                     </div>
                    <div class="row">
                    <div class="col-lg-12">
                              <div class="box">
                                 <div class="box-header">
                                    <h3>Create Builder Challenge</h3>
                                 </div>
                                 <div class="box-body">
                                    <div class="task-box">
                                    <div class="row" >
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <input class="form-control" type="text">
                                                <label for="" class="form-label">User Count</label>
                                       
                                             </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <input class="form-control" type="text">
                                                <label for="" class="form-label">Total Win NTH Rewards</label>
                                       
                                             </div>
                                       </div>
                              
                                    </div>
                                    </div>
                                    
                                    <div class="update_action">
                                       <a href="#" class="update_btn" id="addRowButton">Add More</a>
                                       <a href="#" class="ban_Service_btn" id="removeRowButton" style="display:none">Remove</a>

                                       
                                       </div>
                                 </div>
                              </div>
                        </div>

                        <div class="col-lg-12">
                              <div class="box">
                                 <div class="box-header">
                                    <h3>Create FishTank Challenge</h3>
                                 </div>
                                 <div class="box-body">
                                    <div class="task-box1">
                                    <div class="title_head">
                                       <h4>Win Rate % Challenge</h4>
                                    </div>
                                    <div class="row" >
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <input class="form-control" type="text">
                                                <label for="" class="form-label">Win Rate %</label>
                                       
                                             </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <input class="form-control" type="text">
                                                <label for="" class="form-label">Total Win NTH Rewards</label>
                                       
                                             </div>
                                       </div>
                              
                                    </div>
                                    </div>
                                    
                                    <div class="update_action">
                                       <a href="#" class="update_btn" id="addRowButton1">Add More</a>
                                       <a href="#" class="ban_Service_btn" id="removeRowButton1" style="display:none">Remove</a>

                                       
                                       </div>


                                       <div class="task-box2">
                                    <div class="title_head">
                                       <h4>Make % Profit Challenge</h4>
                                    </div>
                                    <div class="row" >
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <input class="form-control" type="text">
                                                <label for="" class="form-label">Make % Profit</label>
                                       
                                             </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <input class="form-control" type="text">
                                                <label for="" class="form-label">Win Bonus %</label>
                                       
                                             </div>
                                       </div>
                              
                                    </div>
                                    </div>
                                    
                                    <div class="update_action">
                                       <a href="#" class="update_btn" id="addRowButton2">Add More</a>
                                       <a href="#" class="ban_Service_btn" id="removeRowButton2" style="display:none">Remove</a>

                                       
                                       </div>
                                 </div>
                              </div>
                        </div>
                    </div>
                  </div>


                  <div class="hidden tab-content" id="History-ak" role="tabpanel" aria-labelledby="History-ak-tab">
                     rtyu
                  </div>


                  <div class="hidden tab-content" id="Payway" role="tabpanel" aria-labelledby="Payway-tab">
                  <div class="top__flex_">
                        <h3 class="main_title">Payway</h3>

                     </div>
                  <div class="col-lg-12">
                           <div class="box">
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
                     <div class="row">
                     <div class="col-lg-7">
                              <div class="customblck_card">
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
                        <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-800 overflow-hidden ease-in-out duration-500 w-full mx-auto xl:max-w-2xl">
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

<!-- dropdown tab js start -->

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
<!-- dropdown tab js End -->

<!-- append code for div -->
<script>
        $(document).ready(function() {
            let rowsAppended = 0;
            const maxRows = 2; // Set the maximum number of rows
            
            $('#addRowButton').click(function() {
                if (rowsAppended < maxRows) {
                    const newRow = '<div class="row"><div class="col-lg-6"><div class="form-group"><input class="form-control" type="text"><label for="" class="form-label">User Count</label></div></div><div class="col-lg-6"><div class="form-group"><input class="form-control" type="text"><label for="" class="form-label">Total Win NTH Rewards</label></div></div></div>';
                    $('.task-box').append(newRow);
                    rowsAppended++;

                    // Show the Remove button when at least one row is appended
                    $('#removeRowButton').show();
                } else {
                    alert("You've reached the limit.");
                }
            });
            
            $('#removeRowButton').click(function() {
                if (rowsAppended > 0) {
                    $('.task-box .row:last-child').remove();
                    rowsAppended--;

                    // Hide the Remove button if no rows are left
                    if (rowsAppended === 0) {
                        $('#removeRowButton').hide();
                    }
                }
            });
        });
    </script>

<script>
        $(document).ready(function() {
            let rowsAppended = 0;
            const maxRows = 2; // Set the maximum number of rows
            
            $('#addRowButton1').click(function() {
                if (rowsAppended < maxRows) {
                    const newRow = '<div class="row"><div class="col-lg-6"><div class="form-group"><input class="form-control" type="text"><label for="" class="form-label">Win Rate %</label></div></div><div class="col-lg-6"><div class="form-group"><input class="form-control" type="text"><label for="" class="form-label">Total Win NTH Rewards</label></div></div></div>';
                    $('.task-box1').append(newRow);
                    rowsAppended++;

                    // Show the Remove button when at least one row is appended
                    $('#removeRowButton1').show();
                } else {
                    alert("You've reached the limit.");
                }
            });
            
            $('#removeRowButton1').click(function() {
                if (rowsAppended > 0) {
                    $('.task-box1 .row:last-child').remove();
                    rowsAppended--;

                    // Hide the Remove button if no rows are left
                    if (rowsAppended === 0) {
                        $('#removeRowButton1').hide();
                    }
                }
            });
        });
    </script>

<script>
        $(document).ready(function() {
            let rowsAppended = 0;
            const maxRows = 2; // Set the maximum number of rows
            
            $('#addRowButton2').click(function() {
                if (rowsAppended < maxRows) {
                    const newRow = '<div class="row"><div class="col-lg-6"><div class="form-group"><input class="form-control" type="text"><label for="" class="form-label">Make % Profit</label></div></div><div class="col-lg-6"><div class="form-group"><input class="form-control" type="text"><label for="" class="form-label">Win Bonus %</label></div></div></div>';
                    $('.task-box2').append(newRow);
                    rowsAppended++;

                    // Show the Remove button when at least one row is appended
                    $('#removeRowButton2').show();
                } else {
                    alert("You've reached the limit.");
                }
            });
            
            $('#removeRowButton2').click(function() {
                if (rowsAppended > 0) {
                    $('.task-box2 .row:last-child').remove();
                    rowsAppended--;

                    // Hide the Remove button if no rows are left
                    if (rowsAppended === 0) {
                        $('#removeRowButton2').hide();
                    }
                }
            });
        });
    </script>