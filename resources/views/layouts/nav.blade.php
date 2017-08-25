<div class="blog-masthead">
  <div class="container">
    <nav class="blog-nav">
      <a class="blog-nav-item active" href="/">Home</a>
      <a class="blog-nav-item" href="/posts/create">Publish</a>
      <a class="blog-nav-item" href="/register">Register</a>
      
      @if(Auth::check())
        <a class="blog-nav-item navbar-right" href="/logout">Log Out</a>
      	<a class="blog-nav-item navbar-right" href="#">{{ Auth::user()->name }}</a>
	    @else
        <a class="blog-nav-item navbar-right" href="/login">Log In</a>
      @endif
    </nav>
  </div>
</div>