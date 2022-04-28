<div class="container">
    <div class="row">
        <div class="col-md-9">
            @foreach ($categorynews as $category)
            @if (count($category->news)>0)
            <section class="leadBox box-white paddingTop10 my-1">
                <!-- <div class="container"> -->
                <div class="col-sm-12 main-content custom-block">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="catTitleBlock catTitleBackground">
                                <span class="left">
                                    <span class="catName">
                                        <a href="https://dailyrunnernews.com/?cat=3">{{ $category->name }}</a>
                                    </span>
                                </span>
                                <a href="https://dailyrunnernews.com/?cat=3" class="right">আরও <i
                                        class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </h2>

                        </div>
                    </div>
                    <div class="row">
                        @foreach (array_slice(json_decode($category->news), 0,6) as $news)
                            <div class="col-sm-4">
                                <div class="single-block">
                                    <div class="img-box">
                                        <img src="{{ asset('storage/images/' . $news->thumbnail) }}"  class="img-responsive" alt="{{ $news->thumbnail }}">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h4><a href="{{route('singlenews', $news->id)}}">{{$news->title}}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>



                    <!-- <div> -->

            </section>
            @endif

            @endforeach






        </div>
        @include('frontend.layout.sidebar')
    </div>
</div>
