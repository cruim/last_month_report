<?php
//$ttt = $_GET['list'];
//if($ttt == '\'wrinkles-cream\''){
//    $ttt = 'Крем от морщин';
//}
//if($ttt == 'cream'){
//    $ttt = 'Крема';
//}
//if($ttt == 'elixir'){
//    $ttt = 'Эликсиры';
//}
//if($ttt == '\'vari-cream-com\''){
//    $ttt = 'Крем от варикоза';
//}
//if($ttt == '\'joint-cream\'')
//{
//    $ttt = 'Крем для суставов';
//}
//if($ttt == '\'gemor-cream\''){
//    $ttt = 'Крем от геморроя';
//}
//if($ttt == '\'fungus-cream\''){
//    $ttt = 'Крем от грибка';
//}
//if($ttt == '\'cream-masthopaty\''){
//    $ttt = 'Крем от мастопатии';
//}
//if($ttt == '\'osteochondrosis-cream\''){
//    $ttt = 'Крем от остеохондроза';
//}
//if($ttt == '\'prosta-cream\''){
//    $ttt = 'Крем от простатита';
//}
//if($ttt == '\'psorias-cream\''){
//    $ttt = 'Крем от псориаза';
//}
//if($ttt == '\'cellulite-cream\''){
//    $ttt = 'Крем от целлюлита';
//}
//if($ttt == '\'erectile-cream\''){
//    $ttt = 'Крем от эректильной';
//}
//if($ttt == '\'elixir-gastritis\''){
//    $ttt = 'Эликсир от гастрита';
//}
//if($ttt == '\'elixir-parasite\''){
//    $ttt = 'Эликсир от паразитов';
//}
//if($ttt == '\'elixir-metabolism\''){
//    $ttt = 'Эликсир для метаболизма';
//}
//if($ttt == '\'elixir-liver\''){
//    $ttt = 'Эликсир для печени';
//}




use yii\grid\GridView;
use kartik\export\ExportMenu;
use backend\models\OrderItems;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use backend\assets\AppAsset;
use nirvana\showloading\ShowLoadingAsset;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Доставляемость';

$this->params['breadcrumbs'][] = $this->title;
//$this->registerJsFile('js/loading_indicator.js', [
//    'depends' => ['yii\web\JqueryAsset'],
//    'position' => \yii\base\View::POS_HEAD,
//]);
//$this->registerJsFile('js/loading_indicator.js', [
//    'depends' => ['yii\web\JqueryAsset']
//]);
//$this->registerCssFile('css/site.css');

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<style>
    .content {
        display: none;
    }
</style>
<div class="preload">
    <img src="http://dkclasses.com/images/loading.gif" id="loading-indicator" style="display: none"/>
</div>
<div class="order-index">
    <!--    <img src="http://dkclasses.com/images/loading.gif" id="loading-indicator" style="display: none" />-->
    <h1>Доставляемость за прошлый месяц</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div style="width: 50%; margin: 0 auto; text-align: center;">
        <button class='btn btn-primary' style="width:185px;height:60px;display:inline-block;"
                onclick="location.href = 'http://logista.zdorov.pro/money/backend/web/index.php?r=order%2Findex'">
            Подробные данные в<br>деньгах(прошлый месяц)
        </button>
        <button class='btn btn-primary' style="width:185px;height:60px;display:inline-block;"
                onclick="location.href = 'http://logista.zdorov.pro/odds/backend/web/index.php?r=order%2Findex'">
            Сравнение за<br>прошлый месяц
        </button>
        <button class='btn btn-primary' style="width:185px;height:60px;display:inline-block;"
                onclick="location.href = 'http://logista.zdorov.pro/week/backend/web/index.php?r=order%2Findex'">
            Доставляемость за<br>прошлую неделю
        </button>
    </div>
    <div style="width: 25%; margin: 0 auto; text-align: center;"><br>

        <?php $form1 = ActiveForm::begin(['id' => 'last_month', 'method' => 'GET']); ?>

        <select name="list">
            <option selected value="">ВСЕ</option>
            <option value="cream">КРЕМА</option>
            <option  value="elixir">ЭЛИКСИРЫ</option>
            <option value="'vari-cream-com'">Крем от варикоза</option>
            <option value="'joint-cream'">Крем для суставов</option>
            <option value="'gemor-cream'">Крем от геморроя</option>
            <option value="'fungus-cream'">Крем от грибка</option>
            <option value="'cream-masthopaty'">Крем от мастопатии</option>
            <option value="'wrinkles-cream'">Крем от морщин</option>
            <option value="'osteochondrosis-cream'">Крем от остеохондроза</option>
            <option value="'prosta-cream'">Крем от простатита</option>
            <option value="'psorias-cream'">Крем от псориаза</option>
            <option value="'cellulite-cream'">Крем от целлюлита</option>
            <option value="'erectile-cream'">Крем от эректильной</option>
            <option value="'elixir-gastritis'">Эликсир от гастрита</option>
            <option value="'elixir-parasite'">Эликсир от паразитов</option>
            <option value="'elixir-metabolism'">Эликсир для метаболизма</option>
            <option value="'elixir-liver'">Эликсир для печени</option>
        </select>

        <input type="hidden" value="0" name="last_month">

        <div class="form-group" style="float:left;margin-left: 5px;">
            <?= Html::submitButton('Прошлый <br> месяц', ['class' => 'btn btn-primary', 'name' => 'n1',
                'style'=>"width:120px;display:inline-block;"])
            ?>

            <?php ActiveForm::end(); ?>
        </div>


        <?php $form1 = ActiveForm::begin(['id' => 'last_month', 'method' => 'GET']); ?>

        <input type="hidden" value="1" name="pre_last_month">

        <div class="form-group" style="float:left;margin-left: 5px;">
            <?= Html::submitButton('Позапрошлый <br> месяц', ['class' => 'btn btn-primary', 'name' => 'nn',]) ?>
        </div>
    </div>
    <div style="clear:both;"></div>
    <?php ActiveForm::end(); ?></div>

    

    <?php
    $gridColumns = [

        [
            'contentOptions' => ['class' => 'text-center', 'style' => 'width: 205px; max-width: 205px;'],
            'headerOptions' => ['class' => 'text-center'],
            'header' => 'Тип',
            'value' => 'order_customFields_delivery_method'
        ],

        [
//                'class' => \backend\models\NumberColumn::className(),
            'contentOptions' => ['class' => 'text-center', 'style' => 'width: 65px; max-width: 65px;'],
            'headerOptions' => ['class' => 'text-center'],
            'header' => 'Оформленные',
            'value' => function ($data)
            {
                return $data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake'];

            }],
        [
            'contentOptions' => ['class' => 'text-center', 'style' => 'width: 65px; max-width: 65px;'],
            'headerOptions' => ['class' => 'text-center'],
            'header' => 'От продаж',
            'value' => function ($data)
            {
                try
                {
                    $otProdaz = ($data['paid'] + $data['delivered']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                            + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                            + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 100;
                    return round($otProdaz, 2);
                } catch (ErrorException $e)
                {
                    return 0;
                }
            }

        ],
        [
            'contentOptions' => ['class' => 'text-center', 'style' => 'width: 65px; max-width: 65px;'],
            'headerOptions' => ['class' => 'text-center'],
            'header' => 'Разница с топом',
            'value' => function ($data){
                try{
                    $top =  ($data['paid'] + $data['delivered']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                            + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                            + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 100 - $data['top'];
                    return round($top, 2);
                }
                catch (ErrorException $e)
                {
                    return 0;
                }
                }
        ],

        [
            //                'class' => \backend\models\NumberColumn::className(),
            'contentOptions' => ['class' => 'text-center', 'style' => 'width: 65px; max-width: 65px;'],
            'headerOptions' => ['class' => 'text-center'],
            'header' => 'Отправленные',
            'value' => function ($data)
            {
                try
                {
                    return (($data['paid'] + $data['problem'] +
                        $data['refusetoreceive'] + $data['sent'] + $data['parcelreturned'] +
                        $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']));
                } catch (ErrorException $e)
                {
                    return 0;
                }

            }
        ],

        [
            'contentOptions' => ['class' => 'text-center', 'style' => 'width: 65px; max-width: 65px;'],
            'headerOptions' => ['class' => 'text-center'],
            'header' => 'От отправки',
            'value' => function ($data)
            {
                try
                {
                    $otOtpravki = ($data['paid'] + $data['delivered']) / ($data['paid'] + $data['problem'] +
                            $data['refusetoreceive'] + $data['sent'] + $data['parcelreturned'] +
                            $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake'])
                        * 100;
                    return round($otOtpravki, 2);
                } catch (ErrorException $e)
                {
                    return 0;
                }
            }
        ],

        [
            'header' => 'Средний чек Продано',
            'value' => function ($data)
            {
                if ($data['order_customFields_delivery_method'] == 'eu-multi' or $data['order_customFields_delivery_method'] == 'eu_acs' or
                    $data['order_customFields_delivery_method'] == 'eu_dhl' or $data['order_customFields_delivery_method'] == 'eu_dhl_int' or
                    $data['order_customFields_delivery_method'] == 'eu_dpd' or $data['order_customFields_delivery_method'] == 'eu_ups' or
                    $data['order_customFields_delivery_method'] == 'eu_venipak' or $data['order_customFields_delivery_method'] == 'Евросоюз Cream' or $data['order_customFields_delivery_method'] == 'eu_ups нац.' or $data['order_customFields_delivery_method'] == 'eu_dhl нац.'
                )
                {
                    try
                    {
                        return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 64, 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }

                } elseif ($data['order_customFields_delivery_method'] == 'EMS Почта России' or $data['order_customFields_delivery_method'] == 'Pony Express Россия'
                    or $data['order_customFields_delivery_method'] == 'Доставка Почтой России' or $data['order_customFields_delivery_method'] == 'МОСКВА'
                    or $data['order_customFields_delivery_method'] == 'BetaPost' or $data['order_customFields_delivery_method'] == 'КСЭ'
                    or $data['order_customFields_delivery_method'] == 'Москва BetaPro' or $data['order_customFields_delivery_method'] == 'СДЭК' or $data['order_customFields_delivery_method'] == 'СПСР' or $data['order_customFields_delivery_method'] == 'Россия'
                )
                {
                    try
                    {
                        return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']), 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'kz_kotransit' or $data['order_customFields_delivery_method'] == 'kz_pony'
                    or $data['order_customFields_delivery_method'] == 'kz_post' or $data['order_customFields_delivery_method'] == 'Казахстан КАЗПОЧТА'
                    or $data['order_customFields_delivery_method'] == 'Казахстан Курьеры' or $data['order_customFields_delivery_method'] == 'КАЗАХСТАН'
                    or $data['order_customFields_delivery_method'] == 'ПОЧТА'
                )
                {
                    try
                    {
                        return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 0.18, 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'МОЛДАВИЯ' or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ МeEx'
                    or $data['order_customFields_delivery_method'] == 'md_couriers' or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ МeEx md_kishinev'
                    or $data['order_customFields_delivery_method'] == 'md_memo' or $data['order_customFields_delivery_method'] == 'md_novaposhta'
                    or $data['order_customFields_delivery_method'] == 'md_post' or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ md_kishinev' or $data['order_customFields_delivery_method'] == 'ВСЯ МОЛДАВИЯ'
                )
                {
                    try
                    {
                        return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 3.05, 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'АЗЕРБАЙДЖАН' or $data['order_customFields_delivery_method'] == 'АЗЕРБАЙДЖАН КРЕМ'
                    or $data['order_customFields_delivery_method'] == 'Pony Express Азербайджан' or $data['order_customFields_delivery_method'] == 'ВЕСЬ АЗЕРБАЙДЖАН'
                )
                {
                    try
                    {
                        return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 31.5, 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'Армения BPro'
                )
                {
                    try
                    {
                        return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 0.12, 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'Киргизия KZ' or $data['order_customFields_delivery_method'] == 'Киргизия СПСР' or $data['order_customFields_delivery_method'] == 'ВСЯ КИРГИЗИЯ'
                )
                {
                    try
                    {
                        return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 0.87, 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'Киргизия KZ' or $data['order_customFields_delivery_method'] == 'Киргизия СПСР' or $data['order_customFields_delivery_method'] == 'ВСЯ КИРГИЗИЯ'
                )
                {
                    try
                    {
                        return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 0.87, 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'УКРАИНА'
                )
                {
                    try
                    {
                        return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 2.22, 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'uz_btc' or $data['order_customFields_delivery_method'] == 'uz_mega'
                    or $data['order_customFields_delivery_method'] == '	Узбекистан Регионы uz_svoy_kur' or $data['order_customFields_delivery_method'] == 'УЗБЕКИСТАН' or $data['order_customFields_delivery_method'] == 'Узбекистан Ташкент uz_svoy_kur'
                    or $data['order_customFields_delivery_method'] == 'Узбекистан Регионы' or $data['order_customFields_delivery_method'] == 'Узбекистан Ташкент' or $data['order_customFields_delivery_method'] == 'Узбекистан Ташкент uz_svoy_kur' or $data['order_customFields_delivery_method'] == 'Узбекистан Регионы uz_svoy_kur'
                )
                {
                    try
                    {
                        return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * (60.65 / 6800), 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'Грузия'
                )
                {
                    try
                    {
                        return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 22.2, 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                }

            }
        ],

        [
            'header' => 'Средний чек Выкуплено',
            'value' => function ($data)
            {
                if ($data['order_customFields_delivery_method'] == 'eu-multi' or $data['order_customFields_delivery_method'] == 'eu_acs' or
                    $data['order_customFields_delivery_method'] == 'eu_dhl' or $data['order_customFields_delivery_method'] == 'eu_dhl_int' or
                    $data['order_customFields_delivery_method'] == 'eu_dpd' or $data['order_customFields_delivery_method'] == 'eu_ups' or
                    $data['order_customFields_delivery_method'] == 'eu_venipak' or $data['order_customFields_delivery_method'] == 'Евросоюз Cream' or $data['order_customFields_delivery_method'] == 'eu_ups нац.' or $data['order_customFields_delivery_method'] == 'eu_dhl нац.'
                )

                {
                    try
                    {
                        return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * 64, 2);

                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'EMS Почта России' or $data['order_customFields_delivery_method'] == 'Pony Express Россия'
                    or $data['order_customFields_delivery_method'] == 'Доставка Почтой России' or $data['order_customFields_delivery_method'] == 'МОСКВА'
                    or $data['order_customFields_delivery_method'] == 'BetaPost' or $data['order_customFields_delivery_method'] == 'КСЭ'
                    or $data['order_customFields_delivery_method'] == 'Москва BetaPro' or $data['order_customFields_delivery_method'] == 'СДЭК' or $data['order_customFields_delivery_method'] == 'СПСР' or $data['order_customFields_delivery_method'] == 'Россия'
                )

                {
                    try
                    {
                        return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']), 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'kz_kotransit' or $data['order_customFields_delivery_method'] == 'kz_pony'
                    or $data['order_customFields_delivery_method'] == 'kz_post' or $data['order_customFields_delivery_method'] == 'Казахстан КАЗПОЧТА'
                    or $data['order_customFields_delivery_method'] == 'Казахстан Курьеры' or $data['order_customFields_delivery_method'] == 'КАЗАХСТАН'
                    or $data['order_customFields_delivery_method'] == 'ПОЧТА'
                )

                {
                    try
                    {
                        return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * 0.18, 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'МОЛДАВИЯ' or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ МeEx'
                    or $data['order_customFields_delivery_method'] == 'md_couriers' or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ МeEx md_kishinev'
                    or $data['order_customFields_delivery_method'] == 'md_memo' or $data['order_customFields_delivery_method'] == 'md_novaposhta'
                    or $data['order_customFields_delivery_method'] == 'md_post' or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ md_kishinev' or $data['order_customFields_delivery_method'] == 'ВСЯ МОЛДАВИЯ'
                )

                {
                    try
                    {
                        return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * 3.05, 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'АЗЕРБАЙДЖАН' or $data['order_customFields_delivery_method'] == 'АЗЕРБАЙДЖАН КРЕМ'
                    or $data['order_customFields_delivery_method'] == 'Pony Express Азербайджан' or $data['order_customFields_delivery_method'] == 'ВЕСЬ АЗЕРБАЙДЖАН'
                )

                {
                    try
                    {
                        return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * 31.5, 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'Армения BPro')

                {
                    try
                    {
                        return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * 0.12, 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'Киргизия KZ' or $data['order_customFields_delivery_method'] == 'Киргизия СПСР' or $data['order_customFields_delivery_method'] == 'ВСЯ КИРГИЗИЯ')

                {
                    try
                    {
                        return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * 0.87, 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'УКРАИНА')

                {
                    try
                    {
                        return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * 2.22, 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'uz_btc' or $data['order_customFields_delivery_method'] == 'uz_mega'
                    or $data['order_customFields_delivery_method'] == '	Узбекистан Регионы uz_svoy_kur' or $data['order_customFields_delivery_method'] == 'УЗБЕКИСТАН' or $data['order_customFields_delivery_method'] == 'Узбекистан Ташкент uz_svoy_kur'
                    or $data['order_customFields_delivery_method'] == 'Узбекистан Регионы' or $data['order_customFields_delivery_method'] == 'Узбекистан Ташкент' or $data['order_customFields_delivery_method'] == 'Узбекистан Ташкент uz_svoy_kur' or $data['order_customFields_delivery_method'] == 'Узбекистан Регионы uz_svoy_kur'
                )

                {
                    try
                    {
                        return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * (60.65 / 6800), 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                } elseif ($data['order_customFields_delivery_method'] == 'Грузия')

                {
                    try
                    {
                        return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * 22.2, 2);
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                }

            }
        ],


    ];

    echo ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns
    ]);
    ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => ''],

//        'filterModel' => $searchModel,
        'rowOptions' => function ($data)
        {
            if ($data['order_customFields_delivery_method'] == 'eu-multi' or $data['order_customFields_delivery_method'] == 'eu_acs' or
                $data['order_customFields_delivery_method'] == 'eu_dhl' or $data['order_customFields_delivery_method'] == 'eu_dhl_int' or
                $data['order_customFields_delivery_method'] == 'eu_dpd' or $data['order_customFields_delivery_method'] == 'eu_ups' or
                $data['order_customFields_delivery_method'] == 'eu_venipak' or $data['order_customFields_delivery_method'] == 'Евросоюз Cream'
                or $data['order_customFields_delivery_method'] == 'eu_dhl нац.' or $data['order_customFields_delivery_method'] == 'eu_ups нац.'
            )
            {
                return ['style' => 'background-color:#FBEEEA;'];
            }
            if ($data['order_customFields_delivery_method'] == 'АЗЕРБАЙДЖАН' or $data['order_customFields_delivery_method'] == 'АЗЕРБАЙДЖАН КРЕМ'
                or $data['order_customFields_delivery_method'] == 'Pony Express Азербайджан' or $data['order_customFields_delivery_method'] == 'ВЕСЬ АЗЕРБАЙДЖАН' or $data['order_customFields_delivery_method'] == 'АЗЕРБАЙДЖАН РЕГИОНЫ'
            )
            {
                return ['style' => 'background-color:#F2D048;'];
            }
            if ($data['order_customFields_delivery_method'] == 'УКРАИНА')
            {
                return ['style' => 'background-color:#F1EC88;'];
            }
            if ($data['order_customFields_delivery_method'] == 'kz_kotransit' or $data['order_customFields_delivery_method'] == 'kz_pony'
                or $data['order_customFields_delivery_method'] == 'kz_post' or $data['order_customFields_delivery_method'] == 'Казахстан КАЗПОЧТА'
                or $data['order_customFields_delivery_method'] == 'Казахстан Курьеры' or $data['order_customFields_delivery_method'] == 'КАЗАХСТАН'
                or $data['order_customFields_delivery_method'] == 'ПОЧТА'
            )

            {
                return ['style' => 'background-color:#B3FFFF;'];
            }
            if ($data['order_customFields_delivery_method'] == 'Киргизия KZ' or $data['order_customFields_delivery_method'] == 'Киргизия СПСР' or $data['order_customFields_delivery_method'] == 'ВСЯ КИРГИЗИЯ')
            {
                return ['style' => 'background-color:#E8CFA6;'];
            }
            if ($data['order_customFields_delivery_method'] == 'МОЛДАВИЯ' or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ МeEx'
                or $data['order_customFields_delivery_method'] == 'md_couriers' or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ МeEx md_kishinev'
                or $data['order_customFields_delivery_method'] == 'md_memo' or $data['order_customFields_delivery_method'] == 'md_novaposhta'
                or $data['order_customFields_delivery_method'] == 'md_post' or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ md_kishinev' or $data['order_customFields_delivery_method'] == 'ВСЯ МОЛДАВИЯ'
            )
            {
                return ['style' => 'background-color:#C0C0C0;'];
            }
            if ($data['order_customFields_delivery_method'] == 'uz_btc' or $data['order_customFields_delivery_method'] == 'uz_mega'
                or $data['order_customFields_delivery_method'] == '	Узбекистан Регионы uz_svoy_kur' or $data['order_customFields_delivery_method'] == 'УЗБЕКИСТАН' or $data['order_customFields_delivery_method'] == 'Узбекистан Ташкент uz_svoy_kur'
                or $data['order_customFields_delivery_method'] == 'Узбекистан Регионы' or $data['order_customFields_delivery_method'] == 'Узбекистан Ташкент' or $data['order_customFields_delivery_method'] == 'Узбекистан Ташкент uz_svoy_kur' or $data['order_customFields_delivery_method'] == 'Узбекистан Регионы uz_svoy_kur'
            )
            {
                return ['style' => 'background-color:#A6B0E8;'];
            }
            if ($data['order_customFields_delivery_method'] == 'EMS Почта России' or $data['order_customFields_delivery_method'] == 'Pony Express Россия'
                or $data['order_customFields_delivery_method'] == 'Доставка Почтой России' or $data['order_customFields_delivery_method'] == 'МОСКВА'
                or $data['order_customFields_delivery_method'] == 'BetaPost' or $data['order_customFields_delivery_method'] == 'КСЭ'
                or $data['order_customFields_delivery_method'] == 'Москва BetaPro' or $data['order_customFields_delivery_method'] == 'СДЭК' or $data['order_customFields_delivery_method'] == 'СПСР' or $data['order_customFields_delivery_method'] == 'Россия'
            )
            {
                return ['style' => 'background-color:#DFFBD5;'];
            }
            if ($data['order_customFields_delivery_method'] == 'Армения BPro' or $data['order_customFields_delivery_method'] == 'АРМЕНИЯ')
            {
                return ['style' => 'background-color:#C4AF6E;'];
            }
            if ($data['order_customFields_delivery_method'] == 'Белоруссия BPro')
            {
                return ['style' => 'background-color:#BCC6F0;'];
            }
            if ($data['order_customFields_delivery_method'] == 'Грузия')
            {
                return ['style' => 'background-color:#8EC46E;'];
            }


        },
        'columns' => [
            //['class' => 'yii\grid\SerialColumn','contentOptions' => ['style' => 'width:100px;']],
            [
                'header' => 'Тип',
                'value' => 'order_customFields_delivery_method',
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => function ($data)
                {
                    if ($data['order_customFields_delivery_method'] == 'АЗЕРБАЙДЖАН'
                        or $data['order_customFields_delivery_method'] == 'АЗЕРБАЙДЖАН КРЕМ'
                        or $data['order_customFields_delivery_method'] == 'Евросоюз Cream'
                        or $data['order_customFields_delivery_method'] == 'Казахстан КАЗПОЧТА'
                        or $data['order_customFields_delivery_method'] == 'Казахстан Курьеры'
                        or $data['order_customFields_delivery_method'] == 'Киргизия СПСР'
                        or $data['order_customFields_delivery_method'] == 'Киргизия KZ'
                        or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ'
                        or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ МeEx'
                        or $data['order_customFields_delivery_method'] == 'BetaPost'
                        or $data['order_customFields_delivery_method'] == 'Pony Express Россия'
                        or $data['order_customFields_delivery_method'] == 'Доставка Почтой России'
                        or $data['order_customFields_delivery_method'] == 'КСЭ'
                        or $data['order_customFields_delivery_method'] == 'Москва BetaPro'
                        or $data['order_customFields_delivery_method'] == 'СДЭК'
                        or $data['order_customFields_delivery_method'] == 'МОСКВА'
                        or $data['order_customFields_delivery_method'] == 'Узбекистан Регионы'
                        or $data['order_customFields_delivery_method'] == 'Узбекистан Ташкент'
                    )


                    {
                        $class = 'style';


                        {
                            return ['class' => 'text-center', 'style' => 'width: 235px; max-width: 65px; font-weight: bold;'];
                        }
                    } else
                    {
                        $class = 'style';
                        return ['class' => 'text-center', 'style' => 'width: 235px; max-width: 65px; font-weight: normal;'];
                    }
                }
            ],

            [
//                'class' => \backend\models\NumberColumn::className(),
                'contentOptions' => ['class' => 'text-center', 'style' => 'width: 65px; max-width: 65px;'],
                'headerOptions' => ['class' => 'text-center'],
                'header' => 'Оформленные',
                'value' => function ($data)
                {
                    return $data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                    + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                    + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake'];

                }],
            [
                'contentOptions' => ['class' => 'text-center', 'style' => 'width: 65px; max-width: 65px;'],
                'headerOptions' => ['class' => 'text-center'],
                'header' => 'От продаж',
                'value' => function ($data)
                {
                    try
                    {
                        $otProdaz = ($data['paid'] + $data['delivered']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 100;
                        return round($otProdaz, 2) . '%';
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                }

            ],
            [
                'contentOptions' => ['class' => 'text-center', 'style' => 'width: 65px; max-width: 65px;'],
                'headerOptions' => ['class' => 'text-center'],
                'header' => 'Разница с топом',
                'value' => function ($data){
                    try{
                        $top =  ($data['paid'] + $data['delivered']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 100 - $data['top'];
                        return round($top, 2);
                    }
                    catch (ErrorException $e)
                    {
                        return 0;
                    }
                }
            ],

            [
                //                'class' => \backend\models\NumberColumn::className(),
                'contentOptions' => ['class' => 'text-center', 'style' => 'width: 65px; max-width: 65px;'],
                'headerOptions' => ['class' => 'text-center'],
                'header' => 'Отправленные',
                'value' => function ($data)
                {
                    try
                    {
                        return (($data['paid'] + $data['problem'] +
                            $data['refusetoreceive'] + $data['sent'] + $data['parcelreturned'] +
                            $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake'])) . ' / ' . round(($data['paid'] + $data['problem'] +
                                $data['refusetoreceive'] + $data['sent'] + $data['parcelreturned'] +
                                $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 100, 2) . '%';
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }

                }
            ],

            [
                'contentOptions' => ['class' => 'text-center', 'style' => 'width: 65px; max-width: 65px;'],
                'headerOptions' => ['class' => 'text-center'],
                'header' => 'От отправки',
                'value' => function ($data)
                {
                    try
                    {
                        $otOtpravki = ($data['paid'] + $data['delivered']) / ($data['paid'] + $data['problem'] +
                                $data['refusetoreceive'] + $data['sent'] + $data['parcelreturned'] +
                                $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake'])
                            * 100;
                        return round($otOtpravki, 2) . '%';
                    } catch (ErrorException $e)
                    {
                        return 0;
                    }
                }
            ],

            [
                'contentOptions' => ['class' => 'text-center', 'style' => 'width: 205px; max-width: 205px;'],
                'headerOptions' => ['class' => 'text-center'],
                'header' => 'Средний чек Продано',
                'value' => function ($data)
                {
                    if ($data['order_customFields_delivery_method'] == 'eu-multi' or $data['order_customFields_delivery_method'] == 'eu_acs' or
                        $data['order_customFields_delivery_method'] == 'eu_dhl' or $data['order_customFields_delivery_method'] == 'eu_dhl_int' or
                        $data['order_customFields_delivery_method'] == 'eu_dpd' or $data['order_customFields_delivery_method'] == 'eu_ups' or
                        $data['order_customFields_delivery_method'] == 'eu_venipak' or $data['order_customFields_delivery_method'] == 'Евросоюз Cream' or $data['order_customFields_delivery_method'] == 'eu_ups нац.' or $data['order_customFields_delivery_method'] == 'eu_dhl нац.'
                    )
                    {
                        try
                        {
                            return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                    + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                    + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                    + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 64, 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }

                    } elseif ($data['order_customFields_delivery_method'] == 'EMS Почта России' or $data['order_customFields_delivery_method'] == 'Pony Express Россия'
                        or $data['order_customFields_delivery_method'] == 'Доставка Почтой России' or $data['order_customFields_delivery_method'] == 'МОСКВА'
                        or $data['order_customFields_delivery_method'] == 'BetaPost' or $data['order_customFields_delivery_method'] == 'КСЭ'
                        or $data['order_customFields_delivery_method'] == 'Москва BetaPro' or $data['order_customFields_delivery_method'] == 'СДЭК' or $data['order_customFields_delivery_method'] == 'СПСР' or $data['order_customFields_delivery_method'] == 'Россия'
                    )
                    {
                        try
                        {
                            return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                    + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                    + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                    + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']), 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'kz_kotransit' or $data['order_customFields_delivery_method'] == 'kz_pony'
                        or $data['order_customFields_delivery_method'] == 'kz_post' or $data['order_customFields_delivery_method'] == 'Казахстан КАЗПОЧТА'
                        or $data['order_customFields_delivery_method'] == 'Казахстан Курьеры' or $data['order_customFields_delivery_method'] == 'КАЗАХСТАН'
                        or $data['order_customFields_delivery_method'] == 'ПОЧТА'
                    )
                    {
                        try
                        {
                            return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                    + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                    + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                    + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 0.18, 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'МОЛДАВИЯ' or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ МeEx'
                        or $data['order_customFields_delivery_method'] == 'md_couriers' or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ МeEx md_kishinev'
                        or $data['order_customFields_delivery_method'] == 'md_memo' or $data['order_customFields_delivery_method'] == 'md_novaposhta'
                        or $data['order_customFields_delivery_method'] == 'md_post' or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ md_kishinev' or $data['order_customFields_delivery_method'] == 'ВСЯ МОЛДАВИЯ'
                    )
                    {
                        try
                        {
                            return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                    + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                    + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                    + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 3.05, 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'АЗЕРБАЙДЖАН' or $data['order_customFields_delivery_method'] == 'АЗЕРБАЙДЖАН КРЕМ'
                        or $data['order_customFields_delivery_method'] == 'Pony Express Азербайджан' or $data['order_customFields_delivery_method'] == 'ВЕСЬ АЗЕРБАЙДЖАН' or $data['order_customFields_delivery_method'] == 'АЗЕРБАЙДЖАН РЕГИОНЫ'
                    )
                    {
                        try
                        {
                            return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                    + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                    + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                    + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 31.5, 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'Армения BPro' or $data['order_customFields_delivery_method'] == 'АРМЕНИЯ'
                    )
                    {
                        try
                        {
                            return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                    + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                    + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                    + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 0.12, 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'Киргизия KZ' or $data['order_customFields_delivery_method'] == 'Киргизия СПСР' or $data['order_customFields_delivery_method'] == 'ВСЯ КИРГИЗИЯ'
                    )
                    {
                        try
                        {
                            return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                    + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                    + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                    + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 0.87, 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'УКРАИНА'
                    )
                    {
                        try
                        {
                            return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                    + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                    + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                    + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 2.22, 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'uz_btc' or $data['order_customFields_delivery_method'] == 'uz_mega'
                        or $data['order_customFields_delivery_method'] == '	Узбекистан Регионы uz_svoy_kur' or $data['order_customFields_delivery_method'] == 'УЗБЕКИСТАН' or $data['order_customFields_delivery_method'] == 'Узбекистан Ташкент uz_svoy_kur'
                        or $data['order_customFields_delivery_method'] == 'Узбекистан Регионы' or $data['order_customFields_delivery_method'] == 'Узбекистан Ташкент' or $data['order_customFields_delivery_method'] == 'Узбекистан Ташкент uz_svoy_kur' or $data['order_customFields_delivery_method'] == 'Узбекистан Регионы uz_svoy_kur'
                    )
                    {
                        try
                        {
                            return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                    + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                    + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                    + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * (60.65 / 6800), 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'Грузия'
                    )
                    {
                        try
                        {
                            return round(($data['paid2'] + $data['later2'] + $data['deliveryapproved2'] + $data['problem2'] + $data['refusetosend2'] + $data['refusetoreceive2'] + $data['sent2'] + $data['send2'] + $data['parcelreturned2'] + $data['stop2']
                                    + $data['parcelonaplace2'] + $data['delivered2'] + $data['injob2'] + $data['fake2']) / ($data['paid'] + $data['later'] + $data['deliveryapproved'] + $data['problem'] + $data['refusetosend']
                                    + $data['refusetoreceive'] + $data['sent'] + $data['send'] + $data['parcelreturned'] + $data['stop']
                                    + $data['parcelonaplace'] + $data['delivered'] + $data['injob'] + $data['fake']) * 22.2, 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    }

                }
            ],

            [
                'contentOptions' => ['class' => 'text-center', 'style' => 'width: 65px; max-width: 65px;'],
                'headerOptions' => ['class' => 'text-center'],
                'header' => 'Средний чек Выкуплено',
                'value' => function ($data)
                {
                    if ($data['order_customFields_delivery_method'] == 'eu-multi' or $data['order_customFields_delivery_method'] == 'eu_acs' or
                        $data['order_customFields_delivery_method'] == 'eu_dhl' or $data['order_customFields_delivery_method'] == 'eu_dhl_int' or
                        $data['order_customFields_delivery_method'] == 'eu_dpd' or $data['order_customFields_delivery_method'] == 'eu_ups' or
                        $data['order_customFields_delivery_method'] == 'eu_venipak' or $data['order_customFields_delivery_method'] == 'Евросоюз Cream' or $data['order_customFields_delivery_method'] == 'eu_ups нац.' or $data['order_customFields_delivery_method'] == 'eu_dhl нац.'
                    )

                    {
                        try
                        {
                            return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * 64, 2);

                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'EMS Почта России' or $data['order_customFields_delivery_method'] == 'Pony Express Россия'
                        or $data['order_customFields_delivery_method'] == 'Доставка Почтой России' or $data['order_customFields_delivery_method'] == 'МОСКВА'
                        or $data['order_customFields_delivery_method'] == 'BetaPost' or $data['order_customFields_delivery_method'] == 'КСЭ'
                        or $data['order_customFields_delivery_method'] == 'Москва BetaPro' or $data['order_customFields_delivery_method'] == 'СДЭК' or $data['order_customFields_delivery_method'] == 'СПСР' or $data['order_customFields_delivery_method'] == 'Россия'
                    )

                    {
                        try
                        {
                            return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']), 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'kz_kotransit' or $data['order_customFields_delivery_method'] == 'kz_pony'
                        or $data['order_customFields_delivery_method'] == 'kz_post' or $data['order_customFields_delivery_method'] == 'Казахстан КАЗПОЧТА'
                        or $data['order_customFields_delivery_method'] == 'Казахстан Курьеры' or $data['order_customFields_delivery_method'] == 'КАЗАХСТАН'
                        or $data['order_customFields_delivery_method'] == 'ПОЧТА'
                    )

                    {
                        try
                        {
                            return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * 0.18, 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'МОЛДАВИЯ' or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ МeEx'
                        or $data['order_customFields_delivery_method'] == 'md_couriers' or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ МeEx md_kishinev'
                        or $data['order_customFields_delivery_method'] == 'md_memo' or $data['order_customFields_delivery_method'] == 'md_novaposhta'
                        or $data['order_customFields_delivery_method'] == 'md_post' or $data['order_customFields_delivery_method'] == 'МОЛДАВИЯ md_kishinev' or $data['order_customFields_delivery_method'] == 'ВСЯ МОЛДАВИЯ'
                    )

                    {
                        try
                        {
                            return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * 3.05, 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'АЗЕРБАЙДЖАН' or $data['order_customFields_delivery_method'] == 'АЗЕРБАЙДЖАН КРЕМ'
                        or $data['order_customFields_delivery_method'] == 'Pony Express Азербайджан' or $data['order_customFields_delivery_method'] == 'ВЕСЬ АЗЕРБАЙДЖАН' or $data['order_customFields_delivery_method'] == 'АЗЕРБАЙДЖАН РЕГИОНЫ'
                    )

                    {
                        try
                        {
                            return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * 31.5, 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'Армения BPro' or $data['order_customFields_delivery_method'] == 'АРМЕНИЯ')

                    {
                        try
                        {
                            return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * 0.12, 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'Киргизия KZ' or $data['order_customFields_delivery_method'] == 'Киргизия СПСР' or $data['order_customFields_delivery_method'] == 'ВСЯ КИРГИЗИЯ')

                    {
                        try
                        {
                            return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * 0.87, 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'УКРАИНА')

                    {
                        try
                        {
                            return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * 2.22, 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'uz_btc' or $data['order_customFields_delivery_method'] == 'uz_mega'
                        or $data['order_customFields_delivery_method'] == '	Узбекистан Регионы uz_svoy_kur' or $data['order_customFields_delivery_method'] == 'УЗБЕКИСТАН' or $data['order_customFields_delivery_method'] == 'Узбекистан Ташкент uz_svoy_kur'
                        or $data['order_customFields_delivery_method'] == 'Узбекистан Регионы' or $data['order_customFields_delivery_method'] == 'Узбекистан Ташкент' or $data['order_customFields_delivery_method'] == 'Узбекистан Ташкент uz_svoy_kur' or $data['order_customFields_delivery_method'] == 'Узбекистан Регионы uz_svoy_kur'
                    )

                    {
                        try
                        {
                            return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * (60.65 / 6800), 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    } elseif ($data['order_customFields_delivery_method'] == 'Грузия')

                    {
                        try
                        {
                            return round(($data['paid2'] + $data['delivered2']) / ($data['paid'] + $data['delivered']) * 22.2, 2);
                        } catch (ErrorException $e)
                        {
                            return 0;
                        }
                    }

                }
            ],

        ]
    ]); ?>
<?php

?>
</div>
