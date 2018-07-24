@extends('admin.home.master')


@section('title')
    Manage Advertisement
    @endsection




@section('body')

    <div class="container">
        <div class="row">


                @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif


<div class="col-md-6 mx-auto col-md-offset-1" >

                <table class="table-primary table-responsive table-bordered">
                    <tr>
                        <th>Query no.</th>
                        <th>Advertisement id</th>
                        <th>Property Type</th>
                        <th>Property Location</th>
                        <th>Property Details</th>
                        <th>Property Image</th>
                        <th>Manage</th>
                    </tr>


                    @php($i = 1)
                    @foreach($advertisements as $advertisement)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{ $advertisement->id}}</td>
                            <td>{{ $advertisement->type}}</td>
                            <td>{{ $advertisement->location}}</td>
                            <td>{{ $advertisement->details}}</td>
                            <td> <img src="{{ $advertisement->property_image}}" alt="" height="115px" width="110px"></td>
                            <td>
                                <a href="#" title="Delete" onclick="if(confirm('Do you really want to delete this Advertisement')){
                                        document.getElementById('delete-advertisement-input').value='{{$advertisement->id}}';
                                        document.getElementById('delete-advertisement-form').submit();
                                        }">
                                    Delete
                                </a>

                                <a href="{{route('edit-advertisements', [$advertisement->id])}}" title="Edit"  >
                                    Edit
                                </a>

                            </td>
                        </tr>
                    @endforeach


                    <form method="post" action="{{route('delete-advertisement')}}" id="delete-advertisement-form">
                        @csrf
                        <input type="hidden" id="delete-advertisement-input" name="id"/>
                    </form>

                    {{--<form  method="post" action="{{route('edit-advertisements')}}" id="edit-advertisement-form">--}}
                    {{--@csrf--}}
                    {{--<input type="hidden" id="edit-advertisement-input" name="id"/>--}}
                    {{--</form>--}}

                </table>

</div>

            </div>

        </div>


    </div>
@endsection