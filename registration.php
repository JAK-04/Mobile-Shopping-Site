<?php  
    $nameErr = $emailErr = $phonenoErr = $passErr = $addErr = $cpassErr = "";  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        if (empty($_POST["name"])) {  
            $nameErr = "*Name is required"; 
        } else {             
            if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {  
                $nameErr = "*Only alphabets and white space are allowed";  

            }  
        }  
        if (empty($_POST["email"])) {  
                $emailErr = "*Email is required"; 
        } else {  
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "*Invalid email format";  
            }  
        }  
        if (empty($_POST["phoneno"])) {  
                $phonenoErr = "*Phone no is required";  

        } else {             
            if (!preg_match ("/^[0-9]*$/", $_POST["phoneno"]) ) {  
            $phonenoErr = "*Only numeric value is allowed.";  
            }  
            if (strlen ($_POST["phoneno"]) != 10) {  
            $phonenoErr = "*Phone no must contain 10 digits.";  
            }  
        }  
        if (empty($_POST["pass"])) {  
        $passErr = "*Password is required";
        }
        if (empty($_POST["address"])) {  
        $addErr = "*Address is required";
        }
        if (empty($_POST["cpass"])) {  
            $cpassErr = "*Confirm Password is required";  

        }
        elseif(($_POST["pass"]) != $_POST["cpass"]){
            $cpassErr = "*Password and Confirm Password  must match";  
        } 
    }  
?> 
<div class="flex items-center justify-center min-h-screen bg-gray-100">
<div class="px-8 py-6 mx-4 mt-4 text-left rounded-lg bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
<div class="flex justify-center">
<svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path d="M12 14l9-5-9-5-9 5 9 5z" />
<path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
</svg>
</div>
<h3 class="text-2xl font-bold text-center">Register</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
<div class="mt-4">
<div>
<label class="block" for="Name">Name<label>
<input type="text" placeholder="Name" name="name" 
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
<span class="text-xs text-red-400"><?php echo $nameErr; ?></span>
</div>
<div class="mt-4">
<label class="block" for="email">Email<label>
<input type="text" placeholder="Email" name="email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
<span class="text-xs text-red-400"><?php echo $emailErr; ?></span>
</div>
<div class="mt-4">
<label class="block" for="phone">Phone No.<label>
<input type="number" placeholder="phone" name="phoneno"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
<span class="text-xs text-red-400"><?php echo $phonenoErr; ?></span>
</div>
<div class="mt-4">
<label class="block" for="address">Address<label>
<textarea placeholder="Address" name="address" 
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"></textarea>
<span class="text-xs text-red-400"><?php echo $addErr; ?></span>
</div>
<div class="mt-4">
<label class="block">Password<label>
<input type="password" placeholder="Password" name="pass"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
<span class="text-xs text-red-400"><?php echo $passErr; ?></span>
</div>
<div class="mt-4">
<label class="block">Confirm Password<label>
<input type="password" placeholder="Password" name="cpass"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
<span class="text-xs text-red-400"><?php echo $cpassErr; ?></span>
</div>
<div class="flex">
<button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Create
                        Account</button>
</div>
<div class="mt-6 text-grey-dark">
                    Already have an account?
<a href="./login.php" class="text-blue-600 hover:underline" href="#">
                        Log in
</a>
</div>
</div>
</form>
</div>
</div>
