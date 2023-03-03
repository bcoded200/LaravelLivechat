<?php

namespace Coded\Codedlivechat\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Coded\Codedlivechat\Models\support_message_store;
use Coded\Codedlivechat\LivesupportRender as Renders;
use Coded\Codedlivechat\Mail\NotifyTicketMailable;
use Coded\Codedlivechat\Models\support_chat_store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;

class NotifyuserTicketController extends Controller
{

    public function send()
    {

    }



}
