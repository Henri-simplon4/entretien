

<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
      <title>Gestion d'entretien véhicules</title>
      
      <!-- Favicon -->
      <!-- <link rel="shortcut icon" href="../assets/images/favicon.ico" /> -->
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="../assets/css/core/libs.min.css" />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

      <!-- Aos Animation Css -->
      <!-- <link rel="stylesheet" href="../assets/vendor/aos/dist/aos.css" /> -->
      
      <!-- Vrooom Design System Css -->
        <link rel="stylesheet" href="../assets/css/vrooom.min.css?v=1.1.01" />
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="../assets/css/custom.min.css?v=1.1.01" />
  </head>
  <body class="  ">
    <span class="screen-darken backdrop"></span>
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body">
              <div class="positon-relative">
                  <div class="poisition-absolute" style="top: -20px; z-index: 1;">
                  </div>
                  <div class="position-relative iq-loader">
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- loader END -->
    
    <aside class="sidebar sidebar-default sidebar-two navs-pill sidebar-mini">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="#" >
                
                <img src="{{ asset('images/Logomvm.png')}}" alt="" width="70px" height="60px">
                       </a>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="sidebar-list">
                <ul class="navbar-nav iq-main-menu nav nav-tabs" id="sidebar-menu" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#accueil.blade.php" data-sidebar-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                                </svg>
                            </i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-panel " href="#sidebar-users" id="users-pages" data-bs-toggle="tab" data-sidebar-toggle="tooltip" data-bs-placement="right" data-bs-target="#sidebar-users" role="tab" aria-controls="sidebar-users" aria-selected="false" title="Users">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z" fill="currentColor"></path>
                                    <path d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z" fill="currentColor"></path>
                                    <path d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z" fill="currentColor"></path>
                                </svg>
                            </i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://templates.iqonic.design/lite/vroom/html/dist/" data-sidebar-toggle="tooltip" data-bs-placement="right" title="UI Kit">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                
                            <path opacity="0.4" d="M2 11.0786C2.05 13.4166 2.19 17.4156 2.21 17.8566C2.281 18.7996 2.642 19.7526 3.204 20.4246C3.986 21.3676 4.949 21.7886 6.292 21.7886C8.148 21.7986 10.194 21.7986 12.181 21.7986C14.176 21.7986 16.112 21.7986 17.747 21.7886C19.071 21.7886 20.064 21.3566 20.836 20.4246C21.398 19.7526 21.759 18.7896 21.81 17.8566C21.83 17.4856 21.93 13.1446 21.99 11.0786H2Z" fill="currentColor"></path>                                <path d="M11.2451 15.3843V16.6783C11.2451 17.0923 11.5811 17.4283 11.9951 17.4283C12.4091 17.4283 12.7451 17.0923 12.7451 16.6783V15.3843C12.7451 14.9703 12.4091 14.6343 11.9951 14.6343C11.5811 14.6343 11.2451 14.9703 11.2451 15.3843Z" fill="currentColor"></path>                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.211 14.5565C10.111 14.9195 9.762 15.1515 9.384 15.1015C6.833 14.7455 4.395 13.8405 2.337 12.4815C2.126 12.3435 2 12.1075 2 11.8555V8.38949C2 6.28949 3.712 4.58149 5.817 4.58149H7.784C7.972 3.12949 9.202 2.00049 10.704 2.00049H13.286C14.787 2.00049 16.018 3.12949 16.206 4.58149H18.183C20.282 4.58149 21.99 6.28949 21.99 8.38949V11.8555C21.99 12.1075 21.863 12.3425 21.654 12.4815C19.592 13.8465 17.144 14.7555 14.576 15.1105C14.541 15.1155 14.507 15.1175 14.473 15.1175C14.134 15.1175 13.831 14.8885 13.746 14.5525C13.544 13.7565 12.821 13.1995 11.99 13.1995C11.148 13.1995 10.433 13.7445 10.211 14.5565ZM13.286 3.50049H10.704C10.031 3.50049 9.469 3.96049 9.301 4.58149H14.688C14.52 3.96049 13.958 3.50049 13.286 3.50049Z" fill="currentColor">
                            </path></svg> 
                            </i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://templates.iqonic.design/lite/vroom/documentation/html/dist/main/" data-sidebar-toggle="tooltip" data-bs-placement="right" title="Documentation">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07996 6.6499V6.6599C7.64896 6.6599 7.29996 7.0099 7.29996 7.4399C7.29996 7.8699 7.64896 8.2199 8.07996 8.2199H11.069C11.5 8.2199 11.85 7.8699 11.85 7.4289C11.85 6.9999 11.5 6.6499 11.069 6.6499H8.07996ZM15.92 12.7399H8.07996C7.64896 12.7399 7.29996 12.3899 7.29996 11.9599C7.29996 11.5299 7.64896 11.1789 8.07996 11.1789H15.92C16.35 11.1789 16.7 11.5299 16.7 11.9599C16.7 12.3899 16.35 12.7399 15.92 12.7399ZM15.92 17.3099H8.07996C7.77996 17.3499 7.48996 17.1999 7.32996 16.9499C7.16996 16.6899 7.16996 16.3599 7.32996 16.1099C7.48996 15.8499 7.77996 15.7099 8.07996 15.7399H15.92C16.319 15.7799 16.62 16.1199 16.62 16.5299C16.62 16.9289 16.319 17.2699 15.92 17.3099Z" fill="currentColor"></path>
                                </svg>
                            </i>
                        </a>
                    </li>
            </div>
        </ul> 
    </div>
    </aside>
    <!-- Sidebar Menu start                                                                                                                                                                                                                                              -->
    <div class="tab-content sidebar sidebar-default navs-rounded-all  in-active " id="nav-tabContent"> 
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="../dashboard/index.html" class="navbar-brand">
                <!--Logo start-->
                <p><strong>M</strong>on <strong>V</strong>éhicule et <strong>M</strong>oi</p>
                <!--Logo end-->        </a>
            <div class="sidebar-toggle sidebar-icon-close">
                <i class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="tab-pane fade show active" id="sidebar-auths" role="tabpanel" aria-labelledby="auth-pages">
            <div class="sidebar-body">
                <ul class="navbar-nav" id="sidebar-menu-auth">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-auth" role="button" aria-expanded="true" aria-controls="sidebar-menu-auth">
                          
                            <span class="item-name">Authentication</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse show" id="sidebar-auth" data-bs-parent="#sidebar-menu-auth">
                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-pane fade" id="sidebar-users" role="tabpanel" aria-labelledby="users-pages">
            <div class="sidebar-body">
                <ul class="navbar-nav" id="sidebar-menu-users">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-user" role="button" aria-expanded="true" aria-controls="sidebar-menu-users">
                           
                            <span class="item-name">Utilisateurs</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse show" id="sidebar-user" data-bs-parent="#sidebar-menu-users">
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/app/user-list.html">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <span class="item-name">Liste des poprietaires vehicules</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('espaceclient') }}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <span class="item-name">Espace clients</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </div>
    <!-- Sidebar Menu End -->    <main class="main-content">
      <div class="position-relative">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
          <div class="container-fluid navbar-inner">
            <a href="../dashboard/index.html" class="navbar-brand">
                <!--Logo start-->
                <img src="{{ asset('log.png')}}" alt="" width="80px" height="50px">                <!--Logo end-->    </a>
           
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto align-items-center navbar-list mb-2 mb-lg-0">
                 <!-- message -->
                
                <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="">
<i class="fas fa-user" style="color: black;"></i><span class="pl-2" style="color: orange;">{{ Auth::user()->email }}</span>
        </a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{ route('profile.edit') }}" class="dropdown-item" style="text-color: black;">Profil</a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Déconnexion</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
</div>
</li>
              </ul>
            </div>
          </div>
        </nav>        <!--Nav End-->
      </div>
      <div class="conatiner-fluid content-inner mt-5 py-0">
<div class="row">
   <div class="col-lg-12">
        <div class="card card-banner-bg">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="d-flex">
                        <div class="d-flex flex-column justify-content-between p-2 iq-icons-bg rounded-pill me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 16h-2v-2h2v2zm0-4h-2V5h2v9z" fill="red" />
    </svg>
    <svg width="24" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.8719 0.228303C12.0182 0.107702 12.1958 0.0311942 12.384 0.00770332C12.5721 -0.0157876 12.7631 0.0147068 12.9346 0.0956295C13.1061 0.176552 13.251 0.304567 13.3525 0.464742C13.454 0.624917 13.5079 0.810648 13.5078 1.00027V14.9977C13.5078 15.9237 12.3579 16.3527 11.7519 15.6527L8.22802 11.5799C8.0872 11.4173 7.91306 11.2868 7.71741 11.1975C7.52175 11.1081 7.30917 11.0619 7.09407 11.0619H1.50229C0.564328 11.0619 0.142345 9.88592 0.866317 9.28994L11.8719 0.228303Z" fill="#131313"/>
                            </svg>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.90909 5.00003V6.63639H10.3636V8.27276H7.90909L6.27273 9.90912V12.3637H4.63636V9.90912H3V16.4546H4.63636V14H6.27273V16.4546H8.72727L10.3636 18.0909H16.9091V14.8182H18.5455V17.2728H21V9.09094H18.5455V11.5455H16.9091V8.27276H12V6.63639H14.4545V5.00003H7.90909Z" fill="#131313"/>
                            </svg>
                            <svg width="24" height="16" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.4343 10.1167C1.93654 9.54424 0.947266 8.10703 0.947266 6.5036C0.947266 4.90016 1.93654 3.46296 3.4343 2.89047L7.91229 1.17887C8.3026 1.02969 8.73382 1.02745 9.12566 1.17257C9.80145 1.42287 10.25 2.06736 10.25 2.78802V6.53567V10.3036C10.25 11.0408 9.76515 11.6902 9.05835 11.8996C8.70776 12.0035 8.33272 11.989 7.99116 11.8585L3.4343 10.1167Z" fill="#131313"/>
                                <rect x="11.2188" y="2.49377" width="5.90429" height="1" rx="0.5" transform="rotate(16 11.2188 2.49377)" fill="#131313"/>
                                <rect x="11.3105" y="5.74091" width="4.478" height="1" rx="0.5" transform="rotate(16 11.3105 5.74091)" fill="#131313"/>
                                <rect x="11.3613" y="8.95813" width="3.41762" height="1" rx="0.5" transform="rotate(16 11.3613 8.95813)" fill="#131313"/>
                            </svg>
                        </div>
                        <div class="d-flex">
                        <div>
                            <h1 class="fw-bold mb-4 text-light">BIENVENU A Mon Véhicule et Moi</h1>
                            <p class="text-light">Une application qui vous accompagne et que vous devez croire.</p>
                            
                        </div>
                        <div>
                        <!-- <img src="{{ asset('images/Logomvm.png')}}" alt="" width="50px" height="50px" class="mr-5"> -->
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
   </div>
   
        <div class="card">
            <div class="card-body">
                <div class="row d-flex align-items-center pb-3">
                    <div class="col-lg-9">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
      </div>
      <!-- Footer Section Start -->
      <footer class="footer">
          <div class="footer-body">
              <ul class="left-panel list-inline mb-0 p-0">
                  <li class="list-inline-item"><a href="../dashboard/extra/privacy-policy.html">Privacy Policy</a></li>
                  <li class="list-inline-item"><a href="../dashboard/extra/terms-of-service.html">Terms of Use</a></li>
              </ul>
              <div class="right-panel">
                  ©<script>document.write(new Date().getFullYear())</script> Mon Véhicule et Moi, par
                  <span class="text-gray">
                      <svg width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z" fill="currentColor"></path>
                      </svg>
                  </span> par <a href="https://iqonic.design/">Henri</a>.
              </div>
          </div>
      </footer>
      <!-- Footer Section End -->    </main>
    <!-- Wrapper End-->

    <!-- Library Bundle Script -->
    <script src="../assets/js/core/libs.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
    <!-- External Library Bundle Script -->
    <script src="../assets/js/core/external.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
    
    <!-- mapchart Script -->
    <script src="../assets/js/charts/vectore-chart.js"></script>
    <script src="../assets/js/charts/dashboard.js" defer></script>
    
    <!-- fslightbox Script -->
    <script src="../assets/js/plugins/fslightbox.js"></script>
    
    <!-- AOS Animation Plugin-->
    <script src="../assets/vendor/aos/dist/aos.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <!-- App Script -->
    <script src="../assets/js/vrooom.js" defer></script>
  </body>
</html>