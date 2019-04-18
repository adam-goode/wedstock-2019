<html>
<head>
    <link rel="stylesheet" href="https://use.typekit.net/avc5yqy.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i|Poppins:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ymr8req.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <style>
        @import url("https://use.typekit.net/iqz8fbd.css");
        body {
            background: #e3e3e3;
            font-family: "museo-sans", sans-serif;
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
            font-family: eurostile-extended, sans-serif;
            font-weight: 500;

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
            font-family: eurostile-extended, sans-serif;
            font-weight: 500;
        }
    </style>
</head>
    <body>
        <div style="background: #e3e3e3; height:100%; width:100%; margin:auto;">
            <table bgcolor="#e3e3e3" width="100%" border="0" cellspacing="0" cellpadding="0" style="background: #e3e3e3;">
                <tr>
                    <td bgcolor="#e3e3e3" align="center" style="background: #e3e3e3;">

                        <table width="600" style="background: #fff; background-size: cover; width: 600px; height: 201px; padding: 20px 0px; border-bottom: 3px solid #e3e3e3" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <table align="left" width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td style="text-align: center; width: 120px;">
                                                <a href=""><img class="logo" style="padding-top: 0px;" src="https://wildman.cherrytest.com/images/logo.svg" alt="Wildman Logo"></a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>

                        <table bgcolor="#fff" width="600" style="background: #fff; width: 600px; padding: 60px 50px;" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td style="padding-bottom: 20px; text-align: left;">
                                    <span class="heading" style="font-size: 30px; color: #000;">You have an enquiry!</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>You have had an enquiry through the website. Here are the details:</p>
                                    <p><b>Name: </b>{{$enquiry->names}}</p>
                                    <p><b>yes: </b>{{$enquiry->radio_one}}</p>
                                    <p><b>no: </b>{{$enquiry->radio_two}}</p>
                                    <p><b>Enquiry:</b>{!! $enquiry->message !!}</p>
                                 </td>
                            </tr>
                        </table>
                        <table   width="600" style="background: #3f3f3f; border-top: 10px solid #3f3f3f; width: 600px; padding: 30px 50px; color: #ffffff;" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td style="padding: 20px 0 10px;">
                                    <div style="border-bottom: 1px solid #dadada; color: #ffffff; font-size: 18px; padding-bottom: 16px; font-family: eurostile-extended, sans-serif; margin-bottom: 16px;"><a style="text-decoration: none; color: white;" href="https://wildman.cherrytest.com/terms">Terms &amp; Conditions</a></div>
                                    <div style="font-size: 10px;">
                                        <p>The information in this email is confidential, and may be legally privileged. It is intended solely for the addressee. Access to this e-mail by anyone else is unauthorised. If you are not the intended recipient, any disclosure, copying, distribution or any action taken or omitted to be taken in reliance on is prohibited and may be unlawful.</p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>

