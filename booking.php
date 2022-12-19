<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WELCOME TO OUR HOTEL</h1>
    <h2>OUR HOTEL PROVIDES WORLD CLASS AMENITIES AND WILL TAKE CARE ABOUT ALL YOUR NEEDS</h2>
    <h3>WE HAVE 4 TYPE OF ROOMS EACH WITH A BEAUTIFUL VIEW</h3>
    <ul>
        <li>presidential suite</li>
        <li>grand suite</li>
        <li>classic suite</li>
        <li>king size room</li>
        <li>queen size room</li>
    </ul>
    <form action="bconnect.php" method="post">
        <label for="fname">Full Name-</label>
        <input type="text" name="fname" id=""><br>
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id=""><br>
        <label for="coming">date of arrival</label>
        <input type="date" name="coming" id=""><br>
        <label for="going">date of departure</label>
        <input type="date" name="going" id=""><br>
        <label >presidential suite-</label>
        <input type="radio" name="room" id="">
        <label for="grand suite">grand suite-</label>
        <input type="radio" name="room" id="">
        <label for="classic suite">classic suite-</label>
        <input type="radio" name="room" id="">
        <label for="king size room">king size room-</label>
        <input type="radio" name="room" id="">
        <label for="queen size room">queen size room-</label>
        <input type="radio" name="room" id=""><br>
        <label for="adhaar">Adhaar Number</label>
        <input type="number" name="adhaar" id=""><br>
    <label for="number">Phone Number</label>
        <input type="number" name="no" id=""><br>
        <label for="age">age</label>
        <input type="number" name="age" id=""><br>
<button type="submit">BOOK NOW!!!</button>

    </form>
</body>
</html>