<nav>
    <div class="nav-top">
        <div class="clearfix">
            <img class="logo" width="125" src="https://www.udemy.com/staticx/udemy/images/v5/logo-green.svg" alt="udemy-logo" />
            <div class="dropdown-outer">
                <div id="category-select" class="select-option">
                    <span>Categories</span>

                    <div class="categories">
                        <ul>
                            @foreach($categories as $category)
                                <li>
                                    <span class="category-main">{{ $category->title }}</span>

                                    <ul class="category-selection">
                                        @foreach($category->subcategory as $category)
                                            <li>{{ $category->title }}</li>
                                        @endforeach
                                    </ul>

                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
                
            </div>
            <div class="nav-search">
                <form class="form">
                    <input autocomplete="false" type="text" name="search" />
                    <button class="nav-btn fa fa-search"></button>
                </form>
            </div>
            <div class="select-option">
                <span>Instructor</span>
            </div>
            <div class="select-option">
                <span>My Courses</span>
            </div>
        </div>

        
    </div>

    <ul class="sub-nav text-center">
        <li>Development</li>
        <li>Business</li>
        <li>IT &amp; Software</li>
        <li>Personal Development</li>
        <li>Design</li>
        <li>Marketing</li>
        <li>Office Productivity</li>
        <li>Music</li>
        <li>Health &amp; Fitness</li>
    </ul>

</nav>