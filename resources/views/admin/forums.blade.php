@extends('admin.layouts.main')
@section('main-section')
@push('title')
<title>Admin/Forums</title>
@endpush
<div class="container-fluid  page__heading-container">
    <div class="page__heading">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Forums</li>
            </ol>
        </nav>
        <h1 class="m-0">Forum List</h1>
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
                        <th style="width: 18px;">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input js-toggle-check-all" data-target="#staff" id="customCheckAll">
                                <label class="custom-control-label" for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                            </div>
                        </th>
                        <th>Employee</th>
                        <th style="width: 150px;">Current Employer</th>
                        <th style="width: 48px;">Projects</th>
                        <th style="width: 37px;">Status</th>
                        <th style="width: 120px;">Last Activity</th>
                        <th style="width: 51px;">Earnings</th>
                        <th style="width: 24px;"></th>
                    </tr>
                </thead>
                <tbody class="list" id="staff">
                    <tr class="selected">
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input js-check-selected-row" checked="" id="customCheck1_1">
                                <label class="custom-control-label" for="customCheck1_1"><span class="text-hide">Check</span></label>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <div class="avatar avatar-xs mr-2">
                                    <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">

                                    <span class="js-lists-values-employee-name">Michael Smith</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <a href="">Black Ops</a>
                                <a href="#" class="rating-link"><i class="material-icons ml-2">star</i></a>
                            </div>
                        </td>
                        <td>12</td>
                        <td><span class="badge badge-warning">ADMIN</span></td>
                        <td><small class="text-muted">3 days ago</small></td>
                        <td>&dollar;12,402</td>
                        <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck2_1">
                                <label class="custom-control-label" for="customCheck2_1"><span class="text-hide">Check</span></label>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <img src="assets/images/avatar/green.svg" class="mr-2" alt="avatar" />
                                <div class="media-body">
                                    <span class="js-lists-values-employee-name">Connie Smith</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <a href="#">Backend Ltd</a>
                                <a href="#" class="rating-link active"><i class="material-icons ml-2">star</i></a>
                            </div>
                        </td>
                        <td>42</td>
                        <td><span class="badge badge-success">USER</span></td>
                        <td><small class="text-muted">1 week ago</small></td>
                        <td>&dollar;1,943</td>
                        <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck3_1">
                                <label class="custom-control-label" for="customCheck3_1"><span class="text-hide">Check</span></label>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <div class="avatar avatar-xs mr-2">
                                    <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <span class="js-lists-values-employee-name">John Connor</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <a href="">Frontted</a>
                                <a href="#" class="rating-link" onclick="document.getElementById('box').classList.toggle('grow');"><i class="material-icons ml-2">star</i></a>
                            </div>
                        </td>
                        <td>42</td>
                        <td><span class="badge badge-primary">MANAGER</span></td>
                        <td><small class="text-muted">1 week ago</small></td>
                        <td>&dollar;1,943</td>
                        <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                    </tr>
                    <tr class="selected">
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input js-check-selected-row" checked="" id="customCheck1_2">
                                <label class="custom-control-label" for="customCheck1_2"><span class="text-hide">Check</span></label>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <div class="avatar avatar-xs mr-2">
                                    <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <span class="js-lists-values-employee-name">Michael Smith</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <a href="">Black Ops</a>
                                <a href="#" class="rating-link"><i class="material-icons ml-2">star</i></a>
                            </div>
                        </td>
                        <td>12</td>
                        <td><span class="badge badge-warning">ADMIN</span></td>
                        <td><small class="text-muted">3 days ago</small></td>
                        <td>&dollar;12,402</td>
                        <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck2_2">
                                <label class="custom-control-label" for="customCheck2_2"><span class="text-hide">Check</span></label>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <img src="assets/images/avatar/green.svg" class="mr-2" alt="avatar" />
                                <div class="media-body">
                                    <span class="js-lists-values-employee-name">Connie Smith</span>

                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <a href="#">Backend Ltd</a>
                                <a href="#" class="rating-link active"><i class="material-icons ml-2">star</i></a>
                            </div>
                        </td>
                        <td>42</td>
                        <td><span class="badge badge-success">USER</span></td>
                        <td><small class="text-muted">1 week ago</small></td>
                        <td>&dollar;1,943</td>
                        <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck3_2">
                                <label class="custom-control-label" for="customCheck3_2"><span class="text-hide">Check</span></label>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <div class="avatar avatar-xs mr-2">
                                    <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <span class="js-lists-values-employee-name">John Connor</span>

                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <a href="">Frontted</a>
                                <a href="#" class="rating-link" onclick="document.getElementById('box').classList.toggle('grow');"><i class="material-icons ml-2">star</i></a>
                            </div>
                        </td>
                        <td>42</td>
                        <td><span class="badge badge-primary">MANAGER</span></td>
                        <td><small class="text-muted">1 week ago</small></td>
                        <td>&dollar;1,943</td>
                        <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
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
