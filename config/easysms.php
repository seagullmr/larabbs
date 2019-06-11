<?php
return [
    // HTTP 请求的超时时间（秒）
    'timeout' => 5.0,

    // 默认发送配置
    'default' => [
        // 网关调用策略，默认：顺序调用
        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,

        // 默认可用的发送网关
        'gateways' => [
            'yunpian',
            'qcloud',
            'jiguang'
        ],
    ],
    // 可用的网关配置
    'gateways' => [
        'errorlog' => [
            'file' => '/tmp/easy-sms.log',
        ],
        'yunpian' => [
            'api_key' => env('YUNPIAN_API_KEY'),
        ],
        'jiguang' => [
            'app_key' => env('JIGUANG_SMS_APP_KEY'),   // 要在.env文件配置好相应的值
            'master_secret' => env('JIGUANG_SMS_MASTER_SECRET'),   // 要在.env文件配置好相应的值
        ]
    ],
];