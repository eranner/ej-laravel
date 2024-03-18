<!-- contact_form.blade.php -->

<html>
<body>
<h3 style='font-weight:bold; color: navy; padding: 3px; margin:0;'>Contacted By:</h3>
<p style='background-color: #CCCCCE; padding:0; margin:0;'>{{ $data['clientName'] }}</p>
<h3 style='font-weight:bold; color: navy; padding: 3px; margin:0;'>Contact Email:</h3>
<p style='background-color: #CCCCCE; padding:0; margin:0;'>{{ $data['clientEmail'] }}</p>
<h3 style='font-weight:bold; color: navy; padding: 3px; margin:0;'>Contact Phone Number:</h3>
<p style='background-color: #CCCCCE; padding:0; margin:0;'>{{ $data['clientPhone'] }}</p>
<h3 style='font-weight:bold; color: navy; padding: 3px; margin:0;'>Inquiry</h3>
<p style='background-color: #CCCCCE; padding:0; margin:0;'>{{ $data['inquiry'] }}</p>
</body>
</html>
