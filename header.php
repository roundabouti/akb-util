<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php if (is_author()) : ?><meta name="robots" content="noindex, nofollow" /><?php endif ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="docsearch:language" content="ru">
    <?php wp_head(); ?>
   
   


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-173647578-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-173647578-1');
</script>

<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(37250640, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, ecommerce:"dataLayer" }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/37250640" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->


 
    <script type="text/javascript" src="https://akb-util.ru/js/calculateprice.js"></script>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="https://akb-util.ru/css/custom.css" >
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">



<!-- cookie warning toast  
<div class="fixed-bottom p-4">
    <div class="toast bg-dark text-white w-100 mw-100" role="alert" data-autohide="false">
        <div class="toast-body p-4 d-flex flex-column">
            <h4>Мы используем файлы Cookie &#x1F36A; &#x1F36A; &#x1F36A;</h4>
            <p>
              Продолжая пользование данным сайтом Вы автоматически выражаете своё согласие на обработку Ваших персональных данных (в частности, файлов Cookie) в соответствии с Политикой Конфиденциальности, с которой можно ознакомиться<a href="https://akb-util.ru/info/privacy/"> здесь</a>.
            </p>
            <div class="ml-auto">
                <button type="button" class="btn btn-outline-light mr-3" id="btnDeny" onclick="window.location.href='about:blank'">
                    Закрыть сайт
                </button>
                <button type="button" class="btn btn-light" id="btnAccept">
                    Согласен
                </button>
            </div>
        </div>
    </div>
</div>
    <script type="text/javascript">

      function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {   
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function cookieConsent() {
    if (!getCookie('allowCookies')) {
        $('.toast').toast('show')
    }
}

$('#btnDeny').click(()=>{

    eraseCookie('allowCookies')
    $('.toast').toast('hide')

})
 

$('#btnAccept').click(()=>{
    setCookie('allowCookies','1',7)
    $('.toast').toast('hide')
})

// load
cookieConsent()



</script> -->
 
