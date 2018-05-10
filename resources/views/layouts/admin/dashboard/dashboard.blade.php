@extends('layouts.admin')
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Trang Chủ</a></li>
            <li class="breadcrumb-item">Dashboard</li>
        </ol>
    </nav>
@endsection

@section('contentAdmin')
    <div class="col-lg no-padding-left-right">
        <div class="card card-no-border">
            <div class="card-header card_header_gradient no-border-radius">Dashboard</div>
            <div class="card-body no-padding-left-right padding-top-10 background-blue ">
                <div class="row mt-3">
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-no-border box-shadown-darkblue no-border-radius">
                            <div class="card-header card_header_gradient no-border-radius">My Blog</div>
                            <div class="card-body no-padding-left-right no-padding-bottom padding-top-10">
                                <div class="haft-left padding-leftright-10">
                                    <h3 class="text-capitalize text-left text-warning border-bottom-bluethin box-shadown-purple-thin no-margin-bottom text-shadown-orange-thin">
                                        TOPIC</h3>
                                    <p class="text-left dichvu_slogan text-primary text-50 no-margin-bottom">
                                        {{ $topicBlogCount }}
                                        <small> chủ đề</small>
                                    </p>
                                </div>
                                <div class="haft-right padding-leftright-10">
                                    <h3 class="text-capitalize text-left text-warning border-bottom-bluethin box-shadown-purple-thin no-margin-bottom text-shadown-orange-thin">
                                        Số Bài viết</h3>
                                    <p class="text-left dichvu_slogan text-primary text-50 no-margin-bottom">
                                        {{ $blogCount }}
                                        <small> bài</small>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-no-border box-shadown-darkblue no-border-radius">
                            <div class="card-header card_header_gradient no-border-radius">Serie Bài Viết</div>
                            <div class="card-body no-padding-left-right no-padding-bottom padding-top-10">
                                <div class="haft-left padding-leftright-10">
                                    <h3 class="text-capitalize text-left text-warning border-bottom-bluethin box-shadown-purple-thin no-margin-bottom text-shadown-orange-thin">
                                        TOPIC</h3>
                                    <p class="text-left dichvu_slogan text-primary text-50 no-margin-bottom">
                                        {{ $topicSerieCount }}
                                        <small> chủ đề</small>
                                    </p>
                                </div>
                                <div class="haft-right padding-leftright-10">
                                    <h3 class="text-capitalize text-left text-warning border-bottom-bluethin box-shadown-purple-thin no-margin-bottom text-shadown-orange-thin">
                                        Số bài viết</h3>
                                    <p class="text-left dichvu_slogan text-primary text-50 no-margin-bottom">
                                        {{ $serieCount }}
                                        <small> bài</small>
                                    </p>
                                </div>
                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-no-border box-shadown-darkblue no-border-radius">
                            <div class="card-header card_header_gradient no-border-radius">Chuyên Đề</div>
                            <div class="card-body no-padding-left-right no-padding-bottom padding-top-10">
                                <div class="haft-left padding-leftright-10">
                                    <h3 class="text-capitalize text-left text-warning border-bottom-bluethin box-shadown-purple-thin no-margin-bottom text-shadown-orange-thin">
                                        TOPIC</h3>
                                    <p class="text-left dichvu_slogan text-primary text-50 no-margin-bottom">
                                        {{ $topicChuyendeCount }}
                                        <small> chủ đề</small>
                                    </p>
                                </div>
                                <div class="haft-right padding-leftright-10">
                                    <h3 class="text-capitalize text-left text-warning border-bottom-bluethin box-shadown-purple-thin no-margin-bottom text-shadown-orange-thin">
                                        Số bài viết</h3>
                                    <p class="text-left dichvu_slogan text-primary text-50 no-margin-bottom">
                                        {{ $chuyendeCount }}
                                        <small> bài</small>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 background-white padding-top-30 border-top-blue">
                    <div class="col ">
                        <h3 class="text-left orange-text font-roboto-light">My BLOG</h3>
                        <p>
                            <button class="btn btn-warning  box-shadown-darkblue">Viết bài mới</button>
                        </p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item box-shadown-darkblue no-border-radius">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#topicblog" role="tab"
                                   aria-controls="home" aria-selected="true">Chủ đề</a>
                            </li>
                            <li class="nav-item box-shadown-darkblue no-border-radius">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#publicpost"
                                   role="tab" aria-controls="profile" aria-selected="false">Bài đăng đã xuất bản</a>
                            </li>
                            <li class="nav-item box-shadown-darkblue no-border-radius">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#unpublishblog" role="tab"
                                   aria-controls="profile" aria-selected="false">Bài đang viết dở</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade " id="topicblog" role="tabpanel" aria-labelledby="home-tab">
                                <div class="wrapper-for-loading padding-top-30 padding-bottom-10">
                                    <div class="loader"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="publicpost" role="tabpanel"
                                 aria-labelledby="profile-tab">
                                <div class="wrapper-for-loading padding-top-30 padding-bottom-10">
                                    <div class="loader"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="unpublishblog" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="wrapper-for-loading padding-top-30 padding-bottom-10">
                                    <div class="loader"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row mt-3 background-white padding-top-30 border-top-blue">
                    <div class="col ">
                        <h3 class="text-left orange-text font-roboto-light">Serie Bài Viết</h3>
                        <p>
                            <button class="btn btn-warning  box-shadown-darkblue">Viết bài mới</button>
                        </p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item box-shadown-darkblue no-border-radius">
                                <a class="nav-link " id="home-tab" data-toggle="tab" href="#topicserie" role="tab"
                                   aria-controls="home" aria-selected="true">Chủ đề</a>
                            </li>
                            <li class="nav-item box-shadown-darkblue no-border-radius">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#publicserie"
                                   role="tab" aria-controls="profile" aria-selected="false">Bài đăng đã xuất bản</a>
                            </li>
                            <li class="nav-item box-shadown-darkblue no-border-radius">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#unpublishserie" role="tab"
                                   aria-controls="profile" aria-selected="false">Bài đang viết dở</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade " id="topicserie" role="tabpanel" aria-labelledby="home-tab">
                                <div class="wrapper-for-loading padding-top-30 padding-bottom-10">
                                    <div class="loader"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="publicserie" role="tabpanel"
                                 aria-labelledby="profile-tab">
                                <div class="wrapper-for-loading padding-top-30 padding-bottom-10">
                                    <div class="loader"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="unpublishserie" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="wrapper-for-loading padding-top-30 padding-bottom-10    ">
                                    <div class="loader"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-3 background-white padding-top-30 border-top-blue">
                    <div class="col ">
                        <h3 class="text-left orange-text font-roboto-light">Chuyên Đề</h3>
                        <p>
                            <button class="btn btn-warning  box-shadown-darkblue">Viết bài mới</button>
                        </p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item box-shadown-darkblue no-border-radius">
                                <a class="nav-link " id="home-tab" data-toggle="tab" href="#topicchuyende" role="tab"
                                   aria-controls="home" aria-selected="true">Chủ đề</a>
                            </li>
                            <li class="nav-item box-shadown-darkblue no-border-radius">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#publicchuyende"
                                   role="tab" aria-controls="profile" aria-selected="false">Bài đăng đã xuất bản</a>
                            </li>
                            <li class="nav-item box-shadown-darkblue no-border-radius">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#unpublishchuyende" role="tab"
                                   aria-controls="profile" aria-selected="false">Bài đang viết dở</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade " id="topicchuyende" role="tabpanel" aria-labelledby="home-tab">
                                <div class="wrapper-for-loading padding-top-30 padding-bottom-10">
                                    <div class="loader"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="publicchuyende" role="tabpanel"
                                 aria-labelledby="profile-tab">
                                <div class="wrapper-for-loading padding-top-30 padding-bottom-10    ">
                                    <div class="loader"></div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="unpublishchuyende" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="wrapper-for-loading padding-top-30 padding-bottom-10    ">
                                    <div class="loader"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('scriptTail')
    <script>
        function getJsonPaginate(url = "", e) {
            var data = "";
            var settings = {
                "async": true,
                "crossDomain": true,
                "url": (url == "") ? "{{ route('dashboard.getblog') }}" : url,
                "method": "GET",
            }

            $.ajax(settings).done(function (response) {
                $(e.target).closest('div').html(response);
                // console.log(response);
            });
        }

        $(document).ready(function () {
            $.ajax({
                "async": true,
                "crossDomain": true,
                "url": "{{ route('dashboard.getblog') }}",
                "method": "GET",
            }).done(function (data) {
                $('#publicpost').html(data);
            });
            $.ajax({
                "async": true,
                "crossDomain": true,
                "url": "{{ route('dashboard.getserie') }}",
                "method": "GET",
            }).done(function (data) {
                $('#publicserie').html(data);
            });
            $.ajax({
                "async": true,
                "crossDomain": true,
                "url": "{{ route('dashboard.getchuyende') }}",
                "method": "GET",
            }).done(function (data) {
                $('#publicchuyende').html(data);
            });
            $.ajax({
                "async": true,
                "crossDomain": true,
                "url": "{{ route('dashboard.gettopicblog') }}",
                "method": "GET",
            }).done(function (data) {
                $('#topicblog').html(data);
            });
            $.ajax({
                "async": true,
                "crossDomain": true,
                "url": "{{ route('dashboard.gettopicserie') }}",
                "method": "GET",
            }).done(function (data) {
                $('#topicserie').html(data);
            });
            $.ajax({
                "async": true,
                "crossDomain": true,
                "url": "{{ route('dashboard.gettopicchuyende') }}",
                "method": "GET",
            }).done(function (data) {
                $('#topicchuyende').html(data);
            });
            $.ajax({
                "async": true,
                "crossDomain": true,
                "url": "{{ route('dashboard.getunblog') }}",
                "method": "GET",
            }).done(function (data) {
                $('#unpublishblog').html(data);
            });
            $.ajax({
                "async": true,
                "crossDomain": true,
                "url": "{{ route('dashboard.getunserie') }}",
                "method": "GET",
            }).done(function (data) {
                $('#unpublishserie').html(data);
            });

            $.ajax({
                "async": true,
                "crossDomain": true,
                "url": "{{ route('dashboard.getunchuyende') }}",
                "method": "GET",
            }).done(function (data) {
                $('#unpublishchuyende').html(data);
            })
        })
        $(document).on('click', '.pagination .page-item a', function (e) {
            getJsonPaginate($(this).attr('href'), e);
            e.preventDefault();
        })
    </script>

@endsection