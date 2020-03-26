@extends('layouts.front')
@section('content')

<div class="breadcrumb-area pt-205 pb-210" style="background-image: url({{asset('img/bg/breadcrumb.jpg')}})">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2></h2>
            <ul>
                <li><a href="#">home</a></li>
                <li> create shop</li>
            </ul>
        </div>
    </div>
</div>

<div class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-map-wrapper">
                    <div class="contact-message">
                        <div class="contact-title">
                            <h4>Submit your shop</h4>
                        </div>
                        <form id="contact-form" class="contact-form" action="{{route('shops.store')}}" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-input-style mb-30">
                                        <label>Name*</label>
                                        <input type="text" name="name" id="" aria-describedby="helpId" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-textarea-style mb-30">
                                        <label>Description*</label>
                                        <textarea class="form-control2" name="description" required></textarea>
                                    </div>
                                    <button class="submit contact-btn btn-hover" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>

@endsection 