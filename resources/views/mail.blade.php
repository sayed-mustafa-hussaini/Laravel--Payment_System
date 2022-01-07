<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Payments System</title> 

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|'Open Sans'|sans-serif">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/brand/favi.png')}}" />
  
  <style type="text/css">


#outlook a {
	padding:0;
}
.ExternalClass {
	width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
	line-height:100%;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
.es-button-border:hover a.es-button, .es-button-border:hover button.es-button {
	background:#ffffff!important;
	border-color:#ffffff!important;
	color:#E30613!important;
}
.es-button-border:hover {
	background:#ffffff!important;
	border-style:solid solid solid solid!important;
	border-color:#E30613 #E30613 #E30613 #E30613!important;
}
[data-ogsb] .es-button {
	border-width:0!important;
	padding:15px 20px 15px 20px!important;
}
.ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
  padding:0 20px;
  margin-bottom: 0px;

  font-family:Roboto, sans-serif !important;
  margin-top: 10px;
}

.ul .li {
  /* border: 1px solid #ddd; */
  margin-top: -1px; 
  background-color: white !important;
  padding:10px;

  font-family:Roboto, sans-serif !important;
  font-weight: normal !important;
  font-size: 12px !important;
  border-bottom:1px solid #ccc;
  float: left;
}



@media only screen and (max-width:992px) {
  .ul {
    padding:20px 10px;
  }
 
}
 
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important }  
.es-wrapper-color{
    background-color:white !important;
  }
  .mobile{
    border:2px solid #FAFAFA !important;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px !important;
  }
  .es-footer{
    display: none !important;
  }
   h1 { font-size:20px!important; text-align:center; line-height:120%!important } h2 { font-size:16px!important; text-align:left; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:20px!important } h2 a { text-align:left } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:16px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:14px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:10px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:12px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } a.es-button, button.es-button { font-size:14px!important; display:block!important; border-left-width:0px!important; border-right-width:0px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
  <div class="es-wrapper-color " style="background-color:#FAFAFA;padding:30px 0 !important;"> 



   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top"> 
     <tr style="border-collapse:collapse"> 
      <td valign="top" style="padding:0;Margin:0"> 
      
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td style="padding:0;Margin:0;background-color:#FAFAFA" bgcolor="#fafafa" align="center"> 
            
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center"> 
             <tr style="border-collapse:collapse"> 
              
              <td style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;background-color:transparent" bgcolor="transparent" align="left" class="mobile"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  
                  <td valign="top" align="center" style="padding:0;Margin:0;width:560px"> 
                   <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-position:left top" width="100%" cellspacing="0" cellpadding="0" role="presentation"> 
                  
                    
                      <tr > 
                          <ul class="ul" style="margin-top: 20px;">
                            <li style="text-align: left;line-height: 1.6;letter-spacing: 0.3px;border:none !important;float: left">
                              <a href="https://Payments System" target="_blank" ><img src="http://Payments System/wp-content/uploads/2020/09/Master-Logo-Artwork@20x.png" alt="" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;margin-top:6px !important;" width="140"></a> 

                            </li>
                            <li  style="text-align:right !important;line-height: 1.6;letter-spacing: 0.3px;float: right;border:none !important">
                                 <h4  lass="header-item" style="float: right !important;text-align:right;Roboto, sans-serif !important;letter-spacing: 3px; margin-top:14px; ">Invoice Payment</h4>

                            </li>
                          </ul>
                    </tr> 
                     <tr><div style="clear:both"></div></tr>
                    
                     <tr > 
                          <ul class="ul">
                            <li class="li" style="text-align: left;line-height: 1.6;letter-spacing: 0.3px;"><span>Invoice Number </span><span style="display:block;margin-top:6px;"> INV-00{{$invoice_number}} </span></li>
                            <li class="li" style="text-align:right !important;line-height: 1.6;letter-spacing: 0.3px;float: right;"><span>Payment Deadline </span><span style="display:block;margin-top:6px;margin-right:3px;">{{$deadline}} </span></li>
                          </ul>
                     </tr> 
                     <tr><div style="clear:both"></div></tr>


                     <tr style="border-collapse:collapse"> 
                        <td align="center" style="padding:0;Margin:0;padding-top:5px;padding-bottom:5px;font-size:0px">
                                <img src="https://image.freepik.com/free-vector/employee-working-office-interior-workplace-flat-vector-illustration_1150-37459.jpg" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"  height="400px">
                        </td> 
                     </tr>

                     <tr style="border-collapse:collapse"> 
                        <td>
                            <div class="jumb" style="padding:30px;background:rgb(252, 252, 252); font-family:Roboto, sans-serif !important; font-size:13px;">
                                <div class="amount" style="border-bottom:1px solid #ccc;">
                                    <p style="line-height: 1.6;letter-spacing: 0.3px;float:left">Amount Paid</p>
                                    <p style="line-height: 1.6;letter-spacing: 0.3px;float:right">{{$currency}} {{$amount}}</p>
                                    <div style="clear:both"></div>
                                </div>
                                <div class="description">
                                    <p style="line-height: 1.6;letter-spacing: 0.3px;">Description</p>
                                    <p style="line-height: 1.6;letter-spacing: 0.3px;">
                                      {{$description}}  
                                    </p>
                                </div>
                            </div>
                        </td>
                     </tr> 
                    
                     
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:40px;padding-bottom:40px">
                        <a 
                        href="{{url('checkout')}}/{{Crypt::encrypt($id)}} "
                          class="es-button" target="_blank" style="padding:0 !important;mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:14px;border-style:solid;border-color:#E30613;border-width:10px 30px 10px 30px;display:inline-block;background:#E30613;border-radius:3px;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-weight:bold;font-style:normal;line-height:16px;width:auto;text-align:center;font-family:Roboto, sans-serif !important;line-height: 1;letter-spacing: 0.8px;">Payment</a></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td style="padding:0;Margin:0;background-color:#FAFAFA" bgcolor="#fafafa" align="center"> 
           <table class="es-footer-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td style="Margin:0;padding-top:10px;padding-bottom:20px;" bgcolor="white" align="left"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td > 
                    <div style="background:#E30613;padding:30px 0; width:100%;">
                       <p></p>
                    </div>
                </td> 
                 </tr> 
               </table>
                </td> 
             </tr> 
           </table></td> 
         </tr> 
       </table></td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>