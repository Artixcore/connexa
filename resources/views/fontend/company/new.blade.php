@extends('fontend.meta')

@section('content')

<style>

.register{
    background: transparent;
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
 
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    padding: 2%;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>


<div class="container register">
                <div class="row">
                    {{-- <div class="col-md-3 register-left">
                      
                        <h1 style="color:#000000;">Create your Company</h1>
                    
                    </div> --}}
                    <div class="col-md-9 register-right">
                   
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Create your Company</h3>
                                <form action="{{ url('CrateNewCompany') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="company_name" placeholder="Company Name*" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="company_location" placeholder="Location*" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="company_from" placeholder="Start From*" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="company_phone" placeholder="Company Phone*" value="" />
                                        </div>
                                      <div class="form-group">
                                            <input type="email" class="form-control" name="company_email" placeholder="Official Email *" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                           <input type="file" name="company_avatar" class="form-control-file">
                                        </div>
                                        
                                       <div class="form-group">
                                           <input type="file" name="company_avatar" class="form-control-file">
                                        </div>

                                        <div class="form-group">
                                            <textarea type="text" class="form-control" name="company_desc" placeholder="Description about your Company*"></textarea>
                                        </div>
                                        <input type="submit" class="btn btn-success btnRegister"  value="Create Company"/>
                                    </div>
                                </div>
                           </form>
                            </div>
                         
                        </div>
                    </div>
                </div>

            </div>

       
@endsection