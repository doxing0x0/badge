<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>College STD</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap');

body {
    background-image: linear-gradient(40deg,
            hsl(240deg 56% 48%) 0%,
            hsl(250deg 48% 49%) 10%,
            hsl(260deg 40% 49%) 24%,
            hsl(271deg 34% 50%) 42%,
            hsl(285deg 28% 50%) 57%,
            hsl(305deg 24% 50%) 68%,
            hsl(325deg 29% 54%) 75%,
            hsl(340deg 34% 58%) 81%,
            hsl(354deg 40% 62%) 85%,
            hsl(358deg 39% 63%) 89%,
            hsl(353deg 31% 62%) 92%,
            hsl(345deg 22% 61%) 94%,
            hsl(330deg 14% 60%) 96%,
            hsl(284deg 9% 60%) 97%,
            hsl(232deg 12% 62%) 98%,
            hsl(212deg 22% 61%) 99%,
            hsl(204deg 32% 60%) 100%,
            hsl(200deg 41% 58%) 100%);
    background-repeat: no-repeat;
    height: 99vh;
    overflow-y: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Quicksand', sans-serif;
}

.formBox {
    padding: 15px;
    text-align: center;
    min-height: 50vh;
    min-width: 50vw;
    display: flex;
    flex-direction: column;
    background: #f8f8f885;
    border-radius: 30px;
    backdrop-filter: blur(10px);

}



p {
    font-weight: 500;
    font-size: 1.1em;
}
form {
                padding: 10px;
            }

            form>div {
                padding: 10px;
                position: relative;
                font-size: 1.3em;
            }

            form>div i {
                position: absolute;
                top: 22px;
                margin-left: 10px;
                opacity: 0.6;
            }

            form>div input {
                height: 2em;
                width: 70vw;
                padding-left: 40px;
                font-size: 1em;
                border-radius: 20px;
                outline: none;
                border: 1px solid #b5adad;
                background-color: #f1f1f1;
            }

            div>input:focus {
                border: 1px solid #6f6a6a;

            }

          

            button {
                width: 50%;
                height: 5vh;
                color: #ffffff;
                background: #00d689;
                outline: none;
                border: none;
                border-radius: 10px;
                cursor: pointer;
                font-size: 0.8em;
            }

            @media screen and (min-width:900px) {
                form>div input {
                    width: 50vw;
                }

                textarea {
                    width: 50vw;
                }
}
</style>
<body>
    
    <h3></h3>
        <div class="formBox">
        <h3>Government Degree College Baramulla <br>
(Autonomous) </h3>
(Re-Accredited by NAAC Grade A)
College with Potential for Excellence (CPE) Status
            <h2>Student Dashboard</h2>
            <p>Enter Your Roll Number To Find Your Details</p>
            <form action="action.php" method="POST">
                <div class="nameInp">
                    <i class="fa fa-user icon"></i>
                    <input type="number"onkeyup="validateInput()" onfocus="validateInput()" placeholder="Roll Number" name="rollno" id="name">

                </div>

                <div class="submitBtn">
                    <button type="submit" id="btn" ><i class="fa fa-search"></i></button>
                </div>
            </form>
         
        </div>
        
        <script>
            let abc= "132345";
            let len = abc.length;
  
            var inputField = document.getElementById('name');
            window.onload = function() {
            inputField.focus();
            alert("Enter a Valid 6  digit Roll Number")
        };
        function validateInput() {
            // Get a reference to the input field and the button
            var inputField = document.getElementById('name');
            var submitButton = document.getElementById('btn');
            
            
            // Get the value entered in the input field
            var inputValue = inputField.value;
            // Check if the input value is a number and has a length of 6
            if (/^\d{6}$/.test(inputValue)) {
                // If valid, remove the 'disabled' attribute from the button
                submitButton.removeAttribute('disabled');
            }
            
            else {
                // If not valid, disable the button
                submitButton.setAttribute('disabled', 'disabled');
            }
            function validateInput(){
            if (/^\d{6}$/.test(inputValue)) {
                // If valid, remove the 'disabled' attribute from the button
                submitButton.removeAttribute('disabled');
            }
            
            else {
                // If not valid, disable the button
                submitButton.setAttribute('disabled', 'disabled');
            }
        }
        }
    </script>
</body>
</html>