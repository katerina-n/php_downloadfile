<div>
<form method = "Post" action ="" enctype="multipart/form-data">
    <input name="text" type="text">
    <input name="userfile" type="file" /><br />
    <input type="submit" value="Send" name="button" />
</form>
</div>

<?php
class UploadedFile
{
    public $name;
    public $size;
    public $type;
    public $tmpName;

    public function __construct()
    {

    }
public function __toString()
{
    // TODO: Implement __toString() method.
    return "Name: ".$this->name." Size: ".$this->size." Type: ".$this->type." TMP: ".$this->tmpName;
}

    public function isImage($extension = null)
    {
        if(strpos($this->type, 'image') === 0){
         return "Image";
        }
    }
    public function TypeFile(){
        $val= $_FILES["userfile"]["name"];
       $mass=explode(".",$val);
        return $mass[1];
    }

    public function isUnder($size)
    {
        return $this->size < $size;
    }
    public function upload(){
        $a='qwertyuioplkjhgfdsa';
        $b= substr($a, rand(0, strlen($a)),3);
        $randName=$b.rand(1, 100);
        $type=$this->TypeFile();
        $randN=$randName.".".$type;
        $userfileName=$_FILES["userfile"]["name"];
        $fsize=$_FILES["userfile"]["size"];
        if(is_uploaded_file($_FILES["userfile"]["tmp_name"])){
            move_uploaded_file($_FILES["userfile"]["tmp_name"],$_SERVER['DOCUMENT_ROOT']."\\uploads\\".$randN);
        }
$dbh=new PDO('mysql:host=localhost; dbname=files', 'root',"" );
$sth=$dbh->prepare("INSERT INTO files (randomName, name, size) values ('$randN', '$userfileName', '$fsize')");
$sth->execute();


    }


}
if(!empty($_POST)) {
    if (isset($_POST['text'])) {
        $text = $_POST['text'];

    }
    if (isset($_POST['userfile'])) {
        $userfile = $_POST['userfile'];
    }
    if (isset($_POST['button'])) {
        $c = true;
    }

   // $name=$_FILES['userfile']['name'] ;
    //$type=$_FILES['userfile']['type'] ;
    //$size=$_FILES['userfile']['size'];
    //$tmp=$_FILES['userfile']['tmp_name'];

    $obj=new UploadedFile();
   $obj->upload();

    $dbh=new PDO('mysql:host=localhost; dbname=files', 'root',"" );
    $sth=$dbh->query("SELECT randomName, name from files");
    // $sth->execute();
    $mass=$sth->fetchAll(PDO::FETCH_ASSOC);



}


?>


<table>
    <tr>
        <th>RandomName</th>
        <th>Name</th>
    </tr>
    <?php foreach ($mass as $row): ?>
        <tr>
            <td><?=$row['randomName']?></td>
            <td><a href="<?=$_SERVER['DOCUMENT_ROOT']."\\uploads\\".$row['randomName']?>" download><?=$row['name']?></a></td>
        </tr>
    <?php endforeach; ?>
</table>
