@extends('mainlayout')
@section('title', 'AJC-Apply')
@section('content')

    <div class="container-fluid p-0">
        <div class="row d-flex justify-content-center py-3">
            <div class="row p-0 m-md-1">
                <div class="m-auto col-12 col-md-10 col-lg-6 my-md-2">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form action="{{ route('applynowPOST') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-10 m-auto p-4 border rounded shadow">
                            <h3 class="text-center mb-5">Application Form</h3>
                            <div class="col">
                                <Label class="text-body-secondary ">Personal Details :</Label>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                                    <input type="text" name="firstname" class="form-control" placeholder="First Name"
                                        style="text-transform:capitalize" />
                                    <small class="px-2">Firstname</small>
                                    <x-input-error :messages="$errors->apply->get('firstname')" class="mt-2 text-danger" />
                                </div>
                                <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                                    <input type="text" name="middlename" class="form-control" placeholder="Middle Name"
                                        style="text-transform:capitalize" />
                                    <small class="px-2">Middlename</small>
                                    <x-input-error :messages="$errors->apply->get('middlename')" class="mt-2 " />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                                    <input type="text" name="lastname" class="form-control" placeholder="Last Name"
                                        style="text-transform:capitalize" />
                                    <small class="px-2">Lastname</small>
                                    <x-input-error :messages="$errors->apply->get('lastname')" class="mt-2 " />
                                </div>
                                <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                                    <input type="text" name="contact" class="form-control"
                                        placeholder="Contact Number" />
                                    <small class="px-2">Contact</small>
                                    <x-input-error :messages="$errors->apply->get('contact')" class="mt-2 " />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-12 mt-md-1 p-1">
                                    <input type="date" name="birthday" id="birthday" class="form-control"
                                        placeholder="Birthday" />
                                    <small class="px-2">Birthday</small>
                                    <x-input-error :messages="$errors->apply->get('birthday')" class="mt-2 " />
                                </div>
                                <div class="col-lg-4 col-md-12 mt-md-1 p-1">
                                    <select class="form-control" name="gender">
                                        <option value="">Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                    <small class="px-2">Gender</small>
                                    <x-input-error :messages="$errors->apply->get('gender')" class="mt-2 " />
                                </div>
                                <div class="col-lg-4 col-md-12 mt-md-1 p-1">
                                    <select class="form-control" name="plan">
                                        <option value="">Choose plan</option>
                                        <option value="899">899</option>
                                        <option value="1000">1000</option>
                                        <option value="1300">1300</option>
                                        <option value="1500">1500</option>
                                    </select>
                                    <small class="px-2">Internet Plan</small>
                                    <x-input-error :messages="$errors->apply->get('plan')" class="mt-2 " />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mt-md-1 p-1">
                                    <input type="text" name="email" class="form-control" placeholder="Email Address" />
                                    <small class="px-2">Email address</small>
                                    <x-input-error :messages="$errors->apply->get('email')" class="mt-2 " />
                                </div>
                            </div>
                            <div class="col">
                                <label class="text-body-secondary">Installation Address:</label>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                                    <input type="text" name="street" class="form-control"
                                        placeholder="Street/Zone/Purok" style="text-transform:capitalize" />
                                    <small class="px-2">Street</small>
                                    <x-input-error :messages="$errors->apply->get('street')" class="mt-2 " />
                                </div>
                                <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                                    <input type="text" name="barangay" class="form-control" placeholder="Barangay"
                                        style="text-transform:capitalize" />
                                    <small class="px-2">Barangay</small>
                                    <x-input-error :messages="$errors->apply->get('barangay')" class="mt-2 " />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                                    <input type="text" name="town" class="form-control"
                                        placeholder="Town/District/Municipality" style="text-transform:capitalize" />
                                    <small class="px-2">Town/District/Municipality</small>
                                    <x-input-error :messages="$errors->apply->get('town')" class="mt-2 " />
                                </div>
                                <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                                    <input type="text" name="province" class="form-control" placeholder="Province"
                                        style="text-transform:capitalize" />
                                    <small class="px-2">Province</small>
                                    <x-input-error :messages="$errors->apply->get('province')" class="mt-2 " />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mt-md-1 p-1">
                                    <input type="text" name="landmark" class="form-control" placeholder="Landmark"
                                        style="text-transform:capitalize" />
                                    <small class="px-2">Landmark</small>
                                    <x-input-error :messages="$errors->apply->get('landmark')" class="mt-2 " />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                                    <label for="uploadid" class="ms-2 text-body-secondary">Valid ID</label>
                                    <input type="file" accept="image/" capture name="uploadid"
                                        class="form-control text-body-secondary" placeholder="Upload ID" />
                                    <x-input-error :messages="$errors->apply->get('uploadid')" class="mt-2 " />
                                </div>
                                <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                                    <label for="idselfie" class="ms-2 text-body-secondary">Selfie with ID</label>
                                    <input type="file" accept="image/" capture name="idselfie"
                                        class="form-control text-body-secondary" placeholder="Upload ID" />
                                    <x-input-error :messages="$errors->apply->get('idselfie')" class="mt-2 " />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                                    <a href="/" type="button"
                                        class="form-control btn btn-danger text-danger">Cancel</a>
                                </div>
                                <div class="col-lg-6 col-md-12 mt-md-1 p-1">
                                    <button type="submit" class="form-control btn btn-primary text-dark">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>


        <div class="col-12 col-md-12 col-lg-6 plan2 my-md-2">
            <div class="row my-lg-5">
                <div class="col col-md-2"><span></span></div>
                <div class="promo-card col-12 col-md-12 col-lg-4 text-center px-md-0 p-lg-2 m-1">
                    <div class="card card_2 h-100">
                        <div class="card-body text-black shadow rounded">
                        <a href="{{ route('20mbps') }}">
                        <h5 class="card-title fw-bold">Exclusive Offer!</h5>
                        <h3 class="card-text fs-1 fw-bolder">20 Mbps</h3>
                        <p class="card-text fs-3">Fiber Unli Plan 899</p>
                        </a>
                        </div>
                    </div>
                </div>

                <div class="promo-card col-12 col-md-12 col-lg-4 text-center p-lg-2 px-md-0 m-1">
                    <div class="card card_2 h-100">
                        <div class="card-body text-black shadow rounded">
                        <a href="{{ route('30mbps') }}">
                        <h5 class="card-title fw-bold">Exclusive Offer!</h5>
                        <h3 class="card-text fs-1 fw-bolder">30Mbps</h3>
                        <p class="card-text fs-3">Fiber Unli Plan 1000</p>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-2"><span></span></div>
            </div>

                    <div class="row my-lg-5">
                        <div class="col col-md-2"><span></span></div>
                        <div class=" col-12 col-md-12 col-lg-4 text-center p-lg-2 px-md-0 m-1">
                            <div class=" h-100 p-3 shadow rounded">
                                <div class=" text-black rounded py-3">
                                    <a href="{{ route('50mbps') }}">
                                        <h5 class="card-title fw-bold">Exclusive Offer!</h5>
                                        <h3 class="card-text fs-1 fw-bolder">50Mbps</h3>
                                        <p class="card-text fs-3">Fiber Unli Plan 1300</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=" col-12 col-md-12 col-lg-4 text-center p-lg-2 px-md-0 m-1">
                            <div class=" h-100 p-3 shadow rounded ">
                                <div class=" text-black  rounded py-3">
                                    <a href="{{ route('100mbps') }}">
                                        <h5 class="card-title fw-bold">Exclusive Offer!</h5>
                                        <h3 class="card-text fs-1 fw-bolder">100Mbps</h3>
                                        <p class="card-text fs-3">Fiber Unli Plan 1500</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-2"><span></span></div>
                    </div>
                </div>

    </div>
</div>
@endsection
