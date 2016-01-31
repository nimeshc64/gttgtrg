@extends('backend.layouts.master')

@section('page-header')
    <h1>
        Summary of Monthly Dengue Patients
        <small>{{ trans('strings.backend.mohoff_title') }}</small>
    </h1>
@endsection
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
@section('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> {{ trans('menus.dashboard') }}</a></li>
    <li class="active">{{ trans('strings.here') }}</li>
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{!! auth()->user()->name !!}!</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div><!-- /.box-header -->
        <div class="box-body">
            <script>

                var districtChartData = function(){
                    var tmp = [];
                    $.ajax({
                        'async': false,
                        'type': "GET",
                        'global': false,
                        'dataType': 'json',
                        url:'chartApi1',
                        'success': function (data) {
                            // alert('asd');
                            for(table in data){
                                if(data[table].month==1)

                                    tmp['January'] = data[table].patient;

                                if(data[table].month==2)

                                    tmp['February'] = data[table].patient;

                                if(data[table].month==3)
                                    tmp['March'] = data[table].patient;

                                if(data[table].month==4)
                                    tmp['April'] = data[table].patient;

                                if(data[table].month==5)
                                    tmp['May'] = data[table].patient;

                                if(data[table].month==6)
                                    tmp['June'] = data[table].patient;

                                if(data[table].month==7)
                                    tmp['July'] = data[table].patient;

                                if(data[table].month==8)
                                    tmp['August'] = data[table].patient;

                                if(data[table].month==9)
                                    tmp['September'] = data[table].patient;

                                if(data[table].month==10)
                                    tmp['October'] = data[table].patient;

                                if(data[table].month==11)
                                    tmp['November'] = data[table].patient;

                                if(data[table].month==12)
                                    tmp['December'] = data[table].patient;



                            }
                        }
                    });
                    return tmp;
                }();
            </script>
            <div id="chart" style="height: 400px;"></div>

            <script>


                Morris.Bar({
                    element: 'chart',

                    data: [
                        { district: 'January', value: districtChartData['January'] },
                        { district: 'February', value: districtChartData['February'] },
                        { district: 'March', value: districtChartData['March'] },
                        { district: 'April', value: districtChartData['April'] },
                        { district: 'May', value:districtChartData['May']},
                        { district: 'June', value:districtChartData['June'] },
                        { district: 'July', value: districtChartData['July'] },
                        { district: 'August', value: districtChartData['August'] },
                        { district: 'September', value: districtChartData['September'] },
                        { district: 'October', value: districtChartData['October'] },
                        { district: 'November', value: districtChartData['November'] },
                        { district: 'December', value: districtChartData['December'] }

                    ],
                    xkey: 'district',
                    ykeys: ['value'],
                    labels: ['Patient'],
                    xLabelAngle: 60
                });
            </script>

        </div><!-- /.box-body -->
    </div><!--box box-success-->

@endsection