@extends('proyekt.nice-html.ltr.main')
@section('main')
    <style>
        .statistic-block {
            padding: 20px;
            background: #2d3035;
            color: #8a8d93;
        }

        .statistic-block .title {
            margin-bottom: 0;
        }

        .statistic-block strong,
        .statistic-block span {
            display: block;
        }

        .statistic-block strong {
            text-transform: uppercase;
            letter-spacing: 0.1em;
            font-size: 0.9rem;
            color: #8a8d93;
            margin-bottom: 5px;
        }

        .statistic-block .icon {
            margin-bottom: 5;
            font-size: 1.2rem;
            color: #8a8d93;
        }

        .statistic-block .number {
            color: inherit;
            font-size: 2.2rem;
        }

        .statistic-block .number {
            color: inherit;
            font-size: 2.2rem;
        }
    </style>
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Dashboard</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">DashBoard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div style="float: left" class="col-md-3 col-sm-6">
                                    <div class="statistic-block block">
                                        <div class="progress-details d-flex align-items-end justify-content-between">
                                            <div class="title">
                                                <div class="icon"><i class="icon-user-1"></i></div>
                                                <strong>All Users</strong>
                                            </div>
                                            <div class="number dashtext-1">
                                                {{$userCount}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="float: left" class="col-md-3 col-sm-6">
                                    <div class="statistic-block block">
                                        <div class="progress-details d-flex align-items-end justify-content-between">
                                            <div class="title">
                                                <div class="icon"><i class="icon-user-1"></i></div>
                                                <strong>Unread Messages</strong>
                                            </div>
                                            <div class="number dashtext-1">
                                                {{$unReadMessage}}
                                            </div>
                                        </div>
                                        <div class="progres">
                                            <div>
                                                <button class="btn btn-outline-warning"><a href="{{route('admin.message')}}">Show</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="float: left" class="col-md-3 col-sm-6">
                                    <div class="statistic-block block">
                                        <div class="progress-details d-flex align-items-end justify-content-between">
                                            <div class="title">
                                                <div class="icon"><i class="icon-user-1"></i></div>
                                                <strong>Receive Wait Complaint</strong>
                                            </div>
                                            <div class="number dashtext-1">
                                                {{$newComplaint}}
                                            </div>
                                        </div>
                                        <div class="progres">
                                            <div>
                                                <button class="btn btn-outline-warning"><a href="{{route('admin.issue')}}">Show</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive" id="users">
                                <h1>Users</h1>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Number</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $key => $user)
                                        <tr>
                                            <th scope="row">{{$user->id}}</th>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->surname}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->number}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                            </div>
                            <div class="pagination">
                              {{$users->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
