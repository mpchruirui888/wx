<?php

namespace App\Http\Controllers\User;

use App\Http\Helps\wx\WXBizDataCrypt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    //根据APPID 和 秘钥  获取session_key 和 openid
    public function getinfo(Request $request){
        if ($request->isMethod('post')) {
            $code = $_POST['code'];
            if($code){
                $url = "https://api.weixin.qq.com/sns/jscode2session?appid=wxcd6e451caeee636d&secret=db873a7435926d354305a3c3e628fa29&js_code=".$code."&grant_type=authorization_code";
                $res = file_get_contents($url); //获取文件内容或获取网络请求的内容
                $result = json_decode($res);
            }
            return json_encode($result);
        }
    }

    public function getPhone()
    {

        $appid = $_REQUEST['appid'];
        dd($appid);

//        $sessionKey = $_POST['session_key'];
//
//        $encryptedData=$_POST['encryptedData'];
//
//        $iv = $_POST['iv'];
//
//        $pc = new WXBizDataCrypt($appid, $sessionKey);
//        $errCode = $pc->decryptData($encryptedData, $iv, $data );
//
//        if ($errCode == 0) {
//            print($data . "\n");
//        } else {
//            print($errCode . "\n");
//        }
	}


}
