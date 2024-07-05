<!doctype html>
<html lang=en>
<head>
    <meta charset=UTF-8 />
    <meta name=viewport content="width=device-width,initial-scale=1" />
    <meta http-equiv=X-UA-Compatible content="ie=edge" />
    <link rel=stylesheet href=https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css
        integrity=sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO crossorigin=anonymous>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel=stylesheet>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@300;700&display=swap" rel=stylesheet>
    <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
    <script src=https://kit.fontawesome.com/3c09bcb51a.js></script>
    <title>BitNix Remote Support</title>
    <link href="styles/main.css" rel="stylesheet">
</head>
<body>
    <div class=container>
        <div class=row>
            <div class="left-wrap col-12 col-md-5">
                <div class=left>
					<p style="letter-spacing: 4px;font-weight: bold;">
						<a href="https://bitnix.co/"><span style="color: #7310CF;">B</span><span style="color: #7310CF;">I</span><span style="color: #7310CF;">T</span><font style="color:white">NIX</font></a>
					</p>
                </div>
            </div>
            <div class="col-12 col-md-7 right">
                <div class=mainInfo>

                    <h1 <?php if ($showIframe) echo 'style="display:none;"'; ?>>Remote Support</h1>
                        <p <?php if ($showIframe) echo 'style="display:none;"'; ?> class=slogan><b>Please enter your support code here, if you don't have one please reach out to a technician.</b></p>

                    <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            if ($_POST['code'] == ''){
                                echo "<p class=slogan style='color:red';><b>Invalid Code</b></p>";
                                exit();
                            }
                            $code = $_POST['code'];
                            $codes = file('codes.txt', FILE_IGNORE_NEW_LINES);
                            if (in_array($code, $codes)) {
                                echo "<p class=slogan style='color:lime';><b>Please wait...</b></p>";
                                $updatedCodes = array_diff($codes, [$code]);
                                file_put_contents('codes.txt', implode(PHP_EOL, $updatedCodes) . PHP_EOL);
                                $output = shell_exec('/var/www/html/gen_link.sh');
                                $inviteLink = trim($output);
                                header("Location: ".htmlspecialchars($inviteLink)."");
                                #echo "<iframe src='".htmlspecialchars($inviteLink)."' style='width: 100%; height: 600px; border: none;frameBorder='0';'></iframe>";
                                #$showIframe = true;
                                
                            } else {
                                echo "<p class=slogan style='color:red';><b>Invalid Code</b></p>";
                            }
                        }
                    ?>


    <form <?php if ($showIframe) echo 'style="display:none;"'; ?> class="form-subscribe" method="POST"> 
        <input <?php if ($showIframe) echo 'style="display:none;"'; ?> type="number" class="form" name="code" placeholder="123456" required> 
        <button <?php if ($showIframe) echo 'style="display:none;"'; ?> type="submit">Submit</button>
    </form>
    <p class=slogan style="color:lightgray"><b>Having issues? Give us a call at (502)206-1005.</b></p>
                </div>
                <ul class=icon-list>
                    <li><a href="https://bitnix.co/privacy">Privacy Policy</a></li><p>&nbsp|&nbsp</p>
                    <li><a href="https://bitnix.co/company_reports/logging_pub.html">Logging Policy</a></li><p>&nbsp|&nbsp</p>
                    <li><a href="https://bitnix.co/company_reports/data_usage.html">Data Control</a></li><p>&nbsp|&nbsp</p>
                    <li><a href="https://bitnix.co/company_reports/data_reports.html">Data Responsibly</a></li><p>&nbsp|&nbsp</p>
                    <li><a href="https://assist.bitnix.co">Agent Login</a></li>
                </ul>
            </div>
        </div>
    </div> 
</body>
</html>
