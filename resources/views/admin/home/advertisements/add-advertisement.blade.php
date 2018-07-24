@extends('admin.home.master')

@section('body')
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form class="form-horizontal" method="post" action="{{route('store-advertisement')}}" enctype="multipart/form-data">
        @csrf
        <fieldset>


            <style>
                .form-group{
                    padding-top: 20px;
                    padding-bottom: 20px;
                }
            </style>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="type">Title</label>
                <div class="col-md-4">
                    <input type="text" id="property_title" name="property_title" class="form-control">
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="type">Select Property Type</label>
                <div class="col-md-4">
                    <select id="type" name="type" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="location">Location</label>
                <div class="col-md-4">
                    <input id="location" name="location" type="text" placeholder="" class="form-control input-md" required="">
                    <span class="help-block">ex: Dhaka</span>
                </div>

            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="location">Email</label>
                <div class="col-md-4">
                    <input id="location" name="email" type="email" placeholder="" class="form-control input-md" required="">
                    <span class="help-block">ex: Dhaka</span>
                </div>
                </div>




            <div class="form-group">
                <label class="col-md-4 control-label" for="location">Phone Number</label>
                <div class="col-md-4">
                    <input id="location" name="phone_number" type="text" placeholder="" class="form-control input-md" required="">
                    <span class="help-block">ex: Dhaka</span>
                </div>

            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="short_details">Very Short Details</label>
                <div class="col-md-4">
                    <textarea class="form-control"  name="short_details" >ex: only size of the room</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="type">Price/Rent</label>
                <div class="col-md-4">
                    <input type="text" id="property_cost" name="property_cost" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="type">Ad type</label>
                <div class="col-md-4">
                    <input type="radio" name="ad_type" value="rent" checked> Rent<br>
                    <input type="radio" name="ad_type" value="sell"> Sell<br>

                </div>
            </div>




            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="details">Details</label>
                <div class="col-md-4">
                    <textarea class="form-control"  name="details" id="editor">Enter Details</textarea>
                </div>
            </div>



            <div class="form-group">
                <label class="col-md-4 control-label" for="image" >Main Image</label>

                <div class="col-md-4">
                    <input id="" name="property_image" type="file" placeholder="" class="form-control input-md" required="" onchange="loadFile(event)" accept="image/*" >
                    <img id="output" height="100px" width="100px"/>
                </div>
                </div>


                <div class="form-group">
                <label class="col-md-4 control-label " for="image" >Sub Images</label>
                   <div class="col-md-4">
                    <input id="" name="sub_images[]" type="file" placeholder="" multiple class="form-control input-md " required="" accept="image/*" >

                </div>
                </div>



            <div class="form-group">

                <div class=" col-md-4 col-md-offset-4" >
                    <button type="submit" name="btn" value="Submit" class="btn-success btn-block btn">Submit</button>
                </div>
            </div>

        </fieldset>
        <script>
            var loadFile = function(event) {
                var reader = new FileReader();
                reader.onload = function(){
                    var output = document.getElementById('output');
                    output.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            };
        </script>

    </form>
    <script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>

@endsection
