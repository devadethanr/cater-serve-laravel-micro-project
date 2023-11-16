<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h2>
        Bookings for the event
    </h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Country</th>
                <th>City</th>
                <th>Palace</th>
                <th>Event Type</th>
                <th>Palace Number</th>
                <th>Food Preference</th>
                <th>Contact No</th>
                <th>Event Date</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{$booking['country']}}</td>
                <td>{{$booking['city']}}</td>
                <td>{{$booking['palace']}}</td>
                <td>{{$booking['event_type']}}</td>
                <td>{{$booking['palace_number']}}</td>
                <td>{{$booking['food_preference']}}</td>
                <td>{{$booking['contact_no']}}</td>
                <td>{{$booking['event_date']}}</td>
                <td>{{$booking['email']}}</td>
                <td> <a href="/edit-booking/{{$booking->id}}">Edit Bookings</a></td>
                <td><form action="/delete-booking/{{$booking->id}} method="POST>
                    @csrf
                    @method('DELETE')
                    <button>Delete Booking </button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>