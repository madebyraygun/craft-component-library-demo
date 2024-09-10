Our goal is to make our websites accessible and usable for as many people as possible, regardless of ability or technology limitations. That means we think & design accessibly, follow [a11y](https://www.a11yproject.com/about/) best practices in our code, and test our work along the way.

POUR is an acronym for four high-level principles that describe functional accessibility. [Accessible technology is *Perceivable, Operable, Understandable,* and *Robust*](#pour). In addition to websites, most other information technology can be made accessible by applying the POUR principles. Many of the technology challenges faced by people with disabilities can be described using one of the POUR principles.

## Examples of accessibility in web design

- Color contrast and type size meet accessibility standards.
- Use obvious section headings to make content more easy to read and navigate
- Don't rely on color alone to convey meaning or functionality. For example, use symbols in your alert messages, or underlines on your links.
- Design a focus state for all interactive elements, including a visible outline.

## Examples of accessibility in web development

- Test keyboard navigation and make sure there are no keyboard traps in your page
- Make sure any autoplaying audio or video can be paused
- Provide alt text and transcriptions for audiovisual media
- Disable animation for users with "prefers-reduced-motion" setting enabled
- Use automated and manual tools to test for accessibility errors

## Links

- [Giving-a-damn-about-accessibility.pdf](https://s3-us-west-2.amazonaws.com/secure.notion-static.com/5b8eadbb-7628-4ee2-93ee-ce491bcc8606/Giving-a-damn-about-accessibility.pdf)
- [Create Accessible Content](https://accessibility.princeton.edu/how/content)
- [Writing for Web Accessibility](https://www.w3.org/WAI/tips/writing/)
- [The Writer's Guide to Making Accessible Web Content](https://zapier.com/blog/accessible-web-content/)
- [Top tips for publishing accessible written content](https://abilitynet.org.uk/webinars/top-tips-publishing-accessible-written-content)
- [Auditing Design Systems for Accessibility](https://www.deque.com/blog/auditing-design-systems-for-accessibility/)
- [How To Bake Layers Of Accessibility Testing Into Your Process](https://www.smashingmagazine.com/2021/04/bake-layers-accessibility-testing-process/)
- [W3C - Using ARIA](https://www.w3.org/TR/using-aria/)

## Tools

- [Axe-linter for VS Code](https://www.deque.com/blog/shift-further-left-with-deques-axe-linter-for-vs-code/)
- [WebAIM WCAG 2.0 checklist](https://webaim.org/standards/wcag/checklist)
- Your keyboard!
- [VoiceOver](https://webaim.org/articles/voiceover/)
- [Lighthouse](https://developers.google.com/web/tools/lighthouse)
- [Axe browser extension](https://www.deque.com/axe/browser-extensions/)
- [WAVE](https://wave.webaim.org/) (web page or Chrome extension)

___

<div id="pour"></div>
## POUR

POUR principles were developed to describe web accessibility, but they can be applied to almost any accessibility question.  Technology providers must ensure that their users all can perceive, operate, and understand their technology, and that the technology is robust enough to work across a spectrum of technologies, including assistive technology.

### Perceivable

Perceivability means the user can identify content and interface elements by means of the senses.  For many users, this means perceiving a system primarily visually, while for others, perceivability may be a matter of sound or touch. New and emerging technologies may include sensory cues for smell and taste; these would also be considered examples of "perceivable" technology.

**Examples**

- An online application form contains numerous input fields. If the field labels are not readable, how can she successfully complete the application form?
- A chart describes the change in a population over time. If a user cannot see the chart, how can she understand the data?
- An online training video narrates a process for completing a task. If the video is uncaptioned, how can a Deaf or Hard of Hearing user learn from the training how to complete the task?
- An online article is presented as a scanned PDF. If a user cannot read the PDF, can he learn the content of the article?
- A website's contact information is displayed in the footer. If the contrast is insufficient to distinguish between background and text, how can a low-vision or color-blind user contact the site owner?
- A kiosk requires users to touch the screen to access an interactive exhibit. If the touch-screen controls are out of reach of the user, how can she interact with the exhibit?

### Operable

Operability means that a user can successfully use controls, buttons, navigation, and other necessary interactive elements.  For many users, this means identifying an interface control visually, and then clicking, tapping, or swiping.  For other users, using a computer keyboard or voice commands may be the only means by which they can operate and control the interface.

**Examples**

- A navigation menu reveals a submenu of links when a user hovers over it with a mouse. If the menu doesn't expand when it receives focus, how can a keyboard user access the submenu?
- A website's social media links can be activated with a click of the mouse. If the links don't receive keyboard focus, how can a keyboard user follow the links to social media?
- An online form permits a user to make multiple selections from a drop-down menu. If the user cannot simultaneously press a Control key and click on the menu, how can she make multiple selections?

### Understandable

Understandable technology is consistent in its presentation and format, predictable in its design and usage patterns, concise, multimodal, and appropriate to the audience in its voice and tone.  Users should be able to comprehend the content, and learn and remember how to use the interface.

**Examples**

- A website's navigation consists of a number of links that are displayed in a different order from page to page. If a user has to relearn basic navigation for each page, how can she effectively move through the website?
- A PDF registration form contains required email and phone number fields. If the form doesn't inform the user when there is an input error, how can the user understand why the form cannot be submitted?
- A Word document contains a number of non-English words and phrases. If the languages are not indicated, how can assistive technology present the text correctly?
- A technical website makes use of numerous abbreviations, acronyms, and jargon. If these are never defined, how can users with disabilities (and others) understand the content?

### Robust

Robust I.T. is standards-compliant, and designed to function on all appropriate technologies.  Users should be able to choose the technology they use to interact with websites, online documents, multimedia, and other information formats.

**Examples**

- A website requires a specific version of a web browser to make use of its features. If a user doesn't or can't use that browser, how can that user experience the features of the site?
- A document format is inaccessible to a screen reader on a particular operating system. If a user employs that OS for day-to-day tasks, how can she gain access to the document?
- An online training video requires an inaccessible plug-in to play in the web browser. If the user can't play the video in an accessible video player, how can he participate in the training?
- A web application fails to include features for alternative inputs, such as keyboard or voice commands. Without such features, how can users of those alternative input methods use the application?
