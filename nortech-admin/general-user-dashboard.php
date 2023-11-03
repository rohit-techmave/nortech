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
               <li class="inline breadcrumb-item   duration-500 text-slate-400 dark:text-white/60 hover:text-slate-900 dark:hover:text-white"><a href="javascript:void(0)">User</a></li>
               <li class="inline breadcrumb-item   duration-500 text-slate-900 dark:text-white" aria-current="page">General User Dashboard</li>
            </ul>
         </div>
         <!-- <div>
            <a href="upload-work.html" class="btn btn-icon btn-sm rounded-full bg-gray-800/5 hover:bg-gray-800/10 dark:bg-gray-800 dark:hover:bg-gray-600 border border-gray-800/5 dark:border-gray-800 text-slate-900 dark:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus h-4 w-4"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>
            </div> -->
      </div>

    
   
      

      <div class="box bggredient ">
         <div class="box-header">
            <h3>All General User</h3>
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
                              <span>NTH Token</span>
                              <div class="arrow"><i class="fas fa-arrow-up"></i> <i class="fas fa-arrow-down"></i></div>
                           </div>
                        </th>
                        <th class="sortable">
                           <div class="arrow_box">
                              <span>Course</span>
                              <div class="arrow"><i class="fas fa-arrow-up"></i> <i class="fas fa-arrow-down"></i></div>
                           </div>
                        </th>
                        <th class="sortable">
                           <div class="arrow_box">
                              <span>Status</span>
                              <div class="arrow"><i class="fas fa-arrow-up"></i> <i class="fas fa-arrow-down"></i></div>
                           </div>
                        </th>
                        <th class="actionbtnarea sortable">
                           <div class="arrow_box">
                              <span>Action</span>
                              <div class="arrow"><i class="fas fa-arrow-up"></i> <i class="fas fa-arrow-down"></i></div>
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
                              <div class="flex-grow-1">
                                 Vihan Hudda
                                 <a href="#" class="email_user">example@gmail.com</a>
                              </div>

                           </div>
                        </td>
                    
                        <td>2000 NTH</td>

                        <td>
                          <span class="fw-semibold text-primary">1</span>
                        </td>
                        <td>
                        <span class="badge bg-danger-transparent">Inactive</span>
                        </td>
                        <td>
                           <div class="btn-list">
                              <a aria-label="anchor" href="javascript:void(0);"  class="btn btn-sm btn-icon btn-primary-light">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"><path fill="currentColor" d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z"/><path fill="currentColor" d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z"/></svg>
                              </a> 
                               <!-- <a aria-label="anchor" href="javascript:void(0);"  class="btn btn-sm btn-icon btn-warning-light">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 1024 1024"><path fill="currentColor" d="M832 512a32 32 0 1 1 64 0v352a32 32 0 0 1-32 32H160a32 32 0 0 1-32-32V160a32 32 0 0 1 32-32h352a32 32 0 0 1 0 64H192v640h640V512z"/><path fill="currentColor" d="m469.952 554.24l52.8-7.552L847.104 222.4a32 32 0 1 0-45.248-45.248L477.44 501.44l-7.552 52.8zm422.4-422.4a96 96 0 0 1 0 135.808l-331.84 331.84a32 32 0 0 1-18.112 9.088L436.8 623.68a32 32 0 0 1-36.224-36.224l15.104-105.6a32 32 0 0 1 9.024-18.112l331.904-331.84a96 96 0 0 1 135.744 0z"/></svg>
                              </a> 
                               <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7ZM17 6H7v13h10V6ZM9 17h2V8H9v9Zm4 0h2V8h-2v9ZM7 6v13V6Z"/></svg>
                              </a> -->
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
                              <a href="#" class="email_user">example@gmail.com</a>
                              </div>
                            
                           </div>
                        </td>
                   
                        <td>2400 NTH</td>
                        <td>
                        <span class="fw-semibold text-primary">5</span>
                        </td>
                        <td>
                        <span class="badge bg-success-transparent">Active</span>
                        </td>
                        <td>
                           <div class="btn-list">
                              <a aria-label="anchor" href="javascript:void(0);"  class="btn btn-sm btn-icon btn-primary-light">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"><path fill="currentColor" d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z"/><path fill="currentColor" d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z"/></svg>
                              </a> 
                               <!-- <a aria-label="anchor" href="javascript:void(0);"  class="btn btn-sm btn-icon btn-warning-light">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 1024 1024"><path fill="currentColor" d="M832 512a32 32 0 1 1 64 0v352a32 32 0 0 1-32 32H160a32 32 0 0 1-32-32V160a32 32 0 0 1 32-32h352a32 32 0 0 1 0 64H192v640h640V512z"/><path fill="currentColor" d="m469.952 554.24l52.8-7.552L847.104 222.4a32 32 0 1 0-45.248-45.248L477.44 501.44l-7.552 52.8zm422.4-422.4a96 96 0 0 1 0 135.808l-331.84 331.84a32 32 0 0 1-18.112 9.088L436.8 623.68a32 32 0 0 1-36.224-36.224l15.104-105.6a32 32 0 0 1 9.024-18.112l331.904-331.84a96 96 0 0 1 135.744 0z"/></svg>
                              </a> 
                               <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7ZM17 6H7v13h10V6ZM9 17h2V8H9v9Zm4 0h2V8h-2v9ZM7 6v13V6Z"/></svg>
                              </a> -->
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
                              <div class="flex-grow-1">
                                 Ayaan Bowen
                                 <a href="#" class="email_user">example@gmail.com</a>
                              </div>
                           </div>
                        </td>
                      
                        <td>2600 NTH</td>
                        <td>
                        <span class="fw-semibold text-primary">3</span>
                        </td>
                        <td>
                        <span class="badge bg-success-transparent">Active</span>
                        </td>
                        <td>
                           <div class="btn-list">
                              <a aria-label="anchor" href="javascript:void(0);"  class="btn btn-sm btn-icon btn-primary-light">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"><path fill="currentColor" d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z"/><path fill="currentColor" d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z"/></svg>
                              </a> 
                               <!-- <a aria-label="anchor" href="javascript:void(0);"  class="btn btn-sm btn-icon btn-warning-light">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 1024 1024"><path fill="currentColor" d="M832 512a32 32 0 1 1 64 0v352a32 32 0 0 1-32 32H160a32 32 0 0 1-32-32V160a32 32 0 0 1 32-32h352a32 32 0 0 1 0 64H192v640h640V512z"/><path fill="currentColor" d="m469.952 554.24l52.8-7.552L847.104 222.4a32 32 0 1 0-45.248-45.248L477.44 501.44l-7.552 52.8zm422.4-422.4a96 96 0 0 1 0 135.808l-331.84 331.84a32 32 0 0 1-18.112 9.088L436.8 623.68a32 32 0 0 1-36.224-36.224l15.104-105.6a32 32 0 0 1 9.024-18.112l331.904-331.84a96 96 0 0 1 135.744 0z"/></svg>
                              </a> 
                               <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7ZM17 6H7v13h10V6ZM9 17h2V8H9v9Zm4 0h2V8h-2v9ZM7 6v13V6Z"/></svg>
                              </a> -->
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
                              <a href="#" class="email_user">example@gmail.com</a>
                              </div>
                          
                           </div>
                        </td>
                   
                        <td>2500 NTH</td>
                        <td>
                          <span class="fw-semibold text-primary">4</span>
                        </td>
                        <td>
                        <span class="badge bg-danger-transparent">Inactive</span>
                        </td>
                  
                        <td>
                           <div class="btn-list">
                              <a aria-label="anchor" href="javascript:void(0);"  class="btn btn-sm btn-icon btn-primary-light">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"><path fill="currentColor" d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z"/><path fill="currentColor" d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z"/></svg>
                              </a> 
                               <!-- <a aria-label="anchor" href="javascript:void(0);"  class="btn btn-sm btn-icon btn-warning-light">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 1024 1024"><path fill="currentColor" d="M832 512a32 32 0 1 1 64 0v352a32 32 0 0 1-32 32H160a32 32 0 0 1-32-32V160a32 32 0 0 1 32-32h352a32 32 0 0 1 0 64H192v640h640V512z"/><path fill="currentColor" d="m469.952 554.24l52.8-7.552L847.104 222.4a32 32 0 1 0-45.248-45.248L477.44 501.44l-7.552 52.8zm422.4-422.4a96 96 0 0 1 0 135.808l-331.84 331.84a32 32 0 0 1-18.112 9.088L436.8 623.68a32 32 0 0 1-36.224-36.224l15.104-105.6a32 32 0 0 1 9.024-18.112l331.904-331.84a96 96 0 0 1 135.744 0z"/></svg>
                              </a> 
                               <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7ZM17 6H7v13h10V6ZM9 17h2V8H9v9Zm4 0h2V8h-2v9ZM7 6v13V6Z"/></svg>
                              </a> -->
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
                              <div class="flex-grow-1">
                                 Alex Smith
                                 <a href="#" class="email_user">example@gmail.com</a>
                              </div>
                           </div>
                        </td>
                 
                        <td>3000 NTH</td>
                        <td>
                          <span class="fw-semibold text-primary">2</span>
                        </td>
                        <td>
                        <span class="badge bg-success-transparent">Active</span>
                        </td>
                       
                        <td>
                           <div class="btn-list">
                              <a aria-label="anchor" href="javascript:void(0);"  class="btn btn-sm btn-icon btn-primary-light">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"><path fill="currentColor" d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z"/><path fill="currentColor" d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z"/></svg>
                              </a> 
                               <!-- <a aria-label="anchor" href="javascript:void(0);"  class="btn btn-sm btn-icon btn-warning-light">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 1024 1024"><path fill="currentColor" d="M832 512a32 32 0 1 1 64 0v352a32 32 0 0 1-32 32H160a32 32 0 0 1-32-32V160a32 32 0 0 1 32-32h352a32 32 0 0 1 0 64H192v640h640V512z"/><path fill="currentColor" d="m469.952 554.24l52.8-7.552L847.104 222.4a32 32 0 1 0-45.248-45.248L477.44 501.44l-7.552 52.8zm422.4-422.4a96 96 0 0 1 0 135.808l-331.84 331.84a32 32 0 0 1-18.112 9.088L436.8 623.68a32 32 0 0 1-36.224-36.224l15.104-105.6a32 32 0 0 1 9.024-18.112l331.904-331.84a96 96 0 0 1 135.744 0z"/></svg>
                              </a> 
                               <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7ZM17 6H7v13h10V6ZM9 17h2V8H9v9Zm4 0h2V8h-2v9ZM7 6v13V6Z"/></svg>
                              </a> -->
                           </div>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>


      

      


      <!-- End Content -->
   </div>
</div>
<!--end container-->

<?php include("footer.php") ?>






