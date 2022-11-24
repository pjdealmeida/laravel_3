<!-- Step 4, Payment -->
<h5 class="my-4 b-b pb-2"><i class="icon fas fa-credit-card"></i> <span class="bold">Payment</span> Options</h5>

<x-forms.post action="wizard/post-form/" class="form form-account cozy" name="form-account" id="form-step-4">
    <div class="accordion accordion-collapsed payment-accordion" id="payment-source">
        <div class="card">
            <div class="card-header">
                <div class="radio" data-bs-toggle="collapse" data-bs-target="#po-cc">
                    <input type="radio" value="cc" name="Payment[type]" id="type_cc" autocomplete="off" checked>
                    <label for="type_cc">
                        <div class="ms-3">
                            <p class="my-0 bold color-4">Credit Card</p>
                            <p class="color-2 my-0 text-capitalize">Pay with Visa, Amex, MasterCard, Maestro, Discover and many other credit and debit cards</p>
                        </div>
                    </label>
                </div>
            </div>

            <div id="po-cc" class="collapse show" data-bs-parent="#payment-source">
                <div class="card-body">
                    <div class="form-group">
                        <label for="payment_card_number" class="form-label">Card number</label>
                        <input type="text" name="Payment[cardnumber]" class="form-control" id="payment_card_number" placeholder="Card Number">
                    </div>

                    <div class="form-group">
                        <label for="payment_holder" class="form-label">Card holder name</label>
                        <input type="text" name="Payment[holder]" class="form-control" id="payment_holder" placeholder="Card Holder Name">
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="payment_title" class="form-label">Expiration</label>
                            <div class="input-group">
                                <input type="text" name="Payment[expiration_month]" class="form-control" placeholder="MM">
                                <input type="text" name="Payment[expiration_year]" class="form-control" placeholder="YYYY">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="payment_cvv" class="form-label">CVV</label>
                            <input type="text" name="Payment[cvv]" class="form-control" id="payment_cvv" placeholder="CVV">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="radio collapsed" data-bs-toggle="collapse" data-bs-target="#po-pp">
                    <input type="radio" value="cc" name="Payment[type]" id="type_pp" autocomplete="off">
                    <label for="type_pp">
                        <div class="ms-3">
                            <p class="my-0 bold color-4">PayPal</p>
                            <p class="color-2 my-0 text-capitalize">Pay easily, fast and secure with PayPal</p>
                        </div>
                    </label>
                </div>
            </div>

            <div id="po-pp" class="collapse" data-bs-parent="#payment-source">
                <div class="card-body">
                    <p>Please click the button bellow to start PayPal express checkout process and pay securely</p>

                    <button class="btn btn-primary" type="button"><i class="fab fa-paypal"></i> PayPal</button>
                </div>
            </div>
        </div>
    </div>
</x-forms.post>
