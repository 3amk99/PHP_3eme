<?php
require_once "config.php" ;
if (!isset($_GET['value_update'])) 
{
    die("No ID provided");
}

$id = $_GET['value_update'];
$result = $article->get_article_by_id($id);


if (!$result) 
{
    die("Article not found");
}
 if(isset($_POST['button_update']))
 {
    $article->id = $_POST['id'] ;
    $article->title = $_POST['title'] ;
    $article->content = $_POST['content'] ;
    if(isset($_FILES['photo']) && $_FILES['photo']['error'] === 0)
    {
     $name = time() . "_" . preg_replace("/[^a-zA-Z0-9.]/", "_", $_FILES['photo']['name']);
     $temporary_name = $_FILES['photo']['tmp_name'] ;
        $upload = "upload/" ;
        $Normal_path = $upload . basename($name) ;
        move_uploaded_file( $temporary_name , $Normal_path) ;
        $article->photo = $Normal_path ;
    }
    else
    {
      $article->photo = $_POST['old_photo'];
    }

    $article->update() ;
    header("Location: show.php");
    exit;
 }
?>

<form method="POST" enctype="multipart/form-data">
 <input type="hidden" name="id" value="<?php echo $result['id'] ; ?>" ><br>
 <input type="hidden" name="old_photo" value="<?php echo $result['photo'] ; ?>"><br>
 <input type="text" name="title" value="<?php echo $result['title'] ; ?>"><br>
 <textarea name="content" col="40" rows="5"><?php echo  $result['content'] ; ?></textarea><br>
 <img src="<?php echo $result['photo'] ; ?>" width="100"><br>
 <input type="file" name="photo"><br>
 <button type="submit" name="button_update">
   update
 </button>
</form>