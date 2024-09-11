<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter OTP</title>
    <style>
        .otp-container {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }
        .otp-input {
            width: 40px;
            height: 40px;
            text-align: center;
            font-size: 20px;
            margin: 0 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .otp-input:focus {
            border-color: #007bff;
            outline: none;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Enter OTP Code</h2>

<form id="otpForm" method="post" action="<?php echo site_url('otp'); ?>">
   
    <div class="otp-container">
        <input type="text" id="otp1" name="otp[]" class="otp-input" maxlength="1" oninput="moveToNext(this, 'otp2')">
        <input type="text" id="otp2" name="otp[]" class="otp-input" maxlength="1" oninput="moveToNext(this, 'otp3')">
        <input type="text" id="otp3" name="otp[]" class="otp-input" maxlength="1" oninput="moveToNext(this, 'otp4')">
        <input type="text" id="otp4" name="otp[]" class="otp-input" maxlength="1" oninput="moveToNext(this, 'otp5')">
        <input type="text" id="otp5" name="otp[]" class="otp-input" maxlength="1" oninput="moveToNext(this, 'otp6')">
        <input type="text" id="otp6" name="otp[]" class="otp-input" maxlength="1">
    </div>
    <button type="submit">Submit OTP</button>
</form>
<script>
    function moveToNext(currentInput, nextInputId) {
        if (currentInput.value.length === 1) {
            const nextInput = document.getElementById(nextInputId);
            if (nextInput) {
                nextInput.focus();
            }
        }
    }
</script>

</body>
</html>
