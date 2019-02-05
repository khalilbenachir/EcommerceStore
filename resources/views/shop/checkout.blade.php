@extends('layouts.master')



@section('Content')
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <form action="/charge" method="post" id="payment-form">
                <div class="form-row">
                    <label for="card-element">
                        Credit or debit card
                    </label>
                    <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display Element errors. -->
                    <div id="card-errors" role="alert"></div>
                </div>

                <button>Submit Payment</button>
            </form>
        </div>
    </div>
    @endsection

    @section('scripts')
        <script src="https://js.stripe.com/v3/"></script>
        <script>
            // Create a Stripe client.
            const stripe = Stripe('pk_test_XD6li2U0V2eQaFZo9ukoCJdS');

            // Create an instance of Elements.
            const elements = stripe.elements();

            const style = {
                base: {
                    // Add your base input styles here. For example:
                    fontSize: '16px',
                    color: "#32325d",

                },
            };

            // Create an instance of the card Element.
            const card = elements.create('card', {style});

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            const form = document.getElementById('payment-form');
            form.addEventListener('submit', async (event) => {
                event.preventDefault();

                const {token, error} = await stripe.createToken(card);

                if (error) {
                    // Inform the customer that there was an error.
                    const errorElement = document.getElementById('card-errors');
                    errorElement.textContent = error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(token);
                }
            });

        </script>
    @endsection