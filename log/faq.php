<?php
require_once __DIR__ . "/../header.php";
?>
<section>
    <div class="container">
        <div class="row">
            <div class="faqs col-lg-3">
                <div class="card faqs mt-2">

                    <div class="card-body">
                        <h3>FAQS</h3>
                        <p>PRODUCTS</p>
                        <p>SHIPPING</p>
                        <p>ORDERS AND PAYMENTS</p>
                        <p>RETURNS AND REFUNDS</p>
                    </div>
                </div>
            </div>

            <style>
                .title {
                    background-color: #879095;
                }

                .accordion-button {
                    background-color: #879095;
                }
                .faqs{
                    background-color: #879095;
                    color: #000;
                    font-weight: 600;
                    display: flex;
                }

                .accordion-button:focus {
                    outline: 0;
                    box-shadow: none;
                    border: none;
                    background-color: #FF87CE;
                    color: #fff;
                }

                .accordion-item {
                    background-color: #879095;
                }
            </style>
            <div class="col-lg-9">
                <div class="main mt-2">
                    <div class="title">
                        <h3>PRICING</h3>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                                    Are VEECLA’s lipcare product vegan or cruelty free?

                                </button>
                            </h2>
                            <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Yes, all VEECLA lipcare products are vegan and Crueity free</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                                    Are all VEECLA lip care products fragrance free?

                                </button>
                            </h2>
                            <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"> No, all VEECLA lipcare product are not fragrance free, but Some are available without fragrance

                                    .</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                                    Are VEECLA Lipcare product clean?

                                </button>
                            </h2>
                            <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Yes, we are very clean, your heath is our priority</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main mt-2">
                    <div class="title">
                        <h3>SHIPPING</h3>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                    Where do you ship ?

                                </button>
                            </h2>
                            <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>we currently ship nationwide</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                    How much is shipping?

                                </button>
                            </h2>
                            <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"> Shipping costs depends on your location and will be calculated for you after placing your order

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                                    Do you ship internationally?

                                </button>
                            </h2>
                            <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Shipping internationally is still processing, we will get back to you shortly</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                                    Where can i buy VEECLA products in person


                                </button>
                            </h2>
                            <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">At the moment there is no known place/shop to get it. But we produce in Delta State NIGERIA

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                                    How long will my orders take to arrive

                                </button>
                            </h2>
                            <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">On average, Delta states orders are delivered within 2-3 working days
                                    On average, Orders outside Delta states are delivered within 4-7 working days
                                    Note: Orders may arrive earlier or delayed due to series of occurrences from the shipping company
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main mt-2">
                    <div class="title">
                        <h3>ORDERS AND PAYMENTS

                        </h3>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                                    HOW CAN I CHECK MY ORDER?


                                </button>
                            </h2>
                            <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">You can view your order status on your Account page which is updated as soon as your payment is processed and when your order ships

                                    .</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
                                    Which payment method do you approve


                                </button>
                            </h2>
                            <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">All payment methods (cash, bank transfers, cards) for now are subject to approval

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
                                    WHEN WILL MY CREDIT CARD BE CHARGED?



                                </button>
                            </h2>
                            <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Your credit card will be charged as soon as your order is processed.


                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading12">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
                                    I CAN'T LOGIN/FORGOT MY PASSWORD



                                </button>
                            </h2>
                            <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">No sweat, just select the prompt to reset it and save it for next time



                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading13">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapse13">
                                    WHY WAS MY ORDER CANCELLED?


                                </button>
                            </h2>
                            <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">As a new brand, we have Limited amounts of availiablity of Our products for customers to Purchase.
                                </div>
                            </div>
                        </div>

                        <!-- <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="main mt-2">
                    <div class="title">
                        <h3>RETURNS AND REFUNDS
                        </h3>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading14">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse14" aria-expanded="false" aria-controls="flush-collapse14">
                                    WHAT IS YOUR RETURN POLICY?


                                </button>
                            </h2>
                            <div id="flush-collapse14" class="accordion-collapse collapse" aria-labelledby="flush-heading14" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Email our team at veeclaconcept@gmail.com (please Include your order number) within 30 days of receiving your order, and we'll help you out ASAP with any returns and additional questions.
                                        Note: original shipping charges are non-refundable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading15">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse15" aria-expanded="false" aria-controls="flush-collapse15">
                                    CAN I CANCEL OR CHANGE AN ORDER?


                                </button>
                            </h2>
                            <div id="flush-collapse15" class="accordion-collapse collapse" aria-labelledby="flush-heading15" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"> During times of high order volume we are unable to cancel or edit orders.
                                    NOTE: We are not responsible for any address errors or order delays after your package leaves our facility.

                                    .</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once __DIR__ . "/../footer.php";
        ?>
</section>
</body>

</html>