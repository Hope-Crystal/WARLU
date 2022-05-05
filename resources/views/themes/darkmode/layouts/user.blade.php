<!DOCTYPE html>
<html lang="en" @if(session()->get('rtl') == 1) dir="rtl" @endif >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials.seo')
    <link rel="stylesheet" type="text/css" href="{{asset($themeTrue.'css/bootstrap.min.css')}}"/>
    @stack('css-lib')
    <link rel="stylesheet" type="text/css" href="{{asset($themeTrue.'css/line-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset($themeTrue.'css/nice-select.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset($themeTrue.'css/owl.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset($themeTrue.'css/main.css')}}"/>
    <!-- <link rel="stylesheet" type="text/css" href="{{asset($themeTrue.'css/icons.css')}}"/> -->
    <link rel="stylesheet" type="text/css" href="{{asset($themeTrue.'css/animate.css')}}"/>
    @stack('style')
</head>

<body>

<div class="loader">
    <div class="loader-inner">
        <div class="loader-line-wrap">
            <div class="loader-line"></div>
        </div>
        <div class="loader-line-wrap">
            <div class="loader-line"></div>
        </div>
        <div class="loader-line-wrap">
            <div class="loader-line"></div>
        </div>
        <div class="loader-line-wrap">
            <div class="loader-line"></div>
        </div>
        <div class="loader-line-wrap">
            <div class="loader-line"></div>
        </div>
        <br> <br> <br>

        <img src="{{getFile(config('location.logoIcon.path').'logo.png')}}" alt="logo" style="width: 90px; margin-top:-230px;">
    </div>
</div>


<audio id="myNotify">
    <source src="{{asset('assets/admin/css/notify.mp3')}}" type="audio/mpeg">
</audio>

<!--=======Header=======-->


  <!--Start sidebar-wrapper-->
  <div id="wrapper1">
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">

 <div class="brand-logo">
     <a  href="https://warlu.co/">
     <img src="{{getFile(config('location.logoIcon.path').'logo.png')}}" alt="logo" style="width: 90px;">
       <!-- <h5 class="logo-text">Warlu</h5> -->
     </a>

      </div>
   <ul class="sidebar-menu do-nicescrol container">
      <!-- <li class="sidebar-header">NAVIGATION</li> -->

      <li class="ml-20 push-notification " id="pushNotificationArea" >
                        <div class="dropdown account-dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0)"  role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="rotate-icon">
                                    <i class="lar la-bell"></i>
                                </span>
                                <span class="badge"  v-cloak>@{{items.length}}</span>
                            </a>
                            <div class="xs-dropdown-menu dropdown-menu dropdown-right">
                                <div class="dropdown-content scrolling-iv">

                                    <a v-for="(item, index) in items" @click.prevent="readAt(item.id, item.description.link)"  href="javascript:void(0)" class="dropdown-item">
                                        <div class="media align-items-center">
                                            <div class="media-icon">
                                                <i :class="item.description.icon" ></i>
                                            </div>
                                            <div class="media-body ml-15">
                                                <h6 class="font-weight-bold" v-cloak v-html="item.description.text"></h6>
                                                <p v-cloak>@{{ item.formatted_date }}</p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <div class="pt-15 pr-15 pb-15 pl-15 d-flex justify-content-center ">
                                    <a class="btn-viewnotification" href="javascript:void(0)" v-if="items.length == 0">@lang('You have no notifications')</a>
                                    <button class="btn-clear " type="button" v-if="items.length > 0" @click.prevent="readAll">@lang('Clear')</button>
                                </div>
                            </div>
                        </div>
                    </li>

      <!-- <li><a href="https://warlu.co/">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg>    
      
      <span>@lang('Home') </span>    
      </a></li> -->

                    <li>    
                    <a  href="{{route('user.home')}}"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg>    
                    <span style="margin-left: 10px;">@lang('Dashboard') </span> </a>
                    </li>
                            <li>
                                <a href="{{route('user.makeEscrow')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet-fill" viewBox="0 0 16 16">
  <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542.637 0 .987-.254 1.194-.542.226-.314.306-.705.306-.958a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M16 6.5h-5.551a2.678 2.678 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5c-.963 0-1.613-.412-2.006-.958A2.679 2.679 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6z"/>
</svg>
                                <span style="margin-left: 10px;">@lang('New Transaction') </span>    
                                </a>
                            </li>
                            <li>
                                <a href="{{route('user.myContactList')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
                                <span style="margin-left: 10px;">{{trans('Add Transaction Partner')}} </span>     
                                </a>
                            </li>
                            <li>
                                <a href="{{route('user.myEscrow')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg> 
                                <span style="margin-left: 10px;"> {{trans('Transactions Status')}} </span>       
                               </a>
                            </li>

                    <li>
                        <a class="{{menuActive(['user.transaction', 'user.transaction.search'])}}" href="{{route('user.transaction')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
  <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
</svg>
                         <span style="margin-left: 10px;">@lang('Transactions') </span>       
                        
                        </a>
                    </li>

                    <li>
                            <li>
                                <a class="{{menuActive(['user.addFund', 'user.addFund.confirm'])}}" href="{{route('user.addFund')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
</svg>
                                <span style="margin-left: 10px;"> @lang('Fund Account') </span>       
                                
                                
                               </a>
                            </li>

                            <li>
                                <a class="{{menuActive(['user.fund-history', 'user.fund-history.search'])}}" href="{{route('user.fund-history')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
</svg>
                                <span style="margin-left: 10px;"> @lang('Fund Logs') </span>       
                                
                               </a>
                            </li>

                    <li>
  
                            <li>
                                <a class="{{menuActive(['user.payout.money','user.payout.preview'])}}" href="{{route('user.payout.money')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1z"/>
</svg> 
                                <span style="margin-left: 10px;">  @lang('Payout Now')</a> </span>       
                                  
                            </li>
                            <li>
                                <a class="{{menuActive(['user.payout.history','payout.history.search'])}}" href="{{route('user.payout.history')}}">
                                    
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
  <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
  <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z"/>
</svg> 
                                <span style="margin-left: 10px;">  @lang('Payout Logs')</a></span>   
                            </li>
                            <li style="    background: #eef0f8; border-left-color: #d600db;">   
                                     <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"> 
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>  
                                  <span style="color: #000; margin-left:5px">  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                             </form> {{trans('Logout') }}</span>  </a>
                            </li>

    </ul>
   
   </div>
   <!--End sidebar-wrapper-->


  <!--- Start topbar header -->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
   <a href="{{route('home')}}">
     <img src="{{getFile(config('location.logoIcon.path').'logo.png')}}" alt="logo" style="width: 90px; z-index:99999">
     </a> 




     <div id="sidebar-wrapperr" data-simplebar="" data-simplebar-auto-hide="true">
  <ul class="sidebar-menu do-nicescrol container">

     <!-- <li class="sidebar-header">NAVIGATION</li> -->

     <!-- <li><a href="https://warlu.co/">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
 <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
 <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg>    
     
     <span>@lang('Home') </span>    
     </a></li> -->

                   <li>    
                   <a  href="{{route('user.home')}}"> 
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
 <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
 <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg>    
                   <span style="margin-left: 10px;"> </span> </a>
                   </li>
                           <li>
                               <a href="{{route('user.makeEscrow')}}">
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet-fill" viewBox="0 0 16 16">
 <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542.637 0 .987-.254 1.194-.542.226-.314.306-.705.306-.958a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2h-13z"/>
 <path d="M16 6.5h-5.551a2.678 2.678 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5c-.963 0-1.613-.412-2.006-.958A2.679 2.679 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6z"/>
</svg>
                               <span style="margin-left: 10px;"></span>    
                               </a>
                           </li>
                           <li>
                               <a href="{{route('user.myContactList')}}">
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
 <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
 <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
                               <span style="margin-left: 10px;"></span>     
                               </a>
                           </li>
                           <li>
                               <a href="{{route('user.myEscrow')}}">
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
 <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
 <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
 <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg> 
                               <span style="margin-left: 10px;"></span>       
                              </a>
                           </li>

                   <li>
                       <a class="{{menuActive(['user.transaction', 'user.transaction.search'])}}" href="{{route('user.transaction')}}">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
 <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
</svg>
                        <span style="margin-left: 10px;"></span>       
                       
                       </a>
                   </li>

                   <li>
                           <li>
                               <a class="{{menuActive(['user.addFund', 'user.addFund.confirm'])}}" href="{{route('user.addFund')}}">
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
 <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
</svg>
                               <span style="margin-left: 10px;"> </span>       
                               
                               
                              </a>
                           </li>

                           <li>
                               <a class="{{menuActive(['user.fund-history', 'user.fund-history.search'])}}" href="{{route('user.fund-history')}}">
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
 <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
 <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
 <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
 <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
</svg>
                               <span style="margin-left: 10px;"> </span>       
                               
                              </a>
                           </li>

                   <li>
 
                           <li>
                               <a class="{{menuActive(['user.payout.money','user.payout.preview'])}}" href="{{route('user.payout.money')}}">
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
 <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1z"/>
</svg> 
                               <span style="margin-left: 10px;"></a> </span>       
                                 
                           </li>
                           <li>
                               <a class="{{menuActive(['user.payout.history','payout.history.search'])}}" href="{{route('user.payout.history')}}">
                                   
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
 <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
 <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z"/>
</svg> 
                               <span style="margin-left: 10px;"></a></span>   
                           </li>
                           <li style="    background: #eef0f8; border-left-color: #d600db;">   
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"> 
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
 <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
 <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>  
                                 <span style="color: #000; margin-left:5px">  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                               @csrf
                            </form></span>  </a>
                           </li>

   </ul>
  
  </div>














     <li class="nav-item burger" style="margin-left: 20px;">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon">   </i>
       <i class="las la-bars menu-icon"  style="font-weight: 1000px; font-size:30px;"></i>
     </a>
    </li>
  
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Warlu.co" ">
         <a href="#"><i class="icon-magnifier"></i></a>
      </form>
    </li> 

  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">

  <span class="hi" style="font-size: 13px; color:#3f4254; font-weight:bold">
  
   <span style="color:#b5b5c3"> Hi, </span> <?php echo "$user->username" ?> </span>  

    


    <li class="nav-item">
    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#" style="margin-top: 27px;">
        <span class="user-profile"> <img id="image_preview_container" class="preview-image max-width-200"
        src="{{getFile(config('location.user.path').$user->image)}}"
                                             alt="preview image"> <br>
                                            </span>  
                                            <svg style="color: #d600db; margin-left:12px; margin-top:-10px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg>
                                            <!-- <i style="color: #d600db; margin-left:12px; margin-top:-10px" class="las la-caret-down"></i> -->
      </a>
     
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{getFile(config('location.user.path').$user->image)}}"
                                             alt="preview image" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?php echo " $user->username" ?></h6>
            <p class="user-subtitle"> <?php echo " $user->email" ?>   </p>
            </div>
           </div>
          </a>
        </li>


    <li>
       <a class=" dropdown-item {{menuActive(['user.ticket.list', 'user.ticket.create', 'user.ticket.view'])}}" href="{{route('user.ticket.list')}}"> 
         <i class="las la-file-invoice"></i> <span> @lang('Support Ticket')</a>  </span>
    </li>    
    <li class="dropdown-divider"></li>

    <li class="dropdown-item">  
         <a href=" {{route('user.twostep.security')}}"> <i style="color: #000;" class="las la-shield-alt"></i><span style="color: #000"> @lang('2FA Security') </span></a> 
    </li>    
    <li class="dropdown-divider"></li>        
    <li>                   
    <a class=" dropdown-item {{menuActive(['user.profile'])}}" href="{{ route('user.profile') }}"> <i class="las la-user-alt"></i> <span> @lang('Profile Settings') </span> </a>
    </li>
    <li class="dropdown-divider"></li>                    
     <li class="dropdown-item" style="background-color: #8c03b2; color:#fff;">   <a href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();"> <i style="color: #000;" class="las la-door-open mr-2"></i>  <span style="color: #000;">  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
 @csrf
    </form> {{trans('Logout') }}</span>  </a>
     </li>
      </ul>
    </li>



 
    <li class="transaction" style="background-color: #8c03b2; padding-top:5px; padding-bottom:5px; padding-left:4px; padding-right:4px; border-radius:5px; color:#fff;">
        <a href="{{route('user.makeEscrow')}}">
          <span style="color: #fff ; font-size:12px; font-weight:500;">@lang('New Transaction') </span>    
         </a>
    </li>


  </ul>
</nav>
</header>

<!--Start topbar header-->
   <!--End sidebar-wrapper-->

<!---
<header>
    <div class="container">
        <div class="header__wrapper">
            <div class="left__side">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{getFile(config('location.logoIcon.path').'logo.png')}}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="right__side">
                <ul class="menu">
      
                     <li><a href="{{route('home')}}">@lang('Home')</a></li> 

                    <li><a href="https://warlu.co/">@lang('Home')</a></li>

                    <li><a  href="{{route('user.home')}}">@lang('Dashboard')</a></li>

                    <li>
                        <a href="javascript:void(0)">{{trans('Escrow')}}</a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('user.makeEscrow')}}">@lang('Make Escrow')</a>
                            </li>
                            <li>
                                <a href="{{route('user.myContactList')}}">{{trans('Add Your Contact')}}</a>
                            </li>
                            <li>
                                <a href="{{route('user.myEscrow')}}">{{trans('My Escrow')}}</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="{{menuActive(['user.transaction', 'user.transaction.search'])}}" href="{{route('user.transaction')}}">@lang('Transaction')</a>
                    </li>

                    <li>
                        <a href="javascript:void(0)">@lang('Fund')</a>
                        <ul class="submenu">
                            <li>
                                <a class="{{menuActive(['user.addFund', 'user.addFund.confirm'])}}" href="{{route('user.addFund')}}">@lang('Add Fund')</a>
                            </li>

                            <li>
                                <a class="{{menuActive(['user.fund-history', 'user.fund-history.search'])}}" href="{{route('user.fund-history')}}">@lang('Fund Log')</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)">@lang('Payout')</a>
                        <ul class="submenu">
                            <li>
                                <a class="{{menuActive(['user.payout.money','user.payout.preview'])}}" href="{{route('user.payout.money')}}">@lang('Payout Now')</a>
                            </li>
                            <li>
                                <a class="{{menuActive(['user.payout.history','payout.history.search'])}}" href="{{route('user.payout.history')}}">@lang('Payout Log')</a>
                            </li>
                        </ul>
                    </li>


                <li>
                        <a href="javascript:void(0)">{{trans('My Profile')}}</a>
                        <ul class="submenu">
                            <li>
                                <a class="{{menuActive(['user.profile'])}}" href="{{ route('user.profile') }}">@lang('Profile Settings')</a>
                            </li>

                            <li>
                                <a class="{{menuActive(['user.ticket.list', 'user.ticket.create', 'user.ticket.view'])}}"
                                   href="{{route('user.ticket.list')}}">@lang('Support Ticket')</a>
                            </li>

                            <li>
                                <a href="{{route('user.twostep.security')}}">@lang('2FA Security')</a>
                            </li>

                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{trans('Logout') }}</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>
                    </li>
                </ul>
                <div class="header-bar d-md-none me-2">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="account">

                <ul class="d-flex ml-20">
                    <li class="ml-20 push-notification " id="pushNotificationArea" >
                        <div class="dropdown account-dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0)"  role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="rotate-icon">
                                    <i class="lar la-bell"></i>
                                </span>
                                <span class="badge"  v-cloak>@{{items.length}}</span>
                            </a>
                            <div class="xs-dropdown-menu dropdown-menu dropdown-right">
                                <div class="dropdown-content scrolling-iv">

                                    <a v-for="(item, index) in items" @click.prevent="readAt(item.id, item.description.link)"  href="javascript:void(0)" class="dropdown-item">
                                        <div class="media align-items-center">
                                            <div class="media-icon">
                                                <i :class="item.description.icon" ></i>
                                            </div>
                                            <div class="media-body ml-15">
                                                <h6 class="font-weight-bold" v-cloak v-html="item.description.text"></h6>
                                                <p v-cloak>@{{ item.formatted_date }}</p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <div class="pt-15 pr-15 pb-15 pl-15 d-flex justify-content-center ">
                                    <a class="btn-viewnotification" href="javascript:void(0)" v-if="items.length == 0">@lang('You have no notifications')</a>
                                    <button class="btn-clear " type="button" v-if="items.length > 0" @click.prevent="readAll">@lang('Clear')</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                </div>


            </div>
        </div>
    </div>
</header>
<!--=======Header=======-->
	<!--start overlay-->
    <div class="overlay1 toggle-menu"></div>
		<!--end overlay-->
		
</div>
</div>


@yield('content')


@include($theme.'partials.footer')


@stack('loadModal')



<script src="{{asset($themeTrue.'js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset($themeTrue.'js/popper.min.js')}}"></script>

<script src="{{asset($themeTrue.'js/bootstrap.min.js')}}"></script>
<script src="{{asset($themeTrue.'js/bootstrap.js')}}"></script>
@stack('extra-js')
<script src="{{asset($themeTrue.'js/notiflix-aio-2.7.0.min.js')}}"></script>

<script src="{{asset($themeTrue.'js/nice-select.js')}}"></script>
<script src="{{asset($themeTrue.'js/owl.min.js')}}"></script>
<script src="{{asset($themeTrue.'js/pusher.min.js')}}"></script>
<script src="{{asset($themeTrue.'js/vue.min.js')}}"></script>
<script src="{{asset($themeTrue.'js/axios.min.js')}}"></script>

<script src="{{asset($themeTrue.'js/main.js')}}"></script>

<script src="{{asset($themeTrue.'js/sidebar-menu.js')}}"></script>
<script src="{{asset($themeTrue.'js/app-script.js')}}"></script>

<script src="{{asset($themeTrue.'js/index.js')}}"></script>


@auth
    <script>
        'use strict';
        let pushNotificationArea = new Vue({
            el: "#pushNotificationArea",
            data: {
                items: [],
            },
            beforeMount() {
                this.getNotifications();
                this.pushNewItem();
            },
            methods: {
                getNotifications() {
                    let app = this;
                    axios.get("{{ route('user.push.notification.show') }}")
                        .then(function (res) {
                            console.log(res.data)
                            app.items = res.data;
                        })
                },
                readAt(id, link) {
                    let app = this;
                    let url = "{{ route('user.push.notification.readAt', 0) }}";
                    url = url.replace(/.$/, id);
                    axios.get(url)
                        .then(function (res) {
                            if (res.status) {
                                app.getNotifications();
                                if (link != '#') {
                                    window.location.href = link
                                }
                            }
                        })
                },
                readAll() {
                    let app = this;
                    let url = "{{ route('user.push.notification.readAll') }}";
                    axios.get(url)
                        .then(function (res) {
                            if (res.status) {
                                app.items = [];
                            }
                        })
                },
                pushNewItem() {
                    let app = this;
                    // Pusher.logToConsole = true;
                    let pusher = new Pusher("{{ env('PUSHER_APP_KEY') }}", {
                        encrypted: true,
                        cluster: "{{ env('PUSHER_APP_CLUSTER') }}"
                    });
                    let channel = pusher.subscribe('user-notification.' + "{{ Auth::id() }}");
                    channel.bind('App\\Events\\UserNotification', function (data) {
                        app.items.unshift(data.message);

                        var x = document.getElementById("myNotify");
                        x.play();

                    });
                    channel.bind('App\\Events\\UpdateUserNotification', function (data) {
                        app.getNotifications();
                    });
                }
            }
        });
    </script>
@endauth

@stack('script')
@if (session()->has('success'))
    <script>
        Notiflix.Notify.Success("@lang(session('success'))");
    </script>
@endif

@if (session()->has('error'))
    <script>
        Notiflix.Notify.Failure("@lang(session('error'))");
    </script>
@endif

@if (session()->has('warning'))
    <script>
        Notiflix.Notify.Warning("@lang(session('warning'))");
    </script>
@endif

<script>
    $(document).ready(function () {
        $(".language").find("select").change(function () {
            window.location.href = "{{route('language')}}/" + $(this).val()
        })
    })
</script>


</body>
</html>
