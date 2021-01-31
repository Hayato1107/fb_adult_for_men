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
}
