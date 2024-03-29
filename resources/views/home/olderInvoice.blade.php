@extends('home.shared.shared')

{{-- Title Page --}}
@section('title')
Older Invoice
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
                    <h1>user dashboard</h1>
                    <ul>
                        <li><a href="{{route('home')}}">home</a></li>
                        <li><a href="{{route('older-inovice')}}">Older Invoice</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=========================
        DASHBOARD START
    ==========================-->
    <section class="dashboard mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="dashboard_area">
                <div class="row">
                  
                    <div class="col-xl-12 col-lg-8 wow fadeInUp" data-wow-duration="1s">
                        <div class="dashboard_content">
                            <div class="dashboard_body">
                                <h3>invoice</h3>
                                <div class="invoice">
                                    <a class="go_back" href="{{route('profile')}}"><i
                                            class="fas fa-long-arrow-alt-left"></i> go back</a>
                                    <div class="track_order">
                                        <ul>
                                            <li class="active">order pending</li>
                                            <li>order accept</li>
                                            <li>order process</li>
                                            <li>on the way</li>
                                            <li>Completed</li>
                                        </ul>
                                    </div>
                                    <div class="invoice_header">
                                        <div class="header_address">
                                            <h4>invoice to</h4>
                                            <p>7232 Broadway Suite 308, Jackson Heights, 11372, NY, United
                                                States</p>
                                            <p>+1347-430-9510</p>
                                        </div>
                                        <div class="header_address">
                                            <p><b>invoice no: </b><span>4574</span></p>
                                            <p><b>Order ID:</b> <span> #4789546458</span></p>
                                            <p><b>date:</b> <span>10-11-2022</span></p>
                                        </div>
                                    </div>
                                    <div class="invoice_body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr class="border_none">
                                                        <th class="sl_no">SL</th>
                                                        <th class="package">item description</th>
                                                        <th class="price">Price</th>
                                                        <th class="qnty">Quantity</th>
                                                        <th class="total">Total</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="sl_no">01</td>
                                                        <td class="package">
                                                            <p>Hyderabadi Biryani</p>
                                                            <span class="size">small</span>
                                                            <span class="coca_cola">coca-cola</span>
                                                            <span class="coca_cola2">7up</span>
                                                        </td>
                                                        <td class="price">
                                                            <b>$120</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b>2</b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$240</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="sl_no">02</td>
                                                        <td class="package">
                                                            <p>Daria Shevtsova</p>
                                                            <span class="size">medium</span>
                                                            <span class="coca_cola">coca-cola</span>
                                                        </td>
                                                        <td class="price">
                                                            <b>$120</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b>2</b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$240</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="sl_no">03</td>
                                                        <td class="package">
                                                            <p>Hyderabadi Biryani</p>
                                                            <span class="size">large</span>
                                                            <span class="coca_cola2">7up</span>
                                                        </td>
                                                        <td class="price">
                                                            <b>$120</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b>2</b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$240</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="sl_no">04</td>
                                                        <td class="package">
                                                            <p>Hyderabadi Biryani</p>
                                                            <span class="size">medium</span>
                                                            <span class="coca_cola">coca-cola</span>
                                                            <span class="coca_cola2">7up</span>
                                                        </td>
                                                        <td class="price">
                                                            <b>$120</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b>2</b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$240</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="sl_no">05</td>
                                                        <td class="package">
                                                            <p>Daria Shevtsova</p>
                                                            <span class="size">large</span>
                                                        </td>
                                                        <td class="price">
                                                            <b>$120</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b>2</b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$240</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="sl_no">04</td>
                                                        <td class="package">
                                                            <p>Hyderabadi Biryani</p>
                                                            <span class="size">medium</span>
                                                            <span class="coca_cola">coca-cola</span>
                                                            <span class="coca_cola2">7up</span>
                                                        </td>
                                                        <td class="price">
                                                            <b>$120</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b>2</b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$240</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="sl_no">04</td>
                                                        <td class="package">
                                                            <p>Hyderabadi Biryani</p>
                                                            <span class="size">medium</span>
                                                            <span class="coca_cola">coca-cola</span>
                                                            <span class="coca_cola2">7up</span>
                                                        </td>
                                                        <td class="price">
                                                            <b>$120</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b>2</b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$240</b>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td class="package" colspan="3">
                                                            <b>sub total</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b>12</b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$755</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="package coupon" colspan="3">
                                                            <b>(-) Discount coupon</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b></b>
                                                        </td>
                                                        <td class="total coupon">
                                                            <b>$0.00</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="package coast" colspan="3">
                                                            <b>(+) Shipping Cost</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b></b>
                                                        </td>
                                                        <td class="total coast">
                                                            <b>$10.00</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="package" colspan="3">
                                                            <b>Total Paid</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b></b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$765</b>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <a class="print_btn common_btn" href="#"><i class="far fa-print"></i> print
                                        PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        DASHBOARD END
    ==========================-->
@endsection

{{-- Scripting js --}}
@section('scripts')
@endsection