@extends('admin.one_master')
@section('title', 'register')

@section('name')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/vendors/css/vendors.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}>
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/bootstrap.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/bootstrap-extended.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/colors.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/components.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/themes/dark-layout.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/themes/bordered-layout.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/themes/semi-dark-layout.css')}}>

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/plugins/forms/pickers/form-pickadate.css')}}>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href={{asset('backend/assets/css/style.css')}}>
    <!-- END: Custom CSS-->
    
@endsection

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-cover">
                <div class="auth-inner row m-0">
                    <!-- Brand logo--><a class="brand-logo" href="index.html">
                        <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
                            <defs>
                                <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                    <stop stop-color="#000000" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                                <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                    <g id="Group" transform="translate(400.000000, 178.000000)">
                                        <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill: currentColor"></path>
                                        <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                        <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                        <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                        <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <h2 class="brand-text text-primary ms-1">Vuexy</h2>
                    </a>
                    <!-- /Brand logo-->
                    <!-- Left Text-->
                    <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                        <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src={{asset('backend/app-assets/images/pages/register-v2.svg')}} alt="Register V2" /></div>
                    </div>
                    <!-- /Left Text-->
                    <!-- Register-->
                    <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                            <h2 class="card-title fw-bold mb-1">Get your Travel cover Instantly 🚀</h2>
                            <p class="card-text mb-2">Enter Details to Get Cover </p>
                            <form class="auth-register-form mt-2" action="{{route('travel.store')}}" method="POST">
                                @csrf
                                <div class="mb-1">
                                    <label class="form-label" for="register-username">Name(as per Passport)</label>
                                    <input class="form-control" type="text" name="name" placeholder="Name" aria-describedby="register-username" autofocus="" tabindex="1" />
                                </div>
                                
                                <div class="mb-1">
                                    <label class="form-label" for="register-email">Passport Number</label>
                                    <input class="form-control"  type="text" name="passport" placeholder="Passport Number.." aria-describedby="register-email" tabindex="2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="register-email">Phone Number</label>
                                    <input class="form-control"  type="text" name="mobile" placeholder="0700000000" aria-describedby="register-email" tabindex="2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="register-email">Email</label>
                                    <input class="form-control"  type="email" name="email" placeholder="mike@example.com" aria-describedby="register-email" tabindex="2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="register-email">Date of Birth</label>
                                    
                                    <input class="form-control"  type="date" name="dob"  aria-describedby="register-email" tabindex="2" />
                                    
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="register-email">Next of Kin's Name</label>
                                    <input class="form-control"  type="text" name="name_nok" placeholder="Name" aria-describedby="register-email" tabindex="2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="register-email">Next of Kin's Telephone</label>
                                    <input class="form-control"  type="text" name="mobile_nok" placeholder="Mobile" aria-describedby="register-email" tabindex="2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="register-email">Next of Kin's Address</label>
                                    <input class="form-control"  type="text" name="address_nok" placeholder="Address" aria-describedby="register-email" tabindex="2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="register-email">Date of Travel</label>
                                    <input class="form-control"  type="date" name="travel_date"  aria-describedby="register-email" tabindex="2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="register-email">Return Date</label>
                                    <input class="form-control"  type="date" name="return_date"  aria-describedby="register-email" tabindex="2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="register-email">Country of Departure</label>
                                    <input class="form-control"  type="text" name="departure"  aria-describedby="register-email" tabindex="2" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="register-email">Destination</label>
                                    <input class="form-control"  type="text" name="destination"  aria-describedby="register-email" tabindex="2" />
                                </div>
                                
                                <div class="mb-1">
                                    <div class="form-check">
                                        <input class="form-check-input" id="register-privacy-policy" type="checkbox" tabindex="4" />
                                        <label class="form-check-label" for="register-privacy-policy">I agree to<a href="#">&nbsp;privacy policy & terms</a></label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100" tabindex="5">Submit Application</button>
                            </form>
                            
                        </div>
                    </div>
                    <!-- /Register-->
                </div>
            </div>
        </div>
    </div>
</div>

@section('custom_js')
    <!-- BEGIN: Vendor JS-->
    <script src={{asset('backend/app-assets/vendors/js/vendors.min.js')}}></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src={{asset('backend/app-assets/vendors/js/pickers/pickadate/picker.js')}}></script>
    <script src={{asset('backend/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}></script>
    <script src={{asset('backend/app-assets/vendors/js/pickers/pickadate/picker.time.js')}}></script>
    <script src={{asset('backend/app-assets/vendors/js/pickers/pickadate/legacy.js')}}></script>
    <script src={{asset('backend/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src={{asset('backend/app-assets/js/core/app-menu.js')}}></script>
    <script src={{asset('backend/app-assets/js/core/app.js')}}></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src={{asset('backend/app-assets/js/scripts/forms/pickers/form-pickers.js')}}></script>
    <!-- END: Page JS-->
@endsection
@endsection

