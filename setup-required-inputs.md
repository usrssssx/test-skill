# Required input

## State

`LOCAL_READY`

## Next checkpoint: CloudPanel PHP site

Create a PHP site for the test domain in CloudPanel. Use PHP 8.4 or 8.5 and make sure the document root can ultimately point to the Laravel `public` directory.

Instruction: https://delovayasreda.bitrix24.ru/mobile/marketplace/?id=277&base_id=15&scope=internal&node=419

Additional official CloudPanel reference: https://www.cloudpanel.io/docs/v2/frontend-area/add-site/

After creating it, reply in ordinary text with only these values:

- server IP or hostname;
- primary site user created by CloudPanel;
- test site URL.

Do not send the absolute site path or server password. The skill will determine the path over SSH after the deploy key is installed; a password will be requested only at the deploy-user checkpoint if required.

## Completed locally

- Laravel 13 application created without Docker.
- PostgreSQL application and test databases created and migrated.
- Redis, queue, scheduler, tests, production build, health endpoint, and Bitrix24 browser gate verified.
- No known secrets detected in tracked project files.
