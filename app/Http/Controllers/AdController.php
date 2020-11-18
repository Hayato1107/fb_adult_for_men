<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function os(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://t.afi-b.com/visit.php?guid=ON&a=J11083W-U373850v&p=37183994'); //マリッシュ - af-B
        }
        return redirect('https://t.afi-b.com/visit.php?guid=ON&a=J11083W-U373850v&p=37183994'); //マリッシュ - af-B
    }
}
