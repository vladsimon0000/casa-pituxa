@aware(['page'])

@props([
	'image',
])

@if($image)
    <section>
        <figure class="fullscrn-img__wrp">
            <x-curator-glider
                :media="$image" 
                loading="eager"
                sizes="(max-width: 479px) 94vw, (max-width: 767px) 87vw, (max-width: 991px) 42vw, (max-width: 1279px) 35vw, (max-width: 1919px) 34vw, 512px"
                sizes="100vw"
                class="fullscrn-img"
            />
        </figure>
    </section>
@endif