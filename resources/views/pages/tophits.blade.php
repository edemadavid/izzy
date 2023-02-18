@extends('components.app')
@section('contents')
<section class="background-hits section-overlay text-left">
	<div class="container">
		<div class="full-height vertical-middle">
			<div class="col-md-12">
				<h1 class="black hyper text-white os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">FINEST TUNES
				</h1>
				<h4 class="text-semi-white">
					OUR TOP SAMPLES
				</h4>
				<object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-triangle.svg') }}">
					<img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
				</object>
				<object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-circle-lined.svg') }}">
					<img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
				</object>
				<object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-triangle-rotated.svg') }}">
					<img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
				</object>
			</div>
		</div>
	</div>
</section>
<section class="section section-dark text-left">
	<div class="container">
		<header>
			<div class="col-md-12 padding-bottom">
				<h1 class="text-white text-caps">
					LATEST SINGLE
				</h1>
				<object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-triangle.svg') }}">
					<img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
				</object>
				<object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-circle-lined.svg') }}">
					<img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
				</object>
				<object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-triangle-rotated.svg') }}">
					<img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
				</object>
			</div>
		</header>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="vinyl-container vinyl-audio background-cd-wrap">
					<div class="inner">
						<div id="jquery_jplayer_8" class="jp-jplayer"></div>
						<div id="jp_container_8" class="jp-audio">
							<div class="inner">
								<div class="jp-gui jp-interface">
									<div class="jp-controls-wrap">
										<div class="song_title"></div>
										<!-- mt-player-control -->
										<div class="mt-player-control">
											<a href="javascript:;" class="jp-previous disabled" tabindex="1"><i class="icon ion-ios-skipbackward"></i></a>
											<a href="javascript:;" class="jp-play" tabindex="1"><i class="icon ion-ios-play"></i></a>
											<a href="javascript:;" class="jp-pause" tabindex="1"><i class="icon ion-ios-pause"></i></a>
											<a href="javascript:;" class="jp-next" tabindex="1"><i class="icon ion-ios-skipforward"></i></a>
											<a href="javascript:;" class="jp-stop" tabindex="1"></a>
										</div>
										<!-- mt-player-progress -->
										<div class="mt-player-progress">
											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div class="jp-play-bar"></div>
												</div>
											</div>
										</div>
										<!-- mt-player-control-bottom -->
										<div class="mt-player-control-bottom">
											<div class="jp-current-time"></div><i class="italic">/</i>
											<div class="jp-duration"></div>
											<div class="jp-controls clearfix">
												<a href="javascript:;" class="jp-mute" tabindex="1" title="mute"><i class="icon ion-volume-low"></i></a>
												<a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute"><i class="icon ion-volume-high"></i></a>
												<a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat"><i class="icon ion-ios-loop"></i></a>
												<a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off"><i class="icon text-primary ion-ios-loop"></i></a>
												<a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume"></a>
												<a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle"><i class="icon ion-ios-shuffle">
													</i></a>
												<a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off"><i class="icon text-primary ion-ios-shuffle">
													</i></a>
												<a href="javascript:;" class="jp-playlist-toggle" tabindex="1" title="Toggle PlayList"><i class="icon ion-ios-list-outline"></i></a>
											</div>
										</div>
										<div class="jp-volume-bar">
											<div class="jp-volume-bar-value"></div>
										</div>
									</div>
								</div>
								<div class="jp-playlist">
									<ul class="jp-playlist-inner">
										<li></li>
									</ul>
								</div>
								<div class="jp-no-solution">
									<span>Update Required</span>
									<a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Vinyl Audio Player -->
			</div>
		</div>
	</div>
</section>
<section class="section section-dark text-left">
	<div class="container">
		<header>
			<div class="col-md-12 padding-bottom">
				<h1 class="text-white text-caps">
					top hits
				</h1>
				<object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-triangle.svg') }}">
					<img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
				</object>
				<object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-circle-lined.svg') }}">
					<img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
				</object>
				<object type="image/svg+xml" width="15" height="15" data="{{asset('izzy/images/svg/shape-triangle-rotated.svg') }}">
					<img src="{{asset('izzy/images/svg/fallback-image.png') }}" alt="…" />
				</object>
			</div>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-md-6 os-animation margin-top" data-os-animation="fadeInUp" data-os-animation-delay="0s">
					<div class="vinyl-container vinyl-audio background-cd-wrap featured">
						<div class="inner">
							<div id="jquery_jplayer_0" class="jp-jplayer"></div>
							<div id="jp_container_0" class="jp-audio">
								<div class="inner">
									<div class="jp-gui jp-interface">
										<div class="jp-controls-wrap">
											<div class="song_title"></div>
											<!-- mt-player-control -->
											<div class="mt-player-control">
												<a href="javascript:;" class="jp-previous disabled" tabindex="1"><i class="icon ion-ios-skipbackward"></i></a>
												<a href="javascript:;" class="jp-play" tabindex="1"><i class="icon ion-ios-play"></i></a>
												<a href="javascript:;" class="jp-pause" tabindex="1"><i class="icon ion-ios-pause"></i></a>
												<a href="javascript:;" class="jp-next" tabindex="1"><i class="icon ion-ios-skipforward"></i></a>
												<a href="javascript:;" class="jp-stop" tabindex="1"></a>
											</div>
											<!-- mt-player-progress -->
											<div class="mt-player-progress">
												<div class="jp-progress">
													<div class="jp-seek-bar">
														<div class="jp-play-bar"></div>
													</div>
												</div>
											</div>
											<!-- mt-player-control-bottom -->
											<div class="mt-player-control-bottom">
												<div class="jp-current-time"></div><i class="italic">/</i>
												<div class="jp-duration"></div>
												<div class="jp-controls clearfix">
													<a href="javascript:;" class="jp-mute" tabindex="1" title="mute"><i class="icon ion-volume-low"></i></a>
													<a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute"><i class="icon ion-volume-high"></i></a>
													<!-- <a href="javascript:;" class="jp-playlist-toggle" tabindex="1" title="Toggle PlayList"><i class="icon ion-ios-list-outline"></i></a> -->
													<a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat"><i class="icon ion-ios-loop"></i></a>
													<a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off"><i class="icon text-primary ion-ios-loop"></i></a>
													<a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume"></a>
													<a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle"><i class="icon ion-ios-shuffle">
														</i></a>
													<a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off"><i class="icon text-primary ion-ios-shuffle">
														</i></a>
												</div>
											</div>
											<div class="jp-volume-bar">
												<div class="jp-volume-bar-value"></div>
											</div>
										</div>
									</div>
									<div class="jp-playlist">
										<ul class="jp-playlist-inner">
											<li></li>
										</ul>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										<a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Vinyl Audio Player -->
				</div>
				<div class="col-md-6 os-animation margin-top" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
					<div class="vinyl-container vinyl-audio background-cd-wrap">
						<div class="inner">
							<div id="jquery_jplayer_1" class="jp-jplayer"></div>
							<div id="jp_container_1" class="jp-audio">
								<div class="inner">
									<div class="jp-gui jp-interface">
										<div class="jp-controls-wrap">
											<div class="song_title"></div>
											<!-- mt-player-control -->
											<div class="mt-player-control">
												<a href="javascript:;" class="jp-previous disabled" tabindex="1"><i class="icon ion-ios-skipbackward"></i></a>
												<a href="javascript:;" class="jp-play" tabindex="1"><i class="icon ion-ios-play"></i></a>
												<a href="javascript:;" class="jp-pause" tabindex="1"><i class="icon ion-ios-pause"></i></a>
												<a href="javascript:;" class="jp-next" tabindex="1"><i class="icon ion-ios-skipforward"></i></a>
												<a href="javascript:;" class="jp-stop" tabindex="1"></a>
											</div>
											<!-- mt-player-progress -->
											<div class="mt-player-progress">
												<div class="jp-progress">
													<div class="jp-seek-bar">
														<div class="jp-play-bar"></div>
													</div>
												</div>
											</div>
											<!-- mt-player-control-bottom -->
											<div class="mt-player-control-bottom">
												<div class="jp-current-time"></div><i class="italic">/</i>
												<div class="jp-duration"></div>
												<div class="jp-controls clearfix">
													<a href="javascript:;" class="jp-mute" tabindex="1" title="mute"><i class="icon ion-volume-low"></i></a>
													<a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute"><i class="icon ion-volume-high"></i></a>
													<!-- <a href="javascript:;" class="jp-playlist-toggle" tabindex="1" title="Toggle PlayList"><i class="icon ion-ios-list-outline"></i></a> -->
													<a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat"><i class="icon ion-ios-loop"></i></a>
													<a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off"><i class="icon text-primary ion-ios-loop"></i></a>
													<a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume"></a>
													<a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle"><i class="icon ion-ios-shuffle">
														</i></a>
													<a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off"><i class="icon text-primary ion-ios-shuffle">
														</i></a>
												</div>
											</div>
											<div class="jp-volume-bar">
												<div class="jp-volume-bar-value"></div>
											</div>
										</div>
									</div>
									<div class="jp-playlist">
										<ul class="jp-playlist-inner">
											<li></li>
										</ul>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										<a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Vinyl Audio Player -->
				</div>
				<div class="col-md-6 os-animation margin-top" data-os-animation="fadeInUp" data-os-animation-delay="0s">
					<div class="vinyl-container vinyl-audio background-cd-wrap">
						<div class="inner">
							<div id="jquery_jplayer_2" class="jp-jplayer"></div>
							<div id="jp_container_2" class="jp-audio">
								<div class="inner">
									<div class="jp-gui jp-interface">
										<div class="jp-controls-wrap">
											<div class="song_title"></div>
											<!-- mt-player-control -->
											<div class="mt-player-control">
												<a href="javascript:;" class="jp-previous disabled" tabindex="1"><i class="icon ion-ios-skipbackward"></i></a>
												<a href="javascript:;" class="jp-play" tabindex="1"><i class="icon ion-ios-play"></i></a>
												<a href="javascript:;" class="jp-pause" tabindex="1"><i class="icon ion-ios-pause"></i></a>
												<a href="javascript:;" class="jp-next" tabindex="1"><i class="icon ion-ios-skipforward"></i></a>
												<a href="javascript:;" class="jp-stop" tabindex="1"></a>
											</div>
											<!-- mt-player-progress -->
											<div class="mt-player-progress">
												<div class="jp-progress">
													<div class="jp-seek-bar">
														<div class="jp-play-bar"></div>
													</div>
												</div>
											</div>
											<!-- mt-player-control-bottom -->
											<div class="mt-player-control-bottom">
												<div class="jp-current-time"></div><i class="italic">/</i>
												<div class="jp-duration"></div>
												<div class="jp-controls clearfix">
													<a href="javascript:;" class="jp-mute" tabindex="1" title="mute"><i class="icon ion-volume-low"></i></a>
													<a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute"><i class="icon ion-volume-high"></i></a>
													<!-- <a href="javascript:;" class="jp-playlist-toggle" tabindex="1" title="Toggle PlayList"><i class="icon ion-ios-list-outline"></i></a> -->
													<a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat"><i class="icon ion-ios-loop"></i></a>
													<a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off"><i class="icon text-primary ion-ios-loop"></i></a>
													<a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume"></a>
													<a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle"><i class="icon ion-ios-shuffle">
														</i></a>
													<a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off"><i class="icon text-primary ion-ios-shuffle">
														</i></a>
												</div>
											</div>
											<div class="jp-volume-bar">
												<div class="jp-volume-bar-value"></div>
											</div>
										</div>
									</div>
									<div class="jp-playlist">
										<ul class="jp-playlist-inner">
											<li></li>
										</ul>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										<a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Vinyl Audio Player -->
				</div>
				<div class="col-md-6 os-animation margin-top" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
					<div class="vinyl-container vinyl-audio background-cd-wrap">
						<div class="inner">
							<div id="jquery_jplayer_3" class="jp-jplayer"></div>
							<div id="jp_container_3" class="jp-audio">
								<div class="inner">
									<div class="jp-gui jp-interface">
										<div class="jp-controls-wrap">
											<div class="song_title"></div>
											<!-- mt-player-control -->
											<div class="mt-player-control">
												<a href="javascript:;" class="jp-previous disabled" tabindex="1"><i class="icon ion-ios-skipbackward"></i></a>
												<a href="javascript:;" class="jp-play" tabindex="1"><i class="icon ion-ios-play"></i></a>
												<a href="javascript:;" class="jp-pause" tabindex="1"><i class="icon ion-ios-pause"></i></a>
												<a href="javascript:;" class="jp-next" tabindex="1"><i class="icon ion-ios-skipforward"></i></a>
												<a href="javascript:;" class="jp-stop" tabindex="1"></a>
											</div>
											<!-- mt-player-progress -->
											<div class="mt-player-progress">
												<div class="jp-progress">
													<div class="jp-seek-bar">
														<div class="jp-play-bar"></div>
													</div>
												</div>
											</div>
											<!-- mt-player-control-bottom -->
											<div class="mt-player-control-bottom">
												<div class="jp-current-time"></div><i class="italic">/</i>
												<div class="jp-duration"></div>
												<div class="jp-controls clearfix">
													<a href="javascript:;" class="jp-mute" tabindex="1" title="mute"><i class="icon ion-volume-low"></i></a>
													<a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute"><i class="icon ion-volume-high"></i></a>
													<!-- <a href="javascript:;" class="jp-playlist-toggle" tabindex="1" title="Toggle PlayList"><i class="icon ion-ios-list-outline"></i></a> -->
													<a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat"><i class="icon ion-ios-loop"></i></a>
													<a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off"><i class="icon text-primary ion-ios-loop"></i></a>
													<a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume"></a>
													<a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle"><i class="icon ion-ios-shuffle">
														</i></a>
													<a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off"><i class="icon text-primary ion-ios-shuffle">
														</i></a>
												</div>
											</div>
											<div class="jp-volume-bar">
												<div class="jp-volume-bar-value"></div>
											</div>
										</div>
									</div>
									<div class="jp-playlist">
										<ul class="jp-playlist-inner">
											<li></li>
										</ul>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										<a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Vinyl Audio Player -->
				</div>
				<div class="col-md-6 os-animation margin-top" data-os-animation="fadeInUp" data-os-animation-delay="0s">
					<div class="vinyl-container vinyl-audio background-cd-wrap">
						<div class="inner">
							<div id="jquery_jplayer_4" class="jp-jplayer"></div>
							<div id="jp_container_4" class="jp-audio">
								<div class="inner">
									<div class="jp-gui jp-interface">
										<div class="jp-controls-wrap">
											<div class="song_title"></div>
											<!-- mt-player-control -->
											<div class="mt-player-control">
												<a href="javascript:;" class="jp-previous disabled" tabindex="1"><i class="icon ion-ios-skipbackward"></i></a>
												<a href="javascript:;" class="jp-play" tabindex="1"><i class="icon ion-ios-play"></i></a>
												<a href="javascript:;" class="jp-pause" tabindex="1"><i class="icon ion-ios-pause"></i></a>
												<a href="javascript:;" class="jp-next" tabindex="1"><i class="icon ion-ios-skipforward"></i></a>
												<a href="javascript:;" class="jp-stop" tabindex="1"></a>
											</div>
											<!-- mt-player-progress -->
											<div class="mt-player-progress">
												<div class="jp-progress">
													<div class="jp-seek-bar">
														<div class="jp-play-bar"></div>
													</div>
												</div>
											</div>
											<!-- mt-player-control-bottom -->
											<div class="mt-player-control-bottom">
												<div class="jp-current-time"></div><i class="italic">/</i>
												<div class="jp-duration"></div>
												<div class="jp-controls clearfix">
													<a href="javascript:;" class="jp-mute" tabindex="1" title="mute"><i class="icon ion-volume-low"></i></a>
													<a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute"><i class="icon ion-volume-high"></i></a>
													<!-- <a href="javascript:;" class="jp-playlist-toggle" tabindex="1" title="Toggle PlayList"><i class="icon ion-ios-list-outline"></i></a> -->
													<a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat"><i class="icon ion-ios-loop"></i></a>
													<a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off"><i class="icon text-primary ion-ios-loop"></i></a>
													<a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume"></a>
													<a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle"><i class="icon ion-ios-shuffle">
														</i></a>
													<a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off"><i class="icon text-primary ion-ios-shuffle">
														</i></a>
												</div>
											</div>
											<div class="jp-volume-bar">
												<div class="jp-volume-bar-value"></div>
											</div>
										</div>
									</div>
									<div class="jp-playlist">
										<ul class="jp-playlist-inner">
											<li></li>
										</ul>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										<a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Vinyl Audio Player -->
				</div>
				<div class="col-md-6 os-animation margin-top" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
					<div class="vinyl-container vinyl-audio background-cd-wrap">
						<div class="inner">
							<div id="jquery_jplayer_5" class="jp-jplayer"></div>
							<div id="jp_container_5" class="jp-audio">
								<div class="inner">
									<div class="jp-gui jp-interface">
										<div class="jp-controls-wrap">
											<div class="song_title"></div>
											<!-- mt-player-control -->
											<div class="mt-player-control">
												<a href="javascript:;" class="jp-previous disabled" tabindex="1"><i class="icon ion-ios-skipbackward"></i></a>
												<a href="javascript:;" class="jp-play" tabindex="1"><i class="icon ion-ios-play"></i></a>
												<a href="javascript:;" class="jp-pause" tabindex="1"><i class="icon ion-ios-pause"></i></a>
												<a href="javascript:;" class="jp-next" tabindex="1"><i class="icon ion-ios-skipforward"></i></a>
												<a href="javascript:;" class="jp-stop" tabindex="1"></a>
											</div>
											<!-- mt-player-progress -->
											<div class="mt-player-progress">
												<div class="jp-progress">
													<div class="jp-seek-bar">
														<div class="jp-play-bar"></div>
													</div>
												</div>
											</div>
											<!-- mt-player-control-bottom -->
											<div class="mt-player-control-bottom">
												<div class="jp-current-time"></div><i class="italic">/</i>
												<div class="jp-duration"></div>
												<div class="jp-controls clearfix">
													<a href="javascript:;" class="jp-mute" tabindex="1" title="mute"><i class="icon ion-volume-low"></i></a>
													<a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute"><i class="icon ion-volume-high"></i></a>
													<!-- <a href="javascript:;" class="jp-playlist-toggle" tabindex="1" title="Toggle PlayList"><i class="icon ion-ios-list-outline"></i></a> -->
													<a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat"><i class="icon ion-ios-loop"></i></a>
													<a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off"><i class="icon text-primary ion-ios-loop"></i></a>
													<a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume"></a>
													<a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle"><i class="icon ion-ios-shuffle">
														</i></a>
													<a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off"><i class="icon text-primary ion-ios-shuffle">
														</i></a>
												</div>
											</div>
											<div class="jp-volume-bar">
												<div class="jp-volume-bar-value"></div>
											</div>
										</div>
									</div>
									<div class="jp-playlist">
										<ul class="jp-playlist-inner">
											<li></li>
										</ul>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										<a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Vinyl Audio Player -->
				</div>
				<div class="col-md-6 os-animation margin-top" data-os-animation="fadeInUp" data-os-animation-delay="0s">
					<div class="vinyl-container vinyl-audio background-cd-wrap">
						<div class="inner">
							<div id="jquery_jplayer_6" class="jp-jplayer"></div>
							<div id="jp_container_6" class="jp-audio">
								<div class="inner">
									<div class="jp-gui jp-interface">
										<div class="jp-controls-wrap">
											<div class="song_title"></div>
											<!-- mt-player-control -->
											<div class="mt-player-control">
												<a href="javascript:;" class="jp-previous disabled" tabindex="1"><i class="icon ion-ios-skipbackward"></i></a>
												<a href="javascript:;" class="jp-play" tabindex="1"><i class="icon ion-ios-play"></i></a>
												<a href="javascript:;" class="jp-pause" tabindex="1"><i class="icon ion-ios-pause"></i></a>
												<a href="javascript:;" class="jp-next" tabindex="1"><i class="icon ion-ios-skipforward"></i></a>
												<a href="javascript:;" class="jp-stop" tabindex="1"></a>
											</div>
											<!-- mt-player-progress -->
											<div class="mt-player-progress">
												<div class="jp-progress">
													<div class="jp-seek-bar">
														<div class="jp-play-bar"></div>
													</div>
												</div>
											</div>
											<!-- mt-player-control-bottom -->
											<div class="mt-player-control-bottom">
												<div class="jp-current-time"></div><i class="italic">/</i>
												<div class="jp-duration"></div>
												<div class="jp-controls clearfix">
													<a href="javascript:;" class="jp-mute" tabindex="1" title="mute"><i class="icon ion-volume-low"></i></a>
													<a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute"><i class="icon ion-volume-high"></i></a>
													<!-- <a href="javascript:;" class="jp-playlist-toggle" tabindex="1" title="Toggle PlayList"><i class="icon ion-ios-list-outline"></i></a> -->
													<a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat"><i class="icon ion-ios-loop"></i></a>
													<a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off"><i class="icon text-primary ion-ios-loop"></i></a>
													<a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume"></a>
													<a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle"><i class="icon ion-ios-shuffle">
														</i></a>
													<a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off"><i class="icon text-primary ion-ios-shuffle">
														</i></a>
												</div>
											</div>
											<div class="jp-volume-bar">
												<div class="jp-volume-bar-value"></div>
											</div>
										</div>
									</div>
									<div class="jp-playlist">
										<ul class="jp-playlist-inner">
											<li></li>
										</ul>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										<a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Vinyl Audio Player -->
				</div>
				<div class="col-md-6 os-animation margin-top" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
					<div class="vinyl-container vinyl-audio background-cd-wrap">
						<div class="inner">
							<div id="jquery_jplayer_7" class="jp-jplayer"></div>
							<div id="jp_container_7" class="jp-audio">
								<div class="inner">
									<div class="jp-gui jp-interface">
										<div class="jp-controls-wrap">
											<div class="song_title"></div>
											<!-- mt-player-control -->
											<div class="mt-player-control">
												<a href="javascript:;" class="jp-previous disabled" tabindex="1"><i class="icon ion-ios-skipbackward"></i></a>
												<a href="javascript:;" class="jp-play" tabindex="1"><i class="icon ion-ios-play"></i></a>
												<a href="javascript:;" class="jp-pause" tabindex="1"><i class="icon ion-ios-pause"></i></a>
												<a href="javascript:;" class="jp-next" tabindex="1"><i class="icon ion-ios-skipforward"></i></a>
												<a href="javascript:;" class="jp-stop" tabindex="1"></a>
											</div>
											<!-- mt-player-progress -->
											<div class="mt-player-progress">
												<div class="jp-progress">
													<div class="jp-seek-bar">
														<div class="jp-play-bar"></div>
													</div>
												</div>
											</div>
											<!-- mt-player-control-bottom -->
											<div class="mt-player-control-bottom">
												<div class="jp-current-time"></div><i class="italic">/</i>
												<div class="jp-duration"></div>
												<div class="jp-controls clearfix">
													<a href="javascript:;" class="jp-mute" tabindex="1" title="mute"><i class="icon ion-volume-low"></i></a>
													<a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute"><i class="icon ion-volume-high"></i></a>
													<!-- <a href="javascript:;" class="jp-playlist-toggle" tabindex="1" title="Toggle PlayList"><i class="icon ion-ios-list-outline"></i></a> -->
													<a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat"><i class="icon ion-ios-loop"></i></a>
													<a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off"><i class="icon text-primary ion-ios-loop"></i></a>
													<a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume"></a>
													<a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle"><i class="icon ion-ios-shuffle">
														</i></a>
													<a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off"><i class="icon text-primary ion-ios-shuffle">
														</i></a>
												</div>
											</div>
											<div class="jp-volume-bar">
												<div class="jp-volume-bar-value"></div>
											</div>
										</div>
									</div>
									<div class="jp-playlist">
										<ul class="jp-playlist-inner">
											<li></li>
										</ul>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										<a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Vinyl Audio Player -->
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
