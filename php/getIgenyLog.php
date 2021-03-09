<?php
    session_start();
    if(!isset($_SESSION["ou_id"])){
        header("location:login.php");
    }else{
	    include("../connect.php");
        $honap = $conn->real_escape_string($_POST["honap"]);
        $kovihonap = $honap + 1;
        $ev = $conn->real_escape_string($_POST["ev"]);
	    $sql = "SELECT COUNT(iv_muvelet) AS mennyiseg, iv_muvelet, u_name, MONTH(iv_datum) as iv_datum FROM `igenyvaltozas_log` WHERE MONTH(iv_datum) >= $honap AND MONTH(iv_datum) < $kovihonap AND YEAR(iv_datum) = $ev GROUP BY iv_muvelet, u_name, iv_datum";
	    if ($result = $conn->query($sql)) {
	    	$dataArray = array();
            while ($row_3 = mysqli_fetch_assoc($result)){
                $dataArray[] = $row_3;
            }
            echo json_encode($dataArray);
	    }else{
		    echo $conn->error;
	    }
        mysqli_close($conn);
    }
?>