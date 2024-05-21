<?php
session_start();

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $whatsapp = trim($_POST['wat_mobile']);
    $location = trim($_POST['location']);
    $pincode = trim($_POST['pincode']);
    $message = trim($_POST['message']);


        $to = "info@camwel.org";
        $subject = "Demo Enquiry From Camwel.org ";
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: Camwel.org' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $full_message = "<html>
                            <head><title>Demo Enquiry Data</title></head>
                            <body>
                            <table>
                                <tr>
                                <td>Name</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $name </td>
                                </tr>
                                <tr>
                                <td>Email Id</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $email </td>
                                </tr>
                                <tr>
                                <td>Mobile Number</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $mobile </td>
                                </tr>
                                <tr>
                                <td>Location</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $location</td>
                                </tr>
                                <tr>
                                <td>Message</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td>$whatsapp </td>
                                </tr>
                                <tr>
                                <td>Message</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $pincode</td>
                                </tr>
                                <tr>
                                <td>Message</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td>$message</td>
                                </tr>
                            </table>
                            </body>
                            </html>";

        $user = $email;
        $user_subject = "Thank You $name";
        $user_headers = 'From: Camwel.Org' . "\r\n";
        $user_message = "Dear $name.\nWelcome to Micro Finance Software\n We have got your query.We will reach you soon.\nThank You!";

        if (mail($to, $subject, $full_message, $headers)) {
            mail($user, $user_subject, $user_message, $user_headers);
            $_SESSION["response"] = "<h3 style='color:#80ba26'>Dear <span class='text-info'>$name</span>,</h3><blockquote><p style='color:white;'>We have got your query. We will contact you soon.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone fa-rotate-90'></i><span> <a style='color:red' href='tel:9572852742'>9572852742,</a><a style='color:red' href='tel:9028388889'> 9028388889</a></span></span></p>
                                <p>Thank You!</p></blockquote>";
        } else {
            $_SESSION["response"] = "<h3 style='color:#80ba26'>Dear <span class='text-info'>$name</span>,</h3><blockquote><p style='color:white;'>Something is wrong. It seems like internet is not working well.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone fa-rotate-90'></i><span> <a href='tel:9572852742' style='color:red'>9572852742,</a><a href='tel:9028388889' style='color:red'> 9028388889</a></span></span></p>
                                <p style='color:white;'>Please, try again!</p><p style='color:white;'>Thank You!</p></blockquote>";
        }

    


   
}
header("Location:thanku.php");
exit();
// contact form data experiment end


?>