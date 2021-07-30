<!-- banner-section start -->
<section class="inner-banner-section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="inner-banner-content">
                    <h2 class="title">Get In Touch With Us</h2>
                    <div class="breadcrumb-area">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="main.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->


<a href="#" class="scrollToTop"><i class="fas fa-angle-up"></i></a>


<!-- contact-section start -->
<section class="contact-section pt-120">
    <div class="container">
        <div class="row mb-30-none">
            <div class="col-lg-6 mb-30">
                <div class="contact-thumb">
                    <img src="assets/images/02_Home.png" alt="image">
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="contact-form-title">
                    <h2 class="title">Get In Touch</h2>
                </div>
                <form class="contact-form">
                    <div class="row mb-30-none">
                        <div class="col-sm-6 form-group mb-30">
                            <input type="text" placeholder="Name*">
                        </div>
                        <div class="col-sm-6 form-group mb-30">
                            <input type="text" placeholder="Email*">
                        </div>
                        <div class="col-sm-12 form-group mb-30">
                            <textarea placeholder="Your Message" rows="8"></textarea>
                        </div>
                        <div class="col-sm-12 form-group mb-30">
                            <input type="submit" class="cmn-btn" value="Post Comment">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->


<!-- contact-info start -->
<div class="contact-info-area pt-120">
    <div class="container">
        <div class="contact-info-item-area pt-120 pb-120">
              <div class="row justify-content-center mb-30">
                  <div class="col-lg-4 col-sm-8 text-center mb-30">
                      <div class="contact-info-item">
                          <i class="flaticon-pin"></i>
                          <h3 class="title">Office Address</h3>
                          <p><?=$arResult[0]['addres']?><br/><?=$arResult[1]['addres']?></p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-8 text-center mb-30">
                      <div class="contact-info-item">
                          <i class="flaticon-message"></i>
                          <h3 class="title">Email Address</h3>
                          <p><?=$arResult[0]['email']?><br/><?=$arResult[1]['email']?></p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-8 text-center mb-30">
                      <div class="contact-info-item">
                          <i class="flaticon-phone"></i>
                          <h3 class="title">Phone Number</h3>
                          <p><?=$arResult[0]['phone']?><br/><?=$arResult[1]['phone']?></p>
                      </div>
                  </div>
              </div>
        </div>
    </div>
</div>
<!-- contact-info end -->


<div class="maps"></div>


<!-- newslatter-section start -->
<section class="newslatter-section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="newslatter-content mb-30">
                    <h2 class="title">Don`t Forget Subscribe Our Newslatter</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <form class="newslatter-form">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email Adress">
                    </div>
                    <button type="submit" class="subscribe-btn"><i class="flaticon-plane"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- newslatter-section end -->

