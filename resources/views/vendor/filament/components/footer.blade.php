@if (config('filament.layout.footer.should_show_logo'))
    <div class="flex items-center justify-center filament-footer">
        <a
            href="https://apployee.ivm.at"
            target="_blank"
            rel="noopener noreferrer"
            class="text-gray-300 hover:text-primary-500 transition"
        >
            <svg role="img" aria-label="IVM" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 303 91" class="fill-current w-24">
                <g clip-path="url(#clip0)" fill="#FFFFFF">
                    <polygon class="st0" points="61.9,102.8 26.2,0.2 49.4,0.2 71.3,76.8 93.4,0.2 117.3,0.2 82.7,102.8 	"/>
                    <polygon class="st0" points="141.7,102.8 141.7,30.2 162.5,102.8 185.1,102.8 206,30.4 206,102.8 226.8,102.8 226.8,0.2 194.7,0.2 
                        173.9,76.9 152.9,0.2 121.8,0.2 121.8,102.8 	"/>
                    <rect x="0.2" y="0.2" class="st0" width="21.5" height="102.6"/>
                </g>
            </svg>
    </a>
    </div>
@endif
