<!-- resources/views/messages.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Messages</title>
    <meta charset="utf-8">
     <!-- Include the CSRF token meta tag -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Messages</h1>

        <!-- Display the messages -->
        <div id="messages-container">
            @foreach ($messages as $message)
                <div class="message">{{ $message->message_body }}</div>
            @endforeach
        </div>


        <!-- Form to submit a new message -->
        <form id="message-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="content">Message:</label>
                <textarea class="form-control" id="content" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Include jQuery and the JavaScript code to handle the form submission -->
    <script src="{{ asset('codedlivechat/plugins/jquery/jquery.min.js') }}"></script>
    <script>
        // public/js/app.js

$(document).ready(function() {
    // Get the CSRF token value from the page's meta tags
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    // Listen for submit event on the form
    $('#message-form').submit(function(e) {
        // Prevent the default form submission
        e.preventDefault();

        // Get the form data
        var formData = $(this).serialize();

        // Send an AJAX request to the server
        $.ajax({
            url: '/livechat/messages', // the Laravel route to handle the submission
            type: 'POST',
            data: formData + '&_token=' + csrfToken, // include the CSRF token in the request data
            success: function(response) {
                // Update the page with the new message
                $('#messages-container').append('<div class="message">' + response.message + '</div>');

                // Reset the form
                $('#message-form')[0].reset();
            },

            error: function(response) {
                // Handle the error
                console.log(response);
            }
        });
    });
});

    </script>
</body>
</html>
