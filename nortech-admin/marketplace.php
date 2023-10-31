<?php include("header.php") ?>

<style>
    /* data table customoization */

  .tabltoparea{
    display: flex;
  justify-content: space-between;
  align-items: center;
  }
  .tabltoparea #export-button-container button{
    margin-right: 5px;
  }
  div.dataTables_wrapper {
    overflow-x: scroll;
  }
  .entries_pagination{
    display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 20px;
  }
</style>


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
            <div class="blcard_header">
               <h3 class="blcard_header_title">Pending Approval</h3>
            </div>
            <div class="blcard_body">
               <form action="#" class="fl-form fl-style-2">
                  
               </form>
            </div>
         </div>
      </div>
               
      <div class="col-lg-4">
         <div class="customblck_card bggredient">
            <div class="blcard_header">
               <h3 class="blcard_header_title">History Approval</h3>
            </div>
            <div class="blcard_body">
               <form action="#" class="fl-form fl-style-2">
                  
               </form>
            </div>
         </div>
      </div>

      <div class="col-lg-4">
         <div class="customblck_card bggredient">
            <div class="blcard_header">
               <h3 class="blcard_header_title">Volume Approval</h3>
            </div>
            <div class="blcard_body">
               <form action="#" class="fl-form fl-style-2">
                  
               </form>
            </div>
         </div>
      </div>

      <div class="col-lg-4">
         <div class="customblck_card bggredient">
            <div class="blcard_header">
               <h3 class="blcard_header_title">History Copy Trade</h3>
            </div>
            <div class="blcard_body">
               <form action="#" class="fl-form fl-style-2">
                  
               </form>
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
                  <!-- test -->
   <div class="tabltoparea">
      <div id="export-button-container"></div>
      <div id="search-button-container"></div>
   </div>
                           <table id="export-button" class="display">
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
                                          <span>Course Description</span>
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
                                    <td>Shibuya Scramble Punks</td>
                                    <td>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit.</td>
                                    <td>17 Oct,2023</td>
                                    <td> <span class="fw-semibold text-primary">07</span></td>
                                    <td>Free</td>
                                  
                                    <td>
                                       <div class="action_btn d-flex">
                                          <a href="#" class="notify_btn">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell h-4 w-4">
                                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                             </svg>
                                             View Details
                                          </a>
                                       </div>
                                    </td>
                                 </tr>
                                
                              </tbody>
                           </table>
                           <div class="entries_pagination">
      <div id="entries-container"></div>
      <div id="pagination-container"></div>
   </div>
                        </div>
            </div>
         </div>
      </div>
            </div>
            
         </div>
      </div>
      <div class="hidden" id="Finance" role="tabpanel" aria-labelledby="Finance-tab">
        <div class="row">
              
            <div class="col-lg-12">
         <div class="customblck_card bggredient">
            <div class="blcard_header">
               <h3 class="blcard_header_title">History and Static of Copy Trading</h3>
            </div>
            <div class="blcard_body">
               <form action="#" class="fl-form fl-style-2">
                  
               </form>
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
                 <form action="#" class="fl-form fl-style-2">
                    
                 </form>
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

<script>
    $(document).ready(function () {
   
  
    // Move export buttons to the export-button-container div
    $('.buttons-excel, .buttons-pdf, .buttons-csv , .buttons-copy ,  .buttons-print').appendTo('#export-button-container');
  
    // Move search input to the search-button-container div
    $('.dataTables_filter').appendTo('#search-button-container');
  
     // Move entries control to the entries-container div
     $('.dataTables_info').appendTo('#entries-container');
  
  // Move pagination control to the pagination-container div
  $('.dataTables_paginate').appendTo('#pagination-container');
  });
  </script>

  <script>
     // Initialize DataTable for the second table
     $('#export-button').DataTable({
  
       });
  </script>


