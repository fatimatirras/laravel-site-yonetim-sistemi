@extends('layouts.admin')

@section('title','FAQ List')

@section('content')

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin_home') }}">Home</a></li>
                <li class="breadcrumb-item active">Faq  </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-12">
        <div>
            <h4>FAQs</h4>
        </div>
        <div class="card">
            <div class="card-header">
                <a  href="{{route('admin_faq_add')}}" type="submit" class="btn btn-primary">Add Faq</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class=" text-primary">

                        <tr>
                            <th><b>Id</b></th>
                            <th><b>Position</b></th>
                            <th><b>Question</b></th>
                            <th><b>Answer</b></th>
                            <th><b>Status</b></th>
                            <th><b>Edit</b></th>
                            <th><b>Delete</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td>
                                    {{$rs->id}}
                                </td>
                                <td>
                                    {{$rs->position}}
                                </td>
                                <td>
                                    {{$rs->question}}
                                </td>
                                <td>
                                    {!! $rs->answer !!}
                                </td>
                                <td>
                                    {{$rs->status}}
                                </td>
                                <td>
                                    <a href="{{route('admin_faq_edit',['id'=>$rs->id])}}"><img src="{{asset('assets/admin/images')}}/edit.png" height="30"></a>
                                </td>
                                <td>
                                    <a href="{{route('admin_faq_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="30"></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
