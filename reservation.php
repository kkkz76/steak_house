<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("cdn.php") ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_folder/reservation.css">
    <title>Reservation</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="reserve_container">
        <div data-aos="fade-right" data-aos-duration="2000" data-aos-once="true" class="reserve_left">
            <div class="reserve_img">
                <img src="img/reserve.png" alt="">
            </div>
            <div class="row1">
                <h2>Welcome to Our</h2>
                <h1>RESERVSTION</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mi felis, auctor vitae vestibulum vel, consequat eu dolor. Nam pellentesque euismod laoreet Lorem ipsum dolor sit amet</p>
            </div>
            <div class="row2">
                <div class="card">
                    <img src="img/clock.png" alt="">
                    <div class="card_content">
                        <h2>Lorem Inpusm</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/clock.png" alt="">
                    <div class="card_content">
                        <h2>Lorem Inpusm</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/clock.png" alt="">
                    <div class="card_content">
                        <h2>Lorem Inpusm</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
            </div>
        </div>
        <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="reserve_right">
            <h1>Your Information</h1>
            <form>
                <div>
                    <label for="fname">First name:</label><br>
                    <input type="text" id="fname" name="fname"><br>
                </div>
                <div>
                    <label for="lname">Last name:</label><br>
                    <input type="text" id="lname" name="lname">
                </div>
                <div>
                    <label for="fname">Select a Branch:</label><br>
                    <select name="branch" id="branch" form="branch_form">
                        <option value="Tokyo">Tokyo</option>
                        <option value="New_York">New York</option>
                        <option value="London">London</option>
                        <option value="Paris">Paris</option>
                    </select>
                </div>
                <div>
                    <label for="lname">Date:</label><br>
                    <input type="date" id="date" name="date">
                </div>
                <div>
                    <label for="fname">Time:</label><br>
                    <input type="time" id="time" name="time"><br>
                    </div>
                <div>
                    <label for="lname">Person Count:</label><br>
                    <input type="text" id="lname" name="lname">
                </div>
                <div>
                    <label for="lname">Email Address:</label><br>
                    <input type="text" id="lname" name="lname">
                </div>
                    <input id="summit" type="submit" value="Submit">
            </form>
        </div>        
    </div>
    


    <?php include("footer.php") ?>
</body>
</html>