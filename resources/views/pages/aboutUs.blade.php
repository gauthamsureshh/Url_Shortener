@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="{{URL::asset('css/aboutUs.css')}}"/>
@endsection

@section('title','AboutUs')
@section('content')
    <div class="container-fluid">
        <h1>About Us</h1>
        <p>
            Our mission is to simplify the way you share and manage links. We strive to provide a seamless and efficient URL shortening experience 
            that not only shortens your URLs but enhances your overall online presence. We aim to empower individuals, businesses, and organizations
            to communicate more effectively by offering a reliable tool for link management.
        </p>
        <p>
            We believe that simplicity is key. Our user-friendly interface ensures that shortening your URLs is a quick and 
            hassle-free process. Whether you're a seasoned professional or a first-time user,Our Website is  designed with you in mind.
        </p>
        <p>
            Tailor your links to match your brand and style. With customizable features, you can create branded short URLs that not only look professional but also reinforce your brand identity.
            Rest assured that your links are in safe hands. We prioritize the security and reliability of our service, ensuring that your short URLs are always accessible and trustworthy.
        </p>
        <h2>Join Us on the Journey</h2>
        <p>
            We invite you to join us on this journey of transforming the way we share information online. Whether you're a content creator, 
            business professional, or social media enthusiast, URL Short is here to simplify your link-sharing experience.
        </p>
        <h6> Thank you for choosing URL Short. Let's make every link count!</h6>
    </div>
@endsection