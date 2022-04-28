<section>
    <div class="header-top">
        <div class="container top-bar-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-bar-link ">
                        <ul>
                            <li> ঢাকা</li>
                            <li>
                             {{$englishDate}}
                            </li>
                            <li>{{$banglahDate}}</li>
                            <li>২৫শে মহর্ররম ১৪৪২</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" id="searchdiv">
                    <div class="top-header-right">
                        <div class="search-container d-lg-block d-none">
                            <form action="/action_page.php">
                                <input type="text" placeholder="কী খুঁজতে চান ?" name="search">
                                <button type="submit"><i class="fas fa-search"></i>সার্স</button>
                            </form>
                        </div>
                        <div class="top-bar-social-icon d-sm-block d-none">
                            <a href=""><i class="fab fa-facebook-square"></i></a>
                            <a href=""><i class="fab fa-instagram-square"></i></a>
                            <a href=""><i class="fab fa-twitter-square"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                            <a href=""><i class="fab fa-pinterest-square"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="mobile-search-show d-lg-none mt-2 ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="কী খুঁজতে চান ?"
                                aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">সার্স</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
