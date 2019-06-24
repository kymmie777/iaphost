<?php  ?>
<!DOCTYPE html>
<html>
<body>
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