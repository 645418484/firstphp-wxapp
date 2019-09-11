<?php

declare(strict_types=1);

/**
 *  小程序开发之配置文件
 *
 *  User: 狂奔的螞蟻 <www.firstphp.com>
 *  Date: 2019/9/10
 *  Time: 上午11:32
 */


return [
    /*
    |--------------------------------------------------------------------------
    | 小程序之AppID
    |--------------------------------------------------------------------------
    |
    */
    'appid' => env('WXAPP_APPID', 'wx086a5e2b45d48478'),
    /*
    |--------------------------------------------------------------------------
    | AppSecret
    |--------------------------------------------------------------------------
    |
    */
    'appsecret' => env('WXAPP_APPSECRET', '02e0279aba8ee8b2d14c08069623843a'),
    /*
    |--------------------------------------------------------------------------
    | Key
    |--------------------------------------------------------------------------
    |
    */
    'wxapp_key' => env('WECHAT_KEY', '0d9721b394f7b64fbad96f8cB388929F')

];
