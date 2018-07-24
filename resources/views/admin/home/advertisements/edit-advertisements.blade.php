@extends('admin.home.master')


@section('title')
    @endsection



@section('body')


    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <style>
        .form-group{
            padding-top: 20px;
            padding-bottom: 20px;
        }
    </style>

    <form style="padding-top: 100px" class="form-horizontal" method="post" action="{{route('update-advertisements')}}">
        @csrf
        <fieldset>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="type">Select Property Type</label>
                <div class="col-md-4">
                    <select id="type" name="type" class="form-control" >
                        <option  selected="selected" value="{{$advertisement->type}}">{{$advertisement->type}}</option>
                        <option value="Apartments and Flats">Apartments &amp; Flats</option>
                        <option value="Plots &amp; Land">Plots &amp; Land</option>
                        <option value="Rooms">Rooms</option>
                    </select>
                </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="location">Location</label>
                <div class="col-md-4">
                    <input id="location" name="location" type="text" placeholder="" class="form-control input-md" required="" value="{{$advertisement->location}}">
                    <input id="advertisement_id" name="advertisement_id" type="hidden" placeholder="" class="form-control input-md" required="" value="{{$advertisement->id}}">
                    <span class="help-block">ex: Dhaka</span>
                </div>

            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="details">Details</label>
                <div class="col-md-4">
                    <textarea class="form-control" name="details"  rows="6" id="editor">{{$advertisement->details}}</textarea>
                </div>
            </div>


            <div class="form-group">

                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" name="btn" value="Submit" class="btn-success btn-block btn">Submit</button>
                </div>
            </div>

        </fieldset>
    </form>




    </div>
    </body>


@endsection
