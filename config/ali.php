<?php
return [
		//应用ID,您的APPID。
		'app_id' => "2016092500595518",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEowIBAAKCAQEAmpIGE+6kJijKwdIFy03fyunZqzwbkzdRvstQY4vVuSzS2PDBlAKPjdacUFe9+OvmWyM57zsS0Ot2OPra0z+q09aRasS5u6A/w1ViO7/meSAqZgtAQ42Ku9Q5qGQqvVlSm4gKIuvGGp8/wpMBsSnwwvEcpc8s/e2m3SPjSdyiNqPLE+W1J7g7IdeDBkH9ivVCygTDbzj/6jg68Fbwr8chA/r5kiBujD2OfCtAn4iz7zLNk1hjWe+s5dwTzDlxCiWMXgIiYlCVnfVDufF9p+LLAwGpPxNWQxDf9hUXwChuH65he272grZM2fvQojK5PZiqJhtdP01v5vxqzbXmlM10UwIDAQABAoIBAFamU3frCORHa9qZpRvibPlwfNCMYpz1nwLJMSiM5GPpZ82rsakKgnUuAPTdKycW/0zKA5lD0XmC9gRdRDy2bUpR97UV0VUIMZaMEASUwFvYl0wbNIxqFYLUJvpqJLd/ElsUOTJ4X9bevTyTcphhfZGa3sdoy70R87/2dV0brWfZLV7eexKSbPS2Bms6v3Ieal+IHKK5ww+hVI4SXSdU0Fo2P/4h4Wu+GlsNmzEVmXI5BqGQpZkPK9ou0BbIrzfZvShYR1fAyPwADJO9VexPq4GdEY7zgtLXxg5/wGBDoYfwIwBR19CG63xTIYDmL3TEUs6myvf2qzGxJ17UyqBzXTECgYEAyHKakwDZ2rB82dmsPFY3mLihn0s/eSZ4GFmC3k7jjhK7rNij3CullLVyThArZqZkaXp06QdVV2avOIFyGcVdjUJkyEDECWD7hNQ/wO244F18PYg0iGJMPCZv9+rJx35jJ2kDvNOUq35wUGKFTpTmN85fHUc39Z0XxEbPkGf3W5sCgYEAxWiC/zFROlADFc/E45Zg41Mu8vtedd8OQLy6cti54RbQng9pKW8OQ9a8P6gsGL1JxpKnWWTDZb5tPyW7I8jqxivRwRAtPYdBRqE6A59xqwh2uxn4QpkDg3TaNT8KXdSk1jA8fxq7871J6y45fIEpaJZsRBpT2Qm4xakQJhnJIakCgYAvI2RedbDF0QNLZ/ktJ0ljzOeVQmjm4LkVYNd52CuDWbxw5XGDcXA7DICZAwxx02eBtp6Pvn2/VBKYwzhF/zgE5Dw3K6PuYLRFhHSJtl3nxZRWFBXmjNdIvfFO6BQTqhE/T17lpQwtWEqpXMHkvPd24D1V8U2joRHZwp1FZG2zSQKBgQC4bQJtPXrgmp23Q+tyoCwWVMF4+gRu5JvhOTCLWRSXSIRQFp+tuPY/xJ8MbaX82uLQ5HP6HRw7sqNHqo1iSjOkPo3w65cIc5M1VCzp84zzN64M8J8yQNe6eXHe6u1Zae8xt9DdAnHzrbUgRYgpXFX+QwIUwe/xxZZc+6x9m/t/OQKBgGy4KWFHojNZ4rOohY9fqQ0ol/BW1fq/H+6yls8KfnUHUyg30fqQrQZgOgQBW6a9V8ctWJvCCk9tdxfTHegDiw107+wk76k+NiyVtzx/fOPlPsU7ouMtr2uu1igZIYDoaJCjKPY11DYyhkIbluiybtDRPyCBFbID6MoRgBqdRQCp",
		
		//异步通知地址
		'notify_url' => "http://wxshop.com/PayController/notify",
		
		//同步跳转
		'return_url' => "http://wxshop.com/PayController/re",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAx5Oj9i4jErNYBTbccPUfL+UaT0tcDRAIq9zRmKysSyc1gZOULS1axZ+wmNCqKDUTy4vF8IvMJ6xy0jeoTLik5COzwqxy2OsRK91zaOhmMzYDj+rYbTNcabY++OWKud6UPqQgvwqX+7c+7UdSHXWYBgmtNElH4MPJmFO4X9I/rmcjabvIzjSrKBdpE9M+X9I/dZ8Z3fEy4Dp6XNr3x3W8yhFPsOhIX0KQPv648ny6kvXZsGWO7gYb/dm4B6x6viVylet+DI3d2O/12nx5hRbPbbiPajz7uEv1C1euhI8QE33oVNHY9eG6PmTh8qzHag7noFjG91a2AioiqseMPuQ9owIDAQAB",
		
	    //标识沙箱环境
        'mode'=>'dev'
];