<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            background-color: #ffffff;
            max-width: 600px;
            margin: 30px auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h2 {
            color: #333333;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        p {
            font-size: 16px;
            color: #555555;
            line-height: 1.6;
        }

        .label {
            font-weight: bold;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>New Contact Message</h2>
        <p><span class="label">Name:</span> {{  $details['name'] ?? '-' }}</p>
        <p><span class="label">Email:</span> {{ $details['email'] ?? '-' }}</p>
        <p><span class="label">Message:</span><br> {{ $details['message'] ?? '-' }}</p>
    </div>
</body>
</html>
