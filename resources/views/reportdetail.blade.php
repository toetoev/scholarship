@extends('admin')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Applied user detail</h3>
                                        
                                        <p>Name  - {{$detail->username}}</p>
                                        <p>Email -
                                        {{$detail->mail}}
                                        </p>
                                        <p>Phone - 
                                        {{$detail->phone}}
                                        </p> 
                                        <p>Applied to - 
                                        {{$detail->uname}}
                                        </p>    
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Applied List Detail</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="custom-tab">
                            
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home"
                                                     aria-selected="true">Applied User</a>
                                                    <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile"
                                                     aria-selected="false">University</a>
                                                </div>
                                            </nav>
                                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                                    <h4 class="my-1">User Information</h4>
                                                    <img src="asset({{$detail->userphoto}})">
                                                    
                                                    
                                                        <p class="d-inline-block mr-3">Name </p>
                                                   
                                                       <span> :{{$detail->username}}</span>
                                                    </p>
                            
                            
                            
                                                    <p>Email :{{$detail->mail}}</p>
                                                    <p>DOB :{{$detail->DOB}}</p>
                                                    <p>Gender :{{$detail->gender}}</p>
                                                    
                                                    <p>User photo :{{$detail->userattach}}</p>
                                                </div>
                                                <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth
                                                        master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh
                                                        dreamcatcher synth. Cosby sweater eu banh mi, irure terry richardson ex sd. Alip placeat salvia cillum iphone.
                                                        Seitan alip s cardigan american apparel, butcher voluptate nisi .</p>
                                                </div>
                                                <div class="tab-pane fade" id="custom-nav-contact" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth
                                                        master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh
                                                        dreamcatcher synth. Cosby sweater eu banh mi, irure terry richardson ex sd. Alip placeat salvia cillum iphone.
                                                        Seitan alip s cardigan american apparel, butcher voluptate nisi .</p>
                                                </div>
                                            </div>
                            
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                    </div>
                </div>
            </div>
@endsection
