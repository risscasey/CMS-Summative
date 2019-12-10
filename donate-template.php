<?php /* Template Name: Donate Page Template */ ?>

<?php get_header(); ?>

<div class="container-fluid p-2">
    <?php get_template_part('templates/content', 'navDefault'); ?>
</div>




<div class="container mt-4">
    <div class="row p-3">
        <div class="col-12">
            <div class="card shadow p-4" style="border:none;">
                <div class="row">
                    <h2 class="w-100 text-center">Your Donation</h2>
                    <p class="w-100 text-center" style="color:#747d8c!important;">How much would you like to dontae to World Wildlife Fund?</p>
                </div>
                <div class="row d-flex justify-content-around">
                    <div class="col-10 d-flex justify-content-center">
                        <input type="range" class="custom-range" min="0" max="5" id="donationRange">
                    </div>
                    <div class="col-2 d-flex justify-content-center">
                        <input type="number" class="form-control" id="inputDonation">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-4">


<div class="row p-3">
    <div class="col-12">
        <div class="card shadow p-4" style="border:none;">
        <div class="col-12 order-md-1">
            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit"> Complete</button>
          </form>
        </div>
      </div>
  </div>

</div>
</div>



<?php get_footer(); ?>
