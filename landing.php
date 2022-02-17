<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="landing.css">
    <script src="https://kit.fontawesome.com/c8a135f850.js" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <title>home</title>
    <header>
        <nav>
            <div class="logo">
                <h2>KUPA</h2>
            </div>
            <div class="bars" id="bars"><i class="fa fa-bars"></i></div>
            <div class="menu" id="menu" value="0">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="#">SERVICE</a></li>
                </ul>
            </div>
            <input type="text" value="1" id="inp" style="display:none">
        </nav>
    </header>
    <container>
        <div class="container1">
            <div class="box">
                <h1>Let's work out<br> together</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque culpa consectetur expedita.</p>
            </div>
            <div class="img">
                <img src="fitness.png" alt="" width="auto" height="auto">
            </div>
        </div>
    </container>
    <container>
        <div class="icons">
            <div class="img1">
                <h4>Yoga</h4>
                <img src="fitness.png" alt="" width="auto" height="auto">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima laborum nisi doloribus minus,
                    rerum harum voluptas. Fugit eaque maxime quibusdam.</p>
            </div>
            <div class="img1">
                <h4>Yoga</h4>
                <img src="fitness.png" alt="" width="auto" height="auto">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima laborum nisi doloribus minus,
                    rerum harum voluptas. Fugit eaque maxime quibusdam.</p>
            </div>
            <div class="img1">
                <h4>Yoga</h4>
                <img src="fitness.png" alt="" width="auto" height="auto">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima laborum nisi doloribus minus,
                    rerum harum voluptas. Fugit eaque maxime quibusdam.</p>
            </div>
            <div class="img1">
                <h4>Yoga</h4>
                <img src="fitness.png" alt="" width="auto" height="auto">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima laborum nisi doloribus minus,
                    rerum harum voluptas. Fugit eaque maxime quibusdam.</p>
            </div>
        </div>
    </container>
    <container>
        <div class="container">
            <h2>Calculate your BMI</h2>
            <div class="form">
                <label for="">Height</label>
                <input type="text" name="" required id="height" placeholder="in cm">
                <label for="">Weight</label>
                <input type="text" name="" required id="weight" placeholder="in kg">
                <button id="click" onclick="bmi()">Calculate</button>
                <p id="result" style="display:none;padding:5px;"></p>
            </div>
        </div>
    </container>

    <container>
        <div class="grider">
            <div class="grid1">
                <div class="item">
                    <h3>Muscle Strengthening</h3>
                    <img src="strongman.png" alt="" width="200px" height="200px">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, dolorum optio! Repellendus.</p>
                </div>
                <div class="item">
                    <h3>Yoga</h3>
                    <img src="mattress.png" alt="" width="200px" height="200px">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, dolorum optio! Repellendus.</p>
                </div>
                <div class="item">
                    <h3>Weight Lifting</h3>
                    <img src="weightlifter.png" alt="" width="200px" height="200px">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, dolorum optio! Repellendus.</p>
                </div>
            </div>
            <div class="grid2">
                <div class="item">
                <h3>Beginner's Course</h3>
                <img src="treadmill.png" alt="" width="200px" height="200px">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, dolorum optio! Repellendus.</p>
                </div>
                <div class="item">
                    <h3>Cardio</h3>
                    <img src="exercises.png" alt="" width="200px" height="200px">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, dolorum optio! Repellendus.</p>
                </div>
                <div class="item">
                    <h3>Body Building</h3>
                    <img src="dumbbell.png" alt="" width="200px" height="200px">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, dolorum optio! Repellendus.</p>
                </div>
            </div>
            <div class="grid3">
                <div class="item">
                    <h3>Jumba</h3>
                    <img src="sport-girl.png" alt="" width="200px" height="200px">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, dolorum optio! Repellendus.</p>
                </div>
                <div class="item">
                    <h3>Aerobics</h3>
                    <img src="extended.png" alt="" width="200px" height="200px">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, dolorum optio! Repellendus.</p>
                </div>
                <div class="item">
                    <h3>Weight losing</h3>
                    <img src="weight-loss.png" alt="" width="200px" height="200px">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, dolorum optio! Repellendus.</p>
                </div>
            </div>
        </div>
    </container>
    <container>
        <div class="former">
            <div class="form">
                <h3 style="text-align: center;">Get to know us</h3>
                <form action="" method="post" style="width:100%">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                    <label for="">Email</label>
                    <input type="mail" name="email" id="email" placeholder="Your mail address">
                    <label for="">Phone</label>
                    <input type="text" name="phone" id="phone" placeholder="Phone Number">
                    <label for="">Comment</label>
                    <textarea type="text" name="comment" id="comment" placeholder="Tell us Ur problem"></textarea>
                    <button type="submit" id="submit" name="submit" value="submit">Submit</button>
                </form>
            </div>
        </div>
    </container>
</head>

<body>
</body>
<script type="text/javascript">
    //document.getElementById("click").addEventListener("click",bmi());
    $(document).ready(function () {
        $('#submit').on('click', function(e){
            e.preventDefault();
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var comment = $('#comment').val();
            if (name != "" && email != "" && phone != "" && comment != "") {
                $.ajax({
                    method: "POST",
                    url: "index.php",
                    data: {
                        name: name,
                        email: email,
                        phone: phone,
                        comment: comment
                    },
                    success: function (data) {
                        if (data == 1) {
                            alert("Sent your request successfully");
                            location.reload();
                        } else {
                            //alert(mysqli_error());
                            alert(data);
                            alert("Something went Wrong");
                        }
                    }
                });
            }
            else {
                alert("Fill all the fields");
            }
        });
    });
    function bmi() {
        var height = Number(document.getElementById("height").value);
        var weight = Number(document.getElementById("weight").value);
        if (!height || !weight) {
            alert("Fill in he height and weight fields");
            return;
        }
        var bmi = weight / (height * height);
        var result = Math.round((bmi) * (10000));
        var res;
        if (result < 0) {
            res = "Height and Weight should be positives";
        }
        else if (result < 18.5) {
            res = "Your BMI is " + result + " You are Underweight. We have dietians with us. Fill up the contact form to meet with them";
        }
        else if (result <= 24.9) {
            res = "Your BMI is " + result + " You are Healthy. You can visit our gym to gain muscle strength";
        }
        else if (result <= 29.9) {
            res = "Your BMI is " + result + "You might be Overweight. Come visit us to become healthy";
        }
        else {
            res = "Your BMI is " + result + "You might be Obese. Visit us to become healthy";
        }
        document.getElementById("result").style.display = "block";
        document.getElementById("result").innerHTML = res;
    }

    var menu = document.getElementById('menu');
    var bars = document.getElementById('bars');
    var input = document.getElementById('inp');

    bars.addEventListener('click',function(){
        var x = Number(input.value);
        if(x%2==0){
            menu.style.left="-100%";
        }
        else{
            menu.style.left="0";
        }
        input.value = x+1;
    });

</script>

</html>
<!--file:///C:/xampp/htdocs/websites/landing.html?-->