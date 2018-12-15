@extends('layouts.public')
@section('title', 'Contact | NS Medical')
@section('dependencies')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact_responsive.css') }}">
@endsection
@section('content')
<div class="contact">
    <div class="container">
        <div class="row">

            <!-- Get in touch -->
            <div class="col-lg-8 contact_col">
                <div class="get_in_touch">
                    <div class="section_title">Get in Touch</div>
                    <div class="section_subtitle">Say hello</div>
                    <div class="contact_form_container">
                        <form action="/contact" method="POST" id="contact_form" class="contact_form">
                            @csrf
                            <div>
                                <!-- Subject -->
                                <label for="contact_company">Name</label>
                                <input type="text" id="contact_company" name="name" class="contact_input">
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <!-- Name -->
                                    <label for="contact_name">Phone*</label>
                                    <input type="text" id="contact_name" name="phone" class="contact_input" required="required">
                                </div>
                                <div class="col-xl-6 last_name_col">
                                    <!-- Last Name -->
                                    <label for="contact_last_name">Email*</label>
                                    <input type="text" id="contact_last_name" name="email" class="contact_input" required="required">
                                </div>
                            </div>
                            <div>
                                <label for="contact_textarea">Message*</label>
                                <textarea id="contact_textarea" name="product" class="contact_input contact_textarea" required="required"></textarea>
                            </div>
                            <button class="button contact_button"><span>Send Message</span></button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 offset-xl-1 contact_col">
                <div class="contact_info">
                    <div class="contact_info_section">
                        <div class="contact_info_title">Marketing</div>
                        <ul>
                            <li>Phone: <span>+91 983 0293 951</span></li>
                            <li>Email: <span>nsmedicaleagency2018@gmail.com</span></li>
                        </ul>
                    </div>
                    <div class="contact_info_section">
                        <div class="contact_info_title">24 x 7 Technical Helpline</div>
                        <ul>
                            <li>Phone: <span>+91 912 3731 953</span></li>
                            <li>Email: <span>nsgoswami09@gmail.com</span></li>
                        </ul>
                    </div>
                    <div class="contact_info_section">
                        <div class="contact_info_title">Office Address</div>
                        <ul>
                            <li>Address: <span>Trikon Park, Barasat, Kolkata 124</span></li>
                            <li>Country: <span>India</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row map_row">
            <div class="col">

                <!-- Google Map -->
                <div class="map">
                    <div id="google_map" class="google_map">
                        <div class="map_container">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
@endsection