<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Twitter;
class tweetController extends Controller
{
    public function test() {
//         // include "twitteroauth/twitteroauth.php";
        
// $consumer_key = "mWLbma3a30dCb0pBlciH2Ywju";
// $consumer_secret = "Gd3ZO3d9ESrn25s5ur3dLB2iCOIlNOqR3Drr8HNRRLlPU95anG";
// $access_token = "849738349824880641-U2hNoqNA8I9jen9CoVfUqAMEVHN2riq";
// $access_token_secret = "1FNO1Fo3mocgmul6JF5148bpDov4vAALsGeL4aSWJeMx0";
 
// $connection = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
 
// $tweets = $connection->get('https://api.twitter.com/1.1/search/tweets.json”?q=%23ccsit+%23rfa&count=50');
 
$data = Twitter::getSearch(['count' => 10, 'q' => "#Hello", 'format' => 'array']
// $trsnd
);
    	// return view('twitter',compact('data'));
    // return view('/test', compact('data'));
    return $data['statuses'][6]['text'];
    }
}
