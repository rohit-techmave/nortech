<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">
    
<head>
        <meta charset="UTF-8">
        <title>Nortech</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="website" content="">
        <meta name="email" content="">
        <meta name="version" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/newimages/nortech-favicon.png">

        <!-- Css -->
        <!-- Main Css -->
        <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
        <link href="assets/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
        <link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/css/tailwind.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/custom-r.css">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </head>
    
    <body class="font-urbanist text-base text-black dark:text-white dark:bg-slate-900">
        <!-- Loader Start -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
  
        <div class="page-wrapper toggled">
            <!-- sidebar-wrapper -->
            <nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content">
                    <div class="sidebar-brand">
                        <a href="index.php">
                            <img src="assets/images/newimages/logolight-nortech.png" height="24" class="block dark:hidden logonortech_light" alt="">
                            <img src="assets/images/newimages/logonortech-dark.png" class="hidden dark:block logonortech_dark" alt="">
                        </a>
                    </div>
        
                    <ul class="sidebar-menu border-t dark:border-white/10 border-gray-100" data-simplebar style="height: calc(100% - 70px);">
                        <!-- <li class="">
                            <a href="index.html"><i data-feather="airplay" class="h-4 w-4 me-3"></i>Dashboard</a>
                        </li> -->

                        <!-- <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i data-feather="image" class="h-4 w-4 me-3"></i>Explore Items</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="explore.html">Explore</a></li>
                                    <li><a href="item-detail.html">Item Detail</a></li>
                                    <li><a href="upload-work.html">Upload Item</a></li>
                                </ul>
                            </div>
                        </li> -->

                        <li class="">
                            <a href="index.php"><i data-feather="user" class="h-4 w-4 me-3"></i>Profile</a>
                        </li>

                        <li class="">
                            <a href="user.php"><i data-feather="home" class="h-4 w-4 me-3"></i>User</a>
                        </li>

                        <li class="">
                            <a href="finance.php"><i data-feather="activity" class="h-4 w-4 me-3"></i>Builder</a>
                        </li>

                        <li class="">
                            <a href="education.php"><i data-feather="book" class="h-4 w-4 me-3"></i>NTH</a>
                        </li>

                        <li class="marketplacemenu">
                            <a href="marketplace.php"><img src="assets/images/newimages/icons/marketplacegrey.png" alt="" class="h-4 w-4 me-3 greyicon"><img src="assets/images/newimages/icons/marketplace-white.png" alt="" class="h-4 w-4 me-3 whiteicon">Platform</a>
                        </li>

                        <li class="votemenu">
                            <a href="##"><img src="assets/images/newimages/icons/votegrey.png" alt="" class="h-4 w-4 me-3 greyicon"><img src="assets/images/newimages/icons/votewhite.png" alt="" class="h-4 w-4 me-3 whiteicon">Admin</a>
                        </li>



                        <li class="relative lg:mx-8 lg:mt-8 mx-6 mt-6 p-6 rounded-lg bg-gradient-to-b to-transparent from-gray-50 dark:from-slate-800 text-center">
                            <span class="relative z-10">
                                <img src="assets/images/creator.png" class="w-32 mx-auto" alt="">
                                <span class="text-lg font-semibold h5">Subscribe Now</span>

                                <span class="text-slate-400 mt-3 mb-5 block">for more content subscribe to pro</span>

                                <a href="https://1.envato.market/giglink" target="_blank" class="btn inline-block text-center bg-gray-100/5 hover:bg-gray-100 border-gray-100 dark:border-gray-100/5 hover:border-gray-100 text-slate-900 dark:text-white dark:hover:text-slate-900 rounded-md">Subscribe</a>
                            </span>
                        </li> 
                    </ul>
                    <!-- sidebar-menu  -->
                </div>
            </nav>
            <!-- sidebar-wrapper  -->

            <!-- Start Page Content -->
            <main class="page-content bg-gray-50 dark:bg-slate-800">
                <!-- Top Header -->
                <div class="top-header">
                    <div class="header-bar flex justify-between">
                        <div class="flex items-center space-x-1">
                            <!-- Logo -->
                            <a href="#" class="xl:hidden block me-2">
                                <img src="assets/images/logo-icon-32.png" class="md:hidden block" alt="">
                                <span class="md:block hidden">
                                    <img src="assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
                                    <img src="assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
                                </span>
                            </a>
                            <!-- Logo -->

                            <!-- show or close sidebar -->
                            <a id="close-sidebar" class="btn btn-icon btn-sm rounded-full inline-flex bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white" href="javascript:void(0)">
                                <i data-feather="menu" class="h-4 w-4"></i>
                            </a>
                            <!-- show or close sidebar -->
            
                            <!-- Searchbar -->
                            <div class="ps-1.5">
                                <div class="form-icon relative sm:block hidden">
                                    <i class="uil uil-search absolute top-1/2 -translate-y-1/2 start-3"></i>
                                    <input type="text" class="form-input w-56 ps-9 py-2 px-3 h-8 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 bg-white" name="s" id="searchItem" placeholder="Search...">
                                </div>
                            </div>
                            <!-- Searchbar -->
                        </div>

                        <ul class="list-none mb-0 space-x-1 toprightlist">

                            <!--  -->
                            <li>
                                <div class="nthprice_topbox">
                                     <div class="Nth_price  priceitemstop ">
                                         <h1>NTH PRICE : 0.1</h1>
                                     </div>
                                     <div class="horizontal_linebreak"></div>
                                      <div class="token_amount priceitemstop">
                                        <h1>100 NTH</h1>
                                      </div>
                                </div>
                            </li>


                            <!-- Notification Dropdown -->
                            <li class="dropdown inline-block relative">
                                <button data-dropdown-toggle="dropdown" class="dropdown-toggle btn btn-icon btn-sm rounded-full inline-flex bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white" type="button">
                                    <i data-feather="bell" class="h-4 w-4"></i>
                                    <span class="absolute top-0 end-0 flex items-center justify-center bg-emerald-600 text-white text-[10px] font-bold rounded-full w-2 h-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-emerald-600 after:top-0 after:end-0 after:rounded-full after:animate-ping"></span>
                                </button>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-64 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                    <span class="px-4 py-4 flex justify-between">
                                        <span class="font-semibold">Notifications</span>
                                        <span class="flex items-center justify-center bg-emerald-600/20 text-emerald-600 text-[10px] font-bold rounded-full w-5 max-h-5 ms-1">3</span>
                                    </span>
                                    <ul class="py-2 text-start h-64 border-t border-gray-100 dark:border-gray-800" data-simplebar>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex">
                                                    <div class="h-10 w-10 rounded-full shadow shadow-violet-600/10 dark:shadow-gray-700 bg-violet-600/10 dark:bg-slate-800 text-violet-600 dark:text-white flex items-center justify-center">
                                                        <i data-feather="shopping-cart" class="h-4 w-4"></i>
                                                    </div>
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-semibold block">Order Complete</span>
                                                        <small class="text-slate-400">15 min ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex">
                                                    <img src="assets/images/client/04.jpg" class="h-10 w-10 rounded-full shadow dark:shadow-gray-700" alt="">
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-semibold block"><span class="font-bold">Message</span> from Luis</span>
                                                        <small class="text-slate-400">1 hour ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex">
                                                    <div class="h-10 w-10 rounded-full shadow shadow-violet-600/10 dark:shadow-gray-700 bg-violet-600/10 dark:bg-slate-800 text-violet-600 dark:text-white flex items-center justify-center">
                                                        <i data-feather="dollar-sign" class="h-4 w-4"></i>
                                                    </div>
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-semibold block"><span class="font-bold">Received Bid</span></span>
                                                        <small class="text-slate-400">2 hour ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex">
                                                    <div class="h-10 w-10 rounded-full shadow shadow-violet-600/10 dark:shadow-gray-700 bg-violet-600/10 dark:bg-slate-800 text-violet-600 dark:text-white flex items-center justify-center">
                                                        <i data-feather="truck" class="h-4 w-4"></i>
                                                    </div>
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-semibold block">Please check your activities</span>
                                                        <small class="text-slate-400">Yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="block font-medium py-1.5 px-4">
                                                <div class="flex">
                                                    <img src="assets/images/client/04.jpg" class="h-10 w-10 rounded-full shadow dark:shadow-gray-700" alt="">
                                                    <div class="ms-2">
                                                        <span class="text-[15px] font-semibold block"><span class="font-bold">Cally</span> started following you</span>
                                                        <small class="text-slate-400">2 days ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li><!--end dropdown-->
                            <!-- Notification Dropdown -->

                            <!-- Wallet -->
                            <li class="inline-block mb-0">
                                <a id="connectWallet" class="btn btn-icon btn-sm rounded-full inline-flex bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="uil uil-wallet"></i></a>
                            </li>
                            <!-- Wallet -->
            
                            <!-- User/Profile Dropdown -->
                            <li class="dropdown inline-block relative">
                                <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                                    <span class="btn btn-icon btn-sm rounded-full inline-flex bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><img src="assets/images/client/04.jpg" class="rounded-full" alt=""></span>
                                </button>
                                <!-- Dropdown menu -->
                                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-48 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                                    <div class="relative">
                                        <div class="py-8 bg-gradient-to-tr from-violet-600 to-red-600"></div>
                                        <div class="absolute px-4 -bottom-7 start-0">
                                            <div class="flex items-end">
                                                <img src="assets/images/client/04.jpg" class="rounded-full w-10 h-w-10 shadow dark:shadow-gray-700" alt="">

                                                <span class="font-semibold text-[15px] ms-1">Jenny Jimenez</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-10 px-4">
                                        <h5 class="font-semibold text-[15px]">Wallet:</h5>
                                        <div class="flex items-center justify-between">
                                            <span class="text-[13px] text-slate-400">qhut0...hfteh45</span>
                                            <a href="#" class="text-violet-600"><i class="uil uil-copy"></i></a>
                                        </div>
                                    </div>

                                    <div class="mt-4 px-4">
                                        <h5 class="text-[15px]">Balance: <span class="text-violet-600 font-semibold">0.00045ETH</span></h5>
                                    </div>

                                    <ul class="py-2 text-start">
                                        <li>
                                            <a href="profile.php" class="block text-[14px] font-semibold py-1.5 px-4 hover:text-violet-600"><i class="uil uil-user text-[16px] align-middle me-1"></i> Profile</a>
                                        </li>
                                        <li>
                                            <a href="##" class="block text-[14px] font-semibold py-1.5 px-4 hover:text-violet-600"><i class="uil uil-setting text-[16px] align-middle me-1"></i> Settings</a>
                                        </li>
                                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                                        <li>
                                            <a href="./login-form/login.html" class="block text-[14px] font-semibold py-1.5 px-4 hover:text-violet-600"><i class="uil uil-sign-out-alt text-[16px] align-middle me-1"></i> Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li><!--end dropdown-->
                            <!-- User/Profile Dropdown -->
                        </ul>
                    </div>
                </div>
                <!-- Top Header -->