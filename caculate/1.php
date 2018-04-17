<?PHP
     switch($_POST['fuhao']){
          case"+":
          $r=$_POST["1"]+$_POST["2"];
          break;
          case"*":
          $r=$_POST["1"]*$_POST["2"];
          break;
          case"-":
          $r=$_POST["1"]-$_POST["2"];
          break;
          case"/":
          $r=$_POST["1"]/$_POST["2"];
          break;
          case"กม":
          $r=$_POST["1"]*$_POST["2"];
          break;
                            
}
   echo $r;        

?>