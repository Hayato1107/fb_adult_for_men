<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function os(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=15524'); //CONNECT - fam
            // return redirect('https://preaf.jp/pa.do?s=v04031&o=49386&guid=ON'); //JUMP - Preaf
            // return redirect('https://a-trade.jp/redirect/moa?media=G16531'); //モア - Aトレード
            // return redirect('https://a-trade.jp/redirect/giftchat?media=G16531'); //ギフトチャット - Aトレード
            // return redirect('https://fam-ad.com/ad/p/r?_site=64802&_article=16786'); //ワクワク - fam
        }
        return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=15524'); //CONNECT - fam
        // return redirect('https://preaf.jp/pa.do?s=v04031&o=49386&guid=ON'); //JUMP - Preaf
        // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=17545'); //恋バナナ - fam
        // return redirect('https://a-trade.jp/redirect/giftchat?media=G16531'); //ギフトチャット - Aトレード
        // return redirect('https://fam-ad.com/ad/p/r?_site=64802&_article=16345'); //ワクワクweb - fam
    }
    
    public function os1(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://a-trade.jp/redirect/berry?media=G16531'); //ベリー - Aトレード
            // return redirect('https://a-trade.jp/redirect/popo?media=G16531'); //PoPo - Aトレード
            // return redirect('https://a-trade.jp/redirect/moa?media=G16531'); //モア - Aトレード
        }
        return redirect('https://trading-ad.net/lp/livede55/lady01/?pf=atrade&b=G16531'); //ライブでゴーゴー - Aトレード
        // return redirect('https://a-trade.jp/redirect/moa?media=G16531'); //モア - Aトレード
    }
}
