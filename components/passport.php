<style>
    .error { color: #FF0000;}
</style>

<?php
// Define variables and set to empty
// $nameErr = $emailErr = $phoneErr = $messageErr = "";
// $name = $email = $phone = $message = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (empty($_POST["name_booking"])) {
//         $nameErr = "Name is required";
//     } else {
//         $name = test_input($_POST["name_booking"]);
//         // Check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
//             $nameErr = "Only letters and white space allowed";
//         }
//     }

//     if (empty($_POST["email_booking"])) {
//         $emailErr = "Email is required";
//     } else {
//         $email = test_input($_POST["email_booking"]);
//         // Check if email address is well-formed
//         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             $emailErr = "Invalid email format";
//         }
//     }

//     if (empty($_POST["phone_booking"])) {
//         $phoneErr = "Phone number is required";
//     } else {
//         $phone = test_input($_POST["phone_booking"]);
//     }

//     if (empty($_POST["message"])) {
//         $messageErr = "Message is required";
//     } else {
//         $message = test_input($_POST["message"]);
//     }
// }  

// // Function to sanitize input data
// function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
?>

<div class="widget-bg booking-form-wrap">
    <h4 class="bg-title">Passport Booking Form</h4>
    <form class="passport" id="passportform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input name="name_booking" type="text" placeholder="Full Name" name="name" class="validation vusername" required>
                    <!-- <span class="error"> <?php echo $nameErr;?></span> -->
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <input name="email_booking" type="email" placeholder="Email" class="validation vemail" required>
                    <!-- <span class="error"><?php echo $emailErr;?></span> -->
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <input name="phone_booking" type="text" placeholder="Mobile Number" name="phone" class="validation vphone" required>
                    <!-- <span class="error"><?php echo $phoneErr;?></span> -->
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <input name="message" type="text" placeholder="Message" class="validation vmessage" required>
                    <!-- <span class="error"><?php echo $messageErr;?></span> -->
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group submit-btn jikol">
                    <input type="submit" name="submit" value="Book Now" id='submit-btn'>
                </div>
            </div>  
        </div>
    </form>
</div>

<script>
    let form =  document.getElementById( "passportForm");
    $(document).ready(function(){
        $('#passportform').submit(function(e){
            e.preventDefault();
            const formData = new FormData(this);
            const formObject = Object.fromEntries(formData.entries());
            console.log(formObject);
            
            let validate = true; // Initialize the validation flag
            
            // Regular expression to match numeric values
            let numreg = /^(0|[1-9]\d*)$/;
            
            // Validate phone number
            if(formObject.name_booking.length<=4){
                validate = false;
                console.log('2');
                alert("Enter a valid Name that must be 5 charcters"); 
            }
            else if(!numreg.test(formObject.phone_booking)){
                validate = false;
                console.log('2');
                alert("Enter Phone No in number");
            }
            
            // Validate other fields if needed
            
            // If all validations pass, proceed with form submission
            if(validate) {
                let subBtn = document.getElementById('submit-btn');
                            subBtn.value = 'sending....'
                axios.post('https://mtn-wldj.onrender.com/mtnsendEmail', formObject)
                .then(function (response) {
                    if(response.data.data == 'success'){
                        subBtn.value = 'sended'
                        alert('Message sent successfully');
                        let a = document.getElementById("passportform");
                        a.reset();
                        setTimeout(() => {
                                            subBtn.value = 'Book Now'
                                          }, 3000);
                    } else {
                        alert('Error: Unable to send message');
                    }
                })
                .catch(function (error) {
                    alert('Error: ' + error);
                });
            }
        });
    });
</script>
