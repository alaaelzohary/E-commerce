
  

@extends('layouts.app')
@section('content')
  <!-- start contant -->
<section>
    <div class="first-section">
        <div class="row">
            <div class="col card container col-lg-3 col-md-6 col-sm-12 me-5 contact-us">
                <form class=" card2" shadow>
                    <h1 class="title1">Contact Us</h1>
                    <div class="mt-5">
                        <lable class="mb-5 user">Email</lable>
                        <input class="form-control mt-4  mb-4" type="email" placeholder="Enter Your Email..." 
                            name="email">
                    </input>
                        <lable >Comment</lable>
                        <textarea class="form-control mt-4 mb-4" id="textarea" v-model="text"
                            placeholder="Please Enter Your Problem ..." rows="3" max-rows="6"></textarea>
                    </div>
                    <button class="save-button">Save</button>
                </form>
            </div>
            <div class="col col-sm-12 col-md-6 ms-5 ques1">
                <h1>How Can We Help ?</h1>
                
                <p>
                    Please select a topic below related to your inquiry. If you don't
                    find what you need, fill out our contact form.
                </p>
            </div>
        </div>
        <div class="ques2 ms-5 mt-5">
            <h1>1_ Talk To A Member of Our Sales Team ?</h1>
            <p class="w-30">
                We'l help you find the right products and pricing for your business<br />

                <lord-icon src="https://cdn.lordicon.com/zpxybbhl.json" trigger="loop"
                    colors="primary:#121331,secondary:#e86830" style="width: 50px; height: 50px">
                </lord-icon>

                <span>Please Call 010000000.</span>
            </p>
        </div>
        <div class="ques3 ms-5">
            <h1>2_ Shipping Methods And Cost ?</h1>
            <p>
                Pick up from the store : FREE At the store<br />
                of your choice in 4-6 business days. Remember/remember the person who
                comes to receive the request for information. If someone else in
                his/her place comes to harm her/she has to provide his/her personal
                identification as well.<br />
                <span>Home delivery service</span>: Standard Delivery - 69 EGP / Free
                (Orders from 999 EGP) The estimated delivery time is between \ 4-6
                working days, the place of delivery varies on the delivery address.<br />
                It offers you two options for orders placed at different distribution
                centers: Receive it with one delivery (Free for purchases over 999
                EGP) Receiving it faster than multiple deliveries (causing a 40 pound
                doubling problem).<br />
                The third period season has been extended for classifiers
                rattlesnakes.
            </p>
        </div>
        <div class="ques4 ms-5">
            <h1>3_ payment methods</h1>
            <ul class="mt-3">
                <li>Visa</li>
                <li>Mastercard</li>
                <li>Pay On Delivery</li>
                <li>Payment Card</li>
            </ul>
        </div>

    </div>
</section>
  <!-- end contant -->
@endsection
