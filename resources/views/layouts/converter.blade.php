<div class="container">
<form method="POST" action="/convert" class="mb-5">
<h1 class="text-3xl font-bold ">Unit Converter</h1>
    @csrf
    <div class="mb-4">
        <label class="block text-gray-700">Value:</label>
        <input type="number" name="value" class="command-item text-white" inputmode="numeric" required>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">From Unit:</label>
        <select name="from_unit" class="command-item text-white" required>
            <option value="meters">Meters</option>
            <option value="kilometers">Kilometers</option>
            <option value="centimeters">Centimeters</option>
            <option value="millimeters">Millimeters</option>
            <option value="miles">Miles</option>
            <option value="feet">Feet</option>
            <option value="inches">Inches</option>
            <option value="liters">Liters</option>
            <option value="centiliters">Centiliters</option>
            <option value="milliliters">Milliliters</option>
        </select>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">To Unit:</label>
        <select name="to_unit" class="command-item text-white" required>
            <option value="meters">Meters</option>
            <option value="kilometers">Kilometers</option>
            <option value="centimeters">Centimeters</option>
            <option value="millimeters">Millimeters</option>
            <option value="miles">Miles</option>
            <option value="feet">Feet</option>
            <option value="inches">Inches</option>
            <option value="liters">Liters</option>
            <option value="centiliters">Centiliters</option>
            <option value="milliliters">Milliliters</option>
        </select>
    </div>
    <div class="mt-0">
        <button type="submit" class="command-item text-white">Convert</button>
    </div>
</form>
<div class="w-50">
    <div id="conversion-result"></div>
</div>

<script>
    $(document).ready(function() {
        $('form').on('submit', function(e) {
            e.preventDefault(); // Prevent form from submitting the traditional way

            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(response) {
                    $('#conversion-result').html(`<div class="conversion-result mw-50">
                        <p>${response.value} ${response.fromUnit} is equal to ${response.result} ${response.toUnit}</p>
                    </div>`);
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
</div>