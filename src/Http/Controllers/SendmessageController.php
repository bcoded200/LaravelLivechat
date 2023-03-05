<?php

namespace Coded\Codedlivechat\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Coded\Codedlivechat\Models\support_message_store;
use Coded\Codedlivechat\LivesupportRender as Renders;
use Coded\Codedlivechat\Mail\NotifyTicketMailable;
use Coded\Codedlivechat\Mail\NotifyUserMaillable;
use Coded\Codedlivechat\Models\support_chat_store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class SendmessageController extends Controller
{
    //

    public function send(Request $request)
    {


        // Get the input values from the request
        $content = $request->input('content');



        if (request()->cookie('guest')) {

            //return 'session is present';

            /**
             * process request with exisiting cookie
             */
            $ticketid = Renders::LivechatId();

            if (session()->has('ticketid')) {
                $tid = session()->get('ticketid');
            } else {
                session()->put(['ticketid' => $ticketid]);
                $tid = session()->get('ticketid');
            }
        }

        //build the message dependency
        $message = new support_message_store;
        $user = User::where("role", 1)->first();

        if (Auth::check()) {
            //Store the message in the database
            $message->message_from = Auth::user()->id;
            $message->message_to = $user->id;
            $message->senders_id = Auth::user()->id;
            $message->receivers_id = $user->id;
            $message->message_body = $request->content;
            $message->ticket_id = $tid;
            $message->is_admin = 0;
            $message->expirytime = Carbon::now()->addMinutes(config('livechat.chatTimer'))->timezone(config('livechat.timezone'));
            $message->save();



            $details = [

                'message' => $request->message,
                'type' => 'reply',
                'ticket_id' => $tid,
            ];

            Mail::to(config('livechat.support_email'))->send(new NotifyTicketMailable($details));
            // Return a JSON response with the new message data
            return response()->json(['message' => request()->input('content'),]);
        } else {


            //Store the message in the database
            $message->message_from = request()->cookie('guest');
            $message->message_to = $user->id;
            $message->senders_id = request()->cookie('guest');
            $message->receivers_id = $user->id;
            $message->message_body = $request->content;
            $message->ticket_id = $tid;
            $message->is_admin = 0;
            $message->expirytime = Carbon::now()->addMinutes(config('livechat.chatTimer'))->timezone(config('livechat.timezone'));
            $message->save();

            $details = [
                'name' =>  $request->name,
                'email' => $request->email,
                'message' => $request->content,
                'department' => $request->department,
                'ticket_id' => $tid,
                'type' => 'reply'
            ];


            Mail::to(config('livechat.support_email'))->send(new NotifyTicketMailable($details));

            //Return a JSON response with the new message data
            return response()->json(['message' => request()->input('content'),]);
        }
    }




    public function adminsend(Request $request, $ticket_id)
    {


        // Get the input values from the request
        $content = $request->input('content');


        //build the message dependency
        $message = new support_message_store;
        $ticketinfo = support_chat_store::where("ticket_id", $ticket_id)->first();


            //Store the message in the database
            $message->message_from = Auth::user()->id;
            $message->message_to = $ticketinfo->guest_id ? $ticketinfo->guest_id : $ticketinfo->user_id;
            $message->senders_id = Auth::user()->id;
            $message->receivers_id = $ticketinfo->guest_id ? $ticketinfo->guest_id : $ticketinfo->user_id;
            $message->message_body = $request->content;
            $message->ticket_id = $ticketinfo->ticket_id;
            $message->is_admin = 1;
            $message->expirytime = Carbon::now()->addMinutes(config('livechat.chatTimer'))->timezone(config('livechat.timezone'));
            $message->save();



            $details = [

                'message' => $request->input('content'),
                'type' => 'reply',
                'ticket_id' => $ticketinfo->ticket_id,
                'email' => $ticketinfo->client_email,
                'name' => $ticketinfo->client_name
            ];


            Mail::to($details['email'])->send(new NotifyUserMaillable($details));

            //Return a JSON response with the new message data
            session()->flash('success', 'message sent successfully');
            return back()->with('success','message replied successfully');

    }


    public function replyback(Request $request, $ticket_id)
    {


        // Get the input values from the request
        $content = $request->input('content');


        $ticket  = support_chat_store::where("ticket_id", $ticket_id)->first();

        $tid = $ticket->ticket_id;

        //build the message dependency
        $message = new support_message_store;
        $user = User::where("role", 1)->first();

        if (Auth::check()) {
            //Store the message in the database
            $message->message_from = Auth::user()->id;
            $message->message_to = $user->id;
            $message->senders_id = Auth::user()->id;
            $message->receivers_id = $user->id;
            $message->message_body = $request->content;
            $message->ticket_id = $tid;
            $message->is_admin = 0;
            $message->expirytime = Carbon::now()->addMinutes(config('livechat.chatTimer'))->timezone(config('livechat.timezone'));
            $message->save();



            $details = [

                'message' => $request->message,
                'type' => 'reply',
                'ticket_id' => $tid,
            ];

            Mail::to(config('livechat.support_email'))->send(new NotifyTicketMailable($details));
            // Return a JSON response with the new message data
            return response()->json(['message' => request()->input('content'),]);
        } else {


            //Store the message in the database
            $message->message_from = request()->cookie('guest');
            $message->message_to = $user->id;
            $message->senders_id = request()->cookie('guest');
            $message->receivers_id = $user->id;
            $message->message_body = $request->content;
            $message->ticket_id = $tid;
            $message->is_admin = 0;
            $message->expirytime = Carbon::now()->addMinutes(config('livechat.chatTimer'))->timezone(config('livechat.timezone'));
            $message->save();

            $details = [
                'name' =>  $request->name,
                'email' => $request->email,
                'message' => $request->content,
                'department' => $request->department,
                'ticket_id' => $tid,
                'type' => 'reply'
            ];


            Mail::to(config('livechat.support_email'))->send(new NotifyTicketMailable($details));

            //Return a JSON response with the new message data
            return response()->json(['message' => request()->input('content'),]);
        }
    }

}
