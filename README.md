# uk.countrytrust.reroute_email

<!-- ![Screenshot](/images/screenshot.png) -->

This is a CiviCRM extension that does one simple thing - redirects ANY email from CiviCRM to an email address of your choice. Please note that this does not affect Drupal (or whatever CMS you use). I use the excellent Reroute Email module for Drupal to achieve that for any email sent from the CMS.

This extension solves the issue of non technical users who do not have development environments with access to tools like MailHog, or the ability to read email redirected to the database. This means that they can safely UAT a system and test formatted emails that are read in a variety of email clients customers use.

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v7.2+ (tested with 7.4x)
* CiviCRM v5.4x (tested with 5.48)

## Installation (Web UI)

Learn more about installing CiviCRM extensions in the [CiviCRM Sysadmin Guide](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/).

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl uk.countrytrust.reroute_email@https://github.com/chumkui/uk.countrytrust.reroute_email/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/FIXME/uk.countrytrust.reroute_email.git
cv en reroute_email
```

## Getting Started

(* FIXME: Where would a new user navigate to get started? What changes would they see? *)

## Known Issues

(* FIXME *)
