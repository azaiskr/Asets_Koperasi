<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div class="wrapper">
            @yield('session')
        </div>
    </body>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        /* Reseting */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .center{
                text-align: center;
        }
        .right{
            text-align: right;
            font-size:12px;
            margin-top: 10px;
        }

        body {
            background: #ecf0f3;
        }

        .wrapper {
            max-width: 350px;
            min-height: 500px;
            margin: 100px auto;
            padding: 50px 40px 30px 40px;
            background-color: #ecf0f3;
            border-radius: 15px;
            box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
        }

        .logo {
            width: 80px;
            margin: auto;
        }

        .logo img {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0px 0px 3px #5f5f5f,
                0px 0px 0px 5px #ecf0f3,
                8px 8px 15px #a7aaa7,
                -8px -8px 15px #fff;
        }

        .wrapper .name {
            font-weight: 600;
            font-size: 2rem;
            letter-spacing: 1.5px;
            padding-left: 10px;
            color: #555;
        }
        .wrapper .form-container {
            padding: 5px 5px 5px 5px;
            margin-top: 60px;
        }

        .form-container .title{
            margin-right: 10px;
        }

        .wrapper .form-field input {
            width: 100%;
            display: block;
            border: none;
            outline: none;
            background: none;
            font-size: 12px;
            color: #666;
            padding: 5px 15px 5px 10px;
            /* border: 1px solid red; */
        }

        .wrapper .input-field{
            
            margin-top: 20px;
            margin-bottom: 40px;
        }

        .wrapper .form-field {
            padding-left: 10px;
            margin-top: 5px;
            margin-bottom: 3px;
            border-radius: 100px;
            box-shadow: inset 5px 5px 5px #cbced1, inset -5px -5px 5px #fff;
        }

        .wrapper .form-field .fas {
            color: #555;
        }

        .wrapper .btn {
            margin-top: 20px;
            box-shadow: none;
            width: 60%;
            height: 35px;
            background-color: #03A9F4;
            align: center;
            color: #fff;
            border: none;
            border-radius: 25px;
            box-shadow: 3px 3px 3px #b1b1b1,
                -3px -3px 3px #fff;
            letter-spacing: 1.3px;
        }

        .wrapper .btn:hover {
            background-color: #039BE5;
        }

        .wrapper a {
            text-decoration: none;
            font-size: 0.8rem;
            color: #03A9F4;
        }

        .wrapper a:hover {
            color: #039BE5;
        }

        @media(max-width: 380px) {
            .wrapper {
                margin: 30px 20px;
                padding: 40px 15px 15px 15px;
            }
        }
    </style>
</html>
