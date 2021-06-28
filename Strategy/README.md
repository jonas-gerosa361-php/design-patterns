## Goal
Practice the Strategy Design Pattern with PHP.
This pattern is used to solve the use of this kind of sittuation

    class Ship
    {
        public function calculateShippment($company, $packageWeight)
        {
            
            if ($company == 'xpto') {
                return 1.50;
            } else if ($company == 'acme' ) {
                return 3.50;
            } else if ($company == 'xpto2') {
                return 2.40;
            } else {
                return 2.30;
            }

        }
    }

***

**This example shows a implementation to solve this problem**
More examples can be found at link below:
https://designpatternsphp.readthedocs.io/en/latest/Behavioral/Strategy/README.html