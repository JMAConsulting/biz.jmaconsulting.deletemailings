# Delete Draft/Unscheduled Mailings periodically

#### biz.jmaconsulting.deletemailings

## Overview

This extension deletes mailings that are unscheduled after a period of days specified.

## Installation

1. If you have not already done so, setup Extensions Directory
    1. Go to Administer >> System Settings >> Directories
        1. Set an appropriate value for CiviCRM Extensions Directory. For example, for Drupal, [civicrm.files]/ext/
        1. In a different window, ensure the directory exists and is readable by your web server process.
    1. Click Save.
1. If you have not already done so, setup Extensions Resources URL
    1. Go to Administer >> System Settings >> Resource URLs
        1. Beside Extension Resource URL, enter an appropriate values such as [civicrm.files]/ext/
    1. Click Save.
1. Install Delete Draft/Unscheduled Mailings periodically extension
    1. Go to Administer >> Customize Data and Screens >> Manage Extensions.
    1. Click on Add New tab.
    1. If Delete Draft/Unscheduled Mailings periodically is not in the list of extensions, manually download it and unzip it into the extensions direction setup above, then return to this page.
    1. Beside Delete Draft/Unscheduled Mailings periodically, click Download.
    1. Review the information, then click Download and Install.
1. Setup Delete Unscheduled Mailings Schedule Job
    1. Go to Administer >> System Settings >> Scheduled Jobs.
    1. Enable Delete Unscheduled Mailings Schedule Job if not enabled.
        1. Besides Delete Unscheduled Mailings click on more link and then Enable.
    1. Edit the Job to update days params
        1. By default # days is set to 30 i.e the job will delete 30 days old draft or unscheduled mailings.

JMA Consulting developed and maintains this extension.

Many thanks to Yee Hong Center for Geriatric Care for sponsoring the development of this extension.
