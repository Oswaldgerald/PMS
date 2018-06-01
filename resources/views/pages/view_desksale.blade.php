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
                        <h3 class="box-title">LIST OF  DESKSALES</h3>
                        <a href="{{ url('/adddesksale') }}" class="btn btn-default pull-right"><i
                                    class="fa fa-plus-square"></i> ADD  DESKSALE</a>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>DESK ID</th>
                                <th>DESK NAME</th>
                                <th>DESCRIPTION</th>
                                <th>CASHIER</th>
                                <th>STOREMANAGER</th>
                            </tr>
                            </thead>
                            @foreach($desksale as $d_sale)
                                <tbody>
                                <tr>
                                    <td>{{ $d_sale->deskID }}</td>
                                    <td>{{ $d_sale->name }}</td>
                                    <td>{{ $d_sale->description }}</td>
                                    <td>{{ $d_sale->cashier }}</td>
                                    <td>{{ $d_sale->storemanager }}</td>
                                    <td>
                                        <a href="/edit/Owner/{{ $d_sale->id }}" class="btn btn-primary btn-flat">EDIT</a>
                                        <a href="/list/Owner/delete/{{ $d_sale->id }}"
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