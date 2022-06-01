# Scary Celery Blocks

## Rename this plugin
Run `npm run rename` to give this plugin a name and description. 

## Create a new block
1. Run `npm run block` to generate starting files for a new block.
2. Add the block to the `scary_celery_blocks_register_blocks` function.
```php
function scary_celery_blocks_register_blocks() {
  register_block_type_from_metadata(__DIR__ . '/[YOUR_BLOCK_DIRECTORY]');
}
```
