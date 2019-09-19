# Move SMS API

## Usage
## Instantiate the class
```php
$sms = new \Osen\Move\SMS($username, $Key, $senderId)
```

## Send SMS
```php
$message = $sms->send($tophonenumber, $finalmessage, $msgtype, $dlr);
```
