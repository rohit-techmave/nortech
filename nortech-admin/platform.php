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
              Finance
               <div class="dot"></div>
            </button>
         </li>
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2 rounded-md w-full transition-all duration-500 ease-in-out" id="Courses-tab"
               data-tabs-target="#Courses" type="button" role="tab" aria-controls="Courses"
               aria-selected="false">Education</button>
         </li>
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2  rounded-md w-full transition-all duration-500 ease-in-out" id="Portfolio-tab"
               data-tabs-target="#Portfolio" type="button" role="tab" aria-controls="Portfolio" aria-selected="false">My
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
      <div id="StarterContent" class="mt-6">
         <div class="" id="Finance" role="tabpanel" aria-labelledby="Finance-tab">
             
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
