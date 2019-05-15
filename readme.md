tp51unit , unit test for thinkphp5.1, only test
==

test thinkphp5.1 app's logic by phpstorm 2019

**usage**
    
    composer require wsteel/php51unit

**require**
    
    "php": ">=7.0.0",
    "topthink/framework": "5.1.*"
    "phpunit/phpunit": "6.*"

**phpstorm setting**

File | Settings | Languages & Frameworks | PHP | Test Frameworks

    PHPUnit library -> Path to phpunit.phar -> _YOUR_phpunit-*.phar

    Test Runner -> Default bootstrap file:  __YOUR_APP__\vendor\wsteel\tp51unit\src\wsteel\tp51unit\TestCase.php

**demo**

filename

    tests/demo/demoTest.php

content
```php

namespace tests\demo;

use wsteel\tp51unit\TestCase;

class demoTest extends TestCase
{

    public function testTrue()
    {
        $this->assertTrue(true);
    }

    public function testFalse()
    {
        $this->assertFalse(false, 'false');
    }


    public function testModel()
    {
        $e = \app\serverapi\model\Users::get(1)->toArray();
        $this->assertNotEmpty($e);
    }

    public function testM()
    {
        $user = model('users', 'serverapi\model');
        $e = $user->where('id', 1)->find()->toArray();
        $this->assertNotEmpty($e);
    }

    public function testDB()
    {
        $user = \think\Db::name('server_user');
        $e = $user->where('id', 1)->find();
        $this->assertNotEmpty($e);
    }

    public function testConfig()
    {
        $config = config('serverapi');
        $this->assertNotEmpty($config);
    }
}

```