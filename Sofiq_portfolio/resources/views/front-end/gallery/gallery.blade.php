@extends('front-end.master')
@section('title')
    Image Gallery
@endsection

@section('body')

    <div class="demo-gallery">
        <ul id="lightgallery" class="list-unstyled row">
            <li class="col-xs-6 col-sm-4 col-md-3 col-lg-3" data-responsive=" {{ asset('/') }}/front-end/image/slideshow/gift.jpg" data-src="{{ asset('/') }}/front-end/image/slideshow/gift.jpg"
                data-sub-html="<h2>Karzon Hall</h2><p>Me, Zahid & Sujon</p>">
                <a href="">
                    <img class="img-responsive" src="{{ asset('/') }}/front-end/image/slideshow/gift.jpg">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3 col-lg-3" data-responsive=" {{ asset('/') }}/front-end/image/slideshow/IIT.jpg" data-src="{{ asset('/') }}/front-end/image/slideshow/IIT.jpg"
                data-sub-html="<h2>In-font-of-IIT</h2><p>Friends for ever.</p>">
                <a href="">
                    <img class="img-responsive" src="{{ asset('/') }}/front-end/image/slideshow/IIT.jpg">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3 col-lg-3" data-responsive=" {{ asset('/') }}/front-end/image/slideshow/picnic.jpg" data-src="{{ asset('/') }}/front-end/image/slideshow/picnic.jpg"
                data-sub-html="<h2>Picnic</h2><p>Me, Faisal, Samsu, Nadia & Hira</p>">
                <a href="">
                    <img class="img-responsive" src="{{ asset('/') }}/front-end/image/slideshow/picnic.jpg">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3 col-lg-3" data-responsive="{{ asset('/') }}/front-end/image/slideshow/rag-day.jpg" data-src="{{ asset('/') }}/front-end/image/slideshow/rag-day.jpg"
                data-sub-html="<h2>In-font-of-TSC</h2><p>Rag-day</p>">
                <a href="">
                    <img class="img-responsive" src="{{ asset('/') }}/front-end/image/slideshow/rag-day.jpg">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3 col-lg-3" data-responsive=" {{ asset('/') }}/front-end/image/slideshow/kasmir4.jpg" data-src="{{ asset('/') }}/front-end/image/slideshow/kasmir4.jpg"
                data-sub-html="<h2>Kasmir-India,2015</h2><p>Tulip Garden</p>">
                <a href="">
                    <img class="img-responsive" src="{{ asset('/') }}/front-end/image/slideshow/kasmir4.jpg">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3 col-lg-3" data-responsive="{{ asset('/') }}/front-end/image/slideshow/1.jpg" data-src="{{ asset('/') }}/front-end/image/slideshow/1.jpg"
                data-sub-html="<h2>50th-Convocation</h2><p>Me </p>">
                <a href="">
                    <img class="img-responsive" src="{{ asset('/') }}/front-end/image/slideshow/1.jpg">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3 col-lg-3" data-responsive=" {{ asset('/') }}/front-end/image/slideshow/2.jpg" data-src="{{ asset('/') }}/front-end/image/slideshow/2.jpg"
                data-sub-html="<h2>50th-Convocation</h2><p>Sujon, Likhon & Me</p>">
                <a href="">
                    <img class="img-responsive" src="{{ asset('/') }}/front-end/image/slideshow/2.jpg">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3 col-lg-3" data-responsive=" {{ asset('/') }}/front-end/image/slideshow/3.jpg" data-src="{{ asset('/') }}/front-end/image/slideshow/3.jpg"
                data-sub-html="<h2>50th-Convocation</h2><p>Me</p>">
                <a href="">
                    <img class="img-responsive" src="{{ asset('/') }}/front-end/image/slideshow/3.jpg">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3 col-lg-3" data-responsive=" {{ asset('/') }}/front-end/image/slideshow/4.jpg" data-src="{{ asset('/') }}/front-end/image/slideshow/4.jpg"
                data-sub-html="<h2>50th-Convocation</h2><p>Sujon, Razu, Erfan, Me & Zahid</p>">
                <a href="">
                    <img class="img-responsive" src="{{ asset('/') }}/front-end/image/slideshow/4.jpg">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3 col-lg-3" data-responsive="slideshow/5.jpg" data-src="{{ asset('/') }}/front-end/image/slideshow/5.jpg"
                data-sub-html="<h2>50th-Convocation</h2><p>Samsu, Me, Shanto, Erfan & Razu</p>">
                <a href="">
                    <img class="img-responsive" src="{{ asset('/') }}/front-end/image/slideshow/5.jpg">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3 col-lg-3" data-responsive="{{ asset('/') }}/front-end/image/slideshow/6.jpg" data-src="{{ asset('/') }}/front-end/image/slideshow/6.jpg"
                data-sub-html="<h2>50th-Convocation</h2><p>Me & Razu</p>">
                <a href="">
                    <img class="img-responsive" src="{{ asset('/') }}/front-end/image/slideshow/6.jpg">
                </a>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-3 col-lg-3" data-responsive="{{ asset('/') }}/front-end/image/slideshow/7.jpg" data-src="{{ asset('/') }}/front-end/image/slideshow/7.jpg"
                data-sub-html="<h2>50th-Convocation</h2><p>IIT-3rd-Batch</p>">
                <a href="">
                    <img class="img-responsive" src="{{ asset('/') }}/front-end/image/slideshow/7.jpg">
                </a>
            </li>

        </ul>
    </div>
@endsection