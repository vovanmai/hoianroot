<h2>Hi,</h2>
<p>You have a new reservation</p>
Reservation details:
<ul>
    <li>Fullname: {{ $data['full_name'] }}</li>
    <li>Phone Number: <a href="tel:+{{ $data['country_code'] . $data['phone'] }}">{{ $data['country_code'] . ' ' . $data['phone'] }}</a></li>
    <li>Date time: {{ $data['date'] . ' ' . $data['time'] }}</li>
    <li>Email: {{ $data['email'] ?? '' }}</li>
    <li>Number of Guests: {{ $data['number_of_guests'] }}</li>
    <li>Note: {{ $data['note'] ?? '' }}</li>
</ul>
<p>Thank you!</p>
