@extends('layouts.main')
@section('content')
    <h3>{{ __('User detail') }}</h3>
    <table class="table table-hover">
        <tr>
            <th>{{ __('#') }}</th>
            <th>{{ __('titles.username') }}</th>
            <th>{{ __('Name Office') }}</th>
            <th>{{ __('Created At') }}</th>
            <th>{{ __('Updated At') }}</th>
            <th>
                <div class="btn btn-sm btn-success">{{ __('Add') }}</div>
            </th>
        </tr>
        <tbody>
            <tr>
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
