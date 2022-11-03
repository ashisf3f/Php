

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ASK - Signup</title>
</head>
<body>
<div class="bg-gray-500 min-h-screen flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-gray-900 px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-white text-center">Sign up</h1>
                    <form action="actions/signup.php" method="POST">
                    <input 
                        type="text"
                        class="block border  border-grey-light w-full p-3 rounded mb-4"
                        name="fullname"
                        placeholder="Full Name" required/>

                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="phone"
                        placeholder="Phone Number" required/>
                    <input 
                        type="email"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="email"
                        placeholder="Email" required/>

                    <input 
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password"
                        placeholder="Password" required/>
                    <input 
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="confirm_password"
                        placeholder="Confirm Password" required/>
             

                    <button
                        type="submit"
                        class="w-full text-white text-center py-3 rounded bg-emerald-500 text-white hover:bg-emerald-900 focus:outline-none my-1"
                    >Create Account</button>

                    <div class="text-teal-100 cursor-default mt-3 text-center">
                        Already have an account? 
                        <a class="no-underline border-b border-blue text-blue" href="../school/login.php">
                            Log in
                        </a>
                    </div>
                    <div class="text-center text-white text-sm text-grey-dark mt-4">
                        By signing up, you agree to the <span class="text-bold underline">ASK UPDATE</span> 
                       
                    </div>
                    </form>
                </div>

                <div class="lg:mt-7 text-center text-black font-bold text-xs">
					<span class="cursor-default">
                Copyright © 2022

                <a href="https://ashiskunwar.com.np" rel="" target="_blank" title="ASK" class="text-black underline hover:text-gray-800 ">ASK UPDATE</a></span>
				</div>
            </div>
        </div>
</body>
</html>