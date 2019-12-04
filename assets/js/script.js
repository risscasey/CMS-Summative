$ = jQuery;

jQuery(document).ready(function(){
    console.log('Ready');
});

console.log($('#inputDonation').val());
let donationAdjustedTotal;

if (donationAdjustedTotal === undefined) {
    $('#itemSelect').addClass('d-none');
}

$('#donationRange').click(function(){
    let donationInitialTotal = $('#donationRange').val();


    if (donationInitialTotal == 1) {
        donationAdjustedTotal = 25;

    } else if (donationInitialTotal == 2) {
        donationAdjustedTotal = 50;

    } else if (donationInitialTotal == 3) {
        donationAdjustedTotal = 75;

    } else if (donationInitialTotal == 4) {
        donationAdjustedTotal = 100;

    } else if (donationInitialTotal == 5) {
        donationAdjustedTotal = 150;

    } else if (donationInitialTotal == 6) {
        donationAdjustedTotal = 200;

    } else {
        donationAdjustedTotal = 0;
    }

    $('#inputDonation').empty();
    $('#inputDonation').val(donationAdjustedTotal);
});












//
