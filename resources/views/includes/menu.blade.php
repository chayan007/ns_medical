<div class="menu menu_mm trans_300">
    <div class="menu_container menu_mm">
        <div class="page_menu_content">

            <div class="page_menu_search menu_mm">
                <form action="#">
                    <input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
                </form>
            </div>
            <ul class="page_menu_nav menu_mm">
                <li class="page_menu_item menu_mm"><a href="/">Home<i class="fa fa-angle-down"></i></a></li>
                <li class="page_menu_item has-children menu_mm">
                    <a href="/shop">Categories<i class="fa fa-angle-down"></i></a>
                    <ul class="page_menu_selection menu_mm">
                        @foreach($categories as $category)
                            <li class="page_menu_item menu_mm"><a href="/shop/category/{{ $category->id }}">{{ $category->category }}<i class="fa fa-angle-down"></i></a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="page_menu_item has-children menu_mm">
                    <a href="/shop">Companies<i class="fa fa-angle-down"></i></a>
                    <ul class="page_menu_selection menu_mm">
                        @foreach($companies as $company)
                            <li class="page_menu_item menu_mm"><a href="/shop/company/{{ $company->id }}">{{ $company->company }}<i class="fa fa-angle-down"></i></a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="page_menu_item menu_mm"><a href="/shop">Products<i class="fa fa-angle-down"></i></a></li>
                <li class="page_menu_item menu_mm"><a href="/contact_us">Contact<i class="fa fa-angle-down"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

    <div class="menu_social">
        <ul>
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>