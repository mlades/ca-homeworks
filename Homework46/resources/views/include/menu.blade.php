<!-- Header -->
<div id="header" class="skel-panels-fixed">
	<div id="logo">
		<h1><a href="/">Phase Shift</a></h1>
		<span class="tag">by TEMPLATED</span>
	</div>
    <nav id="nav">
		<ul>
            <li class="{{ Request::path() ==='/' ? 'current_page_item' : '' }}"><a href="/">Homepage</a></li>
			<li class="{{ Request::path() ==='left-sidebar' ? 'current_page_item' : '' }}"><a href="/left-sidebar">Left Sidebar</a></li>
			<li class="{{ Request::path() ==='right-sidebar' ? 'current_page_item' : '' }}"><a href="/right-sidebar">Right Sidebar</a></li>
			<li class="{{ Request::path() ==='no-sidebar' ? 'current_page_item' : '' }}"><a href="/no-sidebar">No Sidebar</a></li>
		</ul>
    </nav>
			
</div>