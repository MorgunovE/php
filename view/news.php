<!-- banner-section start -->
<section class="inner-banner-section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="inner-banner-content">
                    <h2 class="title">Blog Post </h2>
                    <div class="breadcrumb-area">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="main.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Post</li>
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


<!-- blog-section start -->
<section class="blog-section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
<!--              27-->
              <? foreach ( $arResult as $item ) {
//                $first = mb_substr($item['text'], 0, 100, 'UTF-8');
                $array = explode ( ' ', $item[ 'text' ] );
                $array = array_slice ( $array, 0, 15 );
                $previewText = implode ( ' ', $array );
//                echo $previewText. "...";
                $newsDate = date ( 'd M Y', strtotime ( $item[ 'date' ] ) );
                ?>
                <div class="blog-item mb-60">
                      <div class="blog-thumb">
<!--                        36-->
                        <a href="/news/?id=<?= $item[ 'id' ] ?>">
<!--                        35-->
                          <img src="../view/assets/images/<?= $item[ 'img' ] ?>" alt="blog image">
                        </a>
                      </div>
                      <div class="blog-content blog-content--style2">
                          <div class="meta-post d-flex flex-wrap">
                              <div class="meta-user">
                                  <a href="#"><i class="fas fa-user"></i> <span>Keven Feil</span></a>
                              </div>
                              <div class="meta-date">
                                  <a href="#"><i class="fas fa-calendar-alt"></i> <span><?= $newsDate ?></span></a>
                              </div>
                          </div>
                        <!--                        36-1-->
                          <h5 class="title"><a href="/news/?id=<?= $item[ 'id' ] ?>"><?= $item[ 'title' ] ?></a></h5>
                          <p><?= $previewText . '...' ?></p>
                        <!--                        36-2-->
                          <a href="/news/?id=<?= $item[ 'id' ] ?>" class="cmn-btn">Read More</a>
                      </div>
                  </div>
              <? }; ?>
              <div class="row">
                    <ul class="pagination">
                        <li><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#">05</a></li>
                        <li><a href="#">06</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-8">
                <div class="sidebar">
                    <div class="widget-box mb-30">
                        <div class="search-option">
                            <input type="text" name="search" placeholder="Search Keyword">
                        </div>
                        <button class="search-submit" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="widget-box mb-30">
                        <span class="caption bottom-border">Category</span>
                        <ul class="category-content">
                            <li><a href="">Hosting</a><span class="count">30</span></li>
                            <li><a href="">Domain Name</a><span class="count">15</span></li>
                            <li><a href="">Support</a><span class="count">70</span></li>
                            <li><a href="">Cloud Hosting</a><span class="count">22</span></li>
                            <li><a href="">Website</a><span class="count">35</span></li>
                        </ul>
                    </div>
                    <div class="widget-box mb-30">
                        <span class="caption bottom-border">Recent Post</span>
                        <div class="blog-item">
                            <div class="blog-content blog-content--style">
                                <h5 class="title title--style"><a href="blog-details.html">It’s Complicated The Path of
                                        Palestinian Love Story</a></h5>
                                <div class="meta-post meta-post--style d-flex flex-wrap">
                                    <div class="meta-user">
                                        <a href="#"> <span>Post by Keven Feil</span></a>
                                    </div>
                                    <div class="meta-date">
                                        <a href="#"> <span>21 Jun 2019</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-content blog-content--style">
                                <h5 class="title title--style"><a href="blog-details.html">British Columbia’s Business
                                        Temp Opaque Array of Tax Breaks</a></h5>
                                <div class="meta-post meta-post--style d-flex flex-wrap">
                                    <div class="meta-user">
                                        <a href="#"> <span>Post by Reta Schmidt        </span></a>
                                    </div>
                                    <div class="meta-date">
                                        <a href="#"> <span>30 Jun 2019</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-content blog-content--style">
                                <h5 class="title title--style"><a href="blog-details.html">Meet Toronto’s Gavel-Wielding
                                        Puck-Shooting</a></h5>
                                <div class="meta-post meta-post--style d-flex flex-wrap">
                                    <div class="meta-user">
                                        <a href="#"> <span>Post by Bette Herzog</span></a>
                                    </div>
                                    <div class="meta-date">
                                        <a href="#"> <span>15 Aug 2019</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-box">
                        <span class="caption bottom-border">Tag</span>
                        <div class="tag-item-wrapper">
                            <a href="#" class="tag-item active">Business</a>
                            <a href="#" class="tag-item">Marketing</a>
                            <a href="#" class="tag-item">Research</a>
                            <a href="#" class="tag-item">Business Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-section end -->
    
