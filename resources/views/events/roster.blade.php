@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-ukblue">
                <div class="panel-heading"><i class="glyphicon glyphicon-info-sign"></i> &thinsp; Your Rostered Events</div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead><tr>
                            <th>Event</th>
                            <th>Roster Coordinator</th>
                            <th>Position</th>
                            <th>Date</th>
                            <th>Position Slot</th>
                            <th colspan="3">More</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="table-secondary">
                            <td style="vertical-align: middle;"><b>Manchester Overload</b></td>
                            <td style="vertical-align: middle;"><a href="https://stats.vatsim.net/search_id.php?id=1300005">John Doe</a></td>
                            <td style="vertical-align: middle;"><b>EGCC_GND</b></td>
                            <td style="vertical-align: middle;">2018-09-29</td>
                            <td style="vertical-align: middle;"><b>2030z - 2130z</b></td>
                            <td style="vertical-align: middle;">
                                <button class="btn btn-success"><i class="fa fa-file-o"></i> View Full Roster</button>
                            <td style="vertical-align: middle;">
                                <button class="btn btn-danger"><i class="fa fa-remove"></i> Defer Allocated Position</button>
                            </td>
                        </tr>
                        <tr class="table-secondary">
                            <td style="vertical-align: middle;"><b>Manchester Overload</b></td>
                            <td style="vertical-align: middle;"><a href="https://stats.vatsim.net/search_id.php?id=1300005">John Doe</a></td>
                            <td style="vertical-align: middle;"><b>EGCC_GND</b></td>
                            <td style="vertical-align: middle;">2018-09-29</td>
                            <td style="vertical-align: middle;"><b>2030z - 2130z</b></td>
                            <td style="vertical-align: middle;">
                                <button class="btn btn-success"><i class="fa fa-file-o"></i> View Full Roster</button>
                            <td style="vertical-align: middle;">
                                <button class="btn btn-danger"><i class="fa fa-remove"></i> Defer Allocated Position</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop