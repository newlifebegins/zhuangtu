<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>卖家中心</title>
    <link rel="stylesheet" href="{$config_siteurl}statics/zt/css/index.css" type="text/css"/>
    <link rel="stylesheet" href="{$config_siteurl}statics/zt/css/product.css" type="text/css"/>
    <link rel="stylesheet" href="{$config_siteurl}statics/zt/css/buyercenter.css" type="text/css"/>
    <link rel="stylesheet" href="{$config_siteurl}statics/zt/css/sellercenter.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="{$config_siteurl}statics/zt/js/html5.js "></script >
    <script src="{$config_siteurl}statics/zt/js/respond.min.js "></script >
    <![endif]-->
    <script src="{$config_siteurl}statics/zt/js/jquery.js"> </script>
    <script src="{$config_siteurl}statics/zt/js/product.js"> </script>
    <script type="text/javascript" src="{$config_siteurl}statics/js/layer/layer.js"></script>
    <script src="{$config_siteurl}statics/zt/js/base.js"></script>
    <script type="text/javascript" src="{$config_siteurl}statics/zt/js/base_jquery.js"> </script>
    <script type="text/javascript" src="{$config_siteurl}statics/zt/js/buyercenter.js"> </script>
    <script type="text/javascript" src="{$config_siteurl}statics/zt/js/Chart.js"> </script>
    <script type="text/javascript" src="{$config_siteurl}statics/js/layer/layer.js"></script>
    <script type="text/javascript" src="{$config_siteurl}statics/zt/js/OrderDetails.js"></script>
</head>
<body>
  <!--背景容器-->
  <template file="Seller/common/_header.php"/>

<!--buyercent_wrap买家中心通用     scindex买家中心首页-->
<div class="container buyercenter_wrap scindex">
    <ul class="buyerdetailstatus">
        <li class="<if condition="$order['order_state'] eq ORDER_STATE_NEW">now<elseif condition="$order['order_state'] gt ORDER_STATE_NEW"/>on<else/></if>">
            <span class="line"><span class="img"></span></span>
            <p>{$status[0][$cat_pid]}</p>
            <if condition="$order['order_state'] egt ORDER_STATE_NEW">
            <p>{$order.addtime|date="Y-m-d",###}&nbsp;&nbsp;{$order.addtime|date="H:i:s",###}</p>
            </if>
        </li>
        <if condition="$order['pay_type'] != 1">
            <li class="<if condition="$order['order_state'] eq ORDER_STATE_PAY">now<elseif condition="$order['order_state'] gt ORDER_STATE_PAY"/>on<else/></if>">
                <span class="line"><span class="img"></span></span>
                <p>{$status[1][$cat_pid]}</p>
                <if condition="$order['order_state'] egt ORDER_STATE_PAY">
                <p>{$order.payment_time|date="Y-m-d",###}&nbsp;&nbsp;{$order.payment_time|date="H:i:s",###}</p>
                </if>
            </li>
            <li class="<if condition="$order['order_state'] eq ORDER_STATE_SEND">now<elseif condition="$order['order_state'] gt ORDER_STATE_SEND"/>on<else/></if>">
                <span class="line"><span class="img"></span></span>
                <p>{$status[2][$cat_pid]}</p>
                <if condition="$order['order_state'] egt ORDER_STATE_SEND">
                <p>{$order.extend_order_common.shipping_time|date="Y-m-d",###}&nbsp;&nbsp;{$order.extend_order_common.shipping_time|date="H:i:s",###}</p>
                </if>
            </li>
            <li class="<if condition="$order['order_state'] eq ORDER_STATE_SETUP">now<elseif condition="$order['order_state'] gt ORDER_STATE_SETUP"/>on<else/></if>">
                <span class="line"><span class="img"></span></span>
                <p>{$status[3][$cat_pid]}</p>
                <if condition="$order['order_state'] egt ORDER_STATE_SETUP">
                <p>{$order.setup_time|date="Y-m-d",###}&nbsp;&nbsp;{$order.setup_time|date="H:i:s",###}</p>
                </if>
            </li>
        </if>
            <li class="<if condition="($order['order_state'] eq ORDER_STATE_SUCCESS) and ($order['evaluation_state'] neq '1')">now<elseif condition="($order['order_state'] eq ORDER_STATE_SUCCESS) and ($order['evaluation_state'] eq '1')"/>on<else/></if>">
            <span class="line"><span class="img"></span></span>
            <p>{$status[4][$cat_pid]}</p>
            <if condition="$order['order_state'] egt ORDER_STATE_SUCCESS">
            <p>{$order.finnshed_time|date="Y-m-d",###}&nbsp;&nbsp;{$order.finnshed_time|date="H:i:s",###}</p>
            </if>
        </li>
        <li class="<if condition="$order['evaluation_state'] eq '1'">now<else/></if>">
            <span class="line"><span class="img"></span></span>
            <p>{$status[5][$cat_pid]}</p>
            <if condition="$order['evaluation_state'] eq '1'">
            <p>{$order.evalseller_time|date="Y-m-d",###}&nbsp;&nbsp;{$order.evalseller_time|date="H:i:s",###}</p>
            </if>
        </li>
    </ul>

  <!--   <ul class="buyerdetailstatus_installment">
        <li class="branch"></li>
        <li class="now">
            <span class="line"><i></i><span class="img"></span></span>
            <p>工长服务费+水电工服务费已付款</p>
            <p>09:51:04</p>
        </li>
        <li>
            <span class="line"><i></i><span class="img"></span></span>
            <p>二期待付款</p>
            <p>09:51:04</p>
        </li>
        <li>
            <span class="line"><i></i><span class="img"></span></span>
            <p>三期待付款</p>
            <p>09:51:04</p>
        </li>
        <li>
            <span class="line"><i></i><span class="img"></span></span>
            <p>四期待付款</p>
            <p>09:51:04</p>
        </li>
    </ul> -->
    <div class="buyerdetailoperate">
        <div class="dt">
            <dl>
                <dt class="head">订单编号：</dt>
                <dd class="head">{$order.order_sn}</dd>
                <dt>卖家信息：</dt>
                <dd>
                 {$order['extend_order_goods']['goods_id']}   {$order.extend_shop.name} <a data-imurl="{:U('Member/Chat/index',array('shopid'=>$order['shop_id'],'productid'=>$order['extend_order_goods']['0']['goods_id']))}" class="btnopenserviceim needlogin">联系卖家</a>
                </dd>
                <dt>收货方式:</dt>
                <dd><?php if($order['extend_order_common']['reciver_type'] =='1'){echo "买家自提";}else{echo "商家发货";}?></dd>
                <if condition="$order['extend_order_common']['reciver_type'] eq '0'">
                <dt>收货地址：</dt>
                <dd>
                    {$order.extend_order_common.reciver_info.zone} &nbsp;{$order.extend_order_common.reciver_info.address}， {$order.extend_order_common.reciver_info.postcode}
                </dd>
                <dt>收 货 人 ：</dt>
                <dd>{$order.extend_order_common.reciver_info.name}</dd>
                <dt>联系电话：</dt>
                <dd>{$order.extend_order_common.reciver_info.phone}</dd>
                </if>   
                <dt>买家留言：</dt>
                <dd>{$order.extend_order_common.order_message}</dd>
                <div class="money">
                    <dt>金&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;额：</dt>
                    <dd><span>￥{$order.order_amount}</span></dd>
                </div>
            </dl>
        </div>
        <div class="dd">
                <div class="head">
                    <span class="time"><notempty name="order[payment_time]">付款时间：{$order.payment_time|date="Y.m.d H:i",###}</notempty></span>
                    <span class="time">成交时间：{$order.addtime|date="Y.m.d H:i",###}</span>
                </div>
            <switch name="order['order_state']">
                <case value="10">
                    <div class="status">
                        订单状态：<strong>{$status[0][$cat_pid]}</strong>
                        <!-- <a class="grey" href="">取消订单</a> -->
                        <p>请您尽快发货，如果需要自提，请联系买家</p>
                        <!--<p>还有<span class="time">23天58小时12分21秒</span>来付款（超时订单自动关闭）</p> -->
                    </div>
                </case>
                <case value="20">
                    <div class="status">
                        订单状态：<strong>{$status[1][$cat_pid]}</strong>
                         <a class="red send" data-orderSn="{$order.order_sn}" style="cursor:pointer">{$actions[1][$cat_pid]}</a>
                    </div></case>
                <case value="30">
                    <div class="status">
                        订单状态：<strong>{$status[2][$cat_pid]}</strong>
                        <p>您已发货，请安排安装，如果未安装情况下商家操作安装，会遭到买家投诉，如果订单不提供安装服务，请点击安装，直接到下一步</p>
                         <a class="red setup" data-orderSn="{$order.order_sn}" style="cursor:pointer">{$actions[2][$cat_pid]}</a>
                    </div></case>
                <case value="35">
                    <div class="status">
                        订单状态：<strong>{$status[3][$cat_pid]}</strong>
                        <p>已完成，等待买家确认</p>
                    </div></case>
                <case value="40">
                    <div class="status">
                        订单状态：<strong>{$status[4][$cat_pid]}</strong>
                        <p>买家已确认订单，等待评价</p>
                    </div></case>
                <default/>
            </switch>
             <div class="details">
                <if condition="$order['order_state'] egt ORDER_STATE_SUCCESS"><p>{$order.finnshed_time|date="Y-m-d H:i:s",###}<span>{$status[4][$cat_pid]}</span></p></if>
                <if condition="$order['pay_type'] != 1">
                    <if condition="$order['order_state'] egt ORDER_STATE_SETUP"><p>{$order.setup_time|date="Y-m-d H:i:s",###}<span>{$status[3][$cat_pid]}</span></p></if>
                    <if condition="$order['order_state'] egt ORDER_STATE_SEND"><p>{$order.extend_order_common.shipping_time|date="Y-m-d H:i:s",###}<span>{$status[2][$cat_pid]}</span></p></if>
                    <if condition="$order['order_state'] egt ORDER_STATE_PAY"><p>{$order.payment_time|date="Y-m-d H:i:s",###}<span>{$status[1][$cat_pid]}</span></p></if>
                </if>
                <if condition="$order['order_state'] egt ORDER_STATE_NEW"><p>{$order.addtime|date="Y-m-d H:i:s",###}<span>{$status[0][$cat_pid]}</span></p></if>
             </div>
        </div>
    </div>
    <div class="buyerdetailgoods">
        <div class="head">
            订单详情
        </div>
        <volist name="order['extend_order_goods']" id="vo">
            <ul>
                <li><a href=""><img src="{$vo.goods_image}"></a></li>
                <li>
                    <p>{$vo.goods_name}</p>

                    <volist name="vo[provalue]" id="provalue">
                      <?php if($key=='price'|| $key=='price_act') break; ?>
                      <p>{$key}：{$provalue['txt']}</p>
                    </volist>
                </li>
                <li>金额：{$vo.goods_pay_price}</li>
                <li>数量：{$vo.goods_num}</li>
                <li>
                <switch name="order['order_state']">
                <case value="10"><a class="btn changePrice" data-recid="{$vo.rec_id}" style="cursor:pointer">{$actions[0][$cat_pid]}</a></case>
                <case value="20"><a class="btn send" data-orderSn="{$vo.order_sn}" style="cursor:pointer">{$actions[1][$cat_pid]}</a></case>
                <case value="30"><a class="btn setup" data-orderSn="{$vo.order_sn}" style="cursor:pointer">{$actions[2][$cat_pid]}</a></case>
                <case value="35"></case>
                <case value="40"></case>
                <default/>
                </switch>
<!--                     <a class="delivery" href="">送货服务</a>
                    <a class="install" href="">安装服务</a>
                    <a class="agreement" href="">合同</a> -->
                </li>
            </ul>
        </volist>
        <div class="footer">
            <span>金&nbsp;&nbsp;额</span>:<strong>¥{$order.order_amount}</strong>
        </div>
    </div>

    <div class="clear"></div>
</div>




<!--保证栏-->
<template file="common/_promise.php"/>
<!--尾部-->
<!--背景容器-->
<template file="common/_footer.php"/>



</body>
</html>
