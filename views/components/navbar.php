<!--13 part add dir components in views
add head .php page
add navbar .php page
-->
<nav class='navbar navbar-expand-lg navbar-light bg-light'>
    <div class='container-fluid'>
        <a class='navbar-brand' href='/home'>AreaWweb</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavAltMarkup'
                aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
            <div class='navbar-nav'>
<!--                10 part change navbar with boostrap-->
                <a class='nav-link active' href='#'>Home</a>

            </div>
        </div>
        <!--16-1 part change navbar-->
        <div class="d-flex">
					<?php
//                    <!--35 add in navbar if session-->
					if ( !$_SESSION[ 'user' ] ) {
						?>
                        <!--                10 part change navbar with boostrap-->
              <a class='nav-link active' href='/login'>Login</a>
                        <!--                10 part change navbar with boostrap-->
              <a class='nav-link active' href='/register'>Register</a>
						<?php
					} else {
						?>
                        <!--35-1 else-->
              <a class='nav-link active' href='/profile'>Profile</a>
<!--                        38-4 add form action in navbar for Auth-->
                        <form action="/auth/logout" method="post">
<!--                            38-5 add button-->
                            <button type="submit" class='btn btn-danger'>Logout</button>
                        </form>
						<?php
					}
					?>

        </div>
    </div>
</nav>
