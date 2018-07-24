@extends('admin.home.master')

@section('body')
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form class="form-horizontal" method="post" action="{{route('store-categories')}}" >
        @csrf
        <fieldset>


            <style>
                .form-group{
                    padding-top: 20px;
                    padding-bottom: 20px;
                }
            </style

                    <!-- Select Basic -->


            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Category Name</label>
                <div class="col-md-4">
                    <input id="location" name="category_name" type="text" placeholder="" class="form-control input-md" required="">
                    <span class="help-block">ex: Dhaka</span>
                </div>

            </div>



            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="details">Short Description</label>
                <div class="col-md-4">
                    <textarea class="form-control"  name="category_details"> </textarea>
                </div>
            </div>




                <div class="form-group">

                    <div class=" col-md-4 col-md-offset-4" >
                        <button type="submit" name="btn" value="Submit" class="btn-success btn-block btn">Submit</button>
                    </div>
                </div>

        </fieldset>

    </form>

@endsection
