@extends('falcon.logviewer.app')
@section('content')
    <h4>List of Logs : </h4>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr class="table-active">...</tr>

        <tr class="table-primary">...</tr>
        <tr class="table-secondary">...</tr>
        <tr class="table-success">...</tr>
        <tr class="table-danger">...</tr>
        <tr class="table-warning">...</tr>
        <tr class="table-info">...</tr>
        <tr class="table-light">...</tr>
        <tr class="table-dark">...</tr>

        <!-- On cells (`td` or `th`) -->
        <tr>
            <td class="table-active">...</td>

            <td class="table-primary">...</td>
            <td class="table-secondary">...</td>
            <td class="table-success">...</td>
            <td class="table-danger">...</td>
            <td class="table-warning">...</td>
            <td class="table-info">...</td>
            <td class="table-light">...</td>
            <td class="table-dark">...</td>
        </tr>
        </tbody>
    </table>
@endsection
