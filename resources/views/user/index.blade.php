@extends('layouts.main')
@section('content')
    <h3>{{ __('List user') }}</h3>
    <table class="table table-hover">
        <tr>
            <th>{{ __('#') }}</th>
            <th>{{ __('titles.username') }}</th>
            <th>{{ __('titles.first_name') }}</th>
            <th>{{ __('titles.last_name') }}</th>
            <th>{{ __('titles.email') }}</th>
            <th>{{ __('Admin') }}</th>
            <th>{{ __('Active') }}</th>
            <th>
                <div class="btn btn-sm btn-success">{{ __('Add user') }}</div>
            </th>
        </tr>
        <tbody>
            <tr>
                <td></td>
                <td><a href="#"></a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">{{ __('Edit') }}</a> &nbsp;
                    <a href="#" class="btn btn-sm btn-danger">{{ __('Remove') }}</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
