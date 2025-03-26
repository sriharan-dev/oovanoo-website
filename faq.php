<!DOCTYPE html>
<html lang="en">

<?php include('header.php') ?>

<body>
    <!-- Navbar Start -->
    <?php include('navbar.php'); ?>
    <!-- Navbar end -->

    <div class="container faq">
        <div class="row py-5">
            <h2>Frequently Asked Questions</h2>

            <!-- Accordion -->
            <div id="faq">
                <div class="card my-2 question-card">
                    <div class="card-header" id="question-one">
                        <h5 class="mb-0">
                            <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                Who is the CEO of Oovanoo?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="question-one" data-parent="#faq">
                        <div class="card-body">
                            <p class="mb-0">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Sit maiores ut dicta velit illum quam.</p>
                        </div>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-header" id="question-two">
                        <h5 class="mb-0">
                            <button class="btn" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                What is Oovanoo App used for?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="question-two" data-parent="#faq">
                        <div class="card-body">
                            <p class="mb-0">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-header" id="question-three">
                        <h5 class="mb-0">
                            <button class="btn" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="question-three">
                                How to join Oovanoo?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faq">
                        <div class="card-body">
                            <p class="mb-0">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-header" id="question-four">
                        <h5 class="mb-0">
                            <button class="btn" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                How to Download Oovanoo App?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="question-four" data-parent="#faq">
                        <div class="card-body">
                            <p class="mb-0">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-header" id="question-five">
                        <h5 class="mb-0">
                            <button class="btn" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                aria-controls="collapseFive">
                                What does Oovanoo stands for?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="question-five" data-parent="#faq">
                        <div class="card-body">
                            <p class="mb-0">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-header" id="question-six">
                        <h5 class="mb-0">
                            <button class="btn" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                aria-controls="collapseSix">
                                How to order in Oovanoo?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="question-six" data-parent="#faq">
                        <div class="card-body">
                            <p class="mb-0">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-header" id="question-seven">
                        <h5 class="mb-0">
                            <button class="btn" data-toggle="collapse" data-target="#collapseSeven"
                                aria-expanded="false" aria-controls="collapseSeven">
                                How to join as a Home Kitchen Partner?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="question-seven" data-parent="#faq">
                        <div class="card-body">
                            <p class="mb-0">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="question-eight">
                        <h5 class="mb-0">
                            <button class="btn" data-toggle="collapse" data-target="#collapseEight"
                                aria-expanded="false" aria-controls="collapseEight">
                                How to cancel orders in Oovanoo?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="question-eight" data-parent="#faq">
                        <div class="card-body">
                            <p class="mb-0">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Footer Start -->
    <?php include('footer.php'); ?>
    <!-- Footer end -->


</body>

</html>