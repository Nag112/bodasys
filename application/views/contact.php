
    <!-- Contact Information And Title Area Start -->
    <div class="contact-info mt-5 pb-90">
        <div class="container">
            <div class="row mb-n10">
                <div class="col-md-4 mb-10" data-aos="fade-up" data-aos-delay="100">
                    <div class="info">
                        <div class="info-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="info-content">
                            <h4 class="title">Our Location</h4>
                            <span class="info-text"> 2717 Commercial Center Blvd, Ste E200, Katy, TX 77494 USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-10" data-aos="fade-up" data-aos-delay="300">
                    <div class="info">
                        <div class="info-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h4 class="title">Give Us A Call</h4>
                            <br/>
                            <span class="info-text"> 346-667-7353 </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-10" data-aos="fade-up" data-aos-delay="600">
                    <div class="info">
                        <div class="info-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="info-content">
                            <h4 class="title">Help Desk</h4>
                            <span class="info-text">
                            <br/>
                            <a href="mailto:info@bodasystems.com">info@bodasystems.com</a>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Information End -->
    <!-- Contact Map Start -->
    <div class="contac-map pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--Google Map Area Start-->
                    <div class="google-map-area">
                    <iframe title="" class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3464.289447173457!2d-95.77702608489199!3d29.740335181993988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864121fd24bbbd95%3A0x809bc71a2f27035f!2s2717%20Commercial%20Center%20Blvd%20Ste%20E200%2C%20Katy%2C%20TX%2077494%2C%20USA!5e0!3m2!1sen!2sin!4v1625035943236!5m2!1sen!2sin" loading="lazy"></iframe>
                    
                    </div>
                    <!--Google Map Area Start-->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Map End -->
    <!-- Contact Form Start -->
    <div class="contact-form-area bg-light pt-90 pb-90" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8">
                    <div class="contact-form">
                        <form action="<?=site_url('home/sendmail')?>" id="contact-form" method="post">
                            <div class="row">
                                <div class="col-md-6 col-12 mb-6">
                                    <input class="input-item" type="text" placeholder="Your Name *" name="name">
                                </div>
                                <div class="col-md-6 col-12 mb-6">
                                    <input class="input-item" type="email" placeholder="Email *" name="email">
                                </div>
                                <div class="col-12 mb-6">
                                    <input class="input-item" type="text" placeholder="Subject *" name="subject">
                                </div>
                                <div class="col-12 mb-6">
                                    <textarea class="textarea-item" name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary btn-hover-dark">Submit</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->