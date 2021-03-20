<div class="stickyfooter">
	<div class="vbry-player">
		<div class="d-flex justify-content-between">
			<div class="vbry-audio d-flex my-auto flex-grow-1">
				<div class="vbry-controls d-flex my-auto">
					<div class="my-auto">
						<a href="#" class="prev mx-2">
							<ion-icon name="play-skip-back-sharp"></ion-icon>
							<span class="sr-only">Back</span>
						</a>
					</div>
					<div class="my-auto">
						<a href="#" class="pause-play mx-2" id="mainPLayer">
							<div class="pie-timer">
								<div class="timer first-half">
									<div class="left-mask"></div>
									<div class="right-half"></div>
									<div class="left-half spinner"></div>
								</div>
								<div class="disk"></div>
							</div>
							<ion-icon name="play-sharp"></ion-icon>
							<ion-icon name="pause-sharp"></ion-icon>
							<span class="sr-only">Play/Pause</span>
						</a>
					</div>
					<div class="my-auto">
						<a href="#" class="next mx-2">
							<ion-icon name="play-skip-forward-sharp"></ion-icon>
							<span class="sr-only">forward</span>
						</a>
					</div>
				</div>
				<div class="audio-meta my-auto mx-4">
					<span class="title">Revolution Countdown Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime repellat quos accusamus quae exercitationem quisquam, quidem nobis at, delectus mollitia quibusdam atque voluptatum porro dolore possimus suscipit. Similique, distinctio, excepturi!</span>
					<span class="sub">Cinematic</span>
				</div>
				<div class="vbry-playback my-auto d-flex flex-grow-1">
					<div class="timestamp my-auto">
						<span>0:00</span>
					</div>
					<div class="vbry-wave flex-grow-1">
						<div id="waveform"></div>
					</div>
					<div class="length my-auto">
						<span>0:00</span>
					</div>
				</div>
				<div class="vrby-vol my-auto d-flex">
					<div class="vrby-mute my-auto mx-2">
						<a href="#" class="volume high" id="volumeCtr">
							<i data-feather="volume"></i>
							<i data-feather="volume-1"></i>
							<i data-feather="volume-2"></i>
							<i data-feather="volume-x"></i>
							<span class="sr-only">Mute</span>
						</a>
					</div>
					<div class="volslider my-auto mx-2 px-3">
						<input type="range" min="1" max="100" value="80" class="slider" id="volRange">
					</div>
				</div>
			</div>
			<div class="dl my-auto mx-2">
				<a href="#" class="dl-link">
					<i data-feather="download"></i>
					<span class="sr-only">Download</span>
				</a>
			</div>
		</div>
	</div>
</div>