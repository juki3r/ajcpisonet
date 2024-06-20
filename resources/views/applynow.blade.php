@extends('mainlayout')
@section('content')
<div class="container-fluid p-0" style="margin-top:-100px">
    <div class="" style="height: 100vh; position:relative;">
        <img src="{{asset('images/images.jpg')}}" alt="Family Net" height="100%" width="100%">
        <div class="dimmer_apply"></div>
        <div class="d-flex flex-column justify-content-center align-items-center" style="position: absolute;height:100%;width:100%;top:0;">
            <div class="form_div mt-3">
                <form action="{{route('applynow_store')}}" method="POST" class="text-light p-5 rounded">
                    @if(session('status'))
                        <div class="alert alert-succes bg-success mb-2 mt-5" style="font-size: 12px">{{session('status')}}</div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger bg-danger mb-2 mt-5" style="font-size: 12px">{{session('status')}}</div>
                    @endif
                    @csrf
                    @method('PUT')
                    <h3 class="text-center mb-5">APPLICATION FORM</h3>
                    <div class="mb-2">
                      <label for="fullname" class="form-label">Full name</label>
                      <input type="text" name="fullname" class="form-control text-light"  style="background-color:black; text-transform: capitalize;" required>
                        @error('fullname')
                            <div class="error text-danger" style="font-size: 14px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="cpnumber" class="form-label">Phone number</label>
                        <input type="number" name="cpnumber" class="form-control text-light"  style="background-color:black; text-transform: capitalize;" required>
                        @error('cpnumber')
                            <div class="error text-danger" style="font-size: 14px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="address" class="form-label">Complete address</label>
                        <input type="text" name="address"  class="form-control text-light"  style="background-color:black; text-transform: capitalize;" required>
                        @error('address')
                            <div class="error text-danger" style="font-size: 14px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="internet_plan" class="form-label">Internet plan</label>
                        <select name="internet_plan"  class="form-control text-light"  style="background-color:black; text-transform: capitalize;" required>
                            <option value="Choose internet plan"></option>
                            <option value="1000" class="text-light">1000</option>
                            <option value="1300" class="text-light">1300</option>
                            <option value="1500" class="text-light">1500</option>
                            <option value="1800" class="text-light">1800</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning mt-3 w-100">Submit</button>
                  </form>
            </div>
        </div>  
    </div>
</div>
@include('footer')  
@endsection
