@component('mail::message')
# Hi, {{ $details['name'] }}

You have a livechat feedback from {{ ucfirst(config('app.name')) }} website, kindly login to follow up
<br />or reply directly through the support mail channel. <a href="mailto:{{ config('livechat.support_email') }}">Here</a>
<hr />

{{ $details['message'] }}

@component('mail::button', ['url' => route('view.message',['ticket_id'=>$details['ticket_id']])])
reply to message online
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
