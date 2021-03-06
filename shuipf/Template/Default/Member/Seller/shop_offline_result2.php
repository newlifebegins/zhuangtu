<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{$config_siteurl}statics/zt/css/index.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="{$config_siteurl}statics/zt/js/html5.js "></script >
    <script src="{$config_siteurl}statics/zt/js/respond.min.js "></script >
    <![endif]-->
    <script src="{$config_siteurl}statics/zt/js/jquery.js"></script>
    <script type="text/javascript" src="{$config_siteurl}statics/js/layer/layer.js"></script>
    <script src="{$config_siteurl}statics/zt/js/base.js"></script>
    <script type="text/javascript" src="{$config_siteurl}statics/zt/js/base_jquery.js"></script>
</head>
<body bgcolor="#FFFFFF">
  <template file="common/_header"/>
  <div class="seller_reg_process_ul">
    <ul>
      <li>
        <em></em>
        <span>1.商家注册</span>
      </li>
      <li>
        <em></em>
        <span>2.申请开店</span>
      </li>
      <li >
        <em></em>
        <span>3.绑定银行卡</span>
      </li>
      <li>
        <em></em>
        <span>4.资质审核</span>
      </li>
      <li class="on">
        <em></em>
        <span>5.创建店铺</span>
      </li>
      <li>
        <em></em>
        <span>6.店铺上线</span>
      </li>
    </ul>
  </div>>
  <!--内容-->
  <!--保护容器-->
  <div class="container">
  <eq name="result[status]" value="-1"></eq>
    <div class="seller_main">
      <ul class="guocheng">
        <li class="on">
          <em><i>1</i></em>
          <span>填写资质信息</span>
        </li>
        <li class="on">
          <em><i>2</i></em>
          <span>等待人工审核</span>
        </li>
        <li  class="on">
          <em><i>3</i></em>
          <span>查看审核结果</span>
        </li>
      </ul>
      <div class="qualification">
        <div class="formhead"> <strong>审核结果</strong>
        </div>
        <div class="pass">
          <img src="{$config_siteurl}statics/zt/images/Seller_registeri04_pass02.jpg">
          <p class="reason">{$result[message]}</p>
          <p>如有疑问，请拨打电话400000000咨询客服</p>
        </div>
      </div>
      <div  class="btnbox">
        <a href="{:U('shop_offline_info')}">修改认证信息</a>
      </div>
    </div>


  <eq name="result[status]" value="1">
    <div class="seller_main">
      <ul class="guocheng">
        <li class="on">
          <em><i>1</i></em>
          <span>填写资质信息</span>
        </li>
        <li class="on">
          <em><i>2</i></em>
          <span>等待人工审核</span>
        </li>
        <li  class="on">
          <em><i>3</i></em>
          <span>查看审核结果</span>
        </li>
      </ul>
      <div class="qualification">
        <div class="formhead"> <strong>店铺命名</strong>
        </div>
        <form action="shop_offline_result" class="storenaming " method="post" id="form_shop">
          <dl>
            <dt>
              店 铺 命 名：
              <em></em>
            </dt>
            <dd>
              <input type="text" name="shop_name" /> <span class="nametip">店铺命名建议采取 品牌--类--地--店铺等级 的方式命名，例如：海尔--电器--长风街体育路--旗舰店	</span>
              <p class="care">注：如需修改店铺名称请拨打400客服电话</p>
            </dd>

          </dl>
          <dl class="dbnam">
            <dt>
              店 铺 域 名：
              <em></em>
            </dt>
            <dd>
              <div class="inputboxd">
                <span>www.saler111/</span><input type="text" name="domain"  value="" style="width:213px;"/>
              </div>
            </dd>
          </dl>
          <div  class="btnbox"><a href="javascript:$('#form_shop').submit();">创建店铺</a></div>

        </form>

      </div>
    </div>
  </eq>
    <!---->
  </div>

  <template file="common/_footer"/>
</body>
</html>