
-- SUMMARY --


1) Integrates Ubercart with the balance_tracker module.  The site allows purchase without pay, in which case a debit is added to the tracker, allowing for a running tally of amount owing for the purchasing user.  Also adds details to the balance tracker db regarding the purchased item.

2) Saves the price and order number to fields on purchased nodes.

3) Adds details from purchased node fields to cart and checkout panes, as well as changing cart and checkout product titles to edit links for purchased nodes.

4) Adds some custom form validation.

5) Adds some alternate invoice templates.

6) Various other small changes to the system.




-- REQUIREMENTS --

Requires the Balance Tracker module (https://www.drupal.org/project/balance_tracker).

Requires Ubercart (https://www.drupal.org/project/ubercart).

Requires Ubercart Optional Checkout Review (https://www.drupal.org/project/uc_optional_checkout_review).

Requires Ubercart Pay After Checkout (https://www.drupal.org/sandbox/firewing1/1229572).

-- INSTALLATION --

* Install as usual, see http://drupal.org/node/895232 for further information.



-- CONFIGURATION --

None.


-- CUSTOMIZATION --

None.

