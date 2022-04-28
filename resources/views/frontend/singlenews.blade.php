@extends('frontend.layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-push-3 col-md-push-0 my-4">
                <div class="box-white marginBottom20 visible-xs hidden-print">
                    <ol class="breadcrumb">
                        <li><a href="https://dailyrunnernews.com"> <i class="fa fa-home text-danger"></i></a></li>/
                        <li><a href="https://dailyrunnernews.com/?cat=4"> {{$news->category->name}} </a></li>
                    </ol>
                </div>
                <article class="box-white">
                    <div class="padding15 box-white">


                        <div class="row">
                            <div class="col-sm-12" style="margin-bottom:15px;color: red;">
                            </div>
                        </div>

                        <h1 class="no-margin" style="margin-bottom:15px !important">{{ $news->title }}</h1>
                        <!-- start -->
                        <div class="row">
                            <div class="col-sm-4 justify_col ">
                                <a class="visible-print"> <span> | </span> Admin</a>
                            </div>
                            <div class="col-sm-8">
                                <span class="small text-muted time-with-author">

                                    <i class="fa fa fa-clock-o text-danger"></i> প্রকাশিত: ১:৫৪ অপরাহ্ণ, জানুয়ারি ১৯,
                                    ২০১৯
                                    | <i class="fa fa fa-clock-o text-danger"></i> আপডেট: ১:৫৫:অপরাহ্ণ, জানুয়ারি ১৯, ২০১৯

                                </span>
                            </div>
                        </div>

                        <!-- end -->
                    </div>

                    <div class="paddingTop10">
                        <div class="featured-image">
                            <img src="{{ asset('storage/images/' . $news->thumbnail) }}" class="img-responsive"
                                alt="{{ $news->thumbnail }}">
                        </div>
                        <div class="caption"> </div>

                    </div>
                    <div class="content-details">
                        {!!  $news->content !!}
                    </div>

                    <!-- Advertisement B -->
                    <div class="row text-center marginTopBottom20 advertisement hidden-print">
                    </div>
                    <!-- End Advertisement -->


                    <hr>

                </article>


            </div>
{{-- sidebar --}}
            <div class="col-md-4 main-content custom-block">
                <div class="news-feed-area mt-4">
                    <div class="news-feed-nav">
                        <button id="latest_news_button" class="active">সর্বশেষ</button>
                        <button id="most_read_news_button">সর্বাধিক পঠিত</button>
                    </div>
                    <div id="latest_news" class="news-feed-latest mt-4">
                        <div class="row">

                            <div class="col-9">
                                <a href=""> ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                    </div>
                    <div id="most_read_news" style="display: none;" class="news-feed-latest mt-4">
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-9">
                                <a href="">সেনাঘাঁটিতে হামলায় ১৮০ বিদেশি ভাড়াটে যোদ্ধা নিহত: রাশিয়া</a>

                            </div>
                        </div>
                    </div>
                    <div class="news_feed_all_news_button">
                        <button>সব খবর</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection


