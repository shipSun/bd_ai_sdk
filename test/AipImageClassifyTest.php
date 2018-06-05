<?php
/**
 * Created by PhpStorm.
 * User: shipSun
 * Date: 2018/6/5
 * Time: 11:23
 */

class AipImageClassifyTest extends \PHPUnit\Framework\TestCase
{
    public function testAdvancedGeneral(){
        $client = new \BaiDuAi\AipImageClassify(APP_ID, AK, SK);
        $object = $client->advancedGeneral(file_get_contents('https://media1.rrl360.com/product/0001/31/thumb_30565_default.jpg'));
        if(isset($object['error_code'])){
            $this->assertTrue(false, $object['error_msg']);
        }
        $this->assertTrue(true);
    }
}