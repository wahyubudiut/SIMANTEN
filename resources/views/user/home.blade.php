@extends('layouts.dashboard')
@section('content')
<div class="panel panel-profile">
    <div class="clearfix">
        <!-- LEFT COLUMN -->
        <div class="profile-left">
            <!-- PROFILE HEADER -->
            <div class="profile-header">
                <div class="overlay"></div>
                <div class="profile-main">
                    <img src="{{asset('images/faces/face28.png')}}" class="img-circle" alt="Avatar">
                    <h3 class="name">{{ Auth::user()->name }}</h3>
                    <span class="online-status status-available">Available</span>
                </div>
            </div>
            <!-- END PROFILE HEADER -->
            <!-- PROFILE DETAIL -->
            <div class="profile-detail">
                <div class="profile-info">
                    <h4 class="heading" align="center">Basic Info</h4>
                    <ul class="list-unstyled list-justify">
                        <li>Nama <span>{{ Auth::user()->name }}</span></li>
                        <li>NIM <span>{{ Auth::user()->nim }}</span></li>
                        <li>Telpon <span>{{ Auth::user()->phone_number }}</span></li>
                        <li>Email <span>{{ Auth::user()->email }}</span></li>
                    </ul>
                </div>
                <!-- <div class="text-center"><a href="#" class="btn btn-primary">Edit Profile</a></div> -->
                <div class="profile-info">
                    <h4 class="heading">Social</h4>
                    <ul class="list-inline social-icons">
                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- END PROFILE DETAIL -->
        </div>
        <!-- END LEFT COLUMN -->
        <!-- RIGHT COLUMN -->
        <div class="profile-right">
            <h4 class="heading">Hallo {{ Auth::user()->name }}</h4>
            <!-- TABBED CONTENT -->
            <div class="custom-tabs-line tabs-line-bottom left-aligned">
                <ul class="nav" role="tablist">
                    <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Recent Activity</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-bottom-left1">
                    <ul class="list-unstyled activity-timeline">
                        <li>
                            <i class="fa fa-comment activity-icon"></i>
                            <p>Commented on post <a href="#">Prototyping</a> <span class="timestamp">2 minutes ago</span></p>
                        </li>
                        <li>
                            <i class="fa fa-cloud-upload activity-icon"></i>
                            <p>Uploaded new file <a href="#">Proposal.docx</a> to project <a href="#">New Year Campaign</a> <span class="timestamp">7 hours ago</span></p>
                        </li>
                        <li>
                            <i class="fa fa-plus activity-icon"></i>
                            <p>Added <a href="#">Martin</a> and <a href="#">3 others colleagues</a> to project repository <span class="timestamp">Yesterday</span></p>
                        </li>
                        <li>
                            <i class="fa fa-check activity-icon"></i>
                            <p>Finished 80% of all <a href="#">assigned tasks</a> <span class="timestamp">1 day ago</span></p>
                        </li>
                    </ul>
                    <div class="margin-top-30 text-center"><a href="#" class="btn btn-default">See all activity</a></div>
                </div>
            </div>
            <!-- END TABBED CONTENT -->
        </div>
        <!-- END RIGHT COLUMN -->
    </div>
    <!-- END MAIN CONTENT -->
</div>
@endsection