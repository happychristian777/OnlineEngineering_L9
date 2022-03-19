@extends('admin.layouts.main')
@section('main-section')
@push('title')
<title>Admin/Categories</title>
@endpush
<div class="container-fluid  page__heading-container">
    <div class="page__heading">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Forum Categories</li>
            </ol>
        </nav>

    </div>
</div>
<div class="container-fluid page__container">
    <div class="card">
        <div class="card-header card-header-large bg-white">
            <h4 class="card-header__title">Current Forums</h4>
        </div>
        <div class="card-header">
            <form class="form-inline">
                <label class="mr-sm-2" for="inlineFormFilterBy">Filter by:</label>
                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormFilterBy" placeholder="Type a name">
                <label class="sr-only" for="inlineFormRole">Role</label>
                <select id="inlineFormRole" class="custom-select mb-2 mr-sm-2 mb-sm-0">
                    <option value="All Roles">All Roles</option>
                </select>

            </form>
        </div>
        <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>
            <table class="table mb-0 thead-border-top-0">
                <thead>
                    <tr>

                        <th >Category ID</th>
                        <th >Category Name</th>
                        <th >Total Forums</th>
                    </tr>
                </thead>
                <tbody class="list" id="staff">
                    <tr>
                        <td>
                           1
                        </td>
                        <td>
                           Mechanical
                        </td>
                        <td>
                            3
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="card-body text-right">
            15 <span class="text-muted">of 1,430</span> <a href="#" class="text-muted-light"><i class="material-icons ml-1">arrow_forward</i></a>
        </div>
    </div>
</div>
@endsection
