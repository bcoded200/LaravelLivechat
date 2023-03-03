@component('mail::message')
# Hi,

@if($details['type'] == 'reply')
Someone just replied a support ticket on your website
@elseif ($details['type'] == 'create')
Someone just created a support ticket on your website
@endif

<hr />

{{ $details['message'] }}

@component('mail::button', ['url' => route('view.message',['ticket_id'=>$details['ticket_id']])])
Open message online
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent


