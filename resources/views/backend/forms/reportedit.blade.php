@extends('backend.layouts.master')

@section('page-header')
    <h1>
        Edit a Communicable Disease Report
        <small>{{ trans('strings.backend.phioff_title') }}</small>
    </h1>
@endsection

@section('breadcrumbs')
    <li class="active">{!! link_to_route('admin.access.users.report', trans('menus.phi_view')) !!}</li>
    <li class="active">{{ trans('strings.report') }}</li>
@endsection

@section('content')

    @if(Session::has('message'))
        <div id="alertb" class="alert alert-success">{{ Session::get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        </div>
    @endif

<div class="row">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">communicable_diseases</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        {{--<th>PHI Reference No</th>--}}
                        {{--<th>Disease as Notified</th>--}}
                        {{--<th>Notified Date</th>--}}
                        <th>Disease Confirmed</th>
                        <th>Confirmed Date</th>
                        <th>Patient Name</th>
                        <th>Street No</th>
                        <th>Street Name</th>
                        <th>Village Name</th>
                        <th>Town Name</th>
                        <th>District</th>
                        <th>Sex</th>
                        <th>Ethnic Group</th>
                        <th>Date Of Onset</th>
                        <th>Date Of Hospitalization</th>
                        <th>Laboratory Findings</th>
                        <th>Outcome</th>
                        <th>Isolated Place</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($edit as $item)
                        <tr>
                            {{--<td>{!! $item->phi_ref_no !!}</td>--}}
                            {{--<td>{!! $item->disease_text !!}</td>--}}
                            {{--<td>{!! $item->disease_date_text !!}--}}
                            <td>{!! $item->disease_confirmed_text !!}</td>
                            <td>{!! $item->confirmed_date_text !!}</td>
                            <td>{!! $item->patient_name_text !!}</td>
                            <td>{!! $item->street_no_text !!}</td>
                            <td>{!! $item->street_name_text !!}</td>
                            <td>{!! $item->village_name_text !!}</td>
                            <td>{!! $item->town_name_text !!}</td>
                            <td>{!! $item->district_name_text !!}</td>
                            <td>{!! $item->sex_text !!}</td>
                            <td>{!! $item->ethnic_group_text !!}</td>
                            <td>{!! $item->date_of_onset_text !!}</td>
                            <td>{!! $item->date_of_hospitalization_text !!}</td>
                            <td>{!! $item->laboratory_findings_text !!}</td>
                            <td>{!! $item->outcome_text !!}</td>
                            <td>{!! $item->isolated_place !!}</td>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- /.box-body -->
    </div><!--box box-success-->
</div>

    <div class="row">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Investigated Contacts</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Age</th>
                            <th>Observation</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($house as $item)
                            <tr>
                                <td>{!! $item->household_contact_name !!}</td>
                                <td>{!! $item->Hdate !!}</td>
                                <td>{!! $item->household_contact_age !!}</td>
                                <td>{!! $item->Hobservation !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- /.box-body -->
        </div><!--box box-success-->
    </div>

    <div class="row">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Other Contacts</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Age</th>
                            <th>Observation</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($other as $item)
                            <tr>
                                <td>{!! $item->other_contact_name !!}</td>
                                <td>{!! $item->odate !!}</td>
                                <td>{!! $item->other_contact_age !!}</td>
                                <td>{!! $item->Oobservation !!}</td>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- /.box-body -->
        </div><!--box box-success-->
    </div>


@endsection


