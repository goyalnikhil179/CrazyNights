@extends('layouts.DashBoard')

@section('maincontent')
<div class="row m-5 no-gutters shadow-lg">
       <div class="col-md-6 d-none d-md-block">
             <img src="{{asset('assets/Login-blue.png')}}" class="img-fluid" style="min-height:80%;" />
       </div>
        <div class="col-md-6 bg-white p-5">
                  <h3 class="pb-3">Admin Login</h3>
          <div class="form-style">
            <form name="Adminloginform" id="Adminloginform" action="{{route('submitAdminLoginPage')}}" method="Post">
                @csrf
                <div class="form-group pb-3">  
                @if($errors->any())
                    <span class="text-danger">
                        @error('CommonErr')
                            {{$message}}
                        @enderror
                    </span>
                 @endif
                </div>

               <div class="form-group pb-3">    
                  <label for="AdminID" class="pb-3"></label>
                  <input type="Text" id="AdminID" name="AdminID" value="{{old('AdminID')}}"placeholder="Enter Admin ID" class="form-control"  >   
                  @if($errors->any())
                    <span class="text-danger">
                        @error('AdminID')
                            {{$message}}
                        @enderror
                    </span>
                 @endif
               </div>
               <div class="form-group pb-3">   
               <label for="AdminPassword"></label>
                  <input type="password" id="AdminPassword" name="AdminPassword"  value="{{old('AdminPassword')}}" placeholder="Enter Password" class="form-control" >
                  @if($errors->any())
                  <span class="text-danger">
                       @error('AdminPassword')
                       {{$message}}
                       @enderror
                  </span>
                  @endif
               </div>
            <!-- <div class="d-flex align-items-center justify-content-between"> -->
               <div class="pb-2">
                   <button type="submit" for="Adminloginform" id="Adminloginformsubmitbtn" class="btn btn-primary w-100 font-weight-bold mt-2">Log In</button>
               </div> 
               
             
            
            <div class="sideline">OR</div>
             <div class="pb-2">
               <a  href="" class="btn btn-dark w-100 font-weight-bold mt-2">Forget Password</a>
            </div>
           </form>
         </div>
</div>
</div>
@section('AdminLoginPagejs')
<script>
  $(document).ready(function() {
    $('#Adminloginformsubmitbtn').click(function(e) {
        e.preventDefault();
        var form = $('#Adminloginform'); 
        form.validate({
            rules: {
                AdminID: {
                    required: true,
                    minlength: 2
                },
                AdminPassword: {
                    required: true,
                    minlength: 2
                }
            },
            messages: {
                AdminID: {
                    required: "Please Enter Admin ID",
                    minlength: "Please Enter valid Admin ID"
                },
                AdminPassword: {
                    required: "Please Enter Password",
                    minlength: "Please Enter valid Password"
                }
            }
        });
         if (form.valid()==true) {
          $('#Adminloginform').submit();
        }
    });
});
</script>
@endsection
@endsection