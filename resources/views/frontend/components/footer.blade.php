<footer class="main-footer p_relative bg-color-2">
    <div class="icon-layer"><img src="{{ asset('easton/images/icons/icon-5.png')}}" alt=""></div>
    <div class="footer-top p_relative d_block">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget logo-widget">
                        <figure class="footer-logo"><a href="{{ route('landing.home') }}"><img src="{{ asset('easton/images/footer-logo.png')}}" alt=""></a></figure>
                        <div class="text">
                            <p>Best Choice to Provide Solutions the Latest on Security Solutions and Energy & Efficiency Measurements for Protect Income.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column"></div>
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Link</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{ route('landing.home') }}">Home Pages</a></li>
                                <li><a href="{{ route('landing.aboutUs') }}">About Pages</a></li>
                                <li><a href="{{ route('landing.products') }}">Our Product Pages</a></li>
                                <li><a href="{{ route('landing.contact') }}">Contact Pages</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Contacts</h3>
                        </div>
                        <div class="widget-content">
                            @if (isset($address))
                            <ul class="info-list clearfix">
                                @php
                                $phoneNumbers = explode('//', $company->phone_number);
                                $addressArr = explode('//', $company->address);
                                @endphp

                                @foreach($addressArr as $addr)
                                <li>{{ $addr }}</li>
                                @endforeach

                                @foreach ($phoneNumbers as $phoneNumber)
                                <li><a href="https://wa.me/+{{ $phoneNumber }}?text=Halo%20Admin%2C%20Saya%20ingin%20mendapatkan%20informasi%20lebih%20lanjut">+{{ $phoneNumber }}</a></li>
                                @endforeach

                                <li><a href="mailto:{{ $company->email }}">{{ $company->email }}</a></li>
                            </ul>
                                
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom p_relative">
        <div class="auto-container">
            <div class="bottom-inner p_relative">
                <div class="copyright"><p><a href="{{ route('landing.home') }}">PT.Avairra</a> &copy; {{ date('Y') }} All Right Reserved</p></div>
            </div>
        </div>
    </div>
</footer>