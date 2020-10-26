@extends('layouts.app')
@section('additional-css')
@endsection
@section('content')
    <!-- Sky Background -->
    <div class="sky">
        <div class="container">
            <div class="hmpg_lg"> <!-- Logo -->
            </div>
            <div class="k_motto p-0 text-white text-center"> Kunnec is everything all in one. We value your privacy, freedom of speech and your data belongs to you. We don't sell your data to third parties.</div>

            <div class="container1 dynamicTile">
                <div class="row ">
                    <div class="col-sm-2  col-xs-4">
                        <div id="tile1" class="tile cursor-pointer">
                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div data-toggle="modal" data-target="#portfolioModal1">
                                            <p class="tilecaption6"><i class="fa fa-home fa-3x"></i></p>
                                            <p class="tilecaption5">About</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-4">
                        <div id="tile2" class="tile cursor-pointer">
                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div data-toggle="modal" data-target="#portfolioModal2">
                                            <p class="tilecaption6"><i class="fas fa-satellite-dish fa-3x"></i></p>
                                            <p class="tilecaption12">Your Data</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-4">
                        <div id="tile3" class="tile cursor-pointer">
                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div data-toggle="modal" data-target="#portfolioModal3">
                                            <p class="tilecaption8"><i class="fa fa-bell fa-3x"></i></p>
                                            <p class="tilecaption7">Alerts</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="col-sm-2 col-xs-4">
                            <div id="tile4" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal4">
                                                <p class="tilecaption6"><i class="fas fa-donate fa-3x"></i></p>
                                                <p class="tilecaption5">Payments</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="col-sm-2 col-xs-4">
                        <div id="tile5" class="tile cursor-pointer">
                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div data-toggle="modal" data-target="#portfolioModal5">
                                            <p class="tilecaption6"><i class="fa fa-coins fa-3x"></i></p>
                                            <p class="tilecaption5">Credits</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-4">
                        <div id="tile6" class="tile cursor-pointer">
                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div data-toggle="modal" data-target="#portfolioModal6">
                                            <p class="tilecaption6"><i class="far fa-comment fa-3x"></i></p>
                                            <p class="tilecaption5">Languages</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End of the Row -->

                <div class="row">
                    <div class="col-sm-4 col-xs-8">
                        <div class="k_social-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal7">
                                                <p class="tilecaption"><i class="fas fa-users fa-2x"></i></p>
                                                <p class="tilecaption2">Kunnec Social</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-4">
                        <div class="k_me-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal8">
                                                <p class="tilecaption6"><i class="fas fa-user fa-2x"></i></p>
                                                <p class="tilecaption9">Kunnec to Me</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-4">
                            <div class="k_shop-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal9">
                                                <p class="tilecaption6"><i class="fas fa-gifts fa-2x"></i></p>
                                                <p class="tilecaption9">Kunnec Shop</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-8">
                        <div class="k_community-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal10">
                                                <p class="tilecaption"><i class="fas fa-podcast fa-2x"></i></p>
                                                <p class="tilecaption2">Kunnec Pod</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End of the Row -->

                <div class="row">
                    <div class="col-sm-12 col-xs-4">
                        <div class="k_screen-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal17">
                                                <p class="tilecaption3"><i class="fas fa-tv fa-4x"></i></p>
                                                <p class="tilecaption4">Kunnec Screen</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End of the Row -->

                <div class="row pb-4">
                    <div class="col-sm-2 col-xs-4">
                        <div class="k_show-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal11">
                                                <p class="tilecaption6"><i class="fas fa-film fa-2x"></i></p>
                                                <p class="tilecaption9">Kunnec Show</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-4">
                        <div class="k_course-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal12">
                                                <p class="tilecaption6"><i class="fas fa-graduation-cap fa-2x"></i></p>
                                                <p class="tilecaption10">Kunnec Course</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-4">
                        <div class="k_vid-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal13">
                                                <p class="tilecaption6"><i class="fas fa-video fa-2x"></i></p>
                                                <p class="tilecaption9">Kunnec Vid</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-4">
                        <div class="k_you-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal14">
                                                <p class="tilecaption6"><i class="fas fa-user-friends fa-2x"></i></p>
                                                <p class="tilecaption11">Kunnec to You</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-4">
                        <div class="k_music-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal15">
                                                <p class="tilecaption6"><i class="fas fa-music fa-2x"></i></p>
                                                <p class="tilecaption9">Kunnec Music</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 col-xs-4">
                        <div class="k_books-image">
                            <div id="tile" class="tile cursor-pointer">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div data-toggle="modal" data-target="#portfolioModal16">
                                                <p class="tilecaption6"><i class="fas fa-book fa-2x"></i></p>
                                                <p class="tilecaption9">Kunnec Books</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="style12">

                <div class="row pb-4">
                    <div class="col-sm-4">
                        <div class="pricing-table" >
                            <h3 class="pricing-title text-uppercase" style="background-color: #C70039;">free trial</h3>
                            <div class="price">14<sup>/ days</sup>
                            </div>
                            <ul class="table-list p-0">
                                <li class="p-1">Full Access Entire Site</li>
                                <li class="pl-3 pr-3 text-center">After 14 days, your account will be charged the monthly fee until the account is cancelled.</li>
                                <li class="p-1">We have a countdown reminder.</li>
                                <li class="p-1"><span class="unlimited">Cancel Anytime</span></li>
                            </ul>
                            <div class="table-buy">
                                <a href="{{ route('register') }}" class="pricing-action text-uppercase">sign up</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="pricing-table recommended ">
                            <h3 class="pricing-title">Best Value</h3>
                            <div class="price">$74.99<sup>/ yr.</sup>
                            </div>
                            <ul class="table-list p-0">
                                <li class="p-1">Full Access Entire Site</li>
                                <li class="pl-3 pr-3 text-center">After a year, your account will be charged a yearly fee until you cancel or change your account.</li>
                                <li class="p-1">We have a countdown reminder.</li>
                                <li class="p-1"><span class="unlimited">Cancel Anytime</span></li>
                            </ul>
                            <div class="table-buy">
                                <a href="{{ route('register') }}" class="pricing-action text-uppercase">sign up</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="pricing-table ">
                            <h3 class="pricing-title">Monthly</h3>
                            <div class="price">$7.99<sup>/ mos.</sup>
                            </div>
                            <ul class="table-list p-0">
                                <li class="p-1">Full Access Entire Site</li>
                                <li class="pl-3 pr-3 text-center">After a month, your account will be charged a monthly fee until the account is cancelled.</li>
                                <li class="p-1">We have a countdown reminder.</li>
                                <li class="p-1"><span class="unlimited">Cancel Anytime</span></li>
                            </ul>
                            <div class="table-buy">
                                <a href="{{ route('register') }}" class="pricing-action">SIGN UP</a>
                            </div>
                        </div>
                    </div>
                </div><!-- End of Last Row-->
            </div><!-- End of Dynamic Tiles -->
        </div><!-- End of Container-->
    </div><!-- End of Sky -->

    <!-- Footer -->
    <footer>
        <ul class="ter_pri">
            <li data-toggle="modal" data-target="#tmModal">Terms</li>
            <li> | </li>
            <li data-toggle="modal" data-target="#pvcModal">Privacy Policy</li>
            <li> | </li>
            <li data-toggle="modal" data-target="#adModal">K-Ads</li>
        </ul>
        <div class="copyright_k">Kunnec &copy; <?php echo date("Y"); ?></div>
    </footer>

    <!-- Terms Modal  -->
    <div class="modal fade" id="tmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle">Terms</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body">
                        ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Privacy Modal  -->
    <div class="modal fade" id="pvcModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle">Privacy Policy</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec Ads -->
    <div class="modal fade" id="adModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle">K-Ads</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    ---
                </div>
                <div class="modal-footer nav justify-content-center">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal About -->
    <div class="modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-x5" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> About</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                    <p class="mb-5">Kunnec.com is a combination of many applications. We value your privacy and freedom of speech. Kunnec.com is NOT FREE. We charge a monthly or yearly fee to pay for the servers and the functionality of the site to provide you excellent internet service. No need to worry about advertisers collecting your personal data. What's yours is yours!  </p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Your Data -->
    <div class="modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Your Data</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                    <p class="mb-5">The data you upload, belongs to you. We do have guidelines that are specified in our terms of agreement about the specification of the data uploaded. Please read our terms. Your data will be deleted from our site, once your account is closed. We have a notification message in the top toolbar of you kunnec account, to inform you how many days are left in your account. The day before your account ends, we will send you a notification email explaining all your data will be deleted from our site. If you choose a monthly plan, your data will remain for that month. To continue having your data posted, you must re-new your plan. If you choose a yearly plan, your data will remain for that year. To continue having your data posted, you must re-new your plan before your expiration date.</p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Alerts -->
    <div class="modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Alerts</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                        <p class="mb-5">On your toolbar and sidebar, for each application, there will be a red icon, with a number, showing how many notifications you have. For credits, the icon will be green with a number showing. In the top tool bar of your account, there will a countdown notification, informing you of how many days left, before your account deletes.</p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Modal Payments -->
    <div class="modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Payments</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                    <p class="mb-5">The first seven days of your account is free. Any time during the seven days, you can cancel your account and you will not be charged. Your account will be deleted. After, the seven days, your account will be charged based on the monthly or yearly plan you selected. The charge will begin on the seventh day after your free trial is completed. This will be your official sign up date. There is not a grace period. There will be a countdown of days left on your account in the top toolbar. You will receive an invoice email verifying your payment. This will be sent to the email you signed up with.</p>
                    <p class="mb-5"><strong>PAYOUTS:</strong> All payouts will be based on the credits you have accumulated for the month. Pay periods are on a calendar twelve month basis. Kunnec will payout on the 25th day, from the ending of the previous months credit totals.</p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Modal Credits -->
    <div class="modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Credits</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                    <p class="mb-5"><strong>CREDITS:</strong> Kunnec does not keep financial information, so transactions that involve money exchanges from one user to another, we keep track of the financial transactions with credits.<p class="mb-5"></p>
                    <p class="mb-5"><strong>CREDIT VALUE:</strong> Each credit is twenty ( 20 ) cents in value.</br> <font color="1672C4"><strong> Five ( 5 ) credits = one ( $1.00 ) dollar amount.</strong></font></br> You can purchase credits, when you sign up, from the left side-bar of your account, under the credits icon. The lowest limit of credits to purchase, is 25 credits ( $5.00 ) and the highest limit of credits to purchase, is 500 credits ( $100 ).</p>
                    <p class="mb-5"><strong>SEND CREDITS:</strong> You can only send credits to users who are your kunnec. There is no limit to the amount of credits you can send to another user.
                    <p class="mb-5"><strong>CREDIT FLOW:</strong> On your credit page, credit pay outs or credits to be received are kept for you, by the day, month, and year on what the credits are for.This is made easy with charts, so you can see what your spending credits on or help you with running your business, to see where your being affective with your services</strong></p>
                    <p class="mb-5"><strong>CREDIT PAYOUT:</strong> With Kunnec Screen, Kunnec Show, Kunnec Course, and Kunnec Music, you set the credit price for your services. The credits you received from different users is by the purchase, the day, the month, and year. This is setup for you in several drop down menus. Kunnec is not responsible for any of your taxes due to your city,state, or country. These drop down menus can be used for keeping account of your income for tax purposes.</p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Language -->
    <div class="modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle">Language</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                    <!-- <img class="mx-auto d-block" src="images/toolbar.png" alt=""  /> -->
                    <p class="mb-5"><strong>Translate:</strong> In the top toolbar, there is a google translate drop down menu. Select the language you want to use and the entire site changes to that language. Also, with the translate box, you can use this to communicate with anyone of a different language, by switching back to your language.</p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec Social -->
    <div class="modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-labelledby="portfolioModal7Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Social</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong> Under this a section, you can stay connected with everyone. You can post images, speak about yourself, and scroll through your feed of your kunnecs.</p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec to Me -->
    <div class="modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-labelledby="portfolioModal8Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec to Me</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong>Post what you need help with or your looking for. Select the caategory. Write out what you need completed. The time frame you feel it will take. Tell if your willing to pay for a users services. Recieve messages from users who want to kunnec with you. Also, you can search through other users who have posted in Kunnec to Me, using category, country,state,city, and pay. </p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec Shop -->
    <div class="modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-labelledby="portfolioModal9Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Shop</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong>Post what ever you need to sell. Post images of your merchandise. Have users contact you through your Kunnec Shop messages or post your contact information. Also, you can search through other users who have posted in Kunnec to Me, using category, country,state,city, and pay.</p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec Pod -->
    <div class="modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-labelledby="portfolioModal10Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Pod</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong>Create your own podcast show. Just Record your podcast episode and upload and your ready to go. </p>
                    <p class="mb-5"><strong>Podcast Price:</strong> You set your credit price for your podcast. </p>
                    <p class="mb-5"><strong>Payment:</strong> Podcast operators get money directly deposited into their payment account, twenty-five ( 25 ) days after the ending month. You can monitor your payments under the Kunnec Podcast section for tax purposes. Your payment information is collected for you by category, day, month, and year.<p class="mb-5"><strong><font color="009900">Kunnec receives 15% of the total payment and the Podcast Operator receives 85%.</font></strong></p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec Screen -->
    <div class="modal fade" id="portfolioModal17" tabindex="-1" role="dialog" aria-labelledby="portfolioModal17Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Screen</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                    <p class="mb-5"><strong>Works with Google Chrome, Mozilla Firefox, and Microsoft Edge browsers. It does not function on Safari Browsers.</strong></p>
                    <p class="mb-5"><strong><font color="red">Must have a second Monitor for the best results.</font></strong><br/>Use Kunnec Screen to be a Tutor ( freelancer, designer, etc ) or Recorder ( video editor, music editor ) all in real time. Go one on one with a user live. Your student will be able to see and hear you with camera and microphone ability. They can follow along to what your doing off your desktop. That's right your desktop. <strong>Kunnec Screen captures, Windows desktops, Apple Desktops, and Chromebook desktops.</strong> Just select the desktop view option and they can watch you work while you interact with the user. Using the Kunnec Screen option is best used with a second monitor. With the second monitor, you select the second desktop and the flow is smooth. You are able to send files back and forth between one another. Kunnec Screen users can be rated and reviewed. Users can select by the category they want realtime help in.</p>
                    <p class="mb-5"><strong>Kunnec Screen Price:</strong> You set your credit price. You can set the payment by the minute or by the hour. When a user selects an hour with a Kunnec Screen tutor or recorder, there is a 60 minute countdown posted in the top left corner.<strong><font color="red"> If dis-connected before the hour time is completed. </font></strong> No worries. Just log back into your Kunnec Screen users class page and your time ( countdown ) will begin from the time of dis-connection. If the user doesn't log back in after 15 minutes, the user will be charged the entire hour credit price.</p>
                    <p class="mb-5"><strong>Payment:</strong> Kunnec Screen users get money directly deposited into their payment account, twenty-five ( 25 ) days after the ending month. You can monitor your payments under the Kunnec Screen section for tax purposes. Your payment information is collected for you by category, day, month, and year.<p class="mb-5"><strong><font color="009900">Kunnec receives 15% of total payment and the Kunnec Screen users receives 85%.</font></strong></p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec Show -->
    <div class="modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-labelledby="portfolioModal11Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Show</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong>Go live and users can watch for a credit price. Just select a category you want your show in and start streaming. The shows can be rated and reviewed.</p>
                    <p class="mb-5"><strong>Show Price:</strong> You set your credit price. You set the payment by the minute. Their is a timer in the left corner, to show the user, how long the show has been. </p>
                    <p class="mb-5"><strong>Settings:</strong> When setting up your show, you must select a category and if the show is for mature audiences.
                    <p class="mb-5"><strong>Payment:</strong> Show performers get money directly deposited into their payment account, twenty-five ( 25 ) days after the ending month. You can monitor your payments under the Kunnec Show section for tax purposes. Your payment information is collected for you by category, day, month, and year.<p class="mb-5"><strong><font color="009900">Kunnec receives 15% of total payment and the Show performers receive 85%.</font></strong></p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec Course -->
    <div class="modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-labelledby="portfolioModal12Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Course</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong>Set up your own training course. Just select a category you want your course in and upload your videos. Post your experience, qualifications, language of course, and select the category you will be instructing. .</p>
                    <p class="mb-5"><strong>Course Price:</strong> You set your credit price for your course </p>
                    <p class="mb-5"><strong>Payment:</strong> Course Instructors get money directly deposited into their payment account, twenty-five ( 25 ) days after the ending month. You can monitor your payments under the Kunnec Course section for tax purposes. Your payment information is collected for you by category, day, month, and year.<p class="mb-5"><strong><font color="009900">Kunnec receives 15% of total payment and the Course Instructors receive 85%.</font></strong></p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec Vid -->
    <div class="modal fade" id="portfolioModal13" tabindex="-1" role="dialog" aria-labelledby="portfolioModal13Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Vid</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong>This is a video sharing platform for the users. Select the category, choose a few keywords and upload your videos to your channel.</p>
                    <p class="mb-5"><strong>Ads:</strong> Ads are banner ads and commercial ads, played during a users video. Select the category of your videos, select the rating your channel is rated for,so your ad is specific to your channel. <strong>Banner Ads:</strong> Can be selected to be added to your video, where it will be posted at the bottom of your video the entire time. If a user clicks the banner ad, this money is added to your Kunnec Vid account. <strong>Video Ads:</strong> Can be added to your video. Gives you the option for users to skip the ad after 10 seconds ( <font color="red">the user must watch 20 seconds for money to be aaded to your kunnec vid account</font> ) or play the entire ad, where the money is added to your Kunnec Vid account.</p>
                    <p class="mb-5"><strong>Payment:</strong> Channel publishers get money directly deposited into their payment account, twenty-five ( 25 ) days after the ending month. You can monitor your payments under the Kunnec Vid section for tax purposes. Your payment information is collected for you by category, day, month, and year.<p class="mb-5"><strong><font color="009900">Kunnec receives 15% of total payment and the Channel Publisher receive 85%.</font></strong></p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec to You -->
    <div class="modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec to You</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong>Create a user page, where you can showcase your skills and talents, and have users search for you. Just select a category where you fit and post. Users can leave ratings and reviews.</p>
                    <p class="mb-5"><strong>Options:</strong> You can add an image portfolio, videos, music, a store to sell your items, a background about your experience, and a calendar so users can make an appointment to see if your available for service. </p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec Music -->
    <div class="modal fade" id="portfolioModal15" tabindex="-1" role="dialog" aria-labelledby="portfolioModal15Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Music</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong> This is a music sharing platform for the users. Select the genre, choose a few keywords and upload your music. Music must have meta data or the system won't allow you to upload. Must be in MP3 format. You can create singles or albums. Users can create playlists and purchase music. Music can be rated and reviewed. All songs, for purchase, created by the artist, can be purchased for one ( 1 ) credit. Producers of beats can determine the credit price for the beat they have created.</p>
                    <p class="mb-5"><strong>Videos:</strong> You can add music videos to your platform. You also, can add K-Ads to your video. </p>
                    <p class="mb-5"><strong>Genres:</strong> All music posted is in genres. Users can search through music by genre, country, state, and city. </p>
                    <p class="mb-5"><strong>Radio:</strong> You can select to be apart of the radio program. Kunnec does not control this, nor do we charge or pay to be apart of this program. The users control this prograsm by what they play, purchase and rate. The percentage calculation is based on plays, purchases and ratings, which determine your position. Your position determines if your played on the radio playlist. Each genre has a radio playlist and you can select all by by default, or genre, country,state and city. Your song in the playlist, has a link so users can purchase your song or go to your platform. </p>
                    <p class="mb-5"><strong>Producers:</strong> Creators of beats can also upload their beats to be purchased by genre. Ranking is based on plays and ratings. Users can also search for producers by genre, country,state, and city.
                    <p class="mb-5"><strong>Samples:</strong> Sample clearances is handled by the user who uploads the music, beat, or vocals. Kunnec has no involvement in this process. When uploading a song or a beat, you will receive a pop-up asking does this song have a sample in the composition, yes or no. If you answer yes, you will be asked to accept our terms for uploading and stating you take all legal responsibility for uploading this work. You must click the accept button to upload or you will not be allowed to upload your composition. </p>
                    <p class="mb-5"><strong>Payment:</strong> Artists and Music Producers get money directly deposited into their payment account, twenty-five ( 25 ) days after the ending month. You can monitor your payments under the Kunnec Music section for tax purposes. Your payment information is collected for you by category, day, month, and year.<p class="mb-5"><strong><font color="009900">Kunnec receives 15% of total payment and the Music creator of the song or the producer of the beat, receives 85%.</font></strong></p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kunnec Books -->
    <div class="modal fade" id="portfolioModal16" tabindex="-1" role="dialog" aria-labelledby="portfolioModal16Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Books</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="images/k_intro.mp4" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong> Kunnec Books is easy to use. Just set up a pdf the way you want your pages with illustrations and table of contents, along with an index and upload to kunnec books section and you are ready to go. Place your book in the category you want, set the language and set your price. Then let Kunnec.com do the rest. It's that easy.</p>
                    <p class="mb-5"><strong>Book Price:</strong> You set your credit price for your Book </p>
                    <p class="mb-5"><strong>Payment:</strong> Author's of books get money directly deposited into their payment account, twenty-five ( 25 ) days after the ending month. You can monitor your payments under the Kunnec Books section for tax purposes. Your payment information is collected for you by category, day, month, and year.<p class="mb-5"><strong><font color="009900">Kunnec receives 15% of total payment and the book author's receive 85%.</font></strong></p><p class="mb-5"><strong></strong>Create a user page, where you can showcase your skills and talents, and have users search for you. Just select a category where you fit and post. Users can leave ratings and reviews.</p>
                    <p class="mb-5"><strong>Options:</strong> You can add an image portfolio, videos, music, a store to sell your items, a background about your experience, and a calendar so users can make an appointment to see if your available for service. </p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('additional-js')
@endsection