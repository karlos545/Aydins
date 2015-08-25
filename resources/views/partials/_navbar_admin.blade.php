        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">Edit Sections</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Edit Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                            <li><a href="{!! URL::route('categories.create') !!}">Add/ Edit Categories</a></li>
                            <li><a href="{!! URL::route('toppings.create') !!}">Add/ Edit Toppings</a></li>
                            <li><a href="{!! URL::route('sauces.create') !!}">Add/ Edit Sauces</a></li>
                            <li><a href="{!! URL::route('sides.create') !!}">Add/ Edit Sides</a></li>
                            <li><a href="{!! URL::route('products.create') !!}">Add/ Edit Products</a></li>
                        </ul>
                </li>
                <li>
                    <a href="#">Edit Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/auth/logout">Logout</a></li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>