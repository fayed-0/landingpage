<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles_register.css" />
    <title>Web Design Mastery | Welcome Back</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>Welcome Back</h1>
            <p>Please enter your details.</p>
            <form action="/" class="form">
                <div class="form-row">
                    <div class="input__group">
                        <label for="full_name">Full Name</label>
                        <input type="text" id="full_name" placeholder="Enter your Full Name" />
                    </div>
                    <div class="input__group">
                        <label for="NIK">NIK</label>
                        <input type="text" id="NIK" placeholder="Enter your NIK" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="input__group">
                        <label for="birth_date">Date of Birth</label>
                        <input type="date" id="birth_date" placeholder="Enter your Date of Birth" />
                    </div>
                    <div class="input__group">
                        <label for="address">Address</label>
                        <input type="text" id="address" placeholder="Enter your Address" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="input__group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" placeholder="Enter your e-mail" />
                    </div>
                    <div class="input__group">
                        <label for="phone_number">Phone Number</label>
                        <input type="tel" id="phone_number" placeholder="Enter your Phone Number" />
                    </div>
                </div>

                <div class="form-row">
                    <div class="input__group">
                        <label for="Password">Password</label>
                        <input type="Password" id="Password" placeholder="Password" />
                    </div>
                    <div class="input__group">
                        <label for="Confirm Password">Confirm Password</label>
                        <input type="Confirm Password" id="Confirm Password" placeholder="Enter your Password" />
                    </div>
                </div>
                <button type="button" onclick="window.location.href='http://localhost/landingpage/login.php'">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
