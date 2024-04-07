@extends('mainlayout')
@section('content')
    <div style="margin-top: -100px">
        <div class="p-0 m-0" style="height: 100vh; position:relative;">
            <img src="{{asset('images/isla1.jpg')}}" alt="Family Net" height="100%" width="100%">
            <div class="dimmer"></div>

            <div class="d-flex justify-content-center align-items-center" style="position: absolute;height:100%;width:100%;top:0;">
                <div class="form_div">
                    <form class="text-light p-5 border rounded">
                        <h3 class="text-center mb-5">APPLICATION FORM</h3>
                        <div class="mb-3">
                          <label for="name" class="form-label">Full name</label>
                          <input type="text" class="form-control" >
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
                
            </div>
            
        </div>
    </div>
        




@endsection