# Required input

## State

`LOCAL_READY`

## Next checkpoint: CloudPanel PHP site

Create a PHP site for the test domain in CloudPanel. Use PHP 8.4 or 8.5 and make sure the document root can ultimately point to the Laravel `public` directory.

Official instruction: https://www.cloudpanel.io/docs/v2/frontend-area/add-site/

After creating it, reply in ordinary text with only these values:

- server IP or hostname;
- primary site user created by CloudPanel;
- actual absolute site path shown by CloudPanel;
- test site URL.

Do not send the server password yet. It will be requested only at the deploy-user checkpoint if required.

## Completed locally

- Laravel 13 application created without Docker.
- PostgreSQL application and test databases created and migrated.
- Redis, queue, scheduler, tests, production build, health endpoint, and Bitrix24 browser gate verified.
- No known secrets detected in tracked project files.
