<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Auth\AccountControl;
use App\Http\Controllers\User;
use App\Models\Order;
use Livewire\Component;

class Orders extends Component
{
    public $cartItems = array();
    public $quantity = array();
    public $totalPrice = 0;

    public $orderStatus = '';

    public $search;

    public function render()
    {
        $myId = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];
        $user = User::show($accountType, $myId);
        $account = AccountControl::show($user->email);

        return view('livewire.orders', [
            'orders' => Order::where('account_id', $account->id)
                ->where('id', 'like', '%' . $this->search . '%')
                ->get(),
            'user' => $user,
        ]);
    }
}
