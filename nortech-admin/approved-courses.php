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
               <li class="inline breadcrumb-item   duration-500 text-slate-400 dark:text-white/60 hover:text-slate-900 dark:hover:text-white"><a href="javascript:void(0)">Home</a></li>
               <li class="inline breadcrumb-item   duration-500 text-slate-900 dark:text-white" aria-current="page">Manage Builder</li>
            </ul>
         </div>
         <!-- <div>
            <a href="upload-work.html" class="btn btn-icon btn-sm rounded-full bg-gray-800/5 hover:bg-gray-800/10 dark:bg-gray-800 dark:hover:bg-gray-600 border border-gray-800/5 dark:border-gray-800 text-slate-900 dark:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus h-4 w-4"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>
            </div> -->
      </div>

      <div class="row">
               <div class="col-lg-12">
                  <div class="customblck_card bggredient">
                     <div class="blcard_header">
                        <h3 class="blcard_header_title">All Approved Courses</h3>
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
                                    <td><span class="badge bg-success-transparent">Approved</span></td>

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
                                    <td><span class="badge bg-success-transparent">Approved</span></td>

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
                                    <td><span class="badge bg-success-transparent">Approved</span></td>

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
                                    <td><span class="badge bg-success-transparent">Approved</span></td>

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
<!--end container-->
<?php include("footer.php") ?>

<!-- market place data table -->
<script>
   $('#datatable_customr').DataTable({
      scrollX: true,
     });
</script>
<!-- end custom data table -->


