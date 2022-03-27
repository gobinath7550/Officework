

 <?php
  $dir = 'random';
  // Initiate array which will contain the image name
  $imgs_arr = array();
  // Check if image directory exists
    
      // Get files from the directory
      $dir_arr = scandir($dir);
      $arr_files = array_diff($dir_arr, array('.','..') );
      foreach ($arr_files as $file) {
        //Get the file path
        $file_path = $dir."/".$file;
        // Get extension
        $ext = pathinfo($file_path, PATHINFO_EXTENSION);
        if ($ext=="jpg" || $ext=="png" || $ext=="JPG" || $ext=="PNG") {
          array_push($imgs_arr, $file);
        }
        
      }
	  if($imgs_arr[0]==$_GET['value']&&$imgs_arr[0]==$_GET['var'])
	  {
		  echo "Yes this is water";
	  }else
	  if($imgs_arr[1]==$_GET['value']&&$imgs_arr[1]==$_GET['var'])
	  {
		  echo "Yes this is Fire";
	  }else
	  if($imgs_arr[2]==$_GET['value']&&$imgs_arr[2]==$_GET['var'])
	  {
		  echo "Yes this is wind";
	  }else{
		  echo "Oops! Wrong";
	  }
?>