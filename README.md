# Move SMS API

## Usage
## Instantiate the class
```php
$sms = new \Osen\Move\SMS($username, $Key, $senderId)
```

## Send SMS
```php
$message = $sms->send($phone, $message, $msgtype = 5, $dlr = 0);
```
