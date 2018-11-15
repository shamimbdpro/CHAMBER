<div class="sitelink">
                    	<span>Videos</span>
                    	@foreach($videos as $video)
						<div class="events-video"> <!-- video item 1 -->
						  <a href="#" class="js-video-button-2 video" data-video-id='{{$video->video_link}}'>
							<img style="width:80px" src="http://img.youtube.com/vi/{{$video->video_thumb}}/0.jpg">
							<p>{{str_limit($video->video_title, 58, '')}}</p>
							<div class="clearfix"></div>
						  </a>
						</div>

						@endforeach
</div>
