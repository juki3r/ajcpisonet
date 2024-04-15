@extends('mainlayout')
@section('content')
    {{-- <div style="margin-top: -100px" class="container">
        
    </div> --}}
<div class="container-fluid p-0" style="margin-top:-100px">
    <div class="" style="height: 100vh; position:relative;">
        <img src="{{asset('images/images.jpg')}}" alt="Family Net" height="100%" width="100%">
        <div class="dimmer_apply"></div>
        <div class="d-flex justify-content-center align-items-center" style="position: absolute;height:100%;width:100%;top:0;">
            <div class="form_div">
                <form action="" class="text-light p-5 rounded">
                    @csrf
                    <h3 class="text-center mb-5">APPLICATION FORM</h3>
                    <div class="mb-2">
                      <label for="name" class="form-label">Full name</label>
                      <input type="text" class="form-control text-warning"  style="background-color:rgba(255, 255, 255, 0.2); text-transform: capitalize;">
                    </div>
                    <div class="mb-2">
                        <label for="phone" class="form-label">Phone number</label>
                        <input type="number" class="form-control text-warning"  style="background-color:rgba(255, 255, 255, 0.2); text-transform: capitalize;">
                    </div>
                    <div class="mb-2">
                        <label for="address" class="form-label">Complete address</label>
                        <input type="text"  class="form-control text-warning"  style="background-color:rgba(255, 255, 255, 0.2); text-transform: capitalize;">
                    </div>
                    <div class="mb-2">
                        <label for="plan" class="form-label">Internet plan</label>
                        <select name="internet-plan"  class="form-control text-warning"  style="background-color:rgba(255, 255, 255, 0.2); text-transform: capitalize;">
                            <option value="Choose internet plan" class="text-dark bg-warning"></option>
                            <option value="800" class="text-dark bg-warning">800</option>
                            <option value="1000" class="text-dark bg-warning">1000</option>
                            <option value="1300" class="text-dark bg-warning">1300</option>
                            <option value="1500" class="text-dark bg-warning">1500</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning mt-3">Submit</button>
                  </form>
            </div>
        </div>  
    </div>
</div>
@include('footer')  
@endsection
