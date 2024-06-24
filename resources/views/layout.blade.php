<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Student Management System</title>
  
</head>
<body>
  <div class="container mx-auto">
    <div class="row">
        <div class="col-md-12">
            <nav class="bg-red-500 p-4">
                <div class="container mx-auto flex items-center justify-between">
                    <div class="flex-grow flex justify-center">
                        <a class="text-white text-2xl font-bold mx-auto" href="#">Student Management System Project</a>
                    </div>
                    <button class="text-white focus:outline-none" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
        </div>
    </div>
</div>
      <div class="row flex">
          <div class="w-1/4">
              <div class="sidebar flex flex-col space-y-2 p-4 bg-gray-100">
                  <a class="text-blue-500 font-semibold" href="#Home">Home</a>
                  <a href="Student" class="text-gray-700">Students</a>
                  <a href="Lectures" class="text-gray-700">Lectures</a>
                  <a href="Enrolment" class="text-gray-700">Enrollment</a>
                  <a href="Courses" class="text-gray-700">Courses</a>
                  <a href="Payments" class="text-gray-700">Payments</a>
              </div>
          </div>
          <div class="w-3/4 p-4">
              <!-- Page Content -->
              <div class="content">
                  @yield('content')

              </div>
          </div>
      </div>
  </div>
</body>


</html>