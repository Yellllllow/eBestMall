<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/12 14:45
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

use yii\helpers\Html;
use ebestmall\assets\EbmAsset;

EbmAsset::register($this);

$baseUrl = $this->assetBundles[EbmAsset::className()]->baseUrl;
$this->registerCssFile($baseUrl .'/css/goods.css', ['depends' => EbmAsset::className()]);
$this->registerJsFile($baseUrl .'/js/goods.js',['depends' => EbmAsset::className()]);

$this->title = Yii::$app->params['site']['name'];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Goods'),'url' => ['goods/index']];
$this->params['breadcrumbs'][] = 'Apple iPhone 7 (A1660) 128G 金色 移动联通电信4G手机';
?>
<div class="goods-index">
    <div class="product-intro">
        <div class="product-preview-wrap">
            <div class="product-preview">
                <div class="product-preview-main-img">
                    <div class="product-preview-main-img-box">
                        <div class="product-preview-main-img-box-magnifier"></div>
                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002.jpg" alt="">
                    </div>
                    <div class="product-preview-main-img-big-box">
                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002_big.jpg" alt="">
                    </div>
                </div>
                <div class="product-preview-thumbnail-wrap">
                    <div class="product-preview-thumbnail-list">
                        <ul>
                            <li class="active">
                                <a href="javascript:;">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002_small.jpg" alt="" data-img="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002.jpg" data-img-big="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002_big.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_small.jpg" alt="" data-img="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001.jpg" data-img-big="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_big.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002_small.jpg" alt="" data-img="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002.jpg" data-img-big="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002_big.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_small.jpg" alt="" data-img="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001.jpg" data-img-big="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_big.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002_small.jpg" alt="" data-img="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002.jpg" data-img-big="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002_big.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_small.jpg" alt="" data-img="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001.jpg" data-img-big="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_big.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_small.jpg" alt="" data-img="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001.jpg" data-img-big="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_big.jpg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                    <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                </div>
                <div class="product-preview-info">
                    <div class="product-preview-info-left">
                        <a href="javascript:;"><i class="icon-share-alt"></i>分享</a>
                        <a href="javascript:;"><i class="icon-goods-heart"></i>收藏商品</a>
                    </div>
                    <div class="product-preview-info-right"><a href="javascript:;">举报</a></div>
                </div>
            </div>
        </div>
        <div class="product-info-wrap">
            <div class="product-info-name">Apple iPhone 7 (A1660) 128G 金色 移动联通电信4G手机</div>
            <div class="product-info-describe">暖春开学季，就要“焕”新装！领券可享12期白条免息！<a href="#" title="量免息券，领券戳这里！ ">量免息券，领券戳这里！</a>
                <br>推荐选择下方的移动、联通、电信优惠购，套餐有优惠，还有话费返还。
            </div>
            <div class="product-info-price-wrap">
                <div class="product-info-price-wrap-statistics">
                    <div class="product-info-price-wrap-comment-count">
                        <p>累计评价</p>
                        <a class="notice" href="javascript:;">2万+</a>
                    </div>
                    <div class="product-info-price-wrap-comment-count">
                        <p>累计销量</p>
                        <a class="notice" href="javascript:;">3万+</a>
                    </div>
                </div>
                <div class="product-info-price">
                    <div class="dt">价　　格</div>
                    <div class="dd">
                        <span class="p-price"><span>￥</span><span class="price">5888.00</span></span>
                        <a class="notice" href="javascript:;">降价通知</a>
                    </div>
                </div>
                <div class="product-info-market-price">
                    <div class="dt">市 场 价</div>
                    <div class="dd">
                        <span class="p-price"><span>￥</span><span class="price">6888.00</span></span>
                    </div>
                </div>
            </div>
            <div class="product-info-strip"></div>
            <div class="product-info-choose-attr">
                <!-- @a class active disabled -->
                <ul>
                    <li>
                        <div class="dt">选择颜色</div>
                        <div class="dd">
                            <a href="javascript:;">红色</a>
                            <a class="active" href="javascript:;">金色</a>
                            <a href="javascript:;">白色</a>
                        </div>
                    </li>
                    <li>
                        <div class="dt">选择版本</div>
                        <div class="dd">
                            <a class="active" href="javascript:;">公开版</a>
                            <a href="javascript:;">双网通</a>
                        </div>
                    </li>
                    <li>
                        <div class="dt">套　　装</div>
                        <div class="dd">
                            <a class="active" href="javascript:;">优惠套装1</a>
                            <a href="javascript:;">优惠套装2</a>
                            <a class="disabled" href="javascript:;">优惠套装3</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="product-info-strip"></div>
            <div class="product-info-choose-amount-wrap">
                <div class="product-info-choose-amount">
                    <input class="goods-number" type="text" value="1">
                    <div class="product-info-choose-amount-btn">
                        <a href="javascript:;" class="btn-add item"><i class="icon-increase"></i></a>
                        <a href="javascript:;" class="btn-reduce"><i class="icon-decrease"></i></a>
                    </div>
                </div>
                <div class="product-info-choose-btn-buy product-info-choose-btn"><a href="javascript:;">立即购买</a>
                </div>
                <div class="product-info-choose-btn-add product-info-choose-btn"><a href="javascript:;">加入购物车</a>
                </div>
            </div>
        </div>
        <div class="guess-you-like-wrap">
            <div class="guess-you-like">
                <div class="guess-you-like-header">
                    <i></i>
                    <span>看了又看</span>
                </div>
                <div class="guess-you-like-content">
                    <ul>
                        <li>
                            <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                <div class="guess-you-like-content-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                    <p>¥198.00</p>
                                </div>
                                <div class="guess-you-like-content-dn">
                                    <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                <div class="guess-you-like-content-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                    <p>¥198.00</p>
                                </div>
                                <div class="guess-you-like-content-dn">
                                    <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                <div class="guess-you-like-content-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                    <p>¥198.00</p>
                                </div>
                                <div class="guess-you-like-content-dn">
                                    <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                <div class="guess-you-like-content-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                    <p>¥198.00</p>
                                </div>
                                <div class="guess-you-like-content-dn">
                                    <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                <div class="guess-you-like-content-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                    <p>¥198.00</p>
                                </div>
                                <div class="guess-you-like-content-dn">
                                    <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                <div class="guess-you-like-content-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                    <p>¥198.00</p>
                                </div>
                                <div class="guess-you-like-content-dn">
                                    <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                <div class="guess-you-like-content-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                    <p>¥198.00</p>
                                </div>
                                <div class="guess-you-like-content-dn">
                                    <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                <div class="guess-you-like-content-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                    <p>¥198.00</p>
                                </div>
                                <div class="guess-you-like-content-dn">
                                    <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="guess-you-like-content-footer">
                    <a class="prev" href="javascript:;"><i class="icon-chevron-up"></i></a>
                    <a class="next" href="javascript:;"><i class="icon-chevron-down2"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="product-recommend-wrap">
        <div class="w">
            <div class="product-recommend">
                <div class="product-recommend-header">
                    <ul>
                        <li class="active">店长推荐</li>
                        <li>店铺热卖</li>
                    </ul>
                </div>
                <div class="product-recommend-content">
                    <div class="product-recommend-content-list">
                        <ul>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="product-recommend-content-list">
                        <ul>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥999.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥888.88</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥999.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥888.88</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥999.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥888.88</strong></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-detail-wrap">
        <div class="product-detail-aside">
            <div class="shop-info-wrap">
                <div class="shop-info-name"><h3><a href="javascript:;">平台自营</a></h3></div>
                <div class="shop-info">
                    <div class="item">
                        <dl>
                            <dt>信　誉：</dt>
                            <dd>
                                <a href="javascript:;" title="信誉等级：7.5分">
                                    <i class="icon-diamond"></i>
                                    <i class="icon-diamond"></i>
                                    <i class="icon-diamond"></i>
                                    <i class="icon-diamond"></i>
                                    <i class="icon-diamond"></i>
                                </a>
                            </dd>
                        </dl>
                    </div>
                    <div class="item">
                        <dl>
                            <dt>联　系：</dt>
                            <dd>
                                <a href="javascript:;" title="QQ">
                                    <i class="icon-qq"></i>
                                </a>
                            </dd>
                        </dl>
                    </div>
                    <div class="item">
                        <dl>
                            <dt>资　质：</dt>
                            <dd>
                                <a href="javascript:;" title="个人实名认证">
                                    <i class="icon-drivers-license-o"></i>
                                </a>
                                <a href="javascript:;" title="企业认证">
                                    <i class="icon-user-tie"></i>
                                </a>
                            </dd>
                        </dl>
                    </div>
                    <div class="item">
                        <dl>
                            <dt>地　址：</dt>
                            <dd><a href="javascript:;" title="中国北京朝阳区建设路1288号">中国北京朝阳区建设路1288号</a></dd>
                        </dl>
                    </div>
                    <div class="item shop-rate-wrap">
                        <div class="shop-rate">
                            <!-- @icon icon-arrow-up icon-arrow-down -->
                            <dl>
                                <dt>描述</dt>
                                <dd><a href="javascript:;">5.0<i class="icon-arrow-up"></i></a></dd>
                            </dl>
                            <dl>
                                <dt>服务</dt>
                                <dd><a href="javascript:;">5.0<i class="icon-arrow-up"></i></a></dd>
                            </dl>
                            <dl>
                                <dt>物流</dt>
                                <dd><a href="javascript:;">5.0<i class="icon-arrow-up"></i></a></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="shop-info-footer">
                    <div class="shop-info-footer-btn">
                        <a href="javascript:;"><i class="icon-home"></i>进店逛逛</a>
                        <a href="javascript:;"><i class="icon-star"></i>关注店铺</a>
                    </div>
                </div>
            </div>
            <div class="shop-info-search product-detail-aside-item-wrap">
                <div class="shop-info-search-header product-detail-aside-item-header"><h3>店内搜索</h3></div>
                <div class="shop-info-search-content product-detail-aside-item-content">
                    <form action="javascript:;">
                        <p class="sp-form-item1"><label for="sp-keyword">关键字：</label><span><input type="text" id="sp-keyword" ></span></p>
                        <p class="sp-form-item2"><label for="sp-price">价　格：</label><span><input type="text" id="sp-price" > 到 <input type="text" id="sp-price1" ></span></p>
                        <p class="sp-form-item3"><label for="btnShopSearch"></label><span><input type="submit" value="搜索" id="btnShopSearch" data-url="javascripit:;"></span></p>
                    </form>
                </div>
            </div>
            <div class="product-detail-aside-item-wrap">
                <div class="product-detail-aside-tab-header">
                    <ul>
                        <li class="active">店铺热销</li>
                        <li>热门关注</li>
                    </ul>
                </div>
                <div class="product-detail-aside-item-content product-recommend-content-list product-detail-aside-host-content">
                    <ul>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>1</i>热销<em>888888</em>件</span><strong>￥39.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>2</i>热销<em>888888</em>件</span><strong>￥39.88</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>3</i>热销<em>888888</em>件</span><strong>￥39.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>4</i>热销<em>888888</em>件</span><strong>￥39.88</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>5</i>热销<em>888888</em>件</span><strong>￥39.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>6</i>热销<em>888888</em>件</span><strong>￥39.88</strong></div>
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>1</i>热销<em>999999</em>件</span><strong>￥999.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>2</i>热销<em>999999</em>件</span><strong>￥39.88</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>3</i>热销<em>999999</em>件</span><strong>￥999.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>4</i>热销<em>999999</em>件</span><strong>￥39.88</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>5</i>热销<em>999999</em>件</span><strong>￥999.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>6</i>热销<em>999999</em>件</span><strong>￥39.88</strong></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product-detail-aside-item-wrap shop-new-product-wrap">
                <div class="product-detail-aside-item-header"><h3>店铺新品</h3></div>
                <div class="shop-new-product product-detail-aside-item-content product-recommend-content-list">
                    <ul>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="product-detail">
            <div class="product-detail-header">
                <ul>
                    <li class="active">商品介绍</li>
                    <li>规格与包装</li>
                    <li>售后保障</li>
                    <li>商品评价(2万+)</li>
                </ul>
                <div class="product-recommend-header-btn"><a href="javascript:;">加入购物车</a></div>
            </div>
            <div class="product-detail-content-wrap">
                <div class="product-detail-content">
                    <div class="product-detail-content-parameter">
                        <div class="product-detail-content-parameter-title">
                            <span>品牌：</span>
                            <a class="parameter-brand-name" href="javascript:;" title="摩梵欧（MOFANOU）">摩梵欧（MOFANOU）</a>
                            <a class="parameter-btn-follow" href="javascript:;"><i class="icon-heart3"></i>关注</a>
                        </div>
                        <div class="product-detail-content-parameter-list">
                            <ul>
                                <li>商品名称：AppleiPhone7 Plus</li>
                                <li>店铺：<a href="javascript:;" title="平台自营">平台自营</a></li>
                                <li>商品毛重：470.00g</li>
                                <li>商品产地：中国大陆</li>
                                <li>系统：苹果（IOS）</li>
                                <li>后置摄像头像素：后置双摄像头</li>
                                <li>机身内存：128GB</li>
                                <li>热点：后置双摄像头</li>
                            </ul>
                        </div>
                        <p class="more-parameter"><a href="#">更多参数 >></a></p>
                    </div>
                    <div class="product-detail-content-main">
                        <!-- Product detail content Start-->
                        <p>
                            <a href="javascript:;" target="_blank" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); text-decoration: none;"><img alt="" id="" class="" src="https://img10.360buyimg.com/imgzone/jfs/t4360/298/761344291/247529/f5aba32d/58b90b94N1570ef89.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle; float: left;"/></a><a href="javascript:;" target="_blank" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); text-decoration: none;"><img alt="" class="" src="https://img10.360buyimg.com/imgzone/jfs/t4012/135/2486862597/170413/c87795ed/58aa59ddN6f3bd09f.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle; float: left;"/></a><a href="javascript:;" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); text-decoration: none;"><img alt="" class="" src="https://img10.360buyimg.com/imgzone/jfs/t3868/122/2169673874/158668/7cdc0bce/58a51548N7cbc219a.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle;"/></a><a href="javascript:;" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); text-decoration: none;"><img alt="" class="" src="https://img10.360buyimg.com/imgzone/jfs/t3169/149/7612785434/393000/21079143/58b90734Nab50b7ef.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle;"/></a><a href="javascript:;" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); text-decoration: none;"><img alt="" class="" src="https://img10.360buyimg.com/imgzone/jfs/t3295/129/6392863191/128207/e56f54a4/58a5209fNa281fab7.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle;"/></a>
                        </p>
                        <p>
                            <br/>
                        </p>
                        <p>
                            <img alt="" id="21a7e276bc1448bbb77baee030b2fd44" class="" src="https://img30.360buyimg.com/popWareDetail/jfs/t3211/153/7633701898/48234/d88b1fc3/58b93adbN9a6bef2c.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle;"/>
                        </p>
                        <p>
                            <br/><img alt="" id="4d2b1f9041df4b2b96a56a035026f8e9" class="" src="https://img30.360buyimg.com/popWareDetail/jfs/t4351/77/372005429/53146/eed74ca7/58b38f86N52f9cb3b.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle;"/>
                        </p>
                        <p>
                            <img alt="" id="8c12582576ba476195e2f1bf27529c60" class="" src="https://img30.360buyimg.com/popWareDetail/jfs/t4081/1/810514463/24306/783cc49f/585dd96bNfb4c2bd4.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle;"/>
                        </p>
                        <p>
                            <br/><img alt="" id="ebc7395f6fcc49f1833c005ccb24c251" class="" src="https://img30.360buyimg.com/popWareDetail/jfs/t3220/142/6384173804/132817/e6e4f142/58a7a04aN29ff2ff1.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle;"/>
                        </p>
                        <p>
                            <br/>
                        </p>
                        <!-- Product detail content End-->
                    </div>
                </div>
                <div class="product-detail-content">
                    <div class="product-detail-content-title">
                        <h3>规格与包装</h3>
                    </div>
                    <div class="product-detail-specifications">
                        <div class="specifications-item">
                            <h3>主体</h3>
                            <dl>
                                <dt>适用型号</dt><dd>华为荣耀 V8</dd>
                            </dl>
                        </div>
                        <div class="specifications-item">
                            <h3>规格尺寸</h3>
                            <dl>
                                <dt>贴膜尺寸</dt><dd>4以上</dd>
                                <dt>类型</dt><dd>高透</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="product-detail-packing">
                        <h3>包装清单</h3>
                        <p>钢化膜*1 贴膜工具*1</p>
                    </div>
                </div>
                <div class="product-detail-content">
                    <div class="product-detail-content-title">
                        <h3>售后保障</h3>
                    </div>
                    <div class="product-detail-guarantee">
                        <div class="product-detail-guarantee-content">
                            <div class="product-detail-guarantee-serve-agree-bd">
                                <dl>
                                    <dt>
                                        <i class="icon-shield"></i>
                                        <strong>卖家服务</strong>
                                    </dt>
                                    <dd>
                                        本产品全国联保，享受三包服务，质保期为：一年质保 <br />
                                        如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7日内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！<br />
                                        (注:如厂家在商品介绍中有售后保障的说明,则此商品按照厂家说明执行售后保障服务。)
                                    </dd>

                                    <dt>
                                        <i class="icon-shield"></i>
                                        <strong><?= Yii::$app->params['site']['name'] ?>承诺</strong>
                                    </dt>
                                    <dd>
                                        <?= Yii::$app->params['site']['name'] ?>平台卖家展示销售并由<?= Yii::$app->params['site']['name'] ?>发货的商品，由平台卖家提供相应的售后服务。请您放心购买！<br>
                                        注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！
                                    </dd>

                                    <dt>
                                        <i class="icon-shield"></i><strong>正品行货</strong>
                                    </dt>
                                    <dd><?= Yii::$app->params['site']['name'] ?>商城向您保证所售商品均为正品行货，<?= Yii::$app->params['site']['name'] ?>自营商品开具机打发票或电子发票。</dd>
                                    <dt><i class="icon-wrench2"></i><strong>全国联保</strong></dt>
                                    <dd>
                                        凭质保证书及<?= Yii::$app->params['site']['name'] ?>商城发票，可享受全国联保服务（奢侈品、钟表除外；奢侈品、钟表由<?= Yii::$app->params['site']['name'] ?>联系保修，享受法定三包售后服务），与您亲临商场选购的商品享受相同的质量保证。<?= Yii::$app->params['site']['name'] ?>商城还为您提供具有竞争力的商品价格和<a
                                                href="//help.jd.com/help/question-892.html" target="_blank">运费政策</a>，请您放心购买！
                                        <br><br>注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！
                                    </dd>
                                    <dt><i class="icon-heart-o"></i><strong>无忧退换货</strong></dt>
                                    <dd class="no-worries-text">
                                        客户购买<?= Yii::$app->params['site']['name'] ?>自营商品7日内（含7日，自客户收到商品之日起计算），在保证商品完好的前提下，可无理由退货。（部分商品除外，详情请见各商品细则）
                                    </dd>
                                </dl>
                            </div>
                            <div class="product-detail-guarantee-explain">
                                <strong>权利声明：</strong><br><?= Yii::$app->params['site']['name'] ?>上的所有商品信息、客户评价、商品咨询、网友讨论等内容，是<?= Yii::$app->params['site']['name'] ?>重要的经营资源，未经许可，禁止非法转载使用。
                                <p><b>注：</b>本站商品信息均来自于合作方，其真实性、准确性和合法性由信息拥有者（合作方）负责。本站不提供任何保证，并不承担任何法律责任。</p>
                                <br>
                                <strong>价格说明：</strong><br>
                                <p><b><?= Yii::$app->params['site']['name'] ?>价：</b><?= Yii::$app->params['site']['name'] ?>价为商品的销售价，是您最终决定是否购买商品的依据。</p>
                                <p><b>划线价：</b>商品展示的划横线价格为参考价，该价格可能是品牌专柜标价、商品吊牌价或由品牌供应商提供的正品零售价（如厂商指导价、建议零售价等）或该商品在<?= Yii::$app->params['site']['name'] ?>平台上曾经展示过的销售价；由于地区、时间的差异性和市场行情波动，品牌专柜标价、商品吊牌价等可能会与您购物时展示的不一致，该价格仅供您参考。</p>
                                <p><b>折扣：</b>如无特殊说明，折扣指销售商在原价、或划线价（如品牌专柜标价、商品吊牌价、厂商指导价、厂商建议零售价）等某一价格基础上计算出的优惠比例或优惠金额；如有疑问，您可在购买前联系销售商进行咨询。</p>
                                <p><b>异常问题：</b>商品促销信息以商品详情页“促销”栏中的信息为准；商品的具体售价以订单结算页价格为准；如您发现活动商品售价或促销信息有异常，建议购买前先联系销售商咨询。</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-detail-content">
                    <div class="product-detail-content-title">
                        <h3>商品评价</h3>
                    </div>
                    <div class="product-detail-comment-info">
                        <div class="comment-percent"><strong class="percent-tit">好评度</strong>
                            <div class="percent-con">98<span>%</span></div>
                        </div>
                        <div class="percent-info">
                            <div class="tag-list"><span>防刮耐磨(173)</span><span>完美贴合(116)</span><span>全屏覆盖(107)</span><span>送货快(67)</span><span>抗蓝光(66)</span><span>包装精美(58)</span><span>孔位精准(54)</span><span>显示效果好(45)</span><span>操作灵敏(38)</span><span>工具全(12)</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-detail-comment-list">
                        <div class="product-detail-comment-list-tab-main">
                            <ul class="filter-list">
                                <li class="active" data-tab="trigger" data-num="1600">
                                    <a href="javascript:;">全部评价<em>(1600+)</em></a>
                                </li>
                                <li data-num="224"><a href="javascript:;">晒图<em>(224)</em></a></li>
                                <li data-num="10"><a href="javascript:;">追评<em>(10+)</em></a></li>
                                <li data-num="1500"><a href="javascript:;">好评<em>(1500+)</em></a></li>
                                <li data-num="80"><a href="javascript:;">中评<em>(80+)</em></a></li>
                                <li data-num="60"><a href="javascript:;">差评<em>(60+)</em></a></li>
                                <li style="display: none;"><a href="javascript:;">试用报告<em>()</em></a></li>
                                <li class="comm-curr-sku hide">
                                    <span><input type="checkbox" id="comm-curr-sku"></span>
                                    <label for="comm-curr-sku">只看当前商品评价</label>
                                </li>
                            </ul>
                        </div>
                        <div class="product-detail-comment-list-tab-con">
                            <div class="comment-0">
                                <div class="comment-item" >
                                    <div class="user-column">
                                        <div class="user-info"><img src="<?= Html::encode($baseUrl) ?>/img/public/user/user_default_avatar.jpg" width="25" height="25" alt="S***w" class="avatar">&nbsp;S***w</div>
                                        <div class="user-level"><span>钻石会员</span>上海</div>
                                    </div>
                                    <div class="comment-column">
                                        <div class="comment-star">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <!--<i class="icon-star"></i>-->
                                            <i class="icon-star-o item"></i>
                                            <!--<i class="icon-star-half-empty"></i>-->
                                        </div>
                                        <p class="comment-con">很漂亮，很棒的钢化膜！</p>
                                        <div class="pic-list">
                                            <a href="javascript:;" ><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_small.jpg" width="48" height="48" alt="S***w的晒单图片"></a>
                                            <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" width="48" height="48" alt="S***w的晒单图片"></a>
                                            <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" width="48" height="48" alt="S***w的晒单图片"></a>
                                            <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" width="48" height="48" alt="S***w的晒单图片"></a>
                                        </div>

                                        <div class="tag-list">
                                            <span>防刮耐磨</span>
                                            <span>抗蓝光</span>
                                            <span>全屏覆盖</span>
                                            <span>完美贴合</span>
                                            <span>操作灵敏</span>
                                        </div>
                                        <div class="comment-message">
                                            <div class="order-info">
                                                <span>珠光白</span>
                                                <span>2016-09-12 16:20</span>
                                            </div>
                                            <div class="comment-op">
                                                <a href="javascript:;"><i class="icon-thumbs-o-up"></i>0</a>
                                                <a href="javascript:;" target="_blank"><i class="icon-commenting-o"></i>0</a>
                                            </div>
                                        </div>
                                        <div class="append-comment">
                                            <div class="append-time">[购买72天后追评]</div>
                                            <p class="comment-con">挺好，已经使用推荐</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item" >
                                    <div class="user-column">
                                        <div class="user-info"><img src="<?= Html::encode($baseUrl) ?>/img/public/user/user_default_avatar.jpg" width="25" height="25" alt="S***w" class="avatar">&nbsp;S***w</div>
                                        <div class="user-level"><span>钻石会员</span>上海</div>
                                    </div>
                                    <div class="comment-column">
                                        <div class="comment-star">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>
                                        <p class="comment-con">很漂亮，很棒的钢化膜！</p>
                                        <div class="pic-list"></div>
                                        <div class="tag-list">
                                            <span>防刮耐磨</span>
                                            <span>抗蓝光</span>
                                            <span>全屏覆盖</span>
                                            <span>完美贴合</span>
                                            <span>操作灵敏</span>
                                        </div>
                                        <div class="comment-message">
                                            <div class="order-info">
                                                <span>珠光白</span>
                                                <span>2016-09-12 16:20</span>
                                            </div>
                                            <div class="comment-op">
                                                <a href="javascript:;"><i class="icon-thumbs-o-up"></i>0</a>
                                                <a href="javascript:;" target="_blank"><i class="icon-commenting-o"></i>0</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="com-table-footer">
                                    <ul class="pagination">
                                        <li class="active"><a href="javascript:;">1</a></li>
                                        <li><a href="javascript:;">2</a></li>
                                        <li><a href="javascript:;">3</a></li>
                                        <li><a href="javascript:;">下一页</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="comment-1" data-tab="item" class="hide">
                                <div class="com-table-main">
                                    <div class="J-comments-showImgSwitch-wrap comments-showImgSwitch-wrap">
                                        <div class="thumbnails">
                                            <div class="thumb-list">
                                                <ul class="clearfix" style="margin-left: 0px;">
                                                    <li class="selected"><a href="javascript:;"><img width="76"
                                                                                                     height="76"
                                                                                                     src="//img30.360buyimg.com/n1/s76x76_jfs/t3067/180/7171735739/46978/79a2b88b/58b2d04eNb9bfe601.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t4219/60/334858652/28216/cb5444f9/58b2c142N152b21d3.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3097/74/7130163311/24849/77d557c9/58b2c142N774b539f.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3229/316/6732882060/87317/1cb78b03/58abc9baN3dba87c5.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t4012/239/2605206757/105132/ff84b33b/58ab9affN49940898.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3055/168/6748938749/21704/272f23c1/58ab9afeN8f05574d.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3103/224/6678394418/50804/e23915a3/58ab9afeN1c4c790e.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3067/31/6692860991/24764/21960ad9/58aa52b8Nd98bc4d0.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3949/281/2469532311/26158/9bbacd4e/58aa52b7N4fe9dac9.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3184/329/6613813040/53924/92700229/58a94692Ne9c2582d.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img10.360buyimg.com/n1/s76x76_jfs/t3058/126/6627695290/9997/a469a0f4/58a9429eN9d7b09e0.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t4051/292/2319924129/66420/9011503b/58a7420aN15ad7312.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3841/277/3756850669/66671/4bc46246/58a1a1a1N148758ec.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3238/350/6190463924/20636/1582fbf0/589fc15aNf8323a34.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3175/67/6308336461/47990/6c76a6c5/589ed0aeNdfbc2d9a.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3214/73/6054099000/30275/3bbc5efa/589d0f03N33b637a7.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3973/321/1774290863/25812/5cc4db21/5897e1e2N7a7ea034.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3256/316/5412944629/26776/b25b119a/5897e1e2Nc47e9158.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3283/208/5986050790/43886/241d9d8d/589720c7N9f64b1f7.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3163/22/6013199740/43314/94caac77/589720c6Nb6166339.jpg"></a>
                                                    </li>
                                                </ul>
                                                <span class="J-thumb-prev i-prev-btn i-prev-disable"></span> <span
                                                        class="J-thumb-next i-next-btn"></span></div>
                                        </div>
                                        <div class="showContent-viewer clearfix">
                                            <div class="photo-viewer">
                                                <div class="photo-wrap"><i></i> <img class="J-photo-img"
                                                                                     src="//img30.360buyimg.com/n1/s760x500_jfs/t3067/180/7171735739/46978/79a2b88b/58b2d04eNb9bfe601.jpg">
                                                    <div class="J-cursor-left cursor-left disable"></div>
                                                    <div class="J-cursor-small cursor-small"></div>
                                                    <div class="J-cursor-right cursor-right"></div>
                                                </div>
                                            </div>
                                            <div class="J-info-viewer info-viewer">
                                                <div class="p-comment">很不错</div>
                                                <div class="features-wrap">
                                                    <div class="p-features">
                                                        <ul>
                                                            <li title="珠光白">珠光白</li>
                                                        </ul>
                                                    </div>
                                                    <div class="user-item-wrap">
                                                        <div class="user-item clearfix"><img
                                                                    src="//misc.360buyimg.com/lib/img/u/b62.gif"
                                                                    width="25" height="25" alt="凌***风" class="user-ico">
                                                            <div class="user-name" alt="凌***风" title="凌***风">凌***风
                                                            </div>
                                                        </div>
                                                        <div class="comment-time type-item" alt="2017.02.12"
                                                             title="2017.02.12">2017.02.12
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="comment-2" data-tab="item" class="hide">
                                <div class="iloading">正在加载中，请稍候...</div>
                            </div>
                            <div id="comment-3" data-tab="item" class="hide">
                                <div class="iloading">正在加载中，请稍候...</div>
                            </div>
                            <div id="comment-4" data-tab="item" class="hide">
                                <div class="iloading">正在加载中，请稍候...</div>
                            </div>
                            <div id="comment-5" data-tab="item" class="hide">
                                <div class="iloading">正在加载中，请稍候...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

