<?php include("header.php") ?>

<!-- Add FontAwesome stylesheet (you need an internet connection for this) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


<div class="container-fluid relative px-3">
   <div class="layout-specing">
      <div class="grid md:grid-cols-12 gap-6 ">
         <div class="lg:col-span-12 md:col-span-12 ">
            <div class="grid grid-cols-1 ">
               <ul class="finance__area md:w-fit w-full  flex-wrap justify-center  p-3 bg-white  shadow dark:shadow-gray-800 rounded-md usertabdash" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out custom-btn btn-11" id="Finance-tab" data-tabs-target="#Finance" type="button" role="tab" aria-controls="Finance" aria-selected="true">
                        Pay Way 
                        <div class="dot"></div>
                     </button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2 rounded-md w-full transition-all duration-500 ease-in-out" id="Courses-tab" data-tabs-target="#Courses" type="button" role="tab" aria-controls="Courses" aria-selected="false">Marketplace</button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="Portfolio-tab" data-tabs-target="#Portfolio" type="button" role="tab" aria-controls="Portfolio" aria-selected="false">My Services</button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="ID-tab" data-tabs-target="#ID" type="button" role="tab" aria-controls="ID" aria-selected="false">Smart Trader</button>
                  </li>
                  <li role="presentation" class="md:inline-block block md:w-fit w-full">
                     <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="History-tab" data-tabs-target="#History" type="button" role="tab" aria-controls="History" aria-selected="false">Settings</button>
                  </li>
               </ul>
               <div id="StarterContent" class="mt-6">
                  <div class="" id="Finance" role="tabpanel" aria-labelledby="Finance-tab">
                    
                  <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:shadow-gray-800 dark:hover:shadow-gray-800 overflow-hidden ease-in-out duration-500 w-full ">
                        <div class="p-4 border-b border-gray-100 dark:border-gray-800">
                           <h6 class="text-lg font-semibold">Buy NTH Token</h6>
                        </div>

                        <div class="exchange-form row ">
       
       <div class="col-lg-6">
       <div class="input-group currencyareawithinp" >
            <!-- Change input type to "text" -->
            <input type="text" id="amount" placeholder="Enter amount" class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-full outline-none border border-gray-200 focus:border-violet-600 dark:border-gray-800 dark:focus:border-violet-600 focus:ring-0 mt-2">
            <select id="currency__select">
                <option value="usd">USD</option>
                <option value="aud">AUD</option>
                <option value="brl">BRL</option>
                <!-- Add more currencies as needed -->
            </select>
           
        </div>
       </div>

       <div class="col-lg-auto">
        <div class="exchangesign"> <h1><i class="fas fa-exchange-alt"></i></h1></div>
       </div>
         <div class="col-lg-5">
         <input type="text" id="result" placeholder="Converted Amount" readonly class="form-input w-full text-[15px] py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-full outline-none border border-gray-200 focus:border-violet-600 dark:border-gray-800 dark:focus:border-violet-600 focus:ring-0 mt-2">

         </div> 

         <div class="col-lg-12">
            <div class="formsubmit_btnnth">
            <input type="submit" id="submit" name="send" class="btn bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-full mt-5" value="Pay Now">
            </div>
         </div>
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
