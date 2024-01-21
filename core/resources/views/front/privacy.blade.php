@extends('master.front')
@section('meta')
<meta name="keywords" content="{{$setting->meta_keywords}}">
<meta name="description" content="{{$setting->meta_description}}">
@endsection
@section('title') 
    {{__('PRIVACY POLICY')}}
@endsection
@section('content')
<div class="container my-5">
        <div class="formate-1">
            <div class="title mt-5">
                <h1 class="policy-title pb-4">PRIVACY POLICY</h1>
            </div>
            <div class="policy-content">
                <div class="content-list">
                    <p class="list"><b>We provide these privacy highlights for your convenience but we encourage you to review the full I Mobiles mobiles Erode. Collection, Use, Disclosure, and Security of Personal Information</b></p>
                </div>
                <div class="content-list">
                    <p class="list pt-1"><b>We collect personal information when you use our services or otherwise interact with
                        us, including information you provide, such as contact information, billing & credit
                        information, and resumes; information that is automatically collected, such as details
                        about use of our services and our Web pages and information from other sources,
                        such as credit reports and mailing lists</b></p>
                </div>
                <div class="content-list">
                    <p class="list pt-2"><b>We use personal information for various business purposes, such as to complete
                        transactions and bill for products and services; respond to requests for service or
                        assistance; create and improve products and services; suggest additional or different
                        products or service; and protect our rights and property</b></p>
                </div>
                <div class="content-list">
                    <p class="list pt-2"><b>We do not sell, rent, or provide personal information to unaffiliated third-parties to
                        market their products and services to you. We may disclose personal information to
                        unaffiliated third-parties who complete transactions or perform services on our behalf
                        and under certain other limited circumstances, subject to restrictions on the
                        third-parties’ use of such information. We use a variety of physical, electronic, and
                        procedural safeguards to protect personal information and we use reasonable
                        procedures to erase or render it unreadable when we dispose of it.</b></p>
                </div>
                <div class="content-list">
                    <p class="list pt-2"><b>We may update this policy from time to time and you should refer to it often for the
                        latest information and the effective date of any changes. If we intend to use or
                        disclose personal information in a way that is materially different from that stated in
                        this policy at the time it was collected, we will post notice of the change on our Web
                        site’s home page for at least 10 days before we implement the change and give you an
                        opportunity to opt-out of the proposed use.
                        If you have questions, comments, or concerns about this policy or about I Mobiles
                        privacy practices, you may contact us through our website or using the other contact
                        information provided in the full privacy policy.</b></p>
                </div>
            </div>
        </div>
    </div>
@endsection
