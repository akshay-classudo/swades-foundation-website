<?php
require_once('/home3/swadeepx/public_html/wp-load.php');
global $wpdb;

function format_checkbox_values($values) {
    $formatted_values = array_map(function($value) {
        // Replace hyphens with spaces and capitalize each word
        $value = str_replace('-', ' ', $value);
        return ucwords($value);
    }, $values);

    return $formatted_values;
}
if (isset($_POST["go"]) && $_POST["go"] == "Export") {
        $post_at = "";
        $post_at_to_date = "";    
        $queryCondition = "";
        if (!empty($_POST["search"]["post_at"])) {            
            $post_at = sanitize_text_field($_POST["search"]["post_at"]);
            list($fid, $fim, $fiy) = explode("-", $post_at);        
            $post_at_todate = date('Y-m-d');
            if (!empty($_POST["search"]["post_at_to_date"])) {
                $post_at_to_date = sanitize_text_field($_POST["search"]["post_at_to_date"]);
                list($tid, $tim, $tiy) = explode("-", $post_at_to_date);
                $post_at_todate = "$tiy-$tim-$tid";
            }
            
            $post_at_todate = date('Y-m-d', strtotime('+1 day', strtotime($post_at_todate)));
            $queryCondition .= "WHERE ds.add_to BETWEEN '$fiy-$fim-$fid' AND '" . $post_at_todate . "'";
        }       
        global $wpdb;
        $table_name = $wpdb->prefix . 'volunteer';
        $sql = "SELECT ds.id as tid,
                    ds.name,
                    ds.age,
                    ds.gender,
                    ds.email,
                    ds.phone,
                    ds.city,
                    ds.occupation,
                    ds.hear_about_us
                FROM $table_name as ds $queryCondition 
                ORDER BY ds.id DESC";
        
        $results = $wpdb->get_results($sql, ARRAY_A);
        /*echo "<pre>"; print_r($results); echo "</pre>"; exit;*/
        // Set the headers to download the file rather than display it
        header('Content-Type: text/csv; charset=utf-8');  
        header('Content-Disposition: attachment; filename=swadesoundation-volunteer.csv');  
        $output = fopen('php://output', 'w');  
        fputcsv($output, array('Name', 'Age', 'Gender', 'Email', 'Phone', 'City', 'Occupation', 'Hear About Us'));

        if ($results) {
            foreach ($results as $row) {
                // Unserialize and format checkbox data
                $checkbox_data = maybe_unserialize($row['hear_about_us']);
                $checkbox_data = is_array($checkbox_data) ? format_checkbox_values($checkbox_data) : array();
                $checkbox_data_string = implode(", ", $checkbox_data);

                fputcsv($output, array(
                    $row['name'],
                    $row['age'],
                    $row['gender'],
                    $row['email'],
                    $row['phone'],
                    $row['city'],
                    $row['occupation'],
                    $checkbox_data_string
                ));
            }
        } else {
            echo "No results found.";
        }

        fclose($output);  
        exit();
    }
  if(!isset($_POST["go"]) && $_POST["go"]!="Export") { 
 ?> 
 <html>
	<head>
    <title>Swades Foundation Volunteer Report</title>		
	<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

	<style>
	.table-content{border-top:#CCCCCC 4px solid; width:50%;}
	.table-content th {padding:5px 20px; background: #d3b4bf;vertical-align:top;} 
	.table-content td {padding:5px 20px; border-bottom: #F0F0F0 1px solid;vertical-align:top;} 
	</style>
	</head>	
	<body style="background: antiquewhite;">
    <div class="demo-content" style="text-align: center;margin-top: 75px;">
		<h2 class="title_with_link">Swades Foundation Volunteer Report</h2>
  <form name="frmSearch" method="post" action="">
	 <p class="search_input">
		<input type="text" placeholder="From Date" id="post_at" name="search[post_at]"  value="<?php echo $post_at; ?>" class="input-control" required />
	    <input type="text" placeholder="To Date" id="post_at_to_date" name="search[post_at_to_date]" style="margin-left:10px"  value="<?php echo $post_at_to_date; ?>" class="input-control" required  />			 
		<input type="submit" name="go" value="Export" style="background: aqua;" >
	</p>

  </form>
  </div>
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
$.datepicker.setDefaults({
showOn: "button",
buttonImage: "https://swadesfoundation.org/wp-content/uploads/2024/06/datepicker.png",
buttonText: "Date Picker",
buttonImageOnly: true,
dateFormat: 'dd-mm-yy'  
});
$(function() {
$("#post_at").datepicker();
$("#post_at_to_date").datepicker();
});
</script>
</body></html>
<?php } ?>