@aware(['page'])

@props([
	'title',
	'title_extension',
	'paragraph',
	'label',
	'image',
])

<div class="night">
	<section class="section section--home section--home--centred">

        @if($image)
            <figure class="home-img__wrp">
                
                <x-curator-glider
                    :media="$image ?? ''" 
                    sizes="(max-width: 767px) 100vw, (max-width: 991px) 42vw, (max-width: 1279px) 360px, 100vw"
                    class="home-img"
                />

                <div class="home-img__height"></div>
            </figure>
        @endif

		<div slide-up="" class="h-section-content h-section-content--section5">
			<h2 text-split="" class="h-section-content__h2 h-section-content__h2--section5">
				
                <span class="non-breaking">
                    {{ $title ?? ''}}
                </span>

                <span class="align-right">
                    {{ $title_extension ?? ''}}
                </span>
			</h2>

			<p class="h-section-content__p">
                {{ $paragraph ?? ''}}
			</p>

			<div class="btn__wrp">
				<a href="/menus/drinks" class="btn w-inline-block">
					<div class="btn__txt">Drinks menu</div>
					<div class="btn__fill">
						<div class="btn__fill__txt">Drinks menu</div>
					</div>
				</a>
			</div>
		</div>
	</section>
</div>
