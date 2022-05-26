@extends('layoutdashboard')
@section('content')
                <!-- BEGIN: Content -->
                <div class="content">
                    <!-- <div class="grid grid-cols-12 gap-6"> -->
                        <div class="col-span-12 mt-6 -mb-6 intro-y">
                            <div class="alert alert-dismissible show box bg-theme-26 text-white flex items-center mb-6" role="alert">
                                <span>Dashboard /  Home Page </span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x w-4 h-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> </button>
                            </div>
                        </div>
                        <div class="col-span-12 xxl:col-span-9">
                            <!-- <div class="grid grid-cols-12 gap-6"> -->
                                <!-- BEGIN: General Report -->
                                <div class="col-span-12 mt-8">
                                    <div class="intro-y flex items-center h-10">
                                        <h2 class="text-lg font-medium truncate mr-5">
                                            Dashboard
                                        </h2>
                                        <!-- <a href="" class="ml-auto flex items-center text-theme-26 dark:text-theme-33"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a> -->
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-12 intro-y">
                                        <div class="report-box intro-y mt-12 sm:mt-5">
                                            <div class="box sm:flex">
                                                <div class="px-12 py-12 flex flex-col justify-center flex-1">     
                                                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left"></div>
                                                    <div class="px-12 py-12 flex flex-col justify-left flex-1 border-t sm:border-t-0 sm:border-l border-gray-300 dark:border-dark-5 border-dashed">
                                                        <div class="text-gray-600 dark:text-gray-600 items-center">
                                                            <h1 style="font-size: 26px;">
                                                                <center>Welcome to NsonIndia Admin Panel </center>
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: General Report -->
                            <!-- </div> -->
                        </div>
                    <!-- </div> -->
                </div>
                <!-- END: Content -->
@endsection
            