---
title: Donate
icon: fas fa-donate
order: 3
---

<div id="donateContent" style="text-align:center;display:none;width:100%;margin:0px;padding:0px;">
    <div style="color:#000000;background-color:#FFFF99;border:1px solid black;margin:10px 0px;padding:15px;width:90%;text-align:center;white-space:normal;-moz-border-radius:4px;-webkit-border-radius:4px;font-weight:bold;font-size:16px;">Thank you for your donation!</div>
</div>

<style>
    .currency-label {
        font-size: 2em;
    }
    .currency-address {
        font-family: Menlo,Monaco,Consolas,"Courier New",monospace;
        padding: 2px 4px;
        font-size: 90%;
        color: #333;
        background-color: #eee;
        border-radius: 4px;
        user-select: all;
    }
    .fa-stack {
        font-size: 0.5em;
        width: 2em !important;
    }
    .fa-stack-2x {
        width: 2em !important;
    }
    .fa-stack-1x {
        width: 1em !important;
    }
    i {
        vertical-align: middle;
    }
</style>
<script>
    if(document.referrer.indexOf('paypal.com') > -1){document.getElementById("donateContent").style.display="block";document.title="Thank you!";}
</script>

If something I've written is useful to you, please consider donating to support further development/writing.

<div class="row d-flex align-items-center" style="margin-top:1em;">
<div class="col-md-4 col-lg-3 currency-label d-flex align-items-center"><span class="fa-stack">
  <i class="fas fa-circle fa-stack-2x"></i>
  <i class="fab fa-paypal fa-stack-1x fa-inverse"></i>
</span>&nbsp;Paypal</div>
<div class="col-md-8 col-lg-9 d-flex align-items-center">
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <div class="paypal-donations">
            <input type="hidden" name="cmd" value="_donations">
            <input type="hidden" name="bn" value="TipsandTricks_SP">
            <input type="hidden" name="business" value="MLU34HE3KXV96">
            <input type="hidden" name="page_style" value="Donations">
            <input type="hidden" name="return" value="http://andrewensley.com/Donate">
            <input type="hidden" name="item_name" value="AndrewEnsley.com">
            <input type="hidden" name="currency_code" value="USD">
            <input type="image" style="cursor: pointer;" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online.">
            <img alt="" src="https://i1.wp.com/www.paypal.com/en_US/i/scr/pixel.gif?resize=1%2C1&amp;ssl=1" width="1" height="1">
        </div>
    </form>
</div>
</div>
<div class="row" style="margin-top:1em;">
<div class="col-md-4 col-lg-3 currency-label d-flex align-items-center"><i class="fab fa-bitcoin"></i>&nbsp;Bitcoin</div>
<div class="col-md-8 col-lg-9 d-flex align-items-center"><span class="currency-address">1KTwAiLE4orPFzxF9UAzVcR7SvoLbxWGJh</span></div>
</div>
<div class="row" style="margin-top:1em;">
<div class="col-md-4 col-lg-3 currency-label d-flex align-items-center"><span class="fa-stack">
  <i class="fas fa-circle fa-stack-2x"></i>
  <i class="fab fa-ethereum fa-stack-1x fa-inverse"></i>
</span>&nbsp;Ethereum</div>
<div class="col-md-8 col-lg-9 d-flex align-items-center"><span class="currency-address">0x487914B58FB5C5537B91Fd309cE0228A68427B0B</span></div>
</div>
<div class="row" style="margin-top:1em;">
<div class="col-md-4 col-lg-3 currency-label d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 38" class="svg-inline--fa"><g fill="none" fill-rule="evenodd"><circle cx="19" cy="19" r="19" fill="currentColor" fill-rule="nonzero"></circle><path fill="#FFF" d="M12.29 28.04l1.29-5.52-1.58.67.63-2.85 1.64-.68L16.52 10h5.23l-1.52 7.14 2.09-.74-.58 2.7-2.05.8-.9 4.34h8.1l-.99 3.8z"></path></g></svg>&nbsp;Litecoin</div>
<div class="col-md-8 col-lg-9 d-flex align-items-center"><span class="currency-address">LeEMZxj9pSwXoohbhcZ3NLC2Ndp1qtYzTy</span></div>
</div>