@extends('admin.master')
@section('admin')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Users List</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Back</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic Tables start -->
            <!-- Hoverable rows start -->
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Users List</h4>
                            <button class="dt-button add-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in"><span>Add New User</span></button>
                        </div>
                        <div class="card-body">
                            
                        </div>
                        <div class="table-responsive">
                            
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $user)
                                        <tr>
                                            
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    @php
                                                        $id = Crypt::encryptString($user->id);
                                                    @endphp
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item handler_open" href="javascript:;" data-href="{{ route('users.edit', $id)}}"   >
                                                            <i data-feather="edit-2" class="me-50"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i data-feather="trash" class="me-50"></i>
                                                            <span>Block</span>
                                                        </a>

                                                        <a class="dropdown-item" href="#" style="display: none;">
                                                            <i data-feather="trash" class="me-50"></i>
                                                            <span>Unblock</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                    
                                </tbody>
                            </table>
                        </div>

                         <!-- Modal to add new user starts-->
                         <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                            <div class="modal-dialog">
                                <form class="add-new-user modal-content pt-0" action="{{route('other.user.store')}}" method="POST">
                                    @csrf
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                            <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="Name" name="name" />
                                        </div>
                                    
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-email">Email</label>
                                            <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="Email" name="email" />
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-contact">phone</label>
                                            <input type="text" id="basic-icon-default-contact" class="form-control dt-contact" placeholder="Phone" name="phone" />
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-company">Password</label>
                                            <input type="password" id="basic-icon-default-company" class="form-control dt-contact" placeholder="........" name="password" />
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary me-1 data-submit">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                        <!-- Modal to add Edit user starts-->
                        <div class="modal modal-slide-in handler_modal fade" id="modals-slide-in">
                            
                        </div>
                        <!-- Modal to add new user Ends-->
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
  
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