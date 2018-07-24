@extends('admin.home.master')


@section('title')
    Manage Categories
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
                        <th>Category id</th>
                        <th>Category Name</th>
                       <th>Category Details</th>

                    </tr>


                    @php($i = 1)
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{ $category->id}}</td>
                            <td>{{ $category->category_name}}</td>
                            <td>{{ $category->category_details}}</td>

                            <td>
                                {{--<a href="#" title="Delete" onclick="if(confirm('Do you really want to delete this Advertisement')){--}}
                                        {{--document.getElementById('delete-advertisement-input').value='{{$advertisement->id}}';--}}
                                        {{--document.getElementById('delete-advertisement-form').submit();--}}
                                        {{--}">--}}
                                    Delete
                                </a>

                                {{--<a href="{{route('edit-advertisements', [$advertisement->id])}}" title="Edit"  >--}}
                                    Edit
                                </a>

                            </td>
                        </tr>
                    @endforeach


                    {{--<form method="post" action="{{route('delete-advertisement')}}" id="delete-advertisement-form">--}}
                        {{--@csrf--}}
                        {{--<input type="hidden" id="delete-advertisement-input" name="id"/>--}}
                    {{--</form>--}}

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