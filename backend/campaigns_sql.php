<?php

echo "\n****************************************\n";
echo "Assuming 3,11,18 are given venue_type ids:";
echo "\n****************************************\n";

$venues_type_ids = "3,11,18";

echo "
SELECT campaigns.name 
FROM campaigns
INNER JOIN campaign_tag ON campaigns.id = campaign_tag.campain_id 
INNER JOIN tag ON campaign_tag.tag_id = tag.id
INNER JOIN venue_types ON venue_types.id = tag.venue_type_id
WHERE venue_types.id IN (".$venues_type_ids.")";

echo "\n\n";
?>
