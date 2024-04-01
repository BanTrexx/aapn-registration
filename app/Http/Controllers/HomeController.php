<?php

namespace App\Http\Controllers;

use App\Models\aapnUser;
use Illuminate\Http\Request;
use App\Models\aapnUsers;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('app.home');
    }

    public function authenticate (Request $request)
    {
        $credentials = $request->validate([
            'agent_code' => 'required'
        ]);

        if(aapnUsers::where('agent_code', $credentials['agent_code'])->first()) {
            return view('app.auth.success', [
                "user" => aapnUsers::where('agent_code', $credentials['agent_code'])->first()
            ]);
        } else {
            return view('app.auth.failed');
        }
    }

    public function registration ($agent_code)
    {
        if (aapnUsers::where('agent_code', $agent_code)->value('role') == 0 || 1) {
            return view('app.offline', [
                "user" => aapnUsers::where('agent_code', $agent_code)->first()
            ]);
        } else if (aapnUsers::where('agent_code', $agent_code)->value('role') == 2) {
            return view('app.online1', [
                "user" => aapnUsers::where('agent_code', $agent_code)->first()
            ]);
        } else if (aapnUsers::where('agent_code', $agent_code)->value('role') == 3) {
            return view('app.online2', [
                "user" => aapnUsers::where('agent_code', $agent_code)->first()
            ]);
        }
    }

    public function update (Request $request, $agent_code)
    {
        $user = aapnUsers::where('agent_code', $agent_code)->first();
        if ($user->role == 0 || 1) {
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->address = $request->input('address');
            $user->food = $request->input('food');
            $user->partner = $request->input('partner');
            $user->partner_food = $request->input('partner_food');
            
            $user->save();
        } else if ($user->role == 2) {
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->address = $request->input('address');
            $user->location = $request->input('location');
            $user->postal_code = $request->input('postal_code');
            
            $user->save();
        } else if ($user->role == 3) {
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->address = $request->input('address');
            $user->location = $request->input('location');
            $user->postal_code = $request->input('postal_code');
            $user->partner = $request->input('partner');
            $user->partner_address = $request->input('partner_address');

            $user->save();
        }
        
        return view('app.dresscode', [
            "user" => $user
        ]);
    }
}
