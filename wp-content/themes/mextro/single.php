<?php

//Vacatures
if (in_category('3')) {include (TEMPLATEPATH . '/single/single-vacatures.php');
}
//Aflossers
elseif (in_category('4')) {include (TEMPLATEPATH . '/single/single-aflossers.php');
}
else { include (TEMPLATEPATH . '/page.php');
}
?>