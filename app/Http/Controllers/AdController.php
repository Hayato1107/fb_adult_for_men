<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function os(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://a-trade.jp/redirect/popo?media=G16531'); //PoPo - Aトレード
            // return redirect('https://a-trade.jp/redirect/moa?media=G16531'); //モア - Aトレード
        }
        return redirect('http://www.angelfc.net/mobaile_regist.php?sex=female&channel=mocom&ascode=G16531'); //モコム - Aトレード
        // return redirect('https://a-trade.jp/redirect/moa?media=G16531'); //モア - Aトレード
    }
    
    public function osd(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            // return redirect('https://a-trade.jp/redirect/moa?media=G16531'); //モア - Aトレード
            // return redirect('https://a-trade.jp/redirect/giftchat?media=G16531'); //ギフトチャット - Aトレード
            return redirect('https://fam-ad.com/ad/p/r?_site=64802&_article=16786'); //ワクワク - fam
        }
        // return redirect('https://a-trade.jp/redirect/giftchat?media=G16531'); //ギフトチャット - Aトレード
        return redirect('https://fam-ad.com/ad/p/r?_site=64802&_article=16345'); //ワクワクweb - fam
    }
}
