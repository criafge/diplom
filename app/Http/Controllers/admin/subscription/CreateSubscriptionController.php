<?php

namespace App\Http\Controllers\admin\subscription;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSubscriptionRequest;
use App\Models\Subscription;
use Illuminate\Http\Request;

class CreateSubscriptionController extends Controller
{
    public function __invoke(CreateSubscriptionRequest $request)
    {
        $data = $request->validated();
        $subscription = Subscription::create($data);
        return $subscription;
    }
}
