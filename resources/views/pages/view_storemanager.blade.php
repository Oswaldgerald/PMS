@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="box">
                    <div class="box-header box-header-title">
                        <h3 class="box-title">LIST OF STORE MANAGERS</h3>
                        <a href="{{ url('/addstoremanager') }}" class="btn btn-default pull-right"><i
                                    class="fa fa-plus-square"></i> ADD  STORE MANAGER</a>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>STAFF ID</th>
                                <th>FIRST NAME</th>
                                <th>MIDDLE NAME</th>
                                <th>LAST NAME</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            @foreach($storemanager as $manager)
                                <tbody>
                                <tr>
                                    <td>{{ $manager->email }}</td>
                                    <td>{{ $manager->name }}</td>
                                    <td>{{ $manager->middlename }}</td>
                                    <td>{{ $manager->lastname }}</td>
                                    <td>
                                        <a href="/edit/Owner/{{ $manager->id }}" class="btn btn-primary btn-flat">EDIT</a>
                                        <a href="/list/Owner/delete/{{ $manager->id }}"
                                           class="btn btn-danger btn-flat"
                                           onClick="return confirm('Are you sure you want to delete this BusinessOwner?')">DELETE</a>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection