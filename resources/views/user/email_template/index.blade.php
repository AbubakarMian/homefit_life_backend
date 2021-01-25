<!DOCTYPE html>
<html>
<head>
    <title>Greetings Card</title>
</head>
<body>
    <h1>{{ $details->sender_name }}</h1>
    <h1>{{ $details->sender_name }}</h1>
    <p>{{ $details->sender_email}}</p>
    <p>{{ $details->receiver_name }}</p>
    <p>{{ $details->receiver_email }}</p>

    @if($details->default_greeting_card)         
    <img src="{{$details->default_greeting_card->background_url}}"  width="500" height="600">
     @else
     <img src="{{$details->background_url}}"  width="500" height="600">   
    @endif
    
    
    <a href="{!!asset('user/demo?greet_id=').$details->id!!}">Click here to view card</a>
   
    <p>Thank you</p> 
</body>
</html>