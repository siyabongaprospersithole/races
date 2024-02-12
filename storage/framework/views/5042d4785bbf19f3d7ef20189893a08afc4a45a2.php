<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome to Republic</title>
  
  
  
  
  
</head>

<body>
  <!DOCTYPE html>
<html>

<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Welcome to Republic</title>
  <!--[if gte mso 10]>
      <style>
        body, table, td { font-family: Arial, Helvetica, sans-serif !important;}
      </style>
    <![endif]-->
  <style>
    /* Client reset */
      #outlook a{padding:0;}
      .ReadMsgBody{width:100%;} .ExternalClass{width:100%;}
      .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%!important;}
      body, table, td, p, a, li, blockquote{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;}
      table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;}
      img{-ms-interpolation-mode:bicubic;}
      /* bring inline */
      img {display: block; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
      a img {border: none;}
      a {text-decoration: none; color: #0DDDC2;} /* text link */
      
      /* Responsive */
      @media  only screen and (max-device-width: 450px) {
        #content-wrapper, #body-wrapper {
          width: 100%!important;
        }
        .c-responsive-container {
          display: inline-block;
          width: 100%
          padding: 0 16px;
        }
        .c-table-responsive {
          width: 100%;
        }
        .button {
          width: 100%!important;
          max-width: 300px;
        }
      }
  </style>
</head>

<body class=" layouts-application_mailer" data-rc="layouts/application_mailer" style="font-family:'Helvetica Neue', 'Arial', sans-serif;width:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;margin:0;padding:0;font-size:16px;line-height:24px">
  <table cellspacing="0" cellpadding="0" border="0" width="100%" class="table" id="body-wrapper" style="border-collapse:collapse;table-layout:fixed;margin:0 auto;min-width:100% !important;width:100% !important">
    <tr>
      <td style="border-collapse:collapse">
        <div class=" mailers-global-header" data-rc="mailers/global/header">
          <table cellspacing="0" cellpadding="0" border="0" width="100%" class="mailers-global-header__header-container " style="border-bottom:1px solid #eeeeee;margin-bottom:48px;border-collapse:collapse;min-width:100% !important;width:100% !important">
            <tr>
              <td align="center" style="border-collapse:collapse;text-align:center">

                <h1 class="s-margin1" style="margin:0;margin-top:16px;margin-bottom:16px;margin-left:16px;margin-right:16px">
<a href="<?php echo e(asset('')); ?>" style="text-decoration:none;color:#03A9F4">
<img width="120" height="30" alt="Logo" title="Logo" src="" style="height:auto;line-height:100%;outline:none;text-decoration:none;display:inline-block;border:0 none">
</a>
</h1>

              </td>
            </tr>
          </table>
        </div>
        <table cellspacing="0" cellpadding="16px" border="0" width="100%" class="c-responsive-container" style="border-collapse:collapse;min-width:100% !important;width:100% !important">
          <tr>
            <td style="border-collapse:collapse">
              <table cellspacing="0" cellpadding="0" border="0" width="450" class="table" id="content-wrapper" align="center" style="border-collapse:collapse;table-layout:fixed;margin:0 auto">
                <tr>
                  <td style="border-collapse:collapse">
                    <div class=" mailers-user_mailer-signup_welcome" data-rc="mailers/user_mailer/signup_welcome">
                      <p class="c-emailText" style="margin:0;font-size:16px;line-height:24px;color:#777777;text-align:center;font-weight:300;margin-bottom:16px">
                        <img width="75" height="68" src="https://republic.co/assets/mailers/signup_welcome/welcome-b2e17100521c87167e0d46ef9cc99a4949153529d71e60e8af7e8e7a98e9598b.png" alt="Welcome" style="border:0 none;height:auto;line-height:100%;outline:none;text-decoration:none;display:inline-block">
                      </p>

                      <h1 class="c-emailTitle" style="margin:0;font-size:30px;line-height:48px;color:#333333;font-weight:200;text-align:center;margin-bottom:16px">
Hi There!!!
</h1>

                      <p class="c-emailText" style="margin:0;font-size:16px;line-height:24px;color:#777777;text-align:center;font-weight:300;margin-bottom:16px">
                        <?php echo e(ucfirst($fullname)); ?> has requested you to review a remittance request worth R<?php echo e($data['invoice_total']); ?> (Please see attached and login to cribnote to verify)
                    </p>
                      <p class="c-emailText s-paddingTop1" style="margin:0;padding-top:16px;font-size:16px;line-height:24px;color:#777777;text-align:center;font-weight:300;margin-bottom:16px">
                        <!--[if mso]>
                            <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word"
                            href="<?php echo e(asset('')); ?>approvals/requests/<?php echo e($link); ?>"
                            style="height:48px;v-text-anchor:middle;width:240px;" arcsize="5%" strokecolor="#03A9F4"
                            fillcolor="#03A9F4">
                              <w:anchorlock/>
                              <center style="color:#ffffff;font-family:sans-serif;font-size:16px;">View</center>
                            </v:roundrect>
                          <![endif]-->
                        <a target="_blank" class="button" style="color:#03A9F4;border-radius:3px;display:inline-block;font-size:16px;line-height:50px;height:50px;text-align:center;text-decoration:none;-webkit-text-size-adjust:none;mso-hide:all;color:#fefefe;background-color:#222222;border:1px solid #222222;width:250px;background-color: #03A9F4; border: 1px solid #03A9F4; color: #ffffff; width: 240px; height: 48px; line-height: 48px"
                          href="<?php echo e(asset('')); ?>approvals/requests/<?php echo e($link); ?>">View</a>
                      </p>
                      <p class="s-paddingTop1 s-fontSize14 u-colorGray7 u-text-center u-fontWeight300" style="margin:0;font-size:14px;line-height:24px;padding-top:16px;text-align:center;font-weight:300;color:#777777">Can't click the button above? Copy and paste this link into your browser:</p>
                      <p class="s-fontSize14 u-colorGray5 u-text-center u-fontWeight300 s-paddingTop0_5" style="margin:0;font-size:14px;line-height:24px;padding-top:8px;text-align:center;font-weight:300;color:#555555"><?php echo e(asset('')); ?>approvals/requests/<?php echo e($link); ?></p>
                      <hr class="s-marginTop3 s-marginBottom2" style="margin-top:15px;margin-bottom:16px;border:0;border-top:1px solid #eeeeee;margin-bottom:32px;margin-top:48px">
                    
                     
                    </div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
     
      </td>
    </tr>
  </table>
  
</body>

</html>
  
  
</body>
</html>
<?php /**PATH C:\xampp\Workspace\cribnote_accounting\resources\views/emails/remittancelink.blade.php ENDPATH**/ ?>