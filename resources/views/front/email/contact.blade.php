@component('mail::message')
<h2>New Contact</h2> <br>
<strong>Message from {{$data['name']  }} </strong> <br><br>

Email: {{ $data['email'] }} <br>
@if ($data['number'])
Phone: {{ $data['number'] }} <br>
@endif

Message: <br>
{{  $data['message']  }} <br><br>

@endcomponent
