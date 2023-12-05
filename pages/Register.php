<?php
    include '../partials/Header.php';
?>

<!-- component -->
<!-- Create by joker banny -->
<div class="bg-indigo-100 flex justify-center items-center">
	<div class="lg:w-2/5 md:w-1/2 w-2/3">
		<form class="bg-white p-10 rounded-lg shadow-lg min-w-full" method="post" action="../config/register.php">
			<h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Register</h1>
			<div>
				<label class="text-gray-800 font-semibold block my-3 text-md" for="studentNumber">Student Number</label>
				<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="student_num" id="studentNum" placeholder="student number" />
      </div>
             <div>
					<label class="text-gray-800 font-semibold block my-3 text-md" for="firstname">First Name</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="tel" name="firstname" id="firstname" placeholder="firstname" />
      </div>
             <div>
					<label class="text-gray-800 font-semibold block my-3 text-md" for="surname">Surname</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="tel" name="surname" id="surname" placeholder="surname" />
      </div>
				<div>
					<label class="text-gray-800 font-semibold block my-3 text-md" for="email">Email</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="email" name="email" id="email" placeholder="@email" />
      </div>
                <div>
					<label class="text-gray-800 font-semibold block my-3 text-md" for="dob">Date of birth</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="date" name="dob" id="dob" placeholder="date of birth" />
      </div>
                 <div>
					<label class="text-gray-800 font-semibold block my-3 text-md" for="address">Address</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="tel" name="address" id="address" placeholder="address" />
      </div>
                <div>
					<label class="text-gray-800 font-semibold block my-3 text-md" for="postcode">Postcode</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="tel" name="postcode" id="postcode" placeholder="postcode" />
      </div>
					<div>
						<label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
						<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="password" name="psw" id="password" placeholder="password" />
      </div>
						
							<button type="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>
							 <a href="pages/student/Login.php"><button type="submit" class="w-full mt-6 mb-3 bg-indigo-100 rounded-lg px-4 py-2 text-lg text-gray-800 tracking-wide font-semibold font-sans">Login</button></a>
		</form>
	</div>
</div>

<?php
    include '../partials/Footer.php';
?>