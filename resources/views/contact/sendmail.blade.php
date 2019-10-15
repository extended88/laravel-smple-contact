<!doctype html>
<html>
<head>
<meta charset="utf-8">
<body>
<p>{{ $contact_name }} 様</p>
<p>お問い合わせいただきありがとうございました。</p>
<p>下記内容で正しく送信いたしました。</p>
<p>お問い合わせ日時　:　{{ $contact_day }}</p>
<p>件名　:　{{ $contact_subject }}</p>
<p>本文　------------------------------------</p>
<p>{{ $contact_message }}</p>
<p>------------------------------------------</p>
<p>****</p>
<p>URL : ****</p>
<p>email : ***@***.com</p>
</body>
</html>