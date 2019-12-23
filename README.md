# Ambab SkipShipping [BETA]

THIS EXTENSION IS STILL IN DEVELOPMENT AND NOT READY FOR USE.

A simple extension for magento 2.
This extension enables the system to skip the shipping method from the cart and checkout step when there is only one shipping method enabled from the admin backend. 

#Installation

Install the extension through composer package manager.

composer require ambab/module-skipshipping
bin/magento module:enable Ambab_SkipShipping

You can check if the module has been installed using 
bin/magento module:status

Then Flush cache
bin/magento cache:flush

You should be able to see Ambab_SkipShipping in the module list

Go to Admin -> Stores -> Configuration -> Ambab -> SkipShipping to configure SkipShipping

If you do not see Skip Shipping Module, please clear your Magento Cache from your admin panel (System -> Cache Management).

Support
Visit www.ambab.com for support requests.


