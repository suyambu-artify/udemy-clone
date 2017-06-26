<nav>
    <div class="nav-top">
        <div class="clearfix">
            <img class="logo" width="125" src="https://www.udemy.com/staticx/udemy/images/v5/logo-green.svg" alt="udemy-logo" />
            <div class="dropdown-outer">
                <div id="category-select" class="select-option">
                    <span><a href="{{ route('home') }}">Categories</a></span>

                    <div class="categories">
                        <ul>
                            @foreach($categories as $i => $category)
                                <li>
                                    <span class="category-main"><a href="{{ route('course-category', ['category' => $category->slug]) }}">{{ $category->title }}</a></span>

                                    <ul class="category-selection skin-{{ $i }}">
                                        @foreach($category->subcategory as $sub)
                                            <li>
                                            <a href="{{ route('category-specific', ['category' => $category->slug, 'sub-category' => $sub->slug]) }}">{{ $sub->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>

                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
                
            </div>
            <div class="nav-search">
                <form class="form" method="POST" action="{{ route('course-query') }}">
                    {{ csrf_field() }}
                    <input autocomplete="false" type="text" name="search" placeholder="Search for Courses" />
                    <button class="nav-btn fa fa-search"></button>
                </form>
            </div>
            <div class="select-option">
                <div class="instructor">
                    <span><a href="{{ route('instructor-landing') }}">Instructor</a></span>
                    <div class="instructor-dropdown">
                        <ul>
                            <li><a href="" data-toggle="modal" data-target="#myModal">Create a Course</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="select-option">
                <span><a href="{{ route('user-courses') }}">My Courses</a></span>
            </div>
            <div class="select-option">
                
                <a>Cart</a>
                <div class="cart-dropdown">
                    <ul>
                        @foreach($cart->cartItems as $item)
                            <li>{{ $item->id }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>  
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Create A Course</h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('course-create') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" placholder="Course Title" name="title" class="form-control" placeholder="My Course Title">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Create Course</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

</nav>
