# Required input

## State

`LOCAL_READY`

## Next checkpoint: repository mode

The supplied repository already contains an application and has unrelated Git history. Choose one option in ordinary text:

- Continue with the existing `Business-base/sp-calendar-b24` application and adapt its environment conservatively.
- Provide an empty GitHub repository for the newly generated scaffold.

No remote mutation will be performed until this choice is explicit. Do not send passwords, tokens, SSH private keys, or JSON.

## Completed locally

- Laravel 13 application created without Docker.
- PostgreSQL application and test databases created and migrated.
- Redis, queue, scheduler, tests, production build, health endpoint, and Bitrix24 browser gate verified.
- No known secrets detected in tracked project files.
