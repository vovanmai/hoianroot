<h2>Hi,</h2>
<p>You have a new contact form submission</p>
Contact details:
<ul>
    <li>Fullname: {{ $data['full_name'] }}</li>
    <li>Phone Number: <a href="tel:+{{ $data['country_code'] . $data['phone'] }}">{{ $data['country_code'] . ' ' . $data['phone'] }}</a></li>
    <li>Message: {{ $data['message'] ?? '' }}</li>
</ul>
<p>Thank you!</p>
