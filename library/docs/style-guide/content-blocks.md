## Markup

The default Content Block template shares a common markup and naming structure. Use BEM conventions for markup and styling.

```html
<div class="content-block block--%block-name%">
	<div class="block--%block-name%__inner">
		<div class="block--%block-name%__heading">
			<h2 class="heading-2">{{sectionHeading}}</h2>
		</div>
		<div class="block--%block-name%__content">
			<p>{{body}}</p>
		</div>
	</div>
</div>
```

## Controlling padding, spacing, and margins

Use common mixins to define padding and margins on content blocks. 

From `content-blocks.scss`:

```scss
%cb-is-default {
  @extend %cb-base;
  max-width: 110rem;
}
```

From `rich-text.scss` file:

```scss
.block--rich-text {
  &__inner {
    @extend %cb-is-default;
  }
}
```

All blocks start with a standard sibling selector padding definition in `content-blocks.scss`:

```scss
.content-block + .content-block {
  @include margin-top(6rem);
}
```

Specific blocks which require different spacing can use utility classes from `content-blocks.scss`: 
```scss
.spacing--compact + .spacing--compact {
  @include margin-top(6rem);
}
```

## Container queries

Prefer container queries over media queries for content blocks, as they can be embedded in a variety of layouts, especially pages with sidebars, and need to be styled according to the container size, not the screen size.


```scss
.inner {
  @extend %cb-is-default;
  @include section-padding();
  container-type: inline-size;
}

.block-content {
  @container(min-width: 40rem) {
    display: grid;
    gap: 6rem;
    grid-template-columns: 1fr 1fr;
    align-items: center;
  }
}

```