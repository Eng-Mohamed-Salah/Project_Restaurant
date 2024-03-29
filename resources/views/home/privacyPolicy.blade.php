@extends('home.shared.shared')

{{-- Title Page --}}
@section('title')
privacy policy
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
                    <h1>privacy policy</h1>
                    <ul>
                        <li><a href="{{route('home')}}">home</a></li>
                        <li><a href="{{route('privacy-policy')}}">privacy policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--================================
        PRIVACY POLICY START
    =================================-->
    <section class="terms_condition mt_90 xs_mt_60 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="career_det_text">
                        <h3>Your agreement:</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, repellendus! Nesciunt fugit
                            aliquam
                            doloremque velit ullam quos ad et magnam aperiam eum vero unde cum reprehenderit porro
                            consectetur voluptatum, veritatis blanditiis. Repellendus veritatis fugit maxime nostrum
                            quod
                            ipsum, quibusdam, a omnis quam aperiam pariatur consectetur est perspiciatis. Laboriosam
                            praesentium id asperiores cumque debitis, ex adipisci? Impedit temporibus labore dolores
                            iusto
                            error nobis, porro hic iure placeat, sint esse corporis, quibusdam adipisci magni non minus
                            quo
                            quae repudiandae earum facere eum ad qui voluptatum eaque.</p>
                        <h3>Main responsibilities:</h3>
                        <ul>
                            <li>Solve the problem with code.</li>
                            <li>Work on Client's projects & In-house products as well.</li>
                            <li>Analyze the product's needs and find out the best solutions.</li>
                            <li>Work as a team and lead the junior developer.</li>
                            <li>Collaborate with other teams by providing code review and technical direction.</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, repellendus! Nesciunt fugit
                            aliquam doloremque velit ullam quos ad et magnam aperiam eum vero unde cum reprehenderit
                            porro consectetur voluptatum, veritatis blanditiis. Repellendus veritatis fugit maxime
                            nostrum quod ipsum, quibusdam, a omnis quam aperiam pariatur</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, repellendus! Nesciunt fugit
                            aliquam
                            doloremque velit ullam quos ad et magnam aperiam eum vero unde cum reprehenderit porro
                            consectetur voluptatum, veritatis blanditiis. Repellendus veritatis fugit maxime nostrum
                            quod
                            ipsum, quibusdam, a omnis quam aperiam pariatur consectetur est perspiciatis. Laboriosam
                            praesentium id asperiores cumque debitis, ex adipisci? Impedit temporibus labore dolores
                            iusto
                            error nobis, porro hic iure placeat, sint esse corporis, quibusdam adipisci magni non minus
                            quo
                            quae repudiandae earum facere eum ad qui voluptatum eaque.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, repellendus! Nesciunt fugit
                            aliquam doloremque velit ullam quos ad et magnam aperiam eum vero unde cum reprehenderit
                            porro consectetur voluptatum, veritatis blanditiis. Repellendus veritatis fugit maxime
                            nostrum quod ipsum, quibusdam, a omnis quam aperiam pariatur</p>
                        <ul>
                            <li>Solve the problem with code.</li>
                            <li>Work on Client's projects & In-house products as well.</li>
                            <li>Analyze the product's needs and find out the best solutions.</li>
                            <li>Work as a team and lead the junior developer.</li>
                            <li>Collaborate with other teams by providing code review and technical direction.</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, repellendus! Nesciunt fugit
                            aliquam
                            doloremque velit ullam quos ad et magnam aperiam eum vero unde cum reprehenderit porro
                            consectetur voluptatum, veritatis blanditiis. Repellendus veritatis fugit maxime nostrum
                            quod
                            ipsum, quibusdam, a omnis quam aperiam pariatur consectetur est perspiciatis. Laboriosam
                            praesentium id asperiores cumque debitis, ex adipisci? Impedit temporibus labore dolores
                            iusto
                            error nobis, porro hic iure placeat, sint esse corporis, quibusdam adipisci magni non minus
                            quo
                            quae repudiandae earum facere eum ad qui voluptatum eaque.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, repellendus! Nesciunt fugit
                            aliquam doloremque velit ullam quos ad et magnam aperiam eum vero unde cum reprehenderit
                            porro consectetur voluptatum, veritatis blanditiis. Repellendus veritatis fugit maxime
                            nostrum quod ipsum, quibusdam, a omnis quam aperiam pariatur</p>
                        <a href="index-2.html" class="common_btn">go home</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================================
        PRIVACY POLICY END
    =================================-->

@endsection

{{-- Scripting js --}}
@section('scripts')
@endsection

