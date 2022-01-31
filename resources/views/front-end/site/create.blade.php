@extends('front-end.layouts.app')
@section('content')

<!--=================================
Signin -->
<section class="space-ptb bg-light" style="padding:40px 0px">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="section-title text-center">
        <h2 style="color:#8b4e9f">Site Detail</h2>
       </div>
      </div>
    </div>
  </div>
</section>
<section class="space-ptb">
    <div class="container">
        <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
                <form class="mt-4" id="form">

                    @csrf
                    <div class="row">
                    <div class="mb-3 col-12">
                        <div class="my-custom-text-field">
                        <input type="text" class="my-custom-input" name="name">
                        <label class="my-custom-label">Site Name</label>
                        </div>
                    </div>
                    <div class="mb-3 col-12">
                        <div class="my-custom-text-field">
                        <input type="text" class="my-custom-input" name="address">
                        <label class="my-custom-label">Site Address</label>
                        </div>
                    </div>
                    <div class="mb-3 col-12">
                        <div class="my-custom-text-field">
                        <input type="number" class="my-custom-input" name="postalCode" >
                        <label class="my-custom-label">Site Postal Zip/Code</label>
                        </div>
                    </div>
                    <div class="mb-3 col-12">
                        <div class="my-custom-text-field">
                        <input type="text" class="my-custom-input" name="city">
                        <label class="my-custom-label">City</label>
                        </div>
                    </div>
                    <div class="mb-3 col-6">
                        <div class="my-custom-text-field">
                        <input type="number" class="my-custom-input" name="longitude">
                        <label class="my-custom-label">Site Latitude</label>
                        </div>
                    </div>
                    <div class="mb-3 col-6">
                        <div class="my-custom-text-field">
                        <input type="number" class="my-custom-input" name="latitude">
                        <label class="my-custom-label">Site longitude</label>
                        </div>
                    </div>
                        <div class="mb-3 col-6">
                        <div class="my-custom-text-field">
                        <input type="date" name="startDate" class="my-custom-input" >
                        <label class="my-custom-label" >Start Date</label>
                        </div>
                    </div>
                    <div class="mb-3 col-6">
                        <div class="my-custom-text-field">
                        <input type="date" class="my-custom-input" name="finishDate">
                        <label class="my-custom-label">Finish Date</label>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ob-btn-login">
                            <button class="btn btn-primary " >Save</button>
                        </div>

                    </div>
                </form>

                <div class="ob-sign-margin-top mt-md-0 forgot-pass ob-sign-link-href">
                      <p class="mt-1"><i class="fa fa-arrow-left"></i><a onclick="history.back()"> Back</a></p>
                    </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
Signin -->

@endsection

@section('js')
    <script>
        $(document).ready(function (){
            $('#form').validate({
                rules: {
                    name:{
                        required:true,
                    },
                    address:{
                        required:true,
                    },
                    city:{
                        required:true,
                    },
                    startDate:{
                        required:true,
                    },
                    finishDate:{
                        required:true,
                    },
                    postalCode:{
                        required:true,
                        number:true
                    },
                    longitude:{
                        required:true,
                        number:true
                    },
                    latitude:{
                        required:true,
                        number:true
                    },
                },
                messages: {
                    name:'Name is required',
                    phoneNumber:'Phone Number is required',
                    password:'Password is required',
                    address:'Address is required',
                    country:'Country is required',
                    city:'City is required',
                    postalCode:'Postal Code is required',
                },
            });

            $('#form').on('submit', function (e) {
                e.preventDefault();
                // check if the input is valid using a 'valid' property
                if (!$('#form').valid() ) {
                    return false;
                }
                $.ajax({
                    type: 'POST',
                    url: "{{url('company/sites/store')}}",
                    data: new FormData(this),
                    contentType: false,
                    data_type: 'json',
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        loader();
                    },
                    success: function (response) {

                        swal.close();
                        console.log(response)
                        alertMsg(response.message, response['status']);
                        // }


                    },
                    error: function (xhr, error, status) {
                        // console.log(xhr.responseJSON.errors.name[0])
                        swal.close();
                        var response = xhr.responseJSON;
                        // alertMsg(response.message, 'error');
                        alertMsg(response.message, 'error');
                    }
                });
            });
        })
    </script>
@endsection