<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Web Application</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <h1>AJAX Web Application</h1>
    <div id="result"></div>
    <button onclick="loadData()">Load Data Via AJAX</button>
    <script>
        function loadData() {
            $.ajax({
                url: 'getData.php',
                type: 'GET',
                dataType: 'html',
                success: function (response) {
                    $('#result').html(response);
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        }
    </script>
</body>
</html>