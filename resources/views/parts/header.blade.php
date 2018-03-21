<header>
    <div id="subMenu">
        <div class="subNavMenu col-sm-3">
            <div class="col-sm-8 col-sm-offset-2">
                <img class="w100" style="margin: 64px 0 120px" src="{{asset("/img/mainLogo.png")}}" alt="">
            </div>
            <a class="sub-nav-btn col-sm-12" href="/about">о нас</a>
            <a class="sub-nav-btn col-sm-12" href="/works">наши работы</a>
            <a class="sub-nav-btn col-sm-12" href="/services">наши услуги</a>
            <a class="sub-nav-btn col-sm-12" href="/price">прайс</a>
            <a class="sub-nav-btn col-sm-12" href="/contacts">контакты</a>
            <div id="closeSubNav" class="sub-nav-btn col-sm-12">Закрыть</div>
        </div>
        <div id="shadow" class="shadow"></div>
    </div>
    <div class="container-fluid preHeader ">
        <div class="container pHCntnt">
            <div class="pHBlock pL" >
                <img src="{{asset("/img/locImg.png")}}" style="width: 20px; height: 28px; margin-right: 8px; vertical-align: sub">
                <div class="pHBlockIn"  style="line-height: 3em;">Корженевского 14в, Минск</div>
            </div>
            <div class="pHBlock">
                <div class="pHBlockIn">
                    <img href="/" class="dIB" src="{{asset("/img/phoneImg.png")}}" style="width: 28px; height: 28px; margin-right: 8px; vertical-align: sub;">
                    <div class="dIB">
                        <div class="pHBlockPhone"><a class="tel" href="tel:+375173361100">+375 (17) 336-11-00</a></div>
                        <div class="pHBlockPhone"><a class="tel" href="tel:+375291531900">+375 (29) 153-19-00</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container hCntrls">
        <div class="col-sm-12 flx">
            <div class="col-sm-3 mL">
                <a href="/"><img class="w100" src="{{asset("/img/mainLogo.png")}}" alt=""></a>
            </div>
            <div class="col-sm-10 col-sm-offset-2">
                <div class="col-sm-12 flx-end mL-sm"></div>
                <div class="col-sm-12 mL-sm" style="text-align: right">
                    <div id="mainMenu" class="col-sm-12">
                        <a class="nav-btn" href="/about">о нас</a>
                        <a class="nav-btn" href="/works">наши работы</a>
                        <a class="nav-btn" href="/services">наши услуги</a>
                        <a class="nav-btn" href="/price">прайс</a>
                        <a class="nav-btn" href="/delivery">оплата и доставка</a>
                        <a class="nav-btn" href="/contacts">контакты</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="calcBtn" class="ocl" style="cursor: pointer">
        <div class="container oclCnt">
            <div class="col-sm-6 col-sm-offset-2">
                <div class="col-sm-1 row">
                    <img src="{{asset("/img/calc.png")}}" alt="">
                </div>
                <div class="col-sm-9">
                    Калькулятор заказа*
                </div>
            </div>
            <div id="expand" class="col-sm-3 flx-end " style="padding-right: 64px; display: none">Свернуть</div>
        </div>
    </div>
    @include('parts.action')
    @include('parts.calculator')
</header>