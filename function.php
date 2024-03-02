<?php
function koneksi(){
    return mysqli_connect("localhost","root","","phpdasar");
}
function query($query){
    $conn=koneksi();
    $select=mysqli_query($conn,$query);
    if(mysqli_num_rows($select)==1){
        return mysqli_fetch_assoc($select);
        
    }
    $fetchs=[];
        while($fetch=mysqli_fetch_assoc($select)){
            $fetchs[]=$fetch;
        }
        return $fetchs;
}
?>