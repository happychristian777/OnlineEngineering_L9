@extends('admin.layouts.main')
@section('main-section');
<div class="container-fluid  page__heading-container">
    <div class="page__heading">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
        </nav>
        <h1 class="m-0">Users List</h1>
    </div>
</div>
<div class="container-fluid page__container">

    <div class="card">
        <div class="card-header card-header-large bg-white">
            <h4 class="card-header__title">Current Users</h4>
        </div>
        <div class="card-header">
            <form class="form-inline">
                <label class="mr-sm-2" for="inlineFormFilterBy">Filter by:</label>
                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormFilterBy" placeholder="Type a name">

                <label class="sr-only" for="inlineFormRole">Role</label>
                <select id="inlineFormRole" class="custom-select mb-2 mr-sm-2 mb-sm-0">
                    <option value="All Roles">All Roles</option>
                </select>

                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                    <input type="checkbox" class="custom-control-input" id="inlineFormPurchase">
                    <label class="custom-control-label" for="inlineFormPurchase">Made a Purchase?</label>
                </div>
            </form>
        </div>
        <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>
            <table class="table mb-0 thead-border-top-0">
                <thead>
                    <tr>

                        <th style="width: ;">Avatar</th>
                        <th style="width: ;">Name</th>
                        <th style="width: ;">Email</th>
                        <th style="width: ;">Address</th>
                        <th style="width: ;">Contact</th>
                        <th style="width: ;">Actions</th>
                    </tr>
                </thead>
                <tbody class="list" id="staff">
                    @foreach($users as $user)
                    <tr class="selected">
                        <td>
                            <div class="avatar">
                                <img src="{{url('admins/images/avatar/demi.png')}}" alt="Avatar" class="avatar-img rounded-circle">
                            </div>
                        </td>
                        <td>
                                <div class="media-body">
                                    <span class="js-lists-values-employee-name">{{$user->name}}</span>
                                </div>
                        </td>
                        <td>
                            <span class="js-lists-values-employee-name">{{$user->email}}</span>
                        </td>
                        <td>
                            <span class="js-lists-values-employee-name">{{$user->address}}</span>

                        </td>
                        <td>
                            <span class="js-lists-values-employee-name">{{$user->contact}}</span>
                        </td>
                        <td>
                            <span class="js-lists-values-employee-name"><a href="" class="badge badge-danger">Delete</a></span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-body text-right">
            {{$users->links()}}
        </div>
    </div>
</div>
@endsection
