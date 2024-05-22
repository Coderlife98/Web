<style>
    .side-contact {
        position: fixed;
        right: -330px;
        top: 6%;
        width: 320px;
        box-sizing: border-box;
        padding: 30px 25px;
        display: flex;
        align-items: center;
        transition: 0.5s;
        z-index: 9999999;
        background: #104cba;
        height: 550px;
    }

    .fbtn {
        position: absolute;
        left: -6.5rem;
        background: #104cba;
        align-items: center;
        transform: rotate(270deg);
        font-family: var(--Rubik);
        font-weight: bold;
        letter-spacing: 1.5px;
        padding: 8px 20px;
    }

    .btn-info:hover {
        color: #fff;
        background-color: #2a5c18;
        border-color: #117a8b;
    }

    .p-btn {
        padding: 20px 20px;
        border: 1px solid orangered;
        border-radius: 4px;
    }

    .dued-mar {
        margin-bottom: 15px;
    }

    .dued-pp {
        padding: 10px 30px;
    }

    .float-right {
        float: right;
    }
</style>
<div class="container-fluid pb-0">
    <div class="row">
        <div class="side-contact ">
            <!-- Form Opening Button -->
            <div onclick="openForm()" class=" fbtn bg-btn text-light btn-info px-4 py-2" style="cursor:pointer;">Enquiry
                Now</div>
            <form id="side_contact" name="modal_form" method="post">
                <div class="row">
                    <div class="col-md-12 text-center ">
                        <h5 style="color:#000;margin-bottom:10px;margin-top:0px;letter-spacing:2px;">Get An Imediate
                            Response</h5>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group dued-mar">
                            <input id="form_name"
                                oninput="this.value = this.value.toUpperCase().replace(/[^A-Z]/g, '').replace(/(\  *?)\  */g, '$1')"
                                maxlength="10" type="text" name="name" class="form-control dued-pp" placeholder="Name"
                                data-error="Name is required.">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group dued-mar">
                            <input id="form_email"
                                oninput="this.value = this.value.replace(/[^A-Za-z@.0-9]/g, '').replace(/(\  *?)\  */g, '$1')"
                                maxlength="30" type="email" name="email" class="form-control dued-pp"
                                placeholder="Email *" data-error="Valid email is required.">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group dued-mar">
                            <input id="form_mobile"
                                oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"
                                maxlength="10" type="text" name="mobile" class="form-control dued-pp"
                                placeholder="Mobile No *" data-error="Firstname is required.">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group dued-mar">
                            <textarea
                            oninput="this.value = this.value.replace(/[^A-Za-z0-9 ]/g, '').replace(/ +/g, ' ')"
                                maxlength="100" id="form_message" name="message" class="form-control dued-pp"
                                placeholder="Message for me..." rows="3"
                                data-error="Please, leave us a message."></textarea>

                        </div>
                    </div>
                </div>
              
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" onclick="closeForm()"
                            class="p-btn btn-danger rounded px-4 py-2">Cancel</button>
                        <button type="submit" name="submit_modal" id="submit_modal "
                            class=" p-btn btn-warning rounded  px-3 py-2 float-right text-dark"
                            onclick="return side_con_Validation()">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    /**
     *******Side-Contact Form*******
     **/
    function openForm() {
        let f = document.querySelector('.side-contact');
        if (f.style.right == "0px") {
            f.style.right = "-320px";
        } else {
            f.style.right = "0px";
        }
    }

    function closeForm() {
        document.querySelector('.side-contact').style.right = "-320px";
    }




    function side_con_Validation() {
        // alert("form check");
        // die;

        var form_name = $('#form_name').val();
        var lan = form_name.length;
        // alert(lan);
        // die;


        var form_email = $('#form_email').val();

        var form_mobile = $('#form_mobile').val();
        var form_message = $('#form_message').val();






        if (lan <= 3) {
            alert(" Name must be max 3 letters *");
            $('#form_name').focus();
            return false;
        }
        else if (form_email.length == "") {
            alert("Enter Valid email *");
            $('#form_email').focus();
            return false;
        }

        else if (form_mobile.length <= 9) {
            alert("Enter Valid mobile no *");
            $('#form_mobile').focus();
            return false;
        }

        else if (form_message.length <= 20) {
            alert("Message must be max 20 letters *");
            $('#form_message').focus();
            return false;
        }


        else {
            return true;
        }
    }





</script>