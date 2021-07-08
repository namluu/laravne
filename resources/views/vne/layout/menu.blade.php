<sidebar>
    <div class="container">
        <ul class="main-menu">
        	@foreach($menu as $category)
            <li><a href="">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
</sidebar>