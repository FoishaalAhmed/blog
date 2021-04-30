@extends('backend.layouts.app')

@section('title', 'Supporters')

@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('Supporters') }}</h3>
                            <div class="card-tools">
                               
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">{{__('Sl.')}}</th>
                                        <th style="width: 25%;">{{__('Name')}}</th>
                                        <th style="width: 20%;">{{__('Email')}}</th>
                                        <th style="width: 10%;">{{__('Phone')}}</th>
                                        <th style="width: 20%;">{{__('Nationality')}}</th>
                                        <th style="width: 10%;">{{__('Amount')}}</th>
                                        <th style="width: 10%;">{{__('currency')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($supports as $key => $support)
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>{{$support->first_name.' '.$support->last_name}}</td>
                                            <td>{{$support->email}}</td>
                                            <td>{{$support->phone}}</td>
                                            <td>{{$support->nationality}}</td>
                                            <td>{{$support->amount}}</td>
                                            <td>{{$support->currency}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
