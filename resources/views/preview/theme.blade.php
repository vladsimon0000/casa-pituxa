@vite('resources/css/preview.css')
<div class="tw-px-4 tw-py-6 tw-rounded-xl tw-bg-base-100">
    <div class="tw-text-primary tw-font-logo tw-text-6xl">
        {{ config('app.name') }}
    </div>
    
    <div class="tw-mt-6 tw-grid tw-grid-cols-3">

        <button type="button" class="bg-primary hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
            Default
        </button>

        <button type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
            Dark
        </button>

        <button type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
            Green
        </button>

        <button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
            Red
        </button>

        <button type="button" class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
            Yellow
        </button>

        <button type="button" class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">
            Purple
        </button>

    </div>

	<div
		class="rounded-box bg-base-100 border-base-content/5 text-base-content not-prose grid gap-3 border p-6"
		data-theme="mytheme"
		data-svelte-h="svelte-1stblde"
		style="
			--p: 120 58% 9%;
			--s: 338 25% 13%;
			--a: 22 74% 56%;
			--n: 330 6% 50%;
			--b1: 66 8% 53%;
			--in: 208 59% 78%;
			--su: 174 76% 63%;
			--wa: 44 91% 42%;
			--er: 355 97% 62%;
			--pf: 0 0% 0%;
			--sf: 0 0% 0%;
			--af: 22 74% 36%;
			--nf: 330 7% 30%;
			--b2: 67 8% 43%;
			--b3: 65 8% 33%;
			--bc: 66 5% 12%;
			--pc: 115 7% 80%;
			--sc: 340 5% 81%;
			--ac: 22 42% 13%;
			--nc: 331 7% 89%;
			--inc: 209 12% 16%;
			--suc: 172 26% 14%;
			--wac: 40 50% 11%;
			--erc: 6 100% 93%;
		"
	>
		<div class="grid grid-cols-2 gap-2 md:grid-cols-4">
			<button class="btn">Default</button> <button class="btn btn-primary">Primary</button> <button class="btn btn-secondary">Secondary</button>
			<button class="btn btn-accent">Accent</button> <button class="btn btn-info">Info</button> <button class="btn btn-success">Success</button>
			<button class="btn btn-warning">Warning</button> <button class="btn btn-error">Error</button>
		</div>
		<div class="grid grid-cols-2 place-items-center gap-2 md:grid-cols-4">
			<span class="badge">Default</span> <span class="badge badge-primary">Primary</span> <span class="badge badge-secondary">Secondary</span>
			<span class="badge badge-accent">Accent</span> <span class="badge badge-info">Info</span> <span class="badge badge-success">Success</span>
			<span class="badge badge-warning">Warning</span> <span class="badge badge-error">Error</span>
		</div>
		<div class="flex flex-col gap-3">
			<div class="flex flex-col gap-3 md:flex-row">
				<div class="md:w-1/2">
					<div class="tabs">
						<button class="tab tab-lifted">Tab</button> <button class="tab tab-lifted tab-active">Tab</button> <button class="tab tab-lifted">Tab</button>
					</div>
					<div class="flex flex-col">
						<span class="link">I'm a simple link</span> <span class="link link-primary">I'm a simple link</span>
						<span class="link link-secondary">I'm a simple link</span> <span class="link link-accent">I'm a simple link</span>
					</div>
				</div>
				<div class="flex flex-col gap-3 md:w-1/2">
					<progress value="20" max="100" class="progress">Default</progress>
					<progress value="25" max="100" class="progress progress-primary">Primary</progress>
					<progress value="30" max="100" class="progress progress-secondary">Secondary</progress>
					<progress value="40" max="100" class="progress progress-accent">Accent</progress>
					<progress value="45" max="100" class="progress progress-info">Info</progress>
					<progress value="55" max="100" class="progress progress-success">Success</progress>
					<progress value="70" max="100" class="progress progress-warning">Warning</progress>
					<progress value="90" max="100" class="progress progress-error">Error</progress>
				</div>
			</div>
			<div class="flex flex-col gap-3 md:flex-row">
				<div class="stats bg-base-300 border-base-300 border md:w-1/2">
					<div class="stat">
						<div class="stat-title">Total Page Views</div>
						<div class="stat-value">89,400</div>
						<div class="stat-desc">21% more than last month</div>
					</div>
				</div>
				<div class="flex flex-wrap items-center justify-center gap-3 md:w-1/2">
					<div class="radial-progress" style="--value: 60; --size: 3.5rem;">60%</div>
					<div class="radial-progress" style="--value: 75; --size: 3.5rem;">75%</div>
					<div class="radial-progress" style="--value: 90; --size: 3.5rem;">90%</div>
				</div>
			</div>
		</div>
		<div class="flex flex-col gap-3">
			<div class="flex flex-col gap-3 md:flex-row">
				<div class="md:w-1/2">
					<div>
						<input type="checkbox" class="toggle" checked="" /> <input type="checkbox" class="toggle toggle-primary" checked="" />
						<input type="checkbox" class="toggle toggle-secondary" checked="" /> <input type="checkbox" class="toggle toggle-accent" checked="" />
					</div>
					<div>
						<input type="checkbox" class="checkbox" checked="" /> <input type="checkbox" class="checkbox checkbox-primary" checked="" />
						<input type="checkbox" class="checkbox checkbox-secondary" checked="" /> <input type="checkbox" class="checkbox checkbox-accent" checked="" />
					</div>
					<div>
						<input type="radio" name="radio-1" class="radio" checked="" /> <input type="radio" name="radio-1" class="radio radio-primary" />
						<input type="radio" name="radio-1" class="radio radio-secondary" /> <input type="radio" name="radio-1" class="radio radio-accent" />
					</div>
				</div>
				<div class="md:w-1/2">
					<input type="range" min="0" max="100" value="90" class="range range-xs" />
					<input type="range" min="0" max="100" value="70" class="range range-xs range-primary" />
					<input type="range" min="0" max="100" value="50" class="range range-xs range-secondary" />
					<input type="range" min="0" max="100" value="40" class="range range-xs range-accent" />
				</div>
			</div>
			<div class="flex flex-col gap-3 md:flex-row">
				<div class="flex flex-col gap-3 md:w-1/2">
					<input type="text" placeholder="Default" class="input input-bordered w-full" />
					<input type="text" placeholder="Primary" class="input input-primary input-bordered w-full" />
					<input type="text" placeholder="Secondary" class="input input-secondary input-bordered w-full" />
					<input type="text" placeholder="Accent" class="input input-accent input-bordered w-full" />
				</div>
				<div class="flex flex-col gap-3 md:w-1/2">
					<input type="text" placeholder="Info" class="input input-info input-bordered w-full" />
					<input type="text" placeholder="Success" class="input input-success input-bordered w-full" />
					<input type="text" placeholder="Warning" class="input input-warning input-bordered w-full" />
					<input type="text" placeholder="Error" class="input input-error input-bordered w-full" />
				</div>
			</div>
			<div class="navbar bg-neutral text-neutral-content rounded-box">
				<div class="flex-none">
					<button class="btn btn-square btn-ghost">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
				</div>
				<div class="flex-1"><button class="btn btn-ghost text-xl normal-case">daisyUI</button></div>
			</div>
			<div class="flex gap-3">
				<div class="flex flex-grow flex-col gap-3">
					<div class="text-4xl font-bold">Text Size 1</div>
					<div class="text-3xl font-bold">Text Size 2</div>
					<div class="text-2xl font-bold">Text Size 3</div>
					<div class="text-xl font-bold">Text Size 4</div>
					<div class="text-lg font-bold">Text Size 5</div>
					<div class="text-sm font-bold">Text Size 6</div>
					<div class="text-xs font-bold">Text Size 7</div>
				</div>
				<ul class="steps steps-vertical">
					<li class="step step-primary">Step 1</li>
					<li class="step step-primary">Step 2</li>
					<li class="step">Step 3</li>
					<li class="step">Step 4</li>
				</ul>
			</div>
		</div>
		<div class="flex flex-col gap-3">
			<div class="alert">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info h-6 w-6 flex-shrink-0">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
				</svg>
				<span>12 unread messages. Tap to see.</span>
			</div>
			<div class="alert alert-info">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 w-6 flex-shrink-0 stroke-current">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
				</svg>
				<span>New software update available.</span>
			</div>
			<div class="alert alert-success">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
				</svg>
				<span>Your purchase has been confirmed!</span>
			</div>
			<div class="alert alert-warning">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
					<path
						stroke-linecap="round"
						stroke-linejoin="round"
						stroke-width="2"
						d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"
					></path>
				</svg>
				<span>Warning: Invalid email address!</span>
			</div>
			<div class="alert alert-error">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
				</svg>
				<span>Error! Task failed successfully.</span>
			</div>
		</div>
	</div>
</div>
