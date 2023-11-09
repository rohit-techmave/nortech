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
               <li class="inline breadcrumb-item   duration-500 text-slate-900 dark:text-white" aria-current="page">Marketplace</li>
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
            <button class="px-6 py-2  w-full transition-all duration-500 ease-in-out" id="Education-tab"
               data-tabs-target="#Education" type="button" role="tab" aria-controls="Education"
               aria-selected="false">Education</button>
         </li>
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2   w-full transition-all duration-500 ease-in-out" id="Finance-tab"
               data-tabs-target="#Finance" type="button" role="tab" aria-controls="Finance" aria-selected="false">
            Finance</button>
         </li>
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2   w-full transition-all duration-500 ease-in-out" id="Campaiens-tab"
               data-tabs-target="#Campaiens" type="button" role="tab" aria-controls="Campaiens" aria-selected="false">
            Campaigns</button>
         </li>
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2   w-full transition-all duration-500 ease-in-out" id="Products-tab"
               data-tabs-target="#Products" type="button" role="tab" aria-controls="Products" aria-selected="false">
            Products</button>
         </li>
      </ul>
      <div id="StarterContent" class="mt-6">
         <div class="" id="general" role="tabpanel" aria-labelledby="general-tab">
            <div class="row">
               <div class="col-lg-12">
                  <div class="customblck_card bggredient">
                     <div class="blcard_header tab_headerw-title">
                     <div class="pendingdata_tabs">
                        <!-- Tab buttons -->
<div class="tab-button" onclick="openTab('tab1')">Pending Course Approval</div>
<div class="tab-button" onclick="openTab('tab2')">Pending Products Approval</div>

<div id="active-line" class="active-tab-button"></div>

</div>
                     </div>
                     <div class="blcard_body">


<!-- Tab content -->
<div id="tab1" class="tab-content">
<div class="datatable-container custom_table_area">
                          
                          <table id="pending_course_table" class="display">
                             <thead>
                                <tr>
                                   <th class="sortable sorted-asc">
                                      <div class="arrow_box">
                                         <span>S.No.</span>
                                         <div class="arrow"><i class="fas fa-arrow-up active-arrow"></i> <i
                                            class="fas fa-arrow-down"></i></div>
                                      </div>
                                   </th>
                                   <th class="sortable sorted-asc">
                                      <div class="arrow_box">
                                         <span>Created By</span>
                                         <div class="arrow"><i class="fas fa-arrow-up active-arrow"></i> <i
                                            class="fas fa-arrow-down"></i></div>
                                      </div>
                                   </th>
                                   <th class="sortable">
                                      <div class="arrow_box">
                                         <span>Course Name</span>
                                         <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                            class="fas fa-arrow-down"></i></div>
                                      </div>
                                   </th>
                                   <th class="sortable">
                                      <div class="arrow_box">
                                         <span>Date</span>
                                         <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                            class="fas fa-arrow-down"></i></div>
                                      </div>
                                   </th>
                                   <th class="sortable">
                                      <div class="arrow_box">
                                         <span>Total Lavel's</span>
                                         <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                            class="fas fa-arrow-down"></i></div>
                                      </div>
                                   </th>
                                   <th class="sortable">
                                      <div class="arrow_box">
                                         <span>Course Amount</span>
                                         <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                            class="fas fa-arrow-down"></i></div>
                                      </div>
                                   </th>
                                   <th class="sortable">
                                      <div class="arrow_box">
                                         <span>Status</span>
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
                                   <td>1</td>
                                   <td>
                                      <div class="d-flex align-items-center">
                                         <div class="flex-shrink-0 me-2">
                                            <img src="assets/images/newimages/avatar-1.jpg" alt=""
                                               class="avatar-xs rounded-circle">
                                         </div>
                                         <div class="flex-grow-1">Vihan Hudda</div>
                                      </div>
                                   </td>
                                   <td>Advanced Crypto</td>
                                   <td>09 Oct,2023</td>
                                   <td> <span class="fw-semibold text-primary">07</span></td>
                                   <td>Free</td>
                                   <td>
                                    <span class="badge bg-danger-transparent">Pending</span>
                                    </td>
                                   <td>
                                      <div class="action_btn d-flex">
                                         <div class="action_customdropdowncr">
                                            <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                            <div class="popup popup_dropdowncs">
                                               <div class="closepopa_header">
                                                  <h2>Quick Action</h2>
                                                  <span class="close-icon">&times;</span>
                                               </div>
                                               <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                  <a href="course-detail.php"><i class="fa-regular fa-eye"></i> View Details</a>
                                                  <a href="##" class="approve-button"><i class="fa-regular fa-thumbs-up"></i> Approve</a>
                                                  <a href="##" class="rejectCourseButton"><i class="fa-regular fa-thumbs-down"></i> Reject</a>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </td>
                                </tr>
                                <tr>
                                   <td>2</td>
                                   <td>
                                      <div class="d-flex align-items-center">
                                         <div class="flex-shrink-0 me-2">
                                            <img src="assets/images/newimages/avatar-2.jpg" alt=""
                                               class="avatar-xs rounded-circle">
                                         </div>
                                         <div class="flex-grow-1">Jansh Brown </div>
                                      </div>
                                   </td>
                                   <td>Get Confident in Crypto</td>
                                   <td>04 Oct,2023</td>
                                   <td> <span class="fw-semibold text-primary">11</span></td>
                                   <td>Free</td>
                                   <td>
                                    <span class="badge bg-danger-transparent">Pending</span>
                                    </td>
                                   <td>
                                      <div class="action_btn d-flex">
                                         <div class="action_customdropdowncr">
                                            <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                            <div class="popup popup_dropdowncs">
                                               <div class="closepopa_header">
                                                  <h2>Quick Action</h2>
                                                  <span class="close-icon">&times;</span>
                                               </div>
                                               <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                  <a href="course-detail.php"><i class="fa-regular fa-eye"></i> View Details</a>
                                                  <a href="##" class="approve-button"><i class="fa-regular fa-thumbs-up"></i> Approve</a>
                                                  <a href="##" class="rejectCourseButton"><i class="fa-regular fa-thumbs-down"></i> Reject</a>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </td>
                                </tr>
                                <tr>
                                   <td>3</td>
                                   <td>
                                      <div class="d-flex align-items-center">
                                         <div class="flex-shrink-0 me-2">
                                            <img src="assets/images/newimages/avatar-3.jpg" alt=""
                                               class="avatar-xs rounded-circle">
                                         </div>
                                         <div class="flex-grow-1">Prezy Mark </div>
                                      </div>
                                   </td>
                                   <td>Coding for Beginners</td>
                                   <td>28 Oct,2023</td>
                                   <td> <span class="fw-semibold text-primary">08</span></td>
                                   <td>Free</td>
                                   <td>
                                    <span class="badge bg-danger-transparent">Pending</span>
                                    </td>
                                   <td>
                                      <div class="action_btn d-flex">
                                         <div class="action_customdropdowncr">
                                            <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                            <div class="popup popup_dropdowncs">
                                               <div class="closepopa_header">
                                                  <h2>Quick Action</h2>
                                                  <span class="close-icon">&times;</span>
                                               </div>
                                               <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                  <a href="course-detail.php"><i class="fa-regular fa-eye"></i> View Details</a>
                                                  <a href="##" class="approve-button"><i class="fa-regular fa-thumbs-up"></i> Approve</a>
                                                  <a href="##" class="rejectCourseButton"><i class="fa-regular fa-thumbs-down"></i> Reject</a>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </td>
                                </tr>
                                <tr>
                                   <td>4</td>
                                   <td>
                                      <div class="d-flex align-items-center">
                                         <div class="flex-shrink-0 me-2">
                                            <img src="assets/images/newimages/avatar-4.jpg" alt=""
                                               class="avatar-xs rounded-circle">
                                         </div>
                                         <div class="flex-grow-1">Vihan Hudda</div>
                                      </div>
                                   </td>
                                   <td>Shibuya Scramble Punks</td>
                                   <td>1 Nov,2023</td>
                                   <td> <span class="fw-semibold text-primary">04</span></td>
                                   <td>&150.00</td>
                                   <td>
                                    <span class="badge bg-danger-transparent">Pending</span>
                                    </td>
                                   <td>
                                      <div class="action_btn d-flex">
                                         <div class="action_customdropdowncr">
                                            <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                            <div class="popup popup_dropdowncs">
                                               <div class="closepopa_header">
                                                  <h2>Quick Action</h2>
                                                  <span class="close-icon">&times;</span>
                                               </div>
                                               <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                  <a href="course-detail.php"><i class="fa-regular fa-eye"></i> View Details</a>
                                                  <a href="##" class="approve-button"><i class="fa-regular fa-thumbs-up"></i> Approve</a>
                                                  <a href="##" class="rejectCourseButton"><i class="fa-regular fa-thumbs-down"></i> Reject</a>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </td>
                                </tr>
                                
                             </tbody>
                          </table>
                          
                       </div>
                       <!-- table end -->
</div>

<div id="tab2" class="tab-content">

                     <div class="datatable-container productablearea">
                        <!-- test -->
                      
                   
                        <table id="pending-product_datatable" class="display">
                           <thead>
                              <tr>
                                 <th class="sortable sorted-asc">
                                    <div class="arrow_box">
                                       <span>S.No.</span>
                                       <div class="arrow"><i class="fas fa-arrow-up active-arrow"></i> <i
                                          class="fas fa-arrow-down"></i></div>
                                    </div>
                                 </th>
                                 <th class="sortable sorted-asc">
                                    <div class="arrow_box">
                                       <span>Product Name</span>
                                       <div class="arrow"><i class="fas fa-arrow-up active-arrow"></i> <i
                                          class="fas fa-arrow-down"></i></div>
                                    </div>
                                 </th>
                                 <th class="sortable">
                                    <div class="arrow_box">
                                       <span>Product Category</span>
                                       <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                          class="fas fa-arrow-down"></i></div>
                                    </div>
                                 </th>
                                 <th class="sortable">
                                    <div class="arrow_box">
                                       <span>Product Image</span>
                                       <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                          class="fas fa-arrow-down"></i></div>
                                    </div>
                                 </th>
                                 <th class="sortable">
                                    <div class="arrow_box">
                                       <span>Date</span>
                                       <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                          class="fas fa-arrow-down"></i></div>
                                    </div>
                                 </th>
                                 <th class="sortable">
                                    <div class="arrow_box">
                                       <span>Status</span>
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
                                 <td>1</td>
                                 <td>
                                    Sport Wear 
                                 </td>
                                 <td>Sports kit</td>
                                 <td class="proimgtd">
                                    <div class="product_image">
                                       <img src="assets/images/newimages/products/pro-tshirt-set.png" alt="">
                                       <div class="hexagon-bg"></div>
                                    </div>
                                 </td>
                                 <td>09 Oct,2023</td>
                                 <td>
                                    <span class="badge bg-danger-transparent">Pending</span>
                                    </td>
                                 <td>
                                    <div class="action_btn d-flex">
                                       <div class="action_customdropdowncr">
                                          <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                          <div class="popup popup_dropdowncs">
                                             <div class="closepopa_header">
                                                <h2>Quick Action</h2>
                                                <span class="close-icon">&times;</span>
                                             </div>
                                             <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                  <a href="##" class="approve-button-product"><i class="fa-regular fa-thumbs-up"></i> Approve</a>
                                                  <a href="##" class="rejectpro-CourseButton"><i class="fa-regular fa-thumbs-down"></i> Reject</a>
                                               </div>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td>Tshirt</td>
                                 <td>Tshirt</td>
                                 <td class="proimgtd">
                                    <div class="product_image">
                                       <img src="assets/images/newimages/products/pro-tshirt.png" alt="">
                                       <div class="hexagon-bg"></div>
                                    </div>
                                 </td>
                                 <td>04 Oct,2023</td>
                                 <td>
                                    <span class="badge bg-danger-transparent">Pending</span>
                                    </td>
                                 <td>
                                    <div class="action_btn d-flex">
                                       <div class="action_customdropdowncr">
                                          <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                          <div class="popup popup_dropdowncs">
                                             <div class="closepopa_header">
                                                <h2>Quick Action</h2>
                                                <span class="close-icon">&times;</span>
                                             </div>
                                             <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                  <a href="##" class="approve-button-product"><i class="fa-regular fa-thumbs-up"></i> Approve</a>
                                                  <a href="##" class="rejectpro-CourseButton"><i class="fa-regular fa-thumbs-down"></i> Reject</a>
                                               </div>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td>Bag</td>
                                 <td>Gym Kit</td>
                                 <td class="proimgtd">
                                    <div class="product_image">
                                       <img src="assets/images/newimages/products/prokit.png" alt="">
                                       <div class="hexagon-bg"></div>
                                    </div>
                                 </td>
                                 <td>28 Oct,2023</td>
                                 <td>
                                    <span class="badge bg-danger-transparent">Pending</span>
                                    </td>
                                 <td>
                                    <div class="action_btn d-flex">
                                       <div class="action_customdropdowncr">
                                          <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                          <div class="popup popup_dropdowncs">
                                             <div class="closepopa_header">
                                                <h2>Quick Action</h2>
                                                <span class="close-icon">&times;</span>
                                             </div>
                                             <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                  <a href="##" class="approve-button-product"><i class="fa-regular fa-thumbs-up"></i> Approve</a>
                                                  <a href="##" class="rejectpro-CourseButton"><i class="fa-regular fa-thumbs-down"></i> Reject</a>
                                               </div>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td>Football</td>
                                 <td>Sport</td>
                                 <td class="proimgtd">
                                    <div class="product_image">
                                       <img src="assets/images/newimages/products/pro-football.png" alt="">
                                       <div class="hexagon-bg"></div>
                                    </div>
                                 </td>
                                 <td>1 Nov,2023</td>
                                 <td>
                                    <span class="badge bg-danger-transparent">Pending</span>
                                    </td>
                                 <td>
                                    <div class="action_btn d-flex">
                                       <div class="action_customdropdowncr">
                                          <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                          <div class="popup popup_dropdowncs">
                                             <div class="closepopa_header">
                                                <h2>Quick Action</h2>
                                                <span class="close-icon">&times;</span>
                                             </div>
                                             <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                  <a href="##" class="approve-button-product"><i class="fa-regular fa-thumbs-up"></i> Approve</a>
                                                  <a href="##" class="rejectpro-CourseButton"><i class="fa-regular fa-thumbs-down"></i> Reject</a>
                                               </div>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>5</td>
                                 <td>Modern Cap</td>
                                 <td>Cap</td>
                                 <td class="proimgtd">
                                    <div class="product_image">
                                       <img src="assets/images/newimages/products/pro-cap.png" alt="">
                                       <div class="hexagon-bg"></div>
                                    </div>
                                 </td>
                                 <td>2 Nov,2023</td>
                                 <td>
                                    <span class="badge bg-danger-transparent">Pending</span>
                                    </td>
                                 <td>
                                    <div class="action_btn d-flex">
                                       <div class="action_customdropdowncr">
                                          <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                          <div class="popup popup_dropdowncs">
                                             <div class="closepopa_header">
                                                <h2>Quick Action</h2>
                                                <span class="close-icon">&times;</span>
                                             </div>
                                             <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                  <a href="##" class="approve-button-product"><i class="fa-regular fa-thumbs-up"></i> Approve</a>
                                                  <a href="##" class="rejectpro-CourseButton"><i class="fa-regular fa-thumbs-down"></i> Reject</a>
                                               </div>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                       
                     </div>
                     <!-- table end -->
                 
</div>


                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="customblck_card bggredient">
                     <div class="blcard_header">
                        <h3 class="blcard_header_title">History Approval</h3>
                     </div>
                     <div class="blcard_body">
                        <div class=" card_listhgt">
                           <div class="common__listcard">
                              <div class="approve_list_history">
                                    <h2 class="approveitem_title">Courses Approved</h2>

                                   <a href="approved-courses.php">
                                   <div class="check_approve">
                              <h5 class="approved_number">205 Approved</h5>
                              <div class="check_sign__"><i class="fa-regular fa-circle-check"></i></div>
                              </div>
                                   </a>

                                   <a href="approved-courses.php" class="linebtn_custom view_listbtnn">View Details

<span class="hover-shape1"></span>
         <span class="hover-shape2"></span>
         <span class="hover-shape3"></span>
</a>
                              </div>
                           </div>
                           <div class="common__listcard">
                              <div class="approve_list_history">
                                    <h2 class="approveitem_title">Products approved</h2>

                                   <a href="approved-products.php">
                                   <div class="check_approve">
                              <h5 class="approved_number">56 Approved</h5>
                              <div class="check_sign__"><i class="fa-regular fa-circle-check"></i></div>
                              </div>
                                   </a>

                                   <a href="approved-products.php" class="linebtn_custom view_listbtnn">View Details

<span class="hover-shape1"></span>
         <span class="hover-shape2"></span>
         <span class="hover-shape3"></span>
</a>
                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="customblck_card bggredient">
                     <div class="blcard_header">
                        <h3 class="blcard_header_title">Volume Approval</h3>
                     </div>
                     <div class="blcard_body">
                        <div class=" card_listhgt">
                           <div class="common__listcard">
                              <div class="approve_list_history">
                                    <h2 class="approveitem_title">Total Amount From Marketplace</h2>

                                   <a href="##">
                                   <div class="check_approve">
                              <h5 class="approved_number">$456.00</h5>
                              <div class="check_sign__"><i class="fa-regular fa-circle-check"></i></div>
                              </div>
                                   </a>

                                   
                              </div>
                           </div>
                           <div class="common__listcard">
                              <div class="approve_list_history">
                                    <h2 class="approveitem_title">Total Active Users</h2>

                                   <a href="##">
                                   <div class="check_approve">
                              <h5 class="approved_number">1500</h5>
                              <div class="check_sign__"><i class="fa-regular fa-circle-check"></i></div>
                              </div>
                                   </a>

                                 
                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="customblck_card bggredient">
                     <div class="blcard_header">
                        <h3 class="blcard_header_title">History Copy Trade</h3>
                     </div>
                     <div class="blcard_body">
                        <div class=" card_listhgt">
                           <div class="common__listcard">
                              <div class="approve_list_history">
                                    <h2 class="approveitem_title">Traders Approved</h2>

                                   <a href="##">
                                   <div class="check_approve">
                              <h5 class="approved_number">$456.00</h5>
                              <div class="check_sign__"><i class="fa-regular fa-circle-check"></i></div>
                              </div>
                                   </a>

                                   
                              </div>
                           </div>
                           <div class="common__listcard">
                              <div class="approve_list_history">
                                    <h2 class="approveitem_title">Services Approved</h2>

                                   <a href="##">
                                   <div class="check_approve">
                              <h5 class="approved_number">1500</h5>
                              <div class="check_sign__"><i class="fa-regular fa-circle-check"></i></div>
                              </div>
                                   </a>

                                 
                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
         <div class="box bggredient ">

            <div class="box-body">
               <div class="redeem_box notification">
                  <div class="trading_historybox">

                     <h6 class="title_tradingprofit">Total Tranding Profit</h6>
                    <div class="trading_profile">
                    <h3>$43,975,43 
                     </h3>
                     <div class="flex-shrink-0">
                                          <h5 class="text-success fs-14 mb-0">
                                             +16.24 % <i class="fa-solid fa-arrow-trend-up"></i>
                                          </h5>
                                       </div>
                    </div>


                  </div>
                 
               </div>

            </div>
            </div>
         </div>

         <div class="col-lg-6">
         <div class="box bggredient ">

            <div class="box-body">
               <div class="redeem_box notification">
                  <div class="trading_historybox">

                     <h6 class="title_tradingprofit">Total Tranding Loss</h6>
                    <div class="trading_profile loss">
                    <h3>$2,85,21 
                     </h3>
                     <div class="flex-shrink-0">
                                          <h5 class="text-danger fs-14 mb-0">
                                             -4.89 % <i class="fa-solid fa-arrow-trend-up"></i>
                                          </h5>
                                       </div>
                    </div>


                  </div>
                 
               </div>

            </div>
            </div>
         </div>
            </div>
         </div>
         <div class="hidden" id="Education" role="tabpanel" aria-labelledby="Education-tab">
            <div class="row">
               <div class="col-lg-12">
                  <div class="customblck_card bggredient">
                     <div class="blcard_header">
                        <h3 class="blcard_header_title">Approval Content</h3>
                     </div>
                     <div class="blcard_body">
                        <div class="datatable-container custom_table_area">
                          
                           <table id="datatable_customr" class="display">
                              <thead>
                                 <tr>
                                    <th class="sortable sorted-asc">
                                       <div class="arrow_box">
                                          <span>S.No.</span>
                                          <div class="arrow"><i class="fas fa-arrow-up active-arrow"></i> <i
                                             class="fas fa-arrow-down"></i></div>
                                       </div>
                                    </th>
                                    <th class="sortable sorted-asc">
                                       <div class="arrow_box">
                                          <span>Created By</span>
                                          <div class="arrow"><i class="fas fa-arrow-up active-arrow"></i> <i
                                             class="fas fa-arrow-down"></i></div>
                                       </div>
                                    </th>
                                    <th class="sortable">
                                       <div class="arrow_box">
                                          <span>Course Name</span>
                                          <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                             class="fas fa-arrow-down"></i></div>
                                       </div>
                                    </th>
                                    <th class="sortable">
                                       <div class="arrow_box">
                                          <span>Date</span>
                                          <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                             class="fas fa-arrow-down"></i></div>
                                       </div>
                                    </th>
                                    <th class="sortable">
                                       <div class="arrow_box">
                                          <span>Total Lavel's</span>
                                          <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                             class="fas fa-arrow-down"></i></div>
                                       </div>
                                    </th>
                                    <th class="sortable">
                                       <div class="arrow_box">
                                          <span>Course Amount</span>
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
                                    <td>1</td>
                                    <td>
                                       <div class="d-flex align-items-center">
                                          <div class="flex-shrink-0 me-2">
                                             <img src="assets/images/newimages/avatar-1.jpg" alt=""
                                                class="avatar-xs rounded-circle">
                                          </div>
                                          <div class="flex-grow-1">Vihan Hudda</div>
                                       </div>
                                    </td>
                                    <td>Advanced Crypto</td>
                                    <td>09 Oct,2023</td>
                                    <td> <span class="fw-semibold text-primary">07</span></td>
                                    <td>Free</td>
                                    <td>
                                       <div class="action_btn d-flex">
                                          <div class="action_customdropdowncr">
                                             <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                             <div class="popup popup_dropdowncs">
                                                <div class="closepopa_header">
                                                   <h2>Quick Action</h2>
                                                   <span class="close-icon">&times;</span>
                                                </div>
                                                <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                   <a href="course-detail.php"><i class="fa-regular fa-eye"></i> View Details</a>
                                                   <a href="##" class="approve-button"><i class="fa-regular fa-thumbs-up"></i> Approve</a>
                                                   <a href="##" class="rejectCourseButton"><i class="fa-regular fa-thumbs-down"></i> Reject</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>
                                       <div class="d-flex align-items-center">
                                          <div class="flex-shrink-0 me-2">
                                             <img src="assets/images/newimages/avatar-2.jpg" alt=""
                                                class="avatar-xs rounded-circle">
                                          </div>
                                          <div class="flex-grow-1">Jansh Brown </div>
                                       </div>
                                    </td>
                                    <td>Get Confident in Crypto</td>
                                    <td>04 Oct,2023</td>
                                    <td> <span class="fw-semibold text-primary">11</span></td>
                                    <td>Free</td>
                                    <td>
                                       <div class="action_btn d-flex">
                                          <div class="action_customdropdowncr">
                                             <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                             <div class="popup popup_dropdowncs">
                                                <div class="closepopa_header">
                                                   <h2>Quick Action</h2>
                                                   <span class="close-icon">&times;</span>
                                                </div>
                                                <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                   <a href="course-detail.php"><i class="fa-regular fa-eye"></i> View Details</a>
                                                   <a href="##" class="approve-button"><i class="fa-regular fa-thumbs-up"></i> Approve</a>
                                                   <a href="##" class="rejectCourseButton"><i class="fa-regular fa-thumbs-down"></i> Reject</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>
                                       <div class="d-flex align-items-center">
                                          <div class="flex-shrink-0 me-2">
                                             <img src="assets/images/newimages/avatar-3.jpg" alt=""
                                                class="avatar-xs rounded-circle">
                                          </div>
                                          <div class="flex-grow-1">Prezy Mark </div>
                                       </div>
                                    </td>
                                    <td>Coding for Beginners</td>
                                    <td>28 Oct,2023</td>
                                    <td> <span class="fw-semibold text-primary">08</span></td>
                                    <td>Free</td>
                                    <td>
                                       <div class="action_btn d-flex">
                                          <div class="action_customdropdowncr">
                                             <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                             <div class="popup popup_dropdowncs">
                                                <div class="closepopa_header">
                                                   <h2>Quick Action</h2>
                                                   <span class="close-icon">&times;</span>
                                                </div>
                                                <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                   <a href="course-detail.php"><i class="fa-regular fa-eye"></i> View Details</a>
                                                   <a href="##" class="approve-button"><i class="fa-regular fa-thumbs-up"></i> Approve</a>
                                                   <a href="##" class="rejectCourseButton"><i class="fa-regular fa-thumbs-down"></i> Reject</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>
                                       <div class="d-flex align-items-center">
                                          <div class="flex-shrink-0 me-2">
                                             <img src="assets/images/newimages/avatar-4.jpg" alt=""
                                                class="avatar-xs rounded-circle">
                                          </div>
                                          <div class="flex-grow-1">Vihan Hudda</div>
                                       </div>
                                    </td>
                                    <td>Shibuya Scramble Punks</td>
                                    <td>1 Nov,2023</td>
                                    <td> <span class="fw-semibold text-primary">04</span></td>
                                    <td>&150.00</td>
                                    <td>
                                       <div class="action_btn d-flex">
                                          <div class="action_customdropdowncr">
                                             <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                             <div class="popup popup_dropdowncs">
                                                <div class="closepopa_header">
                                                   <h2>Quick Action</h2>
                                                   <span class="close-icon">&times;</span>
                                                </div>
                                                <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                   <a href="course-detail.php"><i class="fa-regular fa-eye"></i> View Details</a>
                                                   <a href="##" class="approve-button"><i class="fa-regular fa-thumbs-up"></i> Approve</a>
                                                   <a href="##" class="rejectCourseButton"><i class="fa-regular fa-thumbs-down"></i> Reject</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 
                              </tbody>
                           </table>
                           
                        </div>
                        <!-- table end -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="hidden" id="Finance" role="tabpanel" aria-labelledby="Finance-tab">

      <div class="main_card_box_total">
         <div class="card_box_total">
            <a href="#">
               <div class="box custom-card bggredient">
                  <div class="box-body">
                     <div class="d-flex align-items-center">
                        <div class="me-3">
                           <span class="avatar avatar-md p-2 bg-primary">
                              <svg class="svg-white"
                                 xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                                 fill="#000000">
                                 <path d="M0 0h24v24H0V0z" fill="none"></path>
                                 <path
                                    d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z">
                                 </path>
                              </svg>
                           </span>
                        </div>
                        <div class="flex-fill">
                           <p class="mb-0 fs-10 op-7 text-muted fw-semibold">X Builder</p>
                           <div class="d-flex align-items-center justify-content-between">
                              <h5 class="fw-semibold mb-0 lh-1 total_count__">256</h5>
                              <!-- <div class="text-danger fw-semibold increase_count">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M17 9.17a1 1 0 0 0-1.41 0L12 12.71L8.46 9.17a1 1 0 0 0-1.41 0a1 1 0 0 0 0 1.42l4.24 4.24a1 1 0 0 0 1.42 0L17 10.59a1 1 0 0 0 0-1.42Z"/></svg>
                                 -1.05%
                                 </div> -->
                              <div class="text-success fw-semibold increase_count">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                       d="m17 13.41l-4.29-4.24a1 1 0 0 0-1.42 0l-4.24 4.24a1 1 0 0 0 0 1.42a1 1 0 0 0 1.41 0L12 11.29l3.54 3.54a1 1 0 0 0 .7.29a1 1 0 0 0 .71-.29a1 1 0 0 0 .05-1.42Z" />
                                 </svg>
                                 +0.21%
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                   <!-- gredint border style dont remove -->
                   <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                            <span class="hover-shape-bg hover_shape1"></span>
                            <span class="hover-shape-bg hover_shape2"></span>
                            <span class="hover-shape-bg hover_shape3"></span>
                  <!-- gredint border style end dont remove -->

               </div>
                    
            </a>
         </div>
         <div class="card_box_total">
            <a href="#">
               <div class="box custom-card bggredient">
                  <div class="box-body">
                     <div class="d-flex align-items-center">
                        <div class="me-3">
                           <span class="avatar avatar-md p-2 bg-secondary">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                 <path fill="currentColor" d="M5.5 7a3 3 0 1 1 6 0a3 3 0 0 1-6 0Zm3-5a5 5 0 1 0 0 10a5 5 0 0 0 0-10Zm7 0h-1v2h1a3 3 0 1 1 0 6h-1v2h1a5 5 0 0 0 0-10ZM0 19a5 5 0 0 1 5-5h7a5 5 0 0 1 5 5v2h-2v-2a3 3 0 0 0-3-3H5a3 3 0 0 0-3 3v2H0v-2Zm24 0a5 5 0 0 0-5-5h-1v2h1a3 3 0 0 1 3 3v2h2v-2Z"/>
                              </svg>
                           </span>
                        </div>
                        <div class="flex-fill">
                           <p class="mb-0 fs-10 op-7 text-muted fw-semibold">Associate Members</p>
                           <div class="d-flex align-items-center justify-content-between">
                              <h5 class="fw-semibold mb-0 lh-1 total_count__">$256</h5>
                              <!-- <div class="text-danger fw-semibold increase_count">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M17 9.17a1 1 0 0 0-1.41 0L12 12.71L8.46 9.17a1 1 0 0 0-1.41 0a1 1 0 0 0 0 1.42l4.24 4.24a1 1 0 0 0 1.42 0L17 10.59a1 1 0 0 0 0-1.42Z"/></svg>
                                 -1.05%
                                 </div> -->
                              <div class="text-success fw-semibold increase_count">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                       d="m17 13.41l-4.29-4.24a1 1 0 0 0-1.42 0l-4.24 4.24a1 1 0 0 0 0 1.42a1 1 0 0 0 1.41 0L12 11.29l3.54 3.54a1 1 0 0 0 .7.29a1 1 0 0 0 .71-.29a1 1 0 0 0 .05-1.42Z" />
                                 </svg>
                                 +0.21%
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                   <!-- gredint border style dont remove -->
                   <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                            <span class="hover-shape-bg hover_shape1"></span>
                            <span class="hover-shape-bg hover_shape2"></span>
                            <span class="hover-shape-bg hover_shape3"></span>
                  <!-- gredint border style end dont remove -->
               </div>
            </a>
         </div>
         <div class="card_box_total">
            <a href="#">
               <div class="box custom-card bggredient">
                  <div class="box-body">
                     <div class="d-flex align-items-center">
                        <div class="me-3">
                           <span class="avatar avatar-md p-2 bg-warning">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
                                 <path fill="currentColor" d="M24 30H8a2.002 2.002 0 0 1-2-2V4a2.002 2.002 0 0 1 2-2h16a2.002 2.002 0 0 1 2 2v16.618l-5-2.5l-5 2.5V4H8v24h16v-4h2v4a2.003 2.003 0 0 1-2 2Zm-3-14.118l3 1.5V4h-6v13.382Z"/>
                              </svg>
                           </span>
                        </div>
                        <div class="flex-fill">
                           <p class="mb-0 fs-10 op-7 text-muted fw-semibold">Sold Course</p>
                           <div class="d-flex align-items-center justify-content-between">
                              <h5 class="fw-semibold mb-0 lh-1 total_count__">2000 <span class="nth_mark">NTH</span>
                              </h5>
                              <!-- <div class="text-danger fw-semibold increase_count">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M17 9.17a1 1 0 0 0-1.41 0L12 12.71L8.46 9.17a1 1 0 0 0-1.41 0a1 1 0 0 0 0 1.42l4.24 4.24a1 1 0 0 0 1.42 0L17 10.59a1 1 0 0 0 0-1.42Z"/></svg>
                                 -1.05%
                                 </div> -->
                              <div class="text-success fw-semibold increase_count">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                       d="m17 13.41l-4.29-4.24a1 1 0 0 0-1.42 0l-4.24 4.24a1 1 0 0 0 0 1.42a1 1 0 0 0 1.41 0L12 11.29l3.54 3.54a1 1 0 0 0 .7.29a1 1 0 0 0 .71-.29a1 1 0 0 0 .05-1.42Z" />
                                 </svg>
                                 +0.21%
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                   <!-- gredint border style dont remove -->
                   <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                            <span class="hover-shape-bg hover_shape1"></span>
                            <span class="hover-shape-bg hover_shape2"></span>
                            <span class="hover-shape-bg hover_shape3"></span>
                  <!-- gredint border style end dont remove -->
               </div>
            </a>
         </div>
         <div class="card_box_total">
            <a href="#">
               <div class="box custom-card bggredient">
                  <div class="box-body">
                     <div class="d-flex align-items-center">
                        <div class="me-3">
                           <span class="avatar avatar-md p-2 bg-success">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                 <g fill="none" stroke="currentColor" stroke-width="1.5">
                                    <circle cx="10" cy="6" r="4"/>
                                    <path stroke-linecap="round" d="M21 10h-2m0 0h-2m2 0V8m0 2v2m-1.003 6c.003-.164.003-.331.003-.5c0-2.485-3.582-4.5-8-4.5s-8 2.015-8 4.5S2 22 10 22c2.231 0 3.84-.157 5-.437"/>
                                 </g>
                              </svg>
                           </span>
                        </div>
                        <div class="flex-fill">
                           <p class="mb-0 fs-10 op-7 text-muted fw-semibold">Copy Members</p>
                           <div class="d-flex align-items-center justify-content-between">
                              <h5 class="fw-semibold mb-0 lh-1 total_count__">20/5</h5>
                              <!-- <div class="text-danger fw-semibold increase_count">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M17 9.17a1 1 0 0 0-1.41 0L12 12.71L8.46 9.17a1 1 0 0 0-1.41 0a1 1 0 0 0 0 1.42l4.24 4.24a1 1 0 0 0 1.42 0L17 10.59a1 1 0 0 0 0-1.42Z"/></svg>
                                 -1.05%
                                 </div> -->
                              <div class="text-success fw-semibold increase_count">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                       d="m17 13.41l-4.29-4.24a1 1 0 0 0-1.42 0l-4.24 4.24a1 1 0 0 0 0 1.42a1 1 0 0 0 1.41 0L12 11.29l3.54 3.54a1 1 0 0 0 .7.29a1 1 0 0 0 .71-.29a1 1 0 0 0 .05-1.42Z" />
                                 </svg>
                                 +0.21%
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                   <!-- gredint border style dont remove -->
                   <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                            <span class="hover-shape-bg hover_shape1"></span>
                            <span class="hover-shape-bg hover_shape2"></span>
                            <span class="hover-shape-bg hover_shape3"></span>
                  <!-- gredint border style end dont remove -->
               </div>
            </a>
         </div>
         <div class="card_box_total">
            <a href="#">
               <div class="box custom-card bggredient">
                  <div class="box-body">
                     <div class="d-flex align-items-center">
                        <div class="me-3"> <span class="avatar avatar-md p-2 bg-pink">
                           <img src="assets/images/newimages/icons/nth-white.png" alt="" class="">
                           </span> 
                        </div>
                        <div class="flex-fill">
                           <p class="mb-0 fs-10 op-7 text-muted fw-semibold">NTH Earned</p>
                           <div class="d-flex align-items-center justify-content-between">
                              <h5 class="fw-semibold mb-0 lh-1 total_count__">100</h5>
                              <!-- <div class="text-danger fw-semibold increase_count">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M17 9.17a1 1 0 0 0-1.41 0L12 12.71L8.46 9.17a1 1 0 0 0-1.41 0a1 1 0 0 0 0 1.42l4.24 4.24a1 1 0 0 0 1.42 0L17 10.59a1 1 0 0 0 0-1.42Z"/></svg>
                                 -1.05%
                                 </div> -->
                              <div class="text-success fw-semibold increase_count">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                       d="m17 13.41l-4.29-4.24a1 1 0 0 0-1.42 0l-4.24 4.24a1 1 0 0 0 0 1.42a1 1 0 0 0 1.41 0L12 11.29l3.54 3.54a1 1 0 0 0 .7.29a1 1 0 0 0 .71-.29a1 1 0 0 0 .05-1.42Z" />
                                 </svg>
                                 +0.21%
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                   <!-- gredint border style dont remove -->
                   <span class="border-shadow shadow-1"></span>
                            <span class="border-shadow shadow-2"></span>
                            <span class="border-shadow shadow-3"></span>
                            <span class="border-shadow shadow-4"></span>
                            <span class="hover-shape-bg hover_shape1"></span>
                            <span class="hover-shape-bg hover_shape2"></span>
                            <span class="hover-shape-bg hover_shape3"></span>
                  <!-- gredint border style end dont remove -->
               </div>
            </a>
         </div>
         
      </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="customblck_card bggredient">
                  <div class="blcard_header">
                     <h3 class="blcard_header_title">History and Static of Copy Trading</h3>
                  </div>
                  <div class="blcard_body">
                  <div class="datatable-container custom_table_area">
                          
                  <div class="filters_table_">
                     <div class="filterbtn_tabletr">
                        <button type="button" class="ft_buttonshoover">Weekly Rank</button>
                        <button type="button" class="ft_buttonshoover">Monthly Rank</button>
                        <button type="button" class="ft_buttonshoover">Year Rank</button>
                     </div>
                  </div>
                          <table id="copytradingtable" class="display">
                             <thead>
                                <tr>
                                   <th class="sortable sorted-asc">
                                      <div class="arrow_box">
                                         <span>S.No.</span>
                                         <div class="arrow"><i class="fas fa-arrow-up active-arrow"></i> <i
                                            class="fas fa-arrow-down"></i></div>
                                      </div>
                                   </th>
                                   <th class="sortable sorted-asc">
                                      <div class="arrow_box">
                                         <span>User</span>
                                         <div class="arrow"><i class="fas fa-arrow-up active-arrow"></i> <i
                                            class="fas fa-arrow-down"></i></div>
                                      </div>
                                   </th>
                                   <th class="sortable">
                                      <div class="arrow_box">
                                         <span>Trader Name</span>
                                         <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                            class="fas fa-arrow-down"></i></div>
                                      </div>
                                   </th>
                                   <th class="sortable">
                                      <div class="arrow_box">
                                         <span>Earning </span>
                                         <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                            class="fas fa-arrow-down"></i></div>
                                      </div>
                                   </th>
                                   <th class="sortable">
                                      <div class="arrow_box">
                                         <span>Trade Amount</span>
                                         <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                            class="fas fa-arrow-down"></i></div>
                                      </div>
                                   </th>
                                   <th class="sortable">
                                      <div class="arrow_box">
                                         <span>Trade Profit </span>
                                         <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                            class="fas fa-arrow-down"></i></div>
                                      </div>
                                   </th>
                                 
                                </tr>
                             </thead>
                             <tbody>
                                <tr>
                                   <td>1</td>
                                   <td>
                                      <div class="d-flex align-items-center">
                                         <div class="flex-shrink-0 me-2">
                                            <img src="assets/images/newimages/avatar-1.jpg" alt=""
                                               class="avatar-xs rounded-circle">
                                         </div>
                                         <div class="flex-grow-1">Vihan Hudda</div>
                                      </div>
                                   </td>
                                   <td>Advanced Crypto</td>
                                   <td>$45</td>
                                   <td> $450</td>
                                   <td>$76.67</td>
                                  
                                </tr>
                                <tr>
                                   <td>2</td>
                                   <td>
                                      <div class="d-flex align-items-center">
                                         <div class="flex-shrink-0 me-2">
                                            <img src="assets/images/newimages/avatar-2.jpg" alt=""
                                               class="avatar-xs rounded-circle">
                                         </div>
                                         <div class="flex-grow-1">Jansh Brown </div>
                                      </div>
                                   </td>
                                   <td>Get Confident in Crypto</td>
                                   <td>$56</td>
                                   <td> $240</td>
                                   <td>$29.78</td>
                                  
                                </tr>
                                <tr>
                                   <td>3</td>
                                   <td>
                                      <div class="d-flex align-items-center">
                                         <div class="flex-shrink-0 me-2">
                                            <img src="assets/images/newimages/avatar-3.jpg" alt=""
                                               class="avatar-xs rounded-circle">
                                         </div>
                                         <div class="flex-grow-1">Prezy Mark </div>
                                      </div>
                                   </td>
                                   <td>Coding for Beginners</td>
                                   <td>$120.89</td>
                                   <td>$140</td>
                                   <td>$15.00</td>
                                  
                                </tr>
                                <tr>
                                   <td>4</td>
                                   <td>
                                      <div class="d-flex align-items-center">
                                         <div class="flex-shrink-0 me-2">
                                            <img src="assets/images/newimages/avatar-4.jpg" alt=""
                                               class="avatar-xs rounded-circle">
                                         </div>
                                         <div class="flex-grow-1">Vihan Hudda</div>
                                      </div>
                                   </td>
                                   <td>Shibuya Scramble Punks</td>
                                   <td>$200</td>
                                   <td> $59</td>
                                   <td>$22</td>
                                  
                                </tr>
                                
                             </tbody>
                          </table>
                          
                       </div>
                       <!-- table end -->
                     </div>
               </div>
            </div>
         </div>
      </div>
      <div class="hidden" id="Campaiens" role="tabpanel" aria-labelledby="Campaiens-tab">
         <div class="row">
            <div class="col-lg-12">
               <div class="customblck_card bggredient">
                  <div class="blcard_header">
                     <h3 class="blcard_header_title">Campaigns</h3>
                  </div>
                  <div class="blcard_body">
                     <form action="#" class="fl-form fl-style-2">
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="hidden" id="Products" role="tabpanel" aria-labelledby="Products-tab">
         <div class="row">
            <div class="col-lg-12">
               <div class="customblck_card bggredient">
                  <div class="blcard_header">
                     <h3 class="blcard_header_title">Products</h3>
                  </div>
                  <div class="blcard_body">
                     <div class="datatable-container productablearea">
                        <!-- test -->
                      
                          
                           <div class="addproductbtn" id="addproduct_button">
                              <a class="view-more black-shape" href="##" data-bs-toggle="offcanvas" data-bs-target="#addproductoffcanvas" aria-controls="offcanvasBottom">
                              <span class="btn-text"><i class="fa-solid fa-plus"></i> Add Product</span>
                              <i class="icon-arrow_right"></i>
                              <span class="hover-shape1"></span>
                              <span class="hover-shape2"></span>
                              <span class="hover-shape3"></span>
                              </a>
                           </div>
                           
                           
                  
                        <table id="product_datatable" class="display">
                           <thead>
                              <tr>
                                 <th class="sortable sorted-asc">
                                    <div class="arrow_box">
                                       <span>S.No.</span>
                                       <div class="arrow"><i class="fas fa-arrow-up active-arrow"></i> <i
                                          class="fas fa-arrow-down"></i></div>
                                    </div>
                                 </th>
                                 <th class="sortable sorted-asc">
                                    <div class="arrow_box">
                                       <span>Product Name</span>
                                       <div class="arrow"><i class="fas fa-arrow-up active-arrow"></i> <i
                                          class="fas fa-arrow-down"></i></div>
                                    </div>
                                 </th>
                                 <th class="sortable">
                                    <div class="arrow_box">
                                       <span>Product Category</span>
                                       <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                          class="fas fa-arrow-down"></i></div>
                                    </div>
                                 </th>
                                 <th class="sortable">
                                    <div class="arrow_box">
                                       <span>Product Image</span>
                                       <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                          class="fas fa-arrow-down"></i></div>
                                    </div>
                                 </th>
                                 <th class="sortable">
                                    <div class="arrow_box">
                                       <span>Date</span>
                                       <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                          class="fas fa-arrow-down"></i></div>
                                    </div>
                                 </th>
                                 <!-- <th class="actionbtnarea action_th_box sortable">
                                    <div class="arrow_box">
                                       <span>Action</span>
                                       <div class="arrow"><i class="fas fa-arrow-up"></i> <i
                                          class="fas fa-arrow-down"></i></div>
                                    </div>
                                 </th> -->
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>1</td>
                                 <td>
                                    Sport Wear 
                                 </td>
                                 <td>Sports kit</td>
                                 <td class="proimgtd">
                                    <div class="product_image">
                                       <img src="assets/images/newimages/products/pro-tshirt-set.png" alt="">
                                       <div class="hexagon-bg"></div>
                                    </div>
                                 </td>
                                 <td>09 Oct,2023</td>
                                 <!-- <td>
                                    <div class="action_btn d-flex">
                                       <div class="action_customdropdowncr">
                                          <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                          <div class="popup popup_dropdowncs">
                                             <div class="closepopa_header">
                                                <h2>Quick Action</h2>
                                                <span class="close-icon">&times;</span>
                                             </div>
                                             <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                <a href="##" data-bs-toggle="offcanvas" data-bs-target="#addproductoffcanvas" aria-controls="offcanvasBottom"><i class="fa-solid fa-pencil"></i>Edit</a>
                                                <a href="##"><i class="fa-regular fa-trash-can"></i> Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </td> -->
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td>Tshirt</td>
                                 <td>Tshirt</td>
                                 <td class="proimgtd">
                                    <div class="product_image">
                                       <img src="assets/images/newimages/products/pro-tshirt.png" alt="">
                                       <div class="hexagon-bg"></div>
                                    </div>
                                 </td>
                                 <td>04 Oct,2023</td>
                                 <!-- <td>
                                    <div class="action_btn d-flex">
                                       <div class="action_customdropdowncr">
                                          <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                          <div class="popup popup_dropdowncs">
                                             <div class="closepopa_header">
                                                <h2>Quick Action</h2>
                                                <span class="close-icon">&times;</span>
                                             </div>
                                             <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                <a href="##" data-bs-toggle="offcanvas" data-bs-target="#addproductoffcanvas" aria-controls="offcanvasBottom"><i class="fa-solid fa-pencil"></i>Edit</a>
                                                <a href="##"><i class="fa-regular fa-trash-can"></i> Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </td> -->
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td>Bag</td>
                                 <td>Gym Kit</td>
                                 <td class="proimgtd">
                                    <div class="product_image">
                                       <img src="assets/images/newimages/products/prokit.png" alt="">
                                       <div class="hexagon-bg"></div>
                                    </div>
                                 </td>
                                 <td>28 Oct,2023</td>
                                 <!-- <td>
                                    <div class="action_btn d-flex">
                                       <div class="action_customdropdowncr">
                                          <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                          <div class="popup popup_dropdowncs">
                                             <div class="closepopa_header">
                                                <h2>Quick Action</h2>
                                                <span class="close-icon">&times;</span>
                                             </div>
                                             <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                <a href="##" data-bs-toggle="offcanvas" data-bs-target="#addproductoffcanvas" aria-controls="offcanvasBottom"><i class="fa-solid fa-pencil"></i>Edit</a>
                                                <a href="##"><i class="fa-regular fa-trash-can"></i> Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </td> -->
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td>Football</td>
                                 <td>Sport</td>
                                 <td class="proimgtd">
                                    <div class="product_image">
                                       <img src="assets/images/newimages/products/pro-football.png" alt="">
                                       <div class="hexagon-bg"></div>
                                    </div>
                                 </td>
                                 <td>1 Nov,2023</td>
                                 <!-- <td>
                                    <div class="action_btn d-flex">
                                       <div class="action_customdropdowncr">
                                          <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                          <div class="popup popup_dropdowncs">
                                             <div class="closepopa_header">
                                                <h2>Quick Action</h2>
                                                <span class="close-icon">&times;</span>
                                             </div>
                                             <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                <a href="##" data-bs-toggle="offcanvas" data-bs-target="#addproductoffcanvas" aria-controls="offcanvasBottom"><i class="fa-solid fa-pencil"></i>Edit</a>
                                                <a href="##"><i class="fa-regular fa-trash-can"></i> Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </td> -->
                              </tr>
                              <tr>
                                 <td>5</td>
                                 <td>Modern Cap</td>
                                 <td>Cap</td>
                                 <td class="proimgtd">
                                    <div class="product_image">
                                       <img src="assets/images/newimages/products/pro-cap.png" alt="">
                                       <div class="hexagon-bg"></div>
                                    </div>
                                 </td>
                                 <td>2 Nov,2023</td>
                                 <!-- <td>
                                    <div class="action_btn d-flex">
                                       <div class="action_customdropdowncr">
                                          <button class="open-popup-button"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                          <div class="popup popup_dropdowncs">
                                             <div class="closepopa_header">
                                                <h2>Quick Action</h2>
                                                <span class="close-icon">&times;</span>
                                             </div>
                                             <div class="dropdown_content_pop" id="dropdown_content_pop">
                                                <a href="##" data-bs-toggle="offcanvas" data-bs-target="#addproductoffcanvas" aria-controls="offcanvasBottom"><i class="fa-solid fa-pencil"></i>Edit</a>
                                                <a href="##"><i class="fa-regular fa-trash-can"></i> Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </td> -->
                              </tr>
                           </tbody>
                        </table>
                       
                     </div>
                     <!-- table end -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- End Content -->
</div>
<!--end container-->
<?php include("footer.php") ?>
<!-- add product popup -->
<div class="offcanvas ofcanvas_common offcanvas-bottom" tabindex="-1" id="addproductoffcanvas" aria-labelledby="offcanvasBottomLabel">
   <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-regular fa-circle-down"></i> Close</button>
   <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasBottomLabel">Create Product</h5>
      <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
   </div>
   <div class="offcanvas-body small">
      <div class="offcanvasformcustom">
         <form action="#" >
            <div class="row">
               <div class="col-lg-6">
                  <div class="form-group">
                     <label for="firstname">Product Name</label>
                     <input type="text" name="firstname" id="firstname" class="form-control required">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="col-lg-12 mb-4">
                  <div id="off-canvas-menu" class="off-canvas-menu">
                  <div class="select2-container">
            <select class="select2-dropdown" data-placeholder="Select Category">
            <option></option>
                <option value="option1"> 	Sports kit</option>
                <option value="option2"> 	Tshirt</option>
                <option value="option3">Gym Kit</option>
                <option value="option1"> Sport</option>
                <option value="option2"> 	Cap</option>
            </select>
        </div>
</div>

                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="createnew_category">
                     <div class="newcategory_btn"><a href="javascript:void(0);"><i class="fa-solid fa-plus"></i> Add New Category</a></div>
                  </div>
               </div>

               <div class="col-lg-12">
                  <div class="newcategory_input">
                  <div class="form-group">
                     <label for="catname">Category Name</label>
                     <input type="text" name="catname" id="catname" class="form-control required">
                  </div>
                  </div>
               </div>

               <div class="col-lg-12">
                  <div class="product-picture-upload">
                  <div class="dropify-wrapper__">
                  <label for="custom-file-input">Upload Product Image</label>
   <input type="file" class="dropify" data-allowed-file-extensions="jpg jpeg png gif">
   <div class="preview">
       <!-- You can add a message or custom content here -->
   </div>
</div>


                  </div>
               </div>
            </div>
            <div class="update_action canvasform_fullbtn">
               <a href="#" class="linebtn_custom">Create ID
               <span class="hover-shape1"></span>
               <span class="hover-shape2"></span>
               <span class="hover-shape3"></span>
               </a>
            </div>
         </form>
      </div>
   </div>
   <div class="offcanvas-footer">
      <div class="frmbtn_areasubmit">
         <button type="submit" class="btn btn-secondary theme_btn theme_btn_secondary" data-bs-dismiss="offcanvas">Close</button>
      </div>
   </div>
</div>
<!-- add product popup end-->


<!-- off canvas select working js -->
<script>
 $(document).ready(function() {
    $('.select2-dropdown').select2();
});
</script>
<!-- off canvas select working js end -->


<script>
$(document).ready(function(){
   $(".newcategory_input").hide();

   $(".createnew_category").click(function(){
      $(".newcategory_input").toggle();
   })
})
   
</script>





<!-- course approve alert -->
<script>
   const approveButtons = document.querySelectorAll('.approve-button');
   const courseList = document.querySelector('.course-list');
   
   approveButtons.forEach((button, index) => {
     button.addEventListener('click', () => {
       const modalId = `modal-${index}`;
   
       const swalInstance = Swal.fire({
         title: 'Approve Course',
         text: 'Are you sure you want to approve this course?',
         icon: 'warning',
         showCancelButton: true,
         confirmButtonText: 'Approve',
         cancelButtonText: 'Cancel',
         customClass: {
            container: 'course-approve-alert', // Add your custom class here
           confirmButton: 'linebtn_custom', // Add your custom class here
           cancelButton: 'custom-cancel-button-class', // Add your custom class here
         },
         didOpen: () => {
           // Add your custom class to the dialog
           const swalPopup = document.querySelector(`.${modalId}`);
           swalPopup.classList.add('custom-popup-class'); // Add your custom class here
           
           // Add your custom class to the success icon
           const successIcon = swalPopup.querySelector('.swal2-icon-success');
           successIcon.classList.add('custom-success-icon-class'); // Add your custom class here
         },
       }).then((result) => {
         if (result.isConfirmed) {
           // Admin approved the course
           // You can add code here to update the course status or perform other actions
           Swal.fire({
             title: 'Course Approved',
             text: 'The course has been approved.',
             icon: 'success',
             customClass: {
               container: 'custom-courseapproved', // Add your custom class for the "Course Approved" modal here
             },
           });
   
           // You can also update the course list or remove the course element from the DOM
           courseList.removeChild(button.parentElement);
         }
       });
     });
   });
   
</script>
<!-- approve alert end -->


<!-- reject course alert -->
<script>
   // Define the class for handling course rejection
   class CourseRejectHandler {
     constructor() {
       this.setupEventListeners();
     }
   
     setupEventListeners() {
       const rejectButtons = document.querySelectorAll('.rejectCourseButton');
   
       rejectButtons.forEach((button) => {
         button.addEventListener('click', () => {
           Swal.fire({
             title: 'Reject Course',
             text: 'Are you sure you want to reject this course?',
             icon: 'warning',
             showCancelButton: true,
             confirmButtonText: 'Yes, reject it',
             cancelButtonText: 'No, cancel',
             customClass: {
               container: 'custom-rejectalert' // Custom class for the main dialog
             }
           }).then((result) => {
             if (result.isConfirmed) {
               // User confirmed to reject the course
               // You can add additional logic here to handle the rejection, such as sending a request to your server.
   
               // Example: Replace this with your logic
               Swal.fire({
                 title: 'Course Rejected',
                 text: 'The course has been rejected.',
                 icon: 'success',
                 customClass: {
                   container: 'courserejected_alet2', // Custom class for the main dialog
                   popup: 'custom-sweetalert-popup' // Custom class for the success message
                 }
               });
             }
           });
         });
       });
     }
   }
   
   // Instantiate the class once
   new CourseRejectHandler();
</script>
<!-- end -->



<script>
  // Add event listeners for all elements with the class "approve-button-product"
  const approveButtons = document.querySelectorAll(".approve-button-product");
  approveButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const productName = button.getAttribute("data-product-name");
      showApprovalDialog(productName);
    });
  });

  // Common function to show SweetAlert with custom button text
  function showApprovalDialog(productName) {
    Swal.fire({
      title: `Are you sure you want to approve ${productName}?`,
      text: "This action cannot be undone.",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: `Approve ${productName}`,
      cancelButtonText: "Cancel",
    });
  }
</script>


<script>
  // Use noConflict to prevent naming conflicts
  const mySwal = Swal.noConflict();

  // Now, use mySwal instead of Swal in your code
  mySwal.fire({
    // SweetAlert configuration
  });
</script>



<!-- reject course alert -->
<script>
   // Define the class for handling course rejection
   class CourseRejectHandler {
     constructor() {
       this.setupEventListeners();
     }
   
     setupEventListeners() {
       const rejectButtons = document.querySelectorAll('.rejectCourseButton');
   
       rejectButtons.forEach((button) => {
         button.addEventListener('click', () => {
           Swal.fire({
             title: 'Reject Course',
             text: 'Are you sure you want to reject this course?',
             icon: 'warning',
             showCancelButton: true,
             confirmButtonText: 'Yes, reject it',
             cancelButtonText: 'No, cancel',
             customClass: {
               container: 'custom-rejectalert' // Custom class for the main dialog
             }
           }).then((result) => {
             if (result.isConfirmed) {
               // User confirmed to reject the course
               // You can add additional logic here to handle the rejection, such as sending a request to your server.
   
               // Example: Replace this with your logic
               Swal.fire({
                 title: 'Course Rejected',
                 text: 'The course has been rejected.',
                 icon: 'success',
                 customClass: {
                   container: 'courserejected_alet2', // Custom class for the main dialog
                   popup: 'custom-sweetalert-popup' // Custom class for the success message
                 }
               });
             }
           });
         });
       });
     }
   }
   
   // Instantiate the class once
   new CourseRejectHandler();
</script>
<!-- end -->

<!-- -------------------- data table js code for multiple table ------------------------ -->
<!-- custom data table fixed sear and pagination -->


<!-- market place data table -->
<script>
   $('#datatable_customr').DataTable({
      scrollX: true,
     });
</script>
<!-- end custom data table -->


<!-- marketplace products datatable -->
<script>
   $('#product_datatable').DataTable({ 
      scrollX: true,
   });
</script>



<!-- general pending approval data table js -->
<script>
    // Function to open a tab
    function openTab(tabName) {
        // Hide all tabs and tab buttons
        const tabs = document.getElementsByClassName('tab-content');
        const tabButtons = document.getElementsByClassName('tab-button');
        for (let i = 0; i < tabs.length; i++) {
            tabs[i].style.display = 'none';
            tabButtons[i].classList.remove('active-tab-button');
        }

        // Show the selected tab, set its button as active, and animate the active line
        const activeButton = document.querySelector('[onclick="openTab(\'' + tabName + '\')"]');
        const activeLine = document.getElementById('active-line');
        activeLine.style.transform = `translateX(${activeButton.offsetLeft}px) scaleX(1)`;
        activeButton.classList.add('active-tab-button');
        document.getElementById(tabName).style.display = 'block';
    }

    // Open the first tab by default
    openTab('tab1');
</script>

<!-- marketplace products datatable -->
<script>
   $('#pending_course_table').DataTable({ 
      scrollX: true,
   });
</script>

<!-- marketplace products datatable -->
<script>
   $('#pending-product-table').DataTable({ 
      scrollX: true,
   });
</script>

<!-- marketplace products datatable -->
<script>
   $('#pending-other-table').DataTable({ 
      scrollX: true,
   });
</script>
<!-- end -->

<!-- pending products datatable -->
<script>
   $('#pending-product_datatable').DataTable({ 
      scrollX: true,
   });
</script>
<!-- end -->

<!-- finance copy trading table -->
<script>
   $('#copytradingtable').DataTable({ 
      scrollX: true,
   });
</script>
<!-- end -->
  




<!-- dashcards slick slider -->
<script>
   $(document).ready(function(){
   $('.dashcards').slick({
   slidesToShow: 5,
   slidesToScroll: 1,
   autoplay:true,
   autoplaySpeed: 2000,
   arrows:false,
   responsive: [
   {
     breakpoint: 768,
     settings: {
       arrows: false,
       centerMode: true,
       centerPadding: '40px',
       slidesToShow: 3
     }
   },
   {
     breakpoint: 480,
     settings: {
       arrows: false,
       centerMode: true,
       centerPadding: '40px',
       slidesToShow: 1
     }
   }
   ]
   });
   });
</script>
<!-- end -->


<!-- floating input js start -->
<script src="assets/js/common_scripts.min.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/survey_func.js"></script>
