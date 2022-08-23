<!DOCTYPE html>
<html>

<head>
    <title>Aproval Notification</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<!-- Complete Email template -->

<body style="background-color:grey">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="550" bgcolor="white"
        style="border:2px solid black">
        <tbody>
            <tr>
                <td align="center">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="col-550" width="550">
                        <tbody>
                            <tr>
                                <td align="center" style="background-color: #4cb96b;
										height: 50px;">

                                    <a href="#" style="text-decoration: none;">
                                        <p style="color:white;
												font-weight:bold;">
                                            Luckytex Group Apps
                                        </p>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr style="height: 100px;">
                <td align="center"
                    style="border: none;
						border-bottom: 2px solid #4cb96b;
						padding-right: 20px;padding-left:20px">

                    <p style="font-weight: bolder;font-size: 30px;
							letter-spacing: 0.025em;
							color:black;">
                        Data Customer Baru Telah Dibuat!
                        <br> Mohon untuk dicek, lalu beri aprove atau reject!
                    </p>
                </td>
            </tr>

            <tr style="display: inline-block;">
                <td
                    style="height: 50px;
						padding: 20px;
						border: none;
						border-bottom: 2px solid #361B0E;
						background-color: white;">

                    <h2 style="text-align: left;
							align-items: center;">
                        Customer Baru dengan nomor {{ $details['no_cust'] }} <br>
                        Nama {{ $details['nama'] }}
                    </h2>
                    <p>
                        <a href="luckytexgroup.com"
                            style="text-decoration: none;
								color:black;
								border: 2px solid #4cb96b;
								padding: 10px 30px;
								font-weight: bold;">
                            Go To Web
                        </a>
                    </p>
                </td>
            </tr>
            <tr
                style="border: none;
			background-color: #4cb96b;
			height: 40px;
			color:white;
			padding-bottom: 20px;
			text-align: center;">

                <td height="40px" align="center">
                    <p style="color:white;
	line-height: 1.5em;">
                        Luckytex Group Apps
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    </td>
    </tr>
    <tr>
        <td class="em_hide" style="line-height:1px;
				min-width:700px;
				background-color:#ffffff;">
            <img alt="" src="images/spacer.gif"
                style="max-height:1px;
			min-height:1px;
			display:block;
			width:700px;
			min-width:700px;"
                width="700" border="0" height="1">
        </td>
    </tr>
    </tbody>
    </table>
</body>


</html>
