<?php

declare(strict_types=1);

/**
 * Author: 狂奔的螞蟻 <www.firstphp.com>
 * Date: 2019/9/11
 * Time: 11:59 AM
 */

namespace Firstphp\FirstphpWxapp;


interface WxappInterface
{

    /**
     * 微信登录
     *
     * @param string $code
     * @return mixed
     */
    public function login(string $code);


    /**
     * 获取access_token
     *
     * @return mixed
     */
    public function getAccessToken();


    /**
     * 发送模板消息
     *
     * @param string $params
     * @param array $accessToken
     * @return mixed
     */
    public function sendTemplateMessage(array $params, string $accessToken);


    /**
     * 附近的小程序
     *
     * @param int $page
     * @param int $page_rows
     * @param string $accessToken
     * @return mixed
     */
    public function getNearbypoilist(int $page, int $page_rows, string $accessToken);



    /**
     * 微信退款
     *
     * @param string $accessToken       accessToken
     * @param string $open_id           用户的openid
     * @param string $mchid 	        订单对应的商家商户号
     * @param string $trade_no          商家交易单号
     * @param string $transaction_id     支付单号
     * @param string $refund_no         商家退款单号，小程序系统内部唯一，只能是数字、大小写字母_-|*@，同一退款单号多次请求只退一笔。长度为6～32个字符。
     * @param integer $total_amount     订单总金额
     * @param integer $refund_amount    退款金额
     *
     * @return mixed
     */
    public function refundorder(string $accessToken = '', string $open_id, string $mchid, string $trade_no, string $transaction_id, string $refund_no, int $total_amount, int $refund_amount);

    /**
     * 获取小程序二维码 - 适用于需要的码数量较少的业务场景(永久有效，有数量限制)
     *
     * @param string $path
     * @param int $width
     * @param string $accessToken
     * @return mixed
     */
    public function createWxaQrcode(string $path = '/', string $accessToken = '', int $width = 430);


    /**
     * 生成小程序二获取小程序码 - 适用于需要的码数量较少的业务场景(永久有效，有数量限制)
     *
     * @param string $path
     * @param int $width
     * @param string $accessToken
     * @param bool|false $is_hyaline
     * @return mixed
     */
    public function getWxacode(string $path = '/', string $accessToken = '', int $width = 430, bool $is_hyaline = false);


    /**
     * 获取小程序码 - 适用于需要的码数量极多的业务场景(永久有效，数量暂无限制)
     * @param string $scene
     * @param string $page
     * @param string $accessToken
     * @param int $width
     * @param bool|false $is_hyaline
     * @return mixed
     */
    public function getWxacodeunlimit(string $scene = '', string $page = '', string $accessToken = '', int $width = 280, bool $is_hyaline = false);


    /**
     * 获取小程序码 - 适用于需要的码数量极多的业务场景(永久有效，数量暂无限制)
     *
     * @param string $path
     * @param string $accessToken
     * @return mixed
     */
    public function getWxacodeunlimit2($path = '/', $accessToken = '');


    /**
     * 生成的小程序 scheme 码
     *
     * @param array $jump_wxa
     * @param string $accessToken
     * @return mixed
     */
    public function generatescheme(array $jump_wxa = [], string $accessToken = '');


    /**
     * 校验一张图片是否含有违法违规内容
     *
     * @param string $media
     * @param string $accessToken
     * @return mixed
     */
    public function imgSecCheck(string $media, string $accessToken = '');


    /**
     * 检验数据的真实性，并且获取解密后的明文.
     *
     * @param string $encryptedData
     * @param string $iv
     * @param string $sessionKey
     * @return mixed
     */
    public function decryptData(string $encryptedData, string $iv, string $sessionKey);


    /**
     * 组合模板消息
     *
     * @param array $params
     * @return mixed
     */
    public function templateMsg(array $params = []);


    /**
     * 获取签名
     *
     * @param array $params
     * @param string $key
     * @return mixed
     */
    public function makeSign(array $params, string $key);


    /**
     * @param array $data
     * @return mixed
     */
    public function dataToXml(array $data);


    /**
     * @param string $xml
     * @return mixed
     */
    public function fromXml(string $xml);


    /**
     * 统一下单
     *
     * @param array $orderData
     * @param int $second
     * @return mixed
     */
    public function unifiedorder(array $orderData, int $second = 30);


    /**
     * @param string $xml
     * @param string $url
     * @param bool|false $useCert
     * @param int $second
     * @return mixed
     */
    public function postXmlCurl(string $xml, string $url, bool $useCert = false, int $second = 30);
}
