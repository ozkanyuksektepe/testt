
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>NGSI - Registration Form Test</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
    <div class="title">
        NGSI Registration Form Skill Test
    </div>
    <div class="form">
        <form action="{{route('save')}}" method="post">
            @csrf
        <div class="inputfield">
            <label>First Name</label>
            <input type="text" name="ad" class="input">
        </div>
        <div class="inputfield">
            <label>Last Name</label>
            <input type="text" name="soyad" class="input">
        </div>
        <div class="inputfield">
            <label>Password</label>
            <input type="password" name="sifre" class="input">
        </div>
        <div class="inputfield">
            <label>Confirm Password</label>
            <input type="password" name="sifreonay" class="input">
        </div>
        <div class="inputfield">
            <label>Gender</label>
            <div class="custom_select">
                <select name="gender">
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>
        <div class="inputfield">
            <label>Email Address</label>
            <input type="text" name="email" class="input">
        </div>
        <div class="inputfield">
            <label>Phone Number</label>
            <input type="text" name="telefon" class="input">
        </div>
        <div class="inputfield">
            <label>Address</label>
            <textarea name="adres" class="textarea"></textarea>
        </div>
        <div class="inputfield">
            <label>Postal Code</label>
            <input type="text" name="posta" class="input">
        </div>
        <div class="inputfield terms">
            <label class="check">
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <p>Agreed to terms and conditions</p>
        </div>
        <div class="inputfield">
            <input type="submit" name="kayit" value="Register" class="btn">
            <div/>
        </div>
        </form>

    </div>
</div>
<!-- partial -->

</body>
</html>
