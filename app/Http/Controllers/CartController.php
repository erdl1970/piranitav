<?php

namespace App\Http\Controllers;

use App\Mail\NewOrder;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;

use Mail;

class CartController extends Controller
{
    public function update()
    {
        $client = auth()->user();
        $cart = $client->cart;
        $cart->status = 'Pending';
        $cart->order_date = Carbon::now();
        $cart->save(); //UPDATE

        $admins = User::where('admin', true)->get();
        Mail::to($admins)->send(new NewOrder($client, $cart));

        $notification = "Tu pedido se ha registrado correctamente. Te contactaremos pronto via mail";
        return back()->with(compact('notification'));
    }
}
