# Views block override

This module allows overriding views contextual arguments and exposing sort from
the block setting form.

For a full description of the module, visit the
[project page](https://www.drupal.org/project/views_block_override).

Submit bug reports and feature suggestions, or track changes in the
[issue queue](https://www.drupal.org/project/issues/views_block_override).


## Table of contents

- Requirements
- Recommended modules
- Installation
- Configuration
- Maintainers


## Requirements

This module requires the following modules:

- [Views](https://www.drupal.org/docs/8/core/modules/views)


## Recommended modules

- [Block field](https://www.drupal.org/project/block_field)


## Installation

Install as you would normally install a contributed Drupal module. For further
information, see
[Installing Drupal Modules](https://www.drupal.org/docs/extending-drupal/installing-drupal-modules).


## Configuration

**General usage**

When adding a new views display for your block, choose 'Block with overrides'.
Additional checkboxes for overriding contextual filters and exposing sort will
be available at 'override settings'.

**Autocomplete**

If you add a validation criteria on an entity type on the contextual argument,
that will trigger an autocomplete field on the block form.

**Multiple contextual filters**

When configuring multiple contextual filters, the grouping of these filters is
done by an AND condition. If you want to change the condition to OR, we suggest
you use the [Views Contextual Filters OR](https://www.drupal.org/project/views_contextual_filters_or) module.

**Usage with Paragraphs**

Used in combination with a block field, this gives a lot of flexibility for
usage with Paragraphs.

**Usage with Layout Builder**

This gives a lot of flexibility for usage with Layout Builder.


## Maintainers

- Steven Van den Hout - [svdhout](https://www.drupal.org/u/svdhout)
- Stef De Waele - [stefdewa](https://www.drupal.org/u/stefdewa)
- Tim Diels - [tim-diels](https://www.drupal.org/u/tim-diels)

**This project has been sponsored by:**
- [Calibrate](https://www.calibrate.be)
   In the past fifteen years, we have gained large expertise in
   consulting organizations in various industries.
