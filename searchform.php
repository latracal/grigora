<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-box s-hide" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field" id="search" name="search" value="<?php the_search_query(); ?>"
        placeholder="<?php _e( 'Search Text', 'grg' ); ?>">
    <button class="search-icon"><svg width="27" height="27" viewBox="0 0 27 27" fill="none"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect width="27" height="27" fill="url(#pattern0)" />
            <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_2_112" transform="scale(0.0111111)" />
                </pattern>
                <image id="image0_2_112" width="90" height="90"
                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAACn0lEQVR4nO2cPW4TQRiGHxDCKQwFdCYlDRQoJXSIY3CBNEC6uIQK6DkDB+AAtIRUgYYGynAB4gJoTGEXCfJmvevvZ3b8PtI0lubVt49G49nZ2QUhhBBCCCGEEEIIEcEOcAAcAzNgntRmwGfgBTByveIEdoGv5Mltal+WtVXBDmVKPi+7ipF9QL7Mtvbc7eoDOSZfZFs76npRV7p2COAMGGcX0cIMuNGlQ4mi59kFrEknd1e9qhAXkeggJDoIiQ5CooOQ6CAkOgiJDkKig5DoICQ6iNJEd9qoaeEvcAhMlm26/E0AD7HbyjxckT81zB8077ATMVmRPzHMHyx7wB/8RWy16D3gFNunIE1snegx8IjFdGE5kqsTXcq5i6pFl3ruoljRfZ4Z7rAYxQ969I2k6dqsRqP7M8N9ypdcHH1EPzWvYgvoM3UM4dwFFDZ19BEdurTZgKJEl7apVC0SHURpol9lF1ASXjcYL43zvet3x1OyZb53/e54SrbM967fHU/Jlvne9bvjKdky37t+dzwlW+WfNmTfNMofhOi2JZyFhNcN2feM8osXvc46eZP8n8Ab4HpD9v6G+YMQXcLNyEcqF33ZnBzFY+wkFym6BMm3gO8kio7Y68h+xe428AG4m1xHZ4Y0Pz8BfqxZ4+CnjkjZY+A+i9WF5R/foETPgbfO+ZHNnU0LbJOdLbAa0W2yswVWJfoy2dkCqxPdJDtbYJWiV8nOFlit6P9lZwusWvR52dkCXURf69rBkSnwO7sIL2o+EuaNjoSViEQH0Uf0zLyK4fGra4c+or/16FMbnR30Ef2+R5/aCHEwYvEh1Ox1bFY7ofkpuzm7bKfsE+COgb9OjFh8dfaIxXst2RK82hnwCXhG4EgWQgghhBBCCCGEKJl/BHMEhIYUUlYAAAAASUVORK5CYII=" />
            </defs>
        </svg>
    </button>
</form>