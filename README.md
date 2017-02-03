# faq-bundle

this README is currently in progress. Thank you for your understanding...

Designed to work fine with the DyweeCoreBundle providing great administration features

##Installing

just run
```bash
$ composer require dywee/faq-bundle
```

add the bundle to the kernel
```php
new Dywee\FaqBundle\DyweeFaqBundle(),
```

add the routing informations
```yml
dywee_faq:
    resource: "@DyweeFaqBundle/Controller"
    type: annotation
    prefix:   /
```

no more configuration needed
