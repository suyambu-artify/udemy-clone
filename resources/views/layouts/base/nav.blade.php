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
                            <li><a href="{{ route('instructor-landing') }}">Create a Course</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="select-option">
                <span><a href="{{ route('user-courses') }}">My Courses</a></span>
            </div>
        </div>  
    </div>

</nav>
