@aware(['page'])

@props([
	'title',
	'title_extension',
	'paragraph',
	'label',
	'image',
	'alternative',
	'accent',
])

<section class="min-h-[100vh] grid">
    <div class=" my-auto flex justify-center gap-8 px-12 items-center">

        <div class="h-full max-w-[50%] m-0 flex flex-col gap-6">

            <h2 class="text-6xl">
                <p class="text-left" style="text-align-last: right">
                    {{ $title }}
                </p>
            </h2>
    
            <p class="text-center text-md tracking-tighter">
                {{ $paragraph }}
            </p>
    
            <div>
                <a href="/menus/drinks" class="border-primary border-2 bg-transparent text-primary rounded-lg py-2 px-6 no-underline w-inline-block">
                    {{ $label }}
                </a>
            </div>
        </div>
    
        <figure 
            class="w-[50%] h-auto relative m-0 overflow-hidden rounded-2xl shadow"
            @class([
                '-order-1' => $alternative
            ])
        >
    
            <x-curator-glider
                :media="$image" 
                sizes="(max-width: 767px) 100vw, (max-width: 991px) 38vw, (max-width: 1279px) 360px, (max-width: 1919px) 28vw, 540px"
                class="home-img "
            />
    
            <div class="home-img__height"></div>
    
        </figure>

        @if($accent)
            <div class="bg-accent"
                style="
                z-index: -10;
                width: 20vw;
                height: 20vw;
                max-height: 330px;
                max-width: 330px;
                filter: contrast(120%)blur(50px);
                border-radius: 50%;
                margin-top: -30vw;
                position: absolute;
                left: 30vw;
            "></div>
        @endif
    </div>
</section>
