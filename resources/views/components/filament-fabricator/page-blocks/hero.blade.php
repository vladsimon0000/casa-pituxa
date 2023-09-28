@aware(['page'])

@props([
	'title',
	'title_extension',
	'paragraph',
	'label',
	'image',
])

<section class="section section--home section--home--hero">

	<div class="hero-content">
		
		<h1 text-split="" class="hero-content__heading">
			
			<span>
				{{ $title ?? '' }}
			</span>

			<span class="align-right">
				&#x27;{{ $title_extension ?? '' }}
			</span>

		</h1>

		<p class="hero-content__p">
			{{ $paragraph ?? '' }}
		</p>

		<div class="btn__wrp--hero">
			<a reservation="" href="#" class="btn w-inline-block">

				<div class="btn__txt">
					{{ $label ?? '' }}
				</div>

				<div class="btn__fill">
					<div class="btn__fill__txt">
						{{ $label ?? '' }}
					</div>
				</div>

			</a>
		</div>

	</div>

	@if($image)
		<figure class="k-fern-img__wrp">

			<x-curator-glider
				:media="$image ?? ''" 
				sizes="(max-width: 479px) 94vw, (max-width: 767px) 87vw, (max-width: 991px) 42vw, (max-width: 1279px) 35vw, (max-width: 1919px) 34vw, 512px"
				class="k-fern-img"
			/>

			<div style="opacity: 0;" class="sun sun--mobile"></div>

		</figure>
	@endif
	
	<div class="sun sun--main"></div>
</section>
