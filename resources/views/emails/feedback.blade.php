<!DOCTYPE html>
<html>
<head>
    <title>New Customer Feedback</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #059669; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background-color: #f9f9f9; }
        .footer { padding: 10px; text-align: center; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Customer Feedback</h1>
            <p>Seinn Yaung So Manufacturing Co.,Ltd.</p>
        </div>

        <div class="content">
            <h2>Customer Information:</h2>
            <p><strong>Name:</strong> {{ $customerName }}</p>
            <p><strong>Email:</strong> {{ $customerEmail }}</p>

            <h2>Feedback Message:</h2>
            <div style="background-color: white; padding: 15px; border-left: 4px solid #059669;">
                {{ $feedbackMessage }}
            </div>
        </div>

        <div class="footer">
            <p>This email was sent from the feedback form on your website.</p>
            <p>© {{ date('Y') }} Seinn Yaung So Manufacturing Co.,Ltd.</p>
        </div>
    </div>
</body>
</html>
