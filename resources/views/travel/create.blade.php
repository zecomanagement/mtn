@extends('admin.master_two')
@section('admin')

@section('custom_css')

    
    
    <link rel="stylesheet" type="text/css" href={{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css')}}>
    
@endsection



 <!-- BEGIN: Content-->
 
 <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Application Details</h2>
                        <div class="breadcrumb-wrapper">
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="content-body">
            <!-- Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                
                            </div>
                            <div class="card-body">
                                <form class="form"  action="{{route('travel.store')}}" method="POST">
                                  @csrf
                                    
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="register-username">Name(as per Passport)</label>
                                                <input class="form-control" type="text" name="name" placeholder="Name" aria-describedby="register-username" autofocus="" tabindex="1" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="register-email">Passport Number</label>
                                                <input class="form-control"  type="text" name="passport" placeholder="Passport Number.." aria-describedby="register-email" tabindex="2" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="register-email">Phone Number</label>
                                                <input class="form-control"  type="text" name="mobile" placeholder="0700000000" aria-describedby="register-email" tabindex="2" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="register-email">Email</label>
                                                <input class="form-control"  type="email" name="email" placeholder="mike@example.com" aria-describedby="register-email" tabindex="2" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="register-email">Date of Birth</label>
                                                <input class="form-control"  type="date" name="dob"  aria-describedby="register-email" tabindex="2" />   
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="register-email">Next of Kin's Name</label>
                                                <input class="form-control"  type="text" name="name_nok" placeholder="Name" aria-describedby="register-email" tabindex="2" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="register-email">Next of Kin's Telephone</label>
                                                <input class="form-control"  type="text" name="mobile_nok" placeholder="Mobile" aria-describedby="register-email" tabindex="2" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="register-email">Next of Kin's Address</label>
                                                <input class="form-control"  type="text" name="address_nok" placeholder="Address" aria-describedby="register-email" tabindex="2" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="register-email">Date of Travel</label>
                                                <input class="form-control"  type="date" name="travel_date"  aria-describedby="register-email" tabindex="2" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="register-email">Return Date</label>
                                                <input class="form-control"  type="date" name="return_date"  aria-describedby="register-email" tabindex="2" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="register-email">Country of Departure</label>
                                                <input class="form-control"  type="text" name="departure"  aria-describedby="register-email" tabindex="2" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="register-email">Destination</label>
                                                <input class="form-control"  type="text" name="destination"  aria-describedby="register-email" tabindex="2" />
                                            </div>
                                        </div>
                                        
                                        <div class="card-header">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1">Submit Details</button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Floating Label Form section end -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection

@section('custom_js')
<script type="text/javascript">
    $(document).on('click', '.handler_open', function() {
    $('div.handler_modal').load($(this).data('href'), function() {
        $(this).modal('show');
    });
});
</script> 
@endsection