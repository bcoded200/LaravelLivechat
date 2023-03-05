<?php

namespace Coded\Codedlivechat\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Coded\Codedlivechat\Models\support_message_store;
use Coded\Codedlivechat\LivesupportRender as Renders;
use Coded\Codedlivechat\Mail\NotifyTicketMailable;
use Coded\Codedlivechat\Models\support_chat_store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;

class CodedlivechatController extends Controller
{
    public function __construct()
    {
        Renders::SetGuestCookie();
        // Renders::UnsetGuestCookie('guest');
        //$this->middleware('livechatadmin');//uncomment to force allow admin only to this controller
    }

    public function messagechat($ticket_id)
    {
        $messages = support_message_store::all();
        $ticket = support_chat_store::where("ticket_id", $ticket_id)->firstorFail();
        return view('codedlivechat::dashboard.message-chat', compact('messages', 'ticket'));
    }



    public function index()
    {

        $adminticket = support_chat_store::all();
        return view('codedlivechat::dashboard.index',compact('adminticket'));
    }

    public function adminreply($ticket_id)
    {

        $ticket = support_chat_store::where("ticket_id",$ticket_id)->first();

        $user_response = support_message_store::where("ticket_id",$ticket_id)
        ->where("is_admin", false)
        ->get();

        $admin_response = support_message_store::where("ticket_id",$ticket_id)
        ->where("is_admin", true)
        ->get();

        return view('codedlivechat::dashboard.adminreply',compact(
            'ticket','admin_response','user_response'
        ));
    }


    public function deleteticket($ticket_id)
    {
        $ticket = support_chat_store::where('ticket_id', $ticket_id)->first();
        $ticket->delete();

        return back()->with('success', 'Ticket deleted successfully');
    }



    public function storeLiveChat(Request $request)
    {
        //return Renders::UnsetGuestCookie('guest');
        $ticket = new support_chat_store;

        if (Auth::check()) {
            /**
             * Run the block of code 08118988964
             */

            /**
             * Run the block of code 08118988964
             */


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



            $ticket->client_name = $request->name;
            $ticket->client_email = $request->email;
            $ticket->client_message = $request->message;
            $ticket->report_department = $request->department;
            $ticket->user_id = Auth::user()->id;
            $ticket->ticket_status = 0;
            $ticket->ticket_id = $tid;
            $ticket->save();

            //build the message dependency
            $message = new support_message_store;
            $user = User::where("role", 1)->first();

            $message->message_from = Auth::user()->id;
            $message->message_to = $user->id;
            $message->senders_id = Auth::user()->id;
            $message->receivers_id = $user->id;
            $message->message_body = $request->message;
            $message->ticket_id = $tid;
            $message->is_admin = 0;
            $message->expirytime = Carbon::now()->timezone(config('livechat.timezone'));
            $message->save();

            $message_id = $message->id;

            $details = [
                'name' =>  $request->name,
                'email' => $request->email,
                'message' => $request->message,
                'department' => $request->department,
                'ticket_id' => $tid,
                'type' => 'create'
            ];

            Mail::to(config('livechat.support_email'))->send(new NotifyTicketMailable($details));

            return redirect()->route('view.message', ['ticket_id' => $tid]);
        } else {



            /**
             * Run the block of code 08118988964
             */
            if (request()->cookie('guest')) {

                //return 'session is present';

                /**
                 * process request with exisiting cookie
                 */
                $ticketid = Renders::LivechatId();

                if (session()->has('ticketid')) {
                    $tid = session()->get('ticketid');
                } else {
                    $tid = session()->put(['ticketid' => $ticketid]);
                }



                $ticket->client_name = $request->name;
                $ticket->client_email = $request->email;
                $ticket->client_message = $request->message;
                $ticket->report_department = $request->department;
                $ticket->guest_id = request()->cookie('guest');
                $ticket->ticket_status = 0;
                $ticket->ticket_id = $tid;
                $ticket->save();

                //build the message dependency
                $message = new support_message_store;
                $user = User::where("role", 1)->first();

                $message->message_from = request()->cookie('guest');
                $message->message_to = $user->id;
                $message->senders_id = request()->cookie('guest');
                $message->receivers_id = $user->id;
                $message->message_body = $request->message;
                $message->ticket_id = $tid;
                $message->is_admin = 0;
                $message->expirytime = Carbon::now()->timezone(config('livechat.timezone'));
                $message->save();

                $message_id = $message->id;
                $details = [
                    'name' =>  $request->name,
                    'email' => $request->email,
                    'message' => $request->message,
                    'department' => $request->department,
                    'ticket_id' => $tid,
                    'type' => 'create'
                ];

                Mail::to(config('livechat.support_email'))->send(new NotifyTicketMailable($details));

                return redirect()->route('view.message', ['ticket_id' => $tid]);
            }

            return 'service unavailable';
        }
    }
}
