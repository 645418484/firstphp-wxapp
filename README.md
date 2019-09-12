# firstphp-wxapp
微信小程序开发组件 for hyperf

安装组件:

	composer require firstphp/firstphp-wxapp



发布配置:

	cp vendor/firstphp/firstphp-wxapp/src/Config/wxapp.php config/autoload

	或

	php bin/hyperf.php vendor:publish firstphp/firstphp-wxapp



编辑.env配置：

	WECHAT_APPID=wxda93db123lafdu83d
	WECHAT_APPSECRET=87afeef9df90b74g4a8l9ca8d67b5742
	WECHAT_TOKEN=b5pxmw4bglFeh7Cd
	WECHAT_AES_KEY=mWm1DkAVBAZD2L5rs3QWKeoWa62wLumjqCXG9HifLdM


编辑 config/dependencies.php 并新增

    'dependencies' => [
        \Firstphp\FirstphpWxapp\WxappInterface::class => \Firstphp\FirstphpWxapp\Facades\WxappFactory::class
    ],


示例代码：

    use Firstphp\FirstphpWxapp\WxappInterface;

    ......

    /**
     * @Inject
     * @var WxappInterface
     */
    protected $wxappInterface;

    public function wxlogin() {
        $res = $this->wxappInterface->getAccessToken();
        var_dump($res);
    }
