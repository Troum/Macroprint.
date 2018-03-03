@extends('layout')
@section('content')
    <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-12">
                <h3 class="cntnH"><div style="width: 26%">НАШИ КОНТАКТЫ</div></h3>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="margin-bottom: 32px">
        <div id="map" class="row" style="background: #ccc; height: 300px; text-align: center"></div>
    </div>
    <div class="container">
        <div class="col-sm-12">
            <div class="col-sm-7 col-sm-offset-1">
                <h4 class="col-sm-12" style="font-weight: 600; margin-bottom: 16px">Контакты</h4>
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <input class="col-sm-12 contact-input" type="text" placeholder="Ваше имя">
                    </div>
                    <div class="col-sm-6">
                        <input class="col-sm-12 contact-input" type="text" placeholder="E-mail">
                    </div>
                    <div class="col-sm-12">
                        <textarea class="col-sm-12 contact-input" name="comment" cols="40" rows="3" placeholder="Сообщение"></textarea></p>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-6">
                            <div class="btn-cont sec">
                                Сброс
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn-cont prim">
                                Отправить
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="margin-bottom: 32px">
                <h4 class="col-sm-12" style="font-weight: 600; margin-bottom: 16px">Детали</h4>
                <div class="col-sm-12 separ-line"></div>
                <div class="col-sm-12">
                    <div class="detail-header">Телефон</div>
                    <div class="detail-txt"><a class="tel" href="tel:+375173361100">+375(17)336-11-00</a> / <a class="tel" href="tel:+375291531900">+375(29)153-19-00</a></div>
                </div>
                <div class="col-sm-12 separ-line"></div>
                <div class="col-sm-12">
                    <div class="detail-header">E-mail</div>
                    <div class="detail-txt"><a class="mailto" href="mailto:d.pronin@macroprint.by">d.pronin@macroprint.by</a></div>
                </div>
                <div class="col-sm-12 separ-line"></div>
                <div class="col-sm-12">
                    <div class="detail-header">Адрес</div>
                    <div class="detail-txt">Корженевского 14а, Минск</div>
                </div>
            </div>
            <div class="col-sm-11 separ-line" style="margin-bottom: 96px;    margin-left: 8.33333333%;"></div>
        </div>
    </div>
@endsection