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
               <li class="inline breadcrumb-item   duration-500 text-slate-900 dark:text-white"><a href="marketplace.php">Marketplace</a></li>
               <li class="inline breadcrumb-item   duration-500 text-slate-900 dark:text-white" aria-current="page">Approved Products</li>
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
                     <h3 class="blcard_header_title">All Approved Products</h3>
                  </div>
                  <div class="blcard_body">
                     <div class="datatable-container productablearea">
                        <!-- test -->
                      
                        
                  
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
                                       <span>Status</span>
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
                                 <td><span class="badge bg-success-transparent">Approved</span></td>
                                 <td>09 Oct,2023</td>
                                
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
                                 <td><span class="badge bg-success-transparent">Approved</span></td>
                                 <td>04 Oct,2023</td>
                                
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
                                 <td><span class="badge bg-success-transparent">Approved</span></td>
                                 <td>28 Oct,2023</td>
                            
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
                                 <td><span class="badge bg-success-transparent">Approved</span></td>
                                 <td>1 Nov,2023</td>
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
                                 <td><span class="badge bg-success-transparent">Approved</span></td>
                                 <td>2 Nov,2023</td>
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

<!-- marketplace products datatable -->
<script>
   $('#product_datatable').DataTable({ 
      scrollX: true,
   });
</script>

