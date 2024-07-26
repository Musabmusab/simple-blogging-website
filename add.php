<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>One Input Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php include'header.php' ?>
<body class="bg-red-900 text-white">
    <form action="add1.php" method="post" enctype="multipart/form-data" >
  <div class="container mx-auto px-4 py-8">
 
    <div class="flex flex-col space-y-4">
   
      <h1 class="text-3xl font-bold text-center">Create a Post</h1>
      <label for="title" class="block text-lg font-medium">Title:</label>
      <input type="text" id="title" name="title" class="w-full px-4 py-2 rounded-md text-black border border-gray-300 focus:outline-none focus:ring-red-500 focus:ring-1">
      <label for="image" class="block text-lg font-medium">Image:</label>
      <input type="file" name="image">
      <label for="text" class="block text-lg font-medium">Text:</label>
      <textarea id="text" name="text" rows="10" class="w-full px-4 py-2 rounded-md text-black border border-gray-300 focus:outline-none focus:ring-red-500 focus:ring-1"></textarea>
      <button class="px-4 py-2 bg-black text-white rounded-md hover:bg-red-600">Post</button>
    </div>
  </div>
  </form>

</body>
</html>
<!-- class="w-full px-4 py-2 rounded-md text-black border border-gray-300 focus:outline-none focus:ring-red-500 focus:ring-1 -->