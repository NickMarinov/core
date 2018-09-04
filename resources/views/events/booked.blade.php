@extends('layout')



@section('content')

    <style>
        #contentFull {
            width: auto;
            min-height: 100px;
            margin: 20px 20px;
        }

        table.standard input {
            background: #ffffff;
            border: 1px solid #999999;
            color: #555555;
        }

        table.standard {
            margin: 10px auto 50px auto;
            padding: 0px;
            border-spacing: 0px;
            border-right: 1px solid #cccccc;
            border-bottom: 1px solid #cccccc;
        }

        table.standard tr:hover td {
            background: #f1f1f1;
            color: #555555;
        }

        table.standard tr th {
            padding: 5px 15px; /*#e1e1e1*/
            color: #ffffff;
            font-weight: bold;
            margin: 0px;
            text-align: center;
            width: 300px;
            background-size:     300px;                      /* <------ */
            background-repeat:   no-repeat;
            background-position: center center;
        }

        table.standard tr th.blank{
            background: none;
            color: #ffffff;
            padding: 0;
            border: 0;
            height: 20px;

        }

        table.standard tr th a {
            color: #ffffff;
        }

        table.standard tr td {
            height: 20px;
            margin: 0px;
            border-top: 1px solid #cccccc;
            border-left: 1px solid #cccccc;
            text-align: center;
            padding: 5px 15px;
        }

        table.standard a.hidden{
            text-decoration: none;
            color: #555555;
        }

        .modal .modal-header {
            border-bottom: none;
            position: relative;
        }
        .modal .modal-header .btn {
            position: absolute;
            top: 0;
            right: 0;
            margin-top: 0;
            border-top-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .modal .modal-footer {
            border-top: none;
            padding: 0;
        }
        .modal .modal-footer .btn-group > .btn:first-child {
            border-bottom-left-radius: 0;
        }
        .modal .modal-footer .btn-group > .btn:last-child {
            border-top-right-radius: 0;
        }
    </style>



    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-ukblue">
                @if($events->isEmpty())
                    <div class="panel-heading"><i class="glyphicon glyphicon-info-sign"></i> &thinsp; No Upcoming Events</div>
                @elseif(!count($events) > 1)
                    <div class="panel-heading"><i class="glyphicon glyphicon-info-sign"></i> &thinsp; Next Event</div>
                @else
                    <div class="panel-heading"><i class="glyphicon glyphicon-info-sign"></i> &thinsp; Upcoming Events</div>                @endif
                <div id="contentFull">
                    @if($events->isEmpty())
                        <h1>No Events To Show</h1>
                    @else

                        @foreach($events as $event)
                            <table class="standard" style="margin-bottom: 10px; margin-top: 50px;">

                                <tbody>
                                    <tr>
                                        @if(!$event->modal == 1)
                                            <th style="width: 200px; background: {{$event->hex}};" rowspan="2" >{{$event->title}}</th>
                                        @else
                                        <th style="width: 200px; background: {{$event->hex}};" rowspan="2"><a href="" data-toggle="modal" data-target="#eventInfoModal{{$event->id}}">{{$event->title}}</a></th>
                                        @endif

                                        <td style="width: 400px;"><a href="" data-toggle="modal" data-target="#atcInterestModal">ATC Roster</a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center">
                                            {{$event->date}}, {{date('H:i',strtotime($event->start_time))}} - {{date('H:i',strtotime($event->end_time))}}</td>
                                    </tr>

                                </tbody>
                            </table>
                            <!-- Event Info Modal -->
                            <div class="modal fade" id="eventInfoModal{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLongTitle"><b>{{$event->title}}</b></h3><br>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times; {{$event->date}}, {{date('H:i',strtotime($event->start_time))}} - {{date('H:i',strtotime($event->end_time))}}</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img style="width: 500px; background-position: center center;" src="{{$event->banner}}"><br>
                                            <br>
                                            {{$event->description}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ATC Interest Modal -->
                            <!-- The modal -->
                            <div class="modal fade" id="atcInterestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    @endif
                </div>
                <div class="panel-body">
                </div>
            </div>
        </div>
@stop