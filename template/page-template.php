<?php 
    /* Template Name: Template */
    get_header();
?>

<main>
    <section class="sg-section">
        <div class="sg-head">
            <h2 class="heading h2">Typography</h2>
        </div>
        <div class="sg-block">
            <h5 class="sg-label">H1</h5>
            <h1 class="heading h1">This is a title</h1>
        </div>
        <div class="sg-block">
            <h5 class="sg-label">H1</h5>
            <h2 class="heading h2">This is a title</h2>
        </div>
        <div class="sg-block">
            <h5 class="sg-label">H1</h5>
            <h3 class="heading h3">This is a title</h3>
        </div>
        <div class="sg-block">
            <h5 class="sg-label">H1</h5>
            <h4 class="heading h4">This is a title</h4>
        </div>
        <div class="sg-block">
            <h5 class="sg-label">H1</h5>
            <h5 class="heading h5">This is a title</h5>
        </div>
    </section>
    <section class="sg-section">
        <div class="sg-block">
            <h5 class="sg-label">LARGE PARAGRAPH</h5>
            <p class="paragraph large">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Duis ut laoreet augue, ut viverra erat. 
                Fusce eget sem sapien. Morbi pulvinar rutrum dolor, a pulvinar nulla fringilla non.
            </p>
        </div>
        <div class="sg-block">
            <h5 class="sg-label">MEDIUM PARAGRAPH</h5>
            <p class="paragraph medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Duis ut laoreet augue, ut viverra erat. 
                Fusce eget sem sapien. Morbi pulvinar rutrum dolor, a pulvinar nulla fringilla non.
            </p>
        </div>
        <div class="sg-block">
            <h5 class="sg-label">SMALL PARAGRAPH</h5>
            <p class="paragraph small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Duis ut laoreet augue, ut viverra erat. 
                Fusce eget sem sapien. Morbi pulvinar rutrum dolor, a pulvinar nulla fringilla non.
            </p>
        </div>
        <div class="sg-block">
            <h5 class="sg-label">LIST</h5>
            <ul class="list">
                <li>First list item</li>
                <li>Second list item</li>
                <li>And finally the last list item</li>
            </ul>
        </div>
        <div class="sg-block">
            <h5 class="sg-label">LINK</h5>
            <a href="" target="_blank" class="link">This is a link</a>
        </div>
    </section>
    <section class="sg-section">
        <div class="sg-head">
            <h2 class="heading h2">Buttons</h2>
        </div>
        <div class="sg-grid">
            <div class="sg-block">
                <h5 class="sg-label">PRIMARY</h5>
                <a href="#" class="btn primary-btn">Sign Up</a>
            </div>
            <div class="sg-block">
                <h5 class="sg-label">SECONDARY</h5>
                <a href="#" class="btn secondary-btn">Learn more</a>
            </div>
            <div class="sg-block">
                <h5 class="sg-label">OUTLINE</h5>
                <a href="#" class="btn outline-btn">Get in touch</a>
            </div>
            <div class="sg-block">
                <h5 class="sg-label">MINIMAL</h5>
                <a href="#" class="btn minimal-btn">Learn more</a>
            </div>
            <div class="sg-block">
                <h5 class="sg-label">GREY</h5>
                <a href="#" class="btn grey-btn">Cancel</a>
            </div>
            <div class="sg-block">
                <h5 class="sg-label">DISABLED</h5>
                <a href="#" class="btn disable-btn">Not avaible</a>
            </div>
        </div>
    </section>
    <section class="sg-section">
        <div class="sg-head">
            <h2 class="heading h2">Forms</h2>
        </div>
        <div class="sg-field-block">
            <label for="name" class="field-label">Name</label>
            <input type="text" class="input text" placeholder="Enter your name">
        </div>
        <div class="sg-field-block">
            <label for="select" class="field-label">Email</label>
            <select name="Category" class="input sel">
                <option value>Select one...</option>
                <option value="option 1">Option 1</option>
                <option value="option 2">Option 2</option>
                <option value="option 3">Option 3</option>
            </select>
        </div>
        <div class="sg-field-block">
            <label for="textarea" class="field-label">Message</label>
            <textarea name="textarea" class="input textarea" placeholder="Enter your message here"></textarea>
        </div>
        <div class="sg-field-block row">
            <input type="checkbox" name="checkbox" class="checkbox">
            <label for="checkbox">I'm a checkbox</label>
        </div>
        <div class="sg-field-block row">
            <input type="radio" name="radio" class="radio">
            <label for="radio">I'm a radio button</label>
        </div>
        <input type="submit" value="Submit" class="submit btn">
    </section>
</main>

<?php
    get_footer();
?>