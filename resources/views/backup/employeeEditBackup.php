<!DOCTYPE html>
<html>
<head>
<title>Student Management | Edit</title>
</head>
<body>
<form action = "/employee/edit/<?php echo $data->id; ?>" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Name</td>
<td>
<input type = 'text' name = 'name'
value = '<?php echo$data->name; ?>'/> </td>
</tr>
<tr>
<td>email</td>
<td>
<input type = 'text' name = 'email'
value = '<?php echo$data->email; ?>'/>
</td>
</tr>
<tr>
<td>salary</td>
<td>
<input type = 'text' name = 'salary'
value = '<?php echo$data->salary; ?>'/>
</td>
</tr>
<tr>
<td>Role</td>
<td>
<input type = 'text' name = 'role'
value = '<?php echo$data->role; ?>'/>
</td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Update student" />
</td>
</tr>
</table>
</form>
</body>
</html>