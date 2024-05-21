 <!-- Scroll Top Button -->
 <button class="scroll-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></button>
 <!--====== Jquery ======-->
 <script src="assets/js/jquery-3.6.0.min.js"></script>
 <!--====== Bootstrap ======-->
 <script src="assets/js/bootstrap.min.js"></script>
 <!--====== Appear Js ======-->
 <script src="assets/js/appear.min.js"></script>
 <!--====== Slick ======-->
 <script src="assets/js/slick.min.js"></script>
 <!--====== Magnific Popup ======-->
 <script src="assets/js/jquery.magnific-popup.min.js"></script>
 <!--====== Isotope ======-->
 <script src="assets/js/isotope.pkgd.min.js"></script>
 <!--  WOW Animation -->
 <script src="assets/js/wow.js"></script>
 <!-- Custom script -->
 <script src="assets/js/script.js"></script>
 <!--Add the following script at the bottom of the web page (before </body></html>-->
<script type="text/javascript">
    function add_chatinline() {
        var hccid = 56664573;
        var nt = document.createElement("script");
        nt.async = true;
        nt.src = "https://mylivechat.com/chatinline.aspx?hccid=" + hccid;
        var ct = document.getElementsByTagName("script")[0];
        ct.parentNode.insertBefore(nt, ct);
    }
    add_chatinline();
</script>


<!-- custome js file -->
<script>
    $(document).ready(function(){
        $(".radheActn").click(function(){
            
            let imgurl = 'assets/images/mf_loan_man/';
            const image = ["","1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg","10.jpg","11.jpg","12.jpg","13.jpg","14.jpg","15.jpg","16.jpg","mf2.jpg"] ;
             // const name = ["","#name_1"];
         
         
            
            let actNId=$(this).attr('id');
            
            $('#setImg').attr("src",imgurl+image[actNId]);
              // $('#setname').html($(name[actNId]).text());
        
    
        });
        });
</script>
<script src="assets/js/contact.js"></script>
