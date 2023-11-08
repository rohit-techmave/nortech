<?php include("header.php") ?>
<!-- Add FontAwesome stylesheet (you need an internet connection for this) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<div class="container-fluid relative px-3">
   <div class="layout-specing">
      <ul class="finance__area nthtabsarea flexgrid_tabs md:w-fit w-full  flex-wrap justify-center bg-white   dark:shadow-gray-800  usertabdash" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2   w-full transition-all duration-500 ease-in-out custom-btn btn-11" id="fee-tab" data-tabs-target="#fee" type="button" role="tab" aria-controls="fee" aria-selected="true">
               Fee
               <div class="dot"></div>
            </button>
         </li>
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2  w-full transition-all duration-500 ease-in-out" id="dao-tab" data-tabs-target="#dao" type="button" role="tab" aria-controls="dao" aria-selected="false">DAO</button>
         </li>
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2   w-full transition-all duration-500 ease-in-out" id="Stake-tab" data-tabs-target="#Stake" type="button" role="tab" aria-controls="Stake" aria-selected="false">Stake</button>
         </li>
         <li role="presentation" class="md:inline-block block md:w-fit w-full">
            <button class="px-6 py-2   w-full transition-all duration-500 ease-in-out" id="report-tab" data-tabs-target="#report" type="button" role="tab" aria-controls="report" aria-selected="false">Report</button>
         </li>
      </ul>
      <div id="StarterContent" class="mt-6">
         <div class="" id="fee" role="tabpanel" aria-labelledby="fee-tab">
            <div class="adjustfee_area">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="customblck_card bggredient">
                        <div class="blcard_header">
                           <h3 class="blcard_header_title">Adjust Fee ( General )</h3>
                        </div>
                        <div class="blcard_body">
                           <form action="#">
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="baserate">Base Rate (%)</label>
                                       <input type="text" name="baserate" id="baserate" class="form-control required">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="Adoption">Adoption Factor </label>
                                       <input type="text" name="Adoption" id="Adoption" class="form-control required">
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="form-group">
                                       <label for="lowAdoption">low initial adoption</label>
                                       <input type="text" name="lowAdoption" id="lowAdoption" class="form-control required">
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="form-group">
                                       <label for="Moderate">Moderate adoption</label>
                                       <input type="text" name="Moderate" id="Moderate" class="form-control required">
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="form-group">
                                       <label for="Highadoption">High adoption</label>
                                       <input type="text" name="Highadoption" id="Highadoption" class="form-control required">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="update_action">
                                       <a href="#" class="linebtn_custom">Submit
                                       <span class="hover-shape1"></span>
                                       <span class="hover-shape2"></span>
                                       <span class="hover-shape3"></span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                        </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="customblck_card bggredient">
                        <div class="blcard_header">
                           <h3 class="blcard_header_title">Adjust Reward</h3>
                        </div>
                        <div class="blcard_body">
                           <div class="row">
                              <div class="col-lg-4">
                              <form action="#">
                              
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label for="tokensAlreadyReceived">Set Tokens Already Received</label>
                                    <input type="number" name="tokensAlreadyReceived" id="tokensAlreadyReceived" class="form-control required cmnnumber_input" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                   
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="update_action">
                                 <a href="##" class="linebtn_custom view_listbtnn btnautowidth">Set Tokens

                                    <span class="hover-shape1"></span>
                                             <span class="hover-shape2"></span>
                                             <span class="hover-shape3"></span>
                                    </a>
                                 </div>
                              </div>
                              
                              </form>
                        </div>

                        <div class="col-lg-4">
                              <form action="#">
                             
                              <div class="col-lg-12">
                                 <div class="form-group">
                                 <label for="userAddress">Claim Builder Reward</label>
                                    <input type="text" name="userAddress" id="userAddress" class="form-control required">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="update_action">
                                 <a href="##" class="linebtn_custom view_listbtnn btnautowidth">Claim Reward

                                    <span class="hover-shape1"></span>
                                             <span class="hover-shape2"></span>
                                             <span class="hover-shape3"></span>
                                    </a>
                                 </div>
                              </div>
                              </form>
                        </div>

                        <div class="col-lg-4">
                              <form action="#">

                              <div class="change_wallet contract_balance" id="contract_balance">
                     <div class="w-full ">
                        <h1 class="font-bold leading-snug text-white text-4xl"> <span class="bg-gradient-to-l from-red-600 to-violet-600 text-transparent bg-clip-text">
                        Check Contract Balance
                           </span></h1>

                        <div class="buy_more">
                           <a href="##" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Check Contract Balance</a>
                        </div>
                     </div>
                  </div>

                              
                              </form>
                        </div>

                      
                              </div>
                           </div>
                          
                     </div>
                  </div>

                   <!-- adjust burn syatem start -->
                  <div class="col-lg-12">
                     <div class="customblck_card bggredient">
                        <div class="blcard_header">
                           <h3 class="blcard_header_title">Adjust Burn Syatem</h3>
                        </div>
                        <div class="blcard_body">

                        <form action="">
                           <div class="row">
                           <div class="col-lg-4 multiinputcol_marginb">
                           
                                 <div class="form-group">
                                    <label for="tokensAlreadyReceived">Update Transaction Burning Rate</label>
                                    <input type="number" name="tokensAlreadyReceived" id="tokensAlreadyReceived" class="form-control required icon_input_righ" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                     <div class="percentagesign">%</div>
                                 </div>
                              </div>

                              <div class="col-lg-4 multiinputcol_marginb">
                             
                                 <div class="form-group">
                                    <label for="tokensAlreadyReceived">Update Community Growth Burning Percentage</label>
                                    <input type="number" name="tokensAlreadyReceived" id="tokensAlreadyReceived" class="form-control required icon_input_righ" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                     <div class="percentagesign">%</div>
                                 </div>
                              </div>

                              <div class="col-lg-4 multiinputcol_marginb">
                            
                                 <div class="form-group">
                                    <label for="tokensAlreadyReceived">Update Certificate Associated Burning Percentage</label>
                                    <input type="number" name="tokensAlreadyReceived" id="tokensAlreadyReceived" class="form-control required icon_input_righ" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                     <div class="percentagesign">%</div>
                                 </div>
                              </div>

                              <div class="col-lg-4 multiinputcol_marginb">
                           
                                 <div class="form-group">
                                    <label for="tokensAlreadyReceived">Update Liquidity Operations Burning Rate</label>
                                    <input type="number" name="tokensAlreadyReceived" id="tokensAlreadyReceived" class="form-control required icon_input_righ" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                     <div class="percentagesign">%</div>
                                 </div>
                              </div>

                              <div class="col-lg-4 multiinputcol_marginb">
                             
                                 <div class="form-group">
                                    <label for="tokensAlreadyReceived">Update Last User Count</label>
                                    <input type="number" name="tokensAlreadyReceived" id="tokensAlreadyReceived" class="form-control required icon_input_righ" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                     
                                 </div>
                              </div>

                              <div class="col-lg-4 multiinputcol_marginb">
                             
                                 <div class="form-group">
                                    <label for="tokensAlreadyReceived">Update Current Active Token Supply</label>
                                    <input type="number" name="tokensAlreadyReceived" id="tokensAlreadyReceived" class="form-control required icon_input_righ" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                     
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                    <div class="update_action">
                                       <a href="#" class="linebtn_custom"><i class="fa-solid fa-arrow-right"></i> Update
                                       <span class="hover-shape1"></span>
                                       <span class="hover-shape2"></span>
                                       <span class="hover-shape3"></span>
                                       </a>
                                    </div>
                                 </div>

                           </div>
                        </form>
                           
                           </div>
                          
                     </div>
                  </div>
                  <!-- adjust burn syatem end -->

               </div>
            </div>
         </div>
         <div class="hidden" id="dao" role="tabpanel" aria-labelledby="dao-tab">
            <div class="createnftid_section">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="customblck_card bggredient">
                        <div class="blcard_header">
                           <h3 class="blcard_header_title">Create Votes</h3>
                        </div>
                        <div class="blcard_body">
                           <form action="#">
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="firstname">Vote Title</label>
                                       <input type="text" name="firstname" id="firstname" class="form-control required">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="firstname">Vote Description</label>
                                       <input type="text" name="firstname" id="firstname" class="form-control required">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="basicDate">Voting Start Date & Time</label>
                                       <input type="text" name="basicDate" id="basicDate" class="form-control required" >
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="basicDate2">Voting ends Date & Time</label>
                                       <input type="text" id="basicDate2" class="form-control" placeholder="" data-input>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="update_action">
                                       <a href="#" class="linebtn_custom">Create Vote
                                       <span class="hover-shape1"></span>
                                       <span class="hover-shape2"></span>
                                       <span class="hover-shape3"></span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                        </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-6 countdown-container">
                     <div class="customblck_card bggredient">
                        <div class="blcard_header">
                           <h3 class="blcard_header_title">Pending Votes</h3>
                        </div>
                        <div class="blcard_body">
                           <div class=" card_listhgt countdowns">
                              <div class="common__listcard">
                                 <div class="newbuilder__dataL">
                                    <div class="withoutimg__listcont">
                                       <div class="namecomon_user">
                                          PTIP 50 - Treasury Assets Management #1
                                       </div>
                                       <a href="#" class=" anchorhover">Lorem ipsum dolor sit.</a>
                                    </div>
                                 </div>
                                 <div class="countdown_box" data-end-time="2023-10-20T12:10:00Z"></div>
                              </div>
                              <div class="common__listcard">
                                 <div class="newbuilder__dataL">
                                    <div class="withoutimg__listcont">
                                       <div class="namecomon_user">
                                          PTIP 61 - Stake XRP Earn Cake Syrup Pool
                                       </div>
                                       <a href="#" class=" anchorhover">Lorem ipsum dolor sit amet consectetur.</a>
                                    </div>
                                 </div>
                                 <div class="countdown_box" data-end-time="2023-10-19T14:20:00Z"></div>
                              </div>
                              <div class="common__listcard">
                                 <div class="newbuilder__dataL">
                                    <div class="withoutimg__listcont">
                                       <div class="namecomon_user">
                                          PTIP 63 - Claim Rewards from Locked Staking
                                       </div>
                                       <a href="#" class=" anchorhover">Lorem, ipsum dolor.</a>
                                    </div>
                                 </div>
                                 <div class="countdown_box" data-end-time="2023-10-20T18:30:10Z"></div>
                              </div>
                              <div class="common__listcard">
                                 <div class="newbuilder__dataL">
                                    <div class="withoutimg__listcont">
                                       <div class="namecomon_user ">
                                          PTIP 64 - Loan and/or fixed term with the Cake
                                       </div>
                                       <a href="#" class=" anchorhover">Lorem ipsum dolor sit amet.</a>
                                    </div>
                                 </div>
                                 <div class="countdown_box" data-end-time="2023-10-22T18:00:00Z"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 countdown-container">
                     <div class="customblck_card bggredient">
                        <div class="blcard_header">
                           <h3 class="blcard_header_title">History Votes</h3>
                        </div>
                        <div class="blcard_body">
                           <div class=" card_listhgt countdowns">
                              <div class="common__listcard">
                                 <div class="newbuilder__dataL">
                                    <div class="withoutimg__listcont">
                                       <div class="namecomon_user">
                                          PTIP 50 - Treasury Assets Management #1 
                                       </div>
                                       <a href="#" class=" anchorhover">Lorem, ipsum dolor.</a>
                                    </div>
                                 </div>
                                 <div class="countdown_box" data-end-time="2023-10-23T18:00:00Z"></div>
                              </div>
                              <div class="common__listcard">
                                 <div class="newbuilder__dataL">
                                    <div class="withoutimg__listcont">
                                       <div class="namecomon_user">
                                          PTIP 61 - Stake XRP Earn Cake Syrup Pool 
                                       </div>
                                       <a href="#" class=" anchorhover">Lorem ipsum dolor sit amet consectetur.</a>
                                    </div>
                                 </div>
                                 <div class="countdown_box" data-end-time="2023-10-24T18:00:00Z"></div>
                              </div>
                              <div class="common__listcard">
                                 <div class="newbuilder__dataL">
                                    <div class="withoutimg__listcont">
                                       <div class="namecomon_user">
                                          PTIP 63 - Claim Rewards from Locked Staking
                                       </div>
                                       <a href="#" class=" anchorhover">Lorem ipsum dolor sit.</a>
                                    </div>
                                 </div>
                                 <div class="countdown_box" data-end-time="2023-10-25T18:00:00Z"></div>
                              </div>
                              <div class="common__listcard">
                                 <div class="newbuilder__dataL">
                                    <div class="withoutimg__listcont">
                                       <div class="namecomon_user">
                                          PTIP 64 - Loan and/or fixed term with the Cake 
                                       </div>
                                       <a href="#" class=" anchorhover">Lorem ipsum dolor sit amet.</a>
                                    </div>
                                 </div>
                                 <div class="countdown_box" data-end-time="2023-10-24T18:00:00Z"></div>
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
      <div class="hidden" id="Stake" role="tabpanel" aria-labelledby="Stake-tab">
         <div class="row ">
            <!-- adjust burn syatem start -->
            <div class="col-lg-6">
                     <div class="customblck_card bggredient">
                        <div class="blcard_header">
                           <h3 class="blcard_header_title">Staking Management</h3>
                        </div>
                        <div class="blcard_body">

                        <form action="">
                           <div class="row centerrow_align">
                           <div class="col-lg-6 multiinputcol_marginb">
                           
                                 <div class="form-group">
                                    <label for="UserAddress">User Address</label>
                                    <input type="text" name="UserAddress" id="UserAddress" class="form-control required icon_input_righ">
                               
                                 </div>
                              </div>

                              <div class="col-lg-6 multiinputcol_marginb">
                           
                                 <div class="form-group">
                                    <label for="StakeAmount">Stake Amount</label>
                                    <input type="number" name="StakeAmount" id="StakeAmount" class="form-control required icon_input_righ" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                               
                                 </div>
                              </div>

                              <div class="col-lg-6">
                                 <div class="form-group radioform_wlabel">
                                 <label for="StakeAmount">Stake Action</label>
                                 <div class="review_block customradioselectbtn">
	                                        <ul>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="radio" id="Stake_1" name="question_1" class="required" value="Stake" onchange="getVals(this, 'question_1');">
	                                                    <label class="radio" for="Stake_1"></label>
	                                                    <label for="Stake_1" class="wrapper">Stake</label>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="radio" id="Unstake_1" name="question_1" class="required" value="Unstake" onchange="getVals(this, 'question_1');">
	                                                    <label class="radio" for="Unstake_1"></label>
	                                                    <label for="Unstake_1" class="wrapper">Unstake</label>
	                                                </div>
	                                            </li>
	                                           
	                                        </ul>
	                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-6">
                                    <div class="update_action">
                                       <a href="#" class="linebtn_custom"><i class="fa-solid fa-arrow-right"></i> Submit
                                       <span class="hover-shape1"></span>
                                       <span class="hover-shape2"></span>
                                       <span class="hover-shape3"></span>
                                       </a>
                                    </div>
                                 </div>

                           </div>
                        </form>
                           
                           </div>
                          
                     </div>
                  </div>

                  <div class="col-lg-6">
                     <div class="customblck_card bggredient">
                        <div class="blcard_header">
                           <h3 class="blcard_header_title">Stake Pool Management</h3>
                        </div>
                        <div class="blcard_body">

                        <div class="listsearchpool_header">
                         <div class="poolsearchinput">
                         <input type="text" class="searchpool" id="searchInput" placeholder="Search Pool..."> 
                         <i class="fas fa-search"></i> 
                         </div> 
                         
                         <a href="##" class="linebtn_custom view_listbtnn btnautowidth poolcreate_button"><i class="fa-solid fa-plus"></i> Create Pool

                                    <span class="hover-shape1"></span>
                                             <span class="hover-shape2"></span>
                                             <span class="hover-shape3"></span>
                                    </a>
                      </div>

                     <div class="card_listhgt" id="poolList">
                             
                           <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                
                                 <div class="usernameandid_dt poollistitem">
                                    <div class="namecomon_user">
                                    0xe849fa28a...ea14
                                    </div>
                                    <span class="newly__date">17 Oct,2023</span>
                                 </div>
                              </div>
                              <span class="btndelete_pool "><i class="fa-regular fa-trash-can"></i></span>
                           </div>
                  
                           <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                
                                 <div class="usernameandid_dt poollistitem">
                                    <div class="namecomon_user">
                                   rohit
                                    </div>
                                    <span class="newly__date">17 Oct,2023</span>
                                 </div>
                              </div>
                              <span class="btndelete_pool"><i class="fa-regular fa-trash-can"></i></span>
                           </div>

                           <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                
                                 <div class="usernameandid_dt poollistitem">
                                    <div class="namecomon_user">
                                   ankur
                                    </div>
                                    <span class="newly__date">18 Oct,2023</span>
                                 </div>
                              </div>
                              <span class="btndelete_pool "><i class="fa-regular fa-trash-can"></i></span>
                           </div>

                           <div class="common__listcard">
                              <div class="newbuilder__dataL">
                                
                                 <div class="usernameandid_dt poollistitem">
                                    <div class="namecomon_user">
                                    0xe849fa28a...ea14
                                    </div>
                                    <span class="newly__date">17 Oct,2023</span>
                                 </div>
                              </div>
                              <span class="btndelete_pool "><i class="fa-regular fa-trash-can"></i></span>
                           </div>
                           <p id="noResultsMessage" style="display: none;">No pools found</p>
                  </div>
               </div>
                          
                     </div>
                  </div>

                  <!-- adjust burn syatem end -->
         </div>
      </div>
      <div class="hidden" id="report" role="tabpanel" aria-labelledby="report-tab">
         <div class="reports__chtarea row">
            <div class="col-lg-6">
               <div class="customblck_card bggredient">
                  <div class="blcard_header header_wbtn">
                     <h3 class="blcard_header_title">NTH Holders</h3>
                     <a href="#" class="btnheader_w">
                        View Report 
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                           <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 19L19 6m0 0v12.48M19 6H6.52"></path>
                        </svg>
                     </a>
                  </div>
                  <div class="blcard_body">
                     <div class="balnce__chart" >
                        <canvas id="nthHolderLineChart" class=""></canvas>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="customblck_card bggredient">
                  <div class="blcard_header header_wbtn">
                     <h3 class="blcard_header_title">NTH in Circulation</h3>
                     <a href="#" class="btnheader_w">
                        View Report 
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                           <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 19L19 6m0 0v12.48M19 6H6.52"></path>
                        </svg>
                     </a>
                  </div>
                  <div class="blcard_body">
                     <div class="balnce__chart" >
                        <canvas id="nthcirculation" class=""></canvas>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="customblck_card bggredient">
                  <div class="blcard_header header_wbtn">
                     <h3 class="blcard_header_title">NTH Locked</h3>
                     <a href="#" class="btnheader_w">
                        View Report 
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                           <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 19L19 6m0 0v12.48M19 6H6.52"></path>
                        </svg>
                     </a>
                  </div>
                  <div class="blcard_body">
                     <div class="balnce__chart">
                        <canvas id="nthlocked" class="default_chart"></canvas>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="customblck_card bggredient">
                  <div class="blcard_header header_wbtn">
                     <h3 class="blcard_header_title">NTH Reward</h3>
                     <a href="#" class="btnheader_w">
                        View Report 
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                           <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 19L19 6m0 0v12.48M19 6H6.52"></path>
                        </svg>
                     </a>
                  </div>
                  <div class="blcard_body">
                     <div class="balnce__chart">
                        <canvas id="rewardChart" class="default_chart"></canvas>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="customblck_card bggredient">
                  <div class="blcard_header header_wbtn">
                     <h3 class="blcard_header_title">NTH history Price</h3>
                     <a href="#" class="btnheader_w">
                        View Report 
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                           <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 19L19 6m0 0v12.48M19 6H6.52"></path>
                        </svg>
                     </a>
                  </div>
                  <div class="blcard_body">
                     <div class="balnce__chart">
                        <canvas id="pricenthchart" class="default_chart"></canvas>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--end col-->
   <!-- End Content -->
</div>
</div>
<!--end container-->
<?php include("footer.php") ?>
<script>
   $(document).ready(function() {
       // Initialize Select2 on the course-filter select element
       $('#course-filter').select2();
       
       const courseList = document.getElementById("course-list");
       const courseItems = courseList.querySelectorAll('li');
   
       $('#course-filter').on('change', function() {
           const selectedFilter = $(this).val();
   
           courseItems.forEach(course => {
               const courseStatus = course.getAttribute('data-status');
               if (selectedFilter === "new" && courseStatus === "new") {
                   course.style.display = 'block';
               } else if (selectedFilter === "all" || selectedFilter === courseStatus) {
                   course.style.display = 'block';
               } else {
                   course.style.display = 'none';
               }
           });
       });
   
       // Initial population of the course list with "New Courses" selected
       $('#course-filter').val('new').trigger('change');
   });
   
   
</script>
<!-- rating js -->
<script>
   $(document).ready(function() {
    const rating = 4.6;
    const filledStarsWidth = (rating / 5) * 100;
    $('.star-rating__filled-stars').css('width', `${filledStarsWidth}%`);
   });
</script>
<!-- dynamic date and time favorite card  -->
<script>
   // Get all elements with the "Remove" button class
   const removeButtons = document.querySelectorAll('.remove-button');
   const removeAlert = document.getElementById('remove-alert');
   
   // Add click event listeners to all "Remove" buttons
   removeButtons.forEach(button => {
       button.addEventListener('click', () => {
           // Find the parent course card and remove it
           const courseCard = button.closest('.favorite_course_added');
           if (courseCard) {
               courseCard.remove();
   
               // Show the alert
               removeAlert.style.display = 'block';
   
               // Automatically remove the alert after 5 seconds
               setTimeout(() => {
                   removeAlert.style.display = 'none';
               }, 2000); // 5000 milliseconds = 5 seconds
           }
       });
   });
</script>
<!-- vote count down -->
<script>
   // Get the countdown containers
   const countdownContainers = document.querySelectorAll(".countdown-container");
   
   countdownContainers.forEach((container, containerIndex) => {
       const countdownDivs = container.querySelector(".countdowns").querySelectorAll(".countdown_box");
   
       countdownDivs.forEach((countdownDiv, index) => {
           const endTime = new Date(countdownDiv.getAttribute("data-end-time")).getTime();
   
           const countdownElement = document.createElement("div");
           countdownElement.id = `countdown-${containerIndex}-${index}`;
           countdownDiv.appendChild(countdownElement);
   
           updateCountdown(containerIndex, index);
   
           setInterval(() => updateCountdown(containerIndex, index), 1000);
       });
   });
   
   function updateCountdown(containerIndex, index) {
       const countdownDiv = countdownContainers[containerIndex]
           .querySelector(".countdowns")
           .querySelectorAll(".countdown_box")[index];
       const currentTime = new Date().getTime();
       const endTime = new Date(countdownDiv.getAttribute("data-end-time")).getTime();
       const timeRemaining = endTime - currentTime;
       const countdownElement = document.getElementById(`countdown-${containerIndex}-${index}`);
   
       if (timeRemaining <= 0) {
           countdownElement.innerHTML = "Voting has ended!";
       } else {
           const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
           const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
           const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
           const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
   
           countdownElement.innerHTML = `${days} days ${hours} hours ${minutes} minutes ${seconds} seconds`;
       }
   }
</script>
<!-- end -->


<!-- pool search js code  -->

<script>
// Get references to the input field, pool list, and no results message
const searchInput = document.getElementById('searchInput');
const poolList = document.getElementById('poolList');
const noResultsMessage = document.getElementById('noResultsMessage');

// Function to update the pool list based on the search query
function updatePoolList() {
    const query = searchInput.value.toLowerCase();
    const poolItems = poolList.getElementsByClassName('common__listcard');
    let hasResults = false;

    for (let i = 0; i < poolItems.length; i++) {
        const poolItem = poolItems[i];
        const poolName = poolItem.textContent.toLowerCase();

        if (poolName.includes(query)) {
            poolItem.style.display = 'inline-flex';
            hasResults = true;
        } else {
            poolItem.style.display = 'none';
        }
    }

    // Show or hide the "No pools found" message
    if (!hasResults) {
        noResultsMessage.style.display = 'block';
    } else {
        noResultsMessage.style.display = 'none';
    }
}

// Add event listener to the search input
searchInput.addEventListener('input', updatePoolList);


</script>



