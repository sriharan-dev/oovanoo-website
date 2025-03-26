<!DOCTYPE html>
<html lang="en">

<?php
include("init.php"); ?>

<head>
    <?php
    include('header.php');
    ?>

</head>

<body>
    <!-- Navbar Start -->
    <?php include('navbar.php'); ?>
    <!-- Navbar end -->
    <div class="container" id="contact">
        <div class="row py-5">
            <div class="col-md-6 ">
                <div class="contact-add ps-md-5 ps-3">
                    <h1>CONTACT US</h1><br>
                    <h5>Address</h5>
                    <p>139, 5th Street, CTO Colony,<br>
                        Tambaram West, Tambaram, Kanchipuram,<br>
                        Chennai - 600045</p><br>
                    <h5>Email us </h5>
                    <p><a href="mailto: ceo@oonavoo.com" target="_blank">ceo@oovanoo.com</a></p>
                    <p> <a href="mailto: cmo@oonavoo.com" target="_blank">cmo@oovanoo.com</a></p><br>
                    <h5>Call & Whatsapp us</h5>
                    <p><a href="tel:+91-9500545437" target="_blank">+91-95005 45437</a></p>
                    <p> <a href="tel:+91-8799688968" target="_blank">+91-87996 88968</a> </p>
                </div>
            </div>
            <div class="col-md-6 py-5 px-4 contact-form">
                <div class=" ">
                    <h1>GET IN TOUCH</h1><br>
                    <form id="form-1">
                        <div class="form-group">

                            <input type="text" name="name" id="name" placeholder="Enter Name"
                                class="form-control p-3"><br>
                            <input type="text" name="email" id="email" placeholder="Enter Email Address"
                                class="form-control p-3"><br>
                            <input type="text" name="mobile" id="mobile" placeholder="Enter Mobile number"
                                class="form-control p-3"><br>
                            <textarea type="text" name="message" id="message" placeholder="Enter Message"
                                class="form-control pb-5 pt-3"></textarea><br>
                            <button type="submit" class="get-btn p-3" id="">Send Message</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>

</html>

<script>

    $(document).ready(function (e) {
        //form-content
        $("#form-1").on('submit', (function (e) {
            e.preventDefault();

            value = document.getElementById("name").value.trim();
            if (value == null || value === "") {

                showAlert(3, "Please enter name.");
                document.getElementById("name").focus();
                return false;
            } else {
                let name = document.getElementById("name").value.trim();
                if (name.length < 3 || !/^[A-Za-z\s]+$/.test(name)) {
                    showAlert(3, "Please enter a valid name with a minimum of 3 characters, only alphabets allowed.");
                    document.getElementById("name").focus();
                    return false;
                }
            }

            //email
            value = document.getElementById("email").value.trim();
            if (value == null || value === "") {

                showAlert(3, "Please enter email.");
                document.getElementById("email").focus();
                return false;
            } else {
                var emailPattern = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
                if (!emailPattern.test(value)) {
                    showAlert(3, "Please enter valid email id.");
                    document.getElementById("email").focus();
                    return false;
                }

            }
            //mobile
            value = document.getElementById("mobile").value.trim();
            if (value == null || value == "") {
                showAlert(3, "Please enter mobile");
                document.getElementById("mobile").focus();
                return false;
            } else {
                valid = validateMobileNumber(value);
                if (!valid) {
                    showAlert(3, "Please enter valid 10 digit mobile number");
                    value = document.getElementById("mobile").focus();
                    return false;
                }
            }

            value = document.getElementById("message").value.trim();
            if (value == null || value == "") {
                showAlert(3, "Please enter message");
                document.getElementById("message").focus();
                return false;
            } else {
                let message = document.getElementById("message").value.trim();
                if (message === "" || message.length < 10) {
                    showAlert(3, "Please enter a message with a minimum of 10 characters.");
                    document.getElementById("message").focus();
                    return false;
                }
            }

            loadingOpen();

            $.ajax({
                url: "contact-send-mail.php",
                type: "POST",
                contentType: false,
                cache: false,
                processData: false,
                data: new FormData(this),
                success: function (data) {
                    data = data.trim();
                    if (isNaN(data)) {
                        showAlert(2, "Error : " + data);
                        loadingClose();
                    } else {
                        if (data > 0) {
                            showAlert(1, "Your message was sent successfully.");
                            loadingClose();
                            window.location = "contact.php";
                        } else {
                            showAlert(2, "Error : " + data);
                            loadingClose();
                        }
                    }
                },
                error: function () {
                    showAlert(2, "Oops something went wrong. Please try later.");
                    loadingClose();
                }
            });


        }));

    });

</script>