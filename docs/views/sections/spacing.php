<section id="spacing">
    <h2>Spacing</h2>

    <p>Warpaint provides margin and padding utility classes. the spacing of elements inside their parent container (margins) and spacing inside the element (paddings).</p>
    <p>In general, these classes will work as expected. In the case your project's css contains nested css rules, there's a chance the latter will override the given utility classes.</p>

<section>
    <h3 id="spacing-stack">.stack</h3>

    <p>Handle vertical margins with <code>.stack</code>.
        Stack adds a top and bottom margin to an element. Give some vertical breathing room to page elements.
    </p>

    <div class="dummy zebra">
        <div class="container">
            <div class="row">
                <div class="column">...</div>
            </div>
            <div class="row stack">
                <div class="column">
                    This is a stacked page element
                </div>
            </div>
            <div class="row">
                <div class="column">...</div>
            </div>
        </div>
    </div>
    <pre><code class="html">&lt;div class="stack"&gt;This is a stacked page element&lt;/div&gt;</code></pre>

    <p>For grid columns, you can choose to apply <a href="#grid-gutter">gutters</a> which will automatically space out the columns both horizontally as vertically.</p>

</section>
<section>
    <h3 id="spacing-inline">.inline</h3>

    <p>Handle horizontal spacing with <code>.inline</code>. This can be used to space out small elements, e.g. between an image and its paragraph on the right.</p>
    <p>
        You can opt to use a <code>.inline-group</code> class on the parent element. This will effect its child elements to behave as if they are given the <code>.inline</code> style. Ideal for spacing elements in sequence like pills, tags, breadcrumbs or buttons.</p>

    <div class="dummy">
        <ul class="inline-dummy inline-group-s">
            <li>Home</li>
            <li>></li>
            <li>Category</li>
            <li>></li>
            <li>Subcategory</li>
            <li>></li>
            <li>Item</li>
        </ul>
    </div>
    <pre>
&lt;ul class="breadcrumb inline-group"&gt;
&lt;li&gt;Home&lt;/li&gt;
&lt;li&gt;&gt;&lt;/li&gt;
...
&lt;/ul>

// Is the same as setting inline on each element
&lt;ul class="breadcrumb"&gt;
&lt;li class="inline"&gt;Home&lt;/li&gt;
&lt;li class="inline"&gt;&gt;&lt;/li&gt;
...
&lt;/ul></pre>
</section>

    <h3 id="spacing-inset">.inset</h3>

    <p>Padding of an element can be managed by <code>.inset</code>, <code>.stretched</code> or <code>.squished</code>. Inset is the most common and sets a square padding (equal padding on four sides of the element).</p>

    <h3 id="spacing-squished">.squished</h3>

    <p>A squished inset stretches horizontally. It reduces space top and bottom by 50% of the inset.
        This is mostly used for buttons and cell-like containers as tables or lists</p>

    <h3 id="spacing-stretched">.stretched</h3>

    <p>A stretched padding is the opposite of squished. It stretches vertically and is ideally for textboxes and other form elements</p>

    <div class="dummy dummy-inset">
        <div class="row gutter">
            <div class="column inset zebra">
                <div class="inside-element center-center">.inset</div>
            </div>
            <div class="column squished zebra">
                <div class="inside-element center-center">.squished</div>
            </div>
            <div class="column stretched zebra">
                <div class="inside-element center-center">.stretched</div>
            </div>
        </div>
    </div>

    <h3 id="spacing-sizes">Sizes</h3>
    <p>
        Each of these classes are available in 5 different sizes:
        <code>xs, s, m (default), l and xl</code>
        This allows you to play with different spacings.
    </p>

    <div class="dummy dummy-inset">
        <div class="row gutter top">
            <div class="column inset-xs zebra">
                <div class="inside-element center-center">.inset-xs</div>
            </div>
            <div class="column inset-s zebra">
                <div class="inside-element center-center">.inset-s</div>
            </div>
            <div class="column inset zebra">
                <div class="inside-element center-center">.inset</div>
            </div>
        </div>
        <div class="row gutter stack top">
            <div class="column inset-l zebra">
                <div class="inside-element center-center">.inset-l</div>
            </div>
            <div class="column inset-xl zebra">
                <div class="inside-element center-center">.inset-xl</div>
            </div>
        </div>
    </div>

</section>

<!-- end spacing -->

<!-- responsive -->
<section class="stack-l">

    <h3 id="responsive-spacing">Responsive sizes</h3>

    <p>The same breakpoint prefixes can be applied to the spacing classes. E.g. <code>.inset .l-inset-l</code> will set standard inset but from the large breakpoint a large inset will be applied. </p>

    <div class="dummy dummy-inset">
        <div class="row gutter">
            <div class="column inset l-inset-l zebra">
                <div class="inside-element center-center">.inset .l-inset-l</div>
            </div>
        </div>
    </div>
    <div class="text-center font-s"><em>Resize the viewport to view the change. Active breakpoint is <span class="active-breakpoint-text"></span></em>. </div>

</section>