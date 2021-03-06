@extends('front-end.layouts.app')
@section('content')

<section class="space-ptb">
  <div class="container">
    <div class="row align-items-center">
      <h2 class="title text-center">What are you looking for?</h2>

        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="{{url('company/edit/'.auth()->id())}}" class="category-item p-0">
                    <div class="category-icon mb-3">
                        <img src="{{asset('images/company/dashboard/7--Basic-Profile.png')}}" class="img-responsive" width="60px">
                    </div>
                    <h6 class="ans-category-box-heading">Basic Profile</h6>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="{{route('confidential.create')}}" class="category-item p-0">
                    <div class="category-icon mb-3">
                        <img src="{{asset('images/company/dashboard/8--Confidential-Info.png')}}" class="img-responsive" width="60px">
                    </div>
                    <h6 class="ans-category-box-heading">Confidential</h6>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="{{route('jobs.create')}}" class="category-item p-0">
                    <div class="category-icon mb-3">
                        <img src="{{asset('images/company/dashboard/31--Personal-Details.png')}}" class="img-responsive" width="60px">
                    </div>
                    <h6 class="ans-category-box-heading">Post Job</h6>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="{{url('company/sites/show')}}" class="category-item p-0">
                    <div class="category-icon mb-3">
                        <img src="{{asset('images/company/dashboard/5--Health-Info.png')}}" class="img-responsive" width="60px">
                    </div>
                    <h6 class="ans-category-box-heading">Sites</h6>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="#" class="category-item p-0">
                    <div class="category-icon mb-3">
                        <img src="{{asset('images/company/dashboard/3--Employment-History.png')}}" class="img-responsive" width="60px">
                    </div>
                    <h6 class="ans-category-box-heading">Active Shifts</h6>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="{{url('contact-person/show')}}" class="category-item p-0">
                    <div class="category-icon mb-3">
                        <img src="{{asset('images/company/dashboard/9--Contact-Persons.png')}}" class="img-responsive" width="60px">
                    </div>
                    <h6 class="ans-category-box-heading">Contact Persons</h6>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="{{route('document.index')}}" class="category-item p-0">
                    <div class="category-icon mb-3">
                        <img src="{{asset('images/company/dashboard/10--Documents.png')}}" class="img-responsive" width="60px">
                    </div>
                    <h6 class="ans-category-box-heading">Documents</h6>
                </a>
            </div>
        </div>
        <!--<div class="col-lg-3 col-md-4 col-6 text-center mb-3">-->
        <!--    <div class="ans-category-item pt-3">-->
        <!--        <a href="#" class="category-item p-0">-->
        <!--            <div class="category-icon mb-3">-->
        <!--            <i class="flaticon-list"></i>-->
        <!--            </div>-->
        <!--            <h6 class="ans-category-box-heading">Notes</h6>-->
        <!--        </a>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="#" class="category-item p-0">
                    <div class="category-icon mb-3">
                        <img src="{{asset('images/company/dashboard/11--Update-Password.png')}}" class="img-responsive" width="60px">
                    </div>
                    <h6 class="ans-category-box-heading">Change Password</h6>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 text-center mb-3">
            <div class="ans-category-item pt-3">
                <a href="#" class="category-item p-0">
                    <div class="category-icon mb-3">
                        <img src="{{asset('images/company/dashboard/12-Sign-Out.png')}}" class="img-responsive" width="60px">
                    </div>
                    <h6>
                    <form action="{{route('logout')}}" method="POST" id="logout_form">
                    @csrf
                    <button class="dropdown-item" type="submit" id="logout">Sign Out</button>
                    </form>
                    </h6>
                </a>
            </div>
        </div>
    </div>

  </div>
</section>
@endsection
