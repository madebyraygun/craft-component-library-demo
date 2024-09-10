**General Guidelines**

- Build components for re-use, using [atomic design principles](https://atomicdesign.bradfrost.com/chapter-2/) (atom, molecule, organism, templates, pages)
- Always use flexible units (vw, vh, rem) when possible.
- Use CSS variables for theming when appropriate, rather than hard-coding style values into a component.
- Use grid or flex for layout rather than fixed height and absolute positioning whenever possible.
- Avoid [magic numbers](https://css-tricks.com/magic-numbers-in-css/). (That's what flex & grid are for! 😎 )
- Use `object-fit` + `srcset` instead of CSS background images.

**Follow BEM Methodology (Block, Element, Modifier) class naming methodology**

(From [https://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/](https://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/))

BEM is a front-end naming methodology is a smart way of naming your CSS classes to give them more transparency and meaning to other developers. They are far more strict and informative, which makes the BEM naming convention ideal for teams of developers on larger projects that might last a while.

The naming convention follows this pattern:

`.block {}
.block__element {}
.block--modifier {}`

- `.block` represents the higher level of an abstraction or component.
- `.block__element` represents a descendent of `.block` that helps form `.block` as a whole.
- `.block--modifier` represents a different state or version of `.block`.

For styling block elements, we use the SCSS shorthand, and repeat class names as necessary for modifiers:

```scss
.block {

  &__element {
    // shared styles
  }

  &--modifier {
    // modifier styles
  }

  &--modifer &__element {
      // scoped styles
   }
}
```
