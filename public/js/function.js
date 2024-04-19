document.addEventListener('DOMContentLoaded', function() {
    var numberInputs = document.querySelectorAll('input[type="number"]');

    numberInputs.forEach(function(input) {
        input.addEventListener('input', function(event) {
            var value = event.target.value.replace(/\D/g, '');

            event.target.value = formatNumber(value);
        });
    });
    function formatNumber(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    }
});
