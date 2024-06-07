<?php
    include 'connectDB.php';

    if (isset($_POST['enter'])) {

        echo "<table border='2' cellspacing='5' cellpadding='5' bgcolor='white'>";
            echo "<tr bgcolor='#c7c2b6'><th  style='width:20%'>Company Name</th>";
            echo "<th style='width:20%'>Project Title</th>";
            echo "<th style='width:25%'>Project Description</th>";
            echo "<th style='width:10%'>Start Date</th>";
            echo "<th style='width:15%'>Company Contact Number</th>";
            echo "<th style='width:10%'>Project Status</th></tr>";
        
        if(!empty($_POST['projectsearching'])){
            $searched = $_POST['projectsearching'];

            


            $ongoing_partnership_query = 
            "SELECT partnership.`PartnershipID`,
            partnership.`PartnerID`,
            partnership.`ProjectID`,
            partnership.`Status`,
            partner.`Company_Name`,
            partner.`Contact`,
            projects.`Title`,
            projects.`Description`,
            projects.`Start_Date`
            FROM ((`partnership` 

            INNER JOIN `partner` ON partnership.`PartnerID` = partner.`PartnerID`)
            
            INNER JOIN  `projects` ON partnership.`ProjectID` = projects.`ProjectID`)
            
            WHERE partner.`Company_Name` = '$searched'
            OR projects.`Title` = '$searched';
            ";

            

            $results=mysqli_query($connection,$ongoing_partnership_query);

            if (mysqli_num_rows($results)>0) {
                while ($row = mysqli_fetch_assoc($results)) {
                    
                    $company_name = $row['Company_Name'];
                    $title = $row['Title'];
                    $description = $row['Description'];
                    $start_date = $row ['Start_Date'];
                    $contact = $row['Contact'];
                    $status = $row['Status'];


                    echo "<tr><td>$company_name</td>";
                    echo "<td>$title</td>";
                    echo "<td>$description</td>";
                    echo "<td>$start_date</td>";
                    echo "<td>$contact</td>";
                    if ($status == "Ongoing"){
                        echo "<th><font color='#598268'>$status</font></th></tr>";
                    } else {
                        echo "<th><font color='#496ead'>$status</font></th></tr>";
                    }
                    
                    

                }
            } else {
            echo "<tr><td colspan=6><font color='red'>No record found</font></td></tr>";
            echo "</table>";
            }
        } else {
            echo "<tr><td colspan=6>";
            echo "<h3><font color='red'>Please enter a Company Name or Project Title</font></h3>";
            echo"</td></tr>";
            echo "</table>";
        }
    }
?>