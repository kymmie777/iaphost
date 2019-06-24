<!DOCTYPE html>
<html>
<head>
<title>Fee Payment</title>
<style>body-align:center</style>
</head>
<body>
<form action = "/pay" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Student id</td>
<td><input type='integer' name='user_id' /></td>
<tr>
<td>Name</td>
<td><input type="text" name='name'/></td>
<tr>
<td>Amount</td>
<td><input type="integer" name='amount'/></td>
</tr>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Pay"/>
</td>
</tr>
</table>
</form>
<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="integer" class="form-control" name="query"
            placeholder="Search student id"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
    </div>
</form>
</body>
</html>