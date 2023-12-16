<section class="page-title centred">
    <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url({{ asset('easton/images/background/page-title.jpg')}});"></div>
    <div class="auto-container">
        <div class="content-box">
            @if (isset($title))
                <h2>{{ isset($title) ? $title : '' }}</h2>
            @endif
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                @if (isset($title))
                    <li>{{ isset($title) ? $title : '' }}</li>
                @endif
                @if (isset($subtitle))
                    <li>{{ isset($subtitle) ? $subtitle : '' }}</li>    
                @endif
            </ul>
        </div>
    </div>
</section>