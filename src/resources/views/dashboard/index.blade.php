@extends('codedlivechat.include.app')

@section('content')

<!-- main-content -->
<div class="main-content app-content">

    @include('codedlivechat.include.desktop-notifications')

    @include('codedlivechat.include.mobile-notification')

    <!-- container -->
    <div class="container-fluid">

        @include('codedlivechat.include.breadcrumbs')





        @if (Auth::check() && Auth::user()->role == 1)

 <!-- row -->
 <div class="row">
    <div class="col-md-12">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="">
                    <div class="d-flex justify-content-between">


                        <h4 class="card-title mg-b-10">Tickets!</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>

                    <p class="tx-12 tx-gray-500 mb-2">This table will help you see and access all your tickets, Note that tickets created when not logged in to the platform are subject to removal after a certain time, and likely not appear in your chat history when you finally login.

                    if you intend on keeping tickets for a longer time, kindly  login or signup with the system first.
                    <a href="#">Learn more</a></p>
                </div>
                <div class="table-responsive market-values">

                    <table id="example" class="table key-buttons text-md-nowrap">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Client Name</th>
                                <th>Ticket ID</th>
                                <th>Client Email</th>
                                <th>Ticket Department</th>
                                <th>Created At</th>



                            </tr>
                        </thead>
                        <tbody>







                           @if($adminticket)
                           @forelse ($adminticket as $ticket)

                           <tr>
                            <td>
                            <a href="{{ route('livechat.admin.reply',['ticket_id'=>$ticket->ticket_id]) }}" class="btn btn-sm btn-success">Reply chat</a>
                            <a href="{{ route('delete.ticket',['ticket_id'=>$ticket->ticket_id]) }}" class="btn btn-sm btn-danger">delete ticket</a>
                           </td>
                           <td>{{ ucfirst($ticket->client_name) }}</td>
                           <td>{{ ucfirst($ticket->ticket_id) }}</td>
                           <td>{{ ucfirst($ticket->client_email) }}</td>
                           <td>{{ ucfirst($ticket->report_department) }}</td>
                           <td>{{ ucfirst($ticket->client_name) }}</td>

                           </tr>
                           @empty
                           @endforelse
                           @endif


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /row -->

        @else
   <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="">
                            <div class="d-flex justify-content-between">


                                <h4 class="card-title mg-b-10">Tickets!</h4>
                                <i class="mdi mdi-dots-horizontal text-gray"></i>
                            </div>

                            <p class="tx-12 tx-gray-500 mb-2">This table will help you see and access all your tickets, Note that tickets created when not logged in to the platform are subject to removal after a certain time, and likely not appear in your chat history when you finally login.

                            if you intend on keeping tickets for a longer time, kindly  login or signup with the system first.
                            <a href="#">Learn more</a></p>
                        </div>
                        <div class="table-responsive market-values">

                            <table id="example" class="table key-buttons text-md-nowrap">
                                <thead>
                                    <tr>

                                        <th>Your Name</th>
                                        <th>Your Email</th>
                                        <th>Ticket Department</th>
                                        <th>Created At</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>






                                    @if (Auth::check())
                                    @php
                                    $tickets =  Coded\Codedlivechat\Models\support_chat_store::where("user_id",Auth::user()->id)
                                   ->get();
                                   @endphp

                                   @if($tickets)
                                   @forelse ($tickets as $ticket)
                                   <tr>
                                   <td>{{ ucfirst($ticket->client_name) }}</td>
                                   <td>{{ ucfirst($ticket->client_email) }}</td>
                                   <td>{{ ucfirst($ticket->report_department) }}</td>
                                   <td>{{ ucfirst($ticket->client_name) }}</td>
                                   <td>
                                    <a href="{{ route('view.message',['ticket_id'=>$ticket->ticket_id]) }}" class="btn btn-sm btn-success">open chat</a>
                                    <a href="{{ route('delete.ticket',['ticket_id'=>$ticket->ticket_id]) }}" class="btn btn-sm btn-success">delete ticket</a>
                                   </td>
                                   </tr>
                                   @empty

                                   @endforelse
                                   @endif


                                    @else
                                    @php
                                     $tickets = Coded\Codedlivechat\Models\support_chat_store::where("guest_id",request()->cookie('guest'))
                                    ->get();
                                    @endphp

                                    @if($tickets)
                                    @forelse ($tickets as $ticket)
                                    <tr>
                                    <td>{{ ucfirst($ticket->client_name) }}</td>
                                    <td>{{ ucfirst($ticket->client_email) }}</td>
                                    <td>{{ ucfirst($ticket->report_department) }}</td>
                                    <td>{{ ucfirst($ticket->client_name) }}</td>
                                    <td>
                                     <a href="{{ route('view.message',['ticket_id'=>$ticket->ticket_id]) }}" class="btn btn-sm btn-success">open chat</a>
                                     <a href="{{ route('delete.ticket',['ticket_id'=>$ticket->ticket_id]) }}" class="btn btn-sm btn-success">delete ticket</a>

                                    </td>
                                    </tr>
                                    @empty

                                    @endforelse
                                    @endif

                                    @endif



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
        @endif








</div>
    <!-- Container closed -->
</div>


<!-- main-content closed -->

    {{ LivesupportRender::renderCodedLiveChat() }}

    {{ LivesupportRender::liveChatJs() }}

    {{ LivesupportRender::liveChatStyles() }}
@endsection
