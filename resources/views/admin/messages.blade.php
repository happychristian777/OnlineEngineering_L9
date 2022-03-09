@extends('admin.layouts.main')
@section('main-section')
    @push('title')
        <title>Admin/Messages</title>
    @endpush


    <div class="mdk-header-layout__content">

        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page">
                <div class="container-fluid  page__heading-container">
                    <div class="page__heading">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Discussions</li>
                            </ol>
                        </nav>
                        <h1 class="m-0">Messages</h1>
                    </div>
                </div>
                <div class="container-fluid page__container">

                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="btn btn-success mb-3 btn-block">New Thread <i
                                    class="material-icons">add_circle_outline</i></a>
                            <ul class="list-group">
                                <li class="list-group-item active"><a href="#" class="text-white"><strong>All
                                            Threads</strong></a></li>
                                <li class="list-group-item"><a href="#"><strong> Posts</strong></a></li>
                                <li class="list-group-item"><a href="#"><strong>Following</strong></a></li>
                                <li class="list-group-item"><a href="#"><strong>Resolved</strong></a></li>
                                <li class="list-group-item"><a href="#"><strong>Unresolved</strong></a></li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex mb-3">
                                <div class="form-inline">
                                    <div class="search-form search-form--light">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            id="searchSample03">
                                        <button class="btn" type="button"><i
                                                class="material-icons">search</i></button>
                                    </div>
                                </div>
                                <div class="ml-auto d-flex">
                                    <div class="form-group form-inline mb-0">
                                        <label for="sort" class="mr-2">Sort by</label>
                                        <select class="form-control" id="sort">
                                            <option value="">Newest</option>
                                            <option value="">Oldest</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="stories-cards mb-4">

                                @foreach ($contacts as $contact)
                                    <div class="card">
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="m-4">
                                                <a href="#" class="d-flex align-items-center text-muted">
                                                    <!-- LOGO -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48">
                                                        <g stroke="currentColor" fill="none" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path
                                                                d="M26.09 37.272l-7.424 1.06 1.06-7.424 19.092-19.092c1.758-1.758 4.606-1.758 6.364 0s1.758 4.606 0 6.364L26.09 37.272zM12 1.498h12c.828 0 1.5.672 1.5 1.5v3c0 .828-.672 1.5-1.5 1.5H12c-.828 0-1.5-.672-1.5-1.5v-3c0-.828.672-1.5 1.5-1.5zM25.5 4.498h6c1.656 0 3 1.344 3 3"
                                                                stroke-width="3"></path>
                                                            <path
                                                                d="M34.5 37.498v6c0 1.656-1.344 3-3 3h-27c-1.656 0-3-1.344-3-3v-36c0-1.656 1.344-3 3-3h6M10.5 16.498h15M10.5 25.498h6"
                                                                stroke-width="3"></path>
                                                        </g>
                                                    </svg>

                                                </a>
                                            </div>

                                            <div class="stories-card__title flex">
                                                <h5 class="card-title m-0"><a href=""
                                                        class="text-body">{{ $contact->subject }}</a></h5>
                                                <div class="text-muted">
                                                    <p>{{ $contact->message }}</p>
                                                </div>
                                                <small class="text-muted"><strong>{{ $contact->firstName }}{{ $contact->LastName }}
                                                    </strong> </small>
                                                <small>{{ \Carbon\Carbon::parse($contact['created_at'])->diffForHumans() }}</small>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="d-flex flex-row align-items-center mb-3">
                                <div class="form-inline">
                                    View
                                    <select class="custom-select ml-2">
                                        <option value="20" selected>20</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="200">200</option>
                                    </select>
                                </div>
                                <div class="ml-auto">
                                    {{-- 20 <span class="text-muted">of 100</span> <a href="#" class="icon-muted"><i
                                            class="material-icons float-right">arrow_forward</i></a> --}}
                                    {{ $contacts->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // END drawer-layout__content -->
        </div>
        <!-- // END drawer-layout -->

    </div>
@endsection