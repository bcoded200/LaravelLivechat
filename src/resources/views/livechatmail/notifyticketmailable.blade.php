@component('mail::message')
# Hi ADMIN,

@if($details['type'] == 'reply')
Someone just replied a support ticket on your website
@elseif ($details['type'] == 'create')
Someone just created a support ticket on your website
@endif

<hr />

{{ $details['message'] }}

@php
    $ticketid = $details['ticket_id'];
@endphp
@component('mail::button', ['url' => route('livechat.admin.reply',['ticket_id'=>$ticketid])])
Open message online
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent


