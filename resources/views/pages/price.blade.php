@extends('layout')
@section('content')
    <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-12">
                <h3 class="cntnH">
                    <div style="width: 26%">ПРАЙС-ЛИСТ</div>
                </h3>
                <div class="col-sm-12 flx printPath">
                    <div class="diB printBtn">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="#000000"
                                  d="M18,3H6V7H18M19,12A1,1 0 0,1 18,11A1,1 0 0,1 19,10A1,1 0 0,1 20,11A1,1 0 0,1 19,12M16,19H8V14H16M19,8H5A3,3 0 0,0 2,11V17H6V21H18V17H22V11A3,3 0 0,0 19,8Z"/>
                        </svg>
                    </div>

                    <span class="printTxt">Прайс розничный</span>
                </div>
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Материалы используемые при печати</th>
                            <th>Минимальный заказ (от 1м2-18м2) Цена за 1м2 с НДС</th>
                            <th>Стандартный заказ м2 (18м2-100м2) Цена за 1м2 с НДС</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="tblOrng">1</td>
                            <td class="tblOrng">Бумага BlueBack <i>(интерьерная печать)</i></td>
                            <td>6,3</td>
                            <td>5,7</td>
                        </tr>
                        <tr>
                            <td class="tblOrng">2</td>
                            <td class="tblOrng">Бумага BackLit <i>(интерьерная печать)</i></td>
                            <td>8,8</td>
                            <td>8,4</td>
                        </tr>
                        <tr>
                            <td class="tblOrng">4</td>
                            <td class="tblOrng">Винил FrontLit</td>
                            <td>12,8</td>
                            <td>11,6</td>
                        </tr>
                        <tr>
                            <td class="tblOrng"></td>
                            <td class="tblOrng">Винил FontLit <i>(интерьерная печать)</i></td>
                            <td>14</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td class="tblOrng">5</td>
                            <td class="tblOrng">Винил Backlit 4+0 <i>(интерьерная печать)</i></td>
                            <td>18</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <td class="tblOrng">8</td>
                            <td class="tblOrng">Сетка</td>
                            <td>13</td>
                            <td>10,9</td>
                        </tr>
                        <tr>
                            <td class="tblOrng">9</td>
                            <td class="tblOrng">Самоклеящаяся пленка</td>
                            <td>12,6</td>
                            <td>10,5</td>
                        </tr>
                        <tr>
                            <td class="tblOrng">10</td>
                            <td class="tblOrng">Самоклеящаяся пленка с ламинацией</td>
                            <td>19</td>
                            <td>17</td>
                        </tr>
                        <tr>
                            <td class="tblOrng">13</td>
                            <td class="tblOrng">PhotoPaper <i>(интерьерная печать)</i></td>
                            <td>23,1</td>
                            <td>18,8</td>
                        </tr>
                        <tr class="separator">
                            <td></td>
                            <td></td>
                            <td>UV-печать</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="tblOrng">1</td>
                            <td class="tblOrng">Пластик ПВХ (толщина 3мм)</td>
                            <td>45</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td class="tblOrng">2</td>
                            <td class="tblOrng">Пластик ПВХ (толщина 5мм)</td>
                            <td>55</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td class="tblOrng">3</td>
                            <td class="tblOrng">Стекло (зеркало) без белого</td>
                            <td>50</td>
                            <td>45</td>
                        </tr>
                        <tr>
                            <td class="tblOrng">4</td>
                            <td class="tblOrng">Стекло (зеркало) с белым</td>
                            <td>55</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td class="tblOrng">5</td>
                            <td class="tblOrng">Рулонные материалы - давальческие материалы (тент, холст, ткань, кожа) без белого</td>
                            <td>14</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td class="tblOrng">6</td>
                            <td class="tblOrng">Рулонные материалы - давальческое сырье (тент, холст, такнь, кожа) с белым</td>
                            <td>21</td>
                            <td>18</td>
                        </tr>
                        <tr>
                            <td class="tblOrng">7</td>
                            <td class="tblOrng">Листовые материалы - давальческое сырье (металл, дерево, ДСП, ДВП и др.) без белого</td>
                            <td>28</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td class="tblOrng">8</td>
                            <td class="tblOrng">Листовые материалы - давальческое сырье (металл, дерево, ДСП, ДВП и др.) с белым</td>
                            <td>34</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td class="tblOrng">9</td>
                            <td class="tblOrng">Самоклеящаяся пленка без белого</td>
                            <td>20</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <td class="tblOrng">10</td>
                            <td class="tblOrng">Самоклеящаяся пленка с белым</td>
                            <td>25</td>
                            <td>20</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="col-sm-12" style="margin-bottom: 96px">
                    <span style="font-size: 12px">Более подробную консультацию Вы можете получить у нашего
                    специалиста заказав обратный звонок или по контактным телефонам:
                    +375(17)336-11-00, +375(29)153-19-00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection