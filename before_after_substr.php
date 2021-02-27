<?php

$variable = <<<EOD
<form method="post" action="https://shurjopay.com/payment_option.php" id="frm_submit">

    <input type="hidden" name="merchantName" value="  ">
    <input type="hidden" name="merchantPass" value="  ">
    <input type="hidden" name="returnURL" value="https://unistag.xyz/api/payment-response">
    <input type="hidden" name="userIP" value="103.139.19.345">
    <input type="hidden" name="uniqID" value="UNT1UD6045fe45a6592">
    <input type="hidden" name="txnAmount" value="1">
    <input type="hidden" name="paymentOption" value="shurjopay">
    <input type="hidden" name="bank" value="">
    <input type="hidden" name="school" value="">
    <input type="hidden" name="studentID" value="">
    <input type="hidden" name="custom1" value="">
    <input type="hidden" name="custom2" value="">
    <input type="hidden" name="custom3" value="">
    <input type="hidden" name="custom4" value="">
    <input type="hidden" name="order_id" value="SP6039f4f3545159405">
    <input type="hidden" name="userID" value="321">
    <input type="hidden" name="USER_VISIT_TIMES" value="1">
    <input type="hidden" name="mxID" value="">
    <input type="hidden" name="dbblID" value="000599045680010">
    <input type="hidden" name="eblID" value="40673404">
    <input type="hidden" name="dbblTerminalID" value="59340811">
    <input type="hidden" name="eblPassword" value="f032f966c37f56e3458f43bf440468a7">
    <input type="hidden" name="MerchantUserName" value="Paypoint_Recharge">
    <input type="hidden" name="bkashJson"
        value="{'body': {'app_key':'6nsqe5lth7l236gf96bgrbh9ir','app_secret':'84ohjtm4e7bp6v45734iftejf0mb14fhmb28ss3rb1hchonagd6'},'headers': {'username':'SHUsdfrKHI','password':'S4rrfg1@132'},'checkout_link':'https://checkout.pay.bka.sh/v1.0.0-beta','script_link':'https://scripts.pay.bka.sh/versions/1.0.000-beta/checkout/bKash-checkout.js'}">
    <input type="hidden" name="nagadMerchantID" value="688478543445045">
    <input type="hidden" name="is_com" value="no">
    <input type="hidden" name="is_edu" value="0">
    <input type="hidden" name="current_insert_id" value="85570379">
    <input type="hidden" name="unique_id_code" value="UNT">
</form>

<script>
    document.getElementById('frm_submit').submit();
</script>
EOD;

$after = <<<EOD
">
    <input type="hidden" name="userID
EOD;

$before = <<<EOD
order_id" value="
EOD;

$len1 = strpos($variable, $before);

$len2 = strpos($variable, $after) - strlen($variable);

echo substr($variable, $len1 + 17, $len2);
