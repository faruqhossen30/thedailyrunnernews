@extends('frontend.layout.app')
@section('content')
    <section class="big_category_header hidden-xs" style="background-image: url()">
        <div class="container category_cat_head">
            <h1><a href="{{ route('subcategory.news', $subcategory->id) }}">{{ $subcategory->name }}</a>

            </h1>

        </div>
        <div class="sub_category_menu">
            <div class="container">

            </div>
        </div>
    </section>

    <!-- Menu-body section-start -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 main-content">

                {{-- single page start --}}
                @foreach (array_slice(json_decode($allnews), 0, 1) as $news)
                <div class="row">
                    <div class="col-sm-12">
                        <div class="single-block single-block-thumbnail">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="img-box post-thumbnail">
                                        <a href="{{ route('singlenews', $news->id) }}">
                                            <img src="{{ asset('storage/images/' . $news->thumbnail) }}"
                                                class="img-responsive" alt="{{ $news->thumbnail }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="paddingRight10 paddingTop20">
                                        <h1 style="font-size:2.5em;line-height:34px;margin-bottom:10px;"><a
                                                href="{{ route('singlenews', $news->id) }}">{{ $news->title }}</a></h1>
                                        {{ $news->meta_title }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                {{-- single page ennd --}}

                {{-- category page start --}}
                <div class="row my-3" id="loadMoreContent">
                    @foreach ($allnews as $news)
                        <div class="col-sm-6 ">
                            <div class="single-block cat-block ">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="img-box single-post">
                                            <a href="{{ route('singlenews', $news->id) }}">
                                                <img src="{{ asset('storage/images/' . $news->thumbnail) }}"
                                                    class="img-fluid" alt="{{ $news->thumbnail }}" style="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="paddingTop10 paddingRight10">
                                            <h3 style="font-size:1.1em; margin-top:18px">
                                                <a href="{{ route('singlenews', $news->id) }}"
                                                    title="দুর্নীতিবিরোধী বার্তা দেবেন প্রধানমন্ত্রী">{{ $news->title }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- category page end --}}
                <div class="text-center paddingBottom20">
                    <ul class="pagination pagination-sm">
                        <li class="active"><span aria-current="page" class="page-numbers current">১</span></li>
                        <li><a class="page-numbers" href="https://dailyrunnernews.com/?cat=17&amp;paged=2">২</a></li>
                        <li><a class="next page-numbers" href="https://dailyrunnernews.com/?cat=17&amp;paged=2">পরবর্তী
                                →</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="news-feed-area mt-4">
                    <div class="news-feed-nav">
                        <button id="latest_news_button" class="active">সর্বশেষ</button>
                        <button id="most_read_news_button">সর্বাধিক পঠিত</button>
                    </div>
                    <div id="latest_news" class="news-feed-latest mt-4">
                        @foreach ($latestnews as $latest)
                            <div class="row">
                                <div class="col-9">
                                    <a href="{{ route('singlenews', $latest->id) }}">{{ $latest->title }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div id="most_read_news" style="display: none;" class="news-feed-latest mt-4">
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
                </div> --}}
                    <div class="news_feed_all_news_button">
                        <button>সব খবর</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>
    </div>
@endsection