<?php
    include 'connectDB.php';

    echo "<table border='2' cellspacing='5' cellpadding='5' bgcolor='white'>";
    echo "<tr bgcolor='#c7c2b6'>";
    echo "<th>Company Name</th>";
    echo "<th>Project Title</th>";
    echo "<th>Project Description</th>";
    echo "<th style='width:10%'>Start Date</th>";
    echo "<th>Company Contact Number</th>";
    echo "<th>Project Status</th>";
    echo "</tr>";

    $partnership_query = 
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

    WHERE partnership.`PartnershipID` <= '55';";

    $results=mysqli_query($connection,$partnership_query);

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

        $status= $row['Status'];
            if ($status == "Ongoing"){
                echo "<th><font color='#598268'>$status</font></th></tr>";
            } else {
                echo "<th><font color='#496ead'>$status</font></th></tr>";
            } 
        }
        
    echo"</tr>";
    echo"</table>";
?>