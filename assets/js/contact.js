// $(document).ready(function () {

   
//     $("#contact_form").on("submit", function (e) {

//         var name = $("#name").val();
//         var mail = $("#mail").val();
//         var mobile = $("#mobile").val();
//         var location = $("#location").val();
//         var message = $("#message").val();
//         var uanswer = $("#uanswer").val();


//         e.preventDefault();
//         $.ajax({
//             url: "contact_formhandler.php",
//             Type: "post",

//             data: {
//                 "name": name,
//                 "mail": mail,
//                 "mobile": mobile,
//                 "location": location,
//                 "message": message,
//                 "uanswer": uanswer
//             },

//             success: function (data) {
//                 $("#view_response").html(data);

//                 $(".model").show(500).fade();
//             }

//         })
//     });

//     $(".cancle-btn,button").on("click", function () {
//         $(".model").hide(1000).fade();

//     })
  

//     $("#demo-form").on("submit", function (e) {
       
//         var name     = $("#name").val();       
//         var email    = $("#email").val();
//         var number   = $("#number").val();
//         var service  = $("#service").val();
//         var comments = $("#comments").val();
//         var uanswer  = $("#uanswer").val();


//         e.preventDefault();
//         $.ajax({
//             url: "demo_formhandler.php",
//             Type: "post",

//             data: {
//                 "name"    : name,
//                 "email"   : email,
//                 "number"  : number,
//                 "service" : service,
//                 "comments": comments,
//                 "uanswer" : uanswer
//             },

//             success: function (data) {
//                 $("#view_response").html(data);

//                 $(".model").show(500).fade();
//             }

//         })
//     });

//     $(".cancle-btn,button").on("click", function () {
//         $(".model").hide(1000).fade();

//     })





//     $("#side_contact").on("submit", function (e) {
       
//         var name     = $("#form_name").val();       
//         var email    = $("#form_email").val();
//         var number   = $("#form_mobile").val();
//         var message  = $("#form_message").val(); 
//         e.preventDefault();
       
       

//             $.ajax({
//                 url: "formhandler.php",
//                 Type: "post",
//                 data: {
//                     "name"    : name,
//                     "email"   : email,
//                     "mobile"  : number,
//                     "message" : message,               
//                 },
    
//                 success: function (data) {
//                     $("#view_response").html(data);
    
//                     $(".model").show(500).fade();
//                 }
    
//             });
            
        

       
//     });

//     $(".cancle-btn,button").on("click", function () {
//         $(".model").hide(1000).fade();

//     })




// });
