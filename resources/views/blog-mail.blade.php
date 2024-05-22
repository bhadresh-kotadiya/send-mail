<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>{{ $subject }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .header {
            background-color: #2b4560;
            color: #ffffff;
            text-align: center;
            padding: 20px 0;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
        }

        .image-container {
            text-align: center;
            margin: 20px 0;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .content {
            padding: 20px;
        }

        .content h2 {
            margin: 0 0 10px;
            font-size: 22px;
            color: #333333;
        }

        .content p {
            margin: 0 0 10px;
            font-size: 16px;
            color: #666666;
            line-height: 1.5;
        }

        .author {
            display: flex;
            /* align-items: center; */
            align-items: self-end;
            margin: 10px 0;
        }

        .author img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .content a {
            color: #007bff;
            text-decoration: none;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f9f9f9;
            color: #666666;
            border-top: 1px solid #dddddd;
        }

        .footer p {
            margin: 5px 0;
            font-size: 14px;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .social-icons a {
            margin: 0 10px;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #0056b3;
        }

        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }

            .header,
            .content,
            .footer {
                padding: 10px;
            }

            .header h1 {
                font-size: 24px;
            }

            .content h2 {
                font-size: 20px;
            }

            .content p {
                font-size: 14px;
            }

            .author img {
                width: 30px;
                height: 30px;
            }

            .button {
                padding: 8px 16px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>{{ $subject }}</h1>
        </div>
        <div class="image-container">
            <img src="https://dolphinwebsolution.com/wp-content/uploads/2024/05/Thumbnail.jpeg" alt="Thumbnail Image">
        </div>
        <div class="content">
            <h2>{{ $data['title'] }}</h2>
            <div class="author">
                <img src="https://dolphinwebsolution.com/wp-content/uploads/2024/05/bhadresh-user.png"
                    alt="Author Image">
                <p>Author: {{ $data['author'] }}</p>
            </div>
            <p>Published at: {{ $data['published_at'] }}</p>
            <p>Check out the full blog post <a href="{{ $data['blog-link'] }}" target="_blank">here</a>.</p>
        </div>
        <div class="footer">
            <p>Thank you for reading our blog!</p>
            <p>Follow us on:</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/dolphinwebsol/"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="https://twitter.com/dolphinwebsol"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="https://www.instagram.com/dolphinweb/"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="https://in.linkedin.com/company/dolphin-web-solution"><i class="fab fa-linkedin fa-2x"></i></a>
                <a href="https://www.behance.net/dolphinwebsol"><i class="fab fa-behance fa-2x"></i></a>
            </div>
        </div>
    </div>
</body>

</html>
