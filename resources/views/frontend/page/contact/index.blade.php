@extends('frontend.layouts.base')
@section('title', 'Contact -')
@section('toolbar')

@include('frontend/components/toolbar',['title' => 'Contact Us', 'backgroundImage' => asset('background/contact_us.jpg')])

@endsection

@section('content')
<!-- google-map-section -->
<!-- {{ asset('easton/images/icons/map-marker.png') }} -->
@php
$pin = asset('easton/images/icons/map-marker.png');
@endphp
<br>
<section class="google-map">
    <div class="map-inner p_relative d_block">
        <iframe style="width: 100%; height: 100vh; border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d349.84126872674767!2d112.72828625976307!3d-7.240593167488873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf55d10a021%3A0x4bd9e94f28b9c4f9!2sPT.%20Avairra%20Indo%20Karya!5e0!3m2!1sid!2sid!4v1703750123679!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!-- google-map-section end -->


<!-- contact-style-three -->
<section class="contact-style-three">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                <div class="contact-info mr_70">
                    <h3> How can I assist you today?</h3>
                    <p>We're here to help! Feel free to reach out anytime during business hours. We strive to answer all inquiries within 24 hours on weekdays.</p>
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
            <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                <div class="form-inner">
                    <form method="post" action="{{ route('landing.send_message') }}" id="contact-form">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="username" placeholder="Your Name" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Your email" required="">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" name="phone" required="" placeholder="Phone">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <div class="check-box">
                                    <input class="check" type="checkbox" id="checkbox">
                                    <label for="checkbox">I agree that my submitted data is being collected and stored.
                                        *</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
                                <button class="theme-btn btn-one" type="submit" name="submit-form">Send Message <i
                                        class="far fa-angle-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-style-three end -->

@endsection

@section('script')
    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
	<script src="{{ asset('jeremia-assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('easton/js/gmaps.js')}}"></script>
    <script src="{{ asset('easton/js/map-helper.js')}}"></script>
    <script>
        document.getElementById("contact-form").onsubmit = function() {
            if (!document.getElementById("checkbox").checked) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Anda harus menyetujui bahwa data yang Anda kirimkan akan dikumpulkan dan disimpan.',
                });
                return false;
            }
            return true;
        };
    </script>
@endsection