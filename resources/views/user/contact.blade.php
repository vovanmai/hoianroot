@extends('user.layouts.app')

@section('title', 'Contact us | Hoi An Coffee Making Class and Brewing Experience - HoiAnRoots')

@section('url', route('contact'))

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Contact us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    @include('user.layouts.menu_scroll')

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Information Start -->
                    <div class="contact-information">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Get in touch with us</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We’d love to hear from you! Whether you’re curious about our coffee menu, planning to host a small gathering, or simply want to share your feedback. Drop by for a warm cup of coffee, call us for quick assistance, or send us a message—we’ll get back to you as soon as possible.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Info Body Start -->
                        <div class="contact-info-body">
                            <!-- Contact Info Box Start -->
                            <div class="contact-info-box-1 wow fadeInUp" data-wow-delay="0.4s">
                                <!-- Contact Info Item Start -->
                                <div class="contact-info-item">
                                    <!-- Icon Box Start -->
                                    <div class="icon-box">
                                        <img src="{{ asset('user/images/icon-phone-accent.svg') }}" alt="">
                                    </div>
                                    <!-- Icon Box End -->

                                    <!-- Contact Item Content Start -->
                                    <div class="contact-item-content">
                                        <h3>phone number</h3>
                                        <p><a href="tel:+84344778879">+84 344 778 879</a></p>
                                    </div>
                                    <!-- Contact Item Content End -->
                                </div>
                                <!-- Contact Info Item End -->

                                <!-- Contact Info Item Start -->
                                <div class="contact-info-item">
                                    <!-- Icon Box Start -->
                                    <div class="icon-box">
                                        <img src="{{ asset('user/images/icon-mail-accent.svg') }}" alt="">
                                    </div>
                                    <!-- Icon Box End -->

                                    <!-- Contact Item Content Start -->
                                    <div class="contact-item-content">
                                        <h3>email address</h3>
                                        <p><a href="mailto:chibang1994@gmail.com">chibang1994@gmail.com</a></p>
                                    </div>
                                    <!-- Contact Item Content End -->
                                </div>
                                <!-- Contact Info Item End -->
                            </div>
                            <!-- Contact Info Box End -->

                            <!-- Contact Info Box Start -->
                            <div class="contact-info-box-2 wow fadeInUp" data-wow-delay="0.6s">
                                <!-- Contact Info Item Start -->
                                <div class="contact-info-item">
                                    <!-- Icon Box Start -->
                                    <div class="icon-box">
                                        <img src="{{ asset('user/images/icon-location-accent.svg') }}" alt="">
                                    </div>
                                    <!-- Icon Box End -->

                                    <!-- Contact Item Content Start -->
                                    <div class="contact-item-content">
                                        <h3>Address</h3>
                                        <p>An Mỹ RestStop</p>
                                    </div>
                                    <!-- Contact Item Content End -->
                                </div>
                                <!-- Contact Info Item End -->
                            </div>
                            <!-- Contact Info Box End -->
                        </div>
                        <!-- Contact Info Body End -->
                    </div>
                    <!-- Contact Information End -->
                </div>

                <div class="col-lg-6">
                    <!-- Contact Us Form Start -->
                    <div class="contact-us-form">
                        <!-- Contact Form Content Start -->
                        <div class="contact-form-content">
                            <h3 class="wow fadeInUp">send a message</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Share your thoughts with us—we’re always happy to hear from our coffee lovers.</p>
                        </div>
                        <!-- Contact Form Content End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <form id="contactForm" action="{{ url('/contact') }}" class="wow fadeInUp" data-wow-delay="0.4s">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-5">
                                        <input type="text" name="full_name" class="form-control" id="fullname" placeholder="Full Name">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-5">
                                        <div class="phone-input-container" style="display: flex; gap: 0;">
                                            <select name="country_code" class="form-control form-select country-code-select" id="country_code">
                                                <!-- Asia -->
                                                <option value="+84" data-flag="🇻🇳">🇻🇳 +84</option>
                                                <option value="+81" data-flag="🇯🇵">🇯🇵 +81</option>
                                                <option value="+82" data-flag="🇰🇷">🇰🇷 +82</option>
                                                <option value="+86" data-flag="🇨🇳">🇨🇳 +86</option>
                                                <option value="+852" data-flag="🇭🇰">🇭🇰 +852</option>
                                                <option value="+853" data-flag="🇲🇴">🇲🇴 +853</option>
                                                <option value="+886" data-flag="🇹🇼">🇹🇼 +886</option>
                                                <option value="+91" data-flag="🇮🇳">🇮🇳 +91</option>
                                                <option value="+65" data-flag="🇸🇬">🇸🇬 +65</option>
                                                <option value="+66" data-flag="🇹🇭">🇹🇭 +66</option>
                                                <option value="+62" data-flag="🇮🇩">🇮🇩 +62</option>
                                                <option value="+60" data-flag="🇲🇾">🇲🇾 +60</option>
                                                <option value="+63" data-flag="🇵🇭">🇵🇭 +63</option>
                                                <option value="+92" data-flag="🇵🇰">🇵🇰 +92</option>
                                                <option value="+970" data-flag="🇵🇸">🇵🇸 +970</option>
                                                <option value="+966" data-flag="🇸🇦">🇸🇦 +966</option>
                                                <option value="+971" data-flag="🇦🇪">🇦🇪 +971</option>

                                                <!-- Europe -->
                                                <option value="+44" data-flag="🇬🇧">🇬🇧 +44</option>
                                                <option value="+45" data-flag="🇩🇰">🇩🇰 +45</option>
                                                <option value="+46" data-flag="🇸🇪">🇸🇪 +46</option>
                                                <option value="+48" data-flag="🇵🇱">🇵🇱+48</option>
                                                <option value="+353" data-flag="🇮🇪">🇮🇪 +353</option>
                                                <option value="+33" data-flag="🇫🇷">🇫🇷 +33</option>
                                                <option value="+49" data-flag="🇩🇪">🇩🇪 +49</option>
                                                <option value="+39" data-flag="🇮🇹">🇮🇹 +39</option>
                                                <option value="+34" data-flag="🇪🇸">🇪🇸 +34</option>
                                                <option value="+31" data-flag="🇳🇱">🇳🇱 +31</option>
                                                <option value="+32" data-flag="🇧🇪">🇧🇪 +32</option>
                                                <option value="+41" data-flag="🇨🇭">🇨🇭 +41</option>
                                                <option value="+46" data-flag="🇸🇪">🇸🇪 +46</option>
                                                <option value="+47" data-flag="🇳🇴">🇳🇴 +47</option>
                                                <option value="+358" data-flag="🇫🇮">🇫🇮 +358</option>
                                                <option value="+7" data-flag="🇷🇺">🇷🇺 +7</option>
                                                <option value="+48" data-flag="🇵🇱">🇵🇱 +48</option>
                                                <option value="+30" data-flag="🇬🇷">🇬🇷 +30</option>

                                                <!-- Americas -->
                                                <option value="+1" data-flag="🇺🇸">🇺🇸 +1</option>
                                                <option value="+1" data-flag="🇨🇦">🇨🇦 +1</option>
                                                <option value="+52" data-flag="🇲🇽">🇲🇽 +52</option>
                                                <option value="+55" data-flag="🇧🇷">🇧🇷 +55</option>
                                                <option value="+54" data-flag="🇦🇷">🇦🇷 +54</option>
                                                <option value="+56" data-flag="🇨🇱">🇨🇱 +56</option>
                                                <option value="+57" data-flag="🇨🇴">🇨🇴 +57</option>
                                                <option value="+51" data-flag="🇵🇪">🇵🇪 +51</option>
                                                <option value="+53" data-flag="🇨🇺">🇨🇺 +53</option>
                                                <option value="+598" data-flag="🇺🇾">🇺🇾 +598</option>
                                                <option value="+591" data-flag="🇧🇴">🇧🇴 +591</option>
                                                <option value="+500" data-flag="🇫🇰">🇫🇰 +500</option>
                                                <option value="+592" data-flag="🇬🇾">🇬🇾 +592</option>

                                                <!-- Africa -->
                                                <option value="+20" data-flag="🇪🇬">🇪🇬 +20</option>
                                                <option value="+212" data-flag="🇲🇦">🇲🇦 +212</option>
                                                <option value="+234" data-flag="🇳🇬">🇳🇬 +234</option>
                                                <option value="+254" data-flag="🇰🇪">🇰🇪 +254</option>
                                                <option value="+27" data-flag="🇿🇦">🇿🇦 +27</option>

                                                <!-- Oceania -->
                                                <option value="+61" data-flag="🇦🇺">🇦🇺 +61</option>
                                                <option value="+64" data-flag="🇳🇿">🇳🇿 +64</option>
                                            </select>
                                            <input style="border-radius: 0px" type="tel" name="phone" class="form-control" id="phone" placeholder="Phone Number">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="3" placeholder="Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="contact-form-btn">
                                            <button type="submit" class="btn-default">submit message</button>
                                            <div id="msgSubmit" class="alert mt-3" style="display: none;"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Google Map Section Start -->
    <div class="google-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map IFrame Start -->
                    <div class="google-map-iframe">
                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.4171934843307!2d108.3570518!3d15.8871998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31420d0045d70a35%3A0xcca324c65926741c!2sHoi%20An%20Coffee%20Making%20Class!5e0!3m2!1sen!2s!4v1755573063899!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.1951316542004!2d108.34935399999999!3d15.8988449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31420d5bc00bd349%3A0x248955e1a3c5aeb!2sAn%20M%E1%BB%B9%20RestStop!5e0!3m2!1sen!2s!4v1781095835220!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                    </div>
                    <!-- Google Map IFrame End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map Section End -->

    <!-- Fix Google Maps Display -->
    <style>
        .google-map-iframe {
            position: relative;
            pointer-events: auto !important;
        }

        .google-map-iframe iframe {
            pointer-events: auto !important;
            filter: none !important;
            opacity: 1 !important;
            transition: none !important;
        }

        .google-map {
            pointer-events: auto !important;
        }

        /* Remove any overlay effects */
        .google-map::before,
        .google-map-iframe::before {
            display: none !important;
        }

        /* Ensure map is always interactive */
        .google-map iframe {
            pointer-events: auto !important;
        }
    </style>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#contactForm').on('submit', function(e) {
                    e.preventDefault(); // Prevent default form submission

                    // Get form data
                    var formData = new FormData(this);
                    var submitBtn = $(this).find('button[type="submit"]');
                    var msgSubmit = $('#msgSubmit');

                    // Disable submit button and show loading state
                    submitBtn.prop('disabled', true).text('Submitting...');
                    msgSubmit.removeClass('text-success text-danger').hide();

                    // Clear previous error messages
                    $('.help-block.with-errors').empty();
                    $('.form-control').removeClass('is-invalid');

                    $.ajax({
                        url: $(this).attr('action'),
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            // Success handling
                            msgSubmit.addClass('text-success')
                                    .text('Contact submitted successfully! We will contact you soon.')
                                    .show();

                            // Reset form
                            $('#contactForm')[0].reset();


                            // Scroll to success message
                            // $('html, body').animate({
                            //     scrollTop: msgSubmit.offset().top - 100
                            // }, 500);
                        },
                        error: function(xhr) {
                            if (xhr.status === 422) {
                                // Validation errors
                                var errors = xhr.responseJSON.errors;

                                $.each(errors, function(field, messages) {
                                    var fieldElement = $('[name="' + field + '"]');
                                    var helpBlock = fieldElement.closest('.form-group').find('.help-block.with-errors');

                                    // fieldElement.addClass('is-invalid');
                                    helpBlock.html('<div class="text-danger">' + messages[0] + '</div>');
                                });

                                msgSubmit.addClass('text-danger')
                                        .text('Please fix the errors above and try again.')
                                        .show();
                            } else {
                                // General error
                                msgSubmit.addClass('text-danger')
                                        .text('Something went wrong. Please try again later.')
                                        .show();
                            }

                            // Scroll to error message
                            // $('html, body').animate({
                            //     scrollTop: msgSubmit.offset().top - 100
                            // }, 500);
                        },
                        complete: function() {
                            // Re-enable submit button
                            submitBtn.prop('disabled', false).text('Send Message');
                        }
                    });
                });

                // Clear error styling when user starts typing/selecting
                $('.form-control').on('input change', function() {
                    $(this).removeClass('is-invalid');
                    $(this).closest('.form-group').find('.help-block.with-errors').empty();
                });
            });
        </script>
    @endpush
@endsection

