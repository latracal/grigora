<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-box s-hide" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field" id="search" name="search" value="<?php the_search_query(); ?>"
        placeholder="<?php _e( 'Search Text', 'grg' ); ?>">
    <button class="search-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">
            <defs>
            </defs>
            <g transform="translate(128 128) scale(0.72 0.72)" style="">
                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                    transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)">
                    <path
                        d="M 24.25 90 c -0.896 0 -1.792 -0.342 -2.475 -1.025 c -1.367 -1.366 -1.367 -3.583 0 -4.949 L 60.8 45 L 21.775 5.975 c -1.367 -1.367 -1.367 -3.583 0 -4.95 c 1.367 -1.366 3.583 -1.366 4.95 0 l 41.5 41.5 c 1.367 1.366 1.367 3.583 0 4.949 l -41.5 41.5 C 26.042 89.658 25.146 90 24.25 90 z"
                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                        transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                </g>
            </g>
        </svg>
    </button>
</form>