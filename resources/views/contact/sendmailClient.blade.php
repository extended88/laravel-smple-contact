<!doctype html>
<html>
<head>
<meta charset="utf-8">
<body>
<p>お問い合わせがありました。</p>
<p>お問い合わせ日時　:　{{ $contact_day }}</p>
<p>件名　:　{{ $contact_subject }}</p>
<p>本文　------------------------------------</p>
<p>{{ $contact_message }}</p>
<p>------------------------------------------</p>
<p>ご氏名　:　{{ $contact_name }}</p>
<p>email: {{ $contact_email }}</p>
</body>
</html>