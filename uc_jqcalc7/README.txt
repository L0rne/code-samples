
-- SUMMARY --


This module extends uc_attribute to work with a custom quantity discount scheme.  Each product contains fields that allow a product discount based on the quantity of product chosen.  Each attribute has a setting to allow or disallow the bulk discount for that attribute.  Attribute options were also altered to have a flat "setup" price as well as the standard price per unit. 

On the front end, the user sees a "Price Calculator", which is a modified version of the standard uc_attribute form, and jquery generated price, which includes the quantity discount.

The same discounts are calculated for cart and checkout values.

This module won't work outside of the site it was designed for, because it relies on a modified version of Ubercart.





-- REQUIREMENTS --

Requires Ubercart (https://www.drupal.org/project/ubercart) with uc_attribute enabled.



-- INSTALLATION --

* Install as usual, see http://drupal.org/node/895232 for further information.



-- CONFIGURATION --

None.


-- CUSTOMIZATION --

None.

