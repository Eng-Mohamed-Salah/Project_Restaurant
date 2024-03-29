@extends('home.shared.shared')

{{-- Title Page --}}
@section('title')
Menu
@endsection

{{-- Style Css --}}
@section('style')
@endsection

{{-- Content --}}
@section('content')

    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="page_breadcrumb" style="background: url({{ asset( 'assets') }}/images/counter_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>Popular Foods menu</h1>
                    <ul>
                        <li><a href="{{route('home')}}">home</a></li>
                        <li><a href="{{route('menu')}}">menu</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        MENU PAGE START
    ==============================-->
    <section class="menu_page mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <form class="menu_search_area">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <div class="menu_search">
                            <input type="text" placeholder="search...">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="menu_search">
                            <div class="select_area">
                                <select class="select_js">
                                    <option value="AL">default shorting</option>
                                    <option value="">short by popularity</option>
                                    <option value="">short by avarage rating</option>
                                    <option value="">short by latest</option>
                                    <option value="">short by low to high</option>
                                    <option value="">short by high to low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="menu_search">
                            <button class="common_btn" type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="{{ asset( 'assets') }}/images/menu2_img_1.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">Biryani</a>
                            <a class="title" href="menu_details.html">Hyderabadi biryani</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>24</span>
                            </p>
                            <h5 class="price">$65.00 <del>$90.00</del></h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="{{ asset( 'assets') }}/images/menu2_img_2.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">Chicken</a>
                            <a class="title" href="menu_details.html">Daria Shevtsova</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>30</span>
                            </p>
                            <h5 class="price">$80.00</h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="{{ asset( 'assets') }}/images/menu2_img_3.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">burger</a>
                            <a class="title" href="menu_details.html">Spicy Burger</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>17</span>
                            </p>
                            <h5 class="price">$100.00 <del>$110.00</del></h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="{{ asset( 'assets') }}/images/menu2_img_4.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">dressert</a>
                            <a class="title" href="menu_details.html">Fried Chicken</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>22</span>
                            </p>
                            <h5 class="price">$99.00</h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="{{ asset( 'assets') }}/images/menu2_img_5.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">kabab</a>
                            <a class="title" href="menu_details.html">Mozzarella Sticks</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>72</span>
                            </p>
                            <h5 class="price">$75.00</h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="{{ asset( 'assets') }}/images/menu2_img_6.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">kacchi</a>
                            <a class="title" href="menu_details.html">Popcorn Chicken</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>57</span>
                            </p>
                            <h5 class="price">$69.00 <del>$80.00</del></h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="{{ asset( 'assets') }}/images/menu2_img_7.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">noodles</a>
                            <a class="title" href="menu_details.html">Chicken Wings</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>43</span>
                            </p>
                            <h5 class="price">$79.00 <del>$90.00</del></h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="{{ asset( 'assets') }}/images/menu2_img_8.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">grill</a>
                            <a class="title" href="menu_details.html">Onion Rings</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>62</span>
                            </p>
                            <h5 class="price">$110.00</h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination mt_50">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CART POPUT START -->
    <div class="cart_popup">
        <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fal fa-times"></i></button>
                        <div class="cart_popup_img">
                            <img src="{{ asset( 'assets') }}/images/popup_cart_img.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="cart_popup_text">
                            <a href="#" class="title">Maxican Pizza Test Better</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(201)</span>
                            </p>
                            <h4 class="price">$320.00 <del>$350.00</del> </h4>

                            <div class="details_size">
                                <h5>select size</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="large"
                                        checked>
                                    <label class="form-check-label" for="large">
                                        large <span>+ $350</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="medium">
                                    <label class="form-check-label" for="medium">
                                        medium <span>+ $250</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="small">
                                    <label class="form-check-label" for="small">
                                        small <span>+ $150</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_extra_item">
                                <h5>select option <span>(optional)</span></h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="coca-cola">
                                    <label class="form-check-label" for="coca-cola">
                                        coca-cola <span>+ $10</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="7up">
                                    <label class="form-check-label" for="7up">
                                        7up <span>+ $15</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_quentity">
                                <h5>select quentity</h5>
                                <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                    <div class="quentity_btn">
                                        <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                        <input type="text" placeholder="1">
                                        <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                    </div>
                                    <h3>$320.00</h3>
                                </div>
                            </div>
                            <ul class="details_button_area d-flex flex-wrap">
                                <li><a class="common_btn" href="#">add to cart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CART POPUT END -->

    <!--=============================
        MENU PAGE END
    ==============================-->

@endsection

{{-- Scripting js --}}
@section('scripts')
@endsection