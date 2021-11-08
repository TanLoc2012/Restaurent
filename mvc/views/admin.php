<?php
	$title = 'Dashboard Page';
	$isActive = "Dashboard";
	require_once "mvc/utility/utility.php";
    $user = getUserToken();
    
    // if($user != null) {
    //     if($user["role_id"] == 1) {
    //         header('Location: http://localhost/Laptrinhweb/Home');
    //     }
    //     else {
    //         header('Location: http://localhost/Laptrinhweb/admin');
    //     }
    // }
	require_once('blocks/header_admin.php');
?>

<div class="row">
	<div class="col-md-12">
		<h1>Dashboard</h1>
	</div>
</div>

<?php
	require_once('blocks/footer_admin.php');
?>