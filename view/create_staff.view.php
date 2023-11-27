<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="h-full">


<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create new account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="POST" enctype="multipart/form-data">
      <div>
        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">name</label>
        <div class="mt-2">
          <input id="name" name="name" type="text"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="position" class="block text-sm font-medium leading-6 text-gray-900">postion</label>
          
        </div>
        <div class="mt-2">
          <select id="positon" name="positon" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <option value="chef">Chef</option>
            <option value="sous_chef">Sous Chef</option>
            <option value="linecook">Line Cook</option>
            <option value="prep/dish">Prep/Dish</option>
        </select>
        </div>
      </div>

      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">email</label>
        <div class="mt-2">
          <input id="email" name="email" type="email"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <label for="pay" class="block text-sm font-medium leading-6 text-gray-900">Hourly wage</label>
        <div class="mt-2">
          <input id="pay" name="pay" type="text"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <label for="image" class="block text-sm font-medium leading-6 text-gray-900"> profile picture</label>
        <div class="mt-2">
          <input id="image" name="image" type="file"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <button type="submit" name = "submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Already have an account?
      <a href="/" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign In</a>
    </p>
  </div>
</div>

</body>
</html>