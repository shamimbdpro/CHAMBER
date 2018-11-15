     	
			       <div class="left-menu">
                		<span>Menu</span>
                   <ul class="menuone">
						<div class="leftmenu_s"> 
                             <ul>
			                   @foreach($getmenu as $menulist)
			                          @if($menulist->menu_display ==00)
			                           <?php $submenulists=DB::table('submenus')->orderby('submenu_si','ASC')->where('menu_id',$menulist->id)->get(); ?>      
			                             	<li><a class="nav-link" href="{{url($menulist->menu_url)}}">{{$menulist->menu_name}}</a>
			                                    <ul class="submenu1">
			                                    		 @foreach($submenulists as $submenulist)
			                                    		<li><a class="nav-link" href="{{url($submenulist->submenu_url)}}">{{$submenulist->submenu_name}}</a></li>
			                                    		   @endforeach
			                                    </ul>

			                             	</li>
			                        @endif
								@endforeach
                             </ul>
						</div>
                   </div>