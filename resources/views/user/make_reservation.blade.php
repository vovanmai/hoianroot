@extends('user.layouts.app')

@section('title', 'Make Reservation | Hoi An Coffee Making Class and Brewing Experience - HoiAnRoots')

@section('url', route('make-reservation'))

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Make reservation</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Make reservation</li>
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

    <!-- Page Book Table Start -->
    <div class="page-book-table">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Book Table Image Start -->
                    <div class="book-table-image">
                        <figure class="image-anime">
                            <img src="{{ asset('user/images/reservation.webp') }}" alt="">
                        </figure>
                    </div>
                    <!-- Book Table Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Book Table Content Start -->
                    <div class="book-table-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Make reservation</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Online Reservation</h2>
                            {{-- <p class="wow fadeInUp" data-wow-delay="0.2s">Book your favorite table or a coffee making class with our seamless online system. Enjoy convenience at your fingertips!</p> --}}
                            {{-- <p class="wow fadeInUp" data-wow-delay="0.4s"><b>Booking request <a href="tel:+84344778879">+84 344 778 879</a> or fill out the order form</b></p> --}}
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Us Form Start -->
                        <div class="contact-us-form wow fadeInUp" data-wow-delay="0.6s">
                            <form id="appointmentForm" action="{{ url('reservations') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12 mb-5">
                                        <input type="text" name="full_name" class="form-control" id="fullname" placeholder="Full Name (*)">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
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
                                            <input style="border-radius: 0px" type="tel" name="phone" class="form-control" id="phone" placeholder="Phone Number/WhatsApp (*)">
                                        </div>
                                        <div class="whatsapp-warning">If you do not have a WhatsApp number, please provide your email below.</div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-5">
                                        <input type="date" value="{{ now()->format('Y-m-d') }}" name="date" class="form-control" id="date">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-5">
                                        <select name="time" class="form-control form-select" id="time">
                                            <option value="" disabled selected>Time (*)</option>
                                            <option value="10:00">10:00</option>
                                            <option value="14:00">14:00</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <input min="1" type="number" name="number_of_guests" class="form-control" id="fullname" placeholder="Number of Guests (*)">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="note" class="form-control" id="message" rows="2" placeholder="Note"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="book-table-btn">
                                            <button type="submit" class="btn-default">Make reservation</button>
                                            <div id="msgSubmit" class="alert mt-3" style="display: none;"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Us Form End -->
                    </div>
                    <!-- Book Table Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Book Table End -->

    <!-- Phone Input Styling and Validation -->
    <style>
        .phone-input-container {
            position: relative;
        }

        .whatsapp-warning {
            color: #fbbf24;
            font-size: 12px;
            margin-top: 8px;
            line-height: 1.4;
        }

        .country-code-select {
            background-color: #f8f9fa;
            font-size: 14px;
            font-weight: 500;
            width: auto !important;
            min-width: 90px;
            flex-shrink: 0;
            padding-right: 30px; /* Space for dropdown arrow */
        }

        .country-code-select:focus {
            border-color: #ced4da !important;
            box-shadow: none !important;
            outline: none !important;
        }

        .phone-input-container input[type="tel"] {
            flex: 1;
        }

        .phone-input-container input[type="tel"]:focus {
            border-color: #ced4da !important;
            box-shadow: none !important;
            outline: none !important;
        }

        .phone-input-container .form-control {
            transition: all 0.3s ease;
        }

        /* Ensure proper spacing */
        .phone-input-container {
            display: flex !important;
            gap: 0 !important;
        }

        /* Date input calendar icon styling */
        input[type="date"]::-webkit-calendar-picker-indicator {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='%23ffffff' d='M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 16px;
            cursor: pointer;
            width: 20px;
            height: 20px;
        }

        /* Remove default styling */
        input[type="date"]::-webkit-inner-spin-button,
        input[type="date"]::-webkit-clear-button {
            display: none;
        }
    </style>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#appointmentForm').on('submit', function(e) {
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
                                    .text('Reservation submitted successfully! We will contact you soon.')
                                    .show();

                            // Reset form
                            $('#appointmentForm')[0].reset();

                            // Set default date to today
                            $('#date').val('{{ now()->format('Y-m-d') }}');

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
                            submitBtn.prop('disabled', false).text('Make reservation');
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

