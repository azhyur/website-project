<?php 
    // verify admin
    require 'verify_user.php';
    if(!AdminVerify::isAdmin()) {
        header("location: login.php");
        exit();
    }

    $current = 'home';

    require '../shared/header-tier1.php';
    echo "<body>";
    require 'nav.php';
?>

    <div class="container">
        <div class="row">
            <h2>Search Users</h2>
            <form id="searchForm" class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" name="first-name" class="form-control" placeholder="John">
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" name="last-name" class="form-control" placeholder="Doe">
                </div>
                <!-- TODO DO LANGUANGE AND EMAIL -->
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <hr>
        <div class="row">
            <h2>Search Results</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Language</th>
                    </tr>
                </thead>
                <tbody id="searchResults">
                </tbody>
            </table>
        </div>
    </div>

<?php
    require '../shared/footer.php';
?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script>

    $("#searchForm").submit(function(event) {
        // prevent default form post
        event.preventDefault();

        // get form data
        var $form = $(this);
        var firstName = $form.find("input[name='first-name']").val();
        var lastName = $form.find("input[name='last-name']").val();
        var url = "user_lookup.php";

        // post the data
        var posting = $.post(url,{first_name : firstName, last_name : lastName});

        // display the results
        posting.done(function(data) {

            var content = $(data);
            $("#searchResults").empty().append(content);
        });
    
    });

    </script>

</body>

</html>
