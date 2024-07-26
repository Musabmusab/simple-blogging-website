<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dark Red Blog</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .fade-in {
      opacity: 0;
      animation: fadeIn ease 1s forwards;
    }@keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    };
    img {
            width: 10px;
            height: 10px;
        }
  </style>
</head>
<?php include'header.php' ?>
<body class="bg-gray-900 text-white">
<!-- <form action='index.php' method='post' > -->
<?php     
$con = mysqli_connect('localhost','root','','blog');

$record = mysqli_query($con," SELECT * FROM `add`");
while ($row=mysqli_fetch_array($record)) {
   
echo"

  <main id='mainContent' class='container mx-auto px-4 pb-16'>
    <article class='bg-gray-800 rounded-md mb-8 p-4 fade-in'>
  <h2 class='text-2xl font-bold mb-2 text-white '>$row[id]</h2>
    <h2 class='text-2xl font-bold mb-2 text-white '>$row[tital]</h2>
    <div>
      <img  class='h-[302px] w-[320px] 'src ='$row[image]' alt'NOT AVAILABLE'></a> 
      <p class='text-lg'>$row[text]</p></div>
      <h2 class='text-1xl font-bold mb-2 text-white '><a href='delete.php ? id=$row[id]'><button class='bg-red-900 p-1 m-2 rounter'>Delete</button></a></h2>
    </article>
  </main>
";
};  ?>
<a ""></a>
</body>
</html>



