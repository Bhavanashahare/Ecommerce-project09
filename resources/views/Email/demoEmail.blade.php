{{-- @component('mail::message')
# {{ $mailData['title'] }}
The body of your message.
@component('mail::button', ['url' => $mailData['url']])
Button Text
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}




<table style="background-color:#edf2f7;color:#111111;padding:40px 0px;line-height:24px;font-size:14px;" border="0"
    cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td>
            <table style="background-color:#fff;max-width:1000px;margin:0 auto;padding:30px;" border="0"
                cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td
                        style="font-size:40px;border-bottom:1px solid #ddd;padding-bottom:25px;font-weight:bold;text-align:center;">
                        Theme Posh</td>
                </tr>
                <tr>
                    <td style="font-size:25px;font-weight:bold;padding:30px 0px 5px 0px;">Hi {{ $mailData['lname']}}</td>
                </tr>
                <tr>
                    <td>We have received your order and will contact you as soon as your package is shipped. You can
                        find your purchase information below.</td>
                </tr>
                <tr>
                    <td style="padding-top:30px;padding-bottom:20px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td style="vertical-align: top;">
                                    <table border="0" cellpadding="3" cellspacing="0" width="100%">
                                        <tr>
                                            <td style="font-size:16px;font-weight:bold;">BILL TO:</td>
                                        </tr>
                                        <tr>
                                            <td><strong>bhavana</strong></td>
                                        </tr>
                                        <tr>
                                            <td>khat road</td>
                                        </tr>
                                        <tr>
                                            <td>Bhandara, Maharashtra, 441904, India</td>
                                        </tr>
                                        <tr>
                                            <td>pritimalode98@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>8412025133</td>
                                        </tr>
                                    </table>
                                    <table style="padding:30px 0px;" border="0" cellpadding="3" cellspacing="0"
                                        width="100%">
                                        <tr>
                                            <td style="font-size:16px;font-weight:bold;">BILL FROM:</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Theme Posh</strong></td>
                                        </tr>
                                        <tr>
                                            <td>House # 2/C/3/A, Road # 1, Shyamoli, Dhaka, Bangladesh</td>
                                        </tr>
                                        <tr>
                                            <td>organis@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>01215123456789</td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="vertical-align: top;">
                                    <table style="text-align:right;" border="0" cellpadding="3" cellspacing="0"
                                        width="100%">
                                        <tr>
                                            <td><strong>Order Date</strong>: 20-05-2023</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Payment Method</strong>: Bank Transfer</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Payment Status</strong>: <span
                                                    style="color:#fe9e42">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Order Status</strong>: <span
                                                    style="color:#fe9e42">Awaiting</span></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="border-collapse:collapse;" border="0" cellpadding="5" cellspacing="0"
                            width="100%">
                            <tr>
                                <th style="width:70%;text-align:left;border:1px solid #ddd;">Product</th>
                                <th style="width:15%;text-align:center;border:1px solid #ddd;">Price</th>
                                <th style="width:15%;text-align:right;border:1px solid #ddd;">Total</th>
                            </tr>
                            <tr>
                                <td colspan="3"
                                    style="width:100%;text-align:left;border:1px solid #ddd;background-color:#f7f7f7;font-weight:bold;">
                                    Sold By: <a href="http://localhost/Grocery/stores/47/hasbi"> Hasbi</a>, Order#: <a
                                        href="http://localhost/Grocery/order-invoice/478/ORD-5425461"> ORD-5425461</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:70%;text-align:left;border:1px solid #ddd;">Dairy Products<br>1 Kg</td>
                                <td style="width:15%;text-align:center;border:1px solid #ddd;">$120 x 1</td>
                                <td style="width:15%;text-align:right;border:1px solid #ddd;">$120</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top:5px;padding-bottom:20px;">
                        <table style="font-weight:bold;" border="0" cellpadding="5" cellspacing="0" width="100%">
                            <tr>
                                <td style="width:85%;text-align:left;">Shipment will be within 5-10 days. Fee for per
                                    seller: $5.00 <span style="float:right">Shipping Fee:</span></td>
                                <td style="width:15%;text-align:right;">$5.00</td>
                            </tr>
                            <tr>
                                <td style="width:85%;text-align:right;">Tax:</td>
                                <td style="width:15%;text-align:right;">$6.00</td>
                            </tr>
                            <tr>
                                <td style="width:85%;text-align:right;">Subtotal:</td>
                                <td style="width:15%;text-align:right;">$120.00</td>
                            </tr>
                            <tr>
                                <td style="width:85%;text-align:right;">Total:</td>
                                <td style="width:15%;text-align:right;">$131.00</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top:30px;padding-bottom:50px;"><a
                            href="http://localhost/Grocery/order-invoice/478/ORD-5425461"
                            style="background:#61a402;display:block;text-align:center;padding:7px 15px;margin:0 10px 10px 0;border-radius:3px;text-decoration:none;color:#fff;float:left;">Invoice
                            (ORD-5425461)</a></td>
                </tr>
                <tr>
                    <td style="padding-top:10px;border-top:1px solid #ddd;text-align:center;">Thank you for purchasing
                        our products.</td>
                </tr>
                <tr>
                    <td style="padding-top:5px;text-align:center;">If you have any questions about this invoice, please
                        contact us</td>
                </tr>
                <tr>
                    <td style="padding-top:5px;text-align:center;"><a
                            href="http://localhost/Grocery">http://localhost/Grocery</a></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
