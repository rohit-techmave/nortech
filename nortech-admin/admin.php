<?php include("header.php") ?>
<div class="container-fluid relative px-3">
   <div class="layout-specing">
      <!-- <div class="md:flex justify-between items-center">
         <div>
            <h5 class="font-semibold text-2xl mb-1">Manage Builder</h5>
         </div>
         </div> -->
      <div class="row">
         <div class="col-lg-3 colinner_boxheight">
            <div class="customblck_card bggredient ">
               <div class="blcard_header">
                  <h3 class="blcard_header_title">All Members</h3>
               </div>
               <div class="blcard_body">
                  <div class="search__box">
                     <!-- Search input for tabs -->
                    <div class="seartab_tablebox">
                    <input type="text" id="tab-search" placeholder="Search tabs..."> <i class="fas fa-search"></i>
                    </div>
                     <div class="permissions__tabs">
                        <!-- Left tabs list -->
                        <div class="tab" data-tab="Course" onclick="changeTab('Course')">Course Approval</div>
                        <div class="tab" data-tab="Support" onclick="changeTab('Support')">Support</div>
                        <div class="tab" data-tab="Approved" onclick="changeTab('Approved')">Approved Members</div>
                        <div class="tab" data-tab="Rejected" onclick="changeTab('Rejected')">Rejected Members</div>
                        <div class="tab" data-tab="Block" onclick="changeTab('Block')">Block Members</div>
                        <!-- Add more tabs as needed -->
                     </div>

                     <div class="no-data-message" id="no-data-message">
                        <div class="nodataimgbox">
                        <img src="assets/images/newimages/no_data2.png" alt="">
                        
                       <span> No data found</span>
                        </div>
                    </div>


                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-9 colinner_boxheight">
            <div class="customblck_card bggredient ">
               <div class="blcard_header">
                  <h3 class="blcard_header_title table-heading" id="card-heading">All Members</h3>
               </div>
               <div class="blcard_body">
                  <div class="filtertb_data datatable-container custom_table_area">
                     <!-- Data tables for each tab -->
                     <div class="data-table" id="Course-table">
                        <table class="dttable">
                           <thead>
                              <tr>
                                 <th>Member Name</th>
                                 <th>Permission </th>
                                 <th>Joining Date</th>
                                 <th>Last active</th>
                                 <th>Status</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <!-- Data for Ankur tab -->
                              <tr>
                                 <td>Prezy Mark </td>
                                 <td>Course Approval</td>
                                 <td>12 Oct,2022</td>
                                 <td>10 Dec,2022 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-pending-transparent">Pending</span>
                                 </td>
                                 <td>
                                 <div class="Custom_dropdown">
  <div class="dropdown-button">
    <!-- Three-dot icon (you can use an appropriate icon or text) -->
    <div class="ellipsis">...</div>
  </div>
  <div class="dropdown-content">
    <!-- Dropdown items -->
    <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
  </div>
</div>

                                 </td>
                              </tr>
                              <tr>
                                 <td>Jansh Brown </td>
                                 <td>Course Approval</td>
                                 <td>24 Jun,2015</td>
                                 <td>09 Oct,2023 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-pending-transparent">Pending</span>
                                 </td>
                                 <td>
                                   
                                        <div class="Custom_dropdown">
                                        <div class="dropdown-button">
                                            <div class="ellipsis">...</div>
                                        </div>
                                        <div class="dropdown-content">
                                             <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
                                        </div>
                                        </div>
                                 </td>
                              </tr>

                              <tr>
                                 <td>Vihan Hudda </td>
                                 <td>Course Approval</td>
                                 <td>24 Jun,2015</td>
                                 <td>09 Oct,2023 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-pending-transparent">Pending</span>
                                 </td>
                                 <td><div class="Custom_dropdown">
                                        <div class="dropdown-button">
                                            <div class="ellipsis">...</div>
                                        </div>
                                        <div class="dropdown-content">
                                             <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
                                        </div>
                                        </div></td>
                              </tr>

                              <tr>
                                 <td>Ayaan Bowen </td>
                                 <td>Course Approval</td>
                                 <td>24 Jun,2015</td>
                                 <td>09 Oct,2023 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-pending-transparent">Pending</span>
                                 </td>
                                 <td><div class="Custom_dropdown">
                                        <div class="dropdown-button">
                                            <div class="ellipsis">...</div>
                                        </div>
                                        <div class="dropdown-content">
                                             <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
                                        </div>
                                        </div></td>
                              </tr>


                              <!-- Add more data rows as needed -->
                           </tbody>
                        </table>
                     </div>
                     <div class="data-table" id="Support-table">
                        <table class="dttable">
                           <thead>
                           <tr>
                                 <th>Member Name</th>
                                 <th>Permission </th>
                                 <th>Joining Date</th>
                                 <th>Last active</th>
                                 <th>Status</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <!-- Data for Ankur tab -->
                              <tr>
                                 <td>Alex Smith  </td>
                                 <td>Support</td>
                                 <td>24 Jun,2015</td>
                                 <td>09 Oct,2023 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-pending-transparent">Pending</span>
                                 </td>
                                 <td><div class="Custom_dropdown">
                                        <div class="dropdown-button">
                                            <div class="ellipsis">...</div>
                                        </div>
                                        <div class="dropdown-content">
                                             <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
                                        </div>
                                        </div></td>
                              </tr>
                              <tr>
                                 <td>Andrea Rossi</td>
                                 <td>Support</td>
                                 <td>06 Aug,2021</td>
                                 <td>12 Oct,2023 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-pending-transparent">Pending</span>
                                 </td>
                                 <td><div class="Custom_dropdown">
                                        <div class="dropdown-button">
                                            <div class="ellipsis">...</div>
                                        </div>
                                        <div class="dropdown-content">
                                             <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
                                        </div>
                                        </div></td>
                              </tr>

                              <tr>
                                 <td>Nikola Tesla</td>
                                 <td>Support</td>
                                 <td>17 Jun,2020</td>
                                 <td>16 Oct,2023 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-pending-transparent">Pending</span>
                                 </td>
                                 <td><div class="Custom_dropdown">
                                        <div class="dropdown-button">
                                            <div class="ellipsis">...</div>
                                        </div>
                                        <div class="dropdown-content">
                                             <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
                                        </div>
                                        </div></td>
                              </tr>

                              <tr>
                                 <td>Marie Curie</td>
                                 <td>Support</td>
                                 <td>20 Jul,2018</td>
                                 <td>16 Oct,2023 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-pending-transparent">Pending</span>
                                 </td>
                                 <td><div class="Custom_dropdown">
                                        <div class="dropdown-button">
                                            <div class="ellipsis">...</div>
                                        </div>
                                        <div class="dropdown-content">
                                             <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
                                        </div>
                                        </div></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="data-table" id="Approved-table">
                        <table class="dttable">
                           <thead>
                           <tr>
                                 <th>Member Name</th>
                                 <th>Permission </th>
                                 <th>Joining Date</th>
                                 <th>Last active</th>
                                 <th>Status</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <!-- Data for Shilpi tab -->
                              <tr>
                                 <td>Jansh Brown </td>
                                 <td>Course Approval</td>
                                 <td>24 Jun,2015</td>
                                 <td>09 Oct,2023 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-success-transparent">Approved</span>
                                 </td>
                                 <td><div class="Custom_dropdown">
                                        <div class="dropdown-button">
                                            <div class="ellipsis">...</div>
                                        </div>
                                        <div class="dropdown-content">
                                             <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
                                        </div>
                                        </div></td>
                              </tr>

                              <tr>
                                 <td>Vihan Hudda </td>
                                 <td>Course Approval</td>
                                 <td>24 Jun,2015</td>
                                 <td>09 Oct,2023 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-success-transparent">Approved</span>
                                 </td>
                                 <td><div class="Custom_dropdown">
                                        <div class="dropdown-button">
                                            <div class="ellipsis">...</div>
                                        </div>
                                        <div class="dropdown-content">
                                             <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
                                        </div>
                                        </div></td>
                              </tr>
                              <tr>
                                 <td>Nikola Tesla</td>
                                 <td>Support</td>
                                 <td>17 Jun,2020</td>
                                 <td>16 Oct,2023 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-success-transparent">Approved</span>
                                 </td>
                                 <td><div class="Custom_dropdown">
                                        <div class="dropdown-button">
                                            <div class="ellipsis">...</div>
                                        </div>
                                        <div class="dropdown-content">
                                             <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
                                        </div>
                                        </div></td>
                              </tr>
                              <!-- Add more data rows as needed -->
                           </tbody>
                        </table>
                     </div>

                     <div class="data-table" id="Rejected-table">
                        <table class="dttable">
                           <thead>
                           <tr>
                                 <th>Member Name</th>
                                 <th>Permission </th>
                                 <th>Joining Date</th>
                                 <th>Last active</th>
                                 <th>Status</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <!-- Data for Shilpi tab -->
                              <tr>
                                 <td>Tsiolkovsky</td>
                                 <td>Course Approval</td>
                                 <td>24 Jun,2015</td>
                                 <td>09 Oct,2023 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-danger-transparent">Rejected</span>
                                 </td>
                                 <td><div class="Custom_dropdown">
                                        <div class="dropdown-button">
                                            <div class="ellipsis">...</div>
                                        </div>
                                        <div class="dropdown-content">
                                             <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
                                        </div>
                                        </div></td>
                              </tr>

                              <tr>
                                 <td>Garcia</td>
                                 <td>Course Approval</td>
                                 <td>24 Jun,2015</td>
                                 <td>09 Oct,2023 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-danger-transparent">Rejected</span>
                                 </td>
                                 <td><div class="Custom_dropdown">
                                        <div class="dropdown-button">
                                            <div class="ellipsis">...</div>
                                        </div>
                                        <div class="dropdown-content">
                                             <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
                                        </div>
                                        </div></td>
                              </tr>
                              <tr>
                                 <td>Wilson </td>
                                 <td>Support</td>
                                 <td>17 Jun,2020</td>
                                 <td>16 Oct,2023 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-danger-transparent">Rejected</span>
                                 </td>
                                 <td><div class="Custom_dropdown">
                                        <div class="dropdown-button">
                                            <div class="ellipsis">...</div>
                                        </div>
                                        <div class="dropdown-content">
                                             <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
                                        </div>
                                        </div></td>
                              </tr>
                              <!-- Add more data rows as needed -->
                           </tbody>
                        </table>
                     </div>

                     <div class="data-table" id="Block-table">
                        <table class="dttable">
                           <thead>
                           <tr>
                                 <th>Member Name</th>
                                 <th>Permission </th>
                                 <th>Joining Date</th>
                                 <th>Last active</th>
                                 <th>Status</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <!-- Data for Shilpi tab -->
                              <tr>
                                 <td>Jones</td>
                                 <td>Course Approval</td>
                                 <td>24 Jun,2015</td>
                                 <td>09 Oct,2023 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-danger-transparent">Blocked</span>
                                 </td>
                                 <td><div class="Custom_dropdown">
                                        <div class="dropdown-button">
                                            <div class="ellipsis">...</div>
                                        </div>
                                        <div class="dropdown-content">
                                             <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
                                        </div>
                                        </div></td>
                              </tr>

                              <tr>
                                 <td>Williams</td>
                                 <td>Course Approval</td>
                                 <td>24 Jun,2015</td>
                                 <td>09 Oct,2023 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-danger-transparent">Blocked</span>
                                 </td>
                                 <td><div class="Custom_dropdown">
                                        <div class="dropdown-button">
                                            <div class="ellipsis">...</div>
                                        </div>
                                        <div class="dropdown-content">
                                             <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
                                        </div>
                                        </div></td>
                              </tr>
                              <tr>
                                 <td>Wilson </td>
                                 <td>Support</td>
                                 <td>17 Jun,2020</td>
                                 <td>16 Oct,2023 10:24 AM</td>
                                 <td>
                                 <span class="badge bg-danger-transparent">Blocked</span>
                                 </td>
                                 <td><div class="Custom_dropdown">
                                        <div class="dropdown-button">
                                            <div class="ellipsis">...</div>
                                        </div>
                                        <div class="dropdown-content">
                                             <a href="#">Approve</a>
    <a href="#">Reject</a>
    <a href="#">Block</a>
                                        </div>
                                        </div></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>

                     



                  </div>
               </div>
            </div>
         </div>
      </div>

      


   </div>
</div>
<!--end container-->
<?php include("footer.php") ?>


<!-- table filter code -->
<script>
   // Function to switch between tabs
   function changeTab(tabName) {
       const tabs = document.querySelectorAll('.tab');
       tabs.forEach(tab => tab.classList.remove('active'));
   
       const selectedTab = document.querySelector('[data-tab="' + tabName + '"]');
       selectedTab.classList.add('active');

        // Hide the no data message
        hideNoDataMessage();

   
       // Update the card heading
       updateCardHeading(tabName);
   
       // Show/hide data tables based on the selected tab
       const tables = document.querySelectorAll('.data-table');
       tables.forEach(table => table.classList.remove('active'));
   
       const tabTable = document.querySelector('.data-table#' + tabName + '-table');
       tabTable.classList.add('active');
   }
   
   // Function to update the card heading
   function updateCardHeading(tabName) {
    const cardHeading = document.getElementById('card-heading');
            const activeTab = document.querySelector('.tab.active');
            cardHeading.textContent = activeTab.textContent;
   }

   // Function to show the no data message
   function showNoDataMessage() {
            const noDataMessage = document.getElementById('no-data-message');
            noDataMessage.style.display = 'block';
        }

        // Function to hide the no data message
        function hideNoDataMessage() {
            const noDataMessage = document.getElementById('no-data-message');
            noDataMessage.style.display = 'none';
        }
   
         // Initialize the first tab
         changeTab('Course');

// Function to handle tab search
document.getElementById('tab-search').addEventListener('input', function() {
    const filter = this.value.toLowerCase();
    const tabs = document.querySelectorAll('.tab');
    let foundTab = false;
    tabs.forEach(tab => {
        const tabName = tab.getAttribute('data-tab').toLowerCase();
        if (tabName.includes(filter)) {
            tab.style.display = 'block';
            foundTab = true;
        } else {
            tab.style.display = 'none';
        }
    });

    if (!foundTab) {
        showNoDataMessage();
    } else {
        hideNoDataMessage();
    }

    // Restore the first tab if it's hidden
    if (!document.querySelector('.tab.active')) {
        changeTab('Course');
    }
});
</script>
<!-- end -->

<!-- table call start -->
<script>
   $(document).ready(function() {
          // Initialize DataTable for the first table
          $('.dttable').DataTable({
            scrollX: true,    
          });
   });  
</script>
<!-- table call end -->


<!-- data table searchbar style js -->
<script>
  $(document).ready(function() {

  // Iterate through each DataTable
  $('.dataTables_wrapper').each(function() {
    const $searchLabel = $(this).find('.dataTables_filter label');
    const $searchInput = $(this).find('.dataTables_filter input');

    // Add the search icon (Font Awesome in this example)
    $searchLabel.prepend('<i class="fas fa-search"></i>');

     // Update the search filter for each DataTable
  $('.dataTables_wrapper').each(function() {
    const $searchInput = $(this).find('.dataTables_filter input');

    // Add a placeholder text to the input field
    $searchInput.attr('placeholder', 'Search here...');


  });
    
  });
});

</script>
<!-- data table searchbar style js end -->
