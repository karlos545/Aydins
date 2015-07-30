        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">Search Takeaways</a>
                </li>
                <li>
                    <a href="#">Search Takeaways</a>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, {!! Auth::user()->first_name !!} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-home"></span> Edit Address Details</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-credit-card"></span> Edit Payment Details</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Edit Account Details</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-book"></span> Manage Reviews</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/auth/logout"><span class="glyphicon glyphicon-user"></span> Not You? Logout</a></li>

                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>