<html>
<head>
    <link rel="stylesheet" href="https://use.typekit.net/avc5yqy.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i|Poppins:400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.typekit.net/sce2eaq.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <style>
        @import url("https://use.typekit.net/iqz8fbd.css");
        body {
            background: #e3e3e3;
            font-family: futura-pt, sans-serif;
            margin: 0;
            padding: 0;
            color: #333333;
        }
        .logo {
            width: 220px;
        }
        .fab,
        .far,
        .fas {
            color: #ffffff;
        }
        .btn {
            background-color: #fff;
            padding: 20px 40px;
            color: #000 !important;
            text-decoration: none;
            border: 2px solid #000;
            -webkit-box-shadow: 0px 0px 33px 0px rgba(0,0,0,0.21);
            -moz-box-shadow: 0px 0px 33px 0px rgba(0,0,0,0.21);
            box-shadow: 0px 0px 33px 0px rgba(0,0,0,0.21);
            transition: color ease 0.5s, background-color 0.5s ease, border 0.5s ease;
            font-family: futura-pt, sans-serif;
            font-weight: 700;

        }
        .btn:hover {
            color: #fff !important;
            background-color: #000;
            border: 2px solid #000;
        }
        .btn a {
            color: #f00 !important;
        }
        .heading {
            font-family: futura-pt, sans-serif;
            font-weight: 700;
        }
    </style>
</head>
    <body>
        <div style="background: #e3e3e3; height:100%; width:100%; margin:auto;">
            <table bgcolor="#e3e3e3" width="100%" border="0" cellspacing="0" cellpadding="0" style="background: #e3e3e3;">
                <tr>
                    <td bgcolor="#e3e3e3" align="center" style="background: #e3e3e3;">
                        <table bgcolor="#fff" width="600" style="background: #fff; width: 600px; padding: 60px 50px;" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td style="padding-bottom: 20px; text-align: left;">
                                    <span class="heading" style="font-size: 30px; color: #000;">You have a response to Wedstock!</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Name: </b>{{$enquiry->names}}</p>
                                    <p><b>Is {{$enquiry->names}} attending? </b>{{$enquiry->attendance}}</p>
                                    <p><b>Message:</b> {!! $enquiry->message !!}</p>
                                 </td>
                            </tr>
                        </table>
                         
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>

