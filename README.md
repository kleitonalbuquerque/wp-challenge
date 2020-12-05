<p align="center">
  <img src="/data/lottaleben.png" alt="lottaleben" />
</p>

# Full Stack Challenge

> **Lucas Araujo - Full Stack Developer**
> Version 1.0.1
> November 23, 2020

## 1 - Introduction

This document shall provide all the necessary information about the challenge and the rules that
need to be respected.

## 2 - Rules

To combine lots of projects with lots of developers, we take reusability and code maintenance
very seriously. Without going to much into detail here, there are some aspects we require you to
show us in the test project.

### 2.1 - General
- Never create your own little blackbox.
- Be transparent.
- Show development progress on GitHub.
- If you have questions: Always ask!

### 2.2 - PHP
- Coding standards matter! We use [PSR-1](https://www.php-fig.org/psr/psr-1/)/[PSR-2](https://www.php-fig.org/psr/psr-2/). So should you (at least for this test).
- WordPress mostly lacks OOP - But you should build your stuff based on best pratice design
patterns.
- Help others understand your work. Meaningful code comments ([phpdoc](http://docs.phpdoc.org/getting-started/your-first-set-of-documentation.html)), class/function/-
variable names or both. Your call.
- Use [composer](https://getcomposer.org/) to install and autoload stuff. Feel free to use libraries.
- If there is a WordPress function: Use it!
- [i18n](https://developer.wordpress.org/themes/functionality/internationalization/) is key, everything should be translateable. Main language is always english.

### 2.3 - Templates
- Always use HTML5 semantics where possible ([Info 1](https://codepen.io/mi-lee/post/an-overview-of-html5-semantics) + [Info 2](http://diveinto.html5doctor.com/semantics.html))
- For HTML best practices check [this guide](https://www.themelocation.com/best-html5-practices/).
- Never use inline scripts.
- Never use camelCase for classes or data attributes.
- Always use camelCase for ids.

## 3 - Challenge briefing

This project contains a Custom Post Type (events), the ACF Pro plugin and a Child theme. The request below is specifically to those items.

Use this repository code and instructions bellow to install a Wordpress site. You have two challenges, one more frontend and the other more backend oriented, both are equally important. Note that is also important to give us instructions on how to install and use your sollution.

The preferred way to delivery the resolution of your test is via Github or other git provider.

### 3.1 - Collapsed dates

Our hypothetical client suggest us to change how we display dates. Change the Events template to group all **common** days inside of one Accordion element. So instead of a list of paragraphs on the "Park juice" event:

> Juice presentation: 19/11/2020 12:00 am -
>
> Select your Juices: 19/11/2020 1:00 am -
>
> Juice extravaganza : 19/11/2020 2:00 am -

we would have an Accordion element ([reference](https://getbootstrap.com/docs/4.0/components/collapse/#accordion-example)):

| 19/11/2020
|---
| Juice presentation: 12:00 am
| Select your Juices: 1:00 am
| Juice extravaganza : 2:00 am

Feel free to use any library, tool or language to achieve this functionality like LESS, SASS, Webpack, jQuery, Typescript or Bootstrap.

### 3.2 - Migration from one structure to the other

We decided that Repeater fields are too expensive and want to migrate to a list of 5 fields max, instead of using one field. The desired outcome is to have 5 fields for each Start, End and Text fields.

How would you do that? You can create a Plugin, Options page, Ajax call or whatever is better suited for you but, remember that we can't lose information previously stored on the database. Adjust the code on the template to reflect this change too.

#### Example:

| Before | After
|---|---
| <img src="/data/before.png" alt="before" /> | <img src="/data/after.png" alt="after" />

_Note: This example shows only 3 fields, but we need 5._

### 3.3 - Bonus

What you suggest to change on the code or structure of the child theme to make it better?

## 4 - Installation

1. Clone this repository on your local environment. After that, on the repository folder, run `composer`:
```sh
composer install
```
2. Duplicate `config/local.php.example` and save it as `local.php` and fill with your database configuration.
3. Go to your local website URL and do the Wordpress installation steps.

### 4.1 - On Wordpress

1. Activate the `Twenty Seventeen (child)` theme
2. Activate the `Advanced Custom Fields PRO` plugin
3. Import `data/content.xml` into Wordpress.
