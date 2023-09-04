<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search-codeigniter</title>
    <!-- <style>
      table td {
        border:2px solid black;
        border-collapse:collapse;
      }
    </style> -->
</head>
<body>
<a class="sharer whatsapp" href="javascript:" target="_blank" data-sharer="whatsapp" data-title="ஜெயிலர் படத்தில் சிவகார்த்திகேயன்.. டிரைலரில் இடம்பெற்ற காட்சியின் புகைப்படம்" data-url="https://cineulagam.com/article/sivakarthikeyan-in-jailer-movie-1691130801">
            <i class="fab fa-whatsapp"></i>gggg
        </a>
<br><br><br>
<a href="https://api.whatsapp.com/send?text=<?= base_url('main/search')  ?>" target="blank">Click here to share on Whatsapp</a>


<br><br><br>
<table>


<form method="get" action="">
     <input type="text" name="search_name"  placeholder="Search here...">
      <button type="submit">search</button>
</form>

    <thead>
       <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
       </tr>
       <?php
       if(isset($data)){
        foreach($data as $row){
       
       ?>
       <tr>
        <td><?= $row->id  ?></td>
        <td><?= $row->name  ?></td>
        <td><?= $row->email  ?></td>
        <td><?= $row->password  ?></td>
       </tr>
       <?php
            
        }
    }
       ?>
    </thead>
</table>

</body>
</html>