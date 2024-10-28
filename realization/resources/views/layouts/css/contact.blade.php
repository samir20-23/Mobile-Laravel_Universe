<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/contact.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <!-- Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');

        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            line-height: 1.5;
        }

        .contact-bg {
            height: 55vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(../images/contact-bg.jpg);
            background-position: 50% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            text-align: center;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .contact-bg h3 {
            font-size: 1.3rem;
            font-weight: 400;
        }

        .contact-bg h2 {
            font-size: 3rem;
            text-transform: uppercase;
            padding: 0.4rem 0;
            letter-spacing: 4px;
        }

        .line div {
            margin: 0 0.2rem;
        }

        .line div:nth-child(1),
        .line div:nth-child(3) {
            height: 3px;
            width: 70px;
            background: #ff5a3d;
            border-radius: 5px;
        }

        .line {
            display: flex;
            align-items: center;
        }

        .line div:nth-child(2) {
            width: 10px;
            height: 10px;
            background: #ff5a3d;
            border-radius: 50%;
        }

        .text {
            font-weight: 300;
            opacity: 0.9;
        }

        .contact-bg .text {
            margin: 1.6rem 0;
        }

        .contact-body {
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .contact-info {
            margin: 2rem 0;
            text-align: center;
            padding: 2rem 0;
        }

        .contact-info span {
            display: block;
        }

        .contact-info div {
            margin: 0.8rem 0;
            padding: 1rem;
        }

        .contact-info span .fas {
            font-size: 2rem;
            padding-bottom: 0.9rem;
            color: #ff5a3d;
        }

        .contact-info div span:nth-child(2) {
            font-weight: 500;
            font-size: 1.1rem;
        }

        .contact-info .text {
            padding-top: 0.4rem;
        }

        .contact-form {
            padding: 2rem 0;
            border-top: 1px solid #c7c7c7;
            
        }

        .contact-form form {
            padding-bottom: 1rem;
        }

        .form-control {
            width: 100%;
            border: 1.5px solid #c7c7c7;
            border-radius: 5px;
            padding: 0.7rem;
            margin: 0.6rem 0;
            font-family: 'Open Sans', sans-serif;
            font-size: 1rem;
            outline: 0;
        }

        .form-control:focus {
            box-shadow: 0 0 6px -3px rgba(48, 48, 48, 1);
        }

        .contact-form form div {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            column-gap: 0.6rem;
        }

        .send-btn {
            font-family: 'Open Sans', sans-serif;
            font-size: 1rem;
            text-transform: uppercase;
            color: #fff;
            background: #ff5a3d;
            border: none;
            border-radius: 5px;
            padding: 0.7rem 1.5rem;
            cursor: pointer;
            transition: all 0.4s ease;
        }

        .send-btn:hover {
            opacity: 0.8;
        }

        .contact-form>div img {
            width: 85%;
        }

        .contact-form>div {
            margin: 0 auto;
            text-align: center;

        }

        .contact-footer {
            padding: 2rem 0;
            background: #000;
        }

        .contact-footer h3 {
            font-size: 1.3rem;
            color: #fff;
            margin-bottom: 1rem;
            text-align: center;
        }

        .social-links {
            display: flex;
            justify-content: center;
        }

        .social-links a {
            text-decoration: none;
            width: 40px;
            height: 40px;
            color: #fff;
            border: 2px solid #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0.4rem;
            transition: all 0.4s ease;
        }

        .social-links a:hover {
            color: #ff5a3d;
            border-color: #ff5a3d;
        }


        /* Footer Part */
        footer {
            width: 100%;
            height: auto;
            background-color: hsl(229, 17%, 19%);
        }

        .copyright,
        .copyright a {
            text-align: center;
            padding: 25px 0;
            color: #fff;
        }



        @media screen and (min-width: 768px) {
            .contact-bg .text {
                width: 70%;
                margin-left: auto;
                margin-right: auto;
            }

            .contact-info {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (min-width: 992px) {
            .contact-bg .text {
                width: 50%;
            }

            .contact-form {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                align-items: center;
            }
        }

        @media screen and (min-width: 1200px) {
            .contact-info {
                grid-template-columns: repeat(4, 1fr);
            }
        }
        .sendd{

        }
    </style>

</head>

<body>
    @yield('content')
 
</body>

</html>
