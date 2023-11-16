<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Edit booking </h1>
    <form action="/edit-bookinging/{{$booking->id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="country" placeholder="Country" value="{{$booking->country}}">
        <input type="text" name="city" placeholder="City" value="{{$booking->city}}">
        <input type="text" name="palace" placeholder="Palace" value="{{$booking->palace}}">
        <input type="text" name="event_type" placeholder="Event Type" value="{{$booking->event_type}}">
        <input type="text" name="palace_number" placeholder="Palace Number" value="{{$booking->palace_number}}">
        <input type="text" name="food_preference" placeholder="Food Preference" value="{{$booking->food_preference}}">
        <input type="text" name="contact_no" placeholder="Contact No" value="{{$booking->contact_no}}">
        <input type="text" name="event_date" placeholder="Event Date" value="{{$booking->event_date}}">
        <input type="text" name="email" placeholder="Email" value="{{$booking->email}}">
        <button>Update bookinging</button>
    </form>
</body>
</html>