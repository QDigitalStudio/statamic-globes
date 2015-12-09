Statamic Add-on - Globes
========================

An add-on for the [Statamic CMS](http://statamic.com/) to give admins the ability to edit a theme's global variables.

Installation & Setup
------------

1. Download and unzip statamic-globes.

2. Drag `_add-ons/globes` into your site's `_add-ons` folder.

3. Open your `_config/settings.yaml` file and add `globes:true` to the `_admin_nav` setting.

4. Open your `_themes/[theme-name]/theme.yaml` file define the global variables you want to be editable.

5. Create your yaml array of variables

```
    globals:
      -
        name: phone
        display: Phone
        value: 555-555-5555
```

If you wanted to add another global variable, say an email address, your `globals` variable would look like so:

```
    globals:
      -
        name: phone
        display: Phone
        value: 555-555-5555
      -
        name: email
        display: Email
        value: you@yourdomain.com
```

The allowed types are:

* `checkbox`
* `checkboxes`
* `date`
* `markitup`
* `radio`
* `redactor` - no file uploads however
* `select`
* `tags`
* `table`
* `text`
* `textarea`
* `time`
* `users`


Usage
------------
There are two available methods in the plugin. The default method used by calling globes will return the value of the requested variable. Using globes:check you can condition the output based on the value of the variable being true or false. Globes doesn't work with standard if statements use globes:check instead.

```
  {{ globes:check name="<name>"}}
    {{ globes name="<name>" }}
  {{ /globes:check }}
```
