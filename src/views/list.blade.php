@extends('falcon.logviewer.app')
@section('content')
    <h4>List of Logs : </h4>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Date</th>
            <th>Level</th>
            <th>Channel</th>
            <th style="width: 70%">Content</th>
        </tr>
        </thead>
        <tbody>
        @foreach($logs as $log)
            <tr>
                <td class="table-active">{{$log->date}}</td>
                <td class="table-active">{{$log->level}}</td>
                <td class="table-active">{{$log->channel}}</td>
                <td class="table-active">{{$log->content}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center" style="margin-top: 10px;">
        {!! $logs->withQueryString()->links() !!}
    </div>
@endsection
