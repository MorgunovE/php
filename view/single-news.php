<!-- banner-section start -->
    <section class='inner-banner-section pt-120 pb-120'>
        <div class='container'>
            <div class='row justify-content-center'>
                <div class='col-lg-7 text-center'>
                    <div class='inner-banner-content'>
                        <h2 class='title'>Blog Single </h2>
                        <div class='breadcrumb-area'>
                            <nav aria-label='breadcrumb'>
                                <ol class='breadcrumb'>
                                <li class='breadcrumb-item'><a href='/'>Home</a></li>
                                <li class='breadcrumb-item active' aria-current='page'>Blog Post</li>
                                <li class='breadcrumb-item active' aria-current='page'>Blog Single</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <a href='#' class='scrollToTop'><i class='fas fa-angle-up'></i></a>


    <!-- blog-section start -->
    <section class='blog-section pt-120 pb-120'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-8'>
                    <div class='blog-item mb-60'>
                        <div class='blog-thumb'>
                            <img src='../view/assets/images/<?= $arResult['img'] ?>' alt='blog image'>
                        </div>
                        <div class='blog-content blog-content--style2'>
                            <div class='meta-post d-flex flex-wrap'>
                                <div class='meta-user'>
                                    <a href='#'><i class='fas fa-user'></i> <span>Keven Feil</span></a>
                                </div>
                                <div class='meta-date'>
                                    <a href='#'><i class='fas fa-calendar-alt'></i> <span><?= $newsDate = date('d M Y', strtotime($arResult['date'])) ?></span></a>
                                </div>
                            </div>
                            <h5 class='title'><?= $arResult['title'] ?></h5>
                            <p><?= $arResult['text'] ?></p>
                            <div class='blog-details'>
                                <div class='row mb-30-none mt-30'>
                                    <div class='col-lg-6 mb-30'>
                                        <div class='blog-details-thumb'>
                                            <img src='../view/assets/images/<?= $arResult['img'] ?>' alt='image'>
                                        </div>
                                    </div>
                                    <div class='col-lg-6 mb-30'>
                                        <div class='blog-details-content'>
                                            <p><?= $arResult['text'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <blockquote>
                                <p class='quote-content'><?= $arResult['text'] ?></p>
                            </blockquote>
                            <p><?= $arResult['text'] ?></p>
                        </div>
                    </div>
                    <div class='comments-section'>
                        <h3 class='title'>03 comment</h3>
                        <ul class='comment-wrapper'>
                            <li>
                                <div class='comment-item'>
                                    <div class='comment-thumb'>
                                        <a href='#'><img src='../view/assets/images/comment-1.png' alt='blog'></a>
                                    </div>
                                    <div class='comment-content'>
                                        <h6 class='sub-title'><a href='#'>Jana Reichel</a></h6>
                                        <span>2 Hours ago</span>
                                        <p>faucibus aliquam quam dignissim a, mauris sapien. Et lobortis, etiadignisslus,amet proin a pellentesque vitae tempor ut penatibus veslum bibendum morbi, semper integer</p>
                                        <a href='#' class='reply-button'>Reply</a>
                                    </div>
                                </div>
                                <ul class='reply-wrapper'>
                                    <li>
                                        <div class='comment-item'>
                                            <div class='comment-thumb'>
                                                <a href='#'><img src='../view/assets/images/comment-2.png' alt='blog'></a>
                                            </div>
                                            <div class='comment-content'>
                                                <h6 class='sub-title'><a href='#'>Nona Ruecker</a></h6>
                                                <span>3 days ago</span>
                                                <p>faucibus aliquam quam dignissim a, mauris sapien. Et lobortis, etiadig nisslus,amet proin a pellentesque vitae tempor ut penatibus veslum bibendum morbi, semper integer</p>
                                                <a href='#' class='reply-button'>Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class='comment-item'>
                                    <div class='comment-thumb'>
                                        <a href='#'><img src='../view/assets/images/comment-3.png' alt='blog'></a>
                                    </div>
                                    <div class='comment-content'>
                                        <h6 class='sub-title'><a href='#'>Louie Volkman</a></h6>
                                        <span>7 days ago</span>
                                        <p>faucibus aliquam quam dignissim a, mauris sapien. Et lobortis, etiadignisslus,amet proin a pellentesque vitae tempor ut penatibus veslum bibendum morbi, semper integer</p>
                                        <a href='#' class='reply-button'>Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class='leave-comment'>
                        <h3 class='title'>Leave A Comment</h3>
                        <form class='comment-form'>
                            <div class='row mb-30-none'>
                                <div class='col-sm-6 form-group mb-30'>
                                    <input type='text' placeholder='Name*'>
                                </div>
                                <div class='col-sm-6 form-group mb-30'>
                                    <input type='text' placeholder='Email*'>
                                </div>
                                <div class='col-sm-12 form-group mb-30'>
                                    <textarea placeholder='Your Message'></textarea>
                                </div>
                                <div class='col-sm-12 form-group mb-30'>
                                    <input type='submit' class='cmn-btn' value='Post Comment'>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class='col-lg-4 col-sm-8'>
                    <div class='sidebar'>
                        <div class='widget-box mb-30'>
                            <div class='search-option'>
                                <input type='text' name='search' placeholder='Search Keyword'>
                            </div>
                            <button class='search-submit' type='submit'>
                                <i class='fas fa-search'></i>
                            </button>
                        </div>
                        <div class='widget-box mb-30'>
                            <span class='caption bottom-border'>Category</span>
                            <ul class='category-content'>
                                <li><a href=''>Hosting</a><span class='count'>30</span></li>
                                <li><a href=''>Domain Name</a><span class='count'>15</span></li>
                                <li><a href=''>Support</a><span class='count'>70</span></li>
                                <li><a href=''>Cloud Hosting</a><span class='count'>22</span></li>
                                <li><a href=''>Website</a><span class='count'>35</span></li>
                            </ul>
                        </div>
                        <div class='widget-box mb-30'>
                            <span class='caption bottom-border'>Recent Post</span>
                            <div class='blog-item'>
                                <div class='blog-content blog-content--style'>
                                    <h5 class='title title--style'><a href='blog-details.html'>It’s Complicated The Path of Palestinian Love Story</a></h5>
                                    <div class='meta-post meta-post--style d-flex flex-wrap'>
                                        <div class='meta-user'>
                                            <a href='#'> <span>Post by Keven Feil</span></a>
                                        </div>
                                        <div class='meta-date'>
                                            <a href='#'> <span>21 Jun 2019</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='blog-item'>
                                <div class='blog-content blog-content--style'>
                                    <h5 class='title title--style'><a href='blog-details.html'>British Columbia’s Business Temp Opaque Array of Tax Breaks</a></h5>
                                    <div class='meta-post meta-post--style d-flex flex-wrap'>
                                        <div class='meta-user'>
                                            <a href='#'> <span>Post by Reta Schmidt        </span></a>
                                        </div>
                                        <div class='meta-date'>
                                            <a href='#'> <span>30 Jun 2019</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='blog-item'>
                                <div class='blog-content blog-content--style'>
                                    <h5 class='title title--style'><a href='blog-details.html'>Meet Toronto’s Gavel-Wielding Puck-Shooting</a></h5>
                                    <div class='meta-post meta-post--style d-flex flex-wrap'>
                                        <div class='meta-user'>
                                            <a href='#'> <span>Post by Bette Herzog</span></a>
                                        </div>
                                        <div class='meta-date'>
                                            <a href='#'> <span>15 Aug 2019</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='widget-box'>
                            <span class='caption bottom-border'>Tag</span>
                            <div class='tag-item-wrapper'>
                                <a href='#' class='tag-item active'>Business</a>
                                <a href='#' class='tag-item'>Marketing</a>
                                <a href='#' class='tag-item'>Research</a>
                                <a href='#' class='tag-item'>Business Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-section end -->