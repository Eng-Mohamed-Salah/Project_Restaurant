@extends('home.shared.shared')

{{-- Title Page --}}
@section('title')
Blog Detials
@endsection

{{-- Style Css --}}
@section('style')
@endsection

{{-- Content --}}
@section('content')

    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="page_breadcrumb" style="background: url({{ asset( 'assets') }}/images/breadcrumb_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>blog details</h1>
                    <ul>
                        <li><a href="{{route('home')}}">home</a></li>
                        <li><a href="{{route('blog-details')}}">blog details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=========================
        BLOG DETAILS START
    ==========================-->
    <section class="blog_details mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="blog_det_area">
                        <div class="blog_details_img wow fadeInUp" data-wow-duration="1s">
                            <img src="{{ asset( 'assets') }}/images/blog_details.jpg" alt="blog details" class="imf-fluid w-100">
                        </div>
                        <div class="blog_details_text wow fadeInUp" data-wow-duration="1s">
                            <ul class="details_bloger d-flex flex-wrap">
                                <li><i class="far fa-user"></i> By Admin</li>
                                <li><i class="far fa-comment-alt-lines"></i> 12 Comments</li>
                                <li><i class="far fa-calendar-alt"></i> 18 July 2022</li>
                            </ul>
                            <h2>Different Spice For A Different Cheese Bruschetta</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                ered alteration in some form, by injected humour, or randomised word which don't look
                                even slightly believable. If you are going to use a passage of Lorem Ipsulm you need to
                                sure there isn't anything embarrassing hidden in the middle of text.</p>
                            <p>Erators on the Internet tend to repeat predefined chunks as necessiary, making this the
                                true generator on the Internet. It uses a dictionary of over 200 Latin words, combinedss
                                handful of model sentence structures</p>

                            <h3>Creative approach to every project</h3>
                            <p>Sure there isn't anything embarrassing hidden in the middle of text. All the Lorem our
                                asIpsum gen erators on the Internet tend to repeat predefined chunks as the as
                                necessliary, making this the first
                                true generator on the Internet. It uses a dictionary of over 200 our asliatin words,
                                combined with a
                                handful of model sentence structures</p>

                            <ul class="blog_details_list">
                                <li>there isn't anything embarrassing hidden in the middle of text. All the Lorem our
                                    asIpsum gen erator</li>
                                <li>predefined chunks as the as necessliary, making this the first true generator on the
                                </li>
                                <li>asliatin words, combined with a handful of model sentence structures</li>
                                <li>Asearch for 'lorem ipsum' will uncover many </li>
                            </ul>

                            <div class="blog_center_img">
                                <div class="row">
                                    <div class="col-xl-6 col-md-5">
                                        <div class="blog_center_img_item">
                                            <img src="{{ asset( 'assets') }}/images/download_img.png" alt="blog" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-7">
                                        <div class="blog_center_text">
                                            <h3>Creative approach to every project</h3>
                                            <p>Sure there isn't anything embarrassing hidden in the middle of text. All
                                                the Lorem our asIpsum gen erators on the Internet tend to repeat
                                                predefined chunks as the as necessliary, making this the first true
                                                generator</p>
                                            <p>Sure there isn't anything embarrassing hidden in the middle of text. All
                                                the Lorem our asIpsum gen erators on the Internet tend to repeat
                                                predefined.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3>Creative approach to every project</h3>
                            <p>Sure there isn't anything embarrassing hidden in the middle of text. All the Lorem our
                                asIpsum gen erators on the Internet tend to repeat predefined chunks as the as
                                necessliary, making this the first
                                true generator on the Internet. It uses a dictionary of over 200 our asliatin words,
                                combined with a
                                handful of model sentence structures</p>

                            <ul class="blog_details_list">
                                <li>predefined chunks as the as necessliary, making this the first true generator on the
                                </li>
                                <li>asliatin words, combined with a handful of model sentence structures</li>
                                <li>All the Lorem Ipsum generators</li>
                                <li>Asearch for 'lorem ipsum' will uncover many </li>
                            </ul>
                            <p>Sure there isn't anything embarrassing hidden in the middle of text. All the Lorem our
                                asIpsum gen erators on the Internet tend to repeat predefined chunks as the as
                                necessliary, making this the first
                                true generator on the Internet. It uses a dictionary of over 200 our asliatin words,
                                combined with a
                                handful of model sentence structures</p>
                            <div class="blog_tags_share d-flex flex-wrap justify-content-between align-items-center">
                                <div class="tags d-flex flex-wrap align-items-center">
                                    <span>tags:</span>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#">Cleaning</a></li>
                                        <li><a href="#">AC Repair</a></li>
                                        <li><a href="#">Home Move</a></li>
                                    </ul>
                                </div>
                                <div class="share d-flex flex-wrap align-items-center">
                                    <span>share:</span>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment mt_50 wow fadeInUp" data-wow-duration="1s">
                        <h4>03 Comments</h4>
                        <div class="single_comment m-0 border-0">
                            <img src="{{ asset( 'assets') }}/images/testimonial_img_1.jpg" alt="review" class="img-fluid">
                            <div class="single_comm_text">
                                <h3>Michel Holder <span>29 oct 2022 </span></h3>
                                <p>Sure there isn't anything embarrassing hiidden in the
                                    middles of text. All erators on the Internet
                                    tend to repeat predefined chunks</p>
                                <a href="#">Reply <i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>
                        <div class="single_comment">
                            <img src="{{ asset( 'assets') }}/images/testimonial_img_2.jpg" alt="review" class="img-fluid">
                            <div class="single_comm_text">
                                <h3>salina khan <span>29 oct 2022 </span></h3>
                                <p>Sure there isn't anything embarrassing hiidden in the
                                    middles of text. All erators on the Internet
                                    tend to repeat predefined chunks</p>
                                <a href="#">Reply <i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>
                        <div class="single_comment replay">
                            <img src="{{ asset( 'assets') }}/images/testimonial_img_3.jpg" alt="review" class="img-fluid">
                            <div class="single_comm_text">
                                <h3>Mouna Sthesia <span>29 oct 2022 </span></h3>
                                <p>Sure there isn't anything embarrassing hiidden in the
                                    middles of text. All erators on the Internet
                                    tend to repeat predefined chunks</p>
                                <a href="#">Reply <i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>
                        <div class="single_comment">
                            <img src="{{ asset( 'assets') }}/images/testimonial_img_1.jpg" alt="review" class="img-fluid">
                            <div class="single_comm_text">
                                <h3>marjan janifar <span>29 oct 2022 </span></h3>
                                <p>Sure there isn't anything embarrassing hiidden in the
                                    middles of text. All erators on the Internet
                                    tend to repeat predefined chunks</p>
                                <a href="#">Reply <i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>

                        <div class="pagination mt_30">
                            <div class="row">
                                <div class="col-12">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i
                                                        class="fas fa-long-arrow-alt-left"></i></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i
                                                        class="fas fa-long-arrow-alt-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment_input mt_50 wow fadeInUp" data-wow-duration="1s">
                        <h4>Leave A Comment</h4>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form>
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <label>name</label>
                                    <div class="contact_form_input">
                                        <span><i class="fas fa-user"></i></span>
                                        <input type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <label>email</label>
                                    <div class="contact_form_input">
                                        <span><i class="fas fa-envelope"></i></span>
                                        <input type="email" placeholder="Mail">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <label>comment</label>
                                    <div class="contact_form_input textarea">
                                        <span><i class="fas fa-pen"></i></span>
                                        <textarea rows="5" placeholder="Your Comment"></textarea>
                                    </div>
                                    <button type="submit" class="common_btn mt_20">Submit comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div id="sticky_sidebar">
                        <div class="blog_search blog_sidebar m-0 wow fadeInUp" data-wow-duration="1s">
                            <h3>Search</h3>
                            <form>
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="related_blog blog_sidebar wow fadeInUp" data-wow-duration="1s">
                            <h3>Latest Post</h3>
                            <ul>
                                <li>
                                    <img src="{{ asset( 'assets') }}/images/blog_1.jpg" alt="blog" class="img-fluid w-100">
                                    <div class="text">
                                        <a href="#">Mechanic at car service tire change the car.</a>
                                        <p><i class="far fa-calendar-alt"></i> 29 oct 2022</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset( 'assets') }}/images/blog_2.jpg" alt="blog" class="img-fluid w-100">
                                    <div class="text">
                                        <a href="#">Transportation and logistics of container cargo ship.</a>
                                        <p><i class="far fa-calendar-alt"></i> 29 oct 2022</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset( 'assets') }}/images/blog_3.jpg" alt="blog" class="img-fluid w-100">
                                    <div class="text">
                                        <a href="#">Commercial cleaning crew ladies working.</a>
                                        <p><i class="far fa-calendar-alt"></i> 29 oct 2022</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="blog_categori blog_sidebar wow fadeInUp" data-wow-duration="1s">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#">Home Cleaning <span>10</span></a></li>
                                <li><a href="#">Painting & Renovation <span>20</span></a></li>
                                <li><a href="#">Cleaning & Pest Control <span>14</span></a></li>
                                <li><a href="#">Emergency Services <span>41</span></a></li>
                                <li><a href="#">Car Care Services <span>05</span></a></li>
                                <li><a href="#">Electric & Plumbing <span>35</span></a></li>
                                <li><a href="#">Home Move <span>48</span></a></li>
                            </ul>
                        </div>
                        <div class="blog_tags blog_sidebar wow fadeInUp" data-wow-duration="1s">
                            <h3>Popular Tags</h3>
                            <ul>
                                <li><a href="#">Cleaning </a></li>
                                <li><a href="#">Car Repair</a></li>
                                <li><a href="#">Plumbing</a></li>
                                <li><a href="#">Painting</a></li>
                                <li><a href="#">Past Control</a></li>
                                <li><a href="#">AC Repair</a></li>
                                <li><a href="#">Home Move</a></li>
                                <li><a href="#">Disinfection</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        BLOG DETAILS END
    ==========================-->

@endsection

{{-- Scripting js --}}
@section('scripts')
@endsection


