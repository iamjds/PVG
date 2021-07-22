## WooCommerce integration

Theme customization involves integration and customization to product detail information within the admin view.

The following new sections have been added to the WooCommerce product details specifically for PVG needs:
- Characteristic data
- Feature data
- Growing information
- More colors (variants)
- Plant needs


## CRON Job processing

Utilize manual or scheduled WP CRON job to:
- Find new unique products to add to the WooCommerce product catalog
- Identify if a potential import product is a duplicate, and does not import
- Import latest image gallery
- Synchronize products with other related products
- Add/update secondary features and product meta data


## Logging

Clear logging capabilities have been added to each process of the CRON upload and synchronization.


## API integration

Once a Proven Winners API key has been granted, and the WP CRON job has been initiated, the `/api/v0/culture/search` and `/api/v0/plant/search` end points have been utilized to fetch the appropriate data in JSON format.


## Dependencies

The customized mechanisms and view templates of this theme are relient on the Proven Winners public API:  
https://www.provenwinners.com/api/documentation
