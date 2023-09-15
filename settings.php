<?php

global $wpdb;
$table_name = $wpdb->prefix . 'doctors_appoinment';
$query = "SELECT * FROM $table_name";
$appointments = $wpdb->get_results($query);


echo '<table class="wp-list-table widefat fixed striped posts WP_List_Table show_preloader">';
echo '<thead>';
echo '<tr>';
echo '<th scope="col">ID</th>';
echo '<th scope="col">Department</th>';
echo '<th scope="col">Doctor</th>';
echo '<th scope="col">Appoinment Date</th>';
echo '<th scope="col">Appoinment Time</th>';
echo '<th scope="col">Patient Name</th>';
echo '<th scope="col">Phone</th>';
echo '<th scope="col">Message</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';


if ($appointments) {
    foreach ($appointments as $appointment) {

        echo '<tr>';
        echo '<td class="get_order_id">'.$appointment->id.'</td>';
        echo '<td class="get_order_id">'.$appointment->department.'</td>';
        echo '<td class="get_order_id">'.$appointment->doctor.'</td>';
        echo '<td class="get_order_id">'.$appointment->appoinment_date.'</td>';
        echo '<td class="get_order_id">'.$appointment->appoinment_time.'</td>';
        echo '<td class="get_order_id">'.$appointment->full_name.'</td>';
        echo '<td class="get_order_id">'.$appointment->phone_number.'</td>';
        echo '<td class="get_order_id">'.$appointment->message.'</td>';
        echo '</tr>';
    }
}

echo '</tbody>';
echo '</table>';
