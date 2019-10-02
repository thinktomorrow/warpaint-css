<section class="stack-l" id="getting-started">

    <h2>Getting started</h2>

    <section class="stack-l">
        <h3>Installation</h3>

        <p>Install warpaint via npm</p>
        <pre><code class="bash">$ npm install warpaint --save-dev</code></pre>

        <p>Or download from github:</p>
        <div>
            <a download class="btn" href="https://github.com/thinktomorrow/warpaint/archive/0.0.10.zip">Full zip</a>
            <a download class="btn" href="https://raw.githubusercontent.com/thinktomorrow/warpaint/0.0.10/dist/warpaint.min.css">warpaint.min.css (17 kb)</a>
        </div>

    </section>

    <section class="stack-l">
        <h3>Stability</h3>
        <p>Current stable version is <a href="https://github.com/thinktomorrow/warpaint/tree/0.0.10">0.0.10</a>.</p>
        <p> Out of the box, warpaint is supported in all modern browsers: Chrome, Firefox, Safari, Edge and
            Opera. There is a fairly good support for IE10+ and most functionality should be working.
            Since it relies on flexbox there is limited compatibility with IE9.
        </p>
    </section>
</section>

<section class="stack-l" id="custom-build">
    <h2>Customize</h2>

    <p>You can compile the sass files in your own project for full customization.</p>
    <ol>
        <li>Pull the package into your application via npm</li>
        <li>
            Import the warpaint source into your own sass file. The path is <code>/node_modules/warpaint/src/sass/warpaint.scss</code>.
        </li>
        <li>
            Define your custom warpaint variables before the import statement. <a href="#custom-settings">See below</a> for an overview of the available settings.
        </li>
        <li>Here's a small example code:
        </li>
    </ol>

    <pre><code class="less">// Your custom variables (define these before importing warpaint)
$base-font-size: 14px;
$grid-columns: 10;

// Import warpaint source
@import '../node_modules/warpaint/src/sass/warpaint';

// Your application source
...</code></pre>
</section>

<section class="stack-l" id="custom-settings">
    <h2>Settings</h2>

    <p>All settings can be found in the <code>/src/sass/settings.scss</code> file. This file contains all the customisable features and you can change these to your liking.

    </p>
    <p>At our company we try to use these values across all our component files. This keeps our layouts, margins and paddings more consistent.</p>

    <section class="stack-l">
        <h3>Container margin</h3>
        <p>By default the container has an equal margin to the left and right. These margins are responsive
            depending on the viewport width. Here you can define the maximum value.</p>
        <pre><code class="less">$container-margin: 16%;</code></pre>
    </section>
    <section class="stack-l">
        <h3>Grid columns</h3>
        <p>By default the grid consists of 12 blocks but you can set this whatever you like. If you feel
            experimental, we suggest some good alternatives such as a 10 or 15 block division.</p>
        <pre><code class="less">$grid-columns: 12;</code></pre>
    </section>
    <section class="stack-l">
        <h3>Base font size</h3>
        <p>The default font-size. This is also the value on which all font based spacings and sizings are
            measured upon. By default this is set to 0.875em. Depending on your font family of choice this
            should be changed to a proper default.</p>
        <pre><code class="less">$base-font-size:  0.875em;</code></pre>
    </section>
    <section class="stack-l">
        <h3>Size ratios</h3>
        <p>Based upon the base font size, here we set the font-size ratios for the different screen sizes. These
            values are carefully selected to allow for a responsive typography. Important since font-size
            determines the sizing of a lot of components</p>
        <pre><code class="less">$ratio-xs: 0.8;
$ratio-s: 0.9;
$ratio-m: 1.0;
$ratio-l: 1.1;
$ratio-xl: 1.2;
$ratio-xxl: 1.4;</code></pre>
    </section>
</section>
<section class="stack-l">
    <h3>Spacing</h3>
    <p>Based upon the base font size, These values determine the spacing of elements like margins and paddings.
        These settings are the base of all responsive sizings.</p>
    <pre><code class="less">$space-xs: 0.375rem;
$space-s: 0.75rem;
$space-m: 1.5rem;
$space-l: 3rem;
$space-xl: 6rem;</code></pre>

</section>