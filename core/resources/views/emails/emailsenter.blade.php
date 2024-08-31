<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    
<style>
        body {
            background-color: #f8f8f8;
            padding-top: 50px;
        }

        .custom-card {
            background-color: #1a1a1a;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: #fff;
            padding: 30px;
            text-align: center;
            margin: 20px auto;
            max-width: 600px;
        }

        h1 {
            color: #ff0000;
            font-size: 28px;
        }

        p {
            font-size: 16px;
        }
            /* .ii a[href] {
        color: #fff;
    } */

        .btn {
            background-color:#ff0000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
    <title>Welcome to Block55 Underground</title>
</head>
<body>

@if ($data["mail_type"] == "User")
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-xs-12">
                <div class="custom-card" style="text-align: left;">
                    <h1>Welcome to Block55 Underground</h1>
                    <p>Dear {{$data['name']}},</p>
                    <p>Welcome to the electrifying community of block55 underground, we are thrilled to have you on board, get ready to explore the future of metropolis aesthetics with our conceptual clothing.</p>
                    <p>Block55 is built on the foundation of reflecting the responsibility to keep refreshing the current status of our society through knowledge sharing and creative experiments by breaking the bound of conventionality and keep pushing the fashion envelope.</p>
                    <p>Join us in shaping the underground aesthetics of tomorrow. You can also take time to dive into our virtual hangouts ( Whatsapp ), digital write ups ( blogs ), E-Pub ( discord ) and discover exclusive perks through the keys access granted to you. Together let's redefine the new age metropolis underground streetwear.</p>
                    <p>Cheers to a connected future!</p>
                    <a href="https://block55.in/" class="btn" style="font-weight: 600; color:#fff !important;">Explore Now</a>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-xs-12">
                <div class="custom-card" style="text-align: left;">
                    <h1>Registered New Customer.</h1>
                    <p>Dear {{$data['name']}},</p>
                    <p>Register Email {{$data['mail']}},</p>
                </div>
            </div>
        </div>
    </div>
@endif

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
