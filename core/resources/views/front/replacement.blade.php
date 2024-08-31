@extends('master.front')
@section('meta')
<meta name="keywords" content="{{$setting->meta_keywords}}">
<meta name="description" content="{{$setting->meta_description}}">
@endsection
@section('title') 
    {{__('REPLACEMENT POLICY')}}
@endsection
@section('content')

<div class="container mt-5 my-3">
        <div class="formate-1">
            <div class="title">
                <h1 class="policy-title text-center">REPLACEMENT POLICY</h1>
            </div>
            <div class="policy-content">
                <div class="policy-content-title">
                    <p class="para-content pt-3">Replacement Conditions</p>
                </div>
                <div class="content-list">
                    <p class="list">1. Products are replaceable within the applicable window if you've received them in a
                        condition that is physically damaged, has missing parts or accessories, defective or different from
                        their description on the product detail page on the website it is your responsibility to contact us
                        immediately (within 24 hours) failing which your replacement claim is void.</p>
                </div>
                <div class="content-list">
                    <p class="list">2. All products listed under a particular category may not have the same replacement
                        policy.</p>
                </div>
                <div class="content-list">
                    <p class="list">3. Do refer respective products manufacturer's Warranty and Replacement Policy.</p>
                </div>
                <div class="content-list">
                    <p class="list">4. Replacement will be processed only if:</p>
                    <p class="list">a. It is determined that the product was not damaged while in your possession;</p>
                    <p class="list">b. The product is different from what was shipped to you;</p>
                    <p class="list">c. The product is returned in original condition (with brand's/manufacturer's box, seal
                        and MRP are intact, user manual, warranty card and all the accessories therein).</p>
                </div>
                <div class="content-list">
                    <p class="list">7. Products marked as "non-returnable" on the product detail page cannot be returned.
                        Note: If you've received a non-returnable product in a damaged/defective condition, it is your
                        responsibility to contact our customer care within 24hrs from the time of delivery of the product
                        failing which you have waived replacement claims and thus your replacement claim is void.</p>
                </div>
            </div>
        </div>

        <div class="formate-2 mt-5">
            <div class="title">
                <h1 class="policy-title text-center pb-4">CATEGORIES WITH ASSOCIATED REPLACEMENT WINDOW AND EXCEPTIONS, IF
                    ANY</h1>
            </div>
            <div class="table table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S.No.</th>
                            <th scope="col">Category</th>
                            <th scope="col">Replacement Policy</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mobiles -(Other than Apple)</td>
                            <td>7 Days, Replacement only. Replacement is subject to the Replacement Policy. This item is
                                eligible for free replacement, within 7 days of delivery only if you DO NOT TO INSERT THE
                                SIM and DO NOT TO CONNECT WIFI, if you do any of these then your replacement eligibility
                                will be NULL and VOID. If a defect is determined within the Replacement Window, a
                                replacement of the same model will be provided at no additional cost. If no defect is
                                confirmed or the issue is not diagnosed within 7 days of delivery, you will be directed to
                                a brand service center to resolve any subsequent issues. Please keep the item in its
                                original condition, with original accessories like chargers, headsets etc.; brand/
                                manufacture's box, seal MRP, user manual should be intact without any alteration in brand/
                                manufacturer packaging/ box to avoid pick-up cancellation.
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Mobiles -Apple</td>
                            <td>For all functionality related issues, do contact the brand authorized service center
                                directly Authorized Service Partner Locator :Apple -
                                <a href="https://locate.apple.com/in/en"> https://locate.apple.com/in/en</a> Brand Support Site : Apple - <a
                                    href="https://support.apple.com/en-in"> https://support.apple.com/en-in</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Smart Watches and Wearable's (Other than Apple) TV Laptops (Other than Apple) Speakers :1. Home Audio Speakers, 2. Home Theatres, 3. Sound bars, 4. Bluetooth Speakers(Otherthan Apple)</td>
                            <td>If a defect is determined within the Replacement Window,a replacement of the same model will be provided at no additional cost. Please keep the item in its original condition, with original accessories like chargers, headsets etc., brand outer box, MRP tags attached, user manual in manufacturer packaging to avoid pick-up cancellation. In any case, only one replacement shall be provided</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Apple Macbook</td>
                            <td>For all functionality related issues, do contact the brand authorized service center directly. Authorized Service Partner Locator :Apple - <a href="https://locate.apple.com/in/en">https://locate.apple.com/in/en</a>Brand Support Site : Apple <a href="https://support.apple.com/en-in"> - https://support.apple.com/en-in</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Electronics</td>
                            <td><pre> 
<b>For all functionality related issues, do contact the brand
authorized service center directly.</b>
<b>Authorized Service Partner Locator :</b>
<b>Realme-</b><a href="https://www.realme.com/in/support/services">https://www.realme.com/in/support/services</a>
<b>Samsung-</b><a href="https://www.samsung.com/in/support/service-center/">https://www.samsung.com/in/support/service-center/</a>
<b>JBL & Infinity-</b><a href="https://support.jbl.com/in/en/customer-service/service-centres.html">https://support.jbl.com/in/en/customer-service/service-centres.html</a>
<b>HP -Please reach out to 18002587170 to contact the brand
authorized service center</b>
<b>MI -Please reach out to 1800 103 6286 to contact the brand
authorized service center</b>
<b>MI-</b><a href="https://www.mi.com/in/service/repair/">https://www.mi.com/in/service/repair/</a>
<b>Brand Support Site :</b>
<b>Realme-</b><a href="https://www.realme.com/in/support">https://www.realme.com/in/support</a>
<b>Samsung-</b><a href="https://www.samsung.com/in/support/">https://www.samsung.com/in/support/</a>
<b>JBL & Infinity-</b><a href="https://support.jbl.com/in/en/">https://support.jbl.com/in/en/</a>
<b>Dell-</b><a href="https://www.support.dell.com">https://www.support.dell.com</a>
<b>Asus-</b><a href="https://www.asus.com/in/support/">https://www.asus.com/in/support/</a>
<b>Acer-</b><a href="https://www.acer.com/ac/en/IN/content/support">https://www.acer.com/ac/en/IN/content/support</a>
<b>Lenovo-</b><a href="https://support.lenovo.com/in/en/">https://support.lenovo.com/in/en/</a>
<b>Oneplus-</b><a href="https://www.oneplus.in/support?from=head">https://www.oneplus.in/support?from=head</a>
<b>Oppo-</b><a href="https://support.oppo.com/in/">https://support.oppo.com/in/</a>
<b>Vivo-</b><a href="https://www.vivo.com/in/support">https://www.vivo.com/in/support</a>
<b>Nokia-</b><a href="https://www.nokia.com/support/">https://www.nokia.com/support/</a>
<b>Boat-</b><a href="https://support.boat-lifestyle.com/">https://support.boat-lifestyle.com/</a>
<b>Bose-</b><a href="https://www.boseapac.com/en_in/support.html">https://www.boseapac.com/en_in/support.html</a>
<b>Sony-</b><a href="https://www.sony.co.in/electronics/support">https://www.sony.co.in/electronics/support</a>
<b>Skullcandy-</b><a href="https://www.skullcandy.in/support-2/">https://www.skullcandy.in/support-2/</a>
<b>iball-</b><a href="https://www.iball.co.in/CustomerCar">https://www.iball.co.in/CustomerCar</a></pre></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td> Products That Can't be Replaced</td>
                            <td> Non-Replaceable: Screen guards, screen protectors and tempered glasses and other mobile accessories. Health care products such as Sanitizer and Mask. Items labelled as non- returnable on the product detail page are not eligible for return or replacement.</td>
                        </tr>
                        <!-- Add more table rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
