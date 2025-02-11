<?php
function check_user_role($required_role) {
    $ci = &get_instance();
    $user_role = $ci->session->userdata('user_type');

    if ($user_role !== $required_role) {
        redirect(base_url('/')); // Redirect if user type doesn't match
    }
    
}
?>
