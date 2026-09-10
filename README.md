
# Shum's Cafe Landing Page

## Introduction

This project is a responsive product landing page for **Shum's Cafe**, a family-owned cafe in Poblacion Uno, Pagsanjan. The page presents the cafe story, Filipino comfort food, coffee and milk tea offerings, ordering preview, customer reviews, loyalty CTA, and contact details in one focused experience.

### What Is a Product Landing Page?

A product landing page is a focused webpage designed to guide visitors toward a primary action such as ordering, viewing a menu, signing up, or contacting a business. This project uses a clear visual hierarchy and direct calls to action so visitors can understand the cafe offering quickly on any device.

### Why Landing Pages Matter

- **Higher conversion potential:** Focused content reduces distractions and makes CTAs easier to find.
- **Targeted communication:** The page speaks directly to nearby cafe customers and regulars.
- **Measurable interaction:** Buttons, ordering controls, view modes, and status components create clear interaction points.

---

## Project Objectives

- Build a mobile-first interface with Laravel Blade and Tailwind CSS.
- Use reusable Blade components for navigation, buttons, cards, hero content, and footer content.
- Support desktop, tablet, and mobile layouts without horizontal overflow.
- Apply accessible labels, focus states, escaped dynamic text, and useful image alt text.
- Add Alpine.js interactions for ordering customization, favorites, cart feedback, store status, and pickup status.
- Document the iterative transition from a basic wireframe to a polished cafe landing page.

---

## Technology Stack

- Laravel 11 application structure
- Blade templates and Blade components
- Tailwind CSS via CDN configuration in the base layout
- Alpine.js via CDN for lightweight interactivity
- Google Fonts: Playfair Display and DM Sans
- Local image assets in `public/images/`

---

## Responsive Web Design

The interface is mobile-first. Base classes support small screens, then Tailwind prefixes progressively enhance the layout.

- **Mobile:** Stacked sections, compact navigation, single-column cards, smaller headings, and reduced vertical spacing.
- **Tablet:** Wider content area, two-column feature and ordering layouts where space permits, and contained card widths.
- **Desktop:** Split hero, expanded navigation, multi-column features, pricing, reviews, and footer layout.
- **Flexbox:** Used for navigation, CTA groups, card metadata, and the loyalty section.
- **CSS Grid:** Used for feature cards, pricing cards, ordering previews, testimonials, and footer columns.
- **Overflow safety:** The page shell uses `min-w-0` and `overflow-x-hidden`; large headings use `break-words` to prevent mobile spillover.

### Recommended Test Sizes

| View | Width | Height |
|---|---:|---:|
| Desktop | 1440px | 900px |
| Tablet | 768px | 1024px |
| Mobile | 390px | 844px |

---

## Tailwind CSS Implementation

Tailwind utilities are used directly in the Blade templates. The shared palette is defined in `resources/views/layouts/app.blade.php`.

### Example Feature Card

```html
<div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
    <x-feature-card
        title="Filipino Comfort Food"
        description="Affordable home-style dishes made with familiar flavors."
        icon="coffee"
    />
</div>

Responsive Hero Layout

The hero uses a mobile-first single-column layout and becomes a desktop split:

<div class="grid gap-8 sm:gap-12 lg:grid-cols-[1fr_0.9fr]">
    <!-- cafe copy and interactive food card -->
</div>


---

Blade Components Architecture

resources/views/pages/landing.blade.php composes the page, while reusable UI patterns live in resources/views/components/.

Components

x-navbar: Responsive navigation, mobile menu, and Auto/Desktop/Tablet/Mobile preview switcher.

x-button: Shared CTA variants, sizes, hover states, focus rings, and active press states.

x-hero: Cafe introduction and interactive food card with favorite and add-to-order controls.

x-feature-card: Repeatable cafe value proposition cards.

x-quick-reorder-card: Alpine-powered item, sugar, ice, side, price, and cart customization preview.

x-live-order-status-card: Pickup status modal with simulated status changes.

x-pricing-card: Reusable package offer cards.

x-testimonial-card: Escaped review output and initials-based user avatars.

x-footer: Grouped contact details, operating hours, social links, and store status badge.


This structure keeps page composition readable and makes repeated UI behavior easier to maintain.


---

Interactive Features

Live Order Preview

The order preview updates without a page refresh.

Visitors can change:

Menu item

Sugar level

Ice level

Side dish

Calculated total

Cart count

Confirmation state


Dynamic Store Status

The footer uses the browser time and weekday to display an open or closed badge.

Operating hours:

Weekdays: 6:30 AM – 8:00 PM

Weekends: 7:00 AM – 9:00 PM


The badge refreshes every minute.

Pickup Status Simulation

The order status widget cycles through:

1. Preparing


2. Ready


3. Picked Up



The current simulation can later be replaced with a Laravel Reverb event listener without redesigning the component.


---

UI/UX Design Principles

Color Palette

The design uses:

Espresso

Crema

Oat

Amber

Terracotta

Sage


These colors create a warm and welcoming cafe identity.

Typography

Playfair Display: Used for major headings and editorial-style text.

DM Sans: Used for readable interface and body copy.


Contrast

Primary text uses espresso, while status and CTA colors are reserved for meaningful actions.

Buttons

CTAs include:

Hover lift

Active press scaling

Keyboard focus rings

Clear labels

Visual feedback


Cards

Cards use:

Restrained borders

Soft shadows

Rounded corners

Consistent internal padding


This creates visual grouping without unnecessary clutter.

Accessibility

The interface includes:

Semantic headings

Descriptive labels

Escaped Blade output

Focus-visible states

Image alt text

Responsive layouts

Keyboard-friendly controls



---

Folder Structure

week05-product-landing-page/
│
├── README.md
│
├── app/
│
├── public/
│   └── images/
│
├── routes/
│   └── web.php
│
├── resources/
│   ├── css/
│   │   └── app.css
│   │
│   ├── js/
│   │   └── app.js
│   │
│   └── views/
│       │
│       ├── components/
│       │   ├── button.blade.php
│       │   ├── feature-card.blade.php
│       │   ├── footer.blade.php
│       │   ├── hero.blade.php
│       │   ├── live-order-status-card.blade.php
│       │   ├── navbar.blade.php
│       │   ├── pricing-card.blade.php
│       │   ├── quick-reorder-card.blade.php
│       │   └── testimonial-card.blade.php
│       │
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       └── pages/
│           └── landing.blade.php
│
└── tests/


---

Screenshots

The responsive preview assets are real captures from the running Laravel website. They show the first viewport only so the README stays compact and easy to scan.

Responsive Device Views

Desktop



Tablet



Mobile



Project Structure






---

Before-and-After Evolution

Phase	Description

Before	Basic landing page structure focused on content placement and section order.
Iteration	Added reusable Blade components, responsive grids, warm cafe branding, local imagery, and clearer CTA hierarchy.
After	Added responsive safeguards, interactive Alpine previews, dynamic store status, status simulation, accessible states, and polished visual rhythm.



---

Local Setup

1. Install Dependencies

composer install

2. Create Environment File

Windows:

copy .env.example .env

Mac/Linux:

cp .env.example .env

3. Generate Application Key

php artisan key:generate

4. Start the Laravel Server

php artisan serve

Open the application in your browser:

http://127.0.0.1:8000


---

Useful Validation Commands

Cache Blade Views

php artisan view:cache

Run Tests

php artisan test


---

Testing Responsive Views

1. Open the local app in Chrome or Edge.


2. Press Ctrl + Shift + M to open device emulation.


3. Test the following screen sizes:

1440 × 900

768 × 1024

390 × 844



4. Confirm there is no horizontal scroll.


5. Confirm text does not overlap.


6. Confirm cards stay inside the viewport.


7. Confirm mobile navigation opens correctly.


8. Test the interactive ordering controls.


9. Test the favorite and add-to-order controls.


10. Test the store status indicator.


11. Test the pickup status simulation.


12. Use the navbar View control to cycle through:



Auto

Desktop

Tablet

Mobile



---

Conclusion

Shum's Cafe Landing Page combines responsive design, reusable Laravel Blade components, Tailwind CSS utilities, and Alpine.js interactions into a polished cafe website experience.

The project focuses on usability, accessibility, responsive behavior, clear calls to action, and reusable component architecture while maintaining a warm Filipino cafe visual identity.