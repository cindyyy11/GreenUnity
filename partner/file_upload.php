<?php
include 'connectDB.php';

if(isset($_POST['submitbtn'])){
    ///name attribute
    $file_name = $_FILES['proposal']['name'];

    ///where to upload the file
    $destination = 'uploaded_proposals/' . $file_name;
    
    ///to validate that the file is in the format requested
    $extension = pathinfo($file_name,PATHINFO_EXTENSION);

    ///temporary path
    $file = $_FILES['proposal']['tmp_name'];

    $size = $_FILES['proposal']['size'];

    if($extension != "pdf") {
        echo "Your file extension must be pdf format";
    } 
    elseif ($size > 1000000) ///1GB 
    {
        echo "File uploaded is too large";
    } else {
        if(move_uploaded_file($file,$destination)) {
            $file_upload_query = "INSERT INTO `proposal_file`( `File_Name`, `File_Size`, `Downloads`) VALUES('$file_name','$size',0)";

            if (mysqli_query($connection,$file_upload_query)) {
                ///upload partnership application
                $title = $_POST['title'];

                $get_id = "SELECT * FROM `proposal_file` WHERE `File_Name`='$file_name' AND `File_Size`='$size'";
                $convert_id = mysqli_query($connection,$get_id);
                $row = mysqli_fetch_assoc($convert_id);
                $proposal_ID = $row['Proposal_ID'];

                

                $today = date("Y-m-d");

                $PID = intval($_POST['PID']);
            
                $apply_partnership = "INSERT INTO `apply_partnership`(`PartnerID`, `Title`, `Proposal_ID`, `Submitted_Date`, `Status`) VALUES ('$PID','$title','$proposal_ID','$today','Pending')";

                if (mysqli_query($connection,$apply_partnership)) {
                    echo "Successful proposal submission, please wait 3 to 5 working days for us to get back to you.";
                } else {
                    echo "Error in submission.";
                }

            } else {
                echo "Error in applying for partnership, please retry after 24 hours.";
            }
        }
    }
    
}
mysqli_close($connection);
?>