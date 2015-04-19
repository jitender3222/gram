<html>
    <head>

    <script type="text/javascript" src="http://livevalidation.com/javascripts/src/1.3/livevalidation_standalone.compressed.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script type="text/javascript">
        function ValidCaptcha() {
            var password1 = new LiveValidation('conformPassword');
            password1.add( Validate.Confirmation, { match: 'password' } );
        }
        $(document).ready(function() {
          ValidCaptcha();

        });
    </script>
    </head>
    <body >
        <p>
            <label for="password">Password</label>
            <input type="password" id="password"  tabindex="4" />
        </p>
        <p>
            <label for="password">Confirm Password</label>
            <input type="password" id="conformPassword" tabindex="5" />

        </p>
    -----


    </body>

    </html>