@extends('layout')

@section('title', 'Contact Architecture Studio Team')

@section('content')
    @parent
    <section class="half-section bg-light-gray parallax" data-parallax-background-ratio="0.5" style="background-image:url('images/portfolio-bg2.jpg');padding-bottom:0;">
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen" style="height: 150px;">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h2 class="text-extra-dark-gray alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Contact Us</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-light-gray" style="padding:0 0 20px 0">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- start fancy text box item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box feature-box-hide-show-hover bg-white border-radius-6px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                            <div class="feature-box-move-bottom-top padding-5-rem-lr padding-15px-tb lg-padding-2-half-rem-lr md-padding-4-half-rem-lr">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Mail-Read d-block icon-medium text-fast-blue margin-25px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="text-extra-dark-gray text-extra-medium d-block alt-font font-weight-500">How can we help you?</span>
                                    <a href="mailto:info@rhizomespace.com" class="alt-font text-decoration-underline">Send us an email</a>
                                </div>
                                <div class="move-bottom-top margin-10px-top last-paragraph-no-margin">
                                    <p>info@rhizomespace.com</p>
                                </div>
                            </div>
                            <div class="feature-box-overlay"></div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                    <!-- start fancy text box item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box feature-box-hide-show-hover bg-white border-radius-6px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                            <div class="feature-box-move-bottom-top padding-5-rem-lr padding-15px-tb lg-padding-2-half-rem-lr md-padding-4-half-rem-lr">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Phone-2 d-block icon-medium text-fast-blue margin-25px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="text-extra-dark-gray text-extra-medium d-block alt-font font-weight-500">Feel free to get in touch?</span>
                                    <a href="#" class="alt-font text-decoration-underline">Give us a call toady</a>
                                </div>
                                <div class="move-bottom-top margin-10px-top last-paragraph-no-margin">
                                    <span>India - +91 9873808707 </apan>
                                        <span>Sydney - +61 434390721</span>
                                </div>
                            </div>
                            <div class="feature-box-overlay"></div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                    <!-- start fancy text box item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8">
                        <div class="feature-box feature-box-hide-show-hover bg-white border-radius-6px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                            <div class="feature-box-move-bottom-top padding-5-rem-lr padding-15px-tb lg-padding-2-half-rem-lr md-padding-4-half-rem-lr">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Approved-Window d-block icon-medium text-fast-blue margin-25px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="text-extra-dark-gray text-extra-medium d-block alt-font font-weight-500">Want to work with us?</span>
                                    <a href="mailto:info@rhizomespace.com" class="alt-font text-decoration-underline">Mail your resume</a>
                                </div>
                                <div class="move-bottom-top margin-10px-top last-paragraph-no-margin">
                                    <p>info@rhizomespace.com</p>
                                </div>
                            </div>
                            <div class="feature-box-overlay"></div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                </div>
            </div>
        </section>
        <section class="wow animate__fadeIn" style="padding:30px 0 30px 0;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                                <h4 class="alt-font font-weight-600 text-extra-dark-gray">How we can help you?</h4>
                            </div>
                            <div class="col-12">
                                <!-- start contact form -->
                                <form action="email-templates/contact-form.php" method="post">
                                    <div class="row row-cols-1 row-cols-md-2">
                                        <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                            <input class="medium-input bg-white margin-25px-bottom required" type="text" name="name" placeholder="Your name">
                                            <input class="medium-input bg-white margin-25px-bottom required" type="email" name="email" placeholder="Your email address">
                                            <input class="medium-input bg-white mb-0" type="tel" name="phone" placeholder="Your mobile">
                                        </div>
                                        <div class="col margin-4-rem-bottom sm-margin-10px-bottom">
                                            <textarea class="medium-textarea h-200px bg-white" name="comment" placeholder="Your message"></textarea>
                                        </div>
                                        <div class="col text-start sm-margin-30px-bottom">
                                            <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right">
                                            <label for="terms_condition" class="text-small d-inline-block align-top w-85">I accept the terms & conditions and I understand that my data will be hold securely in accordance with the <a href="#" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                                        </div>
                                        <div class="col text-center text-md-end">
                                            <input type="hidden" name="redirect" value="">
                                            <button class="btn btn-medium btn-gradient-light-purple-light-orange mb-0 submit" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                    <div class="form-results d-none"></div>
                                </form>
                                <!-- end contact form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-extra-dark-gray fancy-box-background big-section cover-background" style="background-image: url('assets/img/slide/Housing_Sydney.jpg');padding:50px 0 30px 0;" >
            <div class="opacity-very-light opacity-0-half z-index-minus-1 bg-gradient-sky-blue-pink"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 col-md-9 text-center margin-3-rem-bottom sm-margin-3-half-rem-bottom">
                        <h4 class="alt-font text-white font-weight-600">Rhizome Offices</h4>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <!-- start fancy text box item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 fancy-box-item md-margin-30px-bottom xs-margin-15px-bottom">
                        <div class="bg-banner-image cover-background" style="background-image: url(assets/img/india.png)"><div class="opacity-medium bg-gradient-sky-blue-pink"></div></div>
                        <div class="feature-box feature-box-left-icon-middle feature-box-dark-hover padding-4-rem-lr padding-3-rem-tb bg-white border-radius-5px overflow-hidden lg-padding-3-rem-lr">
                            <div class="feature-box-icon margin-15px-right">
                                <img src="assets/img/india.png" class="w-35px d-block" alt="contact us img flag-01" />
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font d-block font-weight-500 text-extra-dark-gray">India - Gurugram</span>
                            </div>
                            <div class="bg-medium-gray margin-20px-tb w-100 h-1px"></div>
                            <p class="margin-10px-bottom w-85 lg-w-100 sm-w-75 xs-w-85">129 First Floor Sector 39, Gurugram, Haryana 122003</p>
                            <span class="d-block font-weight-500 margin-10px-top text-extra-dark-gray line-height-20px w-100">Phone: +91 01244269247, 01242978281, 01242581819</span>
                            <a href="mailto:info@yourdomain.com" class="text-fast-blue text-decoration-underline">info@rhizomespace.com</a>
                            <div class="feature-box-overlay bg-extra-dark-gray"></div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                    <!-- start fancy text box item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 fancy-box-item md-margin-30px-bottom xs-margin-15px-bottom">
                        <div class="bg-banner-image cover-background" style="background-image: url(assets/img/australia.png)"><div class="opacity-medium bg-gradient-sky-blue-pink"></div></div>
                        <div class="feature-box feature-box-left-icon-middle feature-box-dark-hover padding-4-rem-lr padding-3-rem-tb bg-white border-radius-5px overflow-hidden lg-padding-3-rem-lr">
                            <div class="feature-box-icon margin-15px-right">
                                <img src="assets/img/australia.png" class="w-35px d-block" alt="contact us img flag-02" />
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font d-block font-weight-500 text-extra-dark-gray">Australia - Sydney</span>
                            </div>
                            <div class="bg-medium-gray margin-20px-tb w-100 h-1px"></div>
                            <p class="margin-10px-bottom w-85 lg-w-100 sm-w-75 xs-w-85">315/10-20 McEvoy Street, Waterloo NSW 2017</p>
                            <span class="d-block font-weight-500 margin-10px-top text-extra-dark-gray line-height-20px w-100">Phone: +61 434390721</span>
                            <a href="mailto:info@yourdomain.com" class="text-fast-blue text-decoration-underline">info@rhizomespace.com</a>
                            <div class="feature-box-overlay bg-extra-dark-gray"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-0 wow animate__fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col h-600px p-0 md-h-450px xs-h-300px">
                        <iframe class="w-100 h-100 filter-grayscale-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.7747818849425!2d77.08510031554358!3d28.486328497432797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce402455385a9%3A0xf232434f358e9d5a!2sStudio%20Rhizome!5e0!3m2!1sen!2sin!4v1633022847818!5m2!1sen!2sin"></iframe>
                    </div>
                </div>
            </div>
        </section>
@endsection
