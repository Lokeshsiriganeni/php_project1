<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Number Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .verification-container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
		#checkmark {
            display: none;
            color: green;
            font-size: 24px;
            margin-left: 10px;
        }
        .error {
            border-color: red;
        }
    </style>
<script>
 document.addEventListener('DOMContentLoaded', function() {
            const phoneInput = document.getElementById("phone");
            const checkmark = document.getElementById("checkmark");

            phoneInput.addEventListener('input', function() {
                const phoneValue = this.value;
                const isValid = /^[0-9]{10}$/.test(phoneValue);

                if (isValid) {
                    checkmark.style.display = 'inline';  
                  
                } else {
                    checkmark.style.display = 'none';    
                  
                }
            });
        });
</script>

</head>
<body>
    <div class="verification-container">
        <h2 class="text-center">Phone Number Verification</h2>
        <form action="<?php echo site_url('Welcome/verification'); ?>" method="post">
    <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" name = "user_number" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
        <span id="checkmark">&#10003;</span>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Send Verification Code</button>
</form>

    </div>
</body>
</html>
