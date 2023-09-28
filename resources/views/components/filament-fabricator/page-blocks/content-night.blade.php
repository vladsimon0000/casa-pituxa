@aware(['page'])

@props([
	'title',
	'title_extension',
	'paragraph',
	'label',
	'image',
])

<div class="night">
    <section class="section section--home">

        @if($image)
            <figure class="home-img__wrp home-img__wrp--section4 home-img__wrp--section4--mobile">

                <x-curator-glider
                    :media=" $image ?? ''" 
                    sizes="(max-width: 767px) 100vw, (max-width: 991px) 42vw, (max-width: 1279px) 360px, 100vw"
                    class="home-img"
                />

                <div class="home-img__height"></div>

            </figure>
        @endif

        <div slide-up="" class="h-section-content__wrp">

            @if($image)
                <figure class="home-img__wrp home-img__wrp--section4">

                    <x-curator-glider
                        :media=" $image ?? ''" 
                        sizes="(max-width: 1279px) 100vw, 28vw"
                        class="home-img"
                    />

                    <div class="home-img__height"></div>

                </figure>
            @endif

            <h2 text-split="" class="h-section-content__h2 h-section-content__h2--section4">
                
                <span class="non-breaking">
                    {{ $title ?? ''}}
                </span>

                <span class="align-right">
                    {{ $title_extension ?? ''}}
                </span>
            </h2>

            <div class="h-section-content__p h-section-content__p--section4">

                <p>
                    {{ $paragraph ?? ''}}
                </p>

                <div class="btn__wrp">
                    <a href="#" class="btn w-inline-block">
                        <div class="btn__txt">
                            {{ $label ?? ''}}
                        </div>
    
                        <div class="btn__fill">
                            <div class="btn__fill__txt">
                                {{ $label ?? ''}}
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

