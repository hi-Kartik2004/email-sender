# Email-sender
Cold email sender, which sends cold email for sponsorships, with attachment brochure and company name as a variable.
You can configure your email id to send emails `without the need to` `copy paste email content`, `bold some portions`, `attach the attachment brochure everytime`, `add bccs` and `change the company name` everytime you are mailing a company.

`Duration to send cold emails reduced by about 400%`
Live site at: https://ieee-email-sender.000webhostapp.com

## Installation

If you have git installed on your system

```bash
  fork my repository, and use 
  git clone <forked repository link>
```
if you don't have git installed on your system

```bash
  Download the zip file by,
  clicking on green code button > download zip file
  Extract your zip file in your xampp > htdocs
```
If you don't have xampp installed 
```bash
    Get Xampp from
    https://www.apachefriends.org/download.html

    After Installation click on Xampp folder -> htdocs -> save the
    project folder which was earlier extracted here (in htdocs)
```



## Configure the Email - Sender

Change the following variables / fields in php/send_code.php file

```bash
  $senderName = "enter your name here";

  $senderPhone = "enter your phone number here without +91";

  $mail->Username   = 'Your email id goes here';    //Gmail userid 

  $mail->Password   = 'Your gmail less secure app password goes  
  here';    //SMTP password

  $mail->setFrom('Your email goes here', 'IEEE UVCE'); // Your email id
```

## To find your SMTP Password 
  Open manage google account -> security ->
  Watch https://www.youtube.com/watch?v=Kjn5vBbBsi8 from timeline 
  5:20

## Here is how the customize page looks like
![image](https://user-images.githubusercontent.com/111000515/221352018-90d448d9-18a8-4827-b754-55c42498a36b.png)

## Here is how the main page looks like
![image](https://user-images.githubusercontent.com/111000515/221352275-165c29fc-e5f2-42e4-a0b7-45ef57c39d5d.png)

## After the mail is sent
![image](https://user-images.githubusercontent.com/111000515/221352534-e6379a59-3a6b-479a-9248-9601e5b46f46.png)

## Mail is received
![image](https://user-images.githubusercontent.com/111000515/221352441-704aec69-10ad-4062-9cf0-7c562fb905de.png)



